<?php

$a = 5;
if ($a % 2 ==0){
    echo "<p>is even .</p>";
}else {
    echo "<p>$a is odd.</p>";
}

$a = 15;
$b = 5;

echo ($a % $b == 0) ?"<p> $b is factor of $a</p>":
    "<p>$b is not a factor os $a</p>p>";

echo -$a % 2;