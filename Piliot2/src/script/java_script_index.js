function check_email() {
	var check = false;
	var data = document.getElementById("email").value;
	var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
	if (reg.test(data)) {
		check = true;
	}
	if (check === false) {
        document.location.href="http://localhost/piliot2/";
	}
}

