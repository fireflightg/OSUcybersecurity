<?php
	// Spanish Language File
	// (c) 2004 Javier Guti�rrez Chamorro (Guti), guti <at> ya <dot> com
	//
	// Simple PHP Version: 0.3.7
	// Language Version:   0.3.7.1
	
	
	function sb_language( $page ) {
		global $language, $html_charset, $php_charset, $lang_string;
			
		// Language: Spanish
		$lang_string['locale'] = 'es_ES';
		$lang_string['language'] = 'spanish';
		
		// ISO Charset: ISO-8859-1
		$lang_string['html_charset'] = 'ISO-8859-1';
		$lang_string['php_charset'] = 'ISO-8859-1';
		
		setlocale( LC_TIME, $lang_string['locale'] );
		
		// Some Global Strings
		
		// Menu
		$lang_string['menu_links'] = "Enlaces";
		$lang_string['menu_home'] = "Principal";
		$lang_string['menu_contact'] = "Contacta Conmigo"; // <-- New 0.3.8
		$lang_string['menu_stats'] = "Stats"; // <-- New 0.3.7r
		$lang_string['menu_archive'] = "Archivo";
		$lang_string['menu_menu'] = "Men�";
		$lang_string['menu_add'] = "Agregar Entrada";
		$lang_string['menu_add_static'] = "Agregar P�gina Est�tica";
		$lang_string['menu_upload'] = "Subir Imagen";
		$lang_string['menu_setup'] = "Configuraci�n";
		$lang_string['menu_categories'] = "Categor&iacute;as";
		$lang_string['menu_info'] = "Informaci�n"; // <-- New 0.3.7
		$lang_string['menu_options'] = "Opciones";
		$lang_string['menu_themes'] = "Temas";
		$lang_string['menu_colors'] = "Colores";
		$lang_string['menu_change_login'] = "Cambiar usuario/contrase�a";
		$lang_string['menu_logout'] = "Salir";
		$lang_string['menu_login'] = "Entrar";
		$lang_string['menu_most_recent'] = "&Uacute;ltimos Comentarios";
		$lang_string['menu_most_recent_entries'] = "&Uacute;ltimos Art&iacute;culos";
		$lang_string['menu_most_recent_trackback'] = "&Uacute;ltimos Trackbacks"; // <-- New 0.3.8
		// DATOH_ADD
		$lang_string['menu_add_block'] = "Blocks";
		// DATOH_END
		
		// Other
		$lang_string['home'] = 'P�gina Principal';
		$lang_string['nav_next'] = 'Siguiente'; // <-- New 0.3.7
		$lang_string['nav_back'] = 'Anterior'; // <-- New 0.3.7
		$lang_string['search_title'] = 'B�squeda'; // <-- New 0.3.7
		$lang_string['search_go'] = 'Enviar'; // <-- New 0.3.7
		$lang_string['page_generated_in'] = 'P�gina generada en %s segundos'; // <-- New 0.3.7
		
		// SB Functions
		$lang_string['sb_months'] = array( 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' );
		$lang_string['sb_default_title'] = 'Sin t�tulo';
		$lang_string['sb_default_author'] = 'Sin autor';
		$lang_string['sb_default_footer'] = 'Pie de P�gina';
		
		$lang_string['sb_edit'] = 'editar';
		$lang_string['sb_delete'] = 'borrar';
		$lang_string['sb_permalink'] = 'enlace permanente'; // <-- New 0.3.8
		$lang_string['sb_trackback'] = 'trackbacks'; // <-- New 0.3.8
		
		$lang_string['sb_add_comment_btn'] = 'agregar comentario';
		$lang_string['sb_comment_btn_number_first'] = true;
		$lang_string['sb_comment_btn'] = 'comentario';
		$lang_string['sb_comments_plural_btn_number_first'] = true;
		$lang_string['sb_comments_plural_btn'] = 'comentarios';
		
		// ( 1 view )
		$lang_string['sb_view_counter_pre'] = '';
		$lang_string['sb_view_counter_post'] = ' visualizaci�n';
		// ( 2 views )
		$lang_string['sb_view_counter_plural_pre'] = '';
		$lang_string['sb_view_counter_plural_post'] = ' visualizaciones';
		
		$lang_string['sb_add_link_btn'] = 'Agregar Enlaces';
		
		$lang_string['sb_rate_entry_btn'] = 'Click to Rate Entry';
		
		// Entry Text Editor
		if ( $page == 'add' || $page == 'add_static' || $page == 'comments' || $page == 'add_block' ) {
				$lang_string['label_subject'] = "T�tulo:";
				$lang_string['label_insert'] = "Extras (Negrita / Cursiva / URL / Imagen):";
				$lang_string['btn_bold'] = " N ";
				$lang_string['btn_italic'] = " I ";
				$lang_string['btn_image'] = "IMG";
				$lang_string['btn_url'] = "URL";
				$lang_string['view_images'] = "Ver im�genes cargadas";
				$lang_string['label_entry'] = "Texto:";
				$lang_string['btn_preview'] = "&nbsp;Previsualizar&nbsp;";
				$lang_string['btn_post'] = "&nbsp;Publicar&nbsp;";
				$lang_string['file_name'] = "Static File Name: (no spaces or file extensions)"; // <-- New 0.3.8
				// Javascript Strings
				$lang_string['insert_styles'] = "Ingrese el texto";
				$lang_string['insert_image'] = "Ingrese la direcci�n URL para la imagen";
				$lang_string['insert_url1'] = "Ingrese el texto a ser mostrado con el enlace (opcional)";
				$lang_string['insert_url2'] = "Ingrese la direcci�n web completa para el enlace";
				$lang_string['insert_url3'] = "Abrir URL en una nueva ventana (Opcional):"; // <-- New 0.3.6
				$lang_string['form_error'] = "Por favor complete los campos T�tulo y Texto.";
				// More Javascript Strings <-- New 0.3.6
				$lang_string['insert_image_optional'] = 'Opcional:';
				$lang_string['insert_image_width'] = 'Ancho (Opcional):';
				$lang_string['insert_image_height'] = 'Alto (Opcional):';
				$lang_string['insert_image_popup'] = 'Ver en una ventana emergente al hacer clic (Opcional):';
				$lang_string['insert_image_float'] = 'Flotar (Opcional):';
		}
	
		switch ($page) {
			case 'add':
				// Add Entry
				$lang_string['title'] = "Agregar Entrada";
				$lang_string['instructions'] = "Para colocar una entrada llene los campos que se encuentran debajo, puede previsualizar la entrada antes de publicarla.";
				$lang_string['title_ad'] = "Confirm Trackback Pings"; // <-- New 0.3.8
				$lang_string['instructions_ad'] = "These are the Auto-Discovered URIs you're about to ping. If you do not want to ping a certain URI, uncheck it below. Then press the 'OK' button to ping the checked URIs or press 'Cancel' to not ping at all."; // <-- New 0.3.8
				$lang_string['label_tb_ping'] = "Trackback ping(s) to send (comma separated)"; // <-- New 0.3.8
				$lang_string['label_tb_autodiscovery'] = "autodiscovery"; // <-- New 0.3.8
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previsualizar / Editar entrada";
				$lang_string['instructions_preview'] = "As� es como se ve su entrada";
				$lang_string['title_update'] = "Actualizar entrada";
				$lang_string['instructions_update'] = "Puede cambiar su entrada utilizando el formulario que se encuentra debajo.";
				$lang_string['ok_btn'] = "&nbsp;OK&nbsp;"; // <-- New 0.3.8
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;"; // <-- New 0.3.8
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La entrada no pudo ser guardada. Se encontr� un problema mientras se almacenaba la entrada.<br /><br />El servidor report�:<br />";
				break;
			case 'add_static':
				// Add Entry
				$lang_string['title'] = "Agregar P�gina Est�tica";
				$lang_string['instructions'] = "Rellena el formulario que se encuentra debajo para crear una p�gina est�tica. A diferencia de una entrada ordinaria a la bit�cora, las entradas est�ticas aparecen como enlaces en el men� de la derecha. Podr�an usarse para p�ginas que desees que esten disponibles siempre, tales como: Sobre m�, Cont�ctenos, Agenda, etc. Presione 'Previsualizar' para mirar como lucir� la p�gina, o presione 'Publicar' para guardar la p�gina";
				// Preview / Edit Entry
				$lang_string['title_preview'] = "Previsualizar / Editar P�gina Est�tica";
				$lang_string['instructions_preview'] = "As� es como su p�gina est�tica lucir�. Si esta usando estilos de texto o ha incluido im�genes, recuerde 'cerrar' todas las 'etiquetas'.";
				$lang_string['title_update'] = "Actualizar P�gina Est�tica";
				$lang_string['instructions_update'] = "Puedes cambiar la entrada usando el formulario que se encuentra debajo. Presiona 'Previsualizar' o 'Publicar' cuando estes listo.";
				$lang_string['form_error'] = "Please complete the Subject, Entry, and File Name fields.";	
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La entrada no pudo ser guardada. Se encontr� un problema mientras se almacenaba la entrada.<br /><br />El servidor report�:<br />";
				break;
			// DATOH_ADD
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
			// DATOH_END
			case 'add_link':
				$lang_string['static_pages'] = "Static Pages:";
				// Add / Manage Links
				$lang_string['title'] = "Agregar / Administrar Enlaces";
				$lang_string['instructions'] = "Agregar enlaces a otros sitios web. Presione los botones Arriba y Abajo para cambiar el orden de los enlaces.";
				$lang_string['up'] = "Arriba";
				$lang_string['down'] = "Abajo";
				$lang_string['edit'] = "Editar";
				$lang_string['delete'] = "Borrar";
				$lang_string['link_name'] = "Nombre del Enlace:";
				$lang_string['link_url'] = "URL (Direcci�n Web):";
				$lang_string['instructions_edit'] = "Est�s editando un enlace:";
				$lang_string['instructions_modify'] = "Haga clic debajo en <b>Editar</b> para modificar el enlace:"; // <-- New
				$lang_string['submit_btn_edit'] = "Editar enlace";
				$lang_string['submit_btn_add'] = "Agregar enlace";
				$lang_string['form_error'] = "Por favor complete los campos Nombre y URL.";
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
				$lang_string['title'] = "Cambiar colores";
				$lang_string['instructions'] = "Puede cambiar los colores del texto y del fondo de la entrada.";
				$lang_string['bg_color'] = "Fondo de p�gina";
				$lang_string['main_bg_color'] = "Fondo de la p�gina principal";
				$lang_string['border_color'] = "Borde de p�gina";
				$lang_string['inner_border_color'] = "Borde Interior";
				$lang_string['header_bg_color'] = "Fondo del encabezado";
				$lang_string['header_txt_color'] = "Texto del encabezado";
				$lang_string['menu_bg_color'] = "Fondo del men�";
				$lang_string['footer_bg_color'] = "Fondo del pie de p�gina";
				$lang_string['txt_color'] = "Texto principal";
				$lang_string['headline_txt_color'] = "Texto del encabezado";
				$lang_string['date_txt_color'] = "Texto de la fecha";
				$lang_string['footer_txt_color'] = "Texto del pie de p�gina";
				$lang_string['link_reg_color'] = "Enlace normal";
				$lang_string['link_hi_color'] = "Enlace resaltado";
				$lang_string['link_down_color'] = "Enlace visitado";
				// More Colors
				$lang_string['entry_bg'] = "Fondo de la entrada";
				$lang_string['entry_title_bg'] = "Fondo del t�tulo de la entrada";
				$lang_string['entry_border'] = "Borde de la entrada";
				$lang_string['entry_title_text'] = "Texto del t�tulo de la entrada";
				$lang_string['entry_text'] = "Texto de la entrada";
				$lang_string['menu_bg'] = "Fondo del men�";
				$lang_string['menu_title_bg'] = "Fondo del t�tulo del men�";
				$lang_string['menu_border'] = "Borde del men�";
				$lang_string['menu_title_text'] = "Texto del t�tulo del men�";
				$lang_string['menu_text'] = "Texto del men�";
				$lang_string['menu_link_reg_color'] = "Enlace normal en el men�";
				$lang_string['menu_link_hi_color'] = "Enlace resaltado en el men�";
				$lang_string['menu_link_down_color'] = "Enlace visitado en el men�";
				// Submit
				$lang_string['color_preset'] = "Color Schemes:";
				$lang_string['scheme_name'] = "Enter a custom color scheme name:";
				$lang_string['scheme_file'] = "Enter scheme file name: (no spaces or file extensions)";
				$lang_string['form_error'] = "Please enter a name for your custom color scheme.";
				$lang_string['save_btn'] = "&nbsp;Save&nbsp;";
				$lang_string['submit_btn'] = "&nbsp;Visitar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />El servidor report�:<br />";
				break;
			case 'comments':
				// Comments
				$lang_string['title'] = "Comentarios";
				$lang_string['header'] = "Agregar comentario";
				$lang_string['instructions'] = "Llene los campos debajo para dejar su comentario.";
				$lang_string['comment_name'] = "Su nombre:";
				$lang_string['comment_email'] = "Su email:"; // 0.3.8
				$lang_string['comment_url'] = "Su URL:"; // 0.3.8
				$lang_string['comment_remember'] = "Recordar mi informaci�n personal:"; // 0.3.8
				$lang_string['comment_text'] = "Comentario:";
				$lang_string['post_btn'] = "&nbsp;Publicar comentario&nbsp;";
				$lang_string['delete_btn'] = "Borrar";
				// Error Response
				$lang_string['error_add'] = "<h2>Whoops!</h2>Comentario no grabado. I ran into a problem while saving your comment.<br /><br />Server Reported:<br />";
				$lang_string['error_delete'] = "<h2>Whoops!</h2>Comentario no borrado. I ran into a problem while deleting your comment.<br /><br />Server Reported:<br />";
				$lang_string['form_error'] = "Por favor complete los campos Nombre y Comentario."; // <-- Need Translation
				break;
			case 'delete':
				$lang_string['title'] = "Borrar entrada";
				$lang_string['instructions'] = "Est� a punto de borrar una entrada, aseg�rese de querer borrarla porque no hay forma de deshacer el cambio...";
				$lang_string['ok_btn'] = "&nbsp;Borrar&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancelar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>No se pudo borrar la entrada.<br /><br />El servidor report�:<br />";
				break;
			case 'delete_static':
				$lang_string['title'] = "Borrar P�gina Est�tica";
				$lang_string['instructions'] = "Est� a punto de borrar una p�gina est�tica, aseg�rese de querer borrarla porque no hay forma de deshacer el cambio...";
				$lang_string['ok_btn'] = "&nbsp;Ok&nbsp;";
				$lang_string['cancel_btn'] = "&nbsp;Cancel&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>No se pudo borrar la entrada.<br /><br />El servidor report�:<br />";
				break;
			case 'image_list':
				$lang_string['title'] = "Lista de im�genes";
				$lang_string['instructions'] = "Haga clic en los enlaces que estan debajo para ver la imagen.<br><br>Para agregar una imagen a su entrada:<br>1) Haga clic derecho en un enlace y seleccione 'Copiar en el portapapeles'.<br>2) Regrese a la p�gina de agregar o editar entrada.<br>3) Haga clic en el bot�n Imagen y pegue el enlace en la ventana.";
				break;
			case 'info': // New 0.3.7
				$lang_string['title'] = "Informaci�n de Meta-datos";
				$lang_string['instructions'] = "Esta informaci�n se usa para los &quot;meta-datos&quot;, que ayudan a los buscadores a indexar su web. Tambi�n se usan para generar los feeds RSS.";
				$lang_string['info_keywords'] = "Palabras clave: (Lista de palabras clave separadas por comas.)";
				$lang_string['info_description'] = "Descripci�n: (Un resumen o texto libre sobre tu sitio.)";
				$lang_string['info_copyright'] = "Derechos: (Informaci�n de copyright o un enlace a la p�gina que la contiene.)";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />El servidor report�:<br />";
				$lang_string['form_error'] = "Por favor complete los campos T�tulo y Autor.";
				break;
			case 'index':
				// Index
				break;
			case 'static':
				// Index
				break;
			case 'rating': // New 0.3.8
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />El servidor report�:<br />";
				break;			
			case 'login':
				$lang_string['upgrade'] = "<h2>Upgrade</h2>"; // New 0.3.8
				$lang_string['upgrade_count'] = "%n comment files need to be upgraded:"; // New 0.3.8
				$lang_string['upgrade_url'] = "Upgrade Comments"; // New 0.3.8
				$lang_string['title'] = "Ingresar";
				$lang_string['instructions'] = "Ingrese su nombre de usuario y contrase�a";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contrase�a";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�Bienvenido!</h2>�Ha ingresado exitosamente!<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>�Ups!</h2>No puede ingresar. Verifique su nombre de usuario y contrase�a e int�ntelo de nuevo.<p />";
				$lang_string['form_error'] = "Por favor complete los campos Usuario y Contrase�a."; // <-- Need Translation
				break;
			case 'logout':
				$lang_string['title'] = "Salir";
				$lang_string['instructions'] = "<h2>�Ups!</h2>Error intentando salir. No se pudo borrar la cookie. �Por que sigue conectado?<p />";
				break;
			case 'forms':
				$lang_string['title'] = "";
				$lang_string['instructions'] = "";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />El servidor report�:<br />";
				break;
			case 'set_login':
				$lang_string['title'] = "Cambiar Usuario y Contrase�a";
				$lang_string['instructions'] = "Use el formulario inferior para cambiar su nombre de usuario y contrase�a. Inserta el nombre de usuario y la contrase�a que quieras usar.";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contrase�a:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�Listo!</h2>Su nuevo nombre de usuario y/o contrase�a esta activo desde ahora.<p />";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>�Ups!</h2>Informaci�n no guardada. Hubo un error mientras se guardaba su nombre de usuario y contrase�a .<br /><br />El servidor report�:<br />";
				$lang_string['form_error'] = "Por favor complete los campos Usuario y Contrase�a.";
				break;
			case 'install00':
				$lang_string['title'] = "Bienvenido";
				$lang_string['instructions'] = "�Gracias por elegir Simple PHP Blog!";
				$lang_string['blog_choose_language'] = "Selecci�n de Idioma:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				break;
			case 'install01':
				$lang_string['title'] = "Bienvenido";
				$lang_string['instructions'] = "�Gracias por elegir Simple PHP Blog!<br /><br />Simple PHP Blog es un sistema de blogging de peso ligero. Requiere PHP is 4.1 o superior y permisos de escritura en el servidor. Toda la informaci�n es guardada en archivos de texto plano por lo que no requiere una base de datos para funcionar.<br /><br />
				Para comenzar, Simple PHP Blog necesita crear tres carpetas ('config', 'content', e 'images') en la cuales guardar� su informaci�n.<br /><br />
				<b>Haga clic debajo para comenzar la instalaci�n:</b>";

				$lang_string['begin'] = "[ Comenzar Instalaci�n ]";
				break;
			case 'install02':
				$lang_string['title'] = "Instalaci�n";
				$lang_string['instructions'] = "Intentando crear las carpetas 'config', 'content', e 'images':";
				$lang_string['folder_exists'] = "�Listo! Las carpetas ya exist�an. No se hicieron cambios...";
				$lang_string['folder_failed'] = "�Ups! No se pudieron crear las carpetas...";
				$lang_string['folder_success'] = "�Listo! Carpetas creadas...";
				// Help
				$lang_string['help'] = "
				<h2>�Ups!</h2>�No se pudieron crear una o m�s de las carpetas! Esto sucede usualmente debido a:<br>
				<i>1) <b>Permisos de escritura</b> no estan configurados para permitir acceso de  <b>Escritura/Lectura</b>.</i><br>
				<i>2) Las <b>UID</b>'s (user ID's) de todos los archivos y carpetas deben corresponder.</i><p />
				Siga las instrucciones siguientes para resolver el problema y luego intente de nuevo:<p />				
				1) Cree manualmente las siguientes carpetas: <b>config</b>, <b>content</b>, e <b>images</b>.<p />
				2) Habilite <b>Permisos de escritura</b> a las carpetas. En su cliente FTP; Owner, User, y World deben tener acceso de <b>Read</b> y <b>Write</b>. <i>(Podr�a necesitar contactar a su proveedor de servicios para cambiar esto...)</i><p />
				3) Aseg�rese de que las UID's de todos sus archivos y carpetas son los mismos. <i>(Podr�a necesitar contactar a su proveedor de servicios para cambiar esto...)</i>";


				$lang_string['try_again'] = "[ Reintentar ]";
				// Success
				$lang_string['success'] = "<h2>�Listo!</h2>�Carpetas creadas exitosamente!<p /><b>Haga clic debajo para continuar:</b>";
				$lang_string['continue'] = "[ Continuar ]";
				break;
			case 'install03':
				$lang_string['title'] = "Crear Usuario y Contrase�a";
				$lang_string['instructions'] = "Use el formulario inferior para crear un Usuario y una Contrase�a.";
				$lang_string['username'] = "Usuario:";
				$lang_string['password'] = "Contrase�a:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Success
				$lang_string['success'] = "<h2>�Felicitaciones!</h2>Esta ahora conectado. Haga clic debajo para visitar la p�gina de configuraci�n y cambiar las opciones de su bit�cora.<p />";
				$lang_string['btn_setup'] = "[ Configuraci�n ]";
				// Wrong Password
				$lang_string['wrong_password'] = "<h2>�Ups!</h2>Informaci�n no guardada. Hubo un error mientras se guardaba su nombre de usuario y contrase�a .<br /><br />El servidor report�:<br />";
				$lang_string['form_error'] = "Por favor, rellene los campos Usuario y Contrase�a";
				break;
			case 'setup':
				$lang_string['title'] = "Configuraci�n";
				$lang_string['instructions'] = "Puede cambiar el nombre de su bit�cora y su informaci�n personal debajo.";
				$lang_string['blog_title'] = "Nombre de la Bit�cora:";
				$lang_string['blog_author'] = "Autor:";
				$lang_string['blog_email'] = "Correo Electr�nico:"; // <-- New 0.3.7
				$lang_string['blog_footer'] = "Pie de p�gina:";
				$lang_string['blog_choose_language'] = "Elegir Idioma:";
				$lang_string['blog_enable_comments'] = "Permitir Comentarios de Usuarios"; // <-- New 0.3.6
				$lang_string['blog_comments_popup'] = "Abrir comentarios en Ventanas Emergentes"; // <-- New 0.3.6
				$lang_string['blog_enable_voting'] = "Permitir a los Usuarios Votar Art�culos"; // <-- New 0.3.8
				$lang_string['blog_email_notification'] = "Enviar email cuando se publique un comentario"; // <-- New 0.3.7
				$lang_string['blog_send_pings'] = "Enviar &quot;pings&quot;"; // <-- New 0.3.7
				$lang_string['blog_ping_urls'] = "URL completa (ej: http://rpc.weblogs.com/RPC2) del servicio de &quot;ping&quot;.<br />(Puedes introducir m�s de una separ�ndolas por comas.)"; // <-- New 0.3.7
				$lang_string['blog_trackback_about'] = "Trackback provides a method of notification between blogs. Let another
					blog know that you are linking to them by sending them a trackback ping. See who is linking to 
					your blog by receiving trackback pings.<br />
				   You can either enter the URIs to ping manually, or try to do it automatically through 
				   Auto-Discovery."; // <-- New 0.3.8
				$lang_string['blog_trackback_enabled'] = "Enable trackback in my blog"; // <-- New 0.3.8
				$lang_string['blog_trackback_auto_discovery'] = "Enable Auto-Discovery when submitting a post containing URLs"; // <-- New 0.?.?
				$lang_string['blog_max_entries'] = "M�ximas Entradas a Mostrar:"; // <-- New 0.3.6
				$lang_string['blog_comment_tags'] = "Etiquetas permitidas en los Comentarios:"; // <-- New 0.3.6
				$lang_string['blog_gzip_about'] = "
					A partir de la versi�n 4.0.4, PHP puede leer y escribir archivos comprimidos gzip (.gz), lo cual ahorra espacio en disco. Por otra parte, es posible comprimir las p�ginas que se env�an a un navegador que soporte gzip, ahorrando as� ancho de banda.<br />
					<br />El soporte de Zlib no viene activado por defecto en el PHP. Si las casillas de verificaci�n est�n desactivadas significa que su PHP no soporta la extensi�n Zlib."; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_txt'] = "Activar compresi�n GZIP para archivos datos"; // <-- New 0.3.7
				$lang_string['blog_enable_gzip_output'] = "Activar compresi�n GZIP para la salida HTTP"; // <-- New 0.3.7
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />El servidor report�:<br />";
				$lang_string['form_error'] = "Por favor complete los campos T�tulo y Autor.";
				$lang_string['label_entry_order'] = "Orden de Art�culos:";
				$lang_string['select_new_to_old'] = "Primero los Nuevos";
				$lang_string['select_old_to_new'] = "Primero los Antiguos";
				$lang_string['label_comment_order'] = "Orden de Comentarios:";
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
				$lang_string['title'] = "Opciones";
				$lang_string['instructions'] = "Use el formulario de debajo para personalizar el formato en que se presentar� la fecha y hora en la bit�cora y en los comentarios. Puedes seleccionar el formato de 12 o de 24 horas. Formato corto o largo. Las areas de <b>Previsualizaci�n</b> le muestran autom�ticamente como se ver� su formato.";
				// Long Date
				$lang_string['ldate_title'] = "Formato de Fecha Larga:";
				$lang_string['weekday'] = "D�a de la Semana";
				$lang_string['month'] = "Mes";
				$lang_string['day'] = "D�a";
				$lang_string['year'] = "A�o";
				$lang_string['none'] = "Ninguno";
				// Short Date
				$lang_string['sdate_title'] = "Formato de Fecha Corta:";
				$lang_string['s_month'] = "Mes";
				$lang_string['s_mon'] = "MMM";
				$lang_string['s_day'] = "D�a";
				$lang_string['s_year'] = "A�o";
				$lang_string['zero_day'] = "Cero inicial para el D�a";
				$lang_string['show_century'] = "Mostrar siglo";
				// Time
				$lang_string['time_title'] = "Formato de Hora:";
				$lang_string['12hour'] = "Reloj de 12 horas";
				$lang_string['24hour'] = "Reloj de 24 horas";
				$lang_string['before_noon'] = "Before Noon";
				$lang_string['after_noon'] = "After Noon";
				// Date
				$lang_string['date_title'] = "Formato de Visualizaci�n de Fecha:";
				$lang_string['long_date'] = "Fecha Larga";
				$lang_string['short_date'] = "Fecha Corta";
				$lang_string['time'] = "Hora";
				// Menu
				$lang_string['menu_title'] = "Formato de Visualizaci�n en el Men� Fecha:";
				$lang_string['long_date'] = "Fecha Larga";
				$lang_string['short_date'] = "Fecha Corta";
				// Used in multiple places
				$lang_string['zero_day'] = "Cero inicial para el D�a";
				$lang_string['zero_month'] = "Cero inicial para el Mes";
				$lang_string['zero_hour'] = "Cero inicial para la Hora";
				$lang_string['separator'] = "Separador:";
				$lang_string['preview'] = "Previsualizaci�n:";
				$lang_string['server_offset'] = "Offset del Servidor:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />El servidor report�:<br />";
				break;
			case 'themes':
				$lang_string['title'] = "Temas";
				$lang_string['instructions'] = "Use la lista de opciones para seleccionar un tema distinto.";
				// Themes
				$lang_string['choose_theme'] = "Temas:";
				// Buttons
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>La informaci�n no pudo ser guardada. Se encontr� un problema mientras se almacenaba su informaci�n.<br /><br />El servidor report�:<br />";
				break;
			case 'upload_img':
				$lang_string['title'] = "Subir imagen";
				$lang_string['instructions'] = "Haga clic debajo para subir una imagen.";
				$lang_string['select_file'] = "Seleccionar archivo:";
				$lang_string['upload_btn'] = "Subir";
				// Error Response
				$lang_string['error'] = "<h2>�Ups!</h2>Fue imposible subir la imagen. Aqu� hay mas informaci�n:<br /><br />El servidor report�:<br />";
				break;
			case 'search':
				$lang_string['title'] = "Resultados de la b�squeda";
				$lang_string['instructions'] = "Resultados de la b�squeda para la cadena <b>'%string'</b>:";
				$lang_string['not_found'] = "No se encontraron resultados";
				break;
			case 'contact': // <-- New 0.3.8
				$lang_string['title'] = "Contacta Conmigo";
				$lang_string['instructions'] = "Rellena el formulario:";
				$lang_string['form_error'] = "Por favor, completa los campos Asunto y Comentario.";
				$lang_string['name'] = "Su Nombre:";
				$lang_string['email'] = "Su Email:";
				$lang_string['subject'] = "Asunto:";
				$lang_string['comment'] = "Comentario:";
				$lang_string['submit_btn'] = "&nbsp;Enviar&nbsp;";
				$lang_string['success'] = "<h2>�Listo!</h2>Su mensaje ha sido enviado.<p />";
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