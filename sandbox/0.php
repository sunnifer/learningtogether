<?php

$count = array();

if (isset($argv[1])) {
  $array = explode(",", $argv[1]);

  foreach($array as $value)
  {
    $count[$value] = $count[$value] + 1;
}

   for ($i = 0; $i <= count($count); $i++) {
    echo "The number $i has appeared $count[$i] times\n";
   }

  // foreach ($count as $key => $value) {
  //  echo "The number $key has appeared $value times\n";
  //  }

 }

?>
