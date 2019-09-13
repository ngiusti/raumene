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
define('AUTH_KEY',         'qJCle5U+IPn1b4hVTZZkC4mvvrlL+7W9yam/GM+GJ+PUaWPIK0x9x4XNtAR4Bwc1E8FFpOzui48ViwnvBttABg==');
define('SECURE_AUTH_KEY',  'OFnlLy0vPoHN9+uE8iFailpj4ublv6/c5QmuiRO199KEDNR1zeNWa9GNbCTNTRzXDe3BTdqH9MNX0aokx06izQ==');
define('LOGGED_IN_KEY',    'wQXJZDh8Euon3JFU36A0aumsMp/xumIOZT1sfAu99+dIPdztjQvuGvVcv0BR9D4IyHOnKdlc34hc4wtA2EZE5Q==');
define('NONCE_KEY',        'CuczS+EcazKoscLe6btOQ/xDv8ZSrvfv/5wv3B31ybzY6NQ8UR2HS+XSIsWaHquFZwbMExiZkgUO7QFJXdcG3w==');
define('AUTH_SALT',        'uD/FTxzn4tdmjcqzINzIBmg7bePRcbIxOgid/QTzWH5bv4wjJ4CEukFG/HbhaSLnzrIMzm23Hhf76dJ2V4UdLA==');
define('SECURE_AUTH_SALT', 'qcVUXbVDYFmG5FMOwT1nX9UHe5zRM+lix5bOePRoeA5tGrtqUQNxgvEXQuNMWVXfy6EbtJffBHfrV8H2/cMgow==');
define('LOGGED_IN_SALT',   'u4zbdP+nYXFDWpo78dw+yd/64hYGF23l1H/C45HmqxFD72N489LhE151sZAcNayMqxHBfUO0aelC62IC5illdQ==');
define('NONCE_SALT',       'SECAEaYldFR/yjK8ak1AEqFzu9/QB5irc/iVI6brneIUlPbCR6t5VV2wT9nZbkil+hL3cC/gMz28W/k1n0wwbg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
