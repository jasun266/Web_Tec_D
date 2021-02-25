<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];
		$DOB		=$_POST['DOB'];
		$gender		=$_POST['gender'];

		if($username == "" || $name == "" || $email == "" || $password == ""){
			echo "invalid information...please try again!";
		}else{

			if($password == $repass){
				$user = [
							'name'		=>$name, 
							'username'	=>$username, 
							'email'		=>$email, 
							'password'	=>$password,
							'DOB'		=>$DOb,
							'gender'	=>$gender
						];

				$_SESSION['abc'] = $user;

				header('location: login.html');
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>