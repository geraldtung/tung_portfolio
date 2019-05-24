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
define( 'DB_NAME', 'Tung_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'O1;S!8/a7N~p+!i3k{1~?<*uW0/5_i<pT4g@}UKy&OC]0].el-1hx$,A7d_C[NWh' );
define( 'SECURE_AUTH_KEY',  '~gNlZ)l3EE4+c{<1/6^.tQ[+}&EW*vjw7b0 #HA!nOGxI?`NL;tQ&wJe8<247uP4' );
define( 'LOGGED_IN_KEY',    '`V~|Unt1WQd{Nw~k*W?i-OP6,F{J1[R%Qi$@r<[!DU%YVqKM/Fo&yD,=wjL)<k:E' );
define( 'NONCE_KEY',        '<TZm<w}wcaPAl-*[ %&e(etLG+?`=A8Um6WyZz|1>Y>s 40}*SH}eG5KQ3=M1t*X' );
define( 'AUTH_SALT',        'XO;E6K_iPc<w%0A|my#zId]%|B %F47;4lU:mtlAJ@b~%,LHc *6peX>`vuB(d#$' );
define( 'SECURE_AUTH_SALT', '5Su&*_Nz-J21#Srw`L$~6:PK{U_IWnQkRN*c@{F2xdpX=j(E{E*&)|%wUrMe.:>G' );
define( 'LOGGED_IN_SALT',   'QLv*~mu{SK~u%qP_1::8vA~:C@v~jmgJOb)6~GNDWg6qj#;M1Z.{xRID2{#;Y+we' );
define( 'NONCE_SALT',       '0xW6tnM_q[+ +W.wq1/XG=WK1ag=8k+kz>l,$u|u!MF53@M5h^!uTnQ5{P9^OrH7' );

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
