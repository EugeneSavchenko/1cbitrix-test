const form 		  = document.getElementById('form');
const username    = document.getElementById('username');
const phone   	  = document.getElementById('phone');
const email   	  = document.getElementById('email');
const password 	  = document.getElementById('password');
const passwordTwo = document.getElementById('passwordTwo');

form.addEventListener('submit', (e) => {
	e.preventDefault();

	checkInputs();
});

function checkInputs() {
	// get the values from inputs
	const usernameValue    = username.value.trim();
	const phoneValue 	   = phone.value.trim();
	const emailValue 	   = email.value.trim();
	const passwordValue    = password.value.trim();
	const passwordTwoValue = passwordTwo.value.trim();

	if(usernameValue === '') {
		// show  error
		// add error class
		setErrorFor(username, 'Username cannot be blank');
	} else {
		// add success class
		setSuccessFor(username);
	}

	if(phoneValue === '') {
		setErrorFor(phone, 'Phone cannot be blank');
	} else if (!isCorrectPhone(phoneValue)) {
		setErrorFor(phone, 'Phone is not valid');
	} else {
		setSuccessFor(phone);
	}

	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Email is not valid');
	} else {
		setSuccessFor(email);
	}

	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}

	if(passwordTwoValue === '') {
		setErrorFor(passwordTwo, 'Password Two cannot be blank');
	} else if (passwordValue !== passwordTwoValue) {
		setErrorFor(passwordTwo, 'Passwords does not match');
	} else {
		setSuccessFor(passwordTwo);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement; // .form-control
	const small = formControl.querySelector('small');

	//add error message inside small
	small.innerText = message;

	//add error class
	formControl.className = 'form-control error';
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function isEmail(email) {
	return /^[\w.-]+@[\w.-]+\.[\w]{2,3}$/.test(email)
}

function isCorrectPhone(phone) {
	return /^[+]?[78]?\s*\(?\d{3}\)?\s*\d\d\d-?\d\d-?\d\d$/.test(phone)
}