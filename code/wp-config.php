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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'w71q4|6y*!U}N[I8q-}:$^D.kXzYVO3F9`_K0{# d$r}bf xT&%RbF-9!BbrA Q+' );
define( 'SECURE_AUTH_KEY',  '?#`l%pR r@2CDrrzh3]$pH@N0V4LJ^C!LndU?av[/:gt_ZLMPH2n/ulhp`UeS<*<' );
define( 'LOGGED_IN_KEY',    '<1qkC;(1t4Jxu7]:k/xXo76%e/7R . ?V7s,[#e6#+W5sa&g41v1!G T4_ltc>Nx' );
define( 'NONCE_KEY',        'T&U7w%u9s#?BFHnUr{Yg8:mW,Q]qY~0dak0E(r)t)!MCdTx+MXyfNc8@AgwXN:Jw' );
define( 'AUTH_SALT',        '=eb8I*P$`7 c-XfIbKYMhu;A&lI~W.b)/z-GL+6]m7LI.LW_,d`{[EKc%)cj[Ohc' );
define( 'SECURE_AUTH_SALT', '>!2(Mr{lUJX9r}G-2tXz^k%b]e%mapRisoPzV~zf6ivJ>R!A<gl{WT uCNbs&&Lh' );
define( 'LOGGED_IN_SALT',   'hGJskf+Z]<* :m_+/#$0+y_$q+|D$QN5]7>SG{Q(-Vbs1>Hza{s7Q)WgS9S,ACw8' );
define( 'NONCE_SALT',       'JyAxRw+F%RpC4<:NB%6+C_NXj2SA7jFuYw?(R,k;/WXJKiE|w^Gv%4!HjZHKVOy#' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
