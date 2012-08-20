<?php
	$lang = array(
	'base_path' => 'Directori Base',
	'database' => 'Base de Dades',
	'database_host' => 'Servidor de Base de Dades',
	'database_host_description' => 'Si esteu fent servir Ushahidi al vostre propi ordinador, aquesta adreça hauria de ser "localhost". Si l`esteu fent servir en un servidor extern, heu d`agafar la informaciõ del proveidor del servei',
	'database_name' => 'Nom de la Base de Dades',
	'database_name_description' => 'El nom de la base de dades que utilitzarà l`Ushahidi',
	'db_information_link' => 'Per a més informaciõ, llegiu <a href="http://wiki.ushahidi.com/doku.php?id=a_brief_word_on_databases" target="_blank">aquest article</a> a la wiki que tracta les bases de dades amb més detall',
	'default_language' => 'Idioma per Defecte (Local)',
	'default_language_description' => 'Cada desenvolupament d`Ushahidi ve amb un conjunt de paquets d`idiomes. També podeu <a href="http://wiki.ushahidi.com/doku.php?id=localisation_l10n_internationlisation_i18n&s[]=language#enabling_new_languages" target="_blank">afegir-ne d`altres</a>',
	'disable' => 'Deshabilitat',
	'enable' => 'Habilitat',
	'error_summary' => 'Resum dels errors trobats',
	'files_location_text' => 'El directori al servidor on s`han posat els fitxers d`Ushasidi. <strong>Aquest valor ha estat detectat automàticament. Si us plau, reviseu que sigui correcte.</strong> Si el camp és buit, no us amoineu. Vol dir que l`Ushasidi està instal.lat al directori arrel',
	'finished' => 'Finalitzat',
	'general' => 'General',
	'google_key' => '<span>Google</span> API Key',
	'google_key_description' => 'Qualsevol pot fer-se amb una API Key. <a id="api-link" href="http://code.google.com/apis/maps/signup.html" target="_blank">Aconseguiu la vostra ara</a>',
	'go_back' => 'Tornar',
	'index' => array(
		'advanced' => 'INSTAL.LACIÓ AVANÇADA',
		'advanced_installation_description' => 'Obteniu tota la informació per a la instal.lació en un procés de 5 pases.  Això inclou servidor, mapa, nom del site i detalls de contacte',
		'basic_installation' => 'INSTAL.LACIÓ BÀSICA',
		'basic_installation_description' => 'Simple i ràpida. Tot el que es necessita és el nom del directori arrel del servidor web i la informaciõ de la base de dades. Trieu aquesta opciõ si voleu fer una instal.lació ràpida. Acabada aquesta instal.lació, es pot complertar la configuració en un altre moment',
		'proceed' => 'Procedir',
		'welcome' => 'Benvingut al procés d`instal.laciõ del servidor d`Ushahidi.  Trieu quin tipus d`instal.lació voldrieu realitzar',
	),
	'installation_successful' => 'Instal.lació Exitosa',
	'mail_server' => 'Servidor de Correu',
	'mail_server_host' => 'Host del Servidor de Correu',
	'mail_server_host_description' => 'Exemples: mail.latevaweb.com, imap.gmail.com, pop.gmail.com',
	'mail_server_password' => 'Password del Servidor de Correu',
	'mail_server_password_description' => 'El password del compte de correu',
	'mail_server_port' => 'Port del Servidor de Correu',
	'mail_server_port_description' => 'Ports comuns: 25, 110, 995 (Gmail POP3 SSL), 993 (Gmail IMAP SSL)',
	'mail_server_type' => 'Tipus de Servidor de Correu',
	'mail_server_type_description' => 'Internet Message Access Protocol (IMAP) o Post Office Protocol (POP). <a href="http://saturn.med.nyu.edu/it/help/email/imap/index.html" target="_blank">Quina és la diferència?</a>',
	'mail_server_username' => 'Usuari del Servidor de Correu',
	'mail_server_username_description' => 'Si utilitzeu el Gmail, el Hotmail, o el Yahoo Mail, feu servir l`adreça complerta com a nom d`usuari',
	'map' => 'Mapa',
	'map_provider' => 'Proveidor de Mapa',
	'map_provider_description' => 'Ushahidi treballa correctament amb qualsevol d-aquests tres proveidors de mapes: Google, Bing or Open Street Map.  Trieu el que tingui major nivell de detall a la vostra àrea',
	'other_steps' => 'Altres pases...',
	'password' => 'Password',
	'password_description' => 'El password de la base de dades',
	'previous' => 'Previ',
	'restart_apache' => 'Si us plau, reinicieu el Servidor Apache',
	'select_mail_server_ssl' => 'Habilitar o Deshabilitar SSL',
	'select_mail_server_ssl_description' => 'Alguns servidors de correu donen lòpció de fer servir <abbr title="Secure Sockets Layer">SSL</abbr> a l`establir una connexió. Es recomana fer servir SSL ja que ofereix un nivell addicional de seguretat',
	'setup_sms' => 'Configurar un Servidor SMS',
	'site_email' => 'Adreça de correu electrònic del sistema',
	'site_email_alerts' => 'Adreça de correu electrònic per alertes',
	'site_email_alerts_description' => 'Adreça de correu electrònic per l`enviament d`alertes als usuaris que ho sol.licitin. Aquesta adreça de correu electrònic no ha de ser la mateixa que l`adreça de correu electrònic del sistema',
	'site_email_description' => 'Tots els missatges del sistema faran servir aquesta adreça de correu electrònic',
	'site_name' => 'Nom del Sistema',
	'site_name_description' => 'El nom del sistema',
	'site_tagline' => 'Subtítol',
	'site_tagline_description' => 'El subtítol del sistema',
	'summary' => array(
		'text_1' => 'Cal que els fitxers i directoris seguents disposin de permisos d`escriptura',
		'text_2' => '<p>Podeu trobar més informaciõ per canviar permisos de fitxers a:</p>
        <ul>
            <li><a href="http://www.washington.edu/computing/unix/permissions.html" target="_blank">Unix/Linux</a></li>
            <li><a href="http://support.microsoft.com/kb/308419" target="_blank">Windows</a></li>
        </ul>',
		'text_3' => 'Abans de comançar, assegureu-vos que els seguents fitxers i directoris tenen permisos d`escriptura. Pot ser necessari canviar els permisos de forma manual',
		'text_4' => 'Pel procés d`instal.laciõ serà necessària la seguent informació',
	),
	'table_prefix' => 'Prefix per les Taules',
	'table_prefix_description' => 'Normalment no es fa servir cap prefix. Tot i això, si voleu executar vàries instal.lacions d`Ushasidi a la mateixa base de dades, es pot fer canviant el prefix de les taules aquí',
	'title' => 'Títol',
	'to_login' => 'Pel login, aneu a',
	'upload_data' => 'Pujar raports',
	'username' => 'Usuari',
	'username_description' => 'L`usuari de la base de dades',
	'use_credentials' => 'i feu servir les credencials seguents',
	'view_site' => 'Veure el vostre website',
	);
?>