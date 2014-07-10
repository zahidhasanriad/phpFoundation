<?php

$input_array = array("FirSt" => 1, "SecOnd" => 2); 

print_r(array_change_key_case($input_array, CASE_UPPER)); // All lower case letter will be upper case

echo "<br />";

$input_array = array("FirSt" => 1, "SecOnd" => 2); 

print_r(array_change_key_case($input_array, CASE_LOWER)); // All upper case letter will be lower case

