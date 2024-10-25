<?php 
	require('scripts/sb_functions.php');
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'setup' );
	
	$temp_max_entries = intval( $_POST['blog_max_entries'] );
	if ( $temp_max_entries <= 0) {
		$temp_max_entries = 5;
	}
	
	$tag_array = array( 'b', 'i', 'strong', 'em', 'del', 'ins', 'strike', 'img', 'url', 'blockquote', 'hN', 'pre', 'code', 'html' );
	$temp_array = array();
	for ( $i = 0; $i < count( $tag_array ); $i++ ) {
		$tag = $tag_array[$i];
		if ( $_POST[ $tag ] == 'on' ) {
			array_push( $temp_array, $tag );
		}
	}
	$comment_tags_allowed = implode( ',', $temp_array );
	
	$ok = write_config( stripslashes( $_POST['blog_title'] ),
						stripslashes( $_POST['blog_author'] ),
						stripslashes( $_POST['blog_email'] ),
						stripslashes( $_POST['blog_footer'] ),
						$_POST['blog_language'],
						$_POST['blog_entry_order'],
						$_POST['blog_comment_order'],
						( $_POST['blog_enable_comments'] == 'on' ),
						$temp_max_entries,
						( $_POST['blog_comments_popup'] == 'on' ),
						$comment_tags_allowed,
						( $_POST['blog_enable_gzip_txt'] == 'on' ),
						( $_POST['blog_enable_gzip_output'] == 'on' ),
						( $_POST['blog_email_notification'] == 'on' ),
						( $_POST['blog_send_pings'] == 'on' ),
						stripslashes( $_POST['blog_ping_urls'] ),
						( $_POST['blog_enable_voting'] == 'on' ),
						( $_POST['blog_trackback_enabled'] == 'on' ),
						( $_POST['blog_trackback_auto_discovery'] == 'on' ) );
	
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
			echo( $lang_string['error'] . $ok . '<p />' );
		}
		echo( '<a href="index.php">' . $lang_string['home'] . '</a><br /><br />' );
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
