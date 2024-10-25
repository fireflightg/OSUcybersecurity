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
	$lang_string['menu_links'] = "コンテンツ";
	$lang_string['menu_home'] = "ホーム";
	$lang_string['menu_contact'] = "メール"; // <-- New 0.3.8
	$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
	$lang_string['menu_archive'] = "アーカイブ";
	$lang_string['menu_menu'] = "メニュー";
	$lang_string['menu_add'] = "新規エントリー";
	$lang_string['menu_add_static'] = "静的ページの作成";
	$lang_string['menu_upload'] = "画像のアップロード";
	$lang_string['menu_setup'] = "設定";
	$lang_string['menu_categories'] = "カテゴリー編集"; // 0.3.7q
	$lang_string['menu_info'] = "インフォメーション"; // <-- New 0.3.7
	$lang_string['menu_options'] = "オプション設定";
	$lang_string['menu_themes'] = "テーマ";
	$lang_string['menu_colors'] = "配色";
	$lang_string['menu_change_login'] = "ログインキー変更";
	$lang_string['menu_logout'] = "ログアウト";
	$lang_string['menu_login'] = "ログイン";
	$lang_string['menu_most_recent'] = "最新のコメント";
	$lang_string['menu_most_recent_entries'] = "最新のエントリー";
	$lang_string['menu_most_recent_trackback'] = "最新のトラックバック"; 
	$lang_string['menu_add_block'] = "カスタムブロック";
		
	// Other
	$lang_string['home'] = 'Return to Home';
	$lang_string['nav_next'] = 'Next'; // <-- New 0.3.7
	$lang_string['nav_back'] = 'Back'; // <-- New 0.3.7
	$lang_string['search_title'] = 'サイト内検索'; // <-- New 0.3.7
	$lang_string['search_go'] = '検索'; // <-- New 0.3.7
	$lang_string['page_generated_in'] = 'Page Generated in %s seconds'; // <-- New 0.3.7
		
	// SB Functions
	$lang_string['sb_months'] = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
		$lang_string['sb_default_title'] = 'No Title';
		$lang_string['sb_default_author'] = 'No Author';
		$lang_string['sb_default_footer'] = 'No Footer';
		
		$lang_string['sb_edit'] = '編集';
		$lang_string['sb_delete'] = '削除';
	$lang_string['sb_permalink'] = 'このエントリーのURL'; // <-- New 0.3.8
	$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = 'コメントを書く';
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
		
	$lang_string['sb_add_link_btn'] = 'リンクの設定・追加';
		
	$lang_string['sb_rate_entry_btn'] = 'エントリーを採点';
		
	// Entry Text Editor
	if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
	$lang_string['label_subject'] = "タイトル";
	$lang_string['label_insert'] = "タグの挿入";
	$lang_string['btn_bold'] = "ボールド";
	$lang_string['btn_italic'] = "イタリック";
	$lang_string['btn_image'] = "イメージ";
	$lang_string['btn_url'] = "リンク";
	$lang_string['view_images'] = "アップロード画像の参照";
	$lang_string['label_entry'] = "内容";
	$lang_string['btn_preview'] = "&nbsp;プレビュー&nbsp;";
	$lang_string['btn_post'] = "&nbsp;投稿&nbsp;";
	$lang_string['file_name'] = "このエントリーのファイル名 (空欄不可)"; 
	// <-- New 0.3.8
	// Javascript Strings
	$lang_string['insert_styles'] = "テキストを入力してください。";
	$lang_string['insert_image'] = "画像のURLを入力";
	$lang_string['insert_url1'] = "リンクテキスト(オプション)";
	$lang_string['insert_url2'] = "リンク先URL";
	$lang_string['insert_url3'] = "新しいウィンドウで開く (オプション)"; 
	// <-- New 0.3.6
	$lang_string['form_error'] = "タイトルと内容を記入して下さい。";	
	// More Javascript Strings <-- New 0.3.6
	$lang_string['insert_image_optional'] = 'オプション:';
	$lang_string['insert_image_width'] = '横サイズ (オプション):';
	$lang_string['insert_image_height'] = '縦サイズ (オプション):';
	$lang_string['insert_image_popup'] = 'ポップアップウィンドウ設定(オプション):';
	$lang_string['insert_image_float'] = '画像の回り込み位置(オプション):';
		}
	
	switch ($page) {
	case 'add':
	// Add Entry
	$lang_string['title'] = "新規エントリー";
	$lang_string['instructions'] = "新しいエントリーを作成します。<br />エントリーの確認は「プレビュー」ボタンをクリックしてください。<br />完成したエントリーの投稿は「投稿」ボタンをクリックして下さい。";
	$lang_string['title_ad'] = "トラックバックの確認"; // <-- New 0.3.8
	$lang_string['instructions_ad'] = "自動的に検出されたURLです。トラックバックを許可する場合は「OK」ボタンを押してください。"; // <-- New 0.3.8
	$lang_string['label_tb_ping'] = "トラックバック送信 (カンマで区切って複数指定可能)"; // <-- New 0.3.8
	$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
	// Preview / Edit Entry
	$lang_string['title_preview'] = "プレビュー / 編集";
	$lang_string['instructions_preview'] = "エントリーの編集を行います。（タグは必ず閉じて下さい）'.";
	$lang_string['title_update'] = "エントリーを再投稿";
	$lang_string['instructions_update'] = "エントリーの投稿、確認を行う事が出来ます。";
	$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
	$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>エントリーの保存に失敗しました。<br /><br />Server Reported:<br />";
	break;
	case 'add_static':
	// Add Entry
	$lang_string['title'] = "静的ページの作成";
	$lang_string['instructions'] = "ページ右側のコンテンツエリアにリンクされる静的ページを作成します。";
	// Preview / Edit Entry
				$lang_string['title_preview'] = "確認 / 編集";
	$lang_string['instructions_preview'] = "ここにプレビューが表示されます（タグは必ず閉じて下さい）";
	$lang_string['title_update'] = "静的ページのアップデート";
	$lang_string['instructions_update'] = "静的ページの投稿、プレビューが行えます。";
	$lang_string['form_error'] = "タイトル、内容、ファイルネームを記入して下さい";	
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>Enエントリーが登録できません<br /><br />Server Reported:<br />";
				break;
	case 'add_block':
	// Add / Manage Blocks
	$lang_string['title'] = "ブロックの編集と追加";
	$lang_string['instructions'] = "カスタムブロックの追加と編集を行います。<br />カスタムブロックとはページ右部のメニュー内に任意に増やせるブロックです。";
	$lang_string['up'] = "上る";
	$lang_string['down'] = "下がる";
	$lang_string['edit'] = "編集";
	$lang_string['delete'] = "削除";
	$lang_string['block_name'] = "ブロックタイトル";
	$lang_string['block_content'] = "ブロックの内容";
	$lang_string['instructions_edit'] = "ブロック編集中";
$lang_string['instructions_modify'] = "クリックしてブロックを変更して下さい";
	$lang_string['submit_btn_edit'] = "エディット";
	$lang_string['submit_btn_add'] = "追加";
	$lang_string['form_error'] = "タイトルを記入して下さい。";
				break;
			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
// Add / Manage Links
$lang_string['title'] = "リンクの追加・編集";
$lang_string['instructions'] = "他のサイトへのリンクを追加します。<br />追加はアドレスを記入し「リンクを加える」をクリックしてください。リンクの順序を変更するには「上へ」「下へ」をクリックしてください。リンクを修正するには編集をクリックしてください。リンクを削除は削除をクリックしてください。";
$lang_string['up'] = "上へ";
$lang_string['down'] = "下へ";
$lang_string['edit'] = "修正";
$lang_string['delete'] = "削除";
$lang_string['link_name'] = "名前:";
$lang_string['link_url'] = "リンク先URL: (空欄でセパレーターになります。)";
$lang_string['instructions_edit'] = "リンクの編集中:";
$lang_string['instructions_modify'] = "リンクを修正するには下にクリックしてください。:";
$lang_string['submit_btn_edit'] = "リンクの編集";
$lang_string['submit_btn_add'] = "リンクを加える";
$lang_string['form_error'] = "名前を記入して下さい。";
				break;
case 'categories':
// Add / Manage Links
$lang_string['title'] = "カテゴリーの追加と編集";

$lang_string['instructions'] = "以下のフォームを使用してカテゴリーの追加と編集を行います。<br /> それぞれのカテゴリ項目には'カテゴリ名(ID番号)'を付けて下さい。 <br />スペースがある場合はそのまま反映します。<br /><br /><b>例:</b><br />一般(1)<br />ニュース(3)<br />&nbsp;&nbsp;告知 (6)<br />&nbsp;&nbsp;イベント (5)<br />&nbsp;&nbsp;&nbsp;&nbsp;音楽 (7)<br />テクノロジー (2)<br />";
		$lang_string['error'] = "エラー";
		$lang_string['current_categories'] = "カレントカテゴリー";
		$lang_string['no_categories_found'] = "カテゴリーがありません";
		$lang_string['category_list'] = "カテゴリーリスト";
		$lang_string['validate'] = "カテゴリーを有効にする";
		$lang_string['submit_btn'] = "&nbsp;決定&nbsp;";
				break;
	case 'colors':
	// Change Colors
	$lang_string['title'] = "配色変更";
	$lang_string['instructions'] = "ページの配色を変更します。<br />各項目を選択してカラーピッカーもしくは数値で色を指定してください。";
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
	$lang_string['submit_btn'] = "&nbsp;決定&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your entry.<br /><br />Server Reported:<br />";
				break;
			case 'comments':
	// Comments
	$lang_string['title'] = "コメント";
	$lang_string['header'] = "コメントを書く";
	$lang_string['instructions'] = "必要事項とコメントを入力して下さい。";
	$lang_string['comment_name'] = "名前:";
	$lang_string['comment_email'] = "Email:"; // 0.3.8
	$lang_string['comment_url'] = "URL:"; // 0.3.8
	$lang_string['comment_remember'] = "情報を登録する:"; // 0.3.8
	$lang_string['comment_text'] = "コメント:";
	$lang_string['post_btn'] = "&nbsp;コメントを投稿&nbsp;";
	$lang_string['delete_btn'] = "削除";

	// Error Response
	$lang_string['error_add'] = "<h2>Whoops!</h2>コメントが投稿できませんでした。<br /><br />Server Reported:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comment not deleted. I ran into a problem while deleting your comment.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Please complete the Name and Comment fields."; // <-- Need Translation
				break;
	case 'delete':
	$lang_string['title'] = "エントリーの削除";
	$lang_string['instructions'] = "エントリーの削除を行います。<br />一度削除したエントリーは元に戻す事は出来ません。";
	$lang_string['ok_btn'] = "&nbsp;削除&nbsp;";
	$lang_string['cancel_btn'] = "&nbsp;キャンセル&nbsp;";
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>削除できませんでした。<br /><br />Server Reported:<br />";
				break;
	case 'delete_static':
				$lang_string['title'] = "静的ページの削除";
	$lang_string['instructions'] = "静的ページの削除を行います。一度削除したページを元に戻す事はできません。";
	$lang_string['ok_btn'] = "&nbsp;削除する&nbsp;";
	$lang_string['cancel_btn'] = "&nbsp;キャンセル&nbsp;";
				// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>削除に失敗しました<br /><br />Server Reported:<br />";
				break;
	case 'image_list':
	$lang_string['title'] = "Image List";
	$lang_string['instructions'] = "ファイル名をクリックで画像を参照します。<br /><br />エントリーに画像を加える方法:<br />1) リンクをコントロールクリックして、<br />「クリップボードへのコピー・リンク」を選んでください。.<br />2) 新規エントリーへ戻り、編集してください。<br />3) 「img」ボタンをクリックして、ウィンドウへURLを指定してください。";
				break;
	case 'info': // New 0.3.7
	$lang_string['title'] = "メタ情報";
	$lang_string['instructions'] = "サーチエンジンやRSS配信に使用される情報を設定します。";
	$lang_string['info_keywords'] = "キーワード(カンマで複数指定可能。例:
シンプル,PHP,ブログ)";
	$lang_string['info_description'] = "説明(サイトの紹介を記入して下さい。)";
	$lang_string['info_copyright'] = "著作権表示(著作権表示のテキストや著作権表示ページのアドレスなど)";
	$lang_string['submit_btn'] = "&nbsp;登録&nbsp;";
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
$lang_string['title'] = "ログイン";
$lang_string['instructions'] = "ユーザ名とパスワードを記入して下さい。";
$lang_string['username'] = "ユーザー名:";
$lang_string['password'] = "パスワード";
$lang_string['submit_btn'] = "&nbsp;ログイン&nbsp;";
// Success
$lang_string['success'] = "<h2>Success!</h2>ログインしました。それではお楽しみ下さい!<p />";
// Wrong Password
$lang_string['wrong_password'] = "<h2>Whoops!</h2>ログインできませんでした。正しいユーザ名とパスワードを再記入して下さい。<p />";
$lang_string['form_error'] = "ユーザ名とパスワードを記入して下さい。";
				break;
