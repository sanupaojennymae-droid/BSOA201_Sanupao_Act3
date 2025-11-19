<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bsoa201_sanupao_act3' );

/** Database username */
define( 'DB_USER', 'Jennymae_SNP_3' );

/** Database password */
define( 'DB_PASSWORD', 'JNNYMSNP_12_3' );

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
define( 'AUTH_KEY',         'NV mm@/49l~a<wA]0K<.:E+v@Plp::qN>hX,%>=aAhO3pq*p/A=P%?8Q`8kuP.w_' );
define( 'SECURE_AUTH_KEY',  '&~`{%g^u~jY9`|pn #JJXf!KZ.gcDgP/2[v{>w0Ym~@z#2:%1xP0z{A^bj<sDKg=' );
define( 'LOGGED_IN_KEY',    '9`H``R:m]sfj:8~Hrzgag~x@tiX1GSKR}|[o+Kcl=~>4!Oi5i_1E_zeoib7#[2<x' );
define( 'NONCE_KEY',        ';_7)C(X9^#_EU9Jmj|n/>%,b*+ATu+E>5jQz(tV/u4Z&S]*)m]RPK7HdK@)y2rf7' );
define( 'AUTH_SALT',        'fs-KZ|;B69/-N(h__cT:K}@Af+)lk}!$g<nY4H|w~%9.GR3!P0>8EBd><HI+%0nX' );
define( 'SECURE_AUTH_SALT', '>4wVpm,0uXS7A?aqXFb:?&$:qFvQ/eF!fU7/ay9x`c[o.[^R:trGQ !2$85Yk`Y7' );
define( 'LOGGED_IN_SALT',   'vZA?2L+k;E%5^J&_)S4F6@USQy.t4bf&87IUG8[R*HEv&LneMy]k6y.Fr2j=PK&@' );
define( 'NONCE_SALT',       ';$`Jcr,T_v]I&A3F:x,v*NV),3a3h:zBL@]wcOVU0MJ^6d<tKS`$B!o)|=[-dDfO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
