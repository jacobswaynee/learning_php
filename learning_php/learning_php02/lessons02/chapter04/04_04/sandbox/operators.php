<?php

echo "<h1>logical operators</h1>";
//equal ==
//identical ===
//and &&
//not equal !=
//not identical !==
//compare >< >= => <>
//not !
//or ||

$a = 4;
$b = 3;
$c =20;
$d = 1;

if (($a > $b) && ($c > $d)){
    echo "a is larger than b AND <br />";
    echo "c is larger than d";
}


if (($a > $b) || ($c > $d)){
    echo "a is larger than b OR <br />";
    echo "c is larger than d";
}


if (($a >= $b) || ($c >= $d)){
    echo "a is larger than b  <br />";
    echo "c is larger than d";
}
?>
<br />
<?php
$e = 100;
if (!isset($e)){
    $e = 200;
}
echo $e;

