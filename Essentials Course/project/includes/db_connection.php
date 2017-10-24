<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "alex");
    define("DB_PASS", "GoX94vuFQDBHECLL");
    define("DB_NAME", "widget_corp");

    // Test if connection occured.
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if(mysqli_connect_errno()) {
        die("Database connection failed: " .
            mysqli_connect_error() .
            "(" . mysqli_connect_errno() . ")"
            );
    }
?>
