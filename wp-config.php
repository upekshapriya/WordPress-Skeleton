<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
	define( 'DOMAIN_CURRENT_SITE', '%%DOMAIN%%' );
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '2a/y%{JkmMROzEXJ{?P`f7q&W$3[|#v<T3j-W0sNx#`P>-4<&U{[FF`RhCH|`8(|');
define('SECURE_AUTH_KEY',  '|HJ2_}rSs(LF!*GMNP:.M$:sRd)oe<VCc`JTY-e|@@{g5[f`bD<cnW#zz||$V*MX');
define('LOGGED_IN_KEY',    'tyK;V;X{O#HF|&_4(b-TRi!?}$xuGFFUNB.BiE+VsylXj}UD3Je!}+yzEox<~d_J');
define('NONCE_KEY',        'i<z5c|ND)Rr-}h;v)H6<; )HgL+<&LYUf_T[LGh|~BAJ,Yh{Ha-e#F|.CYN*dsL%');
define('AUTH_SALT',        'B5&;I%)Q2qB7Ey+zBv&j+u;)Ut*+~g<0i^1G}1fA62vNehAms~6#nm0%{Yj+|cr=');
define('SECURE_AUTH_SALT', 'D#%*y=ly//AEu)eZ!fBnogM3qW@UX!J+a|Q[S=(E#%RcI4{Lu1&c(F^TP(`jA@pw');
define('LOGGED_IN_SALT',   '6JB+Uvgm<73^5a.wx&JZ|(t*wSc|gujr*%ZE-`d)y@S@i2f$kI|lUDidD;D^n1OQ');
define('NONCE_SALT',       '<1<vAg|]r@lhqX@%l;;AQ%RcB-+UpkG-.iyBljYG4PdP^hfrRAAz+ABrEys^#|G|');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
define( 'SUNRISE', 'on' );

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
