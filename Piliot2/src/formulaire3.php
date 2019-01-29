<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Formulaire</title>
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="format/main_form.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="format/style_form.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="format/style_checkbox.css" media="all"/>
		<script language="javascript" type="text/javascript" src="script/java_script_form3.js"></script>
	</head>
    <body>
        <header>
			<br><br><img src="format/images/hear&know_logo.png" style='position: relative;'/>
        </header><br><br>

        <?php require_once('main/Controller/Tools.php'); ?>

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
		<form align="left" method = "post" id="form" class="contact100-form" action = formulaire4.php >

		    <input type="hidden" name="email" value =<?php echo '"'.$_POST['email'].'"' ?>/>
            <input type="hidden" name="name" value =<?php echo '"'.$_POST['name'].'"' ?>/>
            <input type="hidden" name="phone" value =<?php echo '"'.$_POST['phone'].'"' ?>/>
            <input type="hidden" name="organism" value =<?php echo '"'.$_POST['organism'].'"' ?>/>
            <input type="hidden" name="title" value =<?php echo '"'.$_POST['title'].'"' ?>/>
            <input type="hidden" name="activity" value =<?php echo '"'.$_POST['activity'].'"' ?>/>
            <input type="hidden" name="relation" value =<?php echo '"'.$_POST['relation'].'"' ?>/>
            <input type="hidden" name="benefits" value =<?php echo '"'.$_POST['benefits'].'"' ?>/>
            <input type="hidden" name="problem" value =<?php echo '"'.$_POST['problem'].'"' ?>/>
            <input type="hidden" name="modifyin" value =<?php echo '"'.$_POST['modifyin'].'"' ?>/>
            <input type="hidden" name="quantity" value =<?php echo '"'.$_POST['quantity'].'"' ?>/>
            <input type="hidden" name="sensor" value =<?php echo '"'.encode_list_to_string($_POST['sensor']).'"'; ?>/>
            <input type="hidden" name="range_distance" value =<?php echo '"'.$_POST['range_distance'].'"' ?>/>
            <input type="hidden" name="accuracy_distance" value =<?php echo '"'.$_POST['accuracy_distance'].'"' ?>/>
            <input type="hidden" name="sampling_speed_distance" value =<?php echo '"'.$_POST['sampling_speed_distance'].'"' ?>/>
            <input type="hidden" name="max_lighting_distance" value =<?php echo '"'.$_POST['max_lighting_distance'].'"' ?>/>
            <input type="hidden" name="temperature_sensitivity_distance" value =<?php echo '"'.$_POST['temperature_sensitivity_distance'].'"' ?>/>
            <input type="hidden" name="emission_power_distance" value =<?php echo '"'.$_POST['emission_power_distance'].'"' ?>/>
            <input type="hidden" name="minimum_pressure" value =<?php echo '"'.$_POST['minimum_pressure'].'"' ?>/>
            <input type="hidden" name="maximum_pressure" value =<?php echo '"'.$_POST['maximum_pressure'].'"' ?>/>
            <input type="hidden" name="repetability_temperature" value =<?php echo '"'.$_POST['repetability_temperature'].'"' ?>/>
            <input type="hidden" name="repetability_pressure" value =<?php echo '"'.$_POST['repetability_pressure'].'"' ?>/>
            <input type="hidden" name="minimum_temperature" value =<?php echo '"'.$_POST['minimum_temperature'].'"' ?>/>
            <input type="hidden" name="maximum_temperature" value =<?php echo '"'.$_POST['maximum_temperature'].'"' ?>/>
            <input type="hidden" name="range_passage" value =<?php echo '"'.$_POST['range_passage'].'"' ?>/>
            <input type="hidden" name="response_time_passage" value =<?php echo '"'.$_POST['response_time_passage'].'"' ?>/>
            <input type="hidden" name="temperature_sensitivity_movement" value =<?php echo '"'.$_POST['temperature_sensitivity_movement'].'"' ?>/>
            <input type="hidden" name="max_lighting_shield" value =<?php echo '"'.$_POST['max_lighting_shield'].'"' ?>/>
            <input type="hidden" name="spacing_axes_shield" value =<?php echo '"'.$_POST['spacing_axes_shield'].'"' ?>/>
            <input type="hidden" name="size_detection_shield" value =<?php echo '"'.$_POST['size_detection_shield'].'"' ?>/>
            <input type="hidden" name="range_shield" value = <?php echo '"'.$_POST['range_shield'].'"' ?> />
            <input type="hidden" name="reaction_delay_passage" value = <?php echo '"'.$_POST['reaction_delay_passage'].'"' ?> />

		    <div class="section">Environmental constraints</div>
    			<div>   
    				<b>In what environment will the device be used ?</b><br><br>
    				<label class="container"><input type="checkbox" id="outside" name="environment[]" onclick='displayInOut("outside")' value="outside"/>Only outside<span class="checkmark"></span></label>
    				<label class="container"><input type="checkbox" id="inside" name="environment[]" onclick='displayInOut("inside")' value="inside"/>Only inside<span class="checkmark"></span></label>
    				<label class="container"><input type="checkbox" id="outside&inside" name="environment[]" value="outside&inside"/>Outside and inside<span class="checkmark"></span></label>
    				<label class="container"><input type="checkbox" name="environment[]" value="urban"/>Urban<span class="checkmark"></span></label>
    				<label class="container"><input type="checkbox" name="environment[]" value="country"/>Countryside<span class="checkmark"></span></label>
    				<label class="container"><input type="checkbox" name="environment[]" value="isolated"/>Isolated area<span class="checkmark"></span></label>
    				<label class="container"><input type="checkbox" name="environment[]" id="industrial" onclick="display('industrial','industrial_inside','industrial_outside','industrial_sub')" value="industrial"/>Industrial<span class="checkmark"></span></label>
    				    <div class="sub_section" id="industrial_sub" style="display:none">
                            <label class="container"><input type="checkbox" id="industrial_hot_source" onclick="display_2('indistrial_hot_source','industrial_hot_target')" name="environment[]" value="aerial"/>Proximité de source chaude ?<span class="checkmark"></span></label>
                                <div id="industrial_hot_target" style="display:none">
                                    <input class="subinput" type="text" name="range_passage" value="" placeholder="Enter the maximum temperature"/><span class="focus-input100"></span>
                                </div>
                            <label class="container"><input type="checkbox" id="industrial_cold_source" onclick="display_2('indistrial_cold_source','industrial_cold_target')" name="environment[]" value="aerial"/>Proximité de source froide ?<span class="checkmark"></span></label>
                                <div id="industrial_cold_target" style="display:none">
                                    <input class="subinput" type="text" name="range_passage" value="" placeholder="Enter the minimum temperature"/><span class="focus-input100"></span>
                                </div>
                            <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>Temperature ambiante ?<span class="checkmark"></span></label>
                        </div>
    				<label class="container"><input type="checkbox" name="environment[]" value="underground"/>Underground<span class="checkmark"></span></label>
    				<label class="container"><input onclick="display('aerial','aerial_inside','aerial_outside','aerial_sub')" id="aerial" type="checkbox" name="environment[]" value="aerial"/>Aerial area<span class="checkmark"></span></label>
                        <div class="sub_section" id="aerial_sub" style="display:none">
                            <div class='inside' id='aerial_inside' style="display:none">
                                <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>En Soute<span class="checkmark"></span></label>
                                <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>En cabine<span class="checkmark"></span></label>
                            </div>
                            <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>Proximité des moteurs<span class="checkmark"></span></label>
                            <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>Proximité des reacteurs<span class="checkmark"></span></label>
                            <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>Utilisation en vole<span class="checkmark"></span></label>
                            <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>Utilisation au sol<span class="checkmark"></span></label>
                        </div>
    				<label class="container"><input onclick="display('maritime','maritime_inside','maritime_outside','maritime_sub')" id="maritime" type="checkbox" name="environment[]" value="maritime"/>Maritime<span class="checkmark"></span></label>
                        <div class="sub_section" id="maritime_sub" style="display:none">
                            <div class="inside" id='maritime_inside' style="display:none">
                                <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>Proximité de source chaudes ?<span class="checkmark"></span></label>
                            </div>
                            <div class="outside" id='maritime_inside' style='display:none'>
                                <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>Immergé ?<span class="checkmark"></span></label>
                            </div>
                            <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>Proximité des moteurs ?<span class="checkmark"></span></label>
                            <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>Susceptible d etre soumis a des chocs ?<span class="checkmark"></span></label>
                        </div>
    				<label class="container"><input onclick="display('space','space_inside','space_outside','space_sub')" id="space" type="checkbox" name="environment[]" value="space"/>Space<span class="checkmark"></span></label>
    				    <div class="sub_section" id='space_sub' style="display:none">
                            <label class="container"><input type="checkbox" name="environment[]" value="aerial"/>Proximité de source chaudes ?<span class="checkmark"></span></label>
                        </div>
    				<label class="container"><input onclick="display('submarine','submarine_inside','submarine_outside','submarine_sub')" id="aerial" type="checkbox" name="environment[]" value="submarine"/>Submarine<span class="checkmark"></span></label>
    				    <div class="sub_section" id='submarine_sub' style="display:none">
    				        <label class="container"><input type="checkbox" name="environment[]" value="submarine"/>Proximité des moteurs ?<span class="checkmark"></span></label>
    				        <label class="container"><input type="checkbox" name="environment[]" value="submarine"/>Soumis a des chocs ?<span class="checkmark"></span></label>
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
    			<div class="container-contact100-form-btn">
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