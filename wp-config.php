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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@I.Q-![p)^+?B;?L^=iB{Ph[ @v{e#XG;L9inP>s5:%_ps@.Hbh?_MiMbubV7bTJ');
define('SECURE_AUTH_KEY',  '~Ru_}^bV M]h|P2dvevhi~mA|R34VlI^WJh<)jkU)=J=R5za7`1n7_^xJzZ85SqA');
define('LOGGED_IN_KEY',    '1dJXEL8$VK@}nsAijsAk,pUtj]-2s7j~7Ygg:%;.tMjR l~RAN0V9,;d;zZO=iaT');
define('NONCE_KEY',        '{Ea=ZB/cC`@kb%xpp^x >TRJtQ!oJ>KX1`X3{G*u>E>A[B[a]{)j2(z,RyU1w|8*');
define('AUTH_SALT',        '3qbOZXGsP0rKX$GtL)1|XA1!}cKX%0{2V2A!bt!UY?;^xoW^VwLdz=4CciLRm;oZ');
define('SECURE_AUTH_SALT', 'bZ{R;l>}_5nq^%vnJ`m<8Hf5Dc4A4Yvl^JvkJShNY6pRy&0jww2M1rU(i Lv5z7/');
define('LOGGED_IN_SALT',   '%(3:n7nR68Nt8z12KKZ<!Qc$Vd{,/q@_6?z`nY)R&U9w4}3M*<%lXuG4co`LAW)-');
define('NONCE_SALT',       'yv4n/=32J]7q=yT}voZ<r<JWdsOGkeYdr32mx}F ao&h5C5fMORYES`!V`TG-_]X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
