// Locals
var passwordLimit = 6;
var normalBorder = "1px solid #b8bbbb";
var selectedError;
var selectedForum = "none";
var signupbtn = document.getElementById("signup_formOption");
	signupform = document.getElementById("signup_form");
var loginbtn = document.getElementById("login_formOption");
	loginform = document.getElementById("login_form");
var resetpwdbtn = document.getElementById("resetpwdbtn");
	var resetform = document.getElementById("reset_form");

// Function
	function changeTab(type){
		if(type == "signup_view"){
			signupbtn.classList.add("active");	
			loginbtn.classList.remove("active");

			loginform.setAttribute("hidden","true");
			resetform.setAttribute("hidden","true");
			signup_form.removeAttribute("hidden");
		};
		if(type == "login_view"){
			loginbtn.classList.add("active");	
			signupbtn.classList.remove("active");

			signupform.setAttribute("hidden","true");
			resetform.setAttribute("hidden","true");
			loginform.removeAttribute("hidden");
		};
		if(type == "reset_view"){
			signupform.setAttribute("hidden","true");
			loginform.setAttribute("hidden","true");
			resetform.removeAttribute("hidden");
		};
	};

	function validate(type){
		if(type == "signup"){

			var firstName = document.getElementById("signup_firstNameInput");
			var lastName = document.getElementById("signup_lastNameInput");
			var email = document.getElementById("signup_emailInput");
			var password = document.getElementById("signup_passwordInput");
			var retypePassword = document.getElementById("signup_confirmPassword");

			if(firstName.value == ""){
			firstName.style.border = "1px solid red";
			return false;
			}else{
				firstName.style.border = normalBorder;
			};

			if(lastName.value == ""){
				lastName.style.border = "1px solid red";
				return false;
			}else{
				lastName.style.border = normalBorder;
			};

			if(email.value == ""){
				email.style.border = "1px solid red";
				return false;
			}else{
				email.style.border = normalBorder;
			};

			if(password.value == ""){
				password.style.border = "1px solid red";
				return false;
			}else{
				password.style.border = normalBorder;
			};

			if(retypePassword.value == ""){
				retypePassword.style.border = "1px solid red";
				return false;
			}else{
				retypePassword.style.border = normalBorder;
			};

			if(retypePassword.value != password.value){
				retypePassword.style.border = "1px solid red";
				return false;
			}else{
				retypePassword.style.border = normalBorder;
			};
		};
		if(type == "login"){

			var email = document.getElementById("login_emailInput");
			var password = document.getElementById("login_passwordInput");

			if(email.value == ""){
				email.style.border = "1px solid red";
				return false;
			}else{
				email.style.border = normalBorder;
			};
			if(password.value == ""){
				password.style.border = "1px solid red";
				return false;
			}else{
				password.style.border = normalBorder;
			};
		};
		if(type == "resetEmail"){
			var email = document.getElementById("reset_emailInput");

			if(email.value == ""){
				email.style.border = "1px solid red";
				return false;
			};
		};
		if(type == "resetPassword"){
			var code = document.getElementById("reset_codeInput");
			var password = document.getElementById("reset_newPasswordInput");
			var retypePassword = document.getElementById("reset_passwordConfirmationInput");

			if(code.value == ""){
				code.style.border = "1px solid red";
				return false;
			}else{
				code.style.border = normalBorder;
			};

			if(password.value == ""){
				password.style.border = "1px solid red";
				return false;
			}else{
				password.style.border = normalBorder;
			};

			if(retypePassword.value == ""){
				retypePassword.style.border = "1px solid red";
				return false;
			}else{
				retypePassword.style.border = normalBorder;
			};

			if(retypePassword.value != password.value){
				retypePassword.style.border = "1px solid red";
				return false;
			}else{
				retypePassword.style.border = normalBorder;
			};
		};
	};