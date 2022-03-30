<?php

$a = 10 > 3;
$b = 10 != 10;
$c = $a && $b;
$d = $a || $b;
$e = $b && $c;
$f = $a || $d;

$logic = array ( $a , $b , $c , $d, $e , $f);

/*echo '<pre>';
print_r ( $logic );
echo '</pre>';*/

echo '<pre>';
var_dump ( $logic );
echo '</pre>';

$c = $a and $b;

var_dump ($c);