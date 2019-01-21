$(document).ready(function(){
	// alert('heello');
	var login_btn = $("#login-btn");
	var register_btn = $("#register-btn");

	var login_form = $('#login');
	var register_form = $('#register');

	register_btn.click(function(){
		login_form.hide(500);
		register_form.show(500);
	});

	login_btn.click(function(){
		login_form.show(500);
		register_form.hide(500);
	});

});