<?php
$color = array('green', 'red', 'yellow');
$fruits = array('avocado', 'apple', 'banana');
$fruitscolor = array_combine($color, $fruits); // here $color is array key and $fruits is array value combined together

print_r($fruitscolor );