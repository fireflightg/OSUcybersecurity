<?php
	echo '<style type="text/css">';
	echo 'body { background-color: #' . $user_colors['bg_color'] . '; color: #' . $user_colors['txt_color'] . '; }';
	echo '#header { border-color: #' . $user_colors['border_color'] . '; color: #' . $user_colors['header_txt_color'] . '; background-color: #' . $user_colors['header_bg_color'] . '; }';
	echo '#footer { color: #' . $user_colors['footer_txt_color'] . '; background: #' . $user_colors['footer_bg_color'] . '; border-top: 1px solid #' . $user_colors['border_color'] . '; }';
	echo 'h1, h2, h3, h4, h5, h6 { color: #' . $user_colors['headline_txt_color'] . '; }';
	echo '#blog_subject { color: #' . $user_colors['headline_txt_color'] . '; }';
	echo '#blog_date { color: #' . $user_colors['date_txt_color'] . '; }';
	echo 'a:link, a:visited { color: #' . $user_colors['link_reg_color'] . '; }';
	echo 'a:hover { color: #' . $user_colors['link_hi_color'] . '; }';
	echo 'a:active { color: #' . $user_colors['link_down_color'] . '; }';	
	echo '</style>';
?>