case 'logout':
	$lang_string['title'] = "ログアウト";
	$lang_string['instructions'] = "<h2>Whoops!</h2>クッキーが正常に削除されずログアウトに失敗しました。<p />";
				break;
	case 'forms':
	$lang_string['title'] = "";
	$lang_string['instructions'] = "";
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>保存に失敗しました。<br /><br />Server Reported:<br />";
				break;
			case 'set_login':
	$lang_string['title'] = "ユーザー名とパスワードの変更";
	$lang_string['instructions'] = "あなたのユーザー名またはパスワードを変更します。<br />新しいユーザー名およびパスワードを入力してください。";
	$lang_string['username'] = "ユーザー名:";
	$lang_string['password'] = "パスワード:";
	$lang_string['submit_btn'] = "&nbsp;決定&nbsp;";
	// Success
	$lang_string['success'] = "<h2>Success!</h2>新しいユーザー名とパスワードが有効になりました。<p />";
	// Wrong Password
	$lang_string['wrong_password'] = "<h2>Whoops!</h2>新しいユーザー名とパスワードの登録に失敗しました。<br /><br />Server Reported:<br />";
	$lang_string['form_error'] = "ユーザー名とパスワードを記入して下さい。";
				break;
			case 'install00':
				$lang_string['title'] = "Welcome";
				$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!";
				
				$lang_string['blog_choose_language'] = "Choose Language:";
				$lang_string['submit_btn'] = "&nbsp;Submit&nbsp;";
				break;
			case 'install01':
