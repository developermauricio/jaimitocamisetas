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
define( 'DB_NAME', 'juanito' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', '7YnLAWmuEsU4fBTjj78u' );

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
define( 'AUTH_KEY',         'y%3`?wo9ncT{X$4j;KxJe`NL?Hp8Wfyi)Rb/&Kn0Ogz]Z9wwn(5>j%HZ*g;U%mJW' );
define( 'SECURE_AUTH_KEY',  'dgZtNpd1vT@mLVr}B+OAl:)e./9$FxwA>ev}.fr.U<38O@An-z )XcoD<[X??HmJ' );
define( 'LOGGED_IN_KEY',    '[S*>X@:F24l)Z72ue;@P,sS;dp@x^Nl^0JtAG{}|KutB65)5]`Ln&1<@U(y&3-9e' );
define( 'NONCE_KEY',        '^X$a(`xi[,U*{6OAOca%Cx^sv f[8YT8]}&=vql?Z]D4T816[7!0jsX6V,-LxYGE' );
define( 'AUTH_SALT',        'xkqp|Tb9fHl4qlv !BfWxg2T*a`>quf..3JANJ~utqtvDj*n]L]fu*ye.nDUQ]C3' );
define( 'SECURE_AUTH_SALT', '?YAE22eXE8bi(KV~?u*7P2LUKS;80e<Ag]K;/+NOM[,}CeCnV((%%-opwzf}HjU<' );
define( 'LOGGED_IN_SALT',   'YZIs3ScCBu}tx9mgen;#3#ruqWuBJ0S1yb|;Tmm(p[fH=I49=n($#OABv wY4,d&' );
define( 'NONCE_SALT',       'Zu@PAo36Kx|OXYw,:3)/Fy{ 3h8$@q*cf:NN<&=!<TO^*lZf_:oehx5O@YCiMX~(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jc_';

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
