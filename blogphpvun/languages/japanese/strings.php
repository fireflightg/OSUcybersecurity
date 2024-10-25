<?php
	// Japanese Language File
	// (c) 2004-2005 Sanshiro Akiyama
	//
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.1
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Japanese
		$lang_string['language'] = 'japanese';
		
		// ISO Charset: EUC-JP
		$lang_string['html_charset'] = 'EUC-JP';
		$lang_string['php_charset'] = 'EUC-JP';
		
		$lang_string['locale'] = 'ja_JA'; // <-- New 0.3.7
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
	$lang_string['menu_links'] = "����ƥ��";
	$lang_string['menu_home'] = "�ۡ���";
	$lang_string['menu_contact'] = "�᡼��"; // <-- New 0.3.8
	$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
	$lang_string['menu_archive'] = "����������";
	$lang_string['menu_menu'] = "��˥塼";
	$lang_string['menu_add'] = "��������ȥ꡼";
	$lang_string['menu_add_static'] = "��Ū�ڡ����κ���";
	$lang_string['menu_upload'] = "�����Υ��åץ���";
	$lang_string['menu_setup'] = "����";
	$lang_string['menu_categories'] = "���ƥ��꡼�Խ�"; // 0.3.7q
	$lang_string['menu_info'] = "����ե��᡼�����"; // <-- New 0.3.7
	$lang_string['menu_options'] = "���ץ��������";
	$lang_string['menu_themes'] = "�ơ���";
	$lang_string['menu_colors'] = "�ۿ�";
	$lang_string['menu_change_login'] = "�����󥭡��ѹ�";
	$lang_string['menu_logout'] = "��������";
	$lang_string['menu_login'] = "������";
	$lang_string['menu_most_recent'] = "�ǿ��Υ�����";
	$lang_string['menu_most_recent_entries'] = "�ǿ��Υ���ȥ꡼";
	$lang_string['menu_most_recent_trackback'] = "�ǿ��Υȥ�å��Хå�"; 
	$lang_string['menu_add_block'] = "��������֥�å�";
		
	// Other
	$lang_string['home'] = 'Return to Home';
	$lang_string['nav_next'] = 'Next'; // <-- New 0.3.7
	$lang_string['nav_back'] = 'Back'; // <-- New 0.3.7
	$lang_string['search_title'] = '�������⸡��'; // <-- New 0.3.7
	$lang_string['search_go'] = '����'; // <-- New 0.3.7
	$lang_string['page_generated_in'] = 'Page Generated in %s seconds'; // <-- New 0.3.7
		
	// SB Functions
	$lang_string['sb_months'] = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
		$lang_string['sb_default_title'] = 'No Title';
		$lang_string['sb_default_author'] = 'No Author';
		$lang_string['sb_default_footer'] = 'No Footer';
		
		$lang_string['sb_edit'] = '�Խ�';
		$lang_string['sb_delete'] = '���';
	$lang_string['sb_permalink'] = '���Υ���ȥ꡼��URL'; // <-- New 0.3.8
	$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = '�����Ȥ��';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'comment';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'comments';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' view';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' views';
		
	$lang_string['sb_add_link_btn'] = '��󥯤����ꡦ�ɲ�';
		
	$lang_string['sb_rate_entry_btn'] = '����ȥ꡼�����';
		
	// Entry Text Editor
	if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
	$lang_string['label_subject'] = "�����ȥ�";
	$lang_string['label_insert'] = "����������";
	$lang_string['btn_bold'] = "�ܡ����";
	$lang_string['btn_italic'] = "������å�";
	$lang_string['btn_image'] = "���᡼��";
	$lang_string['btn_url'] = "���";
	$lang_string['view_images'] = "���åץ��ɲ����λ���";
	$lang_string['label_entry'] = "����";
	$lang_string['btn_preview'] = "&nbsp;�ץ�ӥ塼&nbsp;";
	$lang_string['btn_post'] = "&nbsp;���&nbsp;";
	$lang_string['file_name'] = "���Υ���ȥ꡼�Υե�����̾ (�����Բ�)"; 
	// <-- New 0.3.8
	// Javascript Strings
	$lang_string['insert_styles'] = "�ƥ����Ȥ����Ϥ��Ƥ���������";
	$lang_string['insert_image'] = "������URL������";
	$lang_string['insert_url1'] = "��󥯥ƥ�����(���ץ����)";
	$lang_string['insert_url2'] = "�����URL";
	$lang_string['insert_url3'] = "������������ɥ��ǳ��� (���ץ����)"; 
	// <-- New 0.3.6
	$lang_string['form_error'] = "�����ȥ�����Ƥ������Ʋ�������";	
	// More Javascript Strings <-- New 0.3.6
	$lang_string['insert_image_optional'] = '���ץ����:';
	$lang_string['insert_image_width'] = '�������� (���ץ����):';
	$lang_string['insert_image_height'] = '�ĥ����� (���ץ����):';
	$lang_string['insert_image_popup'] = '�ݥåץ��åץ�����ɥ�����(���ץ����):';
	$lang_string['insert_image_float'] = '�����β����߰���(���ץ����):';
		}
	
	switch ($page) {
	case 'add':
	// Add Entry
	$lang_string['title'] = "��������ȥ꡼";
	$lang_string['instructions'] = "����������ȥ꡼��������ޤ���<br />����ȥ꡼�γ�ǧ�ϡ֥ץ�ӥ塼�ץܥ���򥯥�å����Ƥ���������<br />������������ȥ꡼����Ƥϡ���ơץܥ���򥯥�å����Ʋ�������";
	$lang_string['title_ad'] = "�ȥ�å��Хå��γ�ǧ"; // <-- New 0.3.8
	$lang_string['instructions_ad'] = "��ưŪ�˸��Ф��줿URL�Ǥ����ȥ�å��Хå�����Ĥ�����ϡ�OK�ץܥ���򲡤��Ƥ���������"; // <-- New 0.3.8
	$lang_string['label_tb_ping'] = "�ȥ�å��Хå����� (����ޤǶ��ڤä�ʣ�������ǽ)"; // <-- New 0.3.8
	$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
	// Preview / Edit Entry
	$lang_string['title_preview'] = "�ץ�ӥ塼 / �Խ�";
	$lang_string['instructions_preview'] = "����ȥ꡼���Խ���Ԥ��ޤ����ʥ�����ɬ���Ĥ��Ʋ�������'.";
	$lang_string['title_update'] = "����ȥ꡼������";
	$lang_string['instructions_update'] = "����ȥ꡼����ơ���ǧ��Ԥ���������ޤ���";
	$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
	$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>����ȥ꡼����¸�˼��Ԥ��ޤ�����<br /><br />Server Reported:<br />";
	break;
	case 'add_static':
	// Add Entry
	$lang_string['title'] = "��Ū�ڡ����κ���";
	$lang_string['instructions'] = "�ڡ�����¦�Υ���ƥ�ĥ��ꥢ�˥�󥯤������Ū�ڡ�����������ޤ���";
	// Preview / Edit Entry
				$lang_string['title_preview'] = "��ǧ / �Խ�";
	$lang_string['instructions_preview'] = "�����˥ץ�ӥ塼��ɽ������ޤ��ʥ�����ɬ���Ĥ��Ʋ�������";
	$lang_string['title_update'] = "��Ū�ڡ����Υ��åץǡ���";
	$lang_string['instructions_update'] = "��Ū�ڡ�������ơ��ץ�ӥ塼���Ԥ��ޤ���";
	$lang_string['form_error'] = "�����ȥ롢���ơ��ե�����͡���������Ʋ�����";	
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>En����ȥ꡼����Ͽ�Ǥ��ޤ���<br /><br />Server Reported:<br />";
				break;
	case 'add_block':
	// Add / Manage Blocks
	$lang_string['title'] = "�֥�å����Խ����ɲ�";
	$lang_string['instructions'] = "��������֥�å����ɲä��Խ���Ԥ��ޤ���<br />��������֥�å��Ȥϥڡ��������Υ�˥塼���Ǥ�դ����䤻��֥�å��Ǥ���";
	$lang_string['up'] = "���";
	$lang_string['down'] = "������";
	$lang_string['edit'] = "�Խ�";
	$lang_string['delete'] = "���";
	$lang_string['block_name'] = "�֥�å������ȥ�";
	$lang_string['block_content'] = "�֥�å�������";
	$lang_string['instructions_edit'] = "�֥�å��Խ���";
$lang_string['instructions_modify'] = "����å����ƥ֥�å����ѹ����Ʋ�����";
	$lang_string['submit_btn_edit'] = "���ǥ��å�";
	$lang_string['submit_btn_add'] = "�ɲ�";
	$lang_string['form_error'] = "�����ȥ�������Ʋ�������";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
// Add / Manage Links
$lang_string['title'] = "��󥯤��ɲá��Խ�";
$lang_string['instructions'] = "¾�Υ����ȤؤΥ�󥯤��ɲä��ޤ���<br />�ɲäϥ��ɥ쥹�������֥�󥯤�ä���פ򥯥�å����Ƥ�����������󥯤ν�����ѹ�����ˤϡ־�ءסֲ��ءפ򥯥�å����Ƥ�����������󥯤�������ˤ��Խ��򥯥�å����Ƥ�����������󥯤����Ϻ���򥯥�å����Ƥ���������";
$lang_string['up'] = "���";
$lang_string['down'] = "����";
$lang_string['edit'] = "����";
$lang_string['delete'] = "���";
$lang_string['link_name'] = "̾��:";
$lang_string['link_url'] = "�����URL: (����ǥ��ѥ졼�����ˤʤ�ޤ���)";
$lang_string['instructions_edit'] = "��󥯤��Խ���:";
$lang_string['instructions_modify'] = "��󥯤�������ˤϲ��˥���å����Ƥ���������:";
$lang_string['submit_btn_edit'] = "��󥯤��Խ�";
$lang_string['submit_btn_add'] = "��󥯤�ä���";
$lang_string['form_error'] = "̾���������Ʋ�������";
				break;
case 'categories':
// Add / Manage Links
$lang_string['title'] = "���ƥ��꡼���ɲä��Խ�";

$lang_string['instructions'] = "�ʲ��Υե��������Ѥ��ƥ��ƥ��꡼���ɲä��Խ���Ԥ��ޤ���<br /> ���줾��Υ��ƥ�����ܤˤ�'���ƥ���̾(ID�ֹ�)'���դ��Ʋ������� <br />���ڡ�����������Ϥ��Τޤ�ȿ�Ǥ��ޤ���<br /><br /><b>��:</b><br />����(1)<br />�˥塼��(3)<br />&nbsp;&nbsp;���� (6)<br />&nbsp;&nbsp;���٥�� (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;���� (7)<br />�ƥ��Υ��� (2)<br />";
		$lang_string['error'] = "���顼";
		$lang_string['current_categories'] = "�����ȥ��ƥ��꡼";
		$lang_string['no_categories_found'] = "���ƥ��꡼������ޤ���";
		$lang_string['category_list'] = "���ƥ��꡼�ꥹ��";
		$lang_string['validate'] = "���ƥ��꡼��ͭ���ˤ���";
		$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
				break;
	case 'colors':
	// Change Colors
	$lang_string['title'] = "�ۿ��ѹ�";
	$lang_string['instructions'] = "�ڡ������ۿ����ѹ����ޤ���<br />�ƹ��ܤ����򤷤ƥ��顼�ԥå����⤷���Ͽ��ͤǿ�����ꤷ�Ƥ���������";
	$lang_string['bg_color'] = "BG Page";
	$lang_string['main_bg_color'] = "BG Main Page";
	$lang_string['border_color'] = "Page Border";
	$lang_string['inner_border_color'] = "Inner Border";
	$lang_string['header_bg_color'] = "BG Header";
	$lang_string['header_txt_color'] = "Header Text";
	$lang_string['menu_bg_color'] = "BG Menu";
	$lang_string['footer_bg_color'] = "BG Footer";
	$lang_string['txt_color'] = "Main Text";
	$lang_string['headline_txt_color'] = "Headline Text";
	$lang_string['date_txt_color'] = "Date Text";
	$lang_string['footer_txt_color'] = "Footer Text";
	$lang_string['link_reg_color'] = "Link Default";
	$lang_string['link_hi_color'] = "Link Hover";
	$lang_string['link_down_color'] = "Link Active";
	// More Colors
	$lang_string['entry_bg'] = "Entry BG";
	$lang_string['entry_title_bg'] = "Entry Title BG";
	$lang_string['entry_border'] = "Entry Border";
	$lang_string['entry_title_text'] = "Entry Title Text";
	$lang_string['entry_text'] = "Entry Text";
	$lang_string['menu_bg'] = "Menu BG";
	$lang_string['menu_title_bg'] = "Menu Title BG";
	$lang_string['menu_border'] = "Menu Border";
	$lang_string['menu_title_text'] = "Menu Title Text";
	$lang_string['menu_text'] = "Menu Text";
	$lang_string['menu_link_reg_color'] = "Menu Link Default";
	$lang_string['menu_link_hi_color'] = "Menu Link Hover";
	$lang_string['menu_link_down_color'] = "Menu Link Active";
	// Submit
	$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
	$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
	$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
	$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'comments':
	// Comments
	$lang_string['title'] = "������";
	$lang_string['header'] = "�����Ȥ��";
	$lang_string['instructions'] = "ɬ�׻���ȥ����Ȥ����Ϥ��Ʋ�������";
	$lang_string['comment_name'] = "̾��:";
	$lang_string['comment_email'] = "Email:"; // 0.3.8
	$lang_string['comment_url'] = "URL:"; // 0.3.8
	$lang_string['comment_remember'] = "�������Ͽ����:"; // 0.3.8
	$lang_string['comment_text'] = "������:";
	$lang_string['post_btn'] = "&nbsp;�����Ȥ����&nbsp;";
	$lang_string['delete_btn'] = "���";

	// Error Response
	$lang_string['error_add'] = "<h2>Whoops!</h2>�����Ȥ���ƤǤ��ޤ���Ǥ�����<br /><br />Server Reported:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comment not deleted. I ran into a problem while deleting your comment.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Name and Comment fields."; // <-- Need Translation
				break;
	case 'delete':
	$lang_string['title'] = "����ȥ꡼�κ��";
	$lang_string['instructions'] = "����ȥ꡼�κ����Ԥ��ޤ���<br />���ٺ����������ȥ꡼�ϸ����᤹���Ͻ���ޤ���";
	$lang_string['ok_btn'] = "&nbsp;���&nbsp;";
	$lang_string['cancel_btn'] = "&nbsp;����󥻥�&nbsp;";
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>����Ǥ��ޤ���Ǥ�����<br /><br />Server Reported:<br />";
				break;
	case 'delete_static':
				$lang_string['title'] = "��Ū�ڡ����κ��";
	$lang_string['instructions'] = "��Ū�ڡ����κ����Ԥ��ޤ������ٺ�������ڡ����򸵤��᤹���ϤǤ��ޤ���";
	$lang_string['ok_btn'] = "&nbsp;�������&nbsp;";
	$lang_string['cancel_btn'] = "&nbsp;����󥻥�&nbsp;";
				// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>����˼��Ԥ��ޤ���<br /><br />Server Reported:<br />";
				break;
	case 'image_list':
	$lang_string['title'] = "Image List";
	$lang_string['instructions'] = "�ե�����̾�򥯥�å��ǲ����򻲾Ȥ��ޤ���<br /><br />����ȥ꡼�˲�����ä�����ˡ:<br />1) ��󥯤򥳥�ȥ��륯��å����ơ�<br />�֥���åץܡ��ɤؤΥ��ԡ�����󥯡פ�����Ǥ���������.<br />2) ��������ȥ꡼����ꡢ�Խ����Ƥ���������<br />3) ��img�ץܥ���򥯥�å����ơ�������ɥ���URL����ꤷ�Ƥ���������";
				break;
	case 'info': // New 0.3.7
	$lang_string['title'] = "�᥿����";
	$lang_string['instructions'] = "���������󥸥��RSS�ۿ��˻��Ѥ�����������ꤷ�ޤ���";
	$lang_string['info_keywords'] = "�������(����ޤ�ʣ�������ǽ����:
����ץ�,PHP,�֥�)";
	$lang_string['info_description'] = "����(�����ȤξҲ�������Ʋ�������)";
	$lang_string['info_copyright'] = "���ɽ��(���ɽ���Υƥ����Ȥ����ɽ���ڡ����Υ��ɥ쥹�ʤ�)";
	$lang_string['submit_btn'] = "&nbsp;��Ͽ&nbsp;";
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
$lang_string['title'] = "������";
$lang_string['instructions'] = "�桼��̾�ȥѥ���ɤ������Ʋ�������";
$lang_string['username'] = "�桼����̾:";
$lang_string['password'] = "�ѥ����";
$lang_string['submit_btn'] = "&nbsp;������&nbsp;";
// Success
$lang_string['success'] = "<h2>Success!</h2>�����󤷤ޤ���������ǤϤ��ڤ��߲�����!<p />";
// Wrong Password
$lang_string['wrong_password'] = "<h2>Whoops!</h2>������Ǥ��ޤ���Ǥ������������桼��̾�ȥѥ���ɤ�Ƶ������Ʋ�������<p />";
$lang_string['form_error'] = "�桼��̾�ȥѥ���ɤ������Ʋ�������";
				break;
