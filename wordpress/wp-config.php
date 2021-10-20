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
define( 'DB_NAME', 'db_wordp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '1gHDE99 `<amuz6A{DF)k4C/ei@q*7EqwK-NexV&k6}jpo:mUAJFBp<K/_Ki6Azd' );
define( 'SECURE_AUTH_KEY',  'HZOb[xRK-V$_JypG<(+pz#}Qgc}B{>~p$@U%`NA#A+WUZ#0|QDPD8[[n7@pMTj{e' );
define( 'LOGGED_IN_KEY',    '(ug_Jeuw2{F* `4BLhgXK)EQt` cvnC>wMp,yBL*SN?A9sE]inwliBYxQY}LxKP?' );
define( 'NONCE_KEY',        'w re``UOu:=.1HY|<6;`7Tg}vAu%Spn9<n5Xqum*<8dxjh5%eG% 9^ko:OLCqzbI' );
define( 'AUTH_SALT',        'vB?15v@O{|ep6dk1CCw?T,.-u<GKEhNB5 74bXo#(&f#:CJlN9^#tW))BfGWS;E ' );
define( 'SECURE_AUTH_SALT', '>v_y&RQ!dJ$XT{7fd2.q ra#a3:59mK6,Z_0JRNKv)^==[^g:$|xCSy.9lu>hg8F' );
define( 'LOGGED_IN_SALT',   'Y-Sfgn?/WP1|PF;<X0XqfX@>)@]eJ[?/H,#aM6)dD5?7!}`Mv70,~#VkiHLE&(G*' );
define( 'NONCE_SALT',       'az_;8DReJa}!$,|hQYlBSb3pU}+Ee_dk:/k&cY O+)fvf2{7G!Kp.[iUsX3cBpSy' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
