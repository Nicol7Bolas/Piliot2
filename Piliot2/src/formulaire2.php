<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="format/main_form.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="format/style_form.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="format/style_checkbox.css" media="all"/>
		<script language="javascript" type="text/javascript" src="script/java_script_form2.js"></script>
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

        <?php require_once('main/Controller/Tools.php'); ?>

		<form align="left" method = "post" id="form" class="contact100-form" action = formulaire3.php >

		    <input type="hidden" name="email" value =<?php echo '"'.$_POST['email'].'"' ?>/>
            <input type="hidden" name="name" value =<?php echo '"'.$_POST['name'].'"' ?>/>
            <input type="hidden" name="phone" value =<?php echo '"'.$_POST['phone'].'"' ?>/>
            <input type="hidden" name="organism" value =<?php echo '"'.$_POST['organism'].'"' ?>/>
            <input type="hidden" name="title" value =<?php $_POST['title'].'"' ?>/>
            <input type="hidden" name="activity" value =<?php echo '"'.encode_list_to_string($_POST['activity']).'"' ?>/>
            <input type="hidden" name="relation" value =<?php echo '"'.encode_list_to_string($_POST['relation']).'"' ?>/>
            <input type="hidden" name="benefits" value =<?php echo '"'.encode_list_to_string($_POST['benefits']).'"' ?>/>
            <input type="hidden" name="problem" value =<?php echo '"'.encode_list_to_string($_POST['problem']).'"' ?>/>
            <input type="hidden" name="modifyin" value =<?php echo '"'.$_POST['modifyin'].'"' ?>/>
            <input type="hidden" name="quantity" value =<?php echo '"'.$_POST['quantity'].'"' ?>/>

		    <div class="section">Need assessment</div>
                <div>
                    <b>What does the sensor need to do ?</b><br>
                    <p class="detail">Note : If you tick nothing, all sensor types will be displayed</p>

                    <label class="container"><input type="checkbox" onclick="display('distance',1)" name="sensor[]" id="distance1" value="dis"/>Distance measurement<span class="checkmark"></span></label>
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
                            <b>What is the highest acceptable repeatability error ?</b><p class="detail">Unit : %</p>
                            <input class="subinput" type="text" name="repeatability_pressure" value="" placeholder="Enter the highest acceptable repeatability error (in mm)"/><span class="focus-input100"></span>
                        </div>
                    <label class="container"><input type="checkbox" onclick="display('temperature',3)" name="sensor[]" id="temperature3" value="tpt"/>Temperature measurement<span class="checkmark"></span></label>
                        <div class="toggle_basic" id="temperature" style="display:none">
                            <div id="add3" onclick="switch_basic('add',3)">Click to add technicals constraints</div>
                            <div id="hide3" onclick="switch_basic('hide',3)" style="display:none">Click to hide technicals constraints</div>
                        </div>
                        <div id="3" class="sub_section" style="display:none">
                            <b>What is the temperature range to measure ?</b><p class="detail">Unit : celsius</p>
                            Between<input type="number" class="classnumber1" name="minimum_temperature" value=""/>and<input type="number" class="classnumber1" name="maximum_temperature" value=""/><br><br>
                            <b>What is the highest acceptable repeatability error ?</b><p class="detail">Unit : %</p>
                            <input class="subinput" type="text" name="repeatability_temperature" value="" placeholder="Enter the highest acceptable repeatability error (in mm)"/><span class="focus-input100"></span>
                        </div>
                    <label class="container"><input type="checkbox" onclick="display('humidity',7)" name="sensor[]" id="humidity7" value="hum"/>Humidity measurement<span class="checkmark"></span></label>
                        <div class="toggle_basic" id="humidity" style="display:none">
                            <div id="add7" onclick="switch_basic('add',7)">Click to add technicals constraints</div>
                            <div id="hide7" onclick="switch_basic('hide',7)" style="display:none">Click to hide technicals constraints</div>
                        </div>
                        <div id="7" class="sub_section" style="display:none">
                            <b>What is the humidity range to measure ?</b><p class="detail">Unit : %</p>
                            Between<input type="number" class="classnumber1" name="minimum_humidity" value=""/>and<input type="number" class="classnumber1" name="maximum_humidity" value=""/><br><br>
                            <b>What is the highest acceptable repeatability error ?</b><p class="detail">Unit : %</p>
                            <input class="subinput" type="text" name="repeatability_humidity" value="" placeholder="Enter the highest acceptable repeatability error (in mm)"/><span class="focus-input100"></span>
                        </div>
                    <label class="container"><input type="checkbox" onclick="display('movement',4)" name="sensor[]" id="movement4" value="mvt"/>Movement detection<span class="checkmark"></span></label>
                        <div class="toggle_basic" id="movement" style="display:none">
                            <div id="add4" onclick="switch_basic('add',4)">Click to add technicals constraints</div>
                            <div id="hide4" onclick="switch_basic('hide',4)" style="display:none">Click to hide technicals constraints</div>
                        </div id="4" class="sub_section" style="display:none">
                        <div style="display:none">
                            <b>If the temperature around the sensor changed, what is the maximum acceptable error ?</b><p class="detail">Unit : %</p>
                            <input class="subinput" type="text" name="temperature_sensitivity_movement" value="" placeholder="Enter the maximum acceptable error (in %)"/><span class="focus-input100"></span>
                        </div>
                    <label class="container"><input type="checkbox" onclick="display('shield',5)" name="sensor[]" id="shield5" value="shi"/>Human detection<span class="checkmark"></span></label>
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
                    <label class="container"><input type="checkbox" onclick="display('passage',6)" name="sensor[]" id="passage6" value="pas"/>Passage detection<span class="checkmark"></span></label>
                        <div class="toggle_basic" id="passage" style="display:none">
                            <div id="add6" onclick="switch_basic('add',6)">Click to add technicals constraints</div>
                            <div id="hide6" onclick="switch_basic('hide',6)" style="display:none">Click to hide technicals constraints</div>
                        </div>
                        <div id="6" class="sub_section" style="display:none">
                            <b>What is the minimum detection range ?</b><p class="detail">Unit : mm</p>
                                <input class="subinput" type="text" name="range_passage" value="" placeholder="Enter the minimum detection range (in mm)"/><span class="focus-input100"></span>
                            <b>Response time</b><p class="detail">Unit : mm</p>
                                <input class="subinput" type="text" name="response_time_passage" value="" placeholder="Enter the minimum detection range (in mm)"/><span class="focus-input100"></span>
                            <b>What is the maximum acceptable reaction delay ?</b><p class="detail">Unit : ms</p>
                                <input class="subinput" type="text" name="reaction_delay_passage" value="" placeholder="Enter the  maximum acceptable reaction delay (in ms)"/><span class="focus-input100"></span>
                            <b>What type of photoelectric sensor do you want ?</b><br><br>
                            <label class="container"><input type="checkbox" name="type_passage[]" value="bar"/>Barrage<span class="checkmark"></span></label>
                            <label class="container"><input type="checkbox" name="type_passage[]" value="ref"/>Reflection<span class="checkmark"></span></label>
                            <label class="container"><input type="checkbox" name="type_passage[]" value="rtr"/>Retro reflection<span class="checkmark"></span></label>
                            <label class="container"><input type="checkbox" name="type_passage[]" value="dif"/>Diffuse reflection<span class="checkmark"></span></label>
                            <input type="checkbox" name="type_passage[]" value="idk" style="display:none"/>
                        </div>
                    <input type="checkbox" name="sensor[]" checked value="idk" style="display:none"/>
                    <input type="checkbox" name="sensor[]" checked value="wrc" style="display:none"/>
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