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
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'I_8mg9.0G,0Q+9Ud=lsxOtye|TJc9NRu9:TM(8>++MW;b]FA,.+BpX@oJM@&@ey;');
define('SECURE_AUTH_KEY',  '<G;V^HCps9cc!Jj$9]EqmUU #/J$9*q8@p**vop,Bk8h+3LujfkMmR8q!n{]<BLR');
define('LOGGED_IN_KEY',    ';$0f?KQ@vru?{^*v]v 6CiSM.zt8++qJJO?Obnny/*vms4r|I*gzJhC]/R[`vIzl');
define('NONCE_KEY',        '/M0!{vNncLM+k@GK,*wAm|/|xqS7P(%2aU7Vkal*lz#|h%1I7-o;Q*)wU?cv?B=_');
define('AUTH_SALT',        '|i9oLO%FRhMeR-|%chXp}=J8kmv`ceAhq$MT=RKsYYmQc|`!v(Ji#VS:7^,bK{r*');
define('SECURE_AUTH_SALT', 'vQK6A/B,`mHWNq{ qZ8|Fy9Ccv(@~o5[gj1 <Cw].bFg5viOl%?{hSba_5:[|mhS');
define('LOGGED_IN_SALT',   '|)<mm{[BxdRN|zCl&fh*rQ4TrO#?J*wtl6MSt,@@K~B1Sj7~XXH+n.;`:y8) G]C');
define('NONCE_SALT',       '>f[qEG7l}|R2$q+,vT!Em9wRH#tUYM)~K)Bj|S><V>|,0-H*96W)@.Yr2)2iH|$p');

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
