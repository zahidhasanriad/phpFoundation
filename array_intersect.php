<?php

$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");

$result = array_intersect($array1, $array2);// intersection of arrays based on values

print_r($result);