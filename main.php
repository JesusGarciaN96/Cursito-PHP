<?php
  # constants en PHP
  define("PI", 3.14159);
  define("EULER", 2.71828);

  const PHP_CURRENT_VERSION = "8.2.0";

  echo "El valor de pi es: " . PI . " y el valor de euler es: " . EULER;
  echo "La versión de PHP es: " . PHP_CURRENT_VERSION . "\n";

  $dato = 'nombre';
  $$dato = 'Juan Perez';  # Toma el valor de la variable anterior y la usa como nombre de variable

  echo "The current directory is: " . __DIR__ . __FILE__ . "\n";
  echo "El nombre es: $nombre";
