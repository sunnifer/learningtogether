<?php

// Write a program, Time.java, that reads in one non-negative integer command-line argument that represents the number of minutes that have elapsed since 12:00pm. Create a string whose value is "am" or "pm". The program then outputs a start time of 12:00pm and a finish time of the start time added to the elapsed time.

// divide $N by 60 to get $h (hours)
// getting am or pm:
// find remainder of $h % 24; if its hours 0-11, its pm; if its 12-23, it's am;
// getting the right hour: $h % 12


// create integer $N command-line argument

$N = $argv[1];

// write Start time: 12:00pm and End Time:

echo "Start time: 12:00pm\n";
echo "End time: ";

// divide $N/60 - call the quotient $h;

$h = $N / 60;
settype($h, "int");

// when $h < 12, echo $h and $ampm = pm;
// when $h >= 12, echo $h % 12

if ($h < 0) {
  echo "Error. No negative values allowed.";
}

else if ($h == 0) {
  echo 12;
}

else if ($h < 12) {
  echo $h;
}

else {
  echo $h % 12;
}

// declare $ampm

$ampm = "pm";

// if $h % 12 = 1 (is odd) $ampm = am; if $h % 12 = 0 (is even) $ampm = pm;

while ($h > 24) {
  $h = $h / 12;
}

if ($h % 2 == 0) {
  $ampm = "pm";
}

else {
  $ampm = "am";
}

// modulus $N % 60 - call the modulus $m; echo ":" . "$m";

$m = $N % 60;

// echo "\n$m"; but add 0 in front of $m if < 10

if ($m < 10) {
  echo ":0" . $m . $ampm . "\n";
}

else {
  echo ":" . $m . $ampm . "\n";
}
?>
