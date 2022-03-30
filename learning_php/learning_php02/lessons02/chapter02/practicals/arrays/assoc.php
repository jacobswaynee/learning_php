<?php
//use word age.!

$age = array("Peter"=>"35", "Benny"=>45);
echo "Peter is ". $age['Peter']. " years old" . "<br />";
echo "Benny is ". $age['Benny']. " years old";

echo "<br />";
$cars = array("Benz", "Mazda", "BMW");
$arrlength = count($cars);
for ($x = 0; $x < $arrlength; $x++){
    echo $cars[$x];
    echo "<br />";
}
