<?php

if (!empty($_POST)) {
  $file = 'log.txt';
  $current = file_get_contents($file);

  foreach($_POST as $key => $value) {
    $current .= "$key : $value\n";
  }

  // Set log of data sent by Dialogflow
  file_put_contents($file, $current);

  echo "OK";
}

?>
