<?php
/**
challenge: Print every number in the fiobnacci sequence without
going over 200.*/
/**
$current = 1;
$previous = 0;
$next = null;
$limit = 200;
$sequence = ',';

while($current < $limit){
    echo $sequence .=$current . ',';
    $next = $current + $previous;
    $previous = $current;
    $current = $next;
}
$sequence = trim($sequence);
$sequence = substr($sequence , 0 , strlen($sequence)-1);

echo $sequence;
*/

//Question01
$a = 2;

while ($a < 15){
    echo $a;
    $a+=2;
}