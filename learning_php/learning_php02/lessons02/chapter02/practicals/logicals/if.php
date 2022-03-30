<?php
$new_user = true;
if ($new_user){
    echo "<h1>Facebook</h1>";
    echo "<p>Welcome home</p>";
}
?>

<br />

<?php

$t = date("H");
if ($t < "20"){
    echo "have a nice day!";
}
?>



<br />


<?php

$numarator = 20;
$denominator = 4;
if ($denominator > 0){
    $result = $numarator / $denominator;
    echo "result:{$result}";
}
