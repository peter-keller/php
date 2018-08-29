<?php
	
	define("TITLE", "Variables and constants");
	
    $name = "Peter";
    $fav_colour = "blue";
    $birth_year = 1994;

    date_default_timezone_set("Europe/London");
    
    $today = date('F j, Y');
    $this_year = date('Y');

    $my_age = ($this_year - $birth_year);

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
                <?php echo TITLE; ?>
            </small>
        </h1>
        <hr>


        <div class="sandbox">
            <h3>Today's Date:</h3>
            <p>
                <?php echo $today; ?>
            </p>

            <h3>My Name:</h3>
            <p>
                <?php echo $name; ?>
            </p>

            <h3>My Favourite Colour:</h3>
            <p>
                <?php echo $fav_colour; ?>
            </p>

            <h3>My Age:</h3>
            <p>
                <?php echo $my_age; ?>
            </p>
        </div><!-- end sandbox -->

        <small>&copy;
            <?php echo $this_year ?> -
            <?php echo $name ?></small>
    </div><!-- end wrapper -->


</body>

</html>