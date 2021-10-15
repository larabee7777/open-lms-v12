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
define('AUTH_KEY',         '3LzKyYXnJ4VzbcY5fFBvhjn7audMX6Pi3PASJ4E59YTG6lEGNvG03C8d1ky3SCFhs1Rj5j+xXJwLAKNwJ2oS3w==');
define('SECURE_AUTH_KEY',  'OMWe30Y8VQSv3lP1HVuZP0bIieuw9sJhB3qdnOiZMJZdwlb3n7VffE5HuTm5R/wwgtL4QLjmolny6ck4bftdpw==');
define('LOGGED_IN_KEY',    'QVaJNIUTo4ZErsZIZqTP+bpBlpNkr1joK1PiicWdeo+pNzNWAAhBElVYnD+EfuT8s4u7VEe3e+mvsB5MYI1bbA==');
define('NONCE_KEY',        'P4HpIwes6I84DJmmSP94RgTiY3vhkD8al7LOYTvr6p2JWzRcyQUifktXpjfaFDAhQ8jv7jdFqKSNmuLoD1Cs8A==');
define('AUTH_SALT',        'CBe3eBKPEveeqg21qNcqYi32vrJ/+kUqDpplRXLgdRLB9IjSGH/aCpdU/UImsRvq1kZviTkc/Q/EbHUoETGrog==');
define('SECURE_AUTH_SALT', 'RskFWJtldHz7tb8wu2pC1KvXNuXoUxWtaRj0gCFRRAMR8/2XGFXHneGeTF7Q0Du+cdoe7uP7H51btPsBoFJolg==');
define('LOGGED_IN_SALT',   'ubPm91mnxQ5OvE0rWzdZMLzW3+G9SnL3BTh8yOCW3c/5fmP2qGPFvheoxqxYd7XoVgd/N4J90p0DEyqRHHPcJA==');
define('NONCE_SALT',       'VUD7XudejdZJ4r8ylwc4PGFow3YsBtp+LZ/psC6BYDEkIJ0Srt1JnUr1SfcM7OZQBYeWbwY1yOmswPcQPUww0w==');

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
