<?php

//built a function in php
echo date('F , d , Y');

function is_palidrome( $string){
    $string = strtolower( $string);
    $string = str_replace ( ' ', ' ',);
    $pal_check = ( $string == strrev ($string));
    return $pal_check;
}
$check_string = 'race car';
if (is_palidrome('wow')) {
    echo "<p>$check_string is a parindrome</p>";
}