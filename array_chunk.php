<?php

$input_array = array('a', 'b', 'c', 'd', 'e');

print_r(array_chunk($input_array, 2)); // Chunks an array into arrays with size 2 and keys will be repeated.

print_r(array_chunk($input_array, 2, true)); //Chunks an array into arrays with size 2 and for TRUE keys will be preserved.
