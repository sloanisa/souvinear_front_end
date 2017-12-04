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
define('DB_NAME', 'kamkutzc_idm250');

/** MySQL database username */
define('DB_USER', 'kamkutzc_idm250');

/** MySQL database password */
define('DB_PASSWORD', 'lrsZn]^}%O6a');

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
define('AUTH_KEY',         'o7jTdB|BJrx4ww93B/+n=>l.({M|Qrw+fpK1QSdck{).ab34=sZc#Z!/D,PVg4`K');
define('SECURE_AUTH_KEY',  '%!EKzeF`__=0wdA{YPc4O`SjY6.|+kCz)!nmKDVWdd`08+6`#f6>PA@ey{ RKaCK');
define('LOGGED_IN_KEY',    '*T-`xa<J O]_K3#&ejaQrSw4V!RT>8WHxr7Y6a~}|pc93E(}bE;C[aihMHbWi|}7');
define('NONCE_KEY',        'xm(v`+Vvlue&z~L=Er}aVxRzaBJx7bbh1qJ^2q%B}9rLTod]_hfg~ihTt:ZOB,U`');
define('AUTH_SALT',        's4^id2GS9 h{o7N,fYR0F;z%J@A&6r>Ez-$wSLv</_l<bt*: -mEq;*L[Y%L/pV ');
define('SECURE_AUTH_SALT', '^x6(xqte//Ya`R~,?hf<l&XZfG_n=X/_(cOu3AidE!CypouQuMo(7tGFY,&_%F7w');
define('LOGGED_IN_SALT',   'U$pz[nM:95hYY2~}?8Q{7g%{+53:3zejKToC6nv),WCE+jRP.=SuLa?M>U[Ni#_I');
define('NONCE_SALT',       'T&fs8j5dEJ4WGT4L4u_;@r~R^^6Wk>Kbz;}|AjO8Ltt06=4TJTbH##z)LJ-f68t2');

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
