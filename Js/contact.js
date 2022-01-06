function isUserNameValid(input)
{
	var isValid=true;
	/*check for contain letter only and must be between 6 to 20 character*/
	var usernamePattern=/^[a-zA-Z]{6,20}$/;
	if (!usernamePattern.test(input.value))
	{
		isValid=false;	
		
	}
	return isValid;
}
function validateEmail(input) {
    var isValid=true;

    var Email = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(!Email.test(input.value)){
        isValid=false;
    }
    return isValid;
}
function isFormDataValid()
{
	var isValid=false;
	var username=document.querySelector("#username");
	var email =document.querySelector('#email');
    var feedbackname =document.querySelector('.feedbackname');
    var feedbackemail =document.querySelector('.feedbackemail');

    

    
	if (isUserNameValid(username))
	{
		feedbackname.style.display="block";
		feedbackname.textContent="username is valid";
	}
    else{
		//feedback help info
		feedbackname.style.display="block";
		feedbackname.textContent="Username must contain letters only & between 6 and 20 characters long";
		isValid=false;
        
	}
    if(validateEmail(email)){
        feedbackemail.style.display="block";
		feedbackemail.textContent="Email is valid";
    }
    else{
        feedbackemail.style.display="block";
		feedbackemail.textContent="Invalid Email";
		isValid=false;
    }
    return isValid;
	

    
	
}
