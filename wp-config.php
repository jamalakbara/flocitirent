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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flocitirent' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.r+$3@L^Ya/~UIvuzr7zq9.Paui|wmpxb&&P9MCh(.sL<*G1dX.YuXU`bbvjlDE$' );
define( 'SECURE_AUTH_KEY',  ',P~]BA=jq~Qq9Ho(wv,3q^P=Vm0wHy0Jg ]H ]V3NG/{mX5^z`L<u/urYYg!Lc[k' );
define( 'LOGGED_IN_KEY',    ']$5<a3L]<G>?-tpVm^JZH,3CP5(*~3[{Y %%dL,]7 dSh${~AJ=:.f~ V[<JE;`o' );
define( 'NONCE_KEY',        ';Ado2iaE9q+! o.8XF2T04`+Y>g-skIcWk5Kpy[D:9m)B$`&0XK78dA~kdufI=f~' );
define( 'AUTH_SALT',        'p4YS-~-0EJnL?HnuHP}yH7V#X1I+/G+a5{bU&]W4,u)g~~(}Y(EWhDmkL!X<#|8C' );
define( 'SECURE_AUTH_SALT', 'HKoe({&I kCVJKI30UuHIjH?kEzjN)>=qq.tP|4]r4qfgzN]$b{T:T&.z<B5]ZLQ' );
define( 'LOGGED_IN_SALT',   'x>7@Zwrp4%+B=GhFGZBvtm{0}-LICr7hKg]JvEhDIev|zUmck1Mm&U9hcz{-&4gY' );
define( 'NONCE_SALT',       'LsD14I{?IUl/W}t<W[:%?L_F25Sc#P!Ka :}raCxsRMCHZgpXUnfuG x$M4(PUjr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'flo_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
