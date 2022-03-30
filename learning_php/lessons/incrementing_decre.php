<?php

$a = 2;
//this will still be 5
echo 'the value of $a is' . ++$a . '<br/>';
//this will be 6
echo 'now $a is' . $a . '<br/.>';

//exit();

$a = 2;
//this will still be 6
echo 'the value of $a is' . --$a . '<br/>';
//this will be 6
echo 'now $a is' . $a . '<br/>';

$a = 'A';

echo '$a is ' .++$a . '<br/>';

$a =1 ;

$a *= 5;

echo $a;
/**
 * PRACTISE STAGE 1
*write equations that evaluate the following :
*(14 + 82 - 32 / 2) 2
*18 *(3/6 -9) * 10
*5 * (12 / 2 - 8 * 4 + 12 * 6)
*/

//$result = array();

$result[] = (14 + 82 - (32/2) )**2;

$result[] = 18 * ((3 / 6) - 9) *10;

$result[] = ((12 / 2) - 8 * 4 + 12 * 6);

$result[] = (15%12)**2;

$result[] = 3**2 + 5*2;

//echo '<pre>';
//print_r( $result );
//echo '</pre>';

//exit();

/**
 * PRACTICE STAGE 2.
 * write equations that evaluate the following :
 *5 – 56/2 + 1/16 - 4 + 1/16
 * 18 *(3/6 -9) * 10
 */

//solution:

$result = array();

$results[] = 5 -(56/2) + (1/16) -4 + (1/16);

$result[]  = 34 * ((3/6) -9) * 10;

echo '<pre>';
print_r( $result );
echo '</pre>';


