<?php
 $count = 0;

 while ($count < 10) {
    echo $count . ", ";
    $count++; //increment by 1.
}
?>
<br />
<?php
 for ($count = 0; $count <= 10 ; $count++){
    echo $count . ", ";
}
?>
<br />
<?php
 $number = 0;

 while ($number <= 20){
     if ($number == 5){
         echo "FIVE, ";
     } else {
         echo $number . "; ";
     }
     $number++;
 }
