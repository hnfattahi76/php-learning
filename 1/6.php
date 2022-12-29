<?php


// INTEGERS

# unicode

//$unicode = 0x12;

//echo $unicode;

# max integer

//$max = PHP_INT_MAX;
//
//var_dump($max);

# max integer

//$cast = (int) true; // => 1
//$cast = (int) false; // => 0
//$cast = (int) 5.2; // => 5
//$cast = (int) '5.2'; // => 5
//$cast = (int) '6.2SSSS'; // => 5
//$cast = (int) null; // => 0
//
//var_dump($cast);
//echo '<br>';
//var_dump(is_integer($cast));

# underscore

//$underScore = 1_000; // => 1000
$underScore = (int) '1_000'; // => 1

echo $underScore;