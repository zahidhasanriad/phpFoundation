<?php

$keys = array('foo', 5, 10, 'bar');

$values = array_fill_keys($keys, 'banana'); // all the keys will be filled with value banana

print_r($values);