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
define( 'DB_NAME', 'hypertest' );

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
define( 'AUTH_KEY',         '@:6R8>gNv.lv>N#<@!J6t]/,7W.5OXd%jJr}>KW 4KFMw_Fw:`Uzak:<%k;]q/}5' );
define( 'SECURE_AUTH_KEY',  ';F9CYJ]T7WwVB>KnRqES*+TYzhF|g|(#%K$%,x8]c1[}f-O;?f1+sB=yZKQwK5;t' );
define( 'LOGGED_IN_KEY',    '&o=l&46TXa}(NgmgTn8Uk.>AMzFL-2>u0KVQmd[WgO!>;sb!wiujrpvX)-2~ZDHE' );
define( 'NONCE_KEY',        '8Ks[9~IhaAAe*]`3zk%q=$zS&mTGuQJ1qx*_a?;!zev^ e-tO*$Zs4+Mj4Sw^oyv' );
define( 'AUTH_SALT',        'DdvDyo@dg/XuA4V#a(!<HCF$8zE-l|rOMBy,ts)+;#MjZm4l911^NbFH6{}xEh-i' );
define( 'SECURE_AUTH_SALT', '>*JxAAuZn}29mBV+s$V1lieE0ozA+%rWb3q26q%}dv8T(g~IaP<4h>{D1Qp7!]ED' );
define( 'LOGGED_IN_SALT',   'EWBI:-IdSp4B0/%+_u?FF([]!OBf6n_,m2aTzx,$e+c5#ag%yC-Ylb/*fMP[GJKL' );
define( 'NONCE_SALT',       '5X!f~8+P@nz*-;).U72e~4QFf?VL2u>}kpk_ P2VQ;7Q4pk57%ZqHF;_O;`&{~^2' );

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
