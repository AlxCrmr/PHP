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
    $id = 11;

    // 2. Perform database query
	$query  = "DELETE FROM subjects ";
	$query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";
    // echo $query;

    $result = mysqli_query($connection, $query);

    if ($result && mysqli_affected_rows($connection) == 1) {
        // Success
        //redirect_to("somepage.php");
        echo "Success!";
    }else {
        // Failure
        // $message = "Subject delete failed";
        die("Database query failed. <br/>" . mysqli_error($connection));
    }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Databases Update</title>
    </head>
    <body>


    </body>
</html>


<?php
    // 5. Close database connection
    mysqli_close($connection);

 ?>
