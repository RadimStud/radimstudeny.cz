<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'radimstudeny_cz5' );

/** Database username */
define( 'DB_USER', 'radimstudeny_cz5' );

/** Database password */
define( 'DB_PASSWORD', 'nnilCQlISOS2' );

/** Database hostname */
define( 'DB_HOST', 'db.dw207.webglobe.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']b-15I?)=`[]0RXrf!?7yS]FP0rW^mL,d+0+R?kI9+2,5iaxsIxr>7n?[p}`h(a.' );
define( 'SECURE_AUTH_KEY',   'K#^1P9R~hF[l8~Cws~2M8I-:>$+!h,CN`{X<:e{{,*<(mn4t.CiJ&SWbAWNaxiGk' );
define( 'LOGGED_IN_KEY',     '^yhQ]E ]-K(]A^Ct4{!?YL@ySJ&u,$|:_;BS(!5V91Ot`pq8@2)8$WEdn&1t(3$z' );
define( 'NONCE_KEY',         'b~@Zvwjb$KqD3!X-sGHSM|lj5:ravOQdakq4jVNshdzieIw %xt2ah|7/m--ZI_c' );
define( 'AUTH_SALT',         '!4/5p+/n`;h&G;avzYzDJed=t[]gCrDRW/!W5[^Cznns{MP=]EKJ!8?!2<yV`pn3' );
define( 'SECURE_AUTH_SALT',  ',%l@F^mB9BZy.2CM,0iH0,T){ZtIYb{w|>,3>(W&Q*=`Ab!9q Gk6[8.J~>TeOZ^' );
define( 'LOGGED_IN_SALT',    'q7<O^`Cj; s!g--1x,IN>d R~Wjf@J_[ee(=N:cR=TS IMaD )%9,s@j*)V;0C {' );
define( 'NONCE_SALT',        '#s-{GagfIuqQ`pM{64:tQ^ 13$g=v@IVu~3,~ _4[u`Ph,21S8ba>$v?qy y@G;3' );
define( 'WP_CACHE_KEY_SALT', 'rp-=I$|FGDjtd3SmOP<<7IxKa^piE>~=9_gw|jbW=#Q`y`u&V51(9|V@<ww%I%FI' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
