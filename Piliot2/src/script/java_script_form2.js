function display(ancre,id){
	if (document.getElementById(ancre + id).checked) { document.getElementById(ancre).style.display = "";}
	else { document.getElementById(ancre).style.display = "none"; document.getElementById("add"+id).style.display = ""; document.getElementById("hide"+id).style.display = "none"; document.getElementById(id).style.display = "none"; } }

function display_hide(ancre1,ancre2) { document.getElementById(ancre1).style.display = ""; document.getElementById(ancre2).style.display = "none"; }

function switch_basic (type,id){
	if (type == "add") { document.getElementById("add"+id).style.display = "none"; document.getElementById("hide"+id).style.display = ""; document.getElementById(id).style.display = ""; }
	if (type == "hide") {  document.getElementById("add"+id).style.display = ""; document.getElementById("hide"+id).style.display = "none"; document.getElementById(id).style.display = "none"; } }
