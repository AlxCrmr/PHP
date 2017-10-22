<?php
	require_once('included_function.php');
	require_once('validation_function.php');
	$errors = array();
	$message = "";
	if (isset($_POST['submit'])) {
		// form submitted
			$username =trim($_POST['username']);
			$password =trim($_POST['password']);

	// validations
		$field_required = array("username","password");
		foreach ($field_required as $field) {
		 	$value = trim($_POST[$field]);
		 	if (!has_presence($value)) {
		 		$errors[$field] = $field." can't be blank";
		 	}
		 }
		$field_with_max_length = array("username" => 30,"password" => 8);
		valid_max_length($field_with_max_length);
	if (empty($errors)) {
		if ($username == "kuldip" && $password == "kul") {
			//successful login
			redirected_to('basic.php');
		}else{
			$message = "Username/Password do not match.";
		}
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
        <title>Form with Validation</title>
    </head>
    <body>

        <?php
		echo $message;
	?>
	<?php 	echo form_error($errors); ?>
	<form action="form_with_validation.php" method="post">
		Username : <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>
		Password : <input type="password" name="password"><br>
		<input type="submit" name="submit" value="submit">
	</form>

    </body>
</html>
