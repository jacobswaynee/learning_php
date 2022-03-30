<?php

$t = date("H");
if ($t < 20){
    echo "have a nice day";
}
?>

<br />

<?php

$new_user = true;
if ($new_user){
    echo "<h1>Facebook</h1>";
    echo "<p>We are glad you join use today</p>";
}

?>
<br />

<?php

$numarator = 20;
$denomunator = 4;
if ($denomunator > 0){
    $result = $numarator / $denomunator;
    echo "Result {$result}";
}

?>
<br />

<?php

$mike = 100;
$allan = 20;
if ($allan > 10){
    $result = $mike / $allan;
    echo  "Result {$result}";
}
