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
define('DB_NAME', 'mwsursdt_redes');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'mwsursdt_redesu');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'redes1');

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
define('AUTH_KEY', '<J)&DCe1p/@l~ZX8Qv!W)#.QpG/ujbXG;bz=*bL#wOU5)o:-e0c;cD4.LQn1O-p}'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'znC>w%@K+6Dcs)w|)P9i+0kFW6Wf?i(<nH{;si<miYhP;EPdU4P]?(+5qEfbi1+U'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'wkQTWS2=Ev/!,gUn0)Eo#0-+[;k:TWHt=.JIULpV,` lTq516v_f5[CQ+|N*:*_d'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'WE{u,6Vcy_5$>>+-yA$$jx+_Y n,a93=h5vGdRWZhn$UQ7|mFO4iX9@~[>1me+ k'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'EQNw|2S.K!^+(V|4s~Shgz3H-Eq^tfr{ h}1GoZ5?ODAx1wB!g+:xbz+)N4+&_Yx'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'ZgQ!8BEH?f3^Z+K,,hU~8O+BD//v0C{A5`sw$8(x[W5v]YKqoW^6Cfz9Pm_d9}-E'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 't,D1U|/-Lx<,-4acs;I5trEWwt|+Qaofq6t]}apu;+)-O:O-sLQ+CUkmQ>:U/xr-'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'ggZ29l&SQ(FmiadnzL{P>mC#(U8SJ?T28c]zjX6Jk*X/x9m ^01G.e{r]lVt$*_-'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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


