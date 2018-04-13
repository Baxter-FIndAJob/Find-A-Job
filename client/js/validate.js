// Locals
var passwordLimit = 6;
var normalBorder = "1px solid #b8bbbb";
var errorBorder = "1px solid red";
var errorBackground = "#ffeded";
var normalBackground = "none";
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


	function checkField(fieldId){
		var fieldNode = document.getElementById(fieldId);
		
		if(fieldNode.value == ""){
			fieldNode.style.background = errorBackground;
			return false;
		}else{
			fieldNode.style.background = normalBackground;
			return fieldNode.value;
		};
	}


	function checkForm(fields, formName){
		var goAhead = true;
		var req = {};

		for(var i=0; i < fields.length; i++){
			var fieldName = fields[i];

			var fieldValue = checkField(formName + '_' + fieldName + 'Input');
			
			req[fieldName] = fieldValue;
			
			if(!fieldValue) goAhead = false;
		}


		return (goAhead) ? req : false;
	}




	function validate(type){



		// VALIDATE SIGNUP FORM
		if(type == "signup"){
		
			var fields = ['firstName', 'lastName', 'email', 'password', 'confirmPassword'];
			var req = checkForm(fields, 'signup');

			if(!req) return false;


			if(req.password  != req.confirmPassword) {
				document.getElementById("signup_confirmPasswordInput").style.background = errorBackground;
				return false;
			}
			else {
				document.getElementById("signup_confirmPasswordInput").style.background = normalBackground;
			}

			var successHandler = function(){
				$('#error_container').html('');
				$('#signup_form').hide();
				$('#success_container').html("Welcome to JobQuery.org!");	
			}

		};


		// VALIDATE LOGIN
		if(type == "login"){

			var req = checkForm(['email', 'password'], 'login');
			if(!req) return false;

			var successHandler = function(){
				window.location = "http://google.com";
			}

		};


		// VALIDATE RESET EMAIL
		if(type == "resetEmail"){
			var req = checkForm(['newPassword', 'passwordConfirmation'], 'reset');
			if(!req) return false;
		};


		// VALIDATE RESET PASSWORD
		if(type == "resetPassword"){
	
			var req = checkForm(["code","email","newPassword","passwordConfirmation"], 'reset');
			if(!req) return false;

			if(req.password != req.retypePassword){
				document.getElementById("reset_passwordConfirmationInput").style.background = errorBackground;
				return false;
			}else{
				document.getElementById("reset_passwordConfirmationInput").style.background = normalBackground;
			};
		};


		// ALL GOOD!!!

		var action = type;
		var apiPayload = req;


		console.log("This is what we want to send to the server:");

		console.log(apiPayload);

		console.log(action);


		submitDataToServer(action, apiPayload, successHandler)

		return false;
	};


	function submitDataToServer(action, apiPayload, successHandler){
		var apiRequest = {
			action : action,
			request_payload: apiPayload
		}

		$.ajax({
			url: '',
			type: 'POST',
			contentType:'application/json',
			data: JSON.stringify(apiRequest),
			dataType:'json',

			success: function(data){
				//On ajax success do this
				console.log(data);

				if(data.status == "Error"){
					$('#error_container').html(data.message);
				}

				if(data.status == "Success!"){
					successHandler(data);
				}

			},

			error: function(xhr, ajaxOptions, thrownError) {
				//On error do this
				if (xhr.status == 200) {
			    	alert(ajaxOptions);
				}
				else {
			    	alert(xhr.status);
			    	alert(thrownError);
				}
			}
		});
	}




