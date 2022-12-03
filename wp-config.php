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
define( 'DB_NAME', 'project4_wordpress' );

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
define( 'AUTH_KEY',         'J=<@)crN?%kN7Wv>bix**yTQY`].2`vx}/:*SJq/1zw>J>;m7|ajnVx`&8L-3s>c' );
define( 'SECURE_AUTH_KEY',  'hnSUO)NHLWNNh=)9X?1kDRTVv;ik4q({iN~8Yd]`]z+r;XRhe?;7(%t)t?v)v^+Q' );
define( 'LOGGED_IN_KEY',    'r$ gw,Q`T1w@)=k-)chnkKO/*V,OR8J8J:U%l&e6ez|]?fA!8U=wWqi,v)}x=u|Y' );
define( 'NONCE_KEY',        '~~B)]&.+Cy+;%Zs/:~-+h3J2RpKg3z@ hQa![^@U~QnTrib>l2}mDN:9Y/eBTFV`' );
define( 'AUTH_SALT',        'DT]~&qY/Hrh#2x=NbAi#p*V.6rz6Y)YoWI8;;u{L^LtRJt:gf{<b6aKb%3]Pr8Y<' );
define( 'SECURE_AUTH_SALT', 'hF)s$(,b24zikdhJob]OG]R{(aeMW[C{H[8Ay]A@[;ZMp_q5*ENaW2O7r-4y]VvT' );
define( 'LOGGED_IN_SALT',   'C8KtIMVB;l4X NcxlxV?_Z526%3d|nN>KlqpmvfC3a`NqE3/HDL]QBI*6M;K:*KY' );
define( 'NONCE_SALT',       'H<E:)m;^7]YwOoLzck5kaI]1-YVZuH8a9ub8X-a*M?:CJ0heJt!@<v{gh1Cy~QK.' );

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
