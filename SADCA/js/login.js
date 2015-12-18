function captureForm()
    {
        var v_username=document.loginForm.username.value;
		var v_password=document.loginForm.password.value;
		sessionStorage.setItem("username", v_username);
		var urlrequest = "controllers/login_controller.php/?"+"controller="+"login_controller"+"&"+"action="+"isValidUserPassword"+"&"+"username="+v_username+"&"+"password="+v_password;
		window.location = urlrequest;
	}