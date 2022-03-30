<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
  </head>
  <body>

<!--
Array is a list of items
 there 3 types of arrays
 indexable array => ia  array with anumeric key
 associative array => it use named key that you are assigned to them
 miltidimencial => is any array that containone or more items
 -->
  <?php

  $numbers = array(4 , 3, 5, 8, 55, 87);
  //echo $numbers[3];

  ?>

  <?php $mixed = array(8 , "mike" , "allan", "kundai" ,"devie", array("mango" , "apple")); ?>
 <?php echo $mixed[3]; ?>
  <pre>
  <?php echo  print_r($mixed); ?>
  </pre>

  </body>
</html>