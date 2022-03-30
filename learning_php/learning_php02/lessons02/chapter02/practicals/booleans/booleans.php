<?php
$var1 = true;
$var2 = false;
?>
$var1 : <?php  echo $var1 ; ?> <br />
$var2 : <?php  echo $var2 ; ?> <br />

Var2: is a booleans <?php echo is_bool($var2); ?> <br />

<?php

$number = 47.98;
if (is_float($number));
echo "it is a float";
