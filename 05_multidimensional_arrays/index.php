<?php

$siteDetails = array("Arrays", 2018);

$persons = array(
    array(name => "Pete",
    age => 24,
    height => 1.76),
    array(name => "Sarah",
    age => 22,
    height => 1.66),
    array(name => "Luke",
    age => 29,
    height => 1.86)
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
                <?php echo $persons[0][name]; ?>
            </p>

            <h3>My age:</h3>
            <p>
                <?php echo $persons[0][age]; ?>
            </p>

            <h3>My height:</h3>
            <p>
                <?php echo $persons[0][height]; ?>
            </p>
            <hr>
            <h3>My name</h3>
            <p>
                <?php echo $persons[1][name]; ?>
            </p>

            <h3>My age:</h3>
            <p>
                <?php echo $persons[1][age]; ?>
            </p>

            <h3>My height:</h3>
            <p>
                <?php echo $persons[1][height]; ?>
            </p>
            <hr>
            <h3>My name</h3>
            <p>
                <?php echo $persons[2][name]; ?>
            </p>

            <h3>My age:</h3>
            <p>
                <?php echo $persons[2][age]; ?>
            </p>

            <h3>My height:</h3>
            <p>
                <?php echo $persons[2][height]; ?>
            </p>
        </div><!-- end sandbox -->


        <small>&copy;
            <?php echo $siteDetails[1]; ?> -
            <?php echo $persons[0][name] ?></small>
    </div><!-- end wrapper -->


</body>

</html>