<?php
$cars = array(
    array("Benz",23,23),
    array("Toyota",24,45),
    array("Mazda",76,89),
    array("Nisan",23,45),
);

for($row = 0; $row < 4; $row++){

    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo "<li>".$cars[$row][$col]."</li>";

    }
    echo "</ul>";
}
