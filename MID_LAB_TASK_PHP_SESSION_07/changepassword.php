<?php
	session_start();

	if(isset($_POST['submit'])){

		$Cpassword =$_POST['Cpassword'];
		$Rpassword =$_POST['Rpassword'];
		$Npasspord =$_POST['Npasspord'];

			if($password == $repass){
				$user = [
							'password'	=>$password
						];

				$_SESSION['abc'] = $user;

				header('location: login.html');
			}else{
				echo "password & re-type password mismatch...";
			}
		
	}
?>