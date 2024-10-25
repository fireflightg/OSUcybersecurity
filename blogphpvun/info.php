<?php 
	require('scripts/sb_functions.php');
	$logged_in = logged_in( true, true );
	
	read_config();
		
	if ( isset( $_GET['blog_language'] ) ) {	
		$blog_config[ 'blog_language' ] = $_GET['blog_language'];
	}
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'info' );
	
	// Redirect
	function redirect_to_index( ) {
		$relative_url = 'index.php';
		if ( ( dirname($_SERVER['PHP_SELF']) == '\\' || dirname($_SERVER['PHP_SELF']) == '/' ) ) {
			// Hosted at root.
			header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.$relative_url);
		} else {
			// Hosted in sub-directory.
			header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/'.$relative_url);
		}
	}
		
	// "CGI" Functions
	if ( array_key_exists( "info_keywords", $_POST ) && array_key_exists( "info_description", $_POST ) && array_key_exists( "info_copyright", $_POST ) ) {	
		$ok = write_metainfo( 	stripslashes( $_POST['info_keywords'] ),
								stripslashes( $_POST['info_description'] ),
								stripslashes( $_POST['info_copyright'] ) );
								
		if ( $ok === true ) {	
			redirect_to_index();
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
		function validate(theform) {
			if (theform.blog_title.value=="" || theform.blog_author.value=="" || theform.blog_footer.value=="" ) {
				alert("<?php echo( $lang_string['form_error'] ); ?>");
				return false;
			} else {
				return true;
			}
		}
		//-->
	</script>
	<title><?php echo( $blog_config[ 'blog_title' ] ); ?> - <?php echo( $lang_string['title'] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $blog_config;
		
		if ( array_key_exists( "info_keywords", $_POST ) && array_key_exists( "info_description", $_POST ) && array_key_exists( "info_copyright", $_POST ) ) {	
			// Check to see if we're posting data...
			global $ok;
			if ( $ok !== true ) {
				echo( $lang_string['error'] . $ok . '<p />' );
			}
			echo( '<a href="index.php">' . $lang_string['home'] . '</a><br /><br />' );
		} else {
			?>
			
			<h2><?php echo( $lang_string['title'] ); ?></h2>
			<?php echo( $lang_string['instructions'] ); ?><p />
			
			<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
			
			<form action="info.php" method="POST" name="info" name="info">
				
				<label for="info_keywords"><?php echo( $lang_string['info_keywords'] ); ?></label><br />
				<textarea style="width: <?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>px;" id="text" name="info_keywords" rows="5" cols="50" autocomplete="OFF"><?php echo($blog_config[ 'info_keywords' ]); ?></textarea><br /><br />
				
				<label for="info_description"><?php echo( $lang_string['info_description'] ); ?></label><br />
				<textarea style="width: <?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>px;" id="text" name="info_description" rows="5" cols="50" autocomplete="OFF"><?php echo($blog_config[ 'info_description' ]); ?></textarea><br /><br />
				
				<label for="info_copyright"><?php echo( $lang_string['info_copyright'] ); ?></label><br />
				<textarea style="width: <?php global $theme_vars; echo( $theme_vars['max_image_width'] ); ?>px;" id="text" name="info_copyright" rows="5" cols="50" autocomplete="OFF"><?php echo($blog_config[ 'info_copyright' ]); ?></textarea><br />
			
				<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
				
				<input type="submit" name="submit" value="<?php echo( $lang_string['submit_btn'] ); ?>" /><br /><br />
			</form>
			
			<?php 
		}
	}
?>
<?php 
	theme_pagelayout();
?>

</html>
