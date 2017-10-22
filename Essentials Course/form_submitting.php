<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form Submitting</title>
    </head>
    <body>

        <pre>
		<?php
			print_r($_POST);
		?>
	</pre>

	<?php

	?>
	<?php

	?>
	<?php
		// deetect form submission
		if (isset($_POST['submit'])) {
			echo "form was submited <br>";
			if(isset($_POST['username'])){
			$username = $_POST['username'];
			}else{
				$username = "";
			}
			if(isset($_POST['username'])){
				$password = $_POST['password'];
			}else{
				$password = "";
			}
			//set default values using ternary operator.
			// boolean test ? value_if_true : value_if_false
			$username = isset($_POST['username']) ? $_POST['username'] : "";
			$password = isset($_POST['password']) ? $_POST['password'] : "";
		}else{
			$username = "";
			$password = "";
		}
		echo $username ." : ". $password ;
	?>

    </body>
</html>
