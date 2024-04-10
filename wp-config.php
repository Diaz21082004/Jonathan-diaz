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
define( 'DB_NAME', 'Chivo_Store' );

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
define( 'AUTH_KEY',         '`?<;@E<sK91Svympza7*,6fFvL>;lwWd7A0HHrSI!(o_.w^ALFQlC%1pO? p6zOP' );
define( 'SECURE_AUTH_KEY',  '[(q,5/(|]5[|RUGu}V=q`uo59u~ogfh]KydzlSUI9Sj*e-ghbz~1$(,5z+rmo.bp' );
define( 'LOGGED_IN_KEY',    '{Q0`;K#r8wRCbA<1S6jXz=Ed; GUI%$4(C3-n` w#PwbhM}Q`C2Ng7}w}N1Q|Lnf' );
define( 'NONCE_KEY',        'UyiLxe4#^n.:8dCDip.SFW@.`A,6c6t,4`,:mXQ(p7xaCsDeFu)fIuCgHs?7k2vO' );
define( 'AUTH_SALT',        'LB<5EW8[3!LYkJ37#4!fx*i9zqDhCbqw/K*_[JyhE&952g.j$ie+Dy31]HA9}4Y(' );
define( 'SECURE_AUTH_SALT', 'Ox9PgEq3&W6!{;=C5[8YZ7x&Mj}K;cn/bkt%g;YZ~rq0Af/T@G0-x/>g3<m_a-AN' );
define( 'LOGGED_IN_SALT',   '[&! A1^q=W(+kWMq^jzlgYtvW: 5y:;|Qi+d}gG7?e19L!N8bF+u$sH.Dm@3%nFd' );
define( 'NONCE_SALT',       '*WE9<B9FMq8M/VGiVMA^RTIau=kQM}Gs:qzwS)*f;~[RC)+%`D-dALFkRR=t/-1i' );

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
