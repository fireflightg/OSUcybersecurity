<?php 

	// The Simple PHP Blog is released under the GNU Public License.
	//
	// You are free to use and modify the Simple PHP Blog. All changes 
	// must be uploaded to SourceForge.net under Simple PHP Blog or
	// emailed to apalmo <at> bigevilbrain <dot> com
	
	// -------------------
	// Blog Feed Functions
	// -------------------


	function clean_rss_output ( $str ) {
		// Decode/Encode HTML output
		global $lang_string, $blog_config;
		//$str = html_entity_decode( $str, ENT_QUOTES, $lang_string['php_charset'] );
		//$str = htmlspecialchars( $str, ENT_QUOTES, $lang_string['php_charset'] );
		
		return( $str );
	}


	function generate_rss ( $max_entries=0 )
	{
		// Read entries by month, year and/or day. Generate HTML output.
		//
		// Used for the main Index page.
		global $lang_string, $blog_config, $user_colors, $sb_info;
		
		// Read custom feed footer
		$content_footer=sb_read_file( 'interface/feed.xml' );
		if ( $content_footer==NULL ) {
			$content_footer='';
		}
		
		$entry_file_array = blog_entry_listing();

		// Flip entry order
		if ( $blog_config[ 'blog_entry_order' ] == 'old_to_new' ) {
			$entry_file_array = array_reverse( $entry_file_array );
		}
		
		if ( ( dirname($_SERVER['PHP_SELF']) == '\\' || dirname($_SERVER['PHP_SELF']) == '/' ) ) {
			// Hosted at root.
			$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/';
		} else {
			// Hosted in sub-directory.
			$base_url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/';
		}
		
		header('Content-type: application/xml');
		echo "<?xml version=\"1.0\" encoding=\"" . $lang_string['php_charset'] . "\"?>\n";
		echo "<rss version=\"2.0\">\n";
		echo "\t<channel>\n";
		//Required channel fields
		echo "\t\t<title>" . clean_rss_output( $blog_config[ 'blog_title' ] ) . "</title>\n";
		echo "\t\t<link>" . $base_url . "index.php</link>\n";
		echo "\t\t<description><![CDATA[" . clean_rss_output( $blog_config[ 'blog_footer' ] ) . "]]></description>\n";
		// Read custom channel image
		if ( file_exists( 'interface/feed.png' ) ) {
			echo "\t\t<image>\n";
			echo "\t\t\t<url>" . $base_url . "interface/feed.png</url>\n";
			echo "\t\t\t<link>" . $base_url . "index.php</link>\n";
			echo "\t\t\t<title>" . clean_rss_output( $blog_config[ 'blog_title' ] ) . "</title>\n";
			echo "\t\t\t<description><![CDATA[" . clean_rss_output( $blog_config[ 'blog_title' ] ) . "]]></description>\n";
			echo "\t\t</image>\n";
		}
		//Optional channel fields
		echo "\t\t<copyright>" . clean_rss_output( 'Copyright ' . strftime( '%Y' ) . ', ' . $blog_config[ 'blog_author' ] ) . "</copyright>\n";
		echo "\t\t<managingEditor>" . clean_rss_output($blog_config[ 'blog_email' ] . ' (' . $blog_config[ 'blog_author' ] . ')' ) . "</managingEditor>\n";
		echo "\t\t<language>" . str_replace( '_', '-', $lang_string['locale'] ) . "</language>\n";
		echo "\t\t<generator>SPHPBLOG " . $sb_info[ 'version' ] . "</generator>\n";

		// Read entry files
		if ( $max_entries<=0 ) {
			$max_entries=min( $blog_config[ 'blog_max_entries' ], count( $entry_file_array ) );
		}
		else {
			$max_entries=min( $max_entries, count( $entry_file_array ) );
		}
		
		for ( $i = 0; $i < $max_entries; $i++ ) {
			list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $entry_file_array[ $i ] );
			$contents=blog_entry_to_array( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );
			
			echo "\t\t<item>\n";
			//Required item fields
			echo "\t\t\t<title>" . clean_rss_output( blog_to_html( $contents[ 'SUBJECT' ], false, false ) ) . "</title>\n";
			echo "\t\t\t<link>" . $base_url . 'index.php?entry=' . sb_strip_extension( $entry_filename ) . "</link>\n"; /* Changed the link URL */
			echo "\t\t\t<description><![CDATA[" . clean_rss_output( blog_to_html( $contents[ 'CONTENT' ], false, false ) ) . $content_footer . "]]>" . "</description>\n";
			//Optional item fields
			echo "\t\t\t<guid isPermaLink=\"true\">" . $base_url . '?entry=' . sb_strip_extension( $entry_filename ) . "</guid>\n"; /* Changed the guid URL */
			echo "\t\t\t<author>" . clean_rss_output( $blog_config[ 'blog_email' ] ) . "</author>\n";
			echo "\t\t\t<pubDate>" . gmdate( 'D, d M Y H:i:s', $contents[ 'DATE' ] ) . " GMT</pubDate>\n";
			
			// Only output if <comments> if they are enabled.
			if ( $blog_config[ 'blog_enable_comments' ] ) {
				echo "\t\t\t<comments>" . $base_url . 'comments.php?y=' . $year_dir . '&amp;m=' . $month_dir . '&amp;entry=' . sb_strip_extension( $entry_filename ) . "</comments>\n";
			}
			echo "\t\t</item>\n";
		}

		echo "\t</channel>\n";
		echo "</rss>\n";
	}

	function clean_rdf_output ( $str ) {
		// Decode/Encode HTML output
		global $lang_string, $blog_config;
		//$str = html_entity_decode( $str, ENT_QUOTES, $lang_string['php_charset'] );
		//$str = htmlspecialchars( $str, ENT_QUOTES, $lang_string['php_charset'] );
		
		return( $str );
	}


	function generate_rdf ( $max_entries=0 )
	{
		// Read entries by month, year and/or day. Generate HTML output.
		//
		// Used for the main Index page.
		global $lang_string, $blog_config, $user_colors, $sb_info;

		// Read custom feed footer
		$content_footer=sb_read_file( 'interface/feed.xml' );
		if ( $content_footer==NULL ) {
			$content_footer='';
		}
		
		$entry_file_array = blog_entry_listing();

		// Flip entry order
		if ( $blog_config[ 'blog_entry_order' ] == 'old_to_new' ) {
			$entry_file_array = array_reverse( $entry_file_array );
		}
		
		if ( ( dirname($_SERVER['PHP_SELF']) == '\\' || dirname($_SERVER['PHP_SELF']) == '/' ) ) {
			// Hosted at root.
			$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/';
		} else {
			// Hosted in sub-directory.
			$base_url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/';
		}
		
		header('Content-type: application/xml');
		echo "<?xml version=\"1.0\" encoding=\"" . $lang_string['php_charset'] . "\"?>\n";
		echo '<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:ref="http://purl.org/rss/1.0/modules/reference/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns="http://purl.org/rss/1.0/">' . "\n";
		echo '\t<channel rdf:about="' . $base_url . "/rss.rdf\">\n";
		//Required channel fields
		echo "\t\t<title>" . clean_rdf_output( $blog_config[ 'blog_title' ] ) . "</title>\n";
		echo "\t\t<link>" . $base_url . "index.php</link>\n";
		echo "\t\t<description><![CDATA[" . clean_rdf_output( $blog_config[ 'blog_footer' ] ) . "]]></description>\n";
		//Optional channel fields
		// Read custom channel image
		if ( file_exists( 'interface/feed.png' ) ) {
			echo "\t\t<image rdf:resource=\"" . $base_url . "interface/feed.png\" />";
		}
		echo "\t\t<copyright>" . clean_rdf_output( 'Copyright ' . strftime( '%Y' ) . ', ' . $blog_config[ 'blog_author' ] ) . "</copyright>\n";
		echo "\t\t<managingEditor>" . clean_rdf_output($blog_config[ 'blog_email' ] . ' (' . $blog_config[ 'blog_author' ] . ')' ) . "</managingEditor>\n";
		echo "\t\t<language>" . str_replace( '_', '-', $lang_string['locale'] ) . "</language>\n";
		echo "\t\t<generator>SPHPBLOG " . $sb_info[ 'version' ] . "</generator>\n";

		// Read entry files
		if ( $max_entries<=0 ) {
			$max_entries=min( $blog_config[ 'blog_max_entries' ], count( $entry_file_array ) );
		}
		else {
			$max_entries=min( $max_entries, count( $entry_file_array ) );
		}
		
		echo "\t\t<items>\n";
		echo "\t\t\t<rdf:Seq>\n";
		for ( $i = 0; $i < $max_entries; $i++ ) {
			list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $entry_file_array[ $i ] );
			//Required item fields
			echo "\t\t\t\t<rdf:li resource=\"" . $base_url . '?entry=' . sb_strip_extension( $entry_filename ) . "\" />\n";
		}
		echo "\t\t\t</rdf:Seq>\n";
		echo "\t\t</items>\n";
		
		for ( $i = 0; $i < $max_entries; $i++ ) {
			list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $entry_file_array[ $i ] );
			$contents=blog_entry_to_array( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );
			echo "\t\t<item rdf:about=\"" . $base_url . '?entry=' . sb_strip_extension( $entry_filename ) . "\">\n";
			//Required item fields
			echo "\t\t\t<title>" . clean_rdf_output( blog_to_html( $contents[ 'SUBJECT' ], false, false ) ) . "</title>\n";
			echo "\t\t\t<link>" . $base_url . 'index.php?entry=' . sb_strip_extension( $entry_filename ) . "</link>\n"; /* Changed the link URL */
			echo "\t\t\t<description><![CDATA[" . clean_rdf_output( blog_to_html( $contents[ 'CONTENT' ], false, false ) ) . $content_footer . "]]></description>\n";
			//Optional item fields
			echo "\t\t\t<guid isPermaLink=\"true\">" . $base_url . '?entry=' . sb_strip_extension( $entry_filename ) . "</guid>\n"; /* Changed the guid URL */
			echo "\t\t\t<author>" . clean_rdf_output( $blog_config[ 'blog_email' ] ) . "</author>\n";
			echo "\t\t\t<pubDate>" . gmdate( 'D, d M Y H:i:s', $contents[ 'DATE' ] ) . " GMT</pubDate>\n";
			echo "\t\t</item>\n";
		}
		echo "\t</channel>\n";
		echo "</rdf:RDF>\n";
	}


	function clean_atom_output ( $str ) {
		// Decode/Encode HTML output
		global $lang_string, $blog_config;
		$str = html_entity_decode( $str, ENT_QUOTES, $lang_string['php_charset'] );
		$str = htmlspecialchars( $str, ENT_QUOTES, $lang_string['php_charset'] );
		
		return( $str );
	}

	function generate_atom ( $max_entries=0 )
	{
		// Read entries by month, year and/or day. Generate HTML output.
		//
		// Used for the main Index page.
		global $lang_string, $blog_config, $user_colors, $sb_info;

		// Read custom feed footer
		$content_footer=sb_read_file( 'interface/feed.xml' );
		if ( $content_footer==NULL ) {
			$content_footer='';
		}
		
		$entry_file_array = blog_entry_listing();

		// Flip entry order
		if ( $blog_config[ 'blog_entry_order' ] == 'old_to_new' ) {
			$entry_file_array = array_reverse( $entry_file_array );
		}
		
		if ( ( dirname($_SERVER['PHP_SELF']) == '\\' || dirname($_SERVER['PHP_SELF']) == '/' ) ) {
			// Hosted at root.
			$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/';
		} else {
			// Hosted in sub-directory.
			$base_url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/';
		}
		
		header('Content-type: application/xml');
		echo "<?xml version=\"1.0\" encoding=\"" . $lang_string['php_charset'] . "\"?>\n";
		echo '<feed version="0.3" xmlns="http://purl.org/atom/ns#" xml:lang="' . str_replace('_', '-', $lang_string['locale']) . "\">\n";
		//Required channel fields
		echo "\t<title>" . clean_atom_output( $blog_config[ 'blog_title' ] ) . "</title>\n";
		echo "\t<link rel=\"alternate\" type=\"text/html\" href=\"" . $base_url . "index.php\" />\n";
		echo "\t<modified>" . gmdate( 'Y-m-d' ) . 'T' . gmdate( 'H:i:s' ) . "Z</modified>\n";
		//Optional channel fields
		echo "\t<author>\n";
		echo "\t\t<name>" . clean_atom_output( $blog_config[ 'blog_author' ] ) . "</name>\n";
		echo "\t\t<email>" . clean_atom_output( $blog_config[ 'blog_email' ] ) . "</email>\n";
		echo "\t</author>\n";
		echo "\t<copyright>" . clean_atom_output( 'Copyright ' . strftime( '%Y' ) . ', ' . $blog_config[ 'blog_author' ] ) . "</copyright>\n";
		echo "\t<generator url=\"http://www.sourceforge.net/projects/sphpblog\" version=\"" . $sb_info[ 'version' ] . "\">SPHPBLOG</generator>\n";

		// Read entry files
		if ( $max_entries<=0 ) {
			$max_entries=min( $blog_config[ 'blog_max_entries' ], count( $entry_file_array ) );
		}
		else {
			$max_entries=min( $max_entries, count( $entry_file_array ) );
		}
		
		for ( $i = 0; $i < $max_entries; $i++ ) {
			list( $entry_filename, $year_dir, $month_dir ) = explode( '|', $entry_file_array[ $i ] );
			$contents=blog_entry_to_array( 'content/' . $year_dir . '/' . $month_dir . '/' . $entry_filename );
			echo "\t<entry>\n";
			//Required item fields
			echo "\t\t<title>" . clean_atom_output( blog_to_html( $contents[ 'SUBJECT' ], false, false ) ) . "</title>\n";
			echo "\t\t<link rel=\"alternate\" type=\"text/html\" href=\"" . $base_url . "index.php?entry=" . sb_strip_extension( $entry_filename ) . "\" />\n";
			echo "\t\t<content type=\"text/html\" mode=\"escaped\"><![CDATA[" . blog_to_html( $contents[ 'CONTENT' ], false, false ) . $content_footer . "]]></content>\n";
			//Optional item fields
			echo "\t\t<id>" . $base_url . "index.php?entry=" . sb_strip_extension( $entry_filename ) . "</id>\n";
			echo "\t\t<issued>" . gmdate( 'Y-m-d', $contents[ 'DATE' ] ) . 'T' . gmdate( 'H:i:s', $blog_date ) . "Z</issued>\n";
			echo "\t\t<modified>" . gmdate( 'Y-m-d', $contents[ 'DATE' ] ) . 'T' . gmdate( 'H:i:s', $blog_date ) . "Z</modified>\n";
			// Only output if <comments> if they are enabled.
			if ( $blog_config[ 'blog_enable_comments' ] ) {
				//echo "\t\t<comments>" . $base_url . "comments.php?y=" . $year_dir . "&amp;m=" . $month_dir . "&amp;entry=" . sb_strip_extension( $entry_filename ) . "</comments>\n";
			}
			echo "\t</entry>\n";
		}
		echo "</feed>\n";
	}

?>