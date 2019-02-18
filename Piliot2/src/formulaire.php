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
				<label class="container"><input type="checkbox" name="activity[]" value="cities"/>Cities and Collectivities<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="construction"/>Construction<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="environment"/>Environment and agriculture<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="health"/>Health<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="transport"/>Transport, mobility, logistics<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="energy"/>Energy and utilities<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="security"/>Security<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="bank"/>Bank and insurance<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="it"/>IT, telecommunications<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="associative"/>Associative sector<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="activity[]" value="industry"/>Industry<span class="checkmark"></span></label>
				<input type="checkbox" name="activity[]" checked value="idk" style="display:none"/>
			</div>	
			
			<div>
				<b>Who is your project for ?</b><br><br>
				<label class="container"><input type="checkbox" name="relation[]" value="public"/>The public at large<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="relation[]" value="professionals"/>Professionals<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="relation[]" value="animals"/>Animals<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="relation[]" value="objects"/>Objects<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="relation[]" value="vehicles"/>Vehicles<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" onclick="display('relation',1)" id="relation1"/>Other<span class="checkmark"></span></label>
				<input class="input100" type="text" name="relation[]" id="relation" value="" placeholder="Enter who is your project for" style="display:none"/>
				<input type="checkbox" name="relation[]" checked value="idk" style="display:none"/>
			</div>

			<div>
				<b>Expected benefits</b><br><br>
				<label class="container"><input type="checkbox" name="benefits[]" value="open_market"/>Open New Markets<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="time_saving"/>Time saving<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="increase_yield"/>Increase yields<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="reduce_cost"/>Reduce investment cost<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="reduce_capex"/>Reduce CapEx and operating costs<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="add_funct"/>Add new functionalities<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="inc_quantity"/>Increase quantity of information<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="benefits[]" value="inc_quality"/>Increase quality of information<span class="checkmark"></span></label>
				<input type="checkbox" name="benefits[]" checked value="idk" style="display:none"/>
			</div>

			
			<div class="wrap-input100 validate-input"> <b>What do you want to modify in operational practice</b>
				<input class="input100" type="text" name="modifyin" placeholder="Enter what do you want to modify"/>
				<span class="focus-input100"></span>
			</div>
			
			<div>
				<b>What is the biggest obstacle you face with your project ?</b><br><br>
				<label class="container"><input type="checkbox" name="problem[]" value="int_orga"/>Internal organization<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="budget"/>Uncontrolled budget/The cost<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="pb_solution"/>I don't know the good solution<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="lowdata"/>Not enough data collected<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="time_to_deploy"/>Time to deploy the project too long<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="time_to_rea"/>Time to realize the project too long<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="lack_expertise"/>The lack of internal expertise<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="pb_int"/>Problems linked to integration<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="fear_time"/>Fear of wasting time<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="problem[]" value="fear_money"/>Fear of wasting money<span class="checkmark"></span></label>
				<input type="checkbox" name="problem[]" checked value="idk" style="display:none"/>
			</div>

			<div>
				<b>Quantity of object for the project</b><br><br>
				<select name="quantity" class="styled">
					<option value="idk">I dont know</option>
					<option value="10">0-10</option>
					<option value="100">10-100</option>
					<option value="1000">100-1000</option>
					<option value="10000">>1000</option>
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