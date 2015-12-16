function captureForm()
    {
        var v_username=document.loginForm.username.value;
		var v_password=document.loginForm.password.value;
		var urlrequest = "login_index.php/?"+"controller="+"login_controller"+"&"+"action="+"isValidUserPassword"+"&"+"username="+v_username+"&"+"password="+v_password;
		window.location = urlrequest;
	}