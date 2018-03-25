<?php
	require("server/jobquery_db.php");


	require("_includes/header.php");
?>
	<body>
	<link href="client/css/userforum.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">
	<div id="page_holder" class="page_holder">
		<div class="form_holder" method="post">
			<div class="options_container">
				<button class="options signup active" id="signup_formOption" onclick="changeTab('signup_view');" >Sign up</button>
				<button class="options login" id="login_formOption" onclick="changeTab('login_view');">Login</button>
			</div>
			<form class="signup_container" id="signup_form" onsubmit="return validate('signup');" action="server/signup.php" method="POST">
				<div class="form_container firstname_holder">
					<b>FIRST NAME</b>
					<input id="signup_firstNameInput" name="signup_firstName" maxlength="255" type="text" />
				</div>
				<div class="form_container lastname_holder">
					<b>LAST NAME</b>
					<input id="signup_lastNameInput" name="signup_lastName" maxlength="255" type="text">
				</div>
				<div class="form_container email_holder">
					<b>EMAIL</b>
					<input id="signup_emailInput" name="signup_email" maxlength="255" type="text" />
				</div>
				<div class="form_container password_holder">
					<b>PASSWORD</b>
					<input id="signup_passwordInput" name="signup_password" maxlength="255" type="Password" />
				</div>
				<div class="form_container passwordconfirmation_holder">
					<b>CONFIRM PASSWORD</b>
					<input id="signup_confirmPassword" maxlength="255" type="password" />
				</div>
				<br>
				<br>
				<b>By pressing Sign up you agree to our Terms of Use and Privacy Policy.</b><br><br>
				<button type="submit" name="register" class="button">Sign up</button><br><br>
			</form>
			<form class="login_container" id="login_form" onsubmit="return validate('login');" hidden="true" action="server/login.php" method="POST">
				<div class="form_container email_holder">
					<b>EMAIL</b>
					<input id="login_emailInput" name="login_email" maxlength="255" type="text" />
				</div>
				<div class="form_container password_holder">
					<b>PASSWORD</b>
					<input id="login_passwordInput" name="login_password" maxlength="255" type="password" />
					<b id="resetpwdbtn" class="forgot_password" onclick="changeTab('reset_view');">FORGOT PASSWORD?</b>
				</div>
				<br>
				<br>
				<button type="submit" name="login" class="button">Login</button>
			</form>
			<form class="resetPassword_container" id="reset_form" onsubmit="return validate('resetEmail');" hidden="true" action="server/forgotpassword.php" method="POST">
				<div class="form_container resetPassword_holder">
					<div class="form_container email_holder">
						<b>EMAIL</b>
						<input id="reset_emailInput" name="reset_email" maxlength="255" type="text" placeholder="example@gmail.com" />
					</div>
				</div>
				<br>
				<br>
				<b>Make sure the email is valid so you're able to receive the reset password message.</b><br><br>
				<button type="submit" name="forgotpassword" class="button">Request Change</button>
			</form>
		</div>
	</div>


<?php require('_includes/footer.php'); ?>
<script src="client/js/validate.js?v=<?php echo time();?>" type="text/javascript"></script>
<script src="client/js/autocheck.js?v=<?php echo time();?>" type="text/javascript"></script>
</body>