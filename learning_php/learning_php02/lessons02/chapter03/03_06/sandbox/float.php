<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>floating point numbers</title>
  </head>
  <body>
    <?php echo $float = 23.4; ?><br />
    <?php echo $float = 65; ?><br />
    <?php echo $float = 5/8; ?><br />
    <?php
    //integers is a numbers with decimals point.

    //echo 4/0;
    ?>
  Round:    <?php echo round($float,2) ; ?> <br />
  Ceiling:  <?php echo ceil($float) ; ?><br />
    Floor:  <?php echo floor($float) ; ?><br />

  </body>
</html>