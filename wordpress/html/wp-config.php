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
define( 'DB_NAME', 'wp_db');

/** MySQL database username */
define( 'DB_USER', 'grupomsj');

/** MySQL database password */
define( 'DB_PASSWORD', 'grupo13');

/** MySQL hostname */
define( 'DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '334a47401102c73ed216e08263ec68b0ffaca699');
define( 'SECURE_AUTH_KEY',  '6b83cbcd83205a20f499c41454d2095f46c088a7');
define( 'LOGGED_IN_KEY',    '12c60af781c02298c504138d97e492224f8e98b6');
define( 'NONCE_KEY',        '47d912b7d3ad0e198bacd313d5f4f4395e5e6f7b');
define( 'AUTH_SALT',        'f9659d2a4fb98218c7fca182ee1063d9985dea86');
define( 'SECURE_AUTH_SALT', '356d53c067fa1a5b8e2fa3b36666fde298864ebe');
define( 'LOGGED_IN_SALT',   '4f5ace64ff0d0f1a696191684c0d1f8cd19d63ff');
define( 'NONCE_SALT',       '3ebf89f891ba655ec7fe3eab07ea56d2ffcd804f');

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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
