<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['conpass'];

		if($username == "" || $name == "" || $email == "" || $password == ""){
			echo "invalid information...please try again!";
		}else{

			if($password == $conpass){

				echo "registration success...";
				echo "<a href='login.html'>SignIn </a>";
				header('location: login.html');
			}else{
				echo "password & confirm-type password mismatch...";
			}
		}
	}
?>