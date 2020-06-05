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
define( 'DB_NAME', 'macpo_db' );

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
define( 'AUTH_KEY',         'eEB2p Q+?nd~8[DluL2uP8.lk<bV?w~v]]J =%lNUu=h#aQ8j$,^/ j)V%X06GeT' );
define( 'SECURE_AUTH_KEY',  'BwlCq|>}9``~^YGHT0UXR.rNl4JR!Agx?%Ec!/`w4(=.>u`W$9k^:qqMJZDWPZ2A' );
define( 'LOGGED_IN_KEY',    '`LqxD(:Ep0QOZ)3dQ{)G6ZC;~RPhP<7r&2i`-E7_?8[*oIDqepLN~i:0|4T^XWDH' );
define( 'NONCE_KEY',        'tnOz@S~/ZzMHuTpv_HFO2%]Ki$3z#$u cFlM/HLrnYL %yrG||Rox)B9x^v)LX~7' );
define( 'AUTH_SALT',        'kNw+/d PpCI@)1YpC)yhFo*=p6{])7hABeXt<Q#$4{^(A)%lNrTp*M|9JHgI!XXv' );
define( 'SECURE_AUTH_SALT', 'D/pK~.>zB](1Znu6a4zZaGMgK}7+s/LtR1B^Dq_mD8dve{43m8q|yh]V[6va=qwP' );
define( 'LOGGED_IN_SALT',   'xf}l! 0=:p#W9Ykxjly87H#jKJ&Q/5(]qbIs]H2#iCTwYXPG:?8(UFp($ZoLuwT8' );
define( 'NONCE_SALT',       'S>XG@E!{w#81|xgF^7{tLFKo5&vS(.Jm nL=C$7GuciX@St<ZYI4yKG%^1KW+%e~' );

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
