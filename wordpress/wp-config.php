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
define('DB_NAME', 'C353460_new');

/** MySQL database username */
define('DB_USER', 'C353460_new');

/** MySQL database password */
define('DB_PASSWORD', 'ArjunKadam89');

/** MySQL hostname */
define('DB_HOST', 'mysql1409.ixwebhosting.com');

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
define('AUTH_KEY',         '.~XFCenHN:Fy(P+E_Ae|SX.vBZXUN)Xxl}%XxWD+6|j,Loc:~rzhj//4]>aPYgnG');
define('SECURE_AUTH_KEY',  '!wgf.g(]0BqhjXEL|9390zSnJX@U`g`&+D*K*L8r-Sw=uy;>r5eyidb{nZN5cz#~');
define('LOGGED_IN_KEY',    '9*%5H*kA+{f}4N=HO,b=?ov@#1Evwg. 8e|w3NvJwvlqS-1A,|]#]LX`tLbX==Zz');
define('NONCE_KEY',        'iE<M-|rj5JHU,/3sE;c7o^:juz:;nX|->TEMb+}7&mLbw+TDO^][zz>2Z];#~3$_');
define('AUTH_SALT',        'aF}*@+cXU>U@7B|KJ|e&zzC|cg-|<!i=3`i0s?WpT`^U2|/m|@PN/WI]`K&;==kP');
define('SECURE_AUTH_SALT', '+pZ&q?eijb^lf.3D@jLn3 %T~6UStf>|y~+8L&Fl?u;+rdibcxa`KCU15$+<-&y<');
define('LOGGED_IN_SALT',   '&#|(0:S;2$Xs.}NP9yW541t;63 rn^SyAsp-)B1G;$.TR&c-ek:Szi!Hl|;obHV8');
define('NONCE_SALT',       '>+2urQO}3|O,&[~Z?9KI*sFvsx}9?d/VwoZef*PD|g1WoKZqO!cG!2g%:*3`(%;X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_worldnetpr_com';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