case 'logout':
	$lang_string['title'] = "��������";
	$lang_string['instructions'] = "<h2>Whoops!</h2>���å���������˺�����줺�������Ȥ˼��Ԥ��ޤ�����<p />";
				break;
	case 'forms':
	$lang_string['title'] = "";
	$lang_string['instructions'] = "";
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>��¸�˼��Ԥ��ޤ�����<br /><br />Server Reported:<br />";
				break;
			case 'set_login':
	$lang_string['title'] = "�桼����̾�ȥѥ���ɤ��ѹ�";
	$lang_string['instructions'] = "���ʤ��Υ桼����̾�ޤ��ϥѥ���ɤ��ѹ����ޤ���<br />�������桼����̾����ӥѥ���ɤ����Ϥ��Ƥ���������";
	$lang_string['username'] = "�桼����̾:";
	$lang_string['password'] = "�ѥ����:";
	$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
	// Success
	$lang_string['success'] = "<h2>Success!</h2>�������桼����̾�ȥѥ���ɤ�ͭ���ˤʤ�ޤ�����<p />";
	// Wrong Password
	$lang_string['wrong_password'] = "<h2>Whoops!</h2>�������桼����̾�ȥѥ���ɤ���Ͽ�˼��Ԥ��ޤ�����<br /><br />Server Reported:<br />";
	$lang_string['form_error'] = "�桼����̾�ȥѥ���ɤ������Ʋ�������";
				break;
			case 'install00':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!";
				
				$lang_string['blog_choose_language'] = "Choose Language:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'install01':
