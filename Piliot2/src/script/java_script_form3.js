function display (source,target_inside,target_outside,target) {
	if (document.getElementById(source).checked) {
		document.getElementById(target).style.display = "";
	}
	else {
		document.getElementById(target).style.display = "none";
	}
	if (document.getElementById(source).checked && !(document.getElementById("outside").checked )) {
		document.getElementById(target_inside).style.display = "";
		document.getElementById(target_outside).style.display = "none";
	}
	if (document.getElementById(source).checked && !(document.getElementById("inside").checked )) {
		document.getElementById(target_outside).style.display = "";
		document.getElementById(target_inside).style.display = "none";
	}
	if (document.getElementById(source).checked && document.getElementById("inside").checked ) {
		document.getElementById(target_outside).style.display = "none";
	}
	if (document.getElementById(source).checked && document.getElementById("outside").checked ) {
		document.getElementById(target_inside).style.display = "none";
	}
}
function displayInOut (clicked) {
	if (clicked == "outside") {
		document.getElementByClassName("inside").style.display = "none";
		document.getElementByClassName("outside").style.display = "";
	}
	if (clicked == "inside") {
		document.getElementByClassName("inside").style.display = "";
		document.getElementByClassName("outside").style.display = "none";
	}
}