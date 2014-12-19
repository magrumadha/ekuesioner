/*
Copyright (c) 2014 magrumadha@gmail.com

Simple Function to get and post data from AJAX

*/

// ajax get dan post data
function ajaxdata(method, URL, parameter) {
	var xmlhttp;
	var output = "";
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function() {

		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			output = xmlhttp.responseText;

		}
	};
	//alert(parameter);
	xmlhttp.open(method, URL, false);
	if (method == "POST") {

		xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.setRequestHeader('Connection', 'close');
		xmlhttp.send(parameter);
		//	alert(parameter);
	} else {
		xmlhttp.send();
	}
	if (xmlhttp.readyState == 4) {
		return output;
	}
}

// set html data with id
function si(id, html) {
	document.getElementById(id).innerHTML = html;
}

// get value by id
function gv(id) {
	return document.getElementById(id).value;
}

// get element id (objek)
function ge(id) {
	return document.getElementById(id);
}

function sv(id, data) {
	document.getElementById(id).value = data;
}