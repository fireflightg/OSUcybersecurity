<?php 
    // --------------------------
    // Simple PHP Blog Theme File
    // --------------------------
    //
    // Name: Classic Theme
    // Author: Alexander Palmo
    // Version: 0.3.7.1
    //
    // Description:
    // This is the default theme for Simple PHP Blog. You can use
    // this as a template for your own themes.
    //
    // All graphics will be relative to the base-url (i.e., the folder
    // where index.php is located.) 

    // Ensure theme_init() is only called if not already defined
    if (!function_exists('theme_init')) {
        theme_init();
    }

    // ---------------
    // Theme Variables
    // ---------------
    function theme_init() {
        global $theme_vars;

        $theme_vars = array();
        $theme_vars['max_image_width'] = 450 - 20;
    }

    // Theme for Blog Entries
    function theme_blogentry($entry_array) {
        global $blog_config, $user_colors;

        $blog_content = "\n";

        if (isset($blog_config['blog_trackback_enabled']) && $blog_config['blog_trackback_enabled']) {
            if (isset($entry_array['permalink']['url'], $entry_array['subject'], $entry_array['trackback']['ping_url'])) {
                $blog_content .= '<!--' . "\n";
                $blog_content .= '<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"' . "\n";
                $blog_content .= '         xmlns:dc="http://purl.org/dc/elements/1.1/"' . "\n";
                $blog_content .= '         xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/">' . "\n";
                $blog_content .= '<rdf:Description' . "\n";
                $blog_content .= '    rdf:about="' . htmlspecialchars($entry_array['permalink']['url']) . '"' . "\n";
                $blog_content .= '    dc:identifier="' . htmlspecialchars($entry_array['permalink']['url']) . '"' . "\n";
                $blog_content .= '    dc:title="' . htmlspecialchars($entry_array['subject']) . '"' . "\n";
                $blog_content .= '    trackback:ping="' . htmlspecialchars($entry_array['trackback']['ping_url']) . '" />' . "\n";
                $blog_content .= '</rdf:RDF>' . "\n";
                $blog_content .= '-->' . "\n";
            }
        }

        if (isset($entry_array['subject'])) {
            $blog_content .= '<div id="blog_subject">' . htmlspecialchars($entry_array['subject']) . '</div>' . "\n";
        }

        if (isset($entry_array['date'])) {
            $blog_content .= "<div id=\"blog_date\">" . htmlspecialchars($entry_array['date']);

            if (isset($entry_array["categories"])) {
                $categories = $entry_array["categories"];
                if (is_array($categories)) {
                    $blog_content .= " - ";
                    for ($i = 0; $i < count($categories); $i++) {
                        $blog_content .= htmlspecialchars($categories[$i]);
                        if ($i < count($categories) - 1) {
                            $blog_content .= ", ";
                        }
                    }
                }
            }
            $blog_content .= "</div>\n\t\t";
        }

        // Blog content body...
        if (isset($entry_array['entry'])) {
            $blog_content .= $entry_array['entry'] . "\n";
        }

        if (isset($entry_array['comment']['url'], $entry_array['comment']['name'])) {
            // Show 'add comment' button if set...
            $blog_content .= '<br /><a href="' . htmlspecialchars($entry_array['comment']['url']) . '">[ ' . htmlspecialchars($entry_array['comment']['name']) . ' ]</a>' . "\n";
        }

        if (isset($entry_array['comment']['count'])) {
            // Show '( x views )' string...
            $blog_content .= ' ( ' . htmlspecialchars($entry_array['comment']['count']) . ' )' . "\n";
        }

        if (isset($entry_array['trackback']['url'], $entry_array['trackback']['name'])) {
            // Show 'trackback' symbol
            $blog_content .= '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="' . htmlspecialchars($entry_array['trackback']['url']) . '">[ ' . htmlspecialchars($entry_array['trackback']['name']) . ' ]</a>' . "\n";
        }

        if (isset($entry_array['permalink']['url'], $entry_array['permalink']['name'])) {
            // Show 'permalink' symbol
            $blog_content .= '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="' . htmlspecialchars($entry_array['permalink']['url']) . '">' . htmlspecialchars($entry_array['permalink']['name']) . '</a>';
        }

        // More checks for 'stars', 'count', and other potential undefined values
        if (isset($entry_array['stars'])) {
            $blog_content .= '&nbsp;&nbsp;|&nbsp;&nbsp;' . htmlspecialchars($entry_array['stars']);
        }

        $blog_content .= '<hr noshade size="1" color=#' . htmlspecialchars($user_colors['inner_border_color']) . '>' . "\n";

        return $blog_content;
    }

    // Default Colors
    function theme_default_colors() {
        global $lang_string;

        $color_def = array();

        array_push($color_def, array('id' => 'bg_color',
                                     'string' => $lang_string['bg_color'],
                                     'default' => 'CCCC99'));
        array_push($color_def, array('id' => 'border_color',
                                     'string' => $lang_string['border_color'],
                                     'default' => '4D4D45'));
        array_push($color_def, array('id' => 'main_bg_color',
                                     'string' => $lang_string['main_bg_color'],
                                     'default' => 'FFFFFF'));
        array_push($color_def, array('id' => 'menu_bg_color',
                                     'string' => $lang_string['menu_bg_color'],
                                     'default' => 'F2F2F2'));
        array_push($color_def, array('id' => 'inner_border_color',
                                     'string' => $lang_string['inner_border_color'],
                                     'default' => 'D9D9D9'));
        array_push($color_def, array('id' => 'link_reg_color',
                                     'string' => $lang_string['link_reg_color'],
                                     'default' => '993333'));
        array_push($color_def, array('id' => 'link_hi_color',
                                     'string' => $lang_string['link_hi_color'],
                                     'default' => 'FF3333'));
        array_push($color_def, array('id' => 'link_down_color',
                                     'string' => $lang_string['link_down_color'],
                                     'default' => '3333FF'));
        array_push($color_def, array('id' => 'header_bg_color',
                                     'string' => $lang_string['header_bg_color'],
                                     'default' => '999966'));
        array_push($color_def, array('id' => 'header_txt_color',
                                     'string' => $lang_string['header_txt_color'],
                                     'default' => 'FFFFFF'));
        array_push($color_def, array('id' => 'footer_bg_color',
                                     'string' => $lang_string['footer_bg_color'],
                                     'default' => 'EEEEEE'));
        array_push($color_def, array('id' => 'footer_txt_color',
                                     'string' => $lang_string['footer_txt_color'],
                                     'default' => '666666'));
        array_push($color_def, array('id' => 'txt_color',
                                     'string' => $lang_string['txt_color'],
                                     'default' => '666633'));
        array_push($color_def, array('id' => 'headline_txt_color',
                                     'string' => $lang_string['headline_txt_color'],
                                     'default' => '666633'));
        array_push($color_def, array('id' => 'date_txt_color',
                                     'string' => $lang_string['date_txt_color'],
                                     'default' => '999999'));

        return ($color_def);
    }

    // Menu function to be defined
    function theme_menu() {
        // Placeholder for theme menu functionality
        echo "<p>Menu content goes here.</p>";
    }

    // Page Layout Wrapper
    function theme_pagelayout() {
        global $user_colors, $blog_config;

        $content_width = 450;
        $menu_width = 250;
        $page_width = $content_width + $menu_width;

        // Begin Page Layout HTML
        ?>
        <body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
            <br />
            <table border="0" width="<?php echo($page_width); ?>" cellspacing="0" cellpadding="0" align="center" style="border: 1px solid #<?php echo($user_colors['border_color']); ?>; border-top: 8px solid #<?php echo($user_colors['border_color']); ?>;">
                <tr align="left" valign="top">
                    <td width="<?php echo($page_width); ?>" colspan="2" bgcolor="#<?php echo($user_colors['header_bg_color']); ?>">
                        <div id="header">
                            <?php echo($blog_config['blog_title']); ?>
                        </div>
                        <div id="pagebody">
                            <table border="0" width="<?php echo($page_width); ?>" cellspacing="0" cellpadding="0" align="left">
                                <tr valign="top">
                                    <td width="<?php echo($content_width); ?>" bgcolor="#<?php echo($user_colors['main_bg_color']); ?>">
                                        <div id="maincontent">
                                            <?php page_content(); ?>
                                        </div>
                                    </td>
                                    <td width="<?php echo($menu_width); ?>" bgcolor="#<?php echo($user_colors['menu_bg_color']); ?>" style="border-left: 1px solid #<?php echo($user_colors['inner_border_color']); ?>;">
                                        <div id="sidebar">
                                            <?php theme_menu(); ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr align="left" valign="top">
                                    <td width="<?php echo($page_width); ?>" colspan="2">
                                        <div id="footer"><?php echo($blog_config['blog_footer']); ?> - <?php echo(page_generated_in()); ?></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            <br />
        </body>
        <?php 
        // End Page Layout HTML
    }

?>
