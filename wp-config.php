<?php


/** Enable W3 Total Cache Edge Mode */
 //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/homec912/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache
define('WP_MEMORY_LIMIT', '96M');

/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'homec912_homec');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'homec912_admin');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'modeahc18');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'hq*-?N0`!hI.h`09Y6x`CV`O QOP#$|g-MQfQLC0Oi|tm9MlevqJIB`18{D%0A}%');
define('SECURE_AUTH_KEY',  'vtGG+)oC2GO=|+z=,qC2_+~Q3$]n,tvqTh:[kw.)0e.nZtYwZC<B.:V /&)v9@{~');
define('LOGGED_IN_KEY',    'L=4}wvVKI]v?OG5>Ct}.^n{|2$oQo+D[xCwS>(O6jov)4kvn+:Ej|eamz{BcX,j/');
define('NONCE_KEY',        'j~:RpTjrc viHRJ+@T-7S_}FQN~FI%B&z Eq3OMhY-LoQhQ+6p4E{!#OX]QXrNM!');
define('AUTH_SALT',        'Z6ZFkgb$+b0woO]+|0pcf+HAHb|7a[-}wF$(=Y[gF0|.Gd,1@Q$%)jd8Oh<+9^+G');
define('SECURE_AUTH_SALT', '!oI&1/*0F+kowy(g,R-d7n-*h,xd_1x.X#ueFA4L&odfN6VI(_W|J5kr`^!EpT9m');
define('LOGGED_IN_SALT',   'A!NS@^BgJP0KW&dQ{~~p,sc[jCWX2n`#1{mr5$bk-4nB!cGWq@+zpgWl_#ugGiz>');
define('NONCE_SALT',       'QntQ]q6gZZ8WPa=gr*P/Kcd+h8tuv!&ny2R:=&HYZ@Wvk&Im46F`f=X-:jQTqZ9&');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';



/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG','pt_BR');
define('CONCATENATE_SCRIPTS', false );

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
define ( 'AUTOMATIC_UPDATER_DISABLED' , true);
