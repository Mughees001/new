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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'P=K_|EN5lym`9~7[N1F0Z7c/Q:*(|P3Hs!p2gIv:oD768?pm#~@98dvY7o%</NZ#' );
define( 'SECURE_AUTH_KEY',  '{2/UY:<U~#+$@V+q#nZ.wM;%sAd-J^JTK[R:};X^lyzURC53kl)yX*D@d$m@}*(W' );
define( 'LOGGED_IN_KEY',    'wNjz1mtkrJ }z%^8N1b|q$J>0-}27%Rl$&Fd`yKnGy-)ur6VF< bvOFlVe?TE[>v' );
define( 'NONCE_KEY',        'jh$V6!3#+nc:3jo(#~22jIH7FGoK3Zaq0df?Jyt]|CN(Rp8OTTS.54{TqC5/`Yrq' );
define( 'AUTH_SALT',        ';tv[C1`U>wOHnUY86-x>-$9[|_ae?/p6AvDI7j~+DY  z{?8XA+bC|y8*COf~fsf' );
define( 'SECURE_AUTH_SALT', 'vwp6xS=@$%asytMb87b~[S7UFmP!U#dUeN}1&SGSEEO3JkD)ni[&72b<RFmbvS`}' );
define( 'LOGGED_IN_SALT',   'wS.1^JAxLd7QRuv<OJ|k=Xh&a#`*`1S}%Ml8[+p`M+86&`EfnBAKjqJCWCESVG:>' );
define( 'NONCE_SALT',       '/#A9h@D.1I1!?aGK,N-1tl09)M|5;S+g6bc4}uu|wr d,tI(~+oP+pIWj6$HjfBD' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