$lang_string['title'] = "Simple PHP Blog�ؤ褦������";
$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog ��PHP 4.1�ʹߤ�ư���֥������ƥ�Ǥ���<br />���ե������ƥ����ȥե�����ˤ���������Τǥǡ����١�����ɬ�פȤ��ޤ���<br />�ǡ������Ǽ���룳�ĤΥե����('config', 'content', and 'images')��ư�������ޤ���<br /><b>���Υ�å������򥯥�å����Ƽ��˿ʤ�Ǥ�������:</b>";
$lang_string['begin'] = "[ ���åȥ��åפ�³���� ]";
				break;
			case 'install02':
				$lang_string['title'] = "���åȥ��å�";
$lang_string['instructions'] = "�ǡ�����Ǽ�ե������������ޤ���";
$lang_string['folder_exists'] = "�ե�����ϴ��˺����ѤߤǤ���";
$lang_string['folder_failed'] = "�ե���������˼��Ԥ��ޤ���";
$lang_string['folder_success'] = "�ե����������λ���ޤ���";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				Could not create one or more folders! This is most likely due to:<br>
				<i>1) <b>Write Permissions</b> aren't set to allow <b>Read/Write</b> access.</i><br>
				<i>2) The <b>UID</b>'s (user ID's) of all files and folder must match.</i><p />
				
				Follow the trouble-shooting instructions below and please try again:<p />				
				1) Manually create the following folders: <b>config</b>, <b>content</b>, and <b>images</b>.<p />
				2) Enabled <b>Write Permissions</b> on the folders. In your FTP program, Owner, User, and World should have <b>Read</b> and <b>Write</b> access. <i>(You may need to contact your service provider to change these...)</i><p />
				3) Make sure the UID's of all your files and folders are the same. <i>(You may need to contact your service provider to change these...)</i>";
				$lang_string['try_again'] = "[ Try Again ]";
