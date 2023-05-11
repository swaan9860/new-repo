function validate(form) {//returns true if valid, else false (invalid)}
	failMsg = validateFirstname(form.Firstname.value)
	failMsg += validateSurname(form.Surname.value)
	failMsg += validateUsername(form.Username.value)
	failMsg += validatePassword(form.Password.value)
	failMsg += validateAge(form.Age.value)
	failMsg += validateEmail(form.Email.value)

	if (failMsg == ""){
		alert("successful validations !!")
		return true	//validation passed
	}else{
		alert(failMsg);
		return false	//validation failMsged
	}
}
function validateFirstname(field){
	if (field == "") return "No Firstname was entered. \n"
		return ""
}
function validateSurname(field){
	if (field == "") return "No Surname was entered. \n"
		return ""
}
function validateUsername(field){
	if(field == "") return "No Username was entered. \n"
		else if (field.length < 5) return "Username must be at least 5 characters. \n"
		else if (/[^a-zA-Z0-9_-]/.test(field)) //^ is not
			return "Only a-z, A-Z, 0-9, - and _ allowed in Username. \n"
		return ""
}
function validatePassword(field){
	if (field == "")return "No Password was entered. \n"
	else if (field.length < 6) return "Password must be at least 6 charactes. \n"
	else if (!/[a-z]/.test(field) || !/[A-Z]/.test(field) || !/[0-9]/.test(field))
		return "Password requires at least one of a-z, A-Z, 0-9. \n"
		return ""
}
function validateAge(field){
	if (isNaN(field))	//Is not a number = NaN
		return "No Age was entered. \n"
	else if (field < 18 || field > 110)
	return "Age must be between 18 to 110. \n"
	return ""
}

function validateEmail(field){
	if(field=="") return "Enter the email. \n"
		else if(!((field.indexOf(".")>0)) && (field,indexOf("@")>0) || /[^a-zA-Z0-9.@_-]/.test(field))
			return "The Email is not valid. \n"
		return""
}