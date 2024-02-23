<?php
/*
Contiene las constantes que usaré para configurar la BD
y para la configuración de rutas.
*/

//pruebas para ver la dirección
//echo __FILE__;
//echo dirname(dirname(__FILE__));

//Rutas
define('RUTA_APP', dirname(dirname(__FILE__))); //ruta de app.
define('RUTA_URL', 'http://localhost/portfolio-creator/'); //http://localhost/nombre_proyecto/ ruta url del sistema.
define('NOMBRESITIO', 'Hola Mundo Web 🥽');


//Base de datos
define('HOST', 'localhost');
define('DB', 'sistema-portfolios');
define('USER', 'root');
define('PASSWORD', 'admin');
define('CHARSET', 'utf8mb4');

?>