<?php
	// Turkish Language File
	// (c) 2004 A. Murat Eren, meren <at> uludag <dot> org <dot> tr
	//
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.1
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: English
		$lang_string['language'] = 't�rk�e';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-0';
		$lang_string['php_charset'] = 'ISO-8859-9';
		
		$lang_string['locale'] = 'tr_TR'; // <-- New 0.3.7
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Linkler";
		$lang_string['menu_home'] = "Anasayfa";
		$lang_string['menu_contact'] = "Contact Me"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "Ar�ivler";
		$lang_string['menu_menu'] = "Men�";
		$lang_string['menu_add'] = "Girdi Ekle";
		$lang_string['menu_add_static'] = "Sabit Sayfa Ekle";
		$lang_string['menu_upload'] = "Resim Y�kle";
		$lang_string['menu_setup'] = "Ayarlar";
		$lang_string['menu_categories'] = "Categories"; // 0.3.7q
		$lang_string['menu_info'] = "Bilgi"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Se�enekler";
		$lang_string['menu_themes'] = "Temalar";
		$lang_string['menu_colors'] = "Renkler";
		$lang_string['menu_change_login'] = "Login'i De�i�tir";
		$lang_string['menu_logout'] = "��k��";
		$lang_string['menu_login'] = "Giri�";
		$lang_string['menu_most_recent'] = "En Son Yorumlar";
		$lang_string['menu_most_recent_entries'] = "Most Recent Entries";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Blocks";
		
		// Other
		$lang_string['home'] = 'Anasayfaya D�n��';
		$lang_string['nav_next'] = 'Sonraki'; // <-- New 0.3.7
		$lang_string['nav_back'] = '�nceki'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Ara:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Bul'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Sayfa %s saniyede olu�turuldu'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Ocak', '�ubat', 'Mart', 'Nisan', 'May�s', 'Haziran', 'Temmuz', 'A�ustos', 'Eyl�l', 'Ekim', 'Kas�m', 'Aral�k' );
		$lang_string['sb_default_title'] = 'Konusuz';
		$lang_string['sb_default_author'] = 'Sahipsiz';
		$lang_string['sb_default_footer'] = 'Son Eksiz';
		
		$lang_string['sb_edit'] = 'de�i�tir';
		$lang_string['sb_delete'] = 'sil';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = 'yorum ekle';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'yorum';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'yorum';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' g�sterim';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' g�sterim';
		
		$lang_string['sb_add_link_btn'] = '+ link';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Konu:";
				$lang_string['label_insert'] = "�zel Ekle:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img";
				$lang_string['btn_url'] = "url";
				$lang_string['view_images'] = "Y�klenmi� Resimleri G�ster";
				$lang_string['label_entry'] = "Girdi:";
				$lang_string['btn_preview'] = "&nbsp;�nizleme&nbsp;";
				$lang_string['btn_post'] = "&nbsp;G�nder&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "Formatalanacak metni girin:";
				$lang_string['insert_image'] = "Resmin bulundu�u URL'i girin:";
				$lang_string['insert_url1'] = "Link i�in g�sterilecek metni girin (opsiyonel):";
				$lang_string['insert_url2'] = "Linkin tam URL'ini girin:";
				$lang_string['insert_url3'] = "Adresi yeni pencerede a� (opsiyonel):"; // <-- New 0.3.6
				$lang_string['form_error'] = "L�tfen konu ve girdi alanlar�n� tamamlay�n.";	
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Opsiyonel:';
				$lang_string['insert_image_width'] = 'Geni�lik (Opsiyonel):';
				$lang_string['insert_image_height'] = 'Y�kseklik (Opsiyonel):';
				$lang_string['insert_image_popup'] = 'Pop-up i�erisinde tam boyutunu g�ster (Opsiyonel):';
				$lang_string['insert_image_float'] = 'Float (Opsiyonel):';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Girdi Ekle";
				$lang_string['instructions'] = "Blog'a haz�r m�s�n�z? Girdinizin nas�l g�r�nece�ini g�rmek i�in �nizleme'ye, kaydetmek i�in de G�nder butonunu kullanabilirsiniz.";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string['title_preview'] = "�nizleme / Girdi D�zenle";
				$lang_string['instructions_preview'] = "��te girdinizin g�r�n���. E�er metin d�zenleyici 'tag'lar kullan�yorsan�z, onlar� kapatmay� unutmay�n.";
				$lang_string['title_update'] = "Girdiyi G�ncelle";
				$lang_string['instructions_update'] = "Girdinizi a�a��daki form yard�m�yla g�ncelleyebilirsiniz. ��iniz bitti�inde '�nizleme' ya da 'G�nder' butonunu kullanabilirsiniz.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Girdiniz kaydedilemedi. Girdinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Sabit Sayfa Ekle";
				$lang_string['instructions'] = "Sabit bir sayfa olu�turmak i�in a�a��daki formu doldurun. Normal girdilerden farkl� olarak sabit sayfalar linkler gibi sa� tarafta s�rekli g�r�n�rler. Bunlar her zaman g�r�nmesini isteyebilece�iniz 'Benimle ilgili', 'Benimle ba�lant�ya ge�in', 'Proje bilgisi' benzeri sayfalar olabilirler. '�nizleme'ye t�klayarak girdinizin nas�l g�r�nd���n� kontrol edebilir, 'G�nder' butonu ile kaydedebilirsiniz.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Sabit Sayfay� �nizle / De�i�tir";
				$lang_string['instructions_preview'] = "��te sabit sayfan�z�n nas�l g�r�nece�i. E�er metin formatlamak i�in kulland���n�z 'tag'lar varsa onlar� kapamay� ihmal etmeyin.";
				$lang_string['title_update'] = "Sabit Sayfay� G�ncelle";
				$lang_string['instructions_update'] = "Girdinizi de�i�tirmek i�in a�a��daki formu kullanabilirsiniz. ��iniz bitti�inde '�nizleme' ya da 'G�nder' butonunu kullanabilirsiniz.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Girdiniz kaydedilemedi. Girdinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
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
				$lang_string['title'] = "Link Ekle / Linkleri Y�net";
				$lang_string['instructions'] = "Di�er sitelere linkler ekleyin. formu doldurduktan sonra 'Link Ekle' butonuna t�klayarak linkinizi kaydedebilirsiniz. Linkliern s�ras�n� de�i�tirmek i�in yukar� / a�a�� butonlar�n� kullanabilirsiniz. Bir linki de�i�tirmek i�in 'De�i�tir' butonunu kullanabilirsiniz. Bir linki silmek i�in ise 'Sil' butonunu kullanabilirsiniz";
				$lang_string['up'] = "yukar�";
				$lang_string['down'] = "a�a��";
				$lang_string['edit'] = "d�zenle";
				$lang_string['delete'] = "sil";
				$lang_string['link_name'] = "Link Ad�:";
				$lang_string['link_url'] = "Link URL: (Opsiyonel. Ayra� olu�turmak i�in bo� b�rakabilirsiniz.)";
				$lang_string['instructions_edit'] = "�u anda bu linki de�i�tiriyorsunuz:";
				$lang_string['instructions_modify'] = "Bir linki editlemek i�in �uraya t�klay�n:";
				$lang_string['submit_btn_edit'] = "Linki De�i�tir";
				$lang_string['submit_btn_add'] = "Linki ekle";
				$lang_string['form_error'] = "L�tfen isim alan�n� tamamlay�n.";
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
				$lang_string['title'] = "Renkleri De�i�tir";
				$lang_string['instructions'] = "Blog'unuzun arka plan ve metin renklerini de�i�tirebilirsiniz. �nce a�a��dan rengini de�i�tirece�iniz alan� se�in, daha sonra renk se�ici ile renginizi olu�turun. De�er otomatik olarak de�i�ecektir.";
				$lang_string['bg_color'] = "BG Sayfas�";
				$lang_string['main_bg_color'] = "BG Ana Sayfa";
				$lang_string['border_color'] = "Sayfa Kenarl���";
				$lang_string['inner_border_color'] = "�� Kenarl�k";
				$lang_string['header_bg_color'] = "BG Ba�l���";
				$lang_string['header_txt_color'] = "Tepe Metni";
				$lang_string['menu_bg_color'] = "BG Men�";
				$lang_string['footer_bg_color'] = "BG Alt Metni";
				$lang_string['txt_color'] = "Ana Metin";
				$lang_string['headline_txt_color'] = "Tepe Metni";
				$lang_string['date_txt_color'] = "Tarih Metni";
				$lang_string['footer_txt_color'] = "Alt Metin";
				$lang_string['link_reg_color'] = "Link";
				$lang_string['link_hi_color'] = "Fare Link �zerindeyken (FL�)";
				$lang_string['link_down_color'] = "Linke T�kland��� Anda (LTA)";
				// More Colors
				$lang_string['entry_bg'] = "girdi Arkaplan�";
				$lang_string['entry_title_bg'] = "Girdi Konusu Arkaplan�";
				$lang_string['entry_border'] = "Girdi Kenarl���";
				$lang_string['entry_title_text'] = "Girdi Ba�l��� Metni";
				$lang_string['entry_text'] = "Girdi Metni";
				$lang_string['menu_bg'] = "Men� Arkaplan�";
				$lang_string['menu_title_bg'] = "Men� Ba�l��� Arkaplan�";
				$lang_string['menu_border'] = "Men� Kenarl���";
				$lang_string['menu_title_text'] = "Men� Ba�l��� Metni";
				$lang_string['menu_text'] = "Men� Metni";
				$lang_string['menu_link_reg_color'] = "Men� Linki";
				$lang_string['menu_link_hi_color'] = "Men� (FL�)";
				$lang_string['menu_link_down_color'] = "Menu (LTA)";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
				$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['title'] = "Yorumlar";
				$lang_string['header'] = "Yorum Ekle";
				$lang_string['instructions'] = "Yorumunuzu a�a��daki forma yaz�n.";
				$lang_string['comment_name'] = "Ad�n�z:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "Yorumunuz:";
				$lang_string['post_btn'] = "&nbsp;Yorumu G�nder&nbsp;";
				$lang_string['delete_btn'] = "sil";
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Yorumunuz kaydedilemedi. Yorumunuzu kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Yorumunuz silinemedi. Yorumunuzu simeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
				$lang_string['form_error'] = "L�tfen isim ve yorum alanlar�n� doldurunuz"; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Girdiyi Sil";
				$lang_string['instructions'] = "Silmek istedi�inizden emin de�ilseniz, bu ad�m� geri alman�n m�mk�n olmad���n� bilmenizde fayda var :)";
				$lang_string['ok_btn'] = "&nbsp;Tamam&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;�ptal&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Entry silinemedi.<br /><br />Sunucu ��yle demi�:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Sabit Sayfay� Sil";
				$lang_string['instructions'] = "Silmek istedi�inizden emin de�ilseniz, bu ad�m� geri alman�n m�mk�n olmad���n� bilmenizde fayda var :)";
				$lang_string['ok_btn'] = "&nbsp;Tamam&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;�ptal&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Sayfa silinemedi.<br /><br />Sunucu ��yle demi�:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Resim Listesi";
				$lang_string['instructions'] = "Resimleri g�r�nt�lemek i�in linklere t�klay�n.<br /><br />Girdinize bir resim eklemek i�in:<br />1) Linke Control ile birlikte t�klay�n ve 'Copy Link to Clipboard'� se�in.<br />2) Girdi ekleme sayfas�na geri d�n�n.<br />3) 'img' butonuna t�klay�n ve kopyalad���n�z adresi buraya yap��t�r�n.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Meta-Data Bilgisi";
				$lang_string['instructions'] = "A�a��daki bilgi arama motorlar�n�n sayfalar�n�za daha kolay ula�abilmesi i�in &quot;meta-data&quot; olarak kullan�lacak. Ayr�ca ayn� bilgi RSS beslemelerinde de kullan�labilir.";
				$lang_string['info_keywords'] = "Anahtar Kelimeler: (Anahtar kelimeleri birbirinden virg�l ile ay�rabilirsiniz.)";
				$lang_string['info_description'] = "A��klama: (Siteniz ile ilgili �ze bir a��klama giriniz.)";
				$lang_string['info_copyright'] = "Haklar: (Kopyalama haklar� ile ilgili bilgileri giriniz, bo� b�rakabilirsiniz.)";
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
				$lang_string['form_error'] = "L�tfen Konu ve Author bilgilerini doldurunuz.";
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
				$lang_string['title'] = "Giri�";
				$lang_string['instructions'] = "L�tfen kulan�c� ad�n�z� ve parolan�z� giriniz";
				$lang_string['username'] = "Kullan�c� Ad�:";
				$lang_string['password'] = "Parola:";
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Tamamd�r!</h2>Ba�ar� ile log-in oldunuz. Mutlu bloglar!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Log-in olamad�n�z. L�tfen kullan�c� ad� ve parolan�z� do�ru yazd���n�zdan emin olun.<p />";
				$lang_string['form_error'] = "L�tfen kullan�c� ad� ve parola alanlar�n� doldurun.";
				break;
			case 'logout':
				$lang_string['title'] = "��k��";
				$lang_string['instructions'] = "<h2>Whoops!</h2>Logout ba�ar�s�z oldu. Cookie silinemedi?. Enteresan..<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Kullan�c� &amp; Parola De�i�tir";
				$lang_string['instructions'] = "A�a��daki forma kullanmak istedi�iniz kullan�c� ad� ve parolas�n� girin.";
				$lang_string['username'] = "Kullan�c� ad�:";
				$lang_string['password'] = "Parola:";
				$lang_string['submit_btn'] = "&nbsp;Tamamd�r&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Evet!</h2>Yeni kullan�c� ad�n�z ve parolan�z kaydedildi. Mutlu bloglar!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
				$lang_string['form_error'] = "L�tfen kullan�c� ad� ve parola alanlar�n� doldurun.";
				break;
			case 'install00':
				$lang_string['title'] = "Ho�geldiniz";
				$lang_string['instructions'] = "Simple PHP Blog'u se�ti�iniz i�in telekk�rler!";
				
				$lang_string['blog_choose_language'] = "Dil Se�in:";
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Ho�geldiniz";
				$lang_string['instructions'] = "
				Simple PHP Blog'u se�ti�iniz i�in te�ekk�rler!<br /><br />Simple PHP Blog, hafif bir blog sistemidir. PHP 4.1 ya da �st�, ve sunucunun blog'a ait b�l�m�ne yazma hakk� �al��mas� i�in yeterlidir. T�m bilgi d�z metin dosyalar�nda saklan�r, dolay�s�yla veritaban� gerektirmez.<br /><br />
				Ba�lamak i�ib simple PHP Blog bilgilerinizin saklanmas� i�in kullan�lacak ('config', 'content', ve 'images') dizinlerini yaratmak zorunda.<br /><br />
				<b>Kuruluma ba�lamak i�in a�a��daki linke t�klay�n�z:</b>";
				$lang_string['begin'] = "[ Kuruluma Ba�la ]";
				break;
			case 'install02':
				$lang_string['title'] = "Ayarlar";
				$lang_string['instructions'] = "'config', 'content', ve 'images' dizinleri yarat�l�yor:";
				$lang_string['folder_exists'] = "Okay! Zaten dizinler mevcut. Herhangi bir de�i�iklik yap�lmad�...";
				$lang_string['folder_failed'] = "Whoops! Dizin yarat�lamad�";
				$lang_string['folder_success'] = "Tamamd�r! Dizin yarat�ld�...";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				Dizin ya da dizinler yarat�lam�yor! Sebepler �unlar olabilir:<br>
				<i>1) <b>�zinler</b>, <b>Okuma / Yazma</b>ya izin vermiyor.</i><br>
				<i>2) T�m dosya ve dizinlerin kullan�c� ID'leri uygun olmal�.</i><p />
				
				A�a��daki ad�mlar� uygulayarak yeniden deneyin:<p />				
				1) Dizinleri elle yarat�n: <b>config</b>, <b>content</b>, ve <b>images</b>.<p />
				2) Dizinlere <b>Yazma Hakk�</b> verin. E�er FTP istemcisi ile ba�l� iseniz, Owner, User, ve World'�n dizinler �zerinde <b>okuma</b> ve <b>yazma</b> haklar� olmal�d�r. <i>(Bunlar� de��tirmke i�in sistem y�neticisi ile ba�lant�ya ge�meniz de gerekebilir...)</i><p />
				3) T�m dosya ve dizinlerin kullan�c�s�n�n ayn� oldu�una emin olun. <i>(bunun i�in de sistem y�neticisi ile temasa ge�meniz gerekebilir...)</i>";
				$lang_string['try_again'] = "[ Yeniden Dene ]";
				// Success
				$lang_string['success'] = "<h2>Harika!</h2>Dizinler ba�ar�yla yarat�ld� :)<p /><b>Devam etmek i�in t�klay�n:</b>";
				$lang_string['continue'] = "[ Devam Et ]";
				break;
			case 'install03':
				$lang_string['title'] = "Kullan�c� ad� &amp; Parola";
				$lang_string['instructions'] = "Bir kullan�c� ad� ve parolas� yaratmak i�in a�a��daki formu kullan�n.";
				$lang_string['username'] = "Kullan�c� ad�:";
				$lang_string['password'] = "Parola:";
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Tebrikler!</h2>Log-in oldunuz. Ayarlar sayfas�na girmek ve blog'unuz ile ilgili ilk ayarlamalar� yapmak i�in a�a��daki linke t�klay�n!<p />";
				$lang_string['btn_setup'] = "[ Ayarlar ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
				$lang_string['form_error'] = "L�tfen kullan�c� ad� ve parola alanlar�n� doldurun.";
				break;
			case 'setup':
				$lang_string['title'] = "Ayarlar";
				$lang_string['instructions'] = "A�a��daki form sayesinde blog'unuzun ad�n� ve ki�isel bilgilerinizi de�i�tirebilirsiniz:";
				$lang_string['blog_title'] = "Blog Ad�:";
				$lang_string['blog_author'] = "Sahibi:";
				$lang_string['blog_email'] = "E-Posta Adresi:"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "Son ek:";
				$lang_string['blog_choose_language'] = "Dil:";
				$lang_string['blog_enable_comments'] = "Kullan�c�lar Yorum Girebilir"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Yorumlar� Pop-up pencerede a�"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Yeni yorum girildi�inde e-posta g�nder"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Weblog &quot;pings&quot; g�nder"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Pinglenecek servisin tam URL'ini girin (�rne�in http://rpc.weblogs.com/RPC2 gibi).<br />Virg�ller ile ay�rarak birden fazla servis girebilirsiniz."; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "G�sterilecek minimum girdi say�s�:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Yorumlarda 'tag' kullan�m� m�mk�n:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					PHP 4.0.4'ten beri, PHP disk alan�ndan kazanmak i�in (.gz) s�k��t�r�lm�� dosyalar� okuyup yazabiliyor.
					Ayr�ca taray�c�ya g�nderilen dosyalar� bant geni�li�ini iyi kullanmak i�in transparan olarak s�k��t�rabiliyor. 
					<br />
					<br />
					�ntan�ml� olarak Zlib deste�i PHP i�inde etkin olmuyor. E�er kutucuklar se�isiz ise
					PHP kurulumunuz Zlib desteklemiyor demektir."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Veri dosyalar� i�in GZIP s�k��t�rmas�n� etkin k�l"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "HTTP ��kt�s� i�in GZIP s�k��t�rmas�n� etkin k�l"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
				$lang_string['form_error'] = "L�tfen Sahibi ve Blog ad� alanlar�n� doldurun.";
				$lang_string['label_entry_order'] = "Girdi dizilimi:";
				$lang_string['select_new_to_old'] = "En yeni en �nce";
				$lang_string['select_old_to_new'] = "En eski en �nce";
				$lang_string['label_comment_order'] = "Yorum dizilimi:";
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
				$lang_string['title'] = "Se�enekler";
				$lang_string['instructions'] = "A�a��daki formu kullanarak blog girdilerinizdeki tarih ve saat bilgilerinin g�sterim format�n� de�i�tirebilirsiniz. 12 ya da 24 saat g�r�n�mlerinden birisini se�ebilirsiniz. <b>�nizleme</b> ile ayarlar�n�z�n nas�l g�r�nd���n� g�rme �ans�n�z da var.";
				// Long Date
				$lang_string['ldate_title'] = "Uzun Zaman Format�:";
				$lang_string['weekday'] = "Haftan�n G�n�";
				$lang_string['month'] = "Ay";
				$lang_string['day'] = "G�n";
				$lang_string['year'] = "Y�l";
				$lang_string['none'] = "hi�biri";
				// Short Date
				$lang_string['sdate_title'] = "K�sa Zaman Format�:";
				$lang_string['s_month'] = "Ay";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "G�n";
				$lang_string['s_year'] = "Y�l";
				$lang_string['zero_day'] = "G�n �n�nde 0 eki";
				$lang_string['show_century'] = "Y�zy�l� g�ster";
				// Time
				$lang_string['time_title'] = "Zaman Format�:";
				$lang_string['12hour'] = "12-saat format�";
				$lang_string['24hour'] = "24-saat format�";
				$lang_string['before_noon'] = "��leden �nce";
				$lang_string['after_noon'] = "��leden Sonra";
				// Date
				$lang_string['date_title'] = "Tarih G�sterim Format�:";
				$lang_string['long_date'] = "Uzun Tarih";
				$lang_string['short_date'] = "K�sa Tarih";
				$lang_string['time'] = "Zaman";
				// Menu
				$lang_string['menu_title'] = "Men� Tarihi G�sterim Format�:";
				$lang_string['long_date'] = "Uzun Tarih";
				$lang_string['short_date'] = "K�sa Tarih";
				// Used in multiple places
				$lang_string['zero_day'] = "G�n �n�nde 0 eki";
				$lang_string['zero_month'] = "Ay �n�nde 0 eki";
				$lang_string['zero_hour'] = "Saat �n�nde 0 eki";
				$lang_string['separator'] = "Ayra�:";
				$lang_string['preview'] = "�nizleme:";
				$lang_string['server_offset'] = "Sunucu Ofset:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Temalar";
				$lang_string['instructions'] = "Men�den farkl� bir tema se�ebilirsiniz.";
				// Themes
				$lang_string['choose_theme'] = "Temalar:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Tamam&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Bilgiler kaydedilemedi. Bilgilerinizi kaydetmeye �al���rken bir sorun ile kar��la�t�m.<br /><br />Server ��yle demi�:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Resim Y�kle";
				$lang_string['instructions'] = "Y�klemek i�in bir dosya se�mek i�in butona t�klay�n�z.";
				$lang_string['select_file'] = "Dosya Se�:";
				$lang_string['upload_btn'] = "Y�kle";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Resim y�klenemedi!<br /><br />Server ��yle demi�:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Arama Sonu�lar�";
				$lang_string['instructions'] = "<b>%string</b> i�in arama sonu�lar�:";
				$lang_string['not_found'] = "Sonu� bulunamad�";
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