// Success
$lang_string['success'] = "<h2>����!</h2>�ե������������λ���ޤ�����<p /><b>���åȥ��åפ�³����򥯥�å����Ʋ�����:</b>";
	$lang_string['continue'] = "[ ���åȥ��åפ�³���� ]";
				break;
			case 'install03':
$lang_string['title'] = "�桼����̾�ȥѥ���ɤ�����";
$lang_string['instructions'] = "�桼����̾�ȥѥ���ɤ������Ʋ�������";
$lang_string['username'] = "�桼����̾:";
$lang_string['password'] = "�ѥ����:";
$lang_string['submit_btn'] = "&nbsp;��Ͽ&nbsp;";
// Success
$lang_string['success'] = "<h2>Congratulations!</h2>���󥹥ȡ���ϴ�λ���ޤ���������ǤϤ��ڤ��ߤ���������<p />";
$lang_string['btn_setup'] = "[ ����˿ʤ� ]";
	// Wrong Password
	$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
$lang_string['form_error'] = "�桼����̾�ȥѥ���ɤ������Ƥ���������";
				break;
	case 'setup':
	$lang_string['title'] = "����";
	$lang_string['instructions'] = "blog������ȴ����Ծ�������ꤷ�ޤ���";
	$lang_string['blog_title'] = "�֥������ȥ�";
	$lang_string['blog_author'] = "������̾";
	$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
	$lang_string['blog_footer'] = "�եå���";
	$lang_string['blog_choose_language'] = "��������";
	$lang_string['blog_enable_comments'] = "�����ȵ�ǽ��Ȥ�"; 
	// <-- New 0.3.6
	$lang_string['blog_comments_popup'] = "�����Ȥ�ݥåץ��åץ�����ɥ���ɽ��"; // <-- New 0.3.6
	$lang_string['blog_enable_voting'] = "����ȥ꡼ɾ����ǽ��Ȥ�"; 
	// <-- New 0.3.8
	$lang_string['blog_email_notification'] = "�����������Ȥ�������᡼����Τ餻��"; // <-- New 0.3.7
	$lang_string['blog_send_pings'] = "�����С���Ping����������"; // <-- New 0.3.7
	$lang_string['blog_ping_urls'] = "���Τ�URL�������Ʋ������� (�㡧http://rpc.weblogs.com/RPC2)<br />(����ޤǶ��ڤ���ˤ��ʣ���Υ����С�����ꤹ�뤳�Ȥ�����ޤ���)"; // <-- New 0.3.7
	$lang_string['blog_trackback_about'] = "�ȥ�å��Хå���������ǽ�������Ԥ��ޤ���<br /> ��ư�ǥȥ�å��Хå����ɲä��뤫��ư���е�ǽ����Ѥ��뤫����Ǥ��ޤ���"; // <-- New 0.3.8
