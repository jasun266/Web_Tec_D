<?php
	
	if(isset($_POST['submit']))
	{
		$currentPass = $_POST['Cpassword'];
		$newPass = $_POST['Npassword'];
		$rePass = $_POST['Npassword'];

		if($currentPass === $newPass){
			echo "New Password should not be same as the Current Password";
		}
		if($newPass != $rePass)){
			echo "Your new password and Retype password should be same.";
		}
	}
	
?>