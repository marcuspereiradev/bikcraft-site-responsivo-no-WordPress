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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'n4Yrb4I9Y2oqH5zLHunR6BsYjxWPEJS4BtnZjA8NR1XuJ6LKFeFZjFUDDfWARh1ADw78Fi8GifvIsc/Qw80lyA==');
define('SECURE_AUTH_KEY',  'vDqXnN+iHJEJCSnGKDPtLQ0W9FYk2tjqAda31t5b8/7ITvcP0jBvC2OK+t4yI/1TEawgedJCyYoGWTmSipJwdw==');
define('LOGGED_IN_KEY',    'V0vNc7ugJVkghjZGuVAM0owWSzCwTfTi2ulVi+WOwc1mb3JbEv6tcAGwz3GuuVWaQF2fS8lfNthNdztNYEmQ9Q==');
define('NONCE_KEY',        'gGd1VWrHxNpHMtOMYu7JwttvliqwViUwJEpdqxh0yUMRv2QycbPz8R7hT+tJXFk4zFYJdwaR4mU+3RjtaSk0fA==');
define('AUTH_SALT',        'K2ipyMrCLvAyx6P8gp6KoileL2zpBN+ZbHKbeqgTKQMQi58Axd+WycLkpvca4vkjYFZS/Da7LSOgR7ftuKIkXQ==');
define('SECURE_AUTH_SALT', '2xkHQVPUyxBUdX8P714IcTRgJM1/7Jnyp3NLkNgMkl5oO9xxiptCINC2iHLVrjhkjgiXQFJFIQnMRxm3pfZdBQ==');
define('LOGGED_IN_SALT',   'svRBeC9BqXxRtFzu3ggzgoMAGC53G28L3LmQcrxIDQZcN7wd62xGOmxz6bHhyJm7vXctjMjfMB5DgmpDButefw==');
define('NONCE_SALT',       'KJA/48GHJ4ucJwN4j4pXmxV9q8CqzjrfIueJn9hpurCvnjtaKleLUmFQVDIJs3I6BtnDP18ALkVSEDIGeeqL5Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
