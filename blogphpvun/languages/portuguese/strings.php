<?php
	// Portuguese Language File
	// (c) 2004 Nuno Cardoso, nuno.cardoso@tugamail.com
	//
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.1
	

	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: English
		$lang_string['language'] = 'Portuguese';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO8859-1';
		$lang_string['php_charset'] = 'ISO8859-1';
		
		$lang_string['locale'] = 'pt_PT'; // <-- New 0.3.7
		setlocale(LC_TIME, $lang_string['locale'] ); // <-- New 0.3.7
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Links";
		$lang_string['menu_home'] = "P�gina Inicial";
		$lang_string['menu_contact'] = "Contact Me"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "Arquivos"; 
		$lang_string['menu_menu'] = "Menu";
		$lang_string['menu_add'] = "Adicionar Not�cias";
		$lang_string['menu_add_static'] = "Criar p�gina est�tica";
		$lang_string['menu_upload'] = "Importar imagem";
		$lang_string['menu_setup'] = "Configurac�o";
		$lang_string['menu_categories'] = "Categories"; // 0.3.7q
		$lang_string['menu_info'] = "Information"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Op��es";
		$lang_string['menu_themes'] = "Temas";
		$lang_string['menu_colors'] = "Cores";
		$lang_string['menu_change_login'] = "Adicionar utilizador/senha";
		$lang_string['menu_logout'] = "Sair";
		$lang_string['menu_login'] = "Entrar";
		$lang_string['menu_most_recent'] = "Coment�rios mais recentes";
		$lang_string['menu_most_recent_entries'] = "Most Recent Entries";
		$lang_string['menu_most_recent_trackback'] = "Most Recent Trackbacks"; // <-- New 0.3.8
		$lang_string['menu_add_block'] = "Blocks";
		
		// Other
		$lang_string['home'] = "P�gina Principal";
		$lang_string['nav_next'] = 'Next'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Back'; // <-- New 0.3.7
		$lang_string['search_title'] = 'Search:'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Go'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'Page Generated in %s seconds'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Janeiro', 'Fevereiro', 'Mar�o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' );
		$lang_string['sb_default_title'] = 'Sem T�tulo';
		$lang_string['sb_default_author'] = 'Sem Autor';
		$lang_string['sb_default_footer'] = 'Rodap� da P�gina';
		
		$lang_string['sb_edit'] = 'Editar';
		$lang_string['sb_delete'] = 'Apagar';
		$lang_string['sb_permalink'] = 'permalink'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = 'Adicionar coment�rio';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'coment�rio';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'coment�rios';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '( ';
		$lang_string['sb_view_counter_post'] = ' vista )';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '( ';
		$lang_string['sb_view_counter_plural_post'] = ' vistas )';
		
		$lang_string['sb_add_link_btn'] = '+ link';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "T�tulo:";
				$lang_string['label_insert'] = "Extras (Negrito / It�lico / URL / Imagem):";
				$lang_string['btn_bold'] = " N ";
				$lang_string['btn_italic'] = " I ";
				$lang_string['btn_image'] = "IMG";
				$lang_string['btn_url'] = "URL";
				$lang_string['view_images'] = "Ver imagens importadas";
				$lang_string['label_entry'] = "Texto:";
				$lang_string['btn_preview'] = "&nbsp;Previsualizar&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Publicar&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "Insira o texto";
				$lang_string['insert_image'] = "Insira a direc��o URL para a imagem";
				$lang_string['insert_url1'] = "Insira o texto a ser mostrado com o link (opcional)";
				$lang_string['insert_url2'] = "Insira a direc��o web completa para o link";
				$lang_string['insert_url3'] = "Open URL in new window (Optional):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Por favor complete o campo t�tulo e o campo texto.";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Optional:';
				$lang_string['insert_image_width'] = 'Width (Optional):';
				$lang_string['insert_image_height'] = 'Height (Optional):';
				$lang_string['insert_image_popup'] = 'View full-size in pop-up when clicked (Optional):';
				$lang_string['insert_image_float'] = 'Float (Optional):';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Adicionar Not�cia";
				$lang_string['instructions'] = "Para colocar uma not�cia preencha os campos que se encontram abaixo, pode pr�-visualizar a not�cia antes de public�-la.";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Pr�-visualizar / Editar entrada";
				$lang_string['instructions_preview'] = "� assim como se v� a sua not�cia.";
				$lang_string['title_update'] = "Actualizar not�cia";
				$lang_string['instructions_update'] = "Pode alterar a sua not�cia utilizando o formul�rio que se encontra debaixo.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Not�cia n�o gravada.<br /><br />Diga isso ao Servidor:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Adicionar P�gina Est�tica";
				$lang_string['instructions'] = "Preencha o formul�rio debaixo para criar uma P�gina Est�tica. Ao contr�rio de uma entrada Blog normal, Entradas Est�ticas aparecem como links no menu da direita. S�o para p�ginas que quer sempre dispon�veis como por exemplo: Sobre Mim, Contacte-nos, Servi�os, etc. Clique em 'Pr�visualizar' para ver como a entrada ficou, ou clique em 'Adicionar' para gravar a entrada.";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Pr�-visualizare / Editar P�gina Est�tica";
				$lang_string['instructions_preview'] = "Aqui est� como a sua P�gina Est�tica aparece. Se est� a usar texto com estilo ou a incluir imagens, lembre-se de 'fechar' todas as 'tags'.";
				$lang_string['title_update'] = "Actualizar P�gina Est�tica";
				$lang_string['instructions_update'] = "Voc� pode mudar a sua entrada usando o formul�rio debaixo. Clique 'Pr�-visualizar' ou 'Adicionar' quando acabar.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Entrada n�o guardada. Encontrei um problema quando guardava a sua entrada.<br /><br />O Servidor reportou:<br />";
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
				$lang_string['title'] = "Adicionar / Administrar Links";
				$lang_string['instructions'] = "Gere liga��es a outros s�tios web. Pressione os bot�es Cima e Baixo para mudar a ordem das liga��es.";
				$lang_string['up'] = "Cima";
				$lang_string['down'] = "Baixo";
				$lang_string['edit'] = "Editar";
				$lang_string['delete'] = "Apagar";
				$lang_string['link_name'] = "Nome da liga��o:";
				$lang_string['link_url'] = "Direc��o web:";
				$lang_string['instructions_edit'] = "Est�s a editar uma liga��o:";
				$lang_string['instructions_modify'] = "Click below to modify a link:";
				$lang_string['submit_btn_edit'] = "Editar liga��o";
				$lang_string['submit_btn_add'] = "Gerir liga��o";
				$lang_string['form_error'] = "Por favor complete os campos nome e URL.";
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
				$lang_string['title'] = "Mudar cores";
				$lang_string['instructions'] = "Pode mudar as cores do texto e do fundo da not�cia.";
				$lang_string['bg_color'] = "Fundo da p�gina";
				$lang_string['main_bg_color'] = "Fundo da p�gina principal";
				$lang_string['border_color'] = "Borda da p�gina";
				$lang_string['inner_border_color'] = "Borda Interna";
				$lang_string['header_bg_color'] = "Fundo do cabe�alho";
				$lang_string['header_txt_color'] = "Texto do cabe�alho";
				$lang_string['menu_bg_color'] = "Fundo da �rea do menu";
				$lang_string['footer_bg_color'] = "Fundo do rodap� da p�gina";
				$lang_string['txt_color'] = "Texto principal";
				$lang_string['headline_txt_color'] = "Texto do cabe�alho";
				$lang_string['date_txt_color'] = "Texto da data";
				$lang_string['footer_txt_color'] = "Texto do rodap�";
				$lang_string['link_reg_color'] = "Link normal";
				$lang_string['link_hi_color'] = "Link activo";
				$lang_string['link_down_color'] = "Link visitado";
				// More Colors
				$lang_string['entry_bg'] = "Fundo da Entrada";
				$lang_string['entry_title_bg'] = "Fundo do T�tulo da Entrada";
				$lang_string['entry_border'] = "Borda da Entrada";
				$lang_string['entry_title_text'] = "Texto do t�tulo da Entrada";
				$lang_string['entry_text'] = "Texto da Entrada";
				$lang_string['menu_bg'] = "Fundo do Menu";
				$lang_string['menu_title_bg'] = "Fundo do Titulo do Menu";
				$lang_string['menu_border'] = "Borda do Menu";
				$lang_string['menu_title_text'] = "Texto do Titulo do Menu";
				$lang_string['menu_text'] = "Texto do Menu";
				$lang_string['menu_link_reg_color'] = "Menu Link Normal";
				$lang_string['menu_link_hi_color'] = "Menu Link Por Cima";
				$lang_string['menu_link_down_color'] = "Menu Link Activo";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:"; // 0.3.7q
				$lang_string['scheme_name'] = "Enter a custom color scheme name:"; // 0.3.7q
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)"; // 0.3.7q
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;"; // 0.3.7q
				$lang_string['form_error'] = "Please enter a name for your custom color scheme."; // 0.3.7q
				$lang_string['submit_btn'] = "&nbsp;Visitar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informa��o n�o guardada. Encontrei um problema enquando guardava a sua entrada.<br /><br />O Servidor reportou:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['title'] = "Coment�rios";
				$lang_string['header'] = "Gerir coment�rio";
				$lang_string['instructions'] = "Preencha os campos abaixo para deixar o seu coment�rio.";
				$lang_string['comment_name'] = "O seu nome:";
				$lang_string['comment_email'] = "Email:"; // 0.3.8
				$lang_string['comment_url'] = "URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Remember me:"; // 0.3.8
				$lang_string['comment_text'] = "Coment�rio:";
				$lang_string['post_btn'] = "&nbsp;Publicar coment�rio&nbsp;";
				$lang_string['delete_btn'] = "Apagar";
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Coment�rio n�o guardado. Encontrei um problema enquanto gravava o coment�rio.<br /><br />O Servidor reportou:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Coment�rio n�o apagado. Encontrei um problema enquanto apagava o teu coment�rio.<br /><br />O Servidor Reportou:<br />";
				$lang_string['form_error'] = "Por favor complete os campos Nome e Coment�rio."; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Apagar entrada";
				$lang_string['instructions'] = "Est� prestes a apagar uma not�cia, assegure-se de que quer mesmo apag�-la porque n�o h� forma de desfazer a ac��o";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Imposs�vel apagar a entrada.<br /><br />O Servidor Reportou:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Apagando P�gina Est�tica";
				$lang_string['instructions'] = "Isto � a p�gina est�tica que est� prestes a apagar. Por favor assegure-se de que � isto mesmo que quer, pois n�o h� maneira de desfazer...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>N�o consegui apagar a entrada.<br /><br />O Servidor Reportou:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Lista de imagens";
				$lang_string['instructions'] = "Clique debaixo para ver a imagem.<br><br>Para associar uma imagem � sua not�cia:<br>1) Fa�a control + clique num link e seleccione 'Copiar para a �rea de Transfer�ncia'.<br>2) Regresse ao editor da entrada.<br>3) Fa�a clique no bot�o Imagem e cole a liga��o na janela.";
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
				$lang_string['title'] = "Inserir";
				$lang_string['instructions'] = "Insira o seu nome de utilizador e senha";
				$lang_string['username'] = "Utilizador:";
				$lang_string['password'] = "Senha";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Bemvindo!</h2>Entrou com sucesso!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Erro na autentica��o. Verifique o seu nome de utilizador e senha e tente de novo.<p />";
				$lang_string['form_error'] = "Por favor complete os campos Utilizador e Senha."; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Sair";
				$lang_string['instructions'] = "<h2>Whoops!</h2>Erro ao tentar sair. Imposs�vel apagar a cookie. Por que continua conectado?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informa��o n�o gravada.<br /><br />O Relat�rio do servidor:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Mudar utilizador &amp; Senha";
				$lang_string['instructions'] = "Use o formul�rio abaixo para mudar o seu nome de utilizador e/ou senha.Entre o Utilizador e a Senha que pretende utilizar.";
				$lang_string['username'] = "Utilizador:";
				$lang_string['password'] = "Senha:";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Successo!</h2>O seu Utilizador e/ou Senha est�o activos. Bom blogging!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Informa��o n�o gravada. Encontrei um problema enquanto gravava o Utilizador e a Senha.<br /><br />O Servidor Reportou:<br />";
				$lang_string['form_error'] = "Por favor complete os campos Utilizador e Senha.";
				break;
			case 'install00':
				$lang_string['title'] = "Benvindo";
				$lang_string['instructions'] = "
				Obrigado por escolher Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Escolha a Linguagem:";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Benvindo";
				$lang_string['instructions'] = "
				Obrigado por escolher Simple PHP Blog!<br /><br />Simple PHP Blog � um sistema de blogs simples. Requer PHP 4.1 ou maior, e permiss�es de escrita no servidor. Toda a informa��o � guardada em ficheiros-corridos, portanto n�o � necess�rio base de dados.<br /><br />				Para come�ar, Simple PHP Blog precisa de criar tr�s directorias ('config', 'content', e 'images') aonde guardar� toda a sua informa��o.<br /><br />				<b>Clique embaixo para come�ar a configura��o:</b>";
				
				
				$lang_string['begin'] = "[ Come�ar configura��o ]";
				break;
			case 'install02':
				$lang_string['title'] = "Configura��o";
				$lang_string['instructions'] = "Tentando criar directorias 'config', 'content', e 'images':";
				$lang_string['folder_exists'] = "Ok! Directoria j� existe. Nenhuma altera��o efectuada...";
				$lang_string['folder_failed'] = "Whoops! N�o consegui criar directorias...";
				$lang_string['folder_success'] = "Sucesso! Directorias criadas...";
				// Help
				$lang_string['help'] = "
				<h2>Whoops!</h2>
				N�o consegui criar uma ou mais directorias! Isto � provavelmente devido a:<br>
				<i>1) <b>Permiss�es de escrita</b> n�o est�o definidas para permitir acesso <b>Read/Write</b>.<br>
				<i>2) O <b>UID</b> (user ID's) de todos os ficheiros e pastas t�m de ser o mesmo.</i><p />
				
				Siga as instru��es de resolu��o de problemas e por favor tente novamente:<p />
				1) Crie manualmente as seguintes directorias: <b>config</b>, <b>content</b>, e <b>images</b>.<p />
				2) Permita <b>Permiss�es de escrita</b> �s directorias. No seu programa FTP, Owner, User, e World devem ter acesso <b>Read</b> e <b>Write</b>. <i>(Voc� pode ter de contactar o seu ISP para mudar isso...)</i><p />				3) Certifique-se que o UID de todos os ficheirose directorias s�o os mesmos. <i>(Voc� pode ter de contactar o seu ISP para mudar isso...)</i>";
				
				$lang_string['try_again'] = "[ Tente novamente ]";
				// Success
				$lang_string['success'] = "<h2>Sucesso!</h2>Directorias criadas com sucesso!<p /><b>Clique embaixo par acontinuar:</b>";
				$lang_string['continue'] = "[ Continuar ]";
				break;
			case 'install03':
				$lang_string['title'] = "Criar Utilizador e Senha";
				$lang_string['instructions'] = "Use o formul�rio abaixo para criar um Utilizador e uma Senha.";
				$lang_string['username'] = "Utilizador:";
				$lang_string['password'] = "Senha:";
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Success
				$lang_string['success'] = "<h2>Parab�ns!</h2>Voc� est� ligado. Clique abaixo para visitar a p�gina de Configura��o, onde pode dar o nome ao seu blog. Bom blogging!<p />";
				$lang_string['btn_setup'] = "[ Configura��o ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>Whoops!</h2>Informa��o n�o guardada. Encontrei um problema enquanto gravava o Utilizador e pa Senha.<br /><br />O Servidor Reportou:<br />";
				$lang_string['form_error'] = "Por favor complete os campos Utilizador e Senha.";
				break;
			case 'setup':
				$lang_string['title'] = "Configura��o";
				$lang_string['instructions'] = "Pode mudar o nome do seu blog e a sua informa��o pessoal.";
				$lang_string['blog_title'] = "Nome do Blog:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "Email:"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "Rodap� de p�gina:";
				$lang_string['blog_choose_language'] = "Escolha a linguagem:";
				$lang_string['blog_enable_comments'] = "Enable User Comments"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Open Comments in Popup Window"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Enable Users to Rate Entries"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Send email notification when comments are posted"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Send weblog &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "Enter full URL (i.e. http://rpc.weblogs.com/RPC2) of service to &quot;ping&quot;.<br />(You can enter more than one address separated by commas.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "Maximum Entries to Display:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Tags to Allow in Comments:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					Since PHP 4.0.4, PHP has had the ability to read and write gzip (.gz) compressed files, 
					thus saving disk-space. It can also transparently compress pages that are sent to browsers 
					which support gzip compression, thus saving bandwidth.<br />
					<br />
					Zlib support in PHP is not enabled by default. If the checkboxes are disabled, then your 
					installation of PHP does not support the Zlib extension."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Enable GZIP Compression for Database Files"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Enable GZIP Compression for HTTP Output"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informa��o n�o guardada.<br /><br />Relat�rio do servidor:<br />";
				$lang_string['form_error'] = "Por favor complete os campos T�tulo e Autor.";
				$lang_string['label_entry_order'] = "Ordem de Entrada:";
				$lang_string['select_new_to_old'] = "Listar Novas Primeiro";
				$lang_string['select_old_to_new'] = "Listar Velhas Primeiro";
				$lang_string['label_comment_order'] = "Ordem de Coment�rios:";
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
				$lang_string['title'] = "Op��es";
				$lang_string['instructions'] = "Use o formul�rio debaico para personalizar a data e tempo para entradas de blog e coment�rios. Voc� pode seleccionar 12 ou 24 horas de rel�gio. Formato de data longo ou pequeno. E as �reas de <b>Pr�-visualiza��o</b> actualizam automaticamente para mostrar-lhe como o seu formato ir� aparecer.";
				// Long Date
				$lang_string['ldate_title'] = "Formato de data longo:";
				$lang_string['weekday'] = "Dia da Semana";
				$lang_string['month'] = "M�s";
				$lang_string['day'] = "Dia";
				$lang_string['year'] = "Ano";
				$lang_string['none'] = "Nada";
				// Short Date
				$lang_string['sdate_title'] = "Formato de data pequeno:";
				$lang_string['s_month'] = "M�s";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "Dia";
				$lang_string['s_year'] = "Ano";
				$lang_string['zero_day'] = "Zero � esquerda para dia";
				$lang_string['show_century'] = "Mostrar s�culo";
				// Time
				$lang_string['time_title'] = "Formato de tempo:";
				$lang_string['12hour'] = "12-horas";
				$lang_string['24hour'] = "24-horas";
				$lang_string['before_noon'] = "Antes do Meio-Dia";
				$lang_string['after_noon'] = "Depois do Meio-Dia";
				// Date
				$lang_string['date_title'] = "Formato de Exibi��o de Data:";
				$lang_string['long_date'] = "Data Longa";
				$lang_string['short_date'] = "Data Pequena";
				$lang_string['time'] = "Tempo";
				// Menu
				$lang_string['menu_title'] = "Formato de Exibi��o de Menu de Data:";
				$lang_string['long_date'] = "Data Longa";
				$lang_string['short_date'] = "Data Pequena";
				// Used in multiple places
				$lang_string['zero_day'] = "Zero � esquerda para dia";
				$lang_string['zero_month'] = "Zero � esquerda para m�s";
				$lang_string['zero_hour'] = "Zero � esquerda para hora";
				$lang_string['separator'] = "Separador:";
				$lang_string['preview'] = "Pr�-visualizar:";
				$lang_string['server_offset'] = "Desvio do Servidor:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informa��o n�o guardada. Encontrei um problema enquanto gravava a informa��o. <br /><br />O Servidor Reportou:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Temas";
				$lang_string['instructions'] = "Use o menu para seleccionar um tema diferente.";
				// Themes
				$lang_string['choose_theme'] = "Temas:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Submeter&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Informa��o n�o gravada. Encontrei um problema enquanto gravava a tua informa��o.<br /><br /> O Servidor Reportou:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Carregar imagem";
				$lang_string['instructions'] = "fa�a clique debaixo para importar uma imagem.";
				$lang_string['select_file'] = "Seleccionar arquivo:";
				$lang_string['upload_btn'] = "Carregar";
				// Error Response
				$lang_string['error'] = "<h2>Whoops!</h2>Imposs�vel carregar a imagem. <br /><br />Relat�rio do servidor:<br />";
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