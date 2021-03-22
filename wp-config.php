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

define( 'DB_NAME', "webmakers2.1.1" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '>fiEU5<ajb[)7zuJ:n|J9P;uZ ?2}y&_-4&-/[A!P9h*ewaZ~V1;fo$FZS^q}{GT' );

define( 'SECURE_AUTH_KEY',  '{.f1+x$mq~M{5C;aoM=4@=I;OMN<b#)@B!&_+2|^.A!gd9!CvWI:[$f4C-n:69/4' );

define( 'LOGGED_IN_KEY',    'ojh`1R+<pC/5V;on$<g1k^j</3IS+S&N+ <5}_@Ku=|vZ SP}lM!mMmj{~atkJ/x' );

define( 'NONCE_KEY',        '/r/Et6kM/jJ:tQ:ED8Z{<_<<^Qub73{:bd0[ED8{8lf YUbGFm%_9rAJB6;F)wxi' );

define( 'AUTH_SALT',        '[7hz?S81+R$VYj7<1R+xBAtgur;K2;0>yXp/=zP}jH1LhD?f$GLsx4c1a*BHk]ci' );

define( 'SECURE_AUTH_SALT', 'Z%AyaMWEx.1ov6@.NcLYJOjs>-N_|8b1X.Hej,A^x3,63)@(&8Lt(Uyz4JFY<B&(' );

define( 'LOGGED_IN_SALT',   '<(--aaL<e!)|rv7j*j$u{40=6Mo(T]MbzR9KjlJ?R;~pdDDPa?/E71(?=zV77?}5' );

define( 'NONCE_SALT',       '|9C(W=+E.99BFV`o&l!WunNaQD2Sx7nw?a16O48-0~9h.X__`X/_{mk,;@8SyrbS' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

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

