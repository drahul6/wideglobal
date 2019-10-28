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
define( 'DB_NAME', 'wideglob_wp993' );

/** MySQL database username */
define( 'DB_USER', 'wideglob_wp993' );

/** MySQL database password */
define( 'DB_PASSWORD', '[8H!pkS760' );

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
define( 'AUTH_KEY',         'y15xgn3utwucgwlslxjh0fj6vq9tcehlegepxkbba5ze4sshpsv2pr1hbgbimf3i' );
define( 'SECURE_AUTH_KEY',  'shzhkpu7bujrqp180ubtmxey2deijsyo1euds9kxhsa0j2hatshmp4hjf4t05htw' );
define( 'LOGGED_IN_KEY',    'ucbhtmdzf6naobviiml7tf5piw8qgdg77i3v9rsvv2voenewujlszm3fioikboge' );
define( 'NONCE_KEY',        'cfu56riqwmdhuooczb9cqjp2e4acs9kpkwyrrnjg0nvmjhs6qacychmgdaqrqayg' );
define( 'AUTH_SALT',        '0dwuamb1hp2gplohp9rb2p5upp5dcwtxxv28d3kpx7jcuzwdw3u7cb8qrwzx4owz' );
define( 'SECURE_AUTH_SALT', 'qj1w4tm4bkullkr09iay02bqdb72q8rgpgqlvwmw20nhjbxi2jfadrfl7bket2nr' );
define( 'LOGGED_IN_SALT',   'nlslnsjayhucstqkkfwnzy7hqwmh2go9kkgwezudth9mbdw1zflwh8xgzcnlticv' );
define( 'NONCE_SALT',       'xmnnrpw1u6u7uf4e7v6vezvzwwgilslopffvyurybj6s2bzfxud1scxisnmatidt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvn_';

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
