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
define( 'DB_NAME', 'ebakerydb' );

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
define( 'AUTH_KEY',         'o&p#9bdK*haHB[qL#g?Re-&gPTU3OEey/T+!l!3:WO6I1C<VIfG[yrN!#=d)/7xf' );
define( 'SECURE_AUTH_KEY',  '8L2yUY~}/{b[>-AQ_?.JF:0`fc=58#vDp{DqM1k-}KvTU@s#d#f_cCDuijWs~1FL' );
define( 'LOGGED_IN_KEY',    'R~UFzuhh>7KS*O[[^Y|jV=YHito,eMS ~6`#nN5|,Tc/{]AIA;p0:k`?[lM=fYN|' );
define( 'NONCE_KEY',        '>C7#t^Ys|3>e&l$1pOC|;>GcUk+m4.U_nkaZ)_|W=kW {Q~8<_K+ Pe8i}QZ_bDi' );
define( 'AUTH_SALT',        '!09QkGN[FEj8`10D~P=DoXEZY+j(J}X>@OQAMi_6#W;lM<C`GgF{IX5o+CGyl!ht' );
define( 'SECURE_AUTH_SALT', ',][tkN<V]Zl0kI3zJ?y^a6B0T$Y1zlfRf T/(!*xNQ72fN9YHeCi|L*c)f|=(?o?' );
define( 'LOGGED_IN_SALT',   'V:(5e#jUQDUO7~VekM<nq)1GmCsFZvnZJA3O2~oHD{>v8hd4. /$o;%ExW)8A&S(' );
define( 'NONCE_SALT',       '?Kfgl0l$&8I)1gN/Wu:OdtkYdBSauURw=,%d%5ygaTS}Q&vtB O?s|@/>V~p-?|f' );

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
