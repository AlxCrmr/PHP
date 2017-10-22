<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Validations</title>
    </head>
    <body>

        <?php

        // PRESENCE
        $value = "X";
        if(!isset($value) || empty($value)) {
            echo "Validation failed. <br/>";
        }
        // STRING LENGTH
        $value = "abcs";
        $min = 3;
        $max = 6;
        if(strlen($value) < $min) {
            echo "Validation failed. <br/>";
        }
        if(strlen($value) > $max) {
            echo "Validation failed. <br/>";
        }

        // TYPE
        $value = "1";
        if(!is_string($value)) {
            echo "Validation failed. <br/>";
        }

        // INCLUSION IN A SET

        $value = "1";
        $set = array("1", "2", "3", "4");
        if(!in_array($value, $set)) {
            echo "Validation failed. <br/>";
        }

        // UNIQUENESS
        // Uses a database to check uniqueness

        // FORMAT
        if(preg_match("/PHP/", "PHP is fun.")) {
            echo "A match was found. <br/>";
        } else {
            echo "A match was not found. <br/>";
        }

        $value = "nobody@nowhere.com";
        if(!preg_match("/@/", $value)) {
            echo "Validation failed. <br/>";
        }

        if(strpos($value, "@") === false) {
            echo "Validation failed. <br/>";
        }




         ?>

    </body>
</html>
