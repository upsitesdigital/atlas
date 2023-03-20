<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define('WPCF7_AUTOP', false);
// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'atlas' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 't$%Zg1I4)3HSgKPe9[~SCC&VlmRbf$00i)Dzbu%?5LVx;M$L~3 3[B[3IKpzm|m!' );
define( 'SECURE_AUTH_KEY', '&T^.8KWFqs0Wut:AF(((/Rim@PtD:Xia%]-yxClnY%Rv32)TCX;3b0zk_e6!SNk4' );
define( 'LOGGED_IN_KEY', 'geemkv.*F5(Ve^hx[/OdFmDe/7BJ=dx p8>^FBD5M5y^k*J+?hW}l1ofbQwa}5y=' );
define( 'NONCE_KEY', 's!k<MFYNiz%*gHPB6D6e.k:[YuUeqZy$<vIZ#{Zvk]gyY(Xv&ZOimj6!{FCHlyP5' );
define( 'AUTH_SALT', '(POQPFuBp{qekxf8fFekQ!B-,S[V6WZnBZ9^8(X[%w`@kERpY9^TE{6Telq-L;i*' );
define( 'SECURE_AUTH_SALT', 'FQ>828[~M5(Dwmi8(GU>`PUnd1A}9iH((nIQfA -tBd/[&M#167>JqOVW5z?|2?E' );
define( 'LOGGED_IN_SALT', 'St`*lL.)?7:U06_;!%`DAn%BH}3}[x??r(3gyPfOg_g]}Ox9#jZOjD(ynI(A-TK>' );
define( 'NONCE_SALT', 'nY73 zHb-WQ$&R AMFq+d8cVK]HgDMbUm=CqbT,jN-~(I#Zw8Qa4A. PA$1DX5r`' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once( ABSPATH . 'wp-settings.php' );
