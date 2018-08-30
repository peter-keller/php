<?php

$siteDetails = array("Arrays", 2018);

$personalDetails = array(
    name => "Pete",
    age => 24,
    height => 1.76
);

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo TITLE; ?>
    </title>
    <link href="../assets/styles.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">


        <h1>Advanced variables:
            <small>
                <?php echo $siteDetails[0]; ?>
            </small>
        </h1>
        <hr>


        <div class="sandbox">
            <h3>My name</h3>
            <p>
                <?php echo $personalDetails[name]; ?>
            </p>

            <h3>My age:</h3>
            <p>
                <?php echo $personalDetails[age]; ?>
            </p>

            <h3>My height:</h3>
            <p>
                <?php echo $personalDetails[height]; ?>
            </p>
        </div><!-- end sandbox -->

        <small>&copy;
            <?php echo $siteDetails[1]; ?> -
            <?php echo $personalDetails[name] ?></small>
    </div><!-- end wrapper -->


</body>

</html>