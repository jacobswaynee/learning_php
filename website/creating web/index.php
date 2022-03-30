<?php
if (! empty($_GET) ) var_dump($_GET);

?>

<h1>house</h1>
<form name="conact" method="GET">
    <div>
        <label for="Name">Name :</label> <input type="text" name="name" placeholder="Your Name"/>
        <label for="Name">Email :</label> <input type="text" name="email" placeholder="Your email"/>
    </div>

    <div>
        <p>Reason For Contact</p>
        <input type="radio" name="reason" id="costult" value="consult"> <label for="costult">Consult</label>
        <input type="radio" name="reason" id="question" value="question"> <label for="question">Question </label>
        <input type="radio" name="reason" id="hello" value="hello"> <label for="hello">Hello say </label>
    </div>


</form>
