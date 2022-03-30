<?php
$title = 'Learning PHP Templates';
$description = 'Server Side Includes Are Cool!';
$author = 'Mike Wayne';
?>



<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
<h1><?php echo $description; ?></h1>
<p><?php echo $description; ?></p>
<small> By: <?php echo $author; ?> </small>
</body>
</html>
