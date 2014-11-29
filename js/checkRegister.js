function checkRegist(form){
	 if (form.username.value == "") {
		alert( "Please enter your username." );
		form.username.focus();
		return false ;
	}
	
	if (form.email.value == "") {
		alert( "Please enter your email." );
		form.email.focus();
		return false ;
	}
	
	if (form.password.value == "") {
		alert( "Please enter your password." );
		form.password.focus();
		return false ;
	}
	else{
		if (form.password.value != form.password.value) {
			alert( "Password didn't match. Please re-enter password again." );
			form.password.focus();
			return false ;
		}
	}
	
	return true;
}