$lang_string['blog_trackback_enabled'] = "�ȥ�å��Хå���ǽ����Ѥ���";
// <-- New 0.3.8
	$lang_string['blog_trackback_auto_discovery'] = "�ȥ�å��Хå��μ�ư��������ǽ����Ѥ��롣"; // <-- New 0.?.?
	$lang_string['blog_max_entries'] = "���ڡ�����κ���ɽ������ȥ��"; 
	// <-- New 0.3.6
	$lang_string['blog_comment_tags'] = "��������ǻ��Ѳ�ǽ�ʥ���"; 
	// <-- New 0.3.6
	$lang_string['blog_gzip_about'] = "SPHP 4.0.4�ʹߤ�����Ѳ�ǽ��gzip(.gz)���̵�ǽ�������Ԥ��ޤ���<br />�ե�����򰵽̤�����ˤ��ǥ��������ڡ���������ȥ����С��ؤ���٤��ޤ�������Ǥ��ޤ���<br />�������Ǥϥ��դˤʤäƤ���ޤ��Τ�ɬ�פ˱�����ͭ���ˤ��Ʋ�������"; // <-- New 0.3.7
	$lang_string['blog_enable_gzip_txt'] = "���ե������gzip�ǰ��̤���"; 
	// <-- New 0.3.7
	$lang_string['blog_enable_gzip_output'] = "HTTP�����Ѥ�gzip���̤���Ѥ��ޤ�"; // <-- New 0.3.7
	$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>�������¸�˼��Ԥ��ޤ���<br /><br />Server Reported:<br />";
	$lang_string['form_error'] = "Please complete the Title and Author fields.";
	$lang_string['label_entry_order'] = "����ȥ꡼��ɽ��";
	$lang_string['select_new_to_old'] = "���������ɽ��";
	$lang_string['select_old_to_new'] = "�Ť����ɽ��";
	$lang_string['label_comment_order'] = "�����Ȥ�ɽ��";
				break;
	case 'trackbacks':  // <-- New 0.3.8
	// Trackbacks
	$lang_string['title'] = "�ȥ�å��Хå�";
	$lang_string['header'] = "���Υ���ȥ꡼�Υȥ�å��Хå�URL";
	$lang_string['delete_btn'] = "���";
	// Error Response
	$lang_string['error_add'] = "Error storing trackback data.";
				break;
	case 'options':
	$lang_string['title'] = "���ץ��������";
				$lang_string['instructions'] = "�����Ȥȥ���ȥ꡼������ɽ���Ȼ���ɽ���򥫥����ޥ������뤿�������Ǥ���<br />���դ�û�����դ�Ĺ�����ա�����ɽ����12���������뤤��24�������λ���ɽ�������򤹤뤳�Ȥ��Ǥ��ޤ���<br />�ץ�ӥ塼�ǳ�ǧ��������Ǥ��ޤ���";
		// Long Date
	$lang_string['ldate_title'] = "Ĺ�����շ���";
	$lang_string['weekday'] = "����";
	$lang_string['month'] = "��";
	$lang_string['day'] = "��";
	$lang_string['year'] = "ǯ";
	$lang_string['none'] = "̵��";
				// Short Date
		$lang_string['sdate_title'] = "û������:";
		$lang_string['s_month'] = "��";
				$lang_string['s_mon'] = "MMM";
		$lang_string['s_day'] = "��";
		$lang_string['s_year'] = "ǯ";
		$lang_string['zero_day'] = "���դ˥�����դ�����㡧01��";
		$lang_string['show_century'] = "�����ά���ˤ�ɽ��";
		// Time
		$lang_string['time_title'] = "����ɽ��";
		$lang_string['12hour'] = "12������";
		$lang_string['24hour'] = "24������";
		$lang_string['before_noon'] = "����";
		$lang_string['after_noon'] = "���";
		// Date
		$lang_string['date_title'] = "���դ�ɽ������:";
		$lang_string['long_date'] = "Ĺ������";
		$lang_string['short_date'] = "û������";
		$lang_string['time'] = "����";
		// Menu
		$lang_string['menu_title'] = "��˥塼������ɽ������:";
		$lang_string['long_date'] = "Ĺ������";
		$lang_string['short_date'] = "û������";
		// Used in multiple places
		$lang_string['zero_day'] = "������դ�����㡧01��";
		$lang_string['zero_month'] = "������դ�����㡧01��";
		$lang_string['zero_hour'] = "����˥�����դ�����㡧01��";
		$lang_string['separator'] = "���ѥ졼����";
		$lang_string['preview'] = "�ץ�ӥ塼";
		$lang_string['server_offset'] = "�����С����ե��å�";
				
