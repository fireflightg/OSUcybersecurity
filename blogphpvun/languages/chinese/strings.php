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
		$lang_string['menu_links'] = "����";
		$lang_string['menu_home'] = "��ҳ";
		$lang_string['menu_contact'] = "Contact Me"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "����";
		$lang_string['menu_menu'] = "�˵�";
		$lang_string['menu_add'] = "�����Ŀ";
		$lang_string['menu_add_static'] = "��Ӿ�̬ҳ��";
		$lang_string['menu_upload'] = "�ϴ�ͼƬ";
		$lang_string['menu_setup'] = "����";
		$lang_string['menu_categories'] = "Categories";
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "ѡ��";
		$lang_string['menu_themes'] = "ҳ������";
		$lang_string['menu_colors'] = "��ɫ";
		$lang_string['menu_change_login'] = "���ĵ�¼";
		$lang_string['menu_logout'] = "�ǳ�";
		$lang_string['menu_login'] = "��¼";
		$lang_string['menu_most_recent'] = "�������";
		$lang_string['menu_most_recent_entries'] = "Most Recent Entries"; // <-- New 0.3.8
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Blocks";
		
		// Other
		$lang_string['home'] = "������ҳ";
		$lang_string['nav_next'] = 'Next'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Back'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Search:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Go'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Page Generated in %s seconds'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'һ��', '����', '����', '����', '����', '����', '����', '����', '����', 'ʮ��', 'ʮһ��', 'ʮ����' );
		$lang_string['sb_default_title'] = 'û�б���';
		$lang_string['sb_default_author'] = 'û������';
		$lang_string['sb_default_footer'] = 'û��ҳ��';
		
		$lang_string['sb_edit'] = '�༭';
		$lang_string['sb_delete'] = 'ɾ��';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = '��������';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = '����';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = '����';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' �����';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' �����';
		
		$lang_string['sb_add_link_btn'] = '���/��������';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "��Ŀ��";
				$lang_string['label_insert'] = "�����ǩ��";
				$lang_string['btn_bold'] = "��";
				$lang_string['btn_italic'] = "б";
				$lang_string['btn_image'] = "ͼ";
				$lang_string['btn_url'] = "��";
				$lang_string['view_images'] = "����ϴ���ͼƬ";
				$lang_string['label_entry'] = "���ݣ�";
				$lang_string['btn_preview'] = "&nbsp;Ԥ��&nbsp;";
				$lang_string['btn_post'] = "&nbsp;����&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "����Ҫ��ʽ��������";
				$lang_string['insert_image'] = "����ͼƬ�ĵ�ַ";
				$lang_string['insert_url1'] = "�������ӵ�˵������(��ѡ)";
				$lang_string['insert_url2'] = "�������ӵ�������ַ";
				$lang_string['insert_url3'] = "���´����д�����(��ѡ)��"; // <-- New 0.3.6
				$lang_string['form_error'] = "��������д��Ŀ����Ŀ�����ݡ�";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = '��ѡ��';
				$lang_string['insert_image_width'] = '���(��ѡ)��';
				$lang_string['insert_image_height'] = '�߶�(��ѡ)��';
				$lang_string['insert_image_popup'] = '������ڵ����������ȫͼ(��ѡ)��';
				$lang_string['insert_image_float'] = '����(��ѡ)��';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "�����Ŀ";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions'] = "��׼������ô? ��д����ı�Ȼ�󰴡�Ԥ�������鿴��Ŀ�����ӣ����߰��������Ա�����Ŀ��";
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Ԥ��/�༭��Ŀ";
				$lang_string['instructions_preview'] = "��������Ŀ�����ӡ������ʹ����������ʽ�������ͼƬ����ǵùر����еı�ǩ��";
				$lang_string['title_update'] = "������Ŀ";
				$lang_string['instructions_update'] = "�����ʹ������ı����������Ŀ��׼�����˾Ͱ���Ԥ�����򡰷�����";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>�ۣ�</h2>��Ŀû�б��档�ڱ�����Ŀʱ������һ�����⡣<br /><br />���������棺<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "��Ӿ�̬ҳ��";
				$lang_string['instructions'] = "��д����ı�������һ����̬ҳ�档�ͱ�׼����־��Ŀ��ͬ���ǣ���̬��Ŀ������ֱ����ʾ��ҳ���Ҳ�Ĳ˵�����Щ���ڳ��õ����ݣ����磺�����ҡ���ϵ���ǡ������ƻ��ȡ�����Ԥ�������鿴��Ŀ�����ӣ����߰��������Ա�����Ŀ��";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Ԥ��/�༭��Ŀ";
				$lang_string['instructions_preview'] = "��������Ŀ�����ӡ������ʹ����������ʽ�������ͼƬ����ǵùر����еı�ǩ��";
				$lang_string['title_update'] = "������Ŀ";
				$lang_string['instructions_update'] = "�����ʹ������ı����������Ŀ��׼�����˾Ͱ���Ԥ�����򡰷�����";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>�ۣ�</h2>��Ŀû�б��档�ڱ�����Ŀʱ������һ�����⡣<br /><br />���������棺<br />";
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
				$lang_string['title'] = "���/��������";
				$lang_string['instructions'] = "����Զ����ָ������վ������ӡ���д����ı�Ȼ�󰴡�������ӡ������һ�����ӡ����������µİ�ť���ı����ӵĴ��򡣰��༭��ť���Ķ����ӡ���ɾ����ť���Ƴ�һ�����ӡ�";
				$lang_string['up'] = "����";
				$lang_string['down'] = "����";
				$lang_string['edit'] = "�༭";
				$lang_string['delete'] = "ɾ��";
				$lang_string['link_name'] = "�������ƣ�";
				$lang_string['link_url'] = "���ӵ�ַ��(��ѡ������������һ���ָ�����)";
				$lang_string['instructions_edit'] = "�����ڱ༭���ӣ�";
				$lang_string['instructions_modify'] = "������İ�ť���Ķ�һ�����ӣ�";
				$lang_string['submit_btn_edit'] = "�༭����";
				$lang_string['submit_btn_add'] = "�������";
				$lang_string['form_error'] = "����д�������ơ�";
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
				$lang_string['title'] = "��ɫ";
				$lang_string['instructions'] = "����Ըı���־�����ֺͱ�������ɫ����������ѡ����Ŀ��Ȼ��ʹ�õ�ɫ���������ɫ��ɫֵ���Զ��ı�ġ�";
				$lang_string['bg_color'] = "��־ҳ��";
				$lang_string['main_bg_color'] = "��־����";
				$lang_string['border_color'] = "ҳ��߿�";
				$lang_string['inner_border_color'] = "�ڱ߿�";
				$lang_string['header_bg_color'] = "��־ҳü";
				$lang_string['header_txt_color'] = "ҳü����";
				$lang_string['menu_bg_color'] = "��־�˵�";
				$lang_string['footer_bg_color'] = "��־ҳ��";
				$lang_string['txt_color'] = "��������";
				$lang_string['headline_txt_color'] = "��������";
				$lang_string['date_txt_color'] = "��������";
				$lang_string['footer_txt_color'] = "ҳ������";
				$lang_string['link_reg_color'] = "����ȱʡ";
				$lang_string['link_hi_color'] = "��������";
				$lang_string['link_down_color'] = "���Ӽ���";
				// More Colors
				$lang_string['entry_bg'] = "��Ŀ����";
				$lang_string['entry_title_bg'] = "��Ŀ���ⱳ��";
				$lang_string['entry_border'] = "��Ŀ�߿�";
				$lang_string['entry_title_text'] = "��Ŀ��������";
				$lang_string['entry_text'] = "��Ŀ����";
				$lang_string['menu_bg'] = "�˵�����";
				$lang_string['menu_title_bg'] = "�˵����ⱳ��";
				$lang_string['menu_border'] = "�˵��߿�";
				$lang_string['menu_title_text'] = "�˵���������";
				$lang_string['menu_text'] = "�˵�����";
				$lang_string['menu_link_reg_color'] = "�˵�����ȱʡ";
				$lang_string['menu_link_hi_color'] = "�˵���������";
				$lang_string['menu_link_down_color'] = "�˵����Ӽ���";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
				$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;�ύ&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�ۣ�</h2>��Ϣû�б��档�ڱ�����Ϣʱ������һ�����⡣<br /><br />���������棺<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['title'] = "����";
				$lang_string['header'] = "��������";
				$lang_string['instructions'] = "��д����ı�������������ۡ�";
				$lang_string['comment_name'] = "������֣�";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "���ۣ�";
				$lang_string['post_btn'] = "&nbsp;��������&nbsp;";
				$lang_string['delete_btn'] = "ɾ��";
				// Error Response
				$lang_string['error_add'] = "<h2>�ۣ�</h2>����û�б��档�ڱ�������ʱ������һ�����⡣<br /><br />���������棺<br />";
				$lang_string['error_delete'] = "<h2>�ۣ�</h2>����û��ɾ������ɾ������ʱ������һ�����⡣<br /><br />���������棺<br />";
				$lang_string['form_error'] = "��������д���ֺ�������Ŀ��"; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "ɾ����Ŀ";
				$lang_string['instructions'] = "������׼��ɾ������Ŀ����ȷ���������ɵ�������������ǲ�����صġ���";
				$lang_string['ok_btn'] = "&nbsp;ɾ��&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;ȡ��&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�ۣ�</h2>��Ŀû��ɾ����<br /><br />���������棺<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "ɾ����̬ҳ��";
				$lang_string['instructions'] = "������׼��ɾ���ľ�̬ҳ�档��ȷ���������ɵ�������������ǲ�����صġ���";
				$lang_string['ok_btn'] = "&nbsp;ɾ��&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;ȡ��&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�ۣ�</h2>��Ŀû��ɾ����<br /><br />���������棺<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "ͼƬ�б�";
				$lang_string['instructions'] = "�����������������ͼƬ��<br /><br />Ҫ��ͼƬ��ӵ���Ŀ��<br />1) �һ�һ������Ȼ��ѡ�񡰿������ӵ����а塱��<br />2) �ص������Ŀ��༭��Ŀ��ҳ�档<br />3) �����ͼ����ťȻ�������ӵ�ַ��";
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
				$lang_string['title'] = "��¼";
				$lang_string['instructions'] = "����������û���������";
				$lang_string['username'] = "�û�����";
				$lang_string['password'] = "���룺";
				$lang_string['submit_btn'] = "&nbsp;�ύ&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�ɹ���</h2>���Ѿ����롣�Ǻ�^_^<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>�ۣ�</h2>��û�е��롣������������û����������Ƿ���ȷ������һ�Ρ�<p />";
				$lang_string['form_error'] = "��������д����û��������롣"; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "�ǳ�";
				$lang_string['instructions'] = "<h2>�ۣ�</h2>�ǳ�ʧ�ܡ�����ɾ��cookie������ô���ڵ���?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>�ۣ�</h2>��Ϣû�б��档�ڱ�����Ϣʱ������һ�����⡣<br /><br />���������棺<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "�ı��û��� &amp; ����";
				$lang_string['instructions'] = "ʹ������ı����ı�����û�����(��)���롣������Ҫʹ�õ��û��������롣";
				$lang_string['username'] = "�û�����";
				$lang_string['password'] = "���룺";
				$lang_string['submit_btn'] = "&nbsp;�ύ&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�ɹ���</h2>����û����������Ѿ��ı䡣�Ǻ�^_^<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>�ۣ�</h2>��Ϣû�б��档�ڱ����û���������ʱ������һ�����⡣<br /><br />���������棺<br />";
				$lang_string['form_error'] = "��������д����û��������롣";
				break;
			case 'install00':
				$lang_string['title'] = "��ӭ";
				$lang_string['instructions'] = "��л��ѡ�� Simple PHP Blog��";
				
				$lang_string['blog_choose_language'] = "��ѡ�����ԣ�";
				$lang_string['submit_btn'] = "&nbsp;�ύ&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "��ӭ";
				$lang_string['instructions'] = "��л��ѡ�� Simple PHP Blog��<br /><br />Simple PHP Blog��һ������blogϵͳ������ҪPHP 4.1����߰汾���Լ��������ε�дȨ�ޡ�������Ϣ�������ļ�����Բ���Ҫ���ݿ⡣<br /><br />�ڿ�ʼʱ�� Simple PHP Blog��Ҫ��������Ŀ¼('config'��'content'��'images')�������Ϣ��<br /><br /><b>������İ�ť����ʼ��װ��</b>";



				$lang_string['begin'] = "[ ��ʼ��װ ]";
				break;
			case 'install02':
				$lang_string['title'] = "��װ";
				$lang_string['instructions'] = "���Դ���'config'��'content'��'images'Ŀ¼��";
				$lang_string['folder_exists'] = "̫���ˣ�Ŀ¼�Ѿ������ˡ�����Ҫ��ʲô�Ķ�����";
				$lang_string['folder_failed'] = "�ۣ����ܴ���Ŀ¼����";
				$lang_string['folder_success'] = "�ɹ��ˣ�Ŀ¼�Ѵ�������";
				// Help
				$lang_string['help'] = "<h2>�ۣ�</h2>���ܴ���һ�������Ŀ¼����ܿ�������Ϊ��<br><i>1) <b>дȨ��</b>��������</i><br><i>2)�ļ���Ŀ¼��<b>UID</b>��ƥ�䡣</i><p />�밴����������ѽ������һ�Σ�<p />1) �ֹ�����Ŀ¼��<b>config</b>��<b>content</b>��<b>images</b>��<p />2) ����Ŀ¼��<b>дȨ��</b>����FTP������Owner��User��WorldӦ������<b>��</b>��<b>д</b>���ʡ�<i>(�������Ҫ��ϵ��ķ����ṩ��������Щ�Ķ�����)</i><p />3) ȷ������ļ���Ŀ¼��UID����ͬ��<i>(�������Ҫ��ϵ��ķ����ṩ��������Щ�Ķ�����)</i>";
				
				
				
				
				
				
				
				
				
				$lang_string['try_again'] = "[ ����һ�� ]";
				// Success
				$lang_string['success'] = "<h2>�ɹ��ˣ�</h2>Ŀ¼�����ɹ���<p /><b>�������İ�ť������</b>";
				$lang_string['continue'] = "[ ���� ]";
				break;
			case 'install03':
				$lang_string['title'] = "�����û��� &amp; ����";
				$lang_string['instructions'] = "ʹ������ı�������һ���û��������롣";
				$lang_string['username'] = "�û�����";
				$lang_string['password'] = "���룺";
				$lang_string['submit_btn'] = "&nbsp;�ύ&nbsp;";
				// Success
				$lang_string['success'] = "<h2>ף�أ�</h2>���Ѿ����롣�������İ�ť����������ҳ�棬����������Ը����blog�������Ǻ�^_^<p />";
				$lang_string['btn_setup'] = "[ ���� ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>�ۣ�</h2>��Ϣû�б��档�ڱ����û���������ʱ������һ�����⡣<br /><br />���������棺<br />";
				$lang_string['form_error'] = "��������д����û��������롣";
				break;
			case 'setup':
				$lang_string['title'] = "����";
				$lang_string['instructions'] = "�����������ı����blog�����֣��Լ���ĸ�����Ϣ��";
				$lang_string['blog_title'] = "Blog����";
				$lang_string['blog_author'] = "���ߣ�";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "ҳ�ţ�";
				$lang_string['blog_choose_language'] = "ѡ�����ԣ�";
				$lang_string['blog_enable_comments'] = "�����û�����"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "�ڵ������ڴ�����"; // <-- New 0.3.6
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
				$lang_string['blog_max_entries'] = "�����ʾ��Ŀ����"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "������������ʹ�ñ�ǩ��"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files, 
					thus saving disk-space. It can also transparently compress pages that are sent to browsers 
					which support gzip compression, thus saving bandwidth.<br />
					<br />
					Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your 
					installation of PHP does not support the Zlib extension."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;�ύ&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�ۣ�</h2>��Ϣû�б��档�ڱ�����Ϣʱ������һ�����⡣<br /><br />���������棺<br />";
				$lang_string['form_error'] = "��������д��������ߡ�";
				$lang_string['label_entry_order'] = "��Ŀ����";
				$lang_string['select_new_to_old'] = "�µ���ǰ";
				$lang_string['select_old_to_new'] = "�ɵ���ǰ";
				$lang_string['label_comment_order'] = "���۴���";
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
				$lang_string['title'] = "ѡ��";
				$lang_string['instructions'] = "ʹ������ı����Զ�����Ŀ�����۵����ں�ʱ�����ʾ�������ѡ��12��24Сʱ��ʱ�������ڻ�����ڸ�ʽ��<b>Ԥ��</b>������Զ���������ʾ�㶨��ĸ�ʽ�����ӡ�";
				// Long Date
				$lang_string['ldate_title'] = "�����ڸ�ʽ��";
				$lang_string['weekday'] = "����";
				$lang_string['month'] = "��";
				$lang_string['day'] = "��";
				$lang_string['year'] = "��";
				$lang_string['none'] = "��";
				// Short Date
				$lang_string['sdate_title'] = "�����ڸ�ʽ";
				$lang_string['s_month'] = "��";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "��";
				$lang_string['s_year'] = "��";
				$lang_string['zero_day'] = "��λ����ǰ����";
				$lang_string['show_century'] = "��ʾ����";
				// Time
				$lang_string['time_title'] = "ʱ���ʽ��";
				$lang_string['12hour'] = "12Сʱ��ʱ";
				$lang_string['24hour'] = "24Сʱ��ʱ";
				$lang_string['before_noon'] = "����";
				$lang_string['after_noon'] = "����";
				// Date
				$lang_string['date_title'] = "������ʾ��ʽ";
				$lang_string['long_date'] = "������";
				$lang_string['short_date'] = "������";
				$lang_string['time'] = "ʱ��";
				// Menu
				$lang_string['menu_title'] = "�˵�������ʾ��ʽ��";
				$lang_string['long_date'] = "������";
				$lang_string['short_date'] = "������";
				// Used in multiple places
				$lang_string['zero_day'] = "��λ����ǰ����";
				$lang_string['zero_month'] = "��λ�·�ǰ����";
				$lang_string['zero_hour'] = "��λСʱǰ����";
				$lang_string['separator'] = "�ָ���";
				$lang_string['preview'] = "Ԥ����";
				$lang_string['server_offset'] = "������ʱ�";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;�ύ&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�ۣ�</h2>��Ϣû�б��档�ڱ�����Ϣʱ������һ�����⡣<br /><br />���������棺<br />";
				break;
			case 'themes':
				$lang_string['title'] = "ҳ������";
				$lang_string['instructions'] = "ʹ�������˵�ѡ��ͬ��ҳ������";
				// Themes
				$lang_string['choose_theme'] = "ҳ�����⣺";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;�ύ&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�ۣ�</h2>��Ϣû�б��档�ڱ�����Ϣʱ������һ�����⡣<br /><br />���������棺<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "�ϴ�ͼƬ";
				$lang_string['instructions'] = "�����ťѡ��Ҫ�ϴ����ļ���";
				$lang_string['select_file'] = "ѡ���ļ���";
				$lang_string['upload_btn'] = "�ϴ�";
				// Error Response
				$lang_string['error'] = "<h2>�ۣ�</h2>�����ϴ�ͼƬ���뿴������Ϣ��<br /><br />���������棺<br />";
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