<?php 

	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes 
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com
	
	// --------------------
	// Blog Entry Functions
	// --------------------

	function blog_entry_to_array ( $entryFile ) {
		// Reads a blog entry and returns an key/value pair array.
		//
		// Returns false on fail...
		global $sb_info;
		$blog_entry_data = array();
				
		$str = sb_read_file( $entryFile );
		$exploded_array = explode( '|', $str );
		
		if ( count( $exploded_array ) > 1 ) {
			if ( count( $exploded_array ) <= 6 ) {
				// Old List Format: subject, date, content, (mood, song)				
				$blog_entry_data[ 'VERSION' ]  = $sb_info[ 'version' ];
				$blog_entry_data[ 'SUBJECT' ]  = $exploded_array[0];
				$blog_entry_data[ 'DATE' ]     = $exploded_array[1];
				$blog_entry_data[ 'CONTENT' ]  = $exploded_array[2];
				
			} else {
				// New Format: key/value pairs
				//
				// The "keys/value" pairs can be in any order. Also, the only ones
				// that are required are VERSION, SUBJECT, DATE, and CONTENT.
				//
				// All the other keys are optional. Eventually the CATEGORY tag
				// will parse into an array of it's own (probably comma delimited...)
				//
				// VERSION, SUBJECT, DATE, CONTENT, (MOOD, SONG, CATEGORY, etc...)
				// Total count will be 14 items...
				
				$blog_entry_data = explode_with_keys( $exploded_array );
			}
			return( $blog_entry_data );
		} else {
			// Exploded array only contained 1 item, so something is wrong...
			return( false );
		}
	}
	
	function write_entry ( $blog_subject, $blog_text, $tb_ping, $updateFile, $blog_categories ) {
		// Save new entry or update old entry
		//
		// $updateFile will either be NULL or the name of the file
		// which is being updated (i.e. entry040603-140634)
		global $blog_config, $sb_info;
		
		$save_data = array();
		$save_data[ 'VERSION' ] = $sb_info[ 'version' ];
		$save_data[ 'SUBJECT' ] = clean_post_text( $blog_subject );
		$save_data[ 'CONTENT' ] = clean_post_text( $blog_text );
		if ( count( $blog_categories ) > 0 ) {
			$save_data[ 'CATEGORIES' ] = implode( ",", $blog_categories );
		}
		if ( $tb_ping !== '' ) {
			$save_data[ 'TB_PING' ] = clean_post_text( $tb_ping );
		}
		
		if ( $updateFile == true ) {
			// Updating an entry
			//
			// We need to grab the date of the old entry.
			if ( file_exists( $updateFile . '.txt' ) ) {
				$oldEntryFile = $updateFile . '.txt';
			} elseif ( file_exists( $updateFile . '.txt.gz' ) ) {
				$oldEntryFile = $updateFile . '.txt.gz';
			}
			
			$oldEntryArray = blog_entry_to_array( $oldEntryFile );
			$save_data[ 'DATE' ] = $oldEntryArray[ 'DATE' ];
			$y = date('y', $save_data[ 'DATE' ] );
			$m = date('m', $save_data[ 'DATE' ] );
			$permalink = 'index.php?y='.$y.'&m='.$m.'&entry='.substr($updateFile,strrpos($updateFile,'/')+1);
			
			// Delete the old file
			if ( $blog_config[ 'blog_enable_gzip_txt' ] ) {
				if ( file_exists( $updateFile . '.txt' ) ) {
					sb_delete_file( $updateFile . '.txt' );
				}
				$entryFile = $updateFile . '.txt.gz';
			} else {
				if ( file_exists( $updateFile . '.txt.gz' ) ) {
					sb_delete_file( $updateFile . '.txt.gz' );
				}
				$entryFile = $updateFile . '.txt';
			}
			
			// (We're just going to assume that the files and dirs exist...)
		} else {
			// Create an entry
			//
			// This is going to be a new entry.
			// We might need to create some directories.
			//
			// The directory and file structure is:
			// 'content/YY/MM/entryYYMMDD-HHMMSS.txt'
			// 'F j, Y, g:i a'
			$blog_date = time();
			$save_data[ 'DATE' ] = $blog_date;
			
			if (!file_exists('content')) {
				$oldumask = umask(0);
				$ok = mkdir('content', 0777 );
				umask($oldumask);
			}
			
			$dir = 'content/';
			$y = date('y');
			if (!file_exists($dir.$y)) {
				$oldumask = umask(0);
				$ok = mkdir($dir.$y, 0777 );
				umask($oldumask);
				if (!$ok) {
					return ( 'Couldn\'t creating directory: '.$dir.$y );
				}
			}
			$m = date('m');
			if (!file_exists($dir.$y.'/'.$m)) {
				$oldumask = umask(0);
				$ok = mkdir($dir.$y.'/'.$m, 0777 );
				umask($oldumask);
				if (!$ok) {
					return ( 'Couldn\'t creating directory: '.$dir.$y.'/'.$m );
				}
			}
			
			$stamp = date('ymd-His');
			if ( $blog_config[ 'blog_enable_gzip_txt' ] ) {
				$entryFile = $dir.$y.'/'.$m.'/'.'entry'.$stamp.'.txt.gz';
			} else {
				$entryFile = $dir.$y.'/'.$m.'/'.'entry'.$stamp.'.txt';
			}
			
			$permalink = 'index.php?y='.$y.'&m='.$m.'&entry=entry'.$stamp;
		}
		
		// Implode the array
		$str = implode_with_keys( $save_data );
		
		// Save the file		
		$result = sb_write_file( $entryFile, $str );
		
		// Result
		if ( $result ) {
			// Send Pings
			$url_array = explode( ',', $blog_config[ 'blog_ping_urls' ] );
			if ( is_array( $url_array ) ) {
				for ( $i = 0; $i < count( $url_array ); $i++ ) {
					sb_ping( $url_array[ $i ] );
				}
			}
			
			// Trackback pings?
   	   if ( $blog_config[ 'blog_trackback_enabled' ] ) {
   	      trackback_ping( $tb_ping, $blog_subject, $permalink, $blog_text );
   	   }
   	   
			return ( true );
		} else {
			// Error:
			// Probably couldn't create file...
			return ( $entryFile );
		}
	}
	
	function implode_with_keys( $array ) {
		// Implode an associative array
		$str = '';
		$keys = array_keys( $array );
		for ( $i = 0; $i < count( $keys ); $i++ ) {
			$key = $keys[ $i ];
			if ( $i > 0 ) {
				$str = $str . '|';
			}
			$str = $str . $key . '|' . $array[ $key ];
		}
		
		return ( $str );
	} 
	
	function explode_with_keys( $str ) {
		// Explode an associative array
		//
		// For historical reasons, accepts either
		// a string or an array
		$output = array();
		if ( is_array( $str ) ) {
			$array = $str;
		} else {
			$array = explode( '|', $str );
		}
		
		for ( $i = 0; $i < count( $array ); $i = $i + 2 ) {
			$key = $array[ $i ];
			$output[ $key ] = $array[ $i+1 ];
		}
		
		return ( $output );
	} 
	
	function delete_dir( $dir ) {
		// Get listing of files in folder.
		$file_array = sb_folder_listing( $dir . '/', array( '.txt', '.gz' ) );
		if ( count( $file_array ) == 0 ) {
			// Directory is empty, delete it...
			sb_delete_directory( $dir );
		} else {
			for ( $i = 0; $i < count( $file_array ); $i++ ) {
				sb_delete_file( $dir . '/' . $file_array[$i] );
				delete_most_recent( $file_array[$i] );
			}
			sb_delete_directory( $dir );
		}
	}
	
	function delete_entry( $entry, $path ) {
		// Delete Entry File
		if ( file_exists( $path . $entry . '.txt' ) ) {
			$ok = sb_delete_file( $path . $entry . '.txt' );
		}
		if ( file_exists( $path . $entry . '.txt.gz' ) ) {
			$ok = sb_delete_file( $path . $entry . '.txt.gz' );
		}
		
		delete_dir( $path . $entry . '/comments');
		delete_dir( $path . $entry . '/trackbacks');
		delete_dir( $path . $entry);
		
		return ( $ok );
	}

	// ----------------
	// Rating Functions
	// ----------------
	
	function write_rating( $y, $m, $entry, $rating ) {
		// Save Rating
		$result_array = read_rating( $y, $m, $entry, $rating );
		if ( $result_array ) {
			$result_array[ 'points' ] = $result_array[ 'points' ] + $rating;
			$result_array[ 'votes' ] = $result_array[ 'votes' ] + 1;
		} else {
			$result_array = array();
			$result_array[ 'points' ] = $rating;
			$result_array[ 'votes' ] = 1;
		}
		
		$str = '';
		$keys = array_keys( $result_array );
		for ( $i = 0; $i < count( $keys ); $i++ ) {
			$key = $keys[ $i ];
			if ( $i > 0 ) {
				$str = $str . '|';
			}
			$str = $str . $key . '|' . $result_array[ $key ];
		}
		
		$dir = 'content/'.$y.'/'.$m.'/'.$entry;
		if ( !file_exists( $dir ) ) {
			$oldumask = umask( 0 );
			$ok = mkdir( $dir, 0777 );
			umask( $oldumask );
			if ( !$ok ) {
				return( NULL );
			}
		}
		
		$filename = 'content/'.$y.'/'.$m.'/'.$entry.'/rating.txt';
		sb_write_file( $filename, $str );
	}
	
	function read_rating( $y, $m, $entry ) {
		// Read the rating.txt file and return the stored data.
		//
		// Returns NULL on fail.
		$rating_path = 'content/'.$y.'/'.$m.'/'.$entry.'/';
		$contents = sb_read_file( $rating_path . 'rating.txt' );
		
		if ( $contents ) {
			$result_array = array();
			
			$data_array = explode('|', $contents);
			$key_array = array( 'points', 'votes' );
			
			for ( $i = 0; $i < count( $data_array ); $i = $i + 2 ) {
				for ( $j = 0; $j < count( $key_array ); $j++ ) {
					if ( $data_array[ $i ] == $key_array[ $j ] ) {
						$key = $key_array[ $j ];
						$result_array[ $key ] = intval( $data_array[ $i+1 ] );
					}
				}
			}
			
			return( $result_array );
		}
	}
?>