<?php
            $lang = array(
            'allow_comments' => array(
            'between' => 'İzin verilen yorumlar kısmında geçerli bir değer görünmüyor?',
            'required' => 'İzin verilen yorumlar kısmı boş bırakılamaz.',
            ),

            'allow_feed' => array(
            'between' => 'Besleme alanında geçerli bir değer görünmüyor?',
            'required' => 'Besleme alanı boş bırakılamaz.',
            ),

            'allow_reports' => array(
            'between' => 'İzin verilen raporlar kısmında geçerli bir değer görünmüyor?',
            'required' => 'İzin verilen raporlar kısmı boş bırakılamaz.',
            ),

            'allow_stat_sharing' => array(
            'between' => 'İstatistik paylaşım kısmında geçerli bir değer görünmüyor?',
            'required' => 'İstatistik paylaşım kısmı boş bırakılamaz.',
            ),

            'api' => array(
            'default_record_limit' => 'API isteği doğrultusunda varsayılan kayıtların sayısı',
            'maximum_record_limit' => 'API isteği doğrultusunda kayıtların maksimum sayısı',
            'maximum_requests_per_ip_address' => 'IP adresi başına API isteği doğrultusunda kayıtların maksimum sayısı',
            ),

            'api_akismet' => array(
            'alpha_numeric' => 'Akismet kısmında geçerli bir değer görünmüyor?',
            'length' => 'Akismet kısmında geçerli bir değer görünmüyor?',
            ),

            'cache_pages' => array(
            'between' => 'Önbellek sayfası boş bırakılamaz.',
            'required' => 'Önbellek sayfasında geçerli bir değer görünmüyor?',
            ),

            'cache_pages_lifetime' => array(
            'in_array' => 'Önbellek ömrü kısmında geçerli bir değer görünmüyor?',
            'required' => 'Önbellek ömrü kısmı boş bırakılamaz.',
            ),

            'cleanurl' => array(
            'clean_url_disabled' => 'Görünüşe göre sunucu kısa bağlantıyla görülebilecek şekilde ayarlanmamış. Kısa bağlantıları aktif etmeden önce sunucunuzu ayarlamanız gerekiyor. Daha fazla bilgi ve kısa bağlantıları aktif etmek için <a href="http://forums.ushahidi.com/topic/server-configuration-for-apache-mod-rewrite" target="_blank">tıkla (İngilizce)</a>',
            'clean_url_enabled' => 'Bu ayar Ushahidinin kısa bağlantıyla erişilmesine izin verir. (Bağlantıda "index.php" olmadan.)',
            'enable_clean_url' => 'Kısa Bağlantıları Aktif Et',
            'title' => 'Kısa Bağlantı',
            ),

            'clickatell_api' => array(
            'length' => 'Clickatell API Numara kısmı 20 karakterden uzun olmamalıdır.',
            'required' => 'The Clickatell API Numara kısmı boş bırakılamaz.',
            ),

            'clickatell_password' => array(
            'length' => 'Clickatell Şifre kısmı en az 5, en fazla 50 karakter uzunluğunda olmalıdır.',
            'required' => 'Clickatell Şifre kısmı boş bırakılamaz.',
            ),

            'clickatell_username' => array(
            'length' => 'Clickatell Kullanıcı Adı kısmı 50 karakterden uzun olmamalıdır.',
            'required' => 'Clickatell Kullanıcı Adı kısmı boş bırakılamaz.',
            ),

            'configure_map' => 'Haritayı Ayarla',
            'default_location' => 'Varsayılan Konum',
            'default_map_all' => array(
            'alpha_numeric' => 'Renk besleme kısmında geçerli bir değer görünmüyor?',
            'length' => 'Renk besleme kısmı en fazla 6 karakter uzunluğunda olmalıdır.',
            'required' => 'Renk besleme kısmı boş bırakılamaz.',
            ),

            'default_map_view' => 'Varsayılan Harita Görünümü',
            'default_zoom_level' => 'Varsayılan Yakınlaştırma Seviyesi',
            'download_city_list' => 'Geonamesten Şehirleri Al',
            'email_host' => array(
            'length' => 'E-posta sunucusu port kısmı çok uzun',
            'numeric' => 'E-posta sunucusu port kısmı sadece rakamlardan oluşmalıdır.',
            ),

            'email_password' => array(
            'length' => 'E-posta Sunucu Şifresi en az 5, en fazla 60 karakter uzunluğunda olmalıdır.',
            'required' => 'E-posta Sunucu Şifresi boş bırakılamaz.',
            ),

            'email_port' => array(
            'length' => 'E-posta sunucusunun port kısmı çok uzun',
            'numeric' => 'E-posta sunucusunun port kısmı sadece rakamlardan oluşmalıdır.',
            ),

            'email_servertype' => array(
            'length' => 'E-posta sunucusunun port kısmı çok uzun',
            'required' => 'E-posta Sunucu Tipi kısmı boş bırakılamaz.',
            ),

            'email_username' => array(
            'length' => 'E-posta Sunucu Kullanıcı Adı 50 karakterden daha uzun olamaz.',
            'required' => 'E-posta Sunucu Kullanıcı Adı kısmı boş bırakılamaz.',
            ),

            'facebook' => array(
            'title' => 'Facebook Kurulum Ayarları',
            'description' => 'Aşağıdaki bilgileri almak için (link here) adlı adresten yeni bir facebook uygulaması yaratmanız gerekir',
            'app_id' => 'Facebook Uygulama Kimliği',
            'app_secret' => 'Facebook Uygulama Gizliliği'
            ),

            'google_analytics' => array(
            'length' => 'Google Analytics kısmı geçerli bir bölge kimliği içermesi gerekir. (UA-XXXXX-XX şeklinde) ',
            ),

            'https' => array(
            'enable_https' => 'HTTPSyi Aktif Et',
            'https_disabled' => 'Bu ayar Ushahidiye güvenli olmayan bir şekilde erişilmesini sağlar; bağlantının başında "https://" <strong>olmadan</strong>.',
            'https_enabled' => 'Bu ayar Ushahidiye güvenli bir şekilde erişilmesini sağlar; bağlantının başında <strong>https</strong> olur.',
            'title' => 'HTTPS'
            ),

            'items_per_page' => array(
            'between' => 'Sayfa başına haber sayısı (Görülebilir) kısmında geçerli bir değer görünmüyor?',
            'required' => 'Sayfa başına haber sayısı (Görülebilir) kısmı boş bırakılamaz.',
            ),

            'items_per_page_admin' => array(
            'between' => 'Sayfa başına haber sayısı (Admin) kısmında geçerli bir değer görünmüyor?',
            'required' => 'Sayfa başına haber sayısı (Admin) kısmı boş bırakılamaz.',
            ),

            'map' => array(
            'default_location' => 'Harita sağlayıcı seçmek ve düzenlemek kolay bir iştir. Sağlayıcıyı seçin, sağlayıcının kendi sitesinden API anahtarını alın ve API anahtarını girin',
            'zoom' => 'Yakınlaştırma Seviyesi',
            ),

            'map_provider' => array(
            'choose' => 'Harita Sağlayıcı seç',
            'enter_api' => 'Yeni API Anahtarını Girin',
            'get_api' => 'Get an API Key',
            'info' => 'Setting up your map provider is a straight- forward process. Select a provider, obtain an API key from the provider\'s site, and enter the API key',
            'name' => 'Map provider',
            ),

            'map_settings' => 'Map Settings',
            'multiple_countries' => 'Does this Ushahidi Deployment Span Multiple Countries',
            'select_default_location' => 'Please select a default country',
            'set_location' => 'Click and drag the map to set your exact location',
            'site' => array(
            'allow_clustering' => 'Cluster Reports on Map',
            'allow_comments' => 'Allow Users to Submit Comments to Reports',
            'allow_feed' => 'Include RSS News Feed on Website',
            'allow_reports' => 'Allow Users To Submit Reports',
            'api_akismet' => 'Akismet Key',
            'blocks_per_row' => 'Blocks Per Row',
            'cache_pages' => 'Cache Pages',
            'cache_pages_lifetime' => 'Cache Pages Lifetime',
            'checkins' => 'Checkins',
            'copyright_statement' => 'Site Copyright Statement',
            'default_category_colors' => 'Default Color For All Categories',
            'display_contact_page' => 'Display Contact Page',
            'display_howtohelp_page' => 'Display "How to Help" Page',
            'email_alerts' => 'Alerts Email Address',
            'email_notice' => '<span>In order to receive reports by email, please configure your email account settings.</span>',
            'email_site' => 'Site Email Address',
            'google_analytics' => 'Google Analytics',
            'google_analytics_example' => 'Web Property ID - Formato: UA-XXXXX-XX',
            'items_per_page' => 'Items Per Page - Front End',
            'items_per_page_admin' => 'Items Per Page - Admin',
            'kismet_notice' => 'Prevent comment spam using <a href="http://akismet.com/" target="_blank">Akismet</a> from Automattic. <BR />You can get a free API key by registering for a <a href="http://en.wordpress.com/api-keys/" target="_blank">WordPress.com user account</a>',
            'laconica_configuration' => 'Laconica Credentials',
            'laconica_site' => 'Laconica Site ',
            'language' => 'Site Language',
            'message' => 'Site Message',
            'name' => 'Site Name',
            'private_deployment' => 'Private Deployment',
            'share_site_stats' => 'Enable Statistics (Stored on Ushahidi\'s server)',
            'tagline' => 'Site Tagline',
            'timezone' => 'Timezone',
            'title' => 'Site Settings',
            'twitter_configuration' => 'Twitter Search Terms',
            'twitter_hashtags' => 'Hashtags - Separate with commas ',
            ),

            'site_email' => array(
            'email' => 'The site email field does not appear to contain a valid email address?',
            'length' => 'The site email field must be at least 4 and no more 100 characters long.',
            ),

            'site_name' => array(
            'length' => 'The site name field must be at least 3 and no more 50 characters long.',
            'required' => 'The site name field is required.',
            ),

            'site_tagline' => array(
            'length' => 'The tagline field must be at least 3 and no more 100 characters long.',
            'required' => 'The tagline field is required.',
            ),

            'sms' => array(
            'clickatell_api' => 'Your Clickatell API Number',
            'clickatell_check_balance' => 'Check Your Clickatell Credit Balance',
            'clickatell_load_balance' => 'Load Credit Balance',
            'clickatell_password' => 'Your Clickatell Password',
            'clickatell_text_1' => 'Sign up for Clickatells service by <a href="https://www.clickatell.com/central/user/client/step1.php?prod_id=2" target="_blank">clicking here</a>',
            'clickatell_text_2' => 'Enter your Clickatell access information below',
            'clickatell_username' => 'Your Clickatell User Name',
            'flsms_description' => 'FrontlineSMS is free open source software that turns a laptop and a mobile phone into a central communications hub. Once installed, the program enables users to send and receive text messages with large groups of people through mobile phones. Click on the grey box to request a download from FrontlineSMS.com',
            'flsms_download' => 'Download Frontline SMS and install it on your computer',
            'flsms_instructions' => 'Messages received into a FrontlineSMS hub can be synched with Ushahidi. Detailed instructions on how to sync can be found <strong><a href="http://wiki.ushahididev.com/doku.php?id=how_to_use_ushahidi_alpha#how_to_setup_frontlinesms_to_sync_with_ushahidi" target="_blank">here</a></strong>. You will require the key and link below to set up the sync with FrontlineSMS',
            'flsms_key' => 'Your Ushahidi Sync Key',
            'flsms_link' => 'FrontlineSMS HTTP Post LINK',
            'flsms_synchronize' => 'Sync with Ushahidi',
            'flsms_text_1' => 'Enter phone number(s) connected to Frontline SMS in the field(s) below',
            'flsms_text_2' => 'Enter the number without any + or dashes below',
            'option_1' => 'Option 1: Use Frontline SMS',
            'option_2' => 'Option 2: Use a Global SMS Gateway',
            'title' => 'SMS Setup Options',
            ),

            'sms_no1' => array(
            'length' => 'The phone 1 field does not appear to contain a valid value?',
            'numeric' => 'The phone 1 field should contain numbers only.',
            ),

            'sms_no2' => array(
            'length' => 'The phone 2 field is too long',
            'numeric' => 'The phone 2 field should contain numbers only.',
            ),

            'sms_no3' => array(
            'length' => 'The phone 3 field is too long',
            'numeric' => 'The phone 3 field should contain numbers only.',
            ));
?>


