<?php
  $id = 12;
  $nombre = "Diego Armando";
  $apellido = "Maradona";

  $cadena_multilinea = <<<TEXT
    Hola, mi nombre es $nombre $apellido.
    Me gusta el fútbol y soy considerado uno de los mejores jugadores de la historia.
  TEXT;

  # Es útil para escribir consultas SQL y usarlas con PDO
  $detalle_jugador = <<<SQL
    SELECT * FROM jugadores 
    WHERE 
      Id = $id;
  SQL;

  echo "$cadena_multilinea\n\n";
  echo $detalle_jugador;
