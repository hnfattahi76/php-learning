<?php

/* Data Types & Type Casting */

# 4 Scalar Types
    # bool = true / false
    $completed = true;
    # int = 1, 2, 3, 4, -5, -9 (no decimal)
    $score = 75;
    # float = 1.1 , -2.4
    $price = 0.99;
    # string = "Hello" , 'hello'
    $greeting = 'Hello World';

    echo $completed . '<br/>';
    echo $score . '<br/>';
    echo $price . '<br/>';
    echo $greeting . '<br/>';

    echo gettype($price)  . '<br/>';
    echo var_dump($greeting) . '<br/>';

# 5 Compound types
    # array
    $companies = [1, 2, 3, 4];
    print_r($companies);


# Type Juggling - Type Coercion

function sum(int $x, int $y) {
    echo '<br>';
    var_dump($x);
    echo '<br>';
    var_dump($y);
    return $x + $y;
}

$result = sum(1,'2');
echo '<br>';
echo $result;


# Strict Types

//declare(strict_types=1);
function mul(int $x, int $y) {
    return $x + $y;
}
echo '<br>';
echo mul('1',2);

# Type Casting

$number = (int) 1.4;
echo '<br>';
echo $number;

