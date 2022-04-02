<?php
$name = "Mike"; //heading
$city = "Harare";
$movie = "Lord of the rings"; //italics
$friend = "Allan"; //bold
$candy = "Patch kids";

?>

<h1>Hello <?php echo $name;?>!</h1>

<?php

 echo "<p>So glad you can join us in $city today!
You will be <b>$friend</b>'s guide
as you do a range of activities.</p>\n\n";

echo "<p> You will end your day by seeing <i>$movie</i> at 7:00PM. 
Make sure to bring the money you've been provided. The movie ticket is \$12. 
$friend's favourate candy is $candy, so grab some of those too.</p>\n\n";

echo "<p>...and of-course, \"May force be with you!\"</p>";

?>