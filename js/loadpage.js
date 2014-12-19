// Set Message Error Untuk OnLoad
function LoadPage(url) {
	html = ajaxdata("GET", url, "");
	//alert(html);
	si("isi", html);
}

function LoadSub(url) {
	html = ajaxdata("GET", url, "");
	//alert(html);
	si("data", html);
}

