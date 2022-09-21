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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfoliodb' );

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
define( 'AUTH_KEY',         ';-*]Dc@N>qIx_UD-?m_K$3j&?^4jvv}X@r0yTV%GLbKyiU!#Al+1]PWW=xCH>gmA' );
define( 'SECURE_AUTH_KEY',  'J!NgOn4|HQ=p@SiY!!K2NLW3Wt&Yn@ akC:@1#KsuOLdXwi*`Pj)_bfRi_t_KEk ' );
define( 'LOGGED_IN_KEY',    'CpR?PA?49F5fd)*%G:uWcP^s?)rJ,:tRyI67)H:Vdi@WqYCzs4sF-(D_1L0,6hw:' );
define( 'NONCE_KEY',        'f siM4jSlXK-L7wd<Q//,<[-[9j0VoV:jMsS/C_M+^MJ/7zIMxdFK,8j#YnXYj>z' );
define( 'AUTH_SALT',        '9cl(A!@eYsMY!1<P,$VnBNL/p| aNr:S|N;;C^v&aIbDNS~{jP=c&5hnO_kpY7gW' );
define( 'SECURE_AUTH_SALT', 'y ;2D=tv2X*Z<m;-=-Qw!r@MbZ>=U2G%lnw4]-;yJPHDB?!e//)xb`kkn>e?_`*b' );
define( 'LOGGED_IN_SALT',   'I4K*8e6!r:fTxP/z%fV,WvCR_vnm<shJBsNg@(ZC.AgJ4O(2_-]!M=ipFigM;Ny[' );
define( 'NONCE_SALT',       'Pk{sezN<00E%MqyGW+$YKOEC4a_-g0+H<Ap[>H*:HD1|0p[rIbpWT@<w=]da5&tJ' );

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
