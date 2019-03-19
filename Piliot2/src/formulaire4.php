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
		<form align="left" method = "post" id="form" class="contact100-form" action = traitement.php >
		      
                  <input type="hidden" name="email" value =<?php echo '"'.$_POST['email'].'"' ?>/>
                  <input type="hidden" name="name" value =<?php echo '"'.$_POST['name'].'"' ?>/>
                  <input type="hidden" name="phone" value =<?php echo '"'.$_POST['phone'].'"' ?>/>
                  <input type="hidden" name="organism" value =<?php echo '"'.$_POST['organism'].'"' ?>/>
                  <input type="hidden" name="title" value =<?php echo '"'.$_POST['title'].'"' ?>/>
                  <input type="hidden" name="activity" value =<?php echo '"'.$_POST['activity'].'"' ?>/>
                  <input type="hidden" name="relation" value =<?php echo '"'.$_POST['relation'].'"' ?>/>
                  <input type="hidden" name="benefits" value =<?php echo '"'.$_POST['benefits'].'"' ?>/>
                  <input type="hidden" name="activity" value =<?php echo '"'.$_POST['problem'].'"' ?>/>
                  <input type="hidden" name="modifyin" value =<?php echo '"'.$_POST['modifyin'].'"' ?>/>
                  <input type="hidden" name="quantity" value =<?php echo '"'.$_POST['quantity'].'"' ?>/>
                  <input type="hidden" name="sensor" value =<?php echo '"'.$_POST['sensor'].'"' ?>/>
                  <input type="hidden" name="range_distance" value =<?php echo '"'.$_POST['range_distance'].'"' ?>/>
                  <input type="hidden" name="accuracy_distance" value =<?php echo '"'.$_POST['accuracy_distance'].'"' ?>/>
                  <input type="hidden" name="sampling_speed_distance" value =<?php echo '"'.$_POST['sampling_speed_distance'].'"' ?>/>
                  <input type="hidden" name="max_lighting_distance" value =<?php echo '"'.$_POST['max_lighting_distance'].'"' ?>/>
                  <input type="hidden" name="temperature_sensitivity_distance" value =<?php echo '"'.$_POST['temperature_sensitivity_distance'].'"' ?>/>
                  <input type="hidden" name="emission_power_distance" value =<?php echo '"'.$_POST['emission_power_distance'].'"' ?>/>
                  <input type="hidden" name="minimum_pressure" value =<?php echo '"'.$_POST['minimum_pressure'].'"' ?>/>
                  <input type="hidden" name="maximum_pressure" value =<?php echo '"'.$_POST['maximum_pressure'].'"' ?>/>
                  <input type="hidden" name="repeatability_temperature" value =<?php echo '"'.$_POST['repeatability_temperature'].'"' ?>/>
                  <input type="hidden" name="repeatability_pressure" value =<?php echo '"'.$_POST['repeatability_pressure'].'"' ?>/>
                  <input type="hidden" name="minimum_temperature" value =<?php echo '"'.$_POST['minimum_temperature'].'"' ?>/>
                  <input type="hidden" name="maximum_temperature" value =<?php echo '"'.$_POST['maximum_temperature'].'"' ?>/>
                  <input type="hidden" name="environment" value =<?php echo '"'.encode_list_to_string($_POST['environment']).'"'; ?>/>
                  <input type="hidden" name="range_passage" value =<?php echo '"'.$_POST['range_passage'].'"' ?>/>
                  <input type="hidden" name="response_time_passage" value =<?php echo '"'.$_POST['response_time_passage'].'"' ?>/>
                  <input type="hidden" name="use" value =<?php echo '"'.encode_list_to_string($_POST['use']).'"' ?>/>
                  <input type="hidden" name="connection" value =<?php echo '"'.encode_list_to_string($_POST['connection']).'"'; ?>/>
                  <input type="hidden" name="frequency" value =<?php echo '"'.encode_list_to_string($_POST['frequency']).'"'; ?>/>
                  <input type="hidden" name="temperature_sensitivity_movement" value =<?php echo '"'.$_POST['temperature_sensitivity_movement'].'"' ?>/>
                  <input type="hidden" name="max_lighting_shield" value =<?php echo '"'.$_POST['max_lighting_shield'].'"' ?>/>
                  <input type="hidden" name="spacing_axes_shield" value =<?php echo '"'.$_POST['spacing_axes_shield'].'"' ?>/>
                  <input type="hidden" name="size_detection_shield" value =<?php echo '"'.$_POST['size_detection_shield'].'"' ?>/>
                  <input type="hidden" name="range_shield" value =<?php echo '"'.$_POST['range_shield'].'"' ?>/>
                  <input type="hidden" name="reaction_delay_passage" value =<?php echo '"'.$_POST['reaction_delay_passage'].'"' ?>/>
                  <input type="hidden" name="minimum_humidity" value = <?php echo '"'.$_POST['minimum_humidity'].'"' ?> />
                  <input type="hidden" name="maximum_humidity" value = <?php echo '"'.$_POST['maximum_humidity'].'"' ?> />
                  <input type="hidden" name="repeatability_humidity" value = <?php echo '"'.$_POST['repeatability_humidity'].'"' ?> />
                  <input type="hidden" name="type_passage" value = <?php echo '"'.$_POST['type_passage'].'"' ?> />
				  <input type="hidden" name="requestType" value ="new"/>

		      <div class="section">Financial aspect</div>
            			<div>
            				<b>Desired financing method</b><br><br>
            				<select name="financial" class="styled">
            					<option value="idk">I don't know</option>
            					<option value="pur">Purchase</option>
            					<option value="lea">Leasing</option>
            					<option value="sbs">Subscription</option>
            					<option value="idk">Other</option>
            				</select><br><br>
            			</div>

            			<div>
            				<b>Budget allocation</b><br><br>
            				For the entire project
            				<select name="allocation1" class="styled">
            					<option value="idk">I don't know</option>
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

            				For a pilot(POC)&emsp;&emsp;&emsp;
            				<select name="allocation2" class="styled">
            					<option value="idk">I don't know</option>
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
            					<option value="idk">I don't know</option>
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
            					<option value="idk">I don't know</option>
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
            					<option value="idk">I don't know</option>
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
            					<option value="idk">I don't know</option>
            					<option value="les">Less than 3 months</option>
            					<option value="3t6">"3 to 6 months</option>
            					<option value="6t1">6 months to 1 year</option>
            					<option value="1t3">1 to 3 years</option>
            					<option value="mo3">More than 3 years</option>
            				</select><br><br>
            			</div>

            			<div class="section">Operational Constraints</div>

            			<div>
            				<b>Remote parameterization of the device</b><br><br>
            				<select name="parameterization" class="styled">
            					<option value="idk">I don't know</option>
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
            				<label class="container"><input type="checkbox" name="require[]" value="pos"/>The pose<span class="checkmark"></span></label>
            				<label class="container"><input type="checkbox" name="require[]" value="dis"/>Frequent disassembly<span class="checkmark"></span></label>
            				<label class="container"><input type="checkbox" name="require[]" value="cln"/>Cleaning/Maintenance<span class="checkmark"></span></label>
            				<label class="container"><input type="checkbox" name="require[]" value="batt"/>Recharging battery<span class="checkmark"></span></label>
            				<input type="checkbox" name="require[]" checked value="idk" style="display:none"/>
            			</div>

            			<div>
            				<b>Environmental constraints</b><br><br>
            				<label class="container"><input type="checkbox" name="constraints[]" value="str"/>Storage temperature<span class="checkmark"></span></label>
            				<label class="container"><input type="checkbox" name="constraints[]" value="ope"/>Operating temperature<span class="checkmark"></span></label>
            				<label class="container"><input type="checkbox" name="constraints[]" value="wtr"/>Waterproof(IP 65, IP66, IP67 ...)<span class="checkmark"></span></label>
            				<label class="container"><input type="checkbox" name="constraints[]" value="prj"/>Projection of oil, acid ...<span class="checkmark"></span></label>
            				<label class="container"><input type="checkbox" name="constraints[]" value="vib"/>Vibrations<span class="checkmark"></span></label>
            				<label class="container"><input type="checkbox" name="constraints[]" value="ent"/>Particular environment(ATEX, cold room, oven ...)<span class="checkmark"></span></label>
            				<input type="checkbox" name="constraints[]" checked value="idk" style="display:none"/>
            			</div>

            			<div>
            				<b>Should we interface with an existing platform?</b><br><br>
            				<select name="interface" class="styled">
            					<option value="idk">I don't know</option>
            					<option value="no">No</option>
            					<option value="ibm">IBM Bluemix</option>
            					<option value="AWS">Amazon Web Services(AWS)</option>
            					<option value="SAP">SAP Hana Cloud Platform</option>
            					<option value="MQT">Other platform in MQTT</option>
            					<option value="HTP">Other platform in HTTP</option>
            					<option value="idc">Other</option>
            				</select><br><br>
            			</div>

            			<div class="wrap-input100 validate-input"><b>Are there any objects already deployed that will need to be interfaced ?</b>
            				<input class="input100" type="text" name="title" placeholder="Enter objects already deployed"/>
            				<span class="focus-input100"></span>
            			</div>
            			<div class="container-contact100-form-btn">
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