<?php define("TITLE", "Defining constants") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php echo TITLE; ?>
    </title>
</head>


<body>
    <?php
    $name = "Peter";
    $age = 24;
    $height = 1.76;
     print("Hi, my name is $name, I am $age years old and $height cm tall."); 
    ?>
</body>

</html>