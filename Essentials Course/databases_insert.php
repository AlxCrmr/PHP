<?php

    // 1. Create a database connection
    $dbhost = "localhost";
    $dbuser = "alex";
    $dbpass = "GoX94vuFQDBHECLL";
    $dbname = "widget_corp";

    // Test if connection occured.
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(mysqli_connect_errno()) {
        die("Database connection failed: " .
            mysqli_connect_error() .
            "(" . mysqli_connect_errno() . ")"
            );
    }

// Often these are form values in $_POST
$menu_name = "Today's Widget Trivia";
$position = 4;
$visible = 1;

// Escape all strings
$menu_name = mysqli_real_escape_string($connection, $menu_name);

    // 2. Perform database query
    $query = "INSERT INTO subjects (menu_name, position, visible)
                    VALUES ('{$menu_name}', {$position}, {$visible})";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Success
        //redirect_to("somepage.php");
        echo "Success!";
    }else {
        // Failure
        // $message = "Subject creation failed";
        die("Database query failed. " . mysqli_error($connection));
    }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Databases Insert</title>
    </head>
    <body>


    </body>
</html>


<?php
    // 5. Close database connection
    mysqli_close($connection);

 ?>
