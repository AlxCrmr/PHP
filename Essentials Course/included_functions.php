<?php 

	function hello($name){
		return "hello".$name;
	}
	function redirected_to($new_location){
		header("Location: " .$new_location);
		exit;
	}
?>
