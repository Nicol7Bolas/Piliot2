function display(ancre,id){
	if (document.getElementById(ancre + id).checked) { document.getElementById(ancre).style.display = "";}
	else { document.getElementById(ancre).style.display = "none"; document.getElementById("add"+id).style.display = ""; document.getElementById("hide"+id).style.display = "none"; document.getElementById(id).style.display = "none"; } }

function display_3(source,target_inside,target_outside){
	if (document.getElementById(source).checked && !(document.getElementById("outside").checked )) { document.getElementById(target_inside).style.display = "";}
	if (document.getElementById(source).checked && !(document.getElementById("inside").checked )) { document.getElementById(target_outside).style.display = "";}

function display_2(source,target){
	if (document.getElementById(source).checked) { document.getElementById(target).style.display = "";}
	else { document.getElementById(target).style.display = "none"; } }

function switch_basic (type,id){
	if (type == "add") { document.getElementById("add"+id).style.display = "none"; document.getElementById("hide"+id).style.display = ""; document.getElementById(id).style.display = ""; }
	if (type == "hide") {  document.getElementById("add"+id).style.display = ""; document.getElementById("hide"+id).style.display = "none"; document.getElementById(id).style.display = "none"; } }
	