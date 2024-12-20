<?php 
	require('scripts/sb_functions.php');
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'add' );
	
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
		exit;
	}
	
	// "CGI" Functions
	if ( array_key_exists( "no", $_POST ) || array_key_exists( "yes", $_POST ) ) {
		if ( array_key_exists( "no", $_POST ) ) {
			// User clicked the "Cancel" button
			redirect_to_index();
			
		} else {
         global $auto_discovery_confirm;
         
			if ( array_key_exists( "yes", $_POST ) ) {
				// User clicked the "OK" button
				$ad_array = $_POST['ad_array'];
				foreach ($_POST['confirm'] as $name => $value) {
		         sb_tb_ping ( $ad_array[$name], 
	                         $_POST['title'], 
		                      $_POST['permalink'], 
		                      $_POST['excerpt'] );
				}
				redirect_to_index();
			}
		}
	} else {
      // Initial passthrough
      global $auto_discovery_confirm;
      
   	$ok = write_entry( stripslashes( $_POST['blog_subject'] ), stripslashes( $_POST['blog_text'] ), stripslashes( $_POST['tb_ping'] ), $_POST['entry'], $_POST[ "catlist" ] );
   	
   	if ( $ok === true ) {
   	   if( strlen($auto_discovery_confirm['text']) > 0 ) {
      	   // Find the trackback URLs
      	   $ad_array = trackback_autodiscover( $auto_discovery_confirm['text'] );
            
         	// Is there anything to be confirmed?
         	if ( is_array( $ad_array ) ) {
         	   if( count( $ad_array ) === 0 ) {
         	      redirect_to_index();
         	   }
         	} else {
         	   redirect_to_index();
         	}
         } else {
      	   redirect_to_index();
         }
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
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string['title'] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors, $ad_array, $auto_discovery_confirm;
		
		if ( array_key_exists( "no", $_POST ) || array_key_exists( "yes", $_POST ) ) {
			// Check to see if we're posting data...
			global $ok;
			if ( $ok !== true ) {
				echo( $lang_string['error'] . $ok . '<p />' );
			}
			echo( '<a href="index.php">' . $lang_string['home'] . '</a><br /><br />' );
		} else {
			?>
			
			<h2><?php echo( $lang_string['title_ad'] ); ?></h2>
			<?php echo( $lang_string['instructions_ad'] ); ?><p />
			
			<hr noshade size="1" color=#<?php echo( $user_colors['inner_border_color'] ); ?>>
			
			<form action='add_cgi.php' method="POST">
			
   			<?php
   	         if ( is_array( $ad_array ) ) {
   	            echo "<table width=\"100%\">";
   		         for ( $k = 0; $k < count( $ad_array ); $k++ ) {
   		            echo "<tr><td><input type=\"checkbox\" name=\"confirm[$k]\" checked></td>\n";
   		            echo "<td>" . $ad_array[$k];
                     echo "<input type=\"hidden\" name=\"ad_array[$k]\" value=\"" . $ad_array[$k] . "\">\n";
   		            echo "</td></tr>\n";
   		         }
   		         echo "</table><br>\n";
   		      }
   			?>
   			
            <input type="hidden" name="title" value="<?php echo( $auto_discovery_confirm['title'] ); ?>" />
            <input type="hidden" name="permalink" value="<?php echo( $auto_discovery_confirm['permalink'] ); ?>" />
            <input type="hidden" name="excerpt" value="<?php echo( $auto_discovery_confirm['excerpt'] ); ?>" />
				<input type="submit" name="yes" value="<?php echo( $lang_string['ok_btn'] ); ?>" />
				<input type="submit" name="no" value="<?php echo( $lang_string['cancel_btn'] ); ?>" />
			</form>
			
			<?php 
		}
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
