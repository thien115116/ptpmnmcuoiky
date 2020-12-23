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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'thien' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HizhUug-3U+UbnuP[vG]Kn@4Z+<_(KxKD]dVd1W|3mTc5=#~VYCyDn=xVtFs{~Q1' );
define( 'SECURE_AUTH_KEY',  'XJts^5X~7 snLz`PS<*3aS<|$}1#Pj=R` fP_{p@hHSi$07PT mB?GtN[LR5 CG.' );
define( 'LOGGED_IN_KEY',    'pTaUgxT{~{O7S(_?tO=A?fVVP4cI38U4Eel4Q=:unE{`r*{z9?bwL<T`L{aTNr/D' );
define( 'NONCE_KEY',        'EIe!<v{][L1}1.<FPWCGV9L.BYFu|B+{k7sq_[B.q]A>cGoU>WzG^ln5g&NZ]?GG' );
define( 'AUTH_SALT',        'k/>`M6y~CZUhop{Lh)`K1]-91ey~N;e-W%>hZ9kxsAc|wqI1I::I/v>FJg5YvAEM' );
define( 'SECURE_AUTH_SALT', 'qsOuj/f4+2{^TV>A-r6coZ,LUV@9&QQ-3DISSdVfU8#^D%j!Tn$wD^+vr8j[CdN|' );
define( 'LOGGED_IN_SALT',   'S?!(A1(>GEg({u_~8Ow~_|X -R9VmGoQ@>}9WF:5glehpKnh(wgGslKj|wrmm?20' );
define( 'NONCE_SALT',       '=e*R_ScmwU>483TlZ]x*^=!VJZ#>s>&}X#K!(%W(NeR8i%>o?jJdxCu{V@CvYWF%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('FS_METHOD','direct'); 
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

