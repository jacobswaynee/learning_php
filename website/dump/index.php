<?php

      if(isset($_POST['submit'])){

          $name = $_POST['name'];
          $reason = $_POST['reason'];

          header('Location: '.'index.html?name='.$name);
  }
?>


