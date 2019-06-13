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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3MKqikMF2kNqAxWTUP0NAON85gkjlEGuwvgnOSdMp7tRDH73llNL6RH83k4Dh8hZHYrcjmr7f2VPFhI+jnPnfA==');
define('SECURE_AUTH_KEY',  'ywoWJlxyXm33gvwKN5nHWHNIzkQmlNPHG5EAe0rqGvzVInvIp+ZDEywG9nnEnNaO421G5+xgFKirtrfVM5OvAw==');
define('LOGGED_IN_KEY',    'GbHOnSMyT/GTnWZwL1uPgfO9pTXFIH8IInAl/e+l3+5hOknwb1adqwdlduQLFCwxwf4Avyr4U5ED8bqAgj3nYQ==');
define('NONCE_KEY',        'kHltxFIx3vaMD4Dqg4QJYrb8dGgG67NEeMXFez1FbuZPkm/nP5cdsJ8p22eKQm+BkMveIwQFQ25xCa8kiFVMuw==');
define('AUTH_SALT',        'MlJdv3mRA5BDO5uqIo2NYlEx++gY61FN0psgRRWxYbaUiTwrKiznp8KLJWr8ayeG+riPX+GrNyBV5NCvQA0c0A==');
define('SECURE_AUTH_SALT', 'OW15Hgev3sRSfsXmoEZMBU5gZ2GB8HIa8cgHLNbD52yL+pTL+gDEnYlfi02/ygcReCEgYuTEIX2bqLMBS7vZCA==');
define('LOGGED_IN_SALT',   '9QPhLClqxe3yWM68rvX842tD5wnuncs9kSQUSxhdgx+wADi5zxm+axVvWjNBnCv+bilr6JKxMYuCsToogsZocQ==');
define('NONCE_SALT',       'YJqJJOxKe2z4ZFB0fDfdvibB0/zUS6xrcBSNdsXAZEqu25WwrCH3gv7+XJO48z0PsJK5H+M+6AVCA6VKFROBfA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* Custom WordPress URL. */
define( 'WP_SITEURL',     'https://pixelbakery.local' );
define( 'WP_HOME',        '/' );


/* Specify maximum number of Revisions. */
define( 'WP_POST_REVISIONS', '50' );
/* Media Trash. */
define( 'MEDIA_TRASH', true );


/* Multisite. */
define( 'WP_ALLOW_MULTISITE', false );


/* WordPress debug mode for developers. */
define( 'WP_DEBUG',         true );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG',     true );
define( 'SAVEQUERIES',      false );


/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_MAX_MEMORY_LIMIT', '1024M' );


/* WordPress Cache */
define( 'WP_CACHE', true );


/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );


/* FTP */
define( 'FTP_USER', 'pbgumgum' );
define( 'FTP_PASS', 'Ef@3{]n8M,{PavQh*;' );
define( 'FTP_HOST', 'pixelbakery.co' );


/* CRON */
define( 'DISABLE_WP_CRON',      'false' );
define( 'ALTERNATE_WP_CRON',    'false' );


/* Updates */
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'DISALLOW_FILE_MODS', false );
define( 'DISALLOW_FILE_EDIT', true );
