<?php
	require_once('included_functions.php');
	if (isset($_POST['submit'])) {
		// form submitted
			$username = $_POST['username'];
			$password = $_POST['password'];
		if ($username == "AlxCrmr" && $password == "password") {
			//successful error
			redirected_to('basic.php');
		}else{
			$message = "There were some errors.";
		}

	}else{
		$username = "";
		$message = "Please log in";
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form Single</title>
    </head>
    <body>

        <?php
		echo $message;
	?>
	<form action="form_single.php" method="post">
		Username : <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>
		Password : <input type="password" name="password"><br>
		<input type="submit" name="submit" value="submit">
	</form>

    </body>
</html>
