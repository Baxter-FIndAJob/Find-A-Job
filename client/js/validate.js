// Locals
var firstName = document.getElementById("firstName");
var lastName = document.getElementById("lastName");
var email = document.getElementById("email");
var password = document.getElementById("password");
var retypePassword = document.getElementById("retypePassword");
var passwordLimit = 6;
var normalBorder = "1px solid grey";

// Settings up listeners
firstName.addEventListener("blur", firstName, true);
lastName.addEventListener("blur", lastName, true);
email.addEventListener("blur", email, true);
password.addEventListener("blur", password, true);
retypePassword.addEventListener("blur", retypePassword, true);

// Function
function validate(){
	if(firstName.value == ""){
		firstName.style.border = "1px solid red";
		console.log('pranked');
		return false;
	}else{
		firstName.style.border = normalBorder;
	};

	if(lastName.value == ""){
		lastName.style.border = "1px solid red";
		console.log('pranked');
		return false;
	}else{
		lastName.style.border = normalBorder;
	};

	if(email.value == ""){
		email.style.border = "1px solid red";
		console.log('pranked');
		return false;
	}else{
		email.style.border = normalBorder;
	};

	if(password.value == ""){
		password.style.border = "1px solid red";
		console.log('pranked');
		return false;
	}else{
		password.style.border = normalBorder;
	};

	if(retypePassword.value == ""){
		password.style.border = "1px solid red";
		console.log('pranked');
		return false;
	}else{
		retypePassword.style.border = normalBorder;
	};

	if(retypePassword.value != password){
		retypePassword.style.border = "1px solid red";
		console.log('lol ur mom');
		return false;
	}else{
		retypePassword.style.border = normalBorder;
	};
}