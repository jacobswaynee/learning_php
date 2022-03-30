<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strings</title>
  </head>
  <body>

  <?php

  $first = "hello zimbabwe";
  $second = " and malawi";

  $third = $first;
  $third .= $second;

  echo $third;

  ?>
  <br />
  lowercase: <?php echo strtolower($third);?><br />
  uppercase: <?php echo strtoupper($third);?><br />
  uppercase first:<?php echo ucfirst($third);?><br />
  uppercase words:<?php echo ucwords($third);?><br />
  <br />
  length: <?php echo strlen($third);?><br />
  trim: <?php echo  " A" . trim("B C D"). "E";?><br />
  find: <?php echo strstr($third);?><br />
  replace by string:<?php echo str_replace("quick", "super-fast", $third);?><br />

  <br />
  repeat:<?php echo str_replace($third, 2);?><br />
  make substring: <?php echo substr($third , 5 , 10);?><br />
  find position:<?php echo strpos($third , "brown");?><br />
  find character:<?php echo strchr($third, "z");?><br />

  </body>
  </html>
