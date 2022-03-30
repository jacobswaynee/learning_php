<?php
$result1 = true;
$result2 = false;

?>
Result1 : <?php echo $result1 ?> <br />
Result2 : <?php echo $result2 ?>

Result2 is a boolean <?php echo is_bool($result2); ?> <br />

<?php
$number = 3.544;
if (is_float($number));
echo "it is a float.";

