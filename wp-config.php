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
define( 'DB_NAME', 'dbwordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '3&TdM5dL7E}Z5Vw-H!Hfb0Y 5H3RB|]|]ab9>U/aN(H-KRH|o1dgHH=9Bc{RpYh#' );
define( 'SECURE_AUTH_KEY',  'ILrjRvmZHBU1m>:5zqvh#?M@5{t7=[.2c@1KF-1)n!p4keFYZSsa-4J,JcJLYj{a' );
define( 'LOGGED_IN_KEY',    '$#Fpe~2bBe_?Mn r_S03C6Eo8UqE48B&8CgGWdCj{;<@}MEt%uonuH/IgY[W3XoI' );
define( 'NONCE_KEY',        '$jBIG1g<#7Gpy$Znq[{F,[O17d_%I2xurE&Ni[ZUofkvS$at{esG7w2.&uz!d*h{' );
define( 'AUTH_SALT',        '&3eKV6?? -)4<.JzSSNQv|~6JH}^x*ljf!u6>12~3e{Pw <>|bjWn??%M9p79h46' );
define( 'SECURE_AUTH_SALT', ' (|zIc{SGHpV=n`UoNrb;0(_DG*|_~/LdybN%e+vuyct4BAfGG,y_t[@o3pMs:3e' );
define( 'LOGGED_IN_SALT',   'Fo_W^;L|t,oWX_Jq2Mdt[wad?dzadpgzq<+-t}*]Okrf(f)J ]:p+-2&ZDcVbhNu' );
define( 'NONCE_SALT',       'sV&.vmj+z,)~#Y !`f3GH!^TiWH>Rx!eG2h$_N:| !{H jK%~}.d@zVz^_}W`W*d' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
