<?php

//// ref: http://www.cs.princeton.edu/courses/archive/spr15/cos126/assignments/hello.html

// Write a program Ordered.java that reads in three int command-line arguments, x, y, and z. Define a boolean variable isOrdered whose value is true if the three values are either in strictly ascending order (x < y < z) or in strictly descending order (x > y > z), and false otherwise. Print out the variable isOrdered using System.out.println(isOrdered).

// define variables x y z

$x = $argv[1];
$y = $argv[2];
$z = $argv[3];

// if ( x < y and y < z ) then true

if ($x < $y && $y < $z) {
  $isOrdered = true;
  echo $isOrdered . ", or in other words, TRUE.";
}

// elseif ( x > y and y > z) then true

elseif ($x > $y && $y > $z) {
  $isOrdered = true;
  echo $isOrdered  . ", or in other words, TRUE.";
}

// else false

else {
  $isOrdered = false;
  echo $isOrdered . "FALSE.";
}

?>
