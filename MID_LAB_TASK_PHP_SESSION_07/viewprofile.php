<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<table border="4" width="90%">
		<tr height="100px">
			<td colspan="3">
				<img src="logo.png"width="20%" height="20%">
				<table align="right" >
					  <td>
					  Logged in as <a href="logindas.html" > Bod </a>|
					  <a href="login.html"> Logout</a>|
					 </td>
				</table>
			</td>
		</tr>
		
		<tr height="300px">
			<td colspan="2" align="left" width="30%">
				<h2>Account</h2>
				<ul><a href="logindas.html"><li>Dashboard</li></a>
				<a href="viewprofile.html"><li>View Profile</li></a>
				<a href="editprofile.html"> <li>Edit Profile</li></a>
				<a href="Profilepicture.html"><li>Change Profile Picture</li></a>
				<a href="Changepassword.html"> <li>Change Password</li></a>
				<a href="login.html"><li> Logout </li></a></ul>
			</td>
			<td>
			   Name: 				<?php  session_start(); $user = $_SESSION['abc']; echo $user['name'];?><br>
			   Email:				<?php   echo $user['email'];?><br>
			   Gender:				<?php   echo $user['gender'];?><br>
			   Date of Birth:		<?php   echo $user['DOB'];?><br>
			</td>
		</tr>
		<tr aline="center"r height="50px">
					<td colspan="3" align="center">
				Copyright
			</td>
		</tr>
	</table>		
</body>
</html>
