<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'qO!7XLdMS+({7{UG,(doCzOXR/4*-o-Op1tp7-2HgZ/~:/Tzv+:rCK2R={+[yuDm' );
define( 'SECURE_AUTH_KEY',   'wpq8D%#?k|<9,IfA!;Epqj8F)9tmDu`,0~JAz*##JgL_HYGZ3k<.uIMkiU,JvJ|_' );
define( 'LOGGED_IN_KEY',     '72}-cNeI6 BwE6~)s.&F @1#m887c<e5Yg= cNiftmYHJN.Q#{m-Zt49h]F`ef&P' );
define( 'NONCE_KEY',         '!_nFh)|X8K=3%WtR<39{IC@+VAI=X]U%t*0hD!oC:8beXgyp3d5r>]}g7b>q*tsG' );
define( 'AUTH_SALT',         'HAHhZn_(m.(VT|H%.m)o>0WgX?T7}HX#`x}If/NyVGwceZ@5!}{<.<&[e(jgHX/B' );
define( 'SECURE_AUTH_SALT',  'hg.4?Hk;)o>b-qs2O|*}Yl&@F;alOddTfMJA1KM!6N9R}+R7kGS_pFkTG-I:1;fy' );
define( 'LOGGED_IN_SALT',    '* <~33q[#o~-@{t+R&LgVCXE;yWQRuC&iLfZb5F:jjC@`n=umr8~Oe+0;k2-y9?,' );
define( 'NONCE_SALT',        '^LXg+%mcDpnuD6;)MW8H@&+~9`S[RifxmfW#iQ8SQK=l2br@2lC8jo2d5L$-G_iT' );
define( 'WP_CACHE_KEY_SALT', 'L5pv&KAxd5uU(x@>xW`((W%NXtVa|/knW}VcRDI.%;}*D;j25}>=?pZFXJM?_ oF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
