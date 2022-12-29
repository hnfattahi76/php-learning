<?php
// constants
//define('STATUS_PAID','paid');

//echo STATUS_PAID;

// check constants
// 1 : defined
// empty string : undefined

//echo defined('STATUS_PAID');

//const STATUS_PAID = 'paid';
//echo STATUS_PAID;

//echo __FILE__;

// Variable Variables

$foo = 'bar';
$$foo = 'baz';
$$$foo = 'test';
echo $foo . $$foo . $$$foo;