// Buttons
		$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
// Error Response
		$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
		break;
		case 'themes':
		$lang_string['title'] = "���Ѥ��ѹ�";
$lang_string['instructions'] = "�ץ�������˥塼������Ѥ���ơ��ޤ����򤷤Ƥ���������";
	// Themes
	$lang_string['choose_theme'] = "themes";
	// Buttons
	$lang_string['submit_btn'] = "&nbsp;����&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
	case 'upload_img':
	$lang_string['title'] = "�����Υ��åץ���";
	$lang_string['instructions'] = "�����ե�����Υ��åץ��ɤ�Ԥ��ޤ���";
	$lang_string['select_file'] = "�ե����������";
	$lang_string['upload_btn'] = "���åץ���";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Couldn't upload image. Here's some more information:<br /><br />Server Reported:<br />";
				break;
	case 'search': // <-- New 0.3.7
	$lang_string['title'] = "õ�����";
	$lang_string['instructions'] = "����������ɡ�<b>%string</b>:";
	$lang_string['not_found'] = "���Ĥ���ޤ���Ǥ�����<br />�㤦������ɤǺƸ������Ʋ�������";
				break;
case 'contact': // <-- New 0.3.8
$lang_string['title'] = "���󥿥���";
$lang_string['instructions'] = "�����ͤؤΥ�å�������Ϣ��Ϥ�����ؤ��ꤤ���ޤ���";
$lang_string['form_error'] = "�����ȥ�ȥ�å������������Ʋ�������";
$lang_string['name'] = "��̾���������Ʋ�������";
$lang_string['email'] = "Email���ɥ쥹�������Ʋ�������";
$lang_string['subject'] = "�����ȥ�������Ʋ�������";
$lang_string['comment'] = "��å������򤪴ꤤ���ޤ���";
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