$lang_string['title'] = "Simple PHP Blogへようこそ！";
$lang_string['instructions'] = "Thank you for choosing Simple PHP Blog!<br /><br />Simple PHP Blog はPHP 4.1以降で動作するブログシステムです。<br />ログファイルをテキストファイルにより管理するのでデータベースを必要としません。<br />データを格納する３つのフォルダ('config', 'content', and 'images')を自動作成します。<br /><b>下のメッセージをクリックして次に進んでください:</b>";
$lang_string['begin'] = "[ セットアップを続ける ]";
				break;
			case 'install02':
				$lang_string['title'] = "セットアップ";
$lang_string['instructions'] = "データ格納フォルダを作成します。";
$lang_string['folder_exists'] = "フォルダは既に作成済みです。";
$lang_string['folder_failed'] = "フォルダ作成に失敗しました";
$lang_string['folder_success'] = "フォルダ作成完了しました";
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
$lang_string['success'] = "<h2>成功!</h2>フォルダ作成が完了しました。<p /><b>セットアップを続けるをクリックして下さい:</b>";
	$lang_string['continue'] = "[ セットアップを続ける ]";
				break;
			case 'install03':
$lang_string['title'] = "ユーザー名とパスワードの設定";
$lang_string['instructions'] = "ユーザー名とパスワードを記入して下さい。";
$lang_string['username'] = "ユーザー名:";
$lang_string['password'] = "パスワード:";
$lang_string['submit_btn'] = "&nbsp;登録&nbsp;";
// Success
$lang_string['success'] = "<h2>Congratulations!</h2>インストールは完了しました。それではお楽しみください。<p />";
$lang_string['btn_setup'] = "[ 設定に進む ]";
	// Wrong Password
	$lang_string['wrong_password'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your Username and/or Password.<br /><br />Server Reported:<br />";
$lang_string['form_error'] = "ユーザー名とパスワードを記入してください。";
				break;
	case 'setup':
	$lang_string['title'] = "設定";
	$lang_string['instructions'] = "blogの設定と管理者情報を設定します。";
	$lang_string['blog_title'] = "ブログタイトル";
	$lang_string['blog_author'] = "管理者名";
	$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
	$lang_string['blog_footer'] = "フッター";
	$lang_string['blog_choose_language'] = "言語選択";
	$lang_string['blog_enable_comments'] = "コメント機能を使う"; 
	// <-- New 0.3.6
	$lang_string['blog_comments_popup'] = "コメントをポップアップウインドウで表示"; // <-- New 0.3.6
	$lang_string['blog_enable_voting'] = "エントリー評価機能を使う"; 
	// <-- New 0.3.8
	$lang_string['blog_email_notification'] = "新しいコメントがある場合メールで知らせる"; // <-- New 0.3.7
	$lang_string['blog_send_pings'] = "サーバーにPingを送信する"; // <-- New 0.3.7
	$lang_string['blog_ping_urls'] = "正確なURLを記入して下さい。 (例：http://rpc.weblogs.com/RPC2)<br />(カンマで区切る事により複数のサーバーを指定することが出来ます。)"; // <-- New 0.3.7
	$lang_string['blog_trackback_about'] = "トラックバック送受信機能の設定を行います。<br /> 手動でトラックバックを追加するか自動検出機能を使用するか選択できます。"; // <-- New 0.3.8
$lang_string['blog_trackback_enabled'] = "トラックバック機能を使用する";
// <-- New 0.3.8
	$lang_string['blog_trackback_auto_discovery'] = "トラックバックの自動送受信機能を使用する。"; // <-- New 0.?.?
	$lang_string['blog_max_entries'] = "１ページ内の最大表示エントリ数"; 
	// <-- New 0.3.6
	$lang_string['blog_comment_tags'] = "コメント内で使用可能なタグ"; 
	// <-- New 0.3.6
	$lang_string['blog_gzip_about'] = "SPHP 4.0.4以降から使用可能なgzip(.gz)圧縮機能の設定を行います。<br />ファイルを圧縮する事によりディスクスペースの節約とサーバーへの負荷を抑える事ができます。<br />初期設定ではオフになっておりますので必要に応じて有効にして下さい。"; // <-- New 0.3.7
	$lang_string['blog_enable_gzip_txt'] = "ログファイルをgzipで圧縮する"; 
	// <-- New 0.3.7
	$lang_string['blog_enable_gzip_output'] = "HTTP出力用のgzip圧縮を使用します"; // <-- New 0.3.7
	$lang_string['submit_btn'] = "&nbsp;決定&nbsp;";
	// Error Response
	$lang_string['error'] = "<h2>Whoops!</h2>設定の保存に失敗しました<br /><br />Server Reported:<br />";
	$lang_string['form_error'] = "Please complete the Title and Author fields.";
	$lang_string['label_entry_order'] = "エントリーの表示";
	$lang_string['select_new_to_old'] = "新しい順に表示";
	$lang_string['select_old_to_new'] = "古い順に表示";
	$lang_string['label_comment_order'] = "コメントの表示";
				break;
	case 'trackbacks':  // <-- New 0.3.8
	// Trackbacks
	$lang_string['title'] = "トラックバック";
	$lang_string['header'] = "このエントリーのトラックバックURL";
	$lang_string['delete_btn'] = "削除";
	// Error Response
	$lang_string['error_add'] = "Error storing trackback data.";
				break;
	case 'options':
	$lang_string['title'] = "オプション設定";
				$lang_string['instructions'] = "コメントとエントリーの日付表示と時間表示をカスタマイズするための設定です。<br />日付は短い日付か長い日付、時刻表示は12時間制あるいは24時間制の時刻表示を選択することができます。<br />プレビューで確認する事ができます。";
		// Long Date
	$lang_string['ldate_title'] = "長い日付形式";
	$lang_string['weekday'] = "曜日";
	$lang_string['month'] = "月";
	$lang_string['day'] = "日";
	$lang_string['year'] = "年";
	$lang_string['none'] = "無し";
				// Short Date
		$lang_string['sdate_title'] = "短い日付:";
		$lang_string['s_month'] = "月";
				$lang_string['s_mon'] = "MMM";
		$lang_string['s_day'] = "日";
		$lang_string['s_year'] = "年";
		$lang_string['zero_day'] = "日付にゼロを付ける（例：01）";
		$lang_string['show_century'] = "西暦（略式）を表示";
		// Time
		$lang_string['time_title'] = "時刻表示";
		$lang_string['12hour'] = "12時間制";
		$lang_string['24hour'] = "24時間制";
		$lang_string['before_noon'] = "午前";
		$lang_string['after_noon'] = "午後";
		// Date
		$lang_string['date_title'] = "日付の表示形式:";
		$lang_string['long_date'] = "長い日付";
		$lang_string['short_date'] = "短い日付";
		$lang_string['time'] = "時刻";
		// Menu
		$lang_string['menu_title'] = "メニューの日付表示形式:";
		$lang_string['long_date'] = "長い日付";
		$lang_string['short_date'] = "短い日付";
		// Used in multiple places
		$lang_string['zero_day'] = "ゼロを付ける（例：01）";
		$lang_string['zero_month'] = "ゼロを付ける（例：01）";
		$lang_string['zero_hour'] = "時刻にゼロを付ける（例：01）";
		$lang_string['separator'] = "セパレーター";
		$lang_string['preview'] = "プレビュー";
		$lang_string['server_offset'] = "サーバーオフセット";
				
// Buttons
		$lang_string['submit_btn'] = "&nbsp;決定&nbsp;";
// Error Response
		$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
		break;
		case 'themes':
		$lang_string['title'] = "外観の変更";
$lang_string['instructions'] = "プルダウンメニューから使用するテーマを選択してください。";
	// Themes
	$lang_string['choose_theme'] = "themes";
	// Buttons
	$lang_string['submit_btn'] = "&nbsp;決定&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Information not saved. I ran into a problem while saving your information.<br /><br />Server Reported:<br />";
				break;
	case 'upload_img':
	$lang_string['title'] = "画像のアップロード";
	$lang_string['instructions'] = "画像ファイルのアップロードを行います。";
	$lang_string['select_file'] = "ファイルの選択";
	$lang_string['upload_btn'] = "アップロード";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Couldn't upload image. Here's some more information:<br /><br />Server Reported:<br />";
				break;
	case 'search': // <-- New 0.3.7
	$lang_string['title'] = "探索結果";
	$lang_string['instructions'] = "検索キーワード：<b>%string</b>:";
	$lang_string['not_found'] = "見つかりませんでした。<br />違うキーワードで再検索して下さい。";
				break;
case 'contact': // <-- New 0.3.8
$lang_string['title'] = "コンタクト";
$lang_string['instructions'] = "管理人へのメッセージ・連絡はこちらへお願いします。";
$lang_string['form_error'] = "タイトルとメッセージを記入して下さい。";
$lang_string['name'] = "お名前を記入して下さい。";
$lang_string['email'] = "Emailアドレスを記入して下さい。";
$lang_string['subject'] = "タイトルを記入して下さい。";
$lang_string['comment'] = "メッセージをお願いします。";
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