<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Formulaire</title>
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="format/main_form.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="format/style_form.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="format/style_checkbox.css" media="all"/>
	</head>
    <body>
        <header>
			<br><br><img src="format/images/hear&know_logo.png" style='position: relative;'/>
        </header><br><br>
		<div align="center">
		<div class="wrap-contact100">
		<div class="contact100-form-title" style='background-image: url(format/images/city.jpeg);'> <!-- image -->
			<span class="contact100-form-title-1">
				Welcome on Hear&Know Form
			</span>
			<span class="contact100-form-title-2">
				Feel free to drop us a line below!
			</span>
		</div>
		<form align="left" method = "post" id="form" class="contact100-form" action = formulaire2.php >

			<input type="hidden" name="email" value =<?php echo '"'.$_POST['email'].'"' ?>/>
			<input type="hidden" name="name" value =<?php echo '"'.$_POST['name'].'"' ?>/>
			<input type="hidden" name="phone" value =<?php echo '"'.$_POST['phone'].'"' ?>/>
			<input type="hidden" name="organism" value =<?php echo '"'.$_POST['organism'].'"' ?>/>
			<input type="hidden" name="title" value =<?php echo '"'.$_POST['title'].'"' ?>/>

			<div class="section">General informations</div>

			<div>
				<b>Which vertical are you working in ?</b><br><br>
				<label class="container"><input type="checkbox" name="activity[]" value="cit"/>Cities and Collectivities<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="cst"/>Construction<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="env"/>Environment and agriculture<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="hlh"/>Health<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="trp"/>Transport, mobility, logistics<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="enj"/>Energy and utilities<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="sec"/>Security<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="bak"/>Bank and insurance<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="it"/>IT, telecommunications<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="aso"/>Associative sector<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="ind"/>Industry<span class="checkmark"></span></label>
				<input type="checkbox" name="activity[]" checked value="idk" style="display:none"/>
			</div>

			<div>
				<b>Who is your project for ?</b><br><br>
				<label class="container"><input type="checkbox" name="relation[]" value="pub"/>The public at large<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="relation[]" value="prf"/>Professionals<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="relation[]" value="ani"/>Animals<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="relation[]" value="obj"/>Objects<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="relation[]" value="vhl"/>Vehicles<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" onclick="display('relation',1)" id="relation1"/>Other<span class="checkmark"></span></label>
				<input class="input100" type="text" name="relation[]" id="relation" value="" placeholder="Enter who is your project for" style="display:none"/>
				<input type="checkbox" name="relation[]" checked value="idk" style="display:none"/>
			</div>

			<div>
				<b>Expected benefits</b><br><br>
				<label class="container"><input type="checkbox" name="benefits[]" value="o_m"/>Open New Markets<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="t_s"/>Time saving<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="i_y"/>Increase yields<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="r_c"/>Reduce investment cost<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="r_o"/>Reduce CapEx and operating costs<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="a_f"/>Add new functionalities<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="i_q"/>Increase quantity of information<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="iqa"/>Increase quality of information<span class="checkmark"></span></label>
				<input type="checkbox" name="benefits[]" checked value="idk" style="display:none"/>
			</div>


			<div class="wrap-input100 validate-input"> <b>What do you want to modify in operational practice</b>
				<input class="input100" type="text" name="modifyin" placeholder="Enter what do you want to modify"/>
				<span class="focus-input100"></span>
			</div>

			<div>
				<b>What is the biggest obstacle you face with your project ?</b><br><br>
				<label class="container"><input type="checkbox" name="problem[]" value="i_o"/>Internal organization<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="bud"/>Uncontrolled budget/The cost<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="g-s"/>I don't know the good solution<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="ned"/>Not enough data collected<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="tol"/>Time to deploy the project too long<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="trp"/>Time to realize the project too long<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="l_e"/>The lack of internal expertise<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="p_i"/>Problems linked to integration<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="f_w"/>Fear of wasting time<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="f_m"/>Fear of wasting money<span class="checkmark"></span></label>
				<input type="checkbox" name="problem[]" checked value="idk" style="display:none"/>
			</div>

			<div>
				<b>Quantity of object for the project</b><br><br>
				<select name="quantity" class="styled">
					<option value="idk">I don't know</option>
					<option value="0">0-10</option>
					<option value="10">10-100</option>
					<option value="100">100-1000</option>
					<option value="sup">>1000</option>
				</select><br><br>
			</div>

			<div class="container-contact100-form-btn">
				<button class="contact100-form-btn">
					<span>
						Next
						<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
					</span>
				</button>
			</div>
		</form>
		</div>
		</div>
		<br>
    </body>
</html>