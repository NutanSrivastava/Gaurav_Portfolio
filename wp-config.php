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
define( 'DB_NAME', 'portfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ukYjGki3n=?^@o^UKPLW{%b1RoG`2c_lL%~zzktQBcw$VYOyROG;:0tS1.`?&m/4' );
define( 'SECURE_AUTH_KEY',  '=O)DErte!s_-ETW>.evza+SA,-Kzce-vb3[ivf}:K9=c#6 :2X}D52;KLS`j8H$)' );
define( 'LOGGED_IN_KEY',    '|o}:|mJ||P0y8l]DpC3m/KO3pS$)neO`$ZwUg)2~nb-*,`o&hl3}OAlhej~@XYV{' );
define( 'NONCE_KEY',        '/D]PDFp:G4H>=eVkDHmKiuE5k/Uw.hMu5GL !gmo]T;~IC&q|-^klAT~mOe}javp' );
define( 'AUTH_SALT',        'e3~Y[lB@a|tc:izrShfHucYa`0KL{*|+`DB[H^3nzwpeZt&(4gs7YSH.8gE0GqEj' );
define( 'SECURE_AUTH_SALT', 'YH1rv 1ZKKGl#4}&(b5OQS$}X/~H}AR.~PI3yhAx]Xr#cxEL]+(n{H1t-mi9:*(k' );
define( 'LOGGED_IN_SALT',   '9{D}kL,-Rxvh5upQ8gXzg>h87{gKX3stu]xdP*7%uae^uw*u7(8^^i;-,|`Z>F_Q' );
define( 'NONCE_SALT',       'Pv0<54RG35.~6I.D^eF3T<rceLeMm2cI6w]lj]p2c[G>U~=G:P.Z=fx=&QqDQ37%' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
