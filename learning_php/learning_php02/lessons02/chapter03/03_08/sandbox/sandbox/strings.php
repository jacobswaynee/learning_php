<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strings</title>
   </head>
   <body>
   <?php

   echo "hello world<br />";
   echo 'hello world <br />';

   $greeting = "hello";
   $target = 'world';
   $phrase = $greeting . " " . $target;
   echo $phrase;
   ?>
   <br />
   <?php
   echo "$phrase again<br />";

   ?>
    </body>
</html>
