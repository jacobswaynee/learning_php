<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Array Functions</title>
  </head>
  <body>
   <?php
  $numbers = array(8,23,15,42,16,4);
   ?>
  <br />

   count:     <?php echo count($numbers); ?><br />
   min value: <?php echo min($numbers);   ?><br />
   max value: <?php echo max($numbers);   ?><br />

  <br />
   <pre>
   sort :        <?php echo sort($numbers); print_r($numbers); ?>
   reverse sort: <?php echo rsort($numbers); print_r($numbers); ?>
   </pre>
  </body>
</html>
