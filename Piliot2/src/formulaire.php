<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Formulaire</title>
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="format/main_form.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="format/style_form.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="format/style_checkbox.css" media="all"/>
		<script language="javascript" type="text/javascript" src="script/java_script_form.js"></script>
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
		<form align="left" method = "post" id="form" class="contact100-form" action = traitement.php >

			<input type="hidden" name="email" value ="<?php echo $_POST['email'] ?>"/>
			<input type="hidden" name="name" value ="<?php echo $_POST['name'] ?>"/>
			<input type="hidden" name="phone" value ="<?php echo $_POST['phone'] ?>"/>
			<input type="hidden" name="title" value ="<?php echo $_POST['title'] ?>"/>
			<input type="hidden" name="organisation" value ="<?php echo $_POST['organism'] ?>"/>

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

			<div class="section">Need assessment</div>

			<div>
				<b>What does the sensor need to do ?</b><br>
				<p class="detail">Note : If you tick nothing, all sensor types will be displayed</p>

				<label class="container"><input type="checkbox" onclick="display('distance',1)" name="sensor[]" id="distance1" value="distance_sensor"/>Distance measurement<span class="checkmark"></span></label>
					<div class="toggle_basic" id="distance" style="display:none">
						<div id="add1" onclick="switch_basic('add',1)">Click to add technicals constraints</div>
						<div id="hide1" onclick="switch_basic('hide',1)" style="display:none">Click to hide technicals constraints</div>
					</div>
					<div id="1" class="sub_section" style="display:none">
						<b>What is the measurement range ?</b><p class="detail">Unit : mm</p>
						<input class="subinput" type="text" name="range_distance" value="" placeholder="Enter the measurement range (in mm)"/><span class="focus-input100"></span>
						<b>What is the lowest acceptable accuracy ?</b><p class="detail">Unit : mm</p>
						<input class="subinput" type="text" name="accuracy_distance" value="" placeholder="Enter the lowest acceptable accuracy (in mm)"/><span class="focus-input100"></span>
						<b>Do you need a specific sampling speed ?</b><p class="detail">Unit : µs</p>
						<input class="subinput" type="text" name="sampling_speed_distance" value="" placeholder="Enter the sampling speed (in µs)"/><span class="focus-input100"></span>
						<b>If the light intensity around the sensor were high, what is the maximum light intensity around the sensor ?</b><p class="detail">Unit : lux</p>
						<input class="subinput" type="text" name="max_lighting_distance" value="" placeholder="Enter the maximum light intensity (in lux)"/><span class="focus-input100"></span>
						<b>If the temperature around the sensor changed, what is the maximum acceptable error ?</b><p class="detail">Unit : %</p>
						<input class="subinput" type="text" name="temperature_sensitivity_distance" value="" placeholder="Enter the maximum acceptable error (in %)"/><span class="focus-input100"></span>
						<b>What is the minimum emission power required ?</b><p class="detail">Unit : mW</p>
						<input class="subinput" type="text" name="emission_power_distance" value="" placeholder="Enter the minimum emission power required(in mW)"/><span class="focus-input100"></span>	
					</div>
				<label class="container"><input type="checkbox" onclick="display('pressure',2)" name="sensor[]" id="pressure2" value="pressure_sensor"/>Pressure measurement<span class="checkmark"></span></label>
					<div class="toggle_basic" id="pressure" style="display:none">
						<div id="add2" onclick="switch_basic('add',2)">Click to add technicals constraints</div>
						<div id="hide2" onclick="switch_basic('hide',2)" style="display:none">Click to hide technicals constraints</div>
					</div>
					<div id="2" class="sub_section" style="display:none">
						<b>What is the pressure range to measure ?</b><p class="detail">Unit : bar</p>
						Between<input type="number" class="classnumber1" name="minimum_pressure" value=""/>and<input type="number" class="classnumber1" name="maximum_pressure" value=""/><br><br>
						<b>What is the highest acceptable repetability error ?</b><p class="detail">Unit : %</p>	
						<input class="subinput" type="text" name="repetability_process" value="" placeholder="Enter the highest acceptable repetability error (in mm)"/><span class="focus-input100"></span>
					</div>
				<label class="container"><input type="checkbox" onclick="display('temperature',3)" name="sensor[]" id="temperature3" value="temperature_sensor"/>Temperature measurement<span class="checkmark"></span></label>
					<div class="toggle_basic" id="temperature" style="display:none">
						<div id="add3" onclick="switch_basic('add',3)">Click to add technicals constraints</div>
						<div id="hide3" onclick="switch_basic('hide',3)" style="display:none">Click to hide technicals constraints</div>
					</div>
					<div id="3" class="sub_section" style="display:none">
						<b>What is the pressure range to measure ?</b><p class="detail">Unit : bar</p>
						Between<input type="number" class="classnumber1" name="scale_min_pressure" value=""/>and<input type="number" class="classnumber1" name="scale_max_pressure" value=""/><br><br>
						<b>What is the highest acceptable repetability error ?</b><p class="detail">Unit : %</p>	
						<input class="subinput" type="text" name="repetability_process" value="" placeholder="Enter the highest acceptable repetability error (in mm)"/><span class="focus-input100"></span>
					</div>
				<label class="container"><input type="checkbox" onclick="display('humidity',7)" name="sensor[]" id="humidity7" value="himidity_sensor"/>Humidity measurement<span class="checkmark"></span></label>
					<div class="toggle_basic" id="humidity" style="display:none">
						<div id="add7" onclick="switch_basic('add',7)">Click to add technicals constraints</div>
						<div id="hide7" onclick="switch_basic('hide',7)" style="display:none">Click to hide technicals constraints</div>
					</div>
					<div id="7" class="sub_section" style="display:none">
						<b>What is the pressure range to measure ?</b><p class="detail">Unit : bar</p>
						Between<input type="number" class="classnumber1" name="scale_min_pressure" value=""/>and<input type="number" class="classnumber1" name="scale_max_pressure" value=""/><br><br>
						<b>What is the highest acceptable repetability error ?</b><p class="detail">Unit : %</p>	
						<input class="subinput" type="text" name="repetability_process" value="" placeholder="Enter the highest acceptable repetability error (in mm)"/><span class="focus-input100"></span>
					</div>
				<label class="container"><input type="checkbox" onclick="display('movement',4)" name="sensor[]" id="movement4" value="movement_sensor"/>Movement detection<span class="checkmark"></span></label>
					<div class="toggle_basic" id="movement" style="display:none">
						<div id="add4" onclick="switch_basic('add',4)">Click to add technicals constraints</div>
						<div id="hide4" onclick="switch_basic('hide',4)" style="display:none">Click to hide technicals constraints</div>
					</div id="4" class="sub_section" style="display:none">
					<div>
						<b>If the temperature around the sensor changed, what is the maximum acceptable error ?</b><p class="detail">Unit : %</p>
						<input class="subinput" type="text" name="temperature_sensitivity_movement" value="" placeholder="Enter the maximum acceptable error (in %)"/><span class="focus-input100"></span>
					</div>
				<label class="container"><input type="checkbox" onclick="display('shield',5)" name="sensor[]" id="shield5" value="shield_sensor"/>Human detection<span class="checkmark"></span></label>
					<div class="toggle_basic" id="shield" style="display:none">
						<div id="add5" onclick="switch_basic('add',5)">Click to add technicals constraints</div>
						<div id="hide5" onclick="switch_basic('hide',5)" style="display:none">Click to hide technicals constraints</div>
					</div>
					<div id="5" class="sub_section" style="display:none">
						<b></b><p class="detail"></p>	
						<input class="subinput" type="text" name="max_lighting_shield" value="" placeholder=""/><span class="focus-input100"></span>
						<b></b><p class="detail"></p>	
						<input class="subinput" type="text" name="spacing_axes_shield" value="" placeholder=""/><span class="focus-input100"></span>
						<b></b><p class="detail"></p>	
						<input class="subinput" type="text" name="size_detection_shield" value="" placeholder=""/><span class="focus-input100"></span>
						<b></b><p class="detail"></p>	
						<input class="subinput" type="text" name="range_shield" value="" placeholder=""/><span class="focus-input100"></span>
					</div>
				<label class="container"><input type="checkbox" onclick="display('passage',6)" name="sensor[]" id="passage6" value="passage_sensor"/>Passage detection<span class="checkmark"></span></label>
					<div class="toggle_basic" id="passage" style="display:none">
						<div id="add6" onclick="switch_basic('add',6)">Click to add technicals constraints</div>
						<div id="hide6" onclick="switch_basic('hide',6)" style="display:none">Click to hide technicals constraints</div>
					</div>
					<div id="6" class="sub_section" style="display:none">
						<b>What is the minimum detection range ?</b><p class="detail">Unit : mm</p>
							<input class="subinput" type="text" name="range_passage" value="" placeholder="Enter the minimum detection range (in mm)"/><span class="focus-input100"></span>
						<b>Responsetime</b><p class="detail">Unit : mm</p>
							<input class="subinput" type="text" name="response_time_passage" value="" placeholder="Enter the minimum detection range (in mm)"/><span class="focus-input100"></span>
						<b>What is the maximum acceptable reaction delay ?</b><p class="detail">Unit : ms</p>
							<input class="subinput" type="text" name="$reaction_delay_passage" value="" placeholder="Enter the  maximum acceptable reaction delay (in ms)"/><span class="focus-input100"></span>
						<b>What type of photoelectric sensor do you want ?</b><br><br>
						<label class="container"><input type="checkbox" name="type_passage[]" value="barrage"/>Barrage<span class="checkmark"></span></label>
						<label class="container"><input type="checkbox" name="type_passage[]" value="reflection"/>Reflection<span class="checkmark"></span></label>
						<label class="container"><input type="checkbox" name="type_passage[]" value="retro_reflection"/>Retro reflection<span class="checkmark"></span></label>
						<label class="container"><input type="checkbox" name="type_passage[]" value="diffuse_reflection"/>Diffuse reflection<span class="checkmark"></span></label>
						<input type="checkbox" name="type_passage[]" value="idk" style="display:none"/>
					</div>
				<input type="checkbox" name="sensor[]" checked value="idk" style="display:none"/>
				<input type="checkbox" name="sensor[]" checked value="moyen_communication" style="display:none"/>
			</div>

			<div class="section">Environmental constraints</div>
			
			<div>
				<b>In what environment will the device be used ?</b><br><br>
				<label class="container"><input type="checkbox" name="environment[]" value="outside"/>Only outside<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="environment[]" value="inside"/>Only inside<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="environment[]" value="outside&inside"/>Outside and inside<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="environment[]" value="urban"/>Urban<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="environment[]" value="country"/>Countryside<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="environment[]" value="isolated"/>Isolated area<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="environment[]" value="industrial"/>Industrial<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="environment[]" value="underground"/>Underground<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="environment[]" value="aerial"/>Aerial area<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="environment[]" value="maritime"/>Maritime<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="environment[]" value="space"/>Space<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="environment[]" value="submarine"/>Submarine<span class="checkmark"></span></label>
				<input type="checkbox" name="environment[]" checked value="idk" style="display:none"/>
			</div>

			<div class="wrap-input200">
				<b>What is the area of use of the sensor ?</b><br><br>
				<label class="container"><input type="checkbox" name="use[]" id="use1" value="local"/>Local (constructions,cities...)<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="use[]" id="use2" value="france"/>France<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="use[]" id="use3" value="europe"/>Europe<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" onclick="display('use',4)" id="use4"/>Other continent<span class="checkmark"></span></label>
				<input class="input100" type="text" name="use[]" id="use" value="" placeholder="Enter an other continent" style="display:none"/>
				<label class="container"><input type="checkbox" name="use[]" id="use5" value="worldwide"/>Worldwide<span class="checkmark"></span></label>
				<input type="checkbox" name="use[]" id="use6" checked value="idk" style="display:none"/>
			</div>

			<div>
				<b>Importance of autonomy? (5 being the most important)</b><br><br>
				<select name="autonomyI" class="styled">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select><br><br>
			</div>

			<div>
				<b>What is the autonomy of the system ?</b><br><br>
				<select name="autonomy" class="styled">
					<option value="idk">I dont know</option>
					<option value="hours">Hours</option>
					<option value="days">Days</option>
					<option value="weeks">Weeks</option>
					<option value="months">Months</option>
					<option value="years">Years</option>
					<option value="powered">Powered system</option>	
				</select><br><br>
			</div>

			<div>
				<b>Accuracy of the desired location :</b><br><br>
				<select name="accuracy" class="styled">
					<option value="idk">I dont know</option>
					<option value="1">10cm</option>
					<option value="2">10cm < x < 1m</option>
					<option value="3">1m < x < 10m</option>
					<option value="4">10m < x < 100m</option>
					<option value="5">> 100m</option>
					<option value="manually">Precision is entered manually</option>
					<option value="idc">Doesn't need a precision</option>
				</select><br><br>
			</div>

			<div>
				<b>Importance of location accuracy (5 being the most important)</b><br><br>
				<select name="accuracyI" class="styled">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select><br><br>
			</div>

			<div>
				<b>Size of the connected object</b><br><br>
				<select name="size" class="styled">
					<option value="idk">I dont know</option>
					<option value="mm3">mm3</option>
					<option value="cm3">cm3</option>
					<option value="dm3">dm3</option>
				</select><br><br>
			</div>

			<div>
				<b>Importance of the size (5 being the most important)</b><br><br>
				<select name="sizeI" class="styled">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>	
					<option value="4">4</option>
					<option value="5">5</option>
				</select><br><br>
			</div>

			<div>
				<b>Does the device need a connection?</b><br><br>
				<label class="container"><input type="checkbox" name="connection[]" value="no"/>No<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="connection[]" value="ethernet">Ethernet<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="connection[]" value="adsl"/>ADSL, Optical fiber<span class="checkmark"></span></label>	
				<label class="container"><input type="checkbox" name="connection[]" value="serial"/>Serial connection(USB...)<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="connection[]" value="networkd"/>Industrial network(bus...)<span class="checkmark"></span></label>	
				<label class="container"><input type="checkbox" name="connection[]" value="bluetooth"/>Bluetooth/BLE<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="connection[]" value="wifi"> Wi-fi<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="connection[]" value="lora"/>LoRA<span class="checkmark"></span></label>	
				<label class="container"><input type="checkbox" name="connection[]" value="sigfox"/>Sigfox<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="connection[]" value="cellular"/>Current cellular network(2G/3G/4G)<span class="checkmark"></span></label>	
				<label class="container"><input type="checkbox" name="connection[]" value="lte"/>Future cellular network(LTE-M, Nb IoT)<span class="checkmark"></span></label>	
				<label class="container"><input type="checkbox" name="connection[]" value="radio"/>Radio (VHF, UHF...)<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="connection[]" value="rfid"/>RFID/NFC<span class="checkmark"></span></label>
				<input type="checkbox" name="connection[]" checked value="idk" style="display:none"/>
			</div>

			<div>
				<b>Choice of communication network:</b><br><br>
				<label class="container"><input type="checkbox" name="communication[]" value="wsub"/>With subscription<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="communication[]" value="wtsub">Without subscription<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" onclick="display('communication',1)" id="communication1"/>Other<span class="checkmark"></span></label>
				<input class="input100" type="text" name="communication[]" id="communication" value="" placeholder="Enter your choice of communication" style="display:none"/>
				<input type="checkbox" name="communication[]" checked value="idk" style="display:none"/>
			</div>

			<div>
				<b>The frequency of sending data :</b><br><br>
				<label class="container"><input type="checkbox" name="frequency[]" value="peramently"/>The object is permanently connected<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="frequency[]" value="inbeacon"/>Transmit in beacon mode several times per minute<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="frequency[]" value="minute"/>Every minute<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="frequency[]" value="hour"/>Every hour<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="frequency[]" value="day"/>Once a day<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="frequency[]" value="ontripping"/>On tripping (shock, sensor specific values, ...)<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="frequency[]" value="human"/>On interactions(human)<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="frequency[]" checked value="idk" style="display:none"/>
			</div>

			<div>
				<label for="phase"><b>If you need a pilot phase, how long do you want?</b></label><br><br>
				<select id="phase" name="phase" class="styled">
					<option value="idn">I dont need i pilot phase</option>
					<option value="idk">I dont know</option>
					<option value="1">Days</option>
					<option value="2">Weeks</option>
					<option value="3">Months</option>	
				</select><br><br>
			</div>
			
			<div class="section">Financial aspect</div>

			<div>
				<b>Desired financing method</b><br><br>
				<select name="financial" class="styled">
					<option value="idk">I dont know</option>
					<option value="purchase">Purchase</option>
					<option value="leasing">Leasing</option>
					<option value="subscription">Subscription</option>
					<option value="idk">Other</option>
				</select><br><br>
			</div>

			<div>	
				<b>Budget allocation</b><br><br>
				For the entire project
				<select name="allocation1" class="styled">
					<option value="idk">I dont know</option>
					<option value="1">10€</option>
					<option value="2">30€</option>
					<option value="3">50€</option>
					<option value="4">100€</option>
					<option value="5">500€</option>
					<option value="6">1000€</option>
					<option value="7">10K€</option>
					<option value="8">50K€</option>
					<option value="9">100k€</option>
				</select><br>

				For a pilot(POC)
				<select name="allocation2" class="styled">
					<option value="idk">I dont know</option>
					<option value="1">10€</option>
					<option value="2">30€</option>
					<option value="3">50€</option>
					<option value="4">100€</option>
					<option value="5">500€</option>
					<option value="6">1000€</option>
					<option value="7">10K€</option>
					<option value="8">50K€</option>
					<option value="9">100k€</option>
				</select><br>

				By object on the POC
				<select name="allocation3" class="styled">
					<option value="idk">I dont know</option>
					<option value="1">10€</option>
					<option value="2">30€</option>
					<option value="3">50€</option>
					<option value="4">100€</option>
					<option value="5">500€</option>
					<option value="6">1000€</option>
					<option value="7">10K€</option>
					<option value="8">50K€</option>
					<option value="9">100k€</option>
				</select><br>

				By object on serialize
				<select name="allocation4" class="styled">
					<option value="idk">I dont know</option>
					<option value="1">10€</option>
					<option value="2">30€</option>
					<option value="3">50€</option>
					<option value="4">100€</option>
					<option value="5">500€</option>
					<option value="6">1000€</option>
					<option value="7">10K€</option>
					<option value="8">50K€</option>
					<option value="9">100k€</option>
				</select><br><br>
			</div>

			<div>
				<b>Importance of budget compliance (5 being the most important)</b><br><br>
				<select name="budget" class="styled">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>	
					<option value="4">4</option>
					<option value="5">5</option>
				</select><br><br>
			</div>

			<div>
				<b>Project launch</b><br><br>
				<select name="launch" class="styled">
					<option value="idk">I dont know</option>
					<option value="1">1 to 3 months</option>
					<option value="2">3 to 6 months</option>
					<option value="3">6 months to 1 year</option>	
					<option value="4">> 1 year</option>
					<option value="5">Not yet planned</option>
				</select><br><br>
			</div>

			<div>
				<b>Importance of time to market (5 being the most important)</b><br><br>
				<select name="launchI" class="styled">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>	
					<option value="4">4</option>
					<option value="5">5</option>
				</select><br><br>
			</div>	

			<div>
				<b>Expected return on investment</b><br><br>
				<select name="ROI" class="styled">
					<option value="idk">I dont know</option>
					<option value="less">Less than 3 months</option>
					<option value="3to6">"3 to 6 months</option>
					<option value="6to1">6 months to 1 year</option>	
					<option value="1to3">1 to 3 years</option>
					<option value="more">More than 3 years</option>
				</select><br><br>
			</div>
			
			<div class="section">Operationnal Constraints</div>
				
			<div>
				<b>Remote parameterization of the device</b><br><br>
				<select name="parameterization" class="styled">
					<option value="idk">I dont know</option>
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select><br><br>
			</div>

			<div>
				<b>Importance of service availability (5 being the most important)</b><br><br>
				<select name="availability" class="styled">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>	
					<option value="4">4</option>
					<option value="5">5</option>
				</select><br><br>
			</div>

			<div>
				<b>Does this require...</b><br><br>
				<label class="container"><input type="checkbox" name="require[]" value="pose"/>The pose<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="require[]" value="dissam"/>Frequent disassembly<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="require[]" value="clean"/>Cleaning/Maintenance<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="require[]" value="batt"/>Recharging battery<span class="checkmark"></span></label>
				<input type="checkbox" name="require[]" checked value="idk" style="display:none"/>
			</div>

			<div>
				<b>Environmental constraints</b><br><br>
				<label class="container"><input type="checkbox" name="constraints[]" value="storage"/>Storage temperature<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="constraints[]" value="operating"/>Operating temperature<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="constraints[]" value="waterproof"/>Waterproof(IP 65, IP66, IP67 ...)<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="constraints[]" value="projection"/>Projection of oil, acid ...<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="constraints[]" value="vibration"/>Vibrations<span class="checkmark"></span></label>
				<label class="container"><input type="checkbox" name="constraints[]" value="environment"/>Particular environment(ATEX, cold room, oven ...)<span class="checkmark"></span></label>
				<input type="checkbox" name="constraints[]" checked value="idk" style="display:none"/>
			</div>

			<div>			
				<b>Should we interface with an existing platform?</b><br><br>
				<select name="interface" class="styled">
					<option value="idk">I dont know</option>
					<option value="no">No</option>
					<option value="ibm">IBM Bluemix</option>
					<option value="AWS">Amazon Web Services(AWS)</option>	
					<option value="SAP">SAP Hana Cloud Platform</option>
					<option value="MQTT">Other platform in MQTT</option>
					<option value="HTTP">Other platform in HTTP</option>
					<option value="idc">Other</option>
				</select><br><br>
			</div>

			<div class="wrap-input100 validate-input"><b>Are there any objects already deployed that will need to be interfaced ?</b>
				<input class="input100" type="text" name="title" placeholder="Enter objects already deployed"/>
				<span class="focus-input100"></span>
			</div>

			<div class="container-contact100-form-btn">
				<button class="contact100-form-btn">
					<span>
						Submit
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