<?php
/*Arrays: its a collection of data that acts as key-values pairs.

we have type of arrays :
indexable arrays uses  number keys.
associative arrays uses strings keys

example. */


// indexable array

$colors = array ('red' , 'blue','green');

print_r ($colors);

echo '<p>' . $colors[1] . '</P>';

$colors[] = 'yellow';

print_r ($colors);

//associative arrays

/*$home_towns = array(
    'Mike' => 'Harare, HRE',
    'Batsirai' => 'Johhansburg, JBG',
    'Allan'   => 'Durban, KZN',
);
 echo '<pre>';
print_r ( $home_towns );

echo '</pre>';

echo '<p>' . $home_towns['Allan'] . '</p>';*/

$brothers = array(
    'John' => array(
        'age' => 67,
        'job' => 'cooker',
        'state' => 'Harare',
    ),

    'Mike' => array(
        'age' => 77,
        'job' => 'police',
        'state' => 'Durban',
    ),
);

echo '<pre>';
print_r($brothers);
echo '</pre>';