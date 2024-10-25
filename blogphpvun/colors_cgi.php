<?php 
	require('scripts/sb_functions.php');
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'colors' );
	
	$color_def = theme_default_colors();
	$post_array = array();
	array_push( $post_array, 'name' );
	if ( array_key_exists( "save_btn", $_POST ) == true && $_POST[ "scheme_name" ] != "" && $_POST[ "scheme_file" ] != "" ) {
		$str = str_replace( '|', ':', $_POST[ "scheme_name" ] );
		array_push( $post_array, $str );
	} else {
		array_push( $post_array, 'custom' );
	}
	
	for ( $i = 0; $i < count( $color_def ); $i++ ) {
		$id = $color_def[$i]['id'];
		$color = stripslashes( $_POST[ $id ] );
		array_push( $post_array, $id );
		array_push( $post_array, $color );
	}
	
	// Check if we should save color scheme, or just update colors on web site.
	if ( array_key_exists( "save_btn", $_POST ) == true && $_POST[ "scheme_name" ] != "" && $_POST[ "scheme_file" ] != "" ) {
		$ok = write_colors( $post_array, $_POST[ "scheme_file" ] );
	} else {
		$ok = write_colors( $post_array, NULL );
	}
	
	if ( $ok === true ) {
		$relative_url = 'index.php';
		if ( ( dirname($_SERVER['PHP_SELF']) == '\\' || dirname($_SERVER['PHP_SELF']) == '/' ) ) {
			// Hosted at root.
			header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.$relative_url);
		} else {
			// Hosted in sub-directory.
			header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/'.$relative_url);
		}
		
		exit;
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
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string['title'] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $ok;
		
		if ( $ok !== true ) {
			echo $lang_string['error'] . '<p />';
		}
		echo( '<a href="index.php">' . $lang_string['home'] . '</a><br /><br />' );
		
		
		if ( count( $_POST ) > 0 ) {
			echo("<pre>");
			print_r($_POST);
			echo("</pre>");
		}
	}
?>
<?php 
	theme_pagelayout();
?>
</html>