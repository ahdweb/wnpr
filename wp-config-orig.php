<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
//define( 'WPCACHEHOME', '/home/worldnet/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'dboyle_wordpress');

/** MySQL database username */
define('DB_USER', 'dboyle_wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'NhK&CZ8L_7Jv');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EN>Gc<MlsnI$?p6/Bz^UA|60_=Uaq/(j>S<D|SHo^Qnx~/HA=Bhm9hJkD/ls0F=y-y$MlX?t(NTx0');
define('SECURE_AUTH_KEY',  'a#U!x8S3!RGsuX;kI<ONdlf^Z9MD@G^l=5f/Kxhs2aAS(\`SQ7vuEeeVtW0i;a8P0Qa#|');
define('LOGGED_IN_KEY',    'jTkIAtf44I!N*YH==U=/F/hA~$;tqml7eKj!lmwWiviYpaS?eD~Gxx_*Mt__:L_-fk2)=tNg<');
define('NONCE_KEY',        'fdOr=HlR=rmflj$6fz*L6RUaKk:|Fx(5S6!I*Ii/RSCtPXlI$;6-x:4;j\`OK<8CtqJ#ubF/@QcN?Vtj');
define('AUTH_SALT',        'qGR?iNO*^CIG!MH/worW#*^5aeI9mzK/fcR0_tDM3d~k8uElo_WsOd9VGg=4rsk@lw~B');
define('SECURE_AUTH_SALT', 'Hi<l9A^)cyb)E0Xj-;_<?0DzHGhfS3y^w4EkpAX^gPV;UBxEJq*G6);DYG?)q#BGJeoC/>EWXTk');
define('LOGGED_IN_SALT',   'gJ\`69$!J/pViQWgr:mKud1/~L(FM6LTF(PCe#*im~t^)(bPDK;Ypi#@@L>FG7FwPLkiin!4l$x');
define('NONCE_SALT',       '!j\`xTkP|Q3X/)3(k~|(x*pt*Y\`9<?6oz|ubjgd>!ky#nv?8g1neMXOrt9XrM~dY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
//define('WP_SITEURL', 'http://192.185.186.181/~worldnet/');
//define('WP_HOME', 'http://192.185.186.181/~worldnet/');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
