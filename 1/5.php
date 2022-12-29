<?php

# BOOLEAN

$isCompleted = true;

// falsy
# integers => 0, -0 = false
# floats => 0.0, -0.0 = false
# string => '', '0' = false
# array => [] = false
# null = false

if ($isCompleted) {
    echo 'success';
}else {
    echo 'fail';
}
