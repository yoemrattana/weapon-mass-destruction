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
define('DB_NAME', 'un');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Sa`v-54-,yFn?h@^ HLA!cRS-[g2U58Htk%tp:V9m.FLpu>?oOpW!bnMffRP*6uK');
define('SECURE_AUTH_KEY',  'C OLeU:78 `])F]2nHd/TU+mDTJuS]2curr:TTebnJPq-cWe9IX`R`,l2/=~n}: ');
define('LOGGED_IN_KEY',    'B;Ika1+ ~Pv;.87oYv^zPq2_2*{~T8Amr*=VD&SpGsOoSjBS9?N-_0-|599!P5Q$');
define('NONCE_KEY',        'Bq!,[EQ`40@|n@WW@s_AZ`Dc3.ub>7jj0yf8%=l(A1r1+}{zF@,=~9Zf$<>^4#>@');
define('AUTH_SALT',        '[xexk?,O~VrFGt+p|>dMl2FXtyxd>%dFaWBugb/-;y;TlM8YF+ >o/aW+1V9j|4*');
define('SECURE_AUTH_SALT', ':}R5d^T}|*0q+XTW~ldO0$I-;yPfl+=J8|Y`=G?)Ppd@<oV}O]Yz~8?_B_,eZ-C.');
define('LOGGED_IN_SALT',   'f9TBbHHQdD*sZK6UR??rgRcX^=Qo+uwzNgSKeZ@$8u-`Ph_`IDl?]G8WEiP+A]LU');
define('NONCE_SALT',       ':qwEvfBzEl`a.j+p@(}YDXa,6Az:AI4ZgwZ[u bbjX/DXGSbF-{!{i_9EF B.Uj*');

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

define( 'WP_DEBUG', true );