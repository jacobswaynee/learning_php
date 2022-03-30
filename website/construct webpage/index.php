<?php
if (isset($_POST ['submit'])){
    $name = $_POST['name'];
    $email =$_POST['email'];
    $cell_number = $_POST['cell number'];
    $Date = $_POST['date'];

    header('Location:' . 'index.html?name'.$name);
}
?>
<?php include ('index.html')?>
