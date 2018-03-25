<?php
	require("server/jobquery_db.php");


	require("_includes/header.php");
?>
<body>
	<link href="client/css/userforum.css?v=<?php echo time();?>" type="text/css" rel="stylesheet">
	<div class="page_holder">
		<div class="form_holder" method="post">
			<form class="resetPassword_container" id="reset_form" onsubmit="return validate('resetPassword');" action="server/resetpassword.php" method="POST">
				<div class="form_container code_holder">
					<b>REQUEST KEY</b>
					<input id="reset_codeInput" name="reset_code" maxlength="255" type="text" />
				</div>
				<div class="form_container email_holder">
					<b>CONFIRM EMAIL</b>
					<input id="reset_emailInput" name="reset_email" maxlength="255" type="text" />
				</div>
				<div class="form_container password_holder">
					<b>NEW PASSWORD</b>
					<input id="reset_newPasswordInput" name="reset_password" maxlength="255" type="password" />
				</div>
				<div class="form_container passwordConfirm_holder">
					<b>CONFIRM PASSWORD</b>
					<input id="reset_passwordConfirmationInput" name="reset_passwordConfirmation" maxlength="255" type="password" />
				</div>
				<br>
				<br>
				<button type="submit" name="updatepassword" class="button">Change Password</button>
			</form>
		</div>
	</div>
	<script src="client/js/validate.js?v=<?php echo time();?>" type="text/javascript"></script>
	<?php require('_includes/footer.php'); ?>
</body>