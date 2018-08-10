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
define('DB_NAME', 'tedxynu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '..yd?ABv.`f#G;B4HjTa~Y&F;2-BWHN4/~)3-9.3jYjY:1AM*L6<^847g--*%ymA');
define('SECURE_AUTH_KEY',  'PxhSwUu7kUQTPFFVJIq[qq8KW68IZ.]}/GZ[bNojzY[31<I-KS(9a]*w2Z8c NfK');
define('LOGGED_IN_KEY',    '@QHE]^]mb&)#U+D$6mG( x5tHDotHS%6^d9V/!8s_W.*5S_+1p)_37)L[1tQS=R6');
define('NONCE_KEY',        '5fXsT*VX4SKV1Q5>phBH&wUzoYs7bq*=]e^9H-76xV0<NW=P6/.q*>!:t9)FD)a$');
define('AUTH_SALT',        ']3dc$Y)*<SoU#Xum-[%|O0YT>nvGA,VXMHe/65E$eAwj`SqPEfiW.QGREAsb1-ib');
define('SECURE_AUTH_SALT', 'i JlT,. bymZ<I4.l(t.)mew,VBiz6jHQ6j<~BmaOQr@!JNI~=8(}QnE%p%W](HO');
define('LOGGED_IN_SALT',   'B>pMm`Z{+zq:UqKLnFmS@vq`0t^%iUTj/vpMx[FGkL`2H|aG,-t<%$k:+kI=pbbs');
define('NONCE_SALT',       'S5@(qUo[ZPIRLoKcgs!N}|XNTj*CjZ5GoR7Kx/>{!E3L.o:KMBEk^sivdkF3RTmf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tedx_';

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
