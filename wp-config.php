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
define( 'DB_NAME', 'netfdfli_wp490' );

/** MySQL database username */
define( 'DB_USER', 'netfdfli_wp490' );

/** MySQL database password */
define( 'DB_PASSWORD', '4.!t4ZiQ0pP!S]' );

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
define( 'AUTH_KEY',         '5aei45qiz8zbteijg8nii1z1y0gsduduxvu8nwsdhyf20ah1rj2jujgbdrdn3ezc' );
define( 'SECURE_AUTH_KEY',  'lwwdvee9uplcbkqtmmbnenkervw2ovitfyngnzal9jivrrx5nlttwnuajmyrjbbf' );
define( 'LOGGED_IN_KEY',    '1dpq23kskcfliubxjwl21wfey4hfqqrfwuvzggmcwflp856fqfabqaedurm14bcs' );
define( 'NONCE_KEY',        'jkmlpxro5ycngiaswqxcvsl9j2kh7tz8kk51xwp7dzf0p0zuvwg3y52jbrpkffjz' );
define( 'AUTH_SALT',        '1pb8o1fa0dgii5knzdiqtg4n2vhy4pfazmb3cojfguplfrvlawxp6ghmuz0ijpuv' );
define( 'SECURE_AUTH_SALT', '8s3mteoxmtjnwhea7pou5ipjchsdq2v4ex3ck4vf0ot5wxih9d1eidpgb5tsv36y' );
define( 'LOGGED_IN_SALT',   'dklln57v8br3mx2nrmpbpvoot9uv7egezo3wp6qgrgudkb3zfy9lvnniygqdjuvb' );
define( 'NONCE_SALT',       'mrpjmamr8fkrge850f9onkkmzi86g3ct6nrrn2hzyw7ovfmh7tvntvqfmlie51am' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpea_';

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
