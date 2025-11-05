<?php

// Activar reporte completo de errores para desarrollo
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Cargar configuración y funciones principales
require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/functions.php';

// Inicializar la plantilla y mostrar la página
init();
