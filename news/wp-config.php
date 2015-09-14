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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '`%_C|R43-y1fu`D@liDH`L|d/Hg~{`!_7?-54[{z#F;q+p++WarBN_q [mg[|U4F');
define('SECURE_AUTH_KEY',  '+@~u%s$x^tVj~|i+k6oMEiQh3uyrKP5}&w~I-q;gmPN]5lM5R9B:B+J+]en$kJbJ');
define('LOGGED_IN_KEY',    'U)X_%AEMQr`t}f-Q{,i0> +|WqbFO-&}O1Mw:/m$paWaCeE=;5^Z&6[9v<ZBQZOu');
define('NONCE_KEY',        'e-`o*Mz-W<`[=dg|>B^&nxagg-}KUob$W-`XWc9:E}gf5?E2RM?8t|1w+w&(i.Q4');
define('AUTH_SALT',        'q-s!+)>YJe7;PuFTe|xVFlA_dB 9<Om[5^@l*-3*q>U?ESi$3QT-+77V}pK*Zi M');
define('SECURE_AUTH_SALT', 'Ra_q%)gI./wy;E<7O.K+ikSIlemqtn=|N%x{c^myZy{{^dsIz5jFDD^|9o7?=afX');
define('LOGGED_IN_SALT',   ']5CFX_S+<#bt0O0|&[yYiRC03|cDGt-VTwdV#lSI=g?r9p:4#4|m|33v~E4/Cgp%');
define('NONCE_SALT',       'gU+`v~fXO7|akSP<lVI#=72n[(dX|-.O7|r*</|1w42#%I-5THdd-pb&s&}Hd[g<');

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
