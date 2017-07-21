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
define('DB_NAME', 'intranetctl');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'SZ4dso4R:@G;o5 esnJA/*eF>nS9Ko8{iz@;=6`F[`1FUY[y`h@ JZ1gy8}.P=YZ');
define('SECURE_AUTH_KEY', 'j}wLMG+IN*#0X7zX!/ph)(<dH*fn&zFC9R7d14v#vc8AB*gW[qXtgmX<V#1(TGl{');
define('LOGGED_IN_KEY', '-hZ7E*b?rwWU,d9j_VZ`VYQo~&Orv*</j_4.Eg3+31zJOapA(kqh8-<-LDFot)Rs');
define('NONCE_KEY', '/i^zGuw3o{r_c)lu?n3rQ{56Xfq]zN+S*1#ns8Qryn12.YmIk2Q4)XeVG}3v[qqn');
define('AUTH_SALT', '=;/3zJ5zD.,5r@xH=~Ty}j4W($cQKz{Ih!c=T+Yp][GkdxoAk.(6k!,UF;3hE~+{');
define('SECURE_AUTH_SALT', 'H^?8D]FWp[rE}p#>e3nTZiRPy17%G6x=FH1EIArJhTyDWJ:EH{=q[4RbAk?Z^03^');
define('LOGGED_IN_SALT', 's$C=YFK2N)TBs7ZThf*yD21~Nf(O9O.IC-+]e/EK??o7RSzI*vtfgu9LP!M2d!|O');
define('NONCE_SALT', 'Zg)n+8<BD9VP:jhstkq^16|V{(` F*oL3=XVhJQ>T%NkUGGN90~0gRUaJ_-{15:A');

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

