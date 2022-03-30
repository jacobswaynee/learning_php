<?php

$colors = array('red', 'green', 'orange', 'purple');

/**for($i = 0; $i < sizeof($colors) ; $i++ ) {
    echo '<p> . $colors[$i].  </p>';
}*/

foreach ($colors as $color){
    echo "<p>$color</p>";
}

$home_towns = array(
    'Mike' => 'Harare',
    'Allan' => 'JHB',
    'Talent' => 'Chit own',
    'Peter' => 'cape town',
);

foreach ($home_towns as $name => $towns){
    echo "<p> $name lives in $towns </p>";
}