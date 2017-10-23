<?php
    // REMEMBER: Setting cookies must be before *any* HTML output
    // Unless output buffering is on.

    $name = "test";
    $value = "Hello";
    $expire = time() + (60*60*24*7); //  Add with seconds, this is a week of seconds
    //This is going out to the user
    //setcookie($name, $value, $expire);

    //setcookie($name);
    //setcookie($name, null, $expire);
    //setcookie($name, $value, time() - 3600);

    // Kevin's recommendation for unsetting
    setcookie($name, null, time() - 3600);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cookies</title>
    </head>
    <body>


            <?php
            // This is coming in from the user
            // Shorthand
            $test = isset($_COOKIE['test']) ? $_COOKIE['test'] : " ";
            echo $test;


            // if (isset( $_COOKIE['test'])) {
            //     $test = $_COOKIE['test'];
            // } else {
            //     $test = "";
            // }
            //     echo $test;
             ?>



    </body>
</html>
