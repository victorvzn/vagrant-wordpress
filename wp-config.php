<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpressdb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'wordpressuser');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Chiclayo17');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DjB=?:ICGdIlTBH|.t#IBX-PACE/!td8}mrc!Dc?4oQ@1h%),1KmN%ZvxNLMQLG1');
define('SECURE_AUTH_KEY',  '.4ea*[15G|@SSJB1@.sveI0`ffe cu~eR%xnDm>HO+5ITXHkh(s?oNfbXJ$}yHP&');
define('LOGGED_IN_KEY',    ' 2)Zxt%W+~WXuyWQ!8@!=>u:_lr%mj4>65vd|qxp|M$ahGQy_Fn48Djj10g;V2v?');
define('NONCE_KEY',        'O1}}W^2johY?F[ztG){WO^kSQB`ak@gsL{ttyR`i.pp~BC-=Eu_}!i}ny(@e{mx1');
define('AUTH_SALT',        'Ir$nr+Zkr$#--p]`7}I6g!J H|ix#^&bdtz+xqF+cC7=ZK>L(k^?nZg/) .v#|qK');
define('SECURE_AUTH_SALT', '.g5nE%M|7 $K7yA@#M1R*!&jn9>zM3aE*|4}qcPM-KG.2GMj<Iyyh2|++NYyYqgz');
define('LOGGED_IN_SALT',   'vNb*UEgjkOq$th[{%a8N}4|E>JUD8|~E,?ynAt>IZ8%u9/*h4UZ;-OyqEmr?ZQw[');
define('NONCE_SALT',       'gs(d9+tjU[NJz8KP/YMA/#mw0q(}^$a $I9d4=7u,K+,eM.@x;bE$cTd+p0&i(u*');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

