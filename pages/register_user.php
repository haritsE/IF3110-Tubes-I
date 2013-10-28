<!DOCTYPE html>
<html>
<!-- includes -->
<link rel='stylesheet' type='text/css' href='../css/homepage.css' media='screen' />

<script type="text/javascript" src="../js/register_user.js"></script>
<script type="text/javascript" src="../js/general.js"></script>

<head>
	<title>Register User</title>	

</head>
<body>
	<div class = "page_container">
		
		<?php include ("../templates/header.php"); ?>
		<?php include ("../templates/navigation.php"); ?>
		
		<div class = "container">
			<h1>Register User</h1>
			<form action="../controllers/register_user.php" method="post">
				<p>username</p>
				<input id="username" name="username" type="text" onkeyup="checkUsername(this.value)"></input>
				<p id="username_status"></p>
				<p>password</p>
				<input id="password" name="password" type="password"></input>
				<p>confirm password</p>
				<input name="confirm_password" type="password" onkeyup="checkPassword(this.value)"></input>
				<p id="password_status"></p>
				<p>nama lengkap</p>
				<input id="name" name="name" type="text" onkeyup="checkFullName(this.value)"></input>
				<p id="fullname_status"></p>
				<p>email</p>
				<input id="email" name="email" type="text" onkeyup="checkEmailValid(this.value)"></input>
				<p id="email_status"></p>
				<input type = "submit" id="button_register" disabled="true"></button>
			</form>
		</div>
		
		<?php include ("../templates/footer.php"); ?>
	</div>
</body>
</html>