<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Validation Error's</title>
    </head>
    <body>
        <?php
		require_once('validation_functions.php');
		$errors = array();
		$username = trim("AlxCrmr");
		if (!has_presence($username)) {
			$errors['value'] = "Usename can't be blank";
		}
	?>

	<?php

		echo form_error($errors);

	?>
    </body>
</html>
