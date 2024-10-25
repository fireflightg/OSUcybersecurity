<?php 
	require('scripts/sb_functions.php');
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'add_link' );
	
	if ( isset( $_POST['link_name'] ) ) {
		$ok = write_link( stripslashes( $_POST['link_name'] ), stripslashes( $_POST['link_url'] ), stripslashes( $_POST['link_id'] ) );
	}
	
	if ( isset( $_GET['action'] ) ) {
		$action = stripslashes( $_GET['action'] );
		if ( $action === "edit" ) {
			$link_id = stripslashes( $_GET['link_id'] );
			// nothing
		} else {
			$ok = modify_link( $action, stripslashes( $_GET['link_id'] ) );
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>'>
	<link rel=stylesheet type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css">
	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<script type="text/javascript">
		<!--
			// Comment Popup Window
			function validate_link(theform) {
				if ( theform.link_name.value=="" ) {
					alert("<?php echo( $lang_string['form_error'] ); ?>");
					return false;
				} else {
					return true;
				}
			}
			
			function load_static() {
				// alert( 'hello' );
				str = document.forms['addlink']['static_pages'].value;
				document.getElementById("link_name").value = str;
				document.getElementById("link_url").value = "static.php?page=" + str;
			}
		-->
	</script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string['title'] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors;
		global $link_id, $link_name, $link_url;
		
		echo( '<h2>' . $lang_string['title'] . '</h2>' );
		echo( $lang_string['instructions'] . '<p />' );
		
		// Read links file.
		$filename = 'config/links.txt';
		$result = sb_read_file( $filename );
		
		// Create array.
		$str = NULL;
		if ( $result ) {
			
			echo( '<hr noshade size="1" color=#' . $user_colors['inner_border_color'] . '>' );
			echo $lang_string['instructions_modify'] . '<p />';
	
			$array = explode('|', $result);
			for ( $i = 0; $i < count( $array ); $i = $i + 2 ) {
				if ( $array[$i+1] == '' ) {
					$str = $str . ( 1 + ( $i / 2 ) ) . ' - ' . $array[$i] . '<br />';
				} else {
					$str = $str . ( 1 + ( $i / 2 ) ) . ' - ' . $array[$i] . ' ( ' . $array[$i+1] . ' ) ' . '<br />';
				}
				$str = $str . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				if ( $i > 0 ) {
					$str = $str . '<a href="add_link.php?action=up&link_id='.$i.'">' . $lang_string['up'] . '</a> | ';
				} else {
					$str = $str . $lang_string['up'] . ' | ';
				}
				if ( $i < ( count( $array ) - 2 ) ) {
					$str = $str . '<a href="add_link.php?action=down&link_id='.$i.'">' . $lang_string['down'] . '</a> | ';
				} else {
					$str = $str . $lang_string['down'] . ' | ';
				}
				$str = $str . '<a href="add_link.php?action=edit&link_id='.$i.'">' . $lang_string['edit'] . '</a> | ';
				$str = $str . '<a href="add_link.php?action=delete&link_id='.$i.'">' . $lang_string['delete'] . '</a> ';
				$str = $str . '<br /><br />';
			}
			
			if ( isset( $link_id ) ) {
				$link_name = $array[$link_id];
				$link_url = $array[$link_id+1];
			} else {
				$link_name = NULL;
				$link_url = 'http://';
			}
		}
		
		echo( $str );
		
		echo( '<hr noshade size="1" color=#' . $user_colors['inner_border_color'] . '>' );
		
		if ( isset( $link_id ) == true ) {
			echo $lang_string['instructions_edit'] . '<br /><br />';
			echo ( 1 + ( $link_id / 2 ) ) . ' - ' . $link_name . ' ( ' . $link_url . ' ) ' . '<br /><br />';
		}
		?>
		
		<form action='add_link.php' method="POST" name="addlink" id="addlink"  onSubmit="return validate_link(this)">
			<input type="hidden" name="link_id" value="<?php if ( isset( $link_id ) ) { echo( $link_id ); } ?>">
			
			<?php
				// Preset Color Dropdown
				echo ('<label for="static_pages">' . $lang_string['static_pages'] . '</label><br />' . "\n");
				echo ('<select name="static_pages" id="static_pages" onChange="load_static();">' . "\n");
				echo( '<option label="--" value="--">--</option>' . "\n");
				
				// Saved User Colors
				$dir = 'content/static/';
				$static_files = sb_folder_listing( $dir, array( '.txt', '.gz' ) );
				if ( count( $static_files ) > 0 ) {
					for ( $i = 0; $i < count( $static_files ); $i++ ) {
						$filename = sb_strip_extension( $static_files[$i] );
						$str = '<option label="' . $filename . '" value="' . $filename . '"';
						$str = $str . '>' . $filename . '</option>' . "\n";
						
						echo( $str );
					}
				}
				
				echo ('</select><br /><br />');
			?>
		
			<label for="link_name"><?php echo( $lang_string['link_name'] ); ?></label><br />
			<input type="text" name="link_name" id="link_name" autocomplete="OFF" value="<?php if ( isset( $link_name ) ) { echo( $link_name ); } ?>"><br /><br />
			
			<label for="link_url"><?php echo( $lang_string['link_url'] ); ?></label><br />
			<input type="text" name="link_url" id="link_url" autocomplete="OFF" size="45" value="<?php if ( isset( $link_url ) ) { echo( $link_url ); } else { echo( 'http://' ); }?>"><br /><br />
			
			<input type="submit" name="submit" value="&nbsp;<?php if ( isset ( $link_id ) ) { echo $lang_string['submit_btn_edit']; } else { echo $lang_string['submit_btn_add']; } ?>&nbsp;" onclick="this.form.action='add_link.php';" />
		</form>
		
		<?php 
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
