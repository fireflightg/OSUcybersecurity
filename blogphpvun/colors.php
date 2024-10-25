<?php 
	require('scripts/sb_functions.php');
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'colors' );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=<?php echo( $lang_string['html_charset'] ); ?>'>
	<link rel=stylesheet type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css">
	<?php require('themes/' . $blog_theme . '/user_style.php'); ?>
	
	<style type="text/css">
	<!--
	.swatch {
		height: 20px;
		width: 20px;
		color: #000;
		background: #fff;
		border: 1px solid #999;
	}
	-->
	</style>

	<script type="text/javascript">
	<!--
	// Update Text Fields
	function set_hex ( hex_val ) {
		var str;
		for (i=0; i<document.forms['colors']['area'].length; i++) {
			if (document.forms['colors']['area'][i].checked == true) {
				str = document.forms['colors']['area'][i].value;
			}
		}
		document.forms['colors'][str].value = hex_val;
		changeColor(str, "#"+hex_val);
	}
	
	// Change Swatch Color
	function changeColor(area, whichColor) {
		document.getElementById(area+'_swatch').style.backgroundColor = whichColor;
	}
	
	function load_preset() {
		// alert( 'hello' );
		str = document.forms['colors']['presets'].value;
		if ( str != '--' ) {
			arr = str.split('|');
			for (i=4; i<arr.length; i=i+2) {
				id = arr[i];
				hex = arr[i+1];
				document.forms['colors'][id].value = hex;
				document.getElementById(id+'_swatch').style.backgroundColor = "#"+hex;
			}
			document.getElementById("scheme_name").value = arr[0];
			document.getElementById("scheme_file").value = arr[1];
		}
	}
	
	-->
	</script>

	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string['title'] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors;
		
		?>
		<h2><?php echo( $lang_string['title'] ); ?></h2>
		<?php echo( $lang_string['instructions'] ); ?><p />
		
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
			codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" 
			width="390" height="390" id="color_picker" align="">
			<param name=movie value="flash/color_picker.swf"> 
			<param name=quality value=high> 
			<param name=bgcolor value=#E6E6E6> 
			<embed src="flash/color_picker.swf" quality=high bgcolor=#E6E6E6 
				width="390" height="390" name="color_picker" align="" 
				type="application/x-shockwave-flash" 
				pluginspage="http://www.macromedia.com/go/getflashplayer">
			</embed>
		</object><p />
		
		<form method="post" name="colors" id="colors" action="colors_cgi.php">
			<?php
				global $user_colors, $theme_vars;
				$color_def = theme_default_colors();
				
				$left_count = floor( count( $color_def ) / 2 );
				
				echo ('<table border="0" width="' . $theme_vars['max_image_width'] . '" cellspacing="0" cellpadding="0">' . "\n");
				// Left Column
				echo ('<tr align="left" valign="top">' . "\n");
				echo ('<td width="50%">' . "\n");
				for ( $i = 0; $i < $left_count; $i++ ) {
					$id = $color_def[$i]['id'];
					$color = $user_colors[$id];
					$string = $color_def[$i]['string'];
					$str = '';
					if ( $i == 0 ) {
						$str = $str . '<input type="radio" name="area" value="' . $id . '" checked> ';
					} else {
						$str = $str . '<input type="radio" name="area" value="' . $id . '"> ';
					}
					$str = $str . '<span class="swatch" style="background: #' . $color . ';" id="' . $id . '_swatch">&nbsp;&nbsp;&nbsp;&nbsp;</span> ';
					$str = $str . '<input type="text" name="' . $id . '" value="' . $color . '" size="7" maxlength="6"> ' . $string . '<br />' . "\n";
					echo ( $str );
				}
				echo ('</td>' . "\n");
				// Right Column
				echo ('<td width="50%">' . "\n");
				for ( $i = $left_count; $i < count( $color_def ); $i++ ) {
					$id = $color_def[$i]['id'];
					$color = $user_colors[$id];
					$string = $color_def[$i]['string'];
					$str = '';
					if ( $i == 0 ) {
						$str = $str . '<input type="radio" name="area" value="' . $id . '" checked> ';
					} else {
						$str = $str . '<input type="radio" name="area" value="' . $id . '"> ';
					}
					$str = $str . '<span class="swatch" style="background: #' . $color . ';" id="' . $id . '_swatch">&nbsp;&nbsp;&nbsp;&nbsp;</span> ';
					$str = $str . '<input type="text" name="' . $id . '" value="' . $color . '" size="7" maxlength="6"> ' . $string . '<br />' . "\n";
					echo ( $str );
				}
				echo ('</td>' . "\n");
				echo ('</tr>' . "\n");
				
				echo ('</table><p />' . "\n");
			
				echo ('<input type="submit" name="submit" value="' . $lang_string['submit_btn'] . '"/>' );
				echo ('<hr noshade size="1" color=#' . $user_colors['inner_border_color'] . '>' . "\n");
				
				// Preset Color Dropdown
				echo ('<label for="presets">' . $lang_string['color_preset'] . '</label><br />' . "\n");
				echo ('<select name="presets" id="presets" onChange="load_preset();">' . "\n");
				echo( '<option label="--" value="--">--</option>' . "\n");
				
				global $blog_theme;
				
				// Default Theme Colors
				$dir = 'themes/' . $blog_theme . '/colors/';
				$color_files = sb_folder_listing( $dir, array( '.txt' ) );
				
				for ( $i = 0; $i < count( $color_files ); $i++ ) {
					$result = sb_read_file( $dir . $color_files[ $i ] );
					if ( $result ) {
						$saved_colors = explode( '|', $result );
						
						if ( count( $saved_colors ) >= 2 ) {
							$preset_name = $saved_colors[1];
							$preset_file = substr( $color_files[ $i ], 0, -4);
							
							$str = '<option label="' . $preset_name . '" value="' . $preset_name . '|' . $preset_file . '|' . $result . '"';
							$str = $str . '>' . $preset_name . '</option>' . "\n";
							
							echo( $str );
						}
					}
				}
				
				// Saved User Colors
				$dir = 'config/schemes/';
				$color_files = sb_folder_listing( $dir, array( '.txt' ) );
				if ( count( $color_files ) > 0 ) {
					echo( '<option label="--" value="--">--</option>' . "\n");
					for ( $i = 0; $i < count( $color_files ); $i++ ) {
						$result = sb_read_file( $dir . $color_files[ $i ] );
						if ( $result ) {
							$saved_colors = explode( '|', $result );
							
							if ( count( $saved_colors ) >= 2 ) {
								$preset_name = $saved_colors[1];
								$preset_file = substr( $color_files[ $i ], 0, -4);
								
								$str = '<option label="' . $preset_name . '" value="' . $preset_name . '|' . $preset_file . '|' . $result . '"';
								$str = $str . '>' . $preset_name . '</option>' . "\n";
								
								echo( $str );
							}
						}
					}
				}
				
				echo ('</select><br /><br />');
			?>
			
			<label for="scheme_name"><?php echo( $lang_string['scheme_name'] ); ?></label><br />
			<input type="text" name="scheme_name" id="scheme_name" autocomplete=OFF value="" size="40"><br /><br />
			
			<label for="scheme_file"><?php echo( $lang_string['scheme_file'] ); ?></label><br />
			<input type="text" name="scheme_file" id="scheme_file" autocomplete=OFF value="" size="40"> <input type="submit" name="save_btn" value="<?php echo( $lang_string['save_btn'] ); ?>" /><br />
		
		</form>
		
		<?php 
	}
?>
<?php 
	theme_pagelayout();
?>
</html>
