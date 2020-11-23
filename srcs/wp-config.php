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
define( 'DB_NAME', 'server_database' );

/** MySQL database username */
define( 'DB_USER', 'gdrive' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gdrive21' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'dXzIsICB_f-cqUw WN@@?6.[;Da(cj]BaZ P)>J!(Dih::kifE]rXgsk8mSGDg9}');
define('SECURE_AUTH_KEY',  ';|[-u)X3II6,yS@fu?4{619epe~RRQ.`*=~jdI(R8@-@?nO)q1+F,n|oN+Jqm)21');
define('LOGGED_IN_KEY',    '+NeV/{;-,o~12{Y$R6&S$I0/(#n+0<};cDS<_zz~h5?&tLCfgaJht~j(=2Z5xWGI');
define('NONCE_KEY',        '9mC2R dxB$gwm(fYXu7>?MOq Ls,b{n zow|ph|V#w3j9shKe *zqae>10CRnXzw');
define('AUTH_SALT',        'RY>6vSU!=&hZfxjRXS_9v+/C:h(8OJ{tIIon|vg{n+^oxd{m|a{m]`iQF~)`|0~4');
define('SECURE_AUTH_SALT', '6v1*1{cB4vM&+x+VPD;TaGO0T1*3zOrE}-dnv9:!ECo_n|#}e~G4y>-gXfl_Zi9_');
define('LOGGED_IN_SALT',   'J?fnR@(/2vJ~#oZNd|hf<9#za:q aP0&vRKgO=J|k-)NLh+&.q%`6-=NY6}Vx.t6');
define('NONCE_SALT',       'p[72Y(!4g=}&{S2;[9@3-Zo>W96e%1*_+*-Oc}v}a9bo1yX/Ze(:)~:0NpuXjKl_');
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
