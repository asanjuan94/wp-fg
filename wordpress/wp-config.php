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
define('DB_NAME', 'bbddwordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '5kDjqPeN');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'J.At2RuzW+F7;F6<Jn([E/NX:hzpx8`Av)|-K[?|0Vm.TK<yWAFv:B@5P%pSORHg');
define('SECURE_AUTH_KEY', 'ETn6!GtK|>G@WC/K`[9oT`*)N&k`y6f=@_n>Jq~ame!SFUG0gj^I5{o0:UPyw$ -');
define('LOGGED_IN_KEY', '!O99*q{YPI[[1uQ?PSK2Gmw?krt}K]a%U+h_6g0<aJ*r%Iz*SQ@>ZhGYH;Ob{+&|');
define('NONCE_KEY', ';zB[pqOo[4RSK14]L{w99B~.W$|Ktj`& 1[:Fm@G)Rd{C@DFp^.6PKj5#{T4^_^I');
define('AUTH_SALT', '/Ya,9&:@o>LAv*$qWf[L-_gvRE~gz`CTux7_]a{T?Gz@3*_+]As[)#>2vy+@M03@');
define('SECURE_AUTH_SALT', 'e*r,U8b&{xF-Kk6_=Vc5>W#aWV</~q;|n_v_5(9J:l+31EEw>L:a7igVK++%kV,p');
define('LOGGED_IN_SALT', ']CCF1YS?fo<[jv5ki)DhjR*!fACh7D{*jYn}<&CSS(>0LfAY4u9QJs*Cn4wyI/D{');
define('NONCE_SALT', 'rDEOzS[YeRk/)#u vQA$jNMaJV3U$C{q=CGc3j8S!XzWW&OK4,GFJ!H).2?pCwF9');

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

