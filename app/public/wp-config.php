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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DljCD3PpkDO+q7eGjzMjls9rUsu+1kR6q5vuMuj0WbTwBOQyhPUJaUHlwrsZwN2PXn1c1Qmmvgnw/In35x0ptw==');
define('SECURE_AUTH_KEY',  '5LBJEi1/9CI1g/wkjWcoTBOW9S8XPAQpMOlr0+ChPz5iokVnbWD2ojnCt6Q5JwgmNFyUtAyXNfga4v6KNM8a0Q==');
define('LOGGED_IN_KEY',    'fUVRIpFoOMXCRAfktqq+amF6awEqCfKMHht1zlBQw9j9IJkJaRAjR6QDJlgjboWK4zaW/OydmP7P3BYWNDCEUg==');
define('NONCE_KEY',        'IlFnvqz6e94F2BvYjSktM5Wokd4z2UAOQXjyLLqmOE2g+iWOrWcRQp0/D4ROcPQbFr0mVmt+rBjCjGPpZfVcoQ==');
define('AUTH_SALT',        'cg26zAPTUyI1oimFlBOjX4N7f3cXOmf3HfYwOlQvEFMUZT0R+khAgcKu/8EwfT9QySyPWhFP4KJI9LRA1aIdzw==');
define('SECURE_AUTH_SALT', 'bZwDmc0N+Mtc8dOVdKLYb6phKsUz3JonNjnXKB1pq25Ig1b1W6l+1n+/s4hyWsVFYTlcIh3XRPZ1AK0NhzCwrg==');
define('LOGGED_IN_SALT',   '4/PR4m+CHrRy482azYVZRGSbxzkXHiSohl8biF2O6CXxqUgSTfUYFYxO/MxW0rRwzRAB9WttiUUQWplBEhlZ8g==');
define('NONCE_SALT',       't9y2JzdiziTyzFKXUhEFXW7+OoLB+iXJV5EzU9YjutgfJ73LsLL1pST1xGD+95CA+Yeu1k+KkEiTu1S88D0mTw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
