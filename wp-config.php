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
define( 'DB_NAME', 'brabus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H8De2gB2SSNpL8KG4yr011m97LGh5ghWTjbd7wiaIvEeUZIw6Z527pUyLbS7EqtU' );
define( 'SECURE_AUTH_KEY',  'UQlUcFzWKP1jDswgQ6hwk46dOqgpkU6jsTZSKrkd9O855XaqJZJSsBdnvXIgBrCc' );
define( 'LOGGED_IN_KEY',    'TKD6ByCpecs38gFtvLfjCZGkl9ntp0cB76oVCN2pwCVTkzttO3QpqgHHwIeUKo47' );
define( 'NONCE_KEY',        '7tkLNXzl70FWYAr4jh6HW4op3NYAFOZZFFcBfJ5sVWoIvwVms3vhMs1wgu56Hpco' );
define( 'AUTH_SALT',        'tmJNYBKkfnPOH2nLmPHVZt4Nz0sBbt8ZhG3QRm58l3spLjKRMhovGsL7eq1c52gP' );
define( 'SECURE_AUTH_SALT', 'ZnQa0t9mETXFgxuAFq51LgFrWaQvY0ABX8TFsG3mMV9W7VXWOMx8ahXtpw3hSghp' );
define( 'LOGGED_IN_SALT',   'Hn1YIezFnlr7snZ0GsLiqiNej2VTu44A8tXBqDaldWWVX8qLsnzA7ghX6dN6OQBK' );
define( 'NONCE_SALT',       'nxPITlbL40xWSZh6f5UdWslawJdGyKRQRlP1ZF7cFCdjny1ra8Xz9UU6vuV84Hxt' );

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
