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
define( 'DB_NAME', 'wp_modicare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'elq/c++2GqFk^@Bo)))7k,&b~elOk)#S-w:#4R`T&Q5G,g`,Zm|#r7U*E2^bEC^]' );
define( 'SECURE_AUTH_KEY',  'TDfMmN5)9Q2@87OcXqK4VI&@vOm]ed)+4IeJcqc:t_=XjAddIi@/++lb}M3rFFiy' );
define( 'LOGGED_IN_KEY',    '^]LyeJNL;=mqn,hP<2W~O$aQa^p}zUc&` 5/,i3ymIW%6%?&CxlE1M7UOAXhaE?8' );
define( 'NONCE_KEY',        '3xRgC`H?eN9^G@Ke{7fLO9$~9!zNmA/C|hg+;a35`!7rY;67qB;dOv^|f|e?9!](' );
define( 'AUTH_SALT',        '&GQ!&QArmRv4<|4f.b1=Nb#_7>8d3gnPP,[#z>.o~E/W:D?@wGt[Cp_s/twVd,gX' );
define( 'SECURE_AUTH_SALT', 'l5g|ag&8 [nn4$0QNHS9K- >{!2u)H:hFqxXz>%NuHGp.!BjZeC`V4+w=rrJO~dU' );
define( 'LOGGED_IN_SALT',   '7~Ydn`06Mk^yRWuoW8b7Je)[x|Z] tS$e[WyB[ZpC.I(h*1i7B92[Y|`2|*]Kifn' );
define( 'NONCE_SALT',       'egBF!d(uTmd}3z=S?f~NHa4G###(-_;{P-*8KX(UAsUNYZv@3qHT5j v-}r#~Vmh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'modicare';

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
