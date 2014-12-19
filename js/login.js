// Set Message Error Untuk OnLoad
function customValidLoad() {
	i = document.getElementById("username");
	j = document.getElementById("password");
	checkValidUserName(i);
	checkValidPassword(j);
}

function checkValidUserName(input) {
	if (input.value == "") {
		input.setCustomValidity("Masukan username");
	} else if (input.value.length < 4) {
		input.setCustomValidity("Minimum input 4 character");
	} else {
		input.setCustomValidity('');
	}
}

function checkValidPassword(input) {
	if (input.value == "") {
		input.setCustomValidity("Masukan Password");
	} else {
		input.setCustomValidity('');
	}
}

function loginuser() {
	//	setTimeout(function () {
	//	console.log(document.getElementById("fm-login").checkValidity());
	//}, 300);
	//console.log(document.getElementById("fm-login").checkValidity());
	//document.getElementById("fm-login").submit();
	//alert("output");
	username = gv("username");
	password = gv("password");

	st_login = "<div class='alert-box notice'><span>Proses: </span>Logging In</div></span>";
	st_success = "<div class='alert-box success'><span>Bravo: </span>Login Success</div>";
	st_failed = "<div class='alert-box error'><span>Error: </span>Login Failed. Check your username and password</div>";
	si("status", st_login);
	//html = ajaxdata("GET","action.php?action=login&username="+username+"&password="+password);
	html = ajaxdata("POST", "action.php?action=login", "username=" + username + "&password=" + password);
	//alert(html);
	if (html == 'success') {
		si("status", st_success);
		var delay = 1000;
		setTimeout(function() {
			window.location.href = "home.php";
		}, delay);
	} else {
		si("status", st_failed);
	}
}
