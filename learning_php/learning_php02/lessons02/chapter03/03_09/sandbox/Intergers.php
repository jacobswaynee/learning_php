<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Integers</title>
  </head>
  <body>
  <?php
  //integer: is number without any decimal apart

  $var1 =3;
  $var2 =4;

  //check if it is true
  //var_dump(is_int($var1));
  //to check if it is false
  //echo "<br />";

  ?>
  Basic Math: <?php echo ((1 + 2 + $var1 )*  $var2) /2 - 5; ?><br />
  <br />

  Absolute value:  <?php echo abs(0 - 300); ?><br />
  Exponential:     <?php echo pow(2,8);     ?><br />
  Square root:     <?php echo sqrt(100);    ?><br />
  Modulo:          <?php echo fmod(20,7);  ?><br />
  Random:          <?php echo rand();            ?><br />
  Random (min,max):<?php echo rand(1,10);        ?><br />

  <br />
  += :<?php $var2 +=4 ; echo $var2; ?><br />
  *= :<?php $var2 -=4 ; echo $var2; ?><br />
  -= :<?php $var2 *=3 ; echo $var2; ?><br />
  /= :<?php $var2 /=4 ; echo $var2; ?><br />

  </body>
</html>