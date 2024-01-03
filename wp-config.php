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
define( 'DB_NAME', 'u849707844_saPLP' );

/** Database username */
define( 'DB_USER', 'u849707844_wov5h' );

/** Database password */
define( 'DB_PASSWORD', 'HXVN7erUFa' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'z+JVPKq/nPJDzZeJ{Cv.,J2@ISTm]e`GjbOR8kOO8/!s_vxboesN4 LN{;4H]$Fs' );
define( 'SECURE_AUTH_KEY',   'Q6#UM[4h7iO3]e(YaO<Z0,f&P6tI3wiLf1o)KZ7a+FhS:&g|XV5pO`LrfSY:2MN8' );
define( 'LOGGED_IN_KEY',     '_1I1qa7p]P#!~UJ-_ltOI?5om9{np9Zhm}#NG1YZ#Ka/Tc6Rrh2rCe[2/4Lhy `l' );
define( 'NONCE_KEY',         'f.UI4;5`Wcej*1$IUe]Z#KV~$XRIH_37i3H)#f:6>[TucQ6op*OtG,s]u!]v@eE&' );
define( 'AUTH_SALT',         '2kbSLW ZX#kKbrP*)&,v$9RkU.y!t8][Mlv?A`+Y^ miPWxV}_~E&YVvd4K_>M~`' );
define( 'SECURE_AUTH_SALT',  'Ifaxo5-*L:Sl5qXy(i%LAD)(a:Ii5Kekl%iIDP,H0)=JOzwh++jV:w4vL5T|Fvqq' );
define( 'LOGGED_IN_SALT',    'c7j75*jm,:eHJ+t[5$=[nSJKu;rBdJ|D?>VY^)zley@{sRfVlGe?)>w)QS8w:a@F' );
define( 'NONCE_SALT',        'MxwxJOg.`o*u<:}J/hI}OyiM8~)X{>&%R(7[`,N_2 sS~,f}P1Qn)Z@Los4Jj =m' );
define( 'WP_CACHE_KEY_SALT', '7oxZMg(LVWrEoH$<Pr)rKN]|NZ``x;<lHn$H]GHdt)woE1QH`a~8eJBI<lbi<$O,' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
