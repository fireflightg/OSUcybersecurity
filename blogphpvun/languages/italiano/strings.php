<?php
	// Italian Language File
	// (c) 2004 Porro Luciano (alias drudo), drudo3 <at> jumpy <dot> it, http://drudo.altervista.org/blog/
	// last update 28.06.2004
	//
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.2
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Italiano
		$lang_string['language'] = 'italiano';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';
		
		$lang_string['locale'] = 'it_IT'; // <-- New 0.3.7
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// men&ugrave;
		$lang_string['menu_links'] = "Links";
		$lang_string['menu_home'] = "Pagina principale";
		$lang_string['menu_contact'] = "Contact Me"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "Archivio";
		$lang_string['menu_menu'] = "men&ugrave;";
		$lang_string['menu_add'] = "Aggiungi notizia";
		$lang_string['menu_add_static'] = "Aggiungi pagina statica";
		$lang_string['menu_upload'] = "Carica immagine";
		$lang_string['menu_setup'] = "Setup";
		$lang_string['menu_categories'] = "Categories"; // 0.3.7q
		$lang_string['menu_info'] = "Informazioni"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Opzioni date";
		$lang_string['menu_themes'] = "Temi";
		$lang_string['menu_colors'] = "Colori";
		$lang_string['menu_change_login'] = "Cambia login";
		$lang_string['menu_logout'] = "Logout";
		$lang_string['menu_login'] = "Login";
		$lang_string['menu_most_recent'] = "Ultimi commenti";
		$lang_string['menu_most_recent_entries'] = "Most Recent Entries";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Blocks";
		
		// Other
		$lang_string['home'] = "Torna alla pagina principale";
		$lang_string['nav_next'] = 'Altre notizie'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Indietro'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Cerca:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Vai'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Pagina generata in %s secondi'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre' );
		$lang_string['sb_default_title'] = 'Senza Titolo';
		$lang_string['sb_default_author'] = 'Senza Autore';
		$lang_string['sb_default_footer'] = 'Pi&egrave; di pagina';
		
		$lang_string['sb_edit'] = 'modifica';
		$lang_string['sb_delete'] = 'cancella';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = 'commenta';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'commento';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'commenti';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' visita';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' visite';
		
		$lang_string['sb_add_link_btn'] = '+ link';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "Titolo:";
				$lang_string['label_insert'] = "Inserisci formattazione testo:";
				$lang_string['btn_bold'] = " b ";
				$lang_string['btn_italic'] = " i ";
				$lang_string['btn_image'] = "img"; // <-- sono invertiti, ma corretti nei commenti // img & url are swapped here, but they're right in the comments!
				$lang_string['btn_url'] = "url";  //  <-- sono invertiti, ma corretti nei commenti
				$lang_string['view_images'] = "Vedi immagini caricate";
				$lang_string['label_entry'] = "Notizia:";
				$lang_string['btn_preview'] = "&nbsp;Anteprima&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Inserisci&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "Inserisci il testo";
				$lang_string['insert_image'] = "Inserisci indirizzo URL immagine";
				$lang_string['insert_url1'] = "Inserisci il testo del link";
				$lang_string['insert_url2'] = "Inserisci indirizzo URL del link";
				$lang_string['insert_url3'] = "Apri URL in una nuova pagina (facoltativo):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Prego compila i campi Titolo e Notizia";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Opzioni:';
				$lang_string['insert_image_width'] = 'Larghezza (facoltativo):';
				$lang_string['insert_image_height'] = 'Altezza (facoltativo):';
				$lang_string['insert_image_popup'] = 'Vedi in una nuova finestra a tutto schermo (facoltativo):';
				$lang_string['insert_image_float'] = 'Allineamento (facoltativo):';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Aggiungi notizia";
				$lang_string['instructions'] = "Per pubblicare una notizia compila i campi sottostanti e clicca su 'Anteprima' per visualizzare la notizia prima di pubblicarla o 'Inserisci' per pubblicarla subito.";				
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Anteprima / Modifica notizia";
				$lang_string['instructions_preview'] = "Ecco come apparir&agrave; la notizia. Se stai usando i 'tag' per la formattazione del testo, ricordarti di chiuderli tutti.";
				$lang_string['title_update'] = "Aggiorna notizia";
				$lang_string['instructions_update'] = "Puoi cambiare il contenuto della notizia usando il 'form' sottostante. Clicca su 'Anteprima' per rivedere la notizia o 'Inserisci' per pubblicarla.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Ops!</h2>Notizia non pubblicata! Si &egrave; verificato un problema durante la pubblicazione della notizia.<br /><br />Il server ha risposto:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Aggiungi pagina statica";
				$lang_string['instructions'] = "Per aggiungere una 'Pagina statica' compila i campi sottostanti. Tale pagina differisce da una normale notizia, poich&egrave; comparir&agrave; come link nel men&ugrave; destro del Blog. Si usa normalmente per creare una pagina in evidenza e sempre raggiungibile.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Anteprima / Modifica Pagina statica";
				$lang_string['instructions_preview'] = "Ecco come apparir&agrave; l'anteprima della Pagina statica. Se stai usando i 'tag' per la formattazione del testo, ricordati di chiuderli tutti.";
				$lang_string['title_update'] = "Aggiorna Pagina statica";
				$lang_string['instructions_update'] = "Puoi cambiare il contenuto della notizia usando il 'form' sottostante. Clicca su 'Anteprima' per rivedere la notizia o 'Inserisci' per pubblicarla.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Ops!</h2>Contenuto pagina statica non pubblicato! Si &egrave; verificato un problema durante la pubblicazione della notizia.<br /><br />Il server ha risposto:<br /><br />";
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
				$lang_string['title'] = "Aggiungi / Gestisci link";
				$lang_string['instructions'] = "Per aggiungere link ad altri siti compila i campi sottostanti. Clicca su:<br /><br />1) 'Aggiungi link' per inserire un link.<br />2) 'su' o 'gi&ugrave;' per far cambiare posizione ai link<br />3) 'cancella' per eliminare il link";
				$lang_string['up'] = "su";
				$lang_string['down'] = "gi&ugrave;";
				$lang_string['edit'] = "modifica";
				$lang_string['delete'] = "cancella";
				$lang_string['link_name'] = "Nome del link:";
				$lang_string['link_url'] = "Indirizzo URL: (lascia il campo vuoto se vuoi creare un titolo)";
				$lang_string['instructions_edit'] = "Stai modificando questo link:";
				$lang_string['instructions_modify'] = "Link presenti:";
				$lang_string['submit_btn_edit'] = "Modifica link";
				$lang_string['submit_btn_add'] = "Aggiungi link";
				$lang_string['form_error'] = "Prego scrivi il nome del link."; //@alcor: preferisco usare il "Prego" per coerenza, visto che l'ho usato in tutit gli avvisi.
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
				$lang_string['title'] = "Colori";
				$lang_string['instructions'] = "Puoi cambiare i colori dello sfondo e del testo selezionando il colore direttamente nella maschera sottostante, in modo che il codice corrispondente cambi automaticamente.";
				$lang_string['bg_color'] = "SF pagina";
				$lang_string['main_bg_color'] = "SF corpo";
				$lang_string['border_color'] = "Bordi";
				$lang_string['inner_border_color'] = "Bordi interni";
				$lang_string['header_bg_color'] = "SF header";
				$lang_string['header_txt_color'] = "Testo header";
				$lang_string['menu_bg_color'] = "SF men&ugrave;";
				$lang_string['footer_bg_color'] = "SF pi&egrave;";
				$lang_string['txt_color'] = "Testo";
				$lang_string['headline_txt_color'] = "Titoli";
				$lang_string['date_txt_color'] = "Date";
				$lang_string['footer_txt_color'] = "Testo pi&egrave;";
				$lang_string['link_reg_color'] = "Link";
				$lang_string['link_hi_color'] = "Link hover";
				$lang_string['link_down_color'] = "Link active";
				// More Colors
				$lang_string['entry_bg'] = "SF notizie";
				$lang_string['entry_title_bg'] = "SF titolo";
				$lang_string['entry_border'] = "Bordo notizie";
				$lang_string['entry_title_text'] = "Titolo notizie";
				$lang_string['entry_text'] = "Testo notizie";
				$lang_string['menu_bg'] = "SF men&ugrave;";
				$lang_string['menu_title_bg'] = "SF titolo men&ugrave;";
				$lang_string['menu_border'] = "Bordo men&ugrave;";
				$lang_string['menu_title_text'] = "Titolo men&ugrave;";
				$lang_string['menu_text'] = "Testo men&ugrave;";
				$lang_string['menu_link_reg_color'] = "Link men&ugrave;";
				$lang_string['menu_link_hi_color'] = "Link men&ugrave; Hover";
				$lang_string['menu_link_down_color'] = "Link men&ugrave; Active";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
				$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ops!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['title'] = "Commenti";
				$lang_string['header'] = "Aggiungi commento";
				$lang_string['instructions'] = "Riempire tutti i campi per inserire un commento.<br /><br />";
				$lang_string['comment_name'] = "Nome:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "Commento:";
				$lang_string['post_btn'] = "&nbsp;Inserisci&nbsp;";
				$lang_string['delete_btn'] = "cancella";
				// Error Response
				$lang_string['error_add'] = "<h2>Ops!</h2>Commento non pubblicato! Si &egrave; verificato un problema durante la pubblicazione del commento.<br /><br />Il server ha risposto:<br />";
				$lang_string['error_delete'] = "<h2>Ops!</h2>Commento non cancellato! Si &egrave; verificato un problema durante la cancellazione del commento.<br /><br />Il server ha risposto:<br />";
				$lang_string['form_error'] = "Prego riempire tutti i campi";
				break;
			case 'delete':
				$lang_string['title'] = "Cancella notizia";
				$lang_string['instructions'] = "Sei <strong>sicuro</strong> di voler cancellare questa notizia? Non &egrave; possibile annullare l'operazione in seguito.";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annulla&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ops!</h2>Notizia non cancellata!<br /><br />Il server ha risposto:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Cancella pagina statica";
				$lang_string['instructions'] = "Sei <strong>sicuro</strong> di voler cancellare questa pagina statica? Non &egrave; possibile annullare l'operazione in seguito.";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Annulla&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ops!</h2>Notizia non cancellata!<br /><br />Il server ha risposto:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Lista immagini";
				$lang_string['instructions'] = "Clicca sul link per vedere l'immagine corrispondente.<br /><br />Per aggiungere un'immagine:<br />1) Clicca col tasto destro e 'Copia indirizzo link' (o simile).<br />2) Torna alla sezione 'Aggiungi notizia' o 'Modifica notizia'.<br />3) Clicca sul bottone 'img' e copia l'indirizzo URL nella finestra.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Informazioni Meta-Data";
				$lang_string['instructions'] = "Le informazioni sottostanti verranno usate per i &quot;meta-data&quot;, che aiutano i motori di ricerca ad individuare il tuo sito. Tali informazioni possono essere anche usate dai Feed RSS.";
				$lang_string['info_keywords'] = "Parole chiave: (ricorda di separarle con una virgola)";
				$lang_string['info_description'] = "Descrizione: (inserisci una breve descrizione del sito)";
				$lang_string['info_copyright'] = "Diritti: (inserisci il Copyright, o un link contenente informazioni a riguardo)";
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ops!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				$lang_string['form_error'] = "Prego compila i campi Titolo e Autore.";
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
				$lang_string['title'] = "Login";
				$lang_string['instructions'] = "Inserire Username e Password per entrare nel pannello di controllo";
				$lang_string['username'] = "Username";
				$lang_string['password'] = "Password";
				$lang_string['submit_btn'] = "&nbsp;Login&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Login OK!</h2>Hai effettuato il login con successo. Buon blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ops!</h2>Login non effettuato. Verificare che Username e Password siano scritti correttamente.<p />";
				$lang_string['form_error'] = "Prego riempire i campi Username e Password.";
				break;
			case 'logout':
				$lang_string['title'] = "Logout";
				$lang_string['instructions'] = "<h2>Ops!</h2>Logout fallito. Cookie non cancellati. Riprovare, o modificare le impostazioni del browser.<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Ops!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Cambia Username &amp; Password";
				$lang_string['instructions'] = "Compila i campi sottostanti per cambiare il tuo Username e/o la tua Password.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Login OK!</h2>Hai effettuato il login con successo. Buon blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ops!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				$lang_string['form_error'] = "Prego completa i campi Username e Password.";
				break;
			case 'install00':
				$lang_string['title'] = "Benvenuto";
				$lang_string['instructions'] = "
				Grazie per aver scelto Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Scegli la lingua:";
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Benvenuto";
				$lang_string['instructions'] = "
				Grazie per aver scelto Simple PHP Blog!<br /><br />Simple PHP Blog &egrave; un semplice blog che richiede solo PHP 4.1 o versione superiore, ed i permessi di scrittura sul server. Tutte le informazioni vengono salvate su file di testo (flat-files), senza necessit&agrave; alcuna di database.<br /><br />
				Una volta eseguito, Simple PHP Blog crea, se non presenti, tre cartelle ('config', 'content', e 'images') dove vengono salvate tutte le informazioni.<br /><br />
				<b>Clicca per cominciare il setup:</b>";
				$lang_string['begin'] = "[ Begin Setup ]";
				break;
			case 'install02':
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Creazione cartelle 'config', 'content', e 'images':";
				$lang_string['folder_exists'] = "Le cartelle sono gi&agrave; presenti. Non &egrave; avvenuto nessun cambiamento.";
				$lang_string['folder_failed'] = "Ops! Cartelle non create!";
				$lang_string['folder_success'] = "Ok! Cartelle create.";
				// Help
				$lang_string['help'] = "
				<h2>Ops!</h2>
				Cartelle non create! Le cause possono essere le seguenti:<br>
				<i>1) Non hai i <b>permessi di scrittura</b> sul server. Abilita i permessi di lettura/scrittura!</i><br>
				<i>2) L'<b>UID</b>'s (user ID's) di tutti i file e cartelle deve essere uguale.</i><p /> // <-- verificare
				
				Segui le istruzioni riportate sotto e riprova:<p />				  
				1) Crea manualmente le cartelle: <b>config</b>, <b>content</b>, e <b>images</b>.<p />
				2) Abilita i <b>Permessi di scrittura</b> sulle cartelle. Per farlo basta abilitare questa funzione sul proprio programma FTP. <i>In alcuni casi &egrave; necessario contattare il proprio provider!</i><p />
				3) Assicurati che UID's (user ID's) di tutti i file e tutte le cartelle sia lo stesso. <i>(In alcuni casi, per cambiare questo, &egrave; necessario contattare il proprio provider!)</i>";
				$lang_string['try_again'] = "[ Try Again ]";
				// Success
				$lang_string['success'] = "<h2>Ok!</h2>Cartelle create!<p /><b>Clicca per continuare:</b>";
				$lang_string['continue'] = "[ Continua ]";
				break;
			case 'install03':
				$lang_string['title'] = "Crea Username &amp; Password";
				$lang_string['instructions'] = "Usa i campi sottostanti per creare Username e Password.";
				$lang_string['username'] = "Username:";
				$lang_string['password'] = "Password:";
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Congratulazioni!</h2>Hai effettuato il login correttamente. Ora puoi andare alla sezione Setup per modificare il tuo Blog. Buon blogging!<p />";
				$lang_string['btn_setup'] = "[ Setup ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Ops!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio di Username e Password.<br /><br />Il server ha risposto:<br />";
				$lang_string['form_error'] = "Prego completa i campi Username e Password.";
				break;
			case 'setup':
				$lang_string['title'] = "Setup";
				$lang_string['instructions'] = "Puoi cambiare il nome del tuo Blog, i dati personali, decidere il numero massimo di notizie visualizzabili nella pagina principale, abilitare i commenti da parte degli utenti e i tag in essi utilizzabili.";
				$lang_string['blog_title'] = "Nome Blog:";
				$lang_string['blog_author'] = "Autore:";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "Pi&egrave; di pagina:";
				$lang_string['blog_choose_language'] = "Cambia lingua:";
				$lang_string['blog_enable_comments'] = "Abilita i commenti da parte degli utenti"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Apri i commenti in una nuova finestra"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Notifica via email i nuovi commenti inseriti"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Invia weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Inserisci URL completo (per es. http://rpc.weblogs.com/RPC2) del servizio di &quot;ping&quot;.<br />(Separa con una virgola in caso di pi&ugrave URL)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Numero massimo di notizie visualizzabili:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Tag consentiti nei commenti:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Dalla versione 4.0.4, PHP ha la possibilit&agrave di leggere e scrivere file compressi gzip (.gz), 
					utili per risparmiare spazio sul disco.<br />
					<br />
					Solitamente nel PHP il supporto per le Zlib (estensione per la compressione dei file) non 
					&egrave abilitato di defoult. Se le checkboxes sono disabilitate significa che la vostra versione 
					di PHP non supporta tale funzione."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Abilita la compressione GZIP per i file del database"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Abilita la compressione GZIP nell'output HTTP"; // <-- New 0.3.7  <-- RIVEDERE
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ops!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				$lang_string['form_error'] = "Prego completa i campi 'Nome Blog' e 'Autore'.";
				$lang_string['label_entry_order'] = "Ordine delle notizie:";
				$lang_string['select_new_to_old'] = "Nuove in testa";
				$lang_string['select_old_to_new'] = "Nuove in basso";
				$lang_string['label_comment_order'] = "Ordine dei commenti:";
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
				$lang_string['title'] = "Opzioni";
				$lang_string['instructions'] = "Per personalizzare le date che appariranno sul Blog usa i campi sottostanti. L'anteprima verr&agrave; aggiornata automaticamente ad ogni cambio di impostazione.";
				// Long Date
				$lang_string['ldate_title'] = "Formato data estesa:";
				$lang_string['weekday'] = "Nome giorno";
				$lang_string['month'] = "Mese";
				$lang_string['day'] = "Numero giorno";
				$lang_string['year'] = "Anno";
				$lang_string['none'] = "Niente";
				// Short Date
				$lang_string['sdate_title'] = "Formato data ridotta:";
				$lang_string['s_month'] = "Mese";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Giorno";
				$lang_string['s_year'] = "Anno";
				$lang_string['zero_day'] = "Poni lo zero nel giorno";
				$lang_string['show_century'] = "Mostra il secolo";
				// Time
				$lang_string['time_title'] = "Formato ore:";
				$lang_string['12hour'] = "12-ore";
				$lang_string['24hour'] = "24-ore";
				$lang_string['before_noon'] = "Prima di mezzogiorno";
				$lang_string['after_noon'] = "Dopo mezzogiorno";
				// Date
				$lang_string['date_title'] = "Formato data nelle notizie:";
				$lang_string['long_date'] = "Data estesa";
				$lang_string['short_date'] = "Data ridotta";
				$lang_string['time'] = "Ore";
				// men&ugrave;
				$lang_string['menu_title'] = "Formato data nel men&ugrave;:";
				$lang_string['long_date'] = "Data estesa";
				$lang_string['short_date'] = "Data ridotta";
				// Used in multiple places
				$lang_string['zero_day'] = "Poni lo zero nel giorno";
				$lang_string['zero_month'] = "Poni lo zero nel mese";
				$lang_string['zero_hour'] = "Poni lo zero nell'ora";
				$lang_string['separator'] = "Separatore:";
				$lang_string['preview'] = "Anteprima:";
				$lang_string['server_offset'] = "Fuso orario server:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ops!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Temi";
				$lang_string['instructions'] = "Usa il men&ugrave; a tendina per selezionare il tema.";
				// Themes
				$lang_string['choose_theme'] = "Temi:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Invia&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Ops!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Carica immagine";
				$lang_string['instructions'] = "Seleziona l'immagine da caricare cliccando su 'Sfoglia' e poi su 'Carica' per eseguire l'operazione.";
				$lang_string['select_file'] = "Scegli il file:";
				$lang_string['upload_btn'] = "Carica";
				// Error Response
				$lang_string['error'] = "<h2>Ops!</h2>Informazioni non salvate! Si &egrave; verificato un problema durante il salvataggio delle informazioni.<br /><br />Il server ha risposto:<br />";
				break;
			case 'search': // <-- New 0.3.7
				$lang_string['title'] = "Risultati della ricerca";
				$lang_string['instructions'] = "Risultati della ricerca per <b>%string</b>:";
				$lang_string['not_found'] = "Mi spiace. Nessun risultato trovato."; // Ho un po' personalizzato :D
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