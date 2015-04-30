<?php

// ref: http://www.cs.princeton.edu/courses/archive/spr15/cos126/assignments/hello.html

// #1: Make a program that takes four names as command-line //arguments and prints out a proper sentence with the names in the //reverse of the order given.

//Example:
//Command Line - HiFour Alice Bob Carol Dave
//Outputs  - Hi Dave, Carol, Bob, and Alice.

$name = $argv;

echo "<br/> Hi ";

for ($i = 1; $i < count($name) - 1; $i++) {
  echo $name[$i] . ", ";
}

echo "and " . $name[count($name)-1] . ".\n";

echo "Hi ";

for ($i = count($name)-1; $i > 1; $i--) {
  echo $name[$i] . ", ";
}

echo "and " . $name[1] . ".\n";

?>
