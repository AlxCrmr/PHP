<?php
    // Sessions use cookies which use headers.
    // Must start before any HTML output
    // Unless ouput buffering is turned on.
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sessions</title>
    </head>
    <body>

        <?php

            $_SESSION["first_name"] = "Alex";
            $name = $_SESSION["first_name"];
            echo $name;

         ?>



    </body>
</html>
