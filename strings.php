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
  echo $detalle_jugador . "\n\n";

  # Manejo de arrays - solo se pueden imprimir con print_r o var_dumb()
  $languages = ['English', 'German', 'Spanish', 'Chinese'];
  print_r($languages);

  # Manera de hacer push a un array
  $languages[] = 'French';
  print_r($languages);

  echo "\nTercer idioma: $languages[3]\n";

  # Arrays asociativos
  $languages_formated = [
    'EN' => 'English',
    'GE' => 'German',
    'CN' => 'Chinese',
    'SP' => 'Spanish'
  ];
  print_r($languages_formated);

  $languages_formated['JP'] = 'Japanese';
  print_r($languages_formated);

  echo "\nÚltimo idioma: $languages_formated[JP]\n";
  echo $languages_formated['GE'];

