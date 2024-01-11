<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'careandsmile' );
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
define( 'AUTH_KEY',         '~|$*!6QQGqU?[},gw1IWy98D(:VVpEzZ_c=&2NfhC](<B#)[T},HR!%l:^,h9[sU' );
define( 'SECURE_AUTH_KEY',  'zE-QV }AZ#B}|Ot$:q/CR.[ccA8PY/91e=$On7$>h7@,&iG.`^:oeWu>obv=fi,5' );
define( 'LOGGED_IN_KEY',    '=g%RMGQr:{t/?L0^Ph[tVs<u}ru%9S#vCDH?bPVM )(p<yc|R~F5Zk5jN><:L On' );
define( 'NONCE_KEY',        'ixk0*o%{KYTMR@#`wOtCkMIwE5IwR6Lqy`BZ6fTsn.9 qi#i^Il=,^^/Q#(e5[P8' );
define( 'AUTH_SALT',        '[5;9S}+rjcW`WsM&p@H0iV%iOL:hH^A^oIMgi=gLj*lfeI3YP-S=p9xW4[LAH%V<' );
define( 'SECURE_AUTH_SALT', 'FrYF,`wxMxYELnh:?4=y%4idjUWFpr0m|}}e8,:wJl6SjI`uu54NNh( r*w|73-{' );
define( 'LOGGED_IN_SALT',   '}Hgn7UQMK,y),Hss,7PjoQE?m0U.Tqh-j99[@FA#1}4M:>RqpTA]XR$^VH=Pu8tg' );
define( 'NONCE_SALT',       'N cC*cdPN:H0XO0F>^g.;(=3q }Vxs:qq 7l#dHP{G ]09!=- >_M0 |5_l/x6uU' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_careands';
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