<?php
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Null submission";
		}else{

			if(strlen($username) <2 ||strlen($password) <8 ){
				echo "worng Input";
			}else{
				echo "welcome...";
			}
		}
	}
?>