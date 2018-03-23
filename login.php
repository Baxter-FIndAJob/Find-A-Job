<?php
	require("server/jobquery_db.php");



	require("_includes/header.php");
?>

	<div id="page_holder" class="page_holder">
		<div class="form_holder" method="post">
			<form class="signup_container active_selection" onsubmit="return validate();">
				<input id="firstName" placeholder="enter first name" / type="Text">
				<input id="lastName" placeholder="enter last name" / type="Text">
				<input id="email" placeholder="enter email" / type="Email">
				<input id="password" placeholder="enter password" / type="Password">
				<input id="retypePassword" placeholder="retype password" / type="Password">
				<br>
				<button type="submit" value="register" class="button">Login</button>
			</form>
		</div>
	</div>


<?php require('_includes/footer.php'); ?>