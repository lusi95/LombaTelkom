function checkLogin(form){
	 if (form.email.value == "") {
		alert( "Please enter your email address." );
		form.email.focus();
		return false ;
	}
	
	if (form.password.value == "") {
		alert( "Please enter your password." );
		form.password.focus();
		return false ;
	}
	
	return true;
}