<?php
	// Chinese Language File
	// (c) 2004 Jfly, jflycn <at> hotmail <dot> com
	//
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.1
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Chinese
		$lang_string['locale'] = 'en_US'; // <-- New 0.3.7
		$lang_string['language'] = 'chinese';
		
		// ISO Charset: GB2312
		$lang_string['html_charset'] = 'GB2312';
		$lang_string['php_charset'] = 'GB2312';
		
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "链接";
		$lang_string['menu_home'] = "首页";
		$lang_string['menu_contact'] = "Contact Me"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "档案";
		$lang_string['menu_menu'] = "菜单";
		$lang_string['menu_add'] = "添加条目";
		$lang_string['menu_add_static'] = "添加静态页面";
		$lang_string['menu_upload'] = "上传图片";
		$lang_string['menu_setup'] = "设置";
		$lang_string['menu_categories'] = "Categories";
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "选项";
		$lang_string['menu_themes'] = "页面主题";
		$lang_string['menu_colors'] = "调色";
		$lang_string['menu_change_login'] = "更改登录";
		$lang_string['menu_logout'] = "登出";
		$lang_string['menu_login'] = "登录";
		$lang_string['menu_most_recent'] = "最近评论";
		$lang_string['menu_most_recent_entries'] = "Most Recent Entries"; // <-- New 0.3.8
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Blocks";
		
		// Other
		$lang_string['home'] = "返回首页";
		$lang_string['nav_next'] = 'Next'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Back'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Search:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Go'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Page Generated in %s seconds'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月' );
		$lang_string['sb_default_title'] = '没有标题';
		$lang_string['sb_default_author'] = '没有作者';
		$lang_string['sb_default_footer'] = '没有页脚';
		
		$lang_string['sb_edit'] = '编辑';
		$lang_string['sb_delete'] = '删除';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = '发表评论';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = '评论';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = '评论';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' 次浏览';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' 次浏览';
		
		$lang_string['sb_add_link_btn'] = '添加/管理链接';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "题目：";
				$lang_string['label_insert'] = "插入标签：";
				$lang_string['btn_bold'] = "粗";
				$lang_string['btn_italic'] = "斜";
				$lang_string['btn_image'] = "图";
				$lang_string['btn_url'] = "链";
				$lang_string['view_images'] = "浏览上传的图片";
				$lang_string['label_entry'] = "内容：";
				$lang_string['btn_preview'] = "&nbsp;预览&nbsp;";
				$lang_string['btn_post'] = "&nbsp;发表&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "输入要格式化的文字";
				$lang_string['insert_image'] = "输入图片的地址";
				$lang_string['insert_url1'] = "输入链接的说明文字(可选)";
				$lang_string['insert_url2'] = "输入链接的完整地址";
				$lang_string['insert_url3'] = "在新窗口中打开链接(可选)："; // <-- New 0.3.6
				$lang_string['form_error'] = "请完整填写条目的题目和内容。";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = '可选：';
				$lang_string['insert_image_width'] = '宽度(可选)：';
				$lang_string['insert_image_height'] = '高度(可选)：';
				$lang_string['insert_image_popup'] = '点击后在弹出窗口浏览全图(可选)：';
				$lang_string['insert_image_float'] = '浮动(可选)：';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "添加条目";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions'] = "你准备好了么? 填写下面的表单然后按“预览”来查看条目的样子，或者按“发表”以保存条目。";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string['title_preview'] = "预览/编辑条目";
				$lang_string['instructions_preview'] = "下面是条目的样子。如果你使用了文字样式或包含了图片，请记得关闭所有的标签。";
				$lang_string['title_update'] = "更新条目";
				$lang_string['instructions_update'] = "你可以使用下面的表单更新你的条目。准备好了就按“预览”或“发表”。";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>哇！</h2>条目没有保存。在保存条目时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "添加静态页面";
				$lang_string['instructions'] = "填写下面的表单来生成一个静态页面。和标准的日志条目不同的是，静态条目的链接直接显示在页面右侧的菜单。这些用于常用的内容，比如：关于我、联系我们、工作计划等。按“预览”来查看条目的样子，或者按“发表”以保存条目。";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "预览/编辑条目";
				$lang_string['instructions_preview'] = "下面是条目的样子。如果你使用了文字样式或包含了图片，请记得关闭所有的标签。";
				$lang_string['title_update'] = "更新条目";
				$lang_string['instructions_update'] = "你可以使用下面的表单更新你的条目。准备好了就按“预览”或“发表”。";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>哇！</h2>条目没有保存。在保存条目时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'add_block':
				// Add / Manage Blocks
				$lang_string['title'] = "Add / Manage Links";
				$lang_string['instructions'] = "Add custom Blocks";
				$lang_string['up'] = "up";
				$lang_string['down'] = "down";
				$lang_string['edit'] = "edit";
				$lang_string['delete'] = "delete";
				$lang_string['block_name'] = "Block Name:";
				$lang_string['block_content'] = "Block content:";
				$lang_string['instructions_edit'] = "You are currently editing block:";
				$lang_string['instructions_modify'] = "Click below to modify a block:";
				$lang_string['submit_btn_edit'] = "Edit Block";
				$lang_string['submit_btn_add'] = "Add Block";
				$lang_string['form_error'] = "Please complete the Name field.";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
				// Add / Manage Links
				$lang_string['title'] = "添加/管理链接";
				$lang_string['instructions'] = "添加自定义的指向其他站点的链接。填写下面的表单然后按“添加链接”来添加一个链接。按向上向下的按钮来改变链接的次序。按编辑按钮来改动链接。按删除按钮来移除一个链接。";
				$lang_string['up'] = "向上";
				$lang_string['down'] = "向下";
				$lang_string['edit'] = "编辑";
				$lang_string['delete'] = "删除";
				$lang_string['link_name'] = "链接名称：";
				$lang_string['link_url'] = "链接地址：(可选。留空来生成一个分隔符。)";
				$lang_string['instructions_edit'] = "你正在编辑链接：";
				$lang_string['instructions_modify'] = "按下面的按钮来改动一个链接：";
				$lang_string['submit_btn_edit'] = "编辑链接";
				$lang_string['submit_btn_add'] = "添加链接";
				$lang_string['form_error'] = "请填写链接名称。";
				break;
			case 'categories':
				// Add / Manage Links
				$lang_string['title'] = "Add / Manage Categories";
				$lang_string['instructions'] = "Use the form below to add and edit your categories. Each category item should be in this format 'category name (id number)'. Indent items with spaces to create heirarchies.<br /><br /><b>Example:</b><br />General (1)<br />News (3)<br />&nbsp;&nbsp;Announcements (6)<br />&nbsp;&nbsp;Events (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;Misc (7)<br />Technology (2)<br />";
				$lang_string['error'] = "Error";
				$lang_string['current_categories'] = "Current Categories";
				$lang_string['no_categories_found'] = "No Categories Found";
				$lang_string['category_list'] = "Category List:";
				$lang_string['validate'] = "Validate";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'colors':
				// Change Colors
				$lang_string['title'] = "调色";
				$lang_string['instructions'] = "你可以改变日志的文字和背景的颜色。先在下面选择项目，然后使用调色板来获得颜色。色值是自动改变的。";
				$lang_string['bg_color'] = "日志页面";
				$lang_string['main_bg_color'] = "日志主体";
				$lang_string['border_color'] = "页面边框";
				$lang_string['inner_border_color'] = "内边框";
				$lang_string['header_bg_color'] = "日志页眉";
				$lang_string['header_txt_color'] = "页眉文字";
				$lang_string['menu_bg_color'] = "日志菜单";
				$lang_string['footer_bg_color'] = "日志页脚";
				$lang_string['txt_color'] = "主体文字";
				$lang_string['headline_txt_color'] = "标题文字";
				$lang_string['date_txt_color'] = "日期文字";
				$lang_string['footer_txt_color'] = "页脚文字";
				$lang_string['link_reg_color'] = "链接缺省";
				$lang_string['link_hi_color'] = "链接悬浮";
				$lang_string['link_down_color'] = "链接激活";
				// More Colors
				$lang_string['entry_bg'] = "条目背景";
				$lang_string['entry_title_bg'] = "条目标题背景";
				$lang_string['entry_border'] = "条目边框";
				$lang_string['entry_title_text'] = "条目标题文字";
				$lang_string['entry_text'] = "条目文字";
				$lang_string['menu_bg'] = "菜单背景";
				$lang_string['menu_title_bg'] = "菜单标题背景";
				$lang_string['menu_border'] = "菜单边框";
				$lang_string['menu_title_text'] = "菜单标题文字";
				$lang_string['menu_text'] = "菜单文字";
				$lang_string['menu_link_reg_color'] = "菜单链接缺省";
				$lang_string['menu_link_hi_color'] = "菜单链接悬浮";
				$lang_string['menu_link_down_color'] = "菜单链接激活";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
				$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;提交&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['title'] = "评论";
				$lang_string['header'] = "发表评论";
				$lang_string['instructions'] = "填写下面的表单来发表你的评论。";
				$lang_string['comment_name'] = "你的名字：";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "评论：";
				$lang_string['post_btn'] = "&nbsp;发表评论&nbsp;";
				$lang_string['delete_btn'] = "删除";
				// Error Response
				$lang_string['error_add'] = "<h2>哇！</h2>评论没有保存。在保存评论时遇到了一个问题。<br /><br />服务器报告：<br />";
				$lang_string['error_delete'] = "<h2>哇！</h2>评论没有删除。在删除评论时遇到了一个问题。<br /><br />服务器报告：<br />";
				$lang_string['form_error'] = "请完整填写名字和评论项目。"; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "删除条目";
				$lang_string['instructions'] = "这是你准备删除的条目。请确定你真的想干掉它，这个操作是不能挽回的……";
				$lang_string['ok_btn'] = "&nbsp;删除&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;取消&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>哇！</h2>条目没有删除。<br /><br />服务器报告：<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "删除静态页面";
				$lang_string['instructions'] = "这是你准备删除的静态页面。请确定你真的想干掉它，这个操作是不能挽回的……";
				$lang_string['ok_btn'] = "&nbsp;删除&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;取消&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>哇！</h2>条目没有删除。<br /><br />服务器报告：<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "图片列表";
				$lang_string['instructions'] = "点击下面的链接来浏览图片。<br /><br />要把图片添加到条目：<br />1) 右击一个链接然后选择“拷贝链接到剪切板”。<br />2) 回到添加条目或编辑条目的页面。<br />3) 点击“图”按钮然后复制链接地址。";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Meta-Data Information";
				$lang_string['instructions'] = "The information below is used for &quot;meta-data&quot;, which helps search engines correctly find and identify your site. Information may also be used in RSS feeds.";
				$lang_string['info_keywords'] = "Keywords: (List of keywords separated by commas.)";
				$lang_string['info_description'] = "Description: (An abstract or a free-text description of your site.)";
				$lang_string['info_copyright'] = "Rights: (Copyright statement, or link to document containing information.)";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Title and Author fields.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
				$lang_string['title'] = "登录";
				$lang_string['instructions'] = "请输入你的用户名和密码";
				$lang_string['username'] = "用户名：";
				$lang_string['password'] = "密码：";
				$lang_string['submit_btn'] = "&nbsp;提交&nbsp;";
				// Success
				$lang_string['success'] = "<h2>成功！</h2>你已经登入。呵呵^_^<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>哇！</h2>你没有登入。请检查你输入的用户名和密码是否正确并再试一次。<p />";
				$lang_string['form_error'] = "请完整填写你的用户名和密码。"; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "登出";
				$lang_string['instructions'] = "<h2>哇！</h2>登出失败。不能删除cookie。你怎么还在登入?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "改变用户名 &amp; 密码";
				$lang_string['instructions'] = "使用下面的表单来改变你的用户名和(或)密码。输入你要使用的用户名和密码。";
				$lang_string['username'] = "用户名：";
				$lang_string['password'] = "密码：";
				$lang_string['submit_btn'] = "&nbsp;提交&nbsp;";
				// Success
				$lang_string['success'] = "<h2>成功！</h2>你的用户名和密码已经改变。呵呵^_^<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>哇！</h2>信息没有保存。在保存用户名和密码时遇到了一个问题。<br /><br />服务器报告：<br />";
				$lang_string['form_error'] = "请完整填写你的用户名和密码。";
				break;
			case 'install00':
				$lang_string['title'] = "欢迎";
				$lang_string['instructions'] = "感谢您选用 Simple PHP Blog！";
				
				$lang_string['blog_choose_language'] = "请选择语言：";
				$lang_string['submit_btn'] = "&nbsp;提交&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "欢迎";
				$lang_string['instructions'] = "感谢您选用 Simple PHP Blog！<br /><br />Simple PHP Blog是一个轻便的blog系统。它需要PHP 4.1或更高版本，以及服务器段的写权限。所有信息保存在文件里，所以不需要数据库。<br /><br />在开始时， Simple PHP Blog需要创建三个目录('config'、'content'、'images')来存放信息。<br /><br /><b>按下面的按钮来开始安装：</b>";



				$lang_string['begin'] = "[ 开始安装 ]";
				break;
			case 'install02':
				$lang_string['title'] = "安装";
				$lang_string['instructions'] = "尝试创建'config'、'content'和'images'目录：";
				$lang_string['folder_exists'] = "太好了！目录已经存在了。不需要作什么改动……";
				$lang_string['folder_failed'] = "哇！不能创建目录……";
				$lang_string['folder_success'] = "成功了！目录已创建……";
				// Help
				$lang_string['help'] = "<h2>哇！</h2>不能创建一个或更多目录！这很可能是因为：<br><i>1) <b>写权限</b>不被允许。</i><br><i>2)文件和目录的<b>UID</b>不匹配。</i><p />请按照下面的疑难解答再试一次：<p />1) 手工创建目录：<b>config</b>、<b>content</b>、<b>images</b>。<p />2) 允许目录的<b>写权限</b>。在FTP程序里Owner、User和World应该允许<b>读</b>和<b>写</b>访问。<i>(你可能需要联系你的服务提供商来做这些改动……)</i><p />3) 确认你的文件和目录的UID都相同。<i>(你可能需要联系你的服务提供商来做这些改动……)</i>";
				
				
				
				
				
				
				
				
				
				$lang_string['try_again'] = "[ 再试一次 ]";
				// Success
				$lang_string['success'] = "<h2>成功了！</h2>目录创建成功！<p /><b>点击下面的按钮继续：</b>";
				$lang_string['continue'] = "[ 继续 ]";
				break;
			case 'install03':
				$lang_string['title'] = "创建用户名 &amp; 密码";
				$lang_string['instructions'] = "使用下面的表单来创建一个用户名和密码。";
				$lang_string['username'] = "用户名：";
				$lang_string['password'] = "密码：";
				$lang_string['submit_btn'] = "&nbsp;提交&nbsp;";
				// Success
				$lang_string['success'] = "<h2>祝贺！</h2>你已经登入。点击下面的按钮来访问设置页面，在那里你可以给你的blog命名。呵呵^_^<p />";
				$lang_string['btn_setup'] = "[ 设置 ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>哇！</h2>信息没有保存。在保存用户名和密码时遇到了一个问题。<br /><br />服务器报告：<br />";
				$lang_string['form_error'] = "请完整填写你的用户名和密码。";
				break;
			case 'setup':
				$lang_string['title'] = "设置";
				$lang_string['instructions'] = "你可以在下面改变你的blog的名字，以及你的个人信息。";
				$lang_string['blog_title'] = "Blog名：";
				$lang_string['blog_author'] = "作者：";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "页脚：";
				$lang_string['blog_choose_language'] = "选择语言：";
				$lang_string['blog_enable_comments'] = "允许用户评论"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "在弹出窗口打开评论"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Send email notification when comments are posted"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Send weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Enter full URL (i.e. http://rpc.weblogs.com/RPC2) of service to &quot;ping&quot;.<br />(You can enter more than one address separated by commas.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog"; // <-- New 0.?.?
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "最多显示条目数："; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "在评论中允许使用标签："; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files, 
					thus saving disk-space. It can also transparently compress pages that are sent to browsers 
					which support gzip compression, thus saving bandwidth.<br />
					<br />
					Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your 
					installation of PHP does not support the Zlib extension."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;提交&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
				$lang_string['form_error'] = "请完整填写标题和作者。";
				$lang_string['label_entry_order'] = "条目次序：";
				$lang_string['select_new_to_old'] = "新的在前";
				$lang_string['select_old_to_new'] = "旧的在前";
				$lang_string['label_comment_order'] = "评论次序：";
				break;
			case 'trackbacks':  // <-- New 0.3.8
				// Trackbacks
				$lang_string['title'] = "Trackbacks";
				$lang_string['header'] = "Trackback URL for this entry:";
				$lang_string['delete_btn'] = "delete";
				// Error Response
				$lang_string['error_add'] = "Error storing trackback data.";
				break;
			case 'options':
				$lang_string['title'] = "选项";
				$lang_string['instructions'] = "使用下面的表单来自定义条目和评论的日期和时间的显示。你可以选择12或24小时计时。长日期或短日期格式。<b>预览</b>区域会自动更新以显示你定义的格式的样子。";
				// Long Date
				$lang_string['ldate_title'] = "长日期格式：";
				$lang_string['weekday'] = "星期";
				$lang_string['month'] = "月";
				$lang_string['day'] = "日";
				$lang_string['year'] = "年";
				$lang_string['none'] = "无";
				// Short Date
				$lang_string['sdate_title'] = "短日期格式";
				$lang_string['s_month'] = "月";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "日";
				$lang_string['s_year'] = "年";
				$lang_string['zero_day'] = "个位日期前加零";
				$lang_string['show_century'] = "显示世纪";
				// Time
				$lang_string['time_title'] = "时间格式：";
				$lang_string['12hour'] = "12小时计时";
				$lang_string['24hour'] = "24小时计时";
				$lang_string['before_noon'] = "上午";
				$lang_string['after_noon'] = "下午";
				// Date
				$lang_string['date_title'] = "日期显示格式";
				$lang_string['long_date'] = "长日期";
				$lang_string['short_date'] = "短日期";
				$lang_string['time'] = "时间";
				// Menu
				$lang_string['menu_title'] = "菜单日期显示格式：";
				$lang_string['long_date'] = "长日期";
				$lang_string['short_date'] = "短日期";
				// Used in multiple places
				$lang_string['zero_day'] = "个位日期前加零";
				$lang_string['zero_month'] = "个位月份前加零";
				$lang_string['zero_hour'] = "个位小时前加零";
				$lang_string['separator'] = "分隔符";
				$lang_string['preview'] = "预览：";
				$lang_string['server_offset'] = "服务器时差：";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;提交&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'themes':
				$lang_string['title'] = "页面主题";
				$lang_string['instructions'] = "使用下拉菜单选择不同的页面主题";
				// Themes
				$lang_string['choose_theme'] = "页面主题：";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;提交&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>哇！</h2>信息没有保存。在保存信息时遇到了一个问题。<br /><br />服务器报告：<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "上传图片";
				$lang_string['instructions'] = "点击按钮选择要上传的文件。";
				$lang_string['select_file'] = "选择文件：";
				$lang_string['upload_btn'] = "上传";
				// Error Response
				$lang_string['error'] = "<h2>哇！</h2>不能上传图片。请看更多信息：<br /><br />服务器报告：<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Search Results";
				$lang_string['instructions'] = "Search results for <b>%string</b>:";
				$lang_string['not_found'] = "No results found";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contact Me";
				$lang_string['instructions'] = "Fill in the form:";
				$lang_string['form_error'] = "Please complete the Subject and Comment fields.";
				$lang_string['name'] = "Name:";
				$lang_string['email'] = "Email:";
				$lang_string['subject'] = "Subject:";
				$lang_string['comment'] = "Comment:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				$lang_string['success'] = "<h2>Success!</h2>Your message has been sent.<p />";
				break;
			case 'stats':
				$lang_string['title'] = "<h2>Statistics</h2>";
				$lang_string['general'] = "<h3>General</h3>";
				$lang_string['entry_info'] = "<b>%s</b> entries using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['comment_info'] = "<b>%s</b> comments using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['trackback_info'] = "<b>%s</b> trackbacks stored in <b>%s</b> bytes";
				$lang_string['static_info'] = "<b>%s</b> static pages using <b>%s</b> words stored in <b>%s</b> bytes";
				$lang_string['most_viewed_entries'] = "<h3>10 Most viewed entries</h3>";
				$lang_string['most_commented_entries'] = "<h3>10 Most commented entries</h3>";
				$lang_string['most_trackbacked_entries'] = "<h3>10 Most trackbacked entries</h3>";
				break;
			default:
				break;
		}

	}
		
?>