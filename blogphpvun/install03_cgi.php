<?php 
	require('scripts/sb_functions.php');
	$logged_in = logged_in( true, false );
	
	$ok = create_password( stripslashes( $_POST['user'] ), stripslashes( $_POST['pass'] ) );
	$logged_in = $ok;
	
	read_config();
	
	global $blog_config;
	if ( isset( $_GET['blog_language'] ) ) {	
		$blog_config[ 'blog_language' ] = $_GET['blog_language'];
	}
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'install03' );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>'>
	<link rel=stylesheet type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css">
	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="JavaScript" src="scripts/sb_javascript.js"></script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string['title'] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $ok, $blog_config;
		
		if ( $ok === true ) {
			echo( $lang_string['success'] );
			echo( '<a href="setup.php?blog_language=' . $blog_config[ 'blog_language' ] . '">' . $lang_string['btn_setup'] . '</a><br /><br />' );
		} else {
			echo( $lang_string['wrong_password'] );
		}
		
		// echo( '<hr noshade size="1" color=#' . $user_colors['inner_border_color'] . '>' );
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
