<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the web site, you can copy this file to "wp-config.php"

 * and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * Database settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/documentation/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'educaSpaceWordpress' );


/** Database username */

define( 'DB_USER', 'usr_educaspace_wp' );


/** Database password */

define( 'DB_PASSWORD', 'PassW0rdWPEduc4142@#' );


/** Database hostname */

define( 'DB_HOST', 'educaspace.csiht9lc2uml.us-east-1.rds.amazonaws.com:3306' );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


/** The database collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication unique keys and salts.

 *

 * Change these to different unique phrases! You can generate these using

 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.

 *

 * You can change these at any point in time to invalidate all existing cookies.

 * This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         '2{S8(LDf7/3P7w4l:~dgEuL~[#5gHT&iXqiLT2f=t_/~K#0VjoH0{0OP?L`0Dv`8' );

define( 'SECURE_AUTH_KEY',  'p]r4Zr06ang^qZ3Yu[pGDq9arzgG6mR%Yo2A#x qXKTT<fe:S/Zu$#a~D4ww5>=O' );

define( 'LOGGED_IN_KEY',    '!!QQtcfD3E5DmSTYu@%MRt}d0mX?y6HPH$>1qZ,+ .Nc]DJ~Z5rVe/pczWlcQ?%8' );

define( 'NONCE_KEY',        'AZi_Ios@iD0lasZ~HY,YJ0Xs$fLk$m;j?@5J#PM!XxkVl61I6il[K)Fbq9PnIxr1' );

define( 'AUTH_SALT',        'R,*#Cl<u}cO,@#,Jhdjf|?KW7e#N1}4 F//9:I,#n_jiY,2n;uTm.a@fF+TGXn`p' );

define( 'SECURE_AUTH_SALT', '{tRj9ePNEy$8H%OG5O;]E=PvK$Ubi9dppm!^,qYMW8BB[Rf+zW{6:+:jb,emm8nc' );

define( 'LOGGED_IN_SALT',   'L!*r)D#dR.9@Ei(WQDzx<QTscqiJ@.IRfK0>o1-5eP(uuGrdCj|e%K]Gn65.?4Ml' );

define( 'NONCE_SALT',       '1AVY ~m61> Je>S`d.2fL$MuJ=13?p$dc>@$KE$Fjc&b1]e&a$22Mk#D^u3.tp)&' );


/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';


/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */


//define('DISABLE_WP_CRON', true);
define('FORCE_SSL_ADMIN', true);
// in some setups HTTP_X_FORWARDED_PROTO might contain
// a comma-separated list e.g. http,https
// so check for https existence
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false ) {
   $_SERVER['HTTPS'] = 'on';
}



define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
