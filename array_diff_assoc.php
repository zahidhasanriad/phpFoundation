<?php

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");

$array2 = array("a" => "green", "yellow", "red");

$result = array_diff_assoc($array1, $array2); //[a] => green is in both array so it is eliminated but [0] => red in array 1 is different from [1] => red in array 2 

print_r($result);
