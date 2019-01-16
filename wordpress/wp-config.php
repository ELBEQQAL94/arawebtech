<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'fuck0675058801');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'cR:z?)Zl*]oh^OSq_Se%bB9KY~Tnt=QgdGF^g=_>9=0U<eaP=nY8NCk)DPS=]6|Q');
define('SECURE_AUTH_KEY',  '&Wnve0-$|||6mZ(: t~hYxrNcrC0RVb3FJ]6f=G1qK)j.&(eBSk@@/us,2dcSoe3');
define('LOGGED_IN_KEY',    '7+or}F@EkgF/AdR5)}JwJ+Rs{]_}M_Qt7oX_tdObFBdH2/pg7=CgCW{w|MRNQCeZ');
define('NONCE_KEY',        'vm/&b1AW$ZLA01@nC`c3BE;n&JlSWQ&~xi2PZ4f9|t(2CxDfkQ*Df`}Rjg;?Q%1p');
define('AUTH_SALT',        'i1=FDPn8FS_V3c3c22fGe e$8ZSzI/U0~lcQYC$QI`#{*7M(hc2JCRBd=_(0&&6r');
define('SECURE_AUTH_SALT', 'U+XS;VE7GW9+TkvZ+7q-ql$c8xUjO],[P668w-z#vgN x825ojc;tPL0e3Xv0]rI');
define('LOGGED_IN_SALT',   '[h/`%7$CmW7kzJFX|Pp95^#%=3)OC}+`leSlx+N?^MD<_L(;,hNOIWTHb(;(0k&E');
define('NONCE_SALT',       'ca/9wx^0`0AC %CJv=dcmM9`yH|9ec8]4yN$)8qN*2I^JAv9sNV~x:yQ(K,wL @m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
