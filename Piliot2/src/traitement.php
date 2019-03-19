<!DOCTYPE php>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Form Analyze</title>
		<link rel="stylesheet" type="text/css" href="format/bootstrap.min.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="format/perfect-scrollbar.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="format/util.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="format/main_result.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="format/style_result.css" media="all"/>
		<script language="javascript" type="text/javascript" src="script/java_script_result.js"></script>
		<script language="javascript" type="text/javascript" src="script/ExportCSV.js"></script>
		<script language="javascript" type="text/javascript" src="script/jquery.js"></script>
		<script language="javascript" type="text/javascript" src="script/main.js"></script>
		<script language="javascript" type="text/javascript" src="script/jquery-3.2.1.min.js"></script>
		<script language="javascript" type="text/javascript" src="script/perfect-scrollbar.min.js"></script>
	</head>
<body>
	<header>
		<br><br><img alt="header" src="format/images/hear&know_logo.png"/><br><br><br>
    </header>
<?php

    require_once('main/Class/Combinaison.php');
    require_once('main/Class/Communication_tools.php');
    require_once('main/Class/Distance_sensor.php');
    require_once('main/Class/Movement_sensor.php');
    require_once('main/Class/Passage_sensor.php');
    require_once('main/Class/Pressure_sensor.php');
    require_once('main/Class/Sensors.php');
    require_once('main/Class/Movement_sensor.php');
    require_once('main/Class/Shield_sensor.php');
    require_once('main/Class/Temperature_sensor.php');
    require_once('main/Class/Humidity_sensor.php');
    require_once('main/Class/Position_sensor.php');
    require_once('main/Class/Results.php');
    require_once('main/Controller/Tools.php');
    require_once('main/Main.php');
    require_once('main/Controller/Similar.php');

	//connection bdd 
		
	try { $bdd = new PDO('mysql:host=localhost;dbname=id7501730_piliot2;, charset=utf8', 'root', ''); }
	catch(Exception $e) { die ('Erreur :' .$e->getMessage()); }

    $email = $_POST['email'];
    $nom = $_POST['name'];
    $phone = $_POST['phone'];
    $organism = $_POST['organism'];
    $project_title = $_POST['title'];

	//writing customer data
    if ($_POST['requestType'] == 'new'){
        $query = "INSERT INTO `request_history`(`email`, `name`, `phone`, `organism`, `title`, `activity`, `relation`, `benefits`, `modifyin`, `quantity`, `sensor`, `range_distance`, `accuracy_distance`, `sampling_speed_distance`, `max_lighting_distance`, `temperature_sensitivity_distance`, `emission_power_distance`, `minimum_pressure`, `maximum_pressure`, `repeatability_temperature`, `repeatability_pressure`, `minimum_temperature`, `maximum_temperature`, `environment`, `range_passage`, `response_time_passage`, `use`, `connection`, `frequency`, `temperature_sensitivity_movement`, `max_lighting_shield`, `spacing_axes_shield`, `size_detection_shield`, `range_shield`, `reaction_delay_passage`, `minimum_humidity`, `maximum_humidity`, `repeatability_humidity`, `requestType`, `financial`, `allocation1`, `allocation2`, `allocation3`, `allocation4`, `budget`, `launch`, `launchI`, `ROI`, `parameterization`, `availability`, `require`, `constraints`, `interface`) VALUES (";
        foreach($_POST as $value){
            if(is_array($value)) {
                $value = encode_list_to_string($value);
            }
            $query = $query.'"'.$value.'",';
        }
        $query = substr($query,0,-1);
        $query = $query.' )';
        $bdd->exec($query);
    }
	
	//setting general data

    $display = -1;
    $title = $_POST['title'];

    //all sensor

    $weight = "";
    $materials = array();
    $protection_id = "";
    $shock_resistance = "";
    $temperature_min = "";
    $temperature_max = "";
    $minimum_frequency_resistance = "";
    $maximum_frequency_resistance = "";
    $minimum_humidity_storage = "";
    $maximum_humidity_storage = "";
    $minimum_temperature_storage = "";
    $maximum_temperature_storage = "";
    $power_consumption = "";
    $weightI = 0;
    $materialsI = 5;
    $protection_idI = 10;
    $shock_resistanceI = 10;
    $frequency_resistanceI = 10;
    $humidity_storageI = 5;
    $temperature_storageI = 5;

    //passage sensor

    $range_passage = $_POST['range_passage'];
    $response_time_passage = $_POST['response_time_passage'];
    $type_passage = array();
    if ($_POST['type_passage'][0] =! "idk")
    {
        foreach($_POST['type_passage'] as $element)
        {
            $type_passage[count($type_passage)] = $element;
        }
    }
    else { $type_passage = array("barrage","retro_reflection","reflection","diffuse_reflection"); }
    $type_passageI = 10;
    $range_passageI = 10;
    $response_time_passageI = 10;

    // distance sensor

    $range_distance = $_POST['range_distance'];
    $accuracy_distance = $_POST['accuracy_distance'];
    $sampling_speed_distance = $_POST['sampling_speed_distance'];
    $max_lighting_distance = $_POST['max_lighting_distance'];
    $temperature_sensitivity_distance = $_POST['temperature_sensitivity_distance'];
    $emission_power_distance = $_POST['emission_power_distance'];

    // pressure sensor

    $minimum_pressure = $_POST['minimum_pressure'];
    $maximum_pressure = $_POST['maximum_pressure'];
    $repeatability_pressure = $_POST['repeatability_pressure'];

    //temperature sensor

    $minimum_temperature_temperature = $_POST['minimum_temperature'];
    $maximum_temperature_temperature = $_POST['maximum_temperature'];
    $repeatability_temperature = $_POST['repeatability_temperature'];

    // humidity sensor

    $minimum_humidity_humidity = $_POST['minimum_humidity'];
    $maximum_humidity_humidity = $_POST['maximum_humidity'];
    $repeatability_humidity = $_POST['repeatability_humidity'];

    // human detection sensor

    $max_lighting_shield = $_POST['max_lighting_shield'];
    $spacing_axes_shield = $_POST['spacing_axes_shield'];
    $size_detection_shield = $_POST['size_detection_shield'];
    $range_shield = $_POST['range_shield'];

    //setting data

    $activity = array();
    $relation = array();
    $benefits = array();
    $type_pressure = array();
    $sensor = array();
    $frequency = array();
    $protection_id = array();

    $inside = false;
    $permanently_connected = "";
    $number_message_per_day = "";
    $fluid_detectable = "";
    $repetability = "";
    $vibration_resistance = "";
    $impact_resistance = "";
    $power_emission_min = "";
    $power_emission_max = "";
    $power_emissionI = "";
    $lifetime_battery = "";
    $lifetime_batteryI = "";
    $imunite_interference = "";
    $imunite_interferenceI = "";
    $energetic_efficiency = "";
    $energetic_efficiencyI = "";
    $minimum_humidity = "";
    $maximum_humidity = "";
    $humidityI = 1;
    $minimum_temperature = "";
    $maximum_temperature = "";

    $temperatureI = 1;
    $power_consumptionI = 1;

	//QUESTION ANALYZE

	if (decode_string_to_list($_POST['sensor'])[0] == "idk") { $sensor = array("distance_sensor","position_sensor","humidity_sensor","movement_sensor","pressure_sensor","shield_sensor","passage_sensor","temperature_sensor"); }
	else {
		foreach(decode_string_to_list($_POST['sensor']) as $element) {
			if($element != "idk") { $sensor[count($sensor)] = $element;}
		}
	}
	$environment = decode_string_to_list($_POST['environment']);
    if ($environment[0] != "idk") {
		foreach($environment as $element) {
			if ($element == "out") {
                foreach($environment as $element) {
                    if($element == "sbm") {
                        if (in_array('IP69',$protection_id) == false) {$protection_id[] = 'IP69';}
                        $minimum_temperature = -1.5;
                        $maximum_temperature = 35;
                    }
                    if($element == "mar") {
                        if (in_array('IP65',$protection_id) == false) {$protection_id[] = 'IP65';}
                        $minimum_temperature = -1.5;
                        $maximum_temperature = 35;
                    }
                    if($element == "aer") {
                        foreach($environment as $element) {
                            if($element = "rct") {
                                $maximum_temperature = 950;
                            }
                            else{
                                $minimum_temperature = -56;
                            }
                        }
                    }
                }
            }
            if ($element == "ins") {
                foreach($environment as $element) {
                    if($element == "aer"){
                        foreach($environment as $element) {
                            if($element = "hld"){
                                $minimum_temperature = 7;
                                $maximum_temperature = 20;
                            }
                            if($element = "cab"){
                                $minimum_temperature = 15;
                                $maximum_temperature = 20;
                            }
                        }
                    }
                }
            }
            if ($element == "spa") {
                $minimum_temperature = -273.15;
                $maximum_humidity = 0;
                $minimum_humidity = 0;
            }
		}
	}
	if ($_POST['use'][0] != "idk") {
		foreach(decode_string_to_list($_POST['use']) as $element) {
			if ($element == "france") {
				$temperatureI = 3;
				if ($temperature_max != "" && $temperature_max < 44) { $temperature_max = 44; }
				if ($temperature_max == "") { $temperature_max = 44; }
				if ($inside == false) {
					if ($temperature_min != "" && $temperature_min > -30) { $temperature_min = -30; }
					if ($temperature_min == "") { $temperature_min = -30; }	
				}
				else {
					if ($temperature_min != "" && $temperature_min > 10) { $temperature_min = 10; }
					if ($temperature_min == "") { $temperature_min = 10; }	
				}
			}
			if ($element == "europe") {
				if ($inside == false) {
					if ($temperature_min != "" && $temperature_min > -58) { $temperature_min = -58; }
					if ($temperature_min == "") { $temperature_min = -58; }
				}
				else {
					if ($temperature_min != "" && $temperature_min > 10) { $temperature_min = 10; }
					if ($temperature_min == "") { $temperature_min = 10; }
				}
				if ($temperature_max != "" && $temperature_max < 48) { $temperature_max = 48; }
				if ($temperature_max == "") { $temperature_max = 48; }
			}
			if ($element == "world") {
				if ($inside == false) {
					if ($temperature_min != "" && $temperature_min > -89) { $temperature_min = -89; }
					if ($temperature_min == "") { $temperature_min = -89; }
				}
				else {
					if ($temperature_min != "" && $temperature_min > 10) { $temperature_min = 10; }
					if ($temperature_min == "") { $temperature_min = 10; }
				}
				if ($temperature_max != "" && $temperature_max < 57) { $temperature_max = 57; }
				if ($temperature_max == "") { $temperature_max = 57; }
			}
		}
	}
	if ($_POST['connection'][0] != "idk") {
		foreach(decode_string_to_list($_POST['connection']) as $element) {
			if ($element == "") {
			    continue;
            }
		}
	}
	/*if ($_POST['communication'][0] != "idk") 
	{ 
		foreach($_POST['communication'] as $element)
		{
			if ($element == "")
			{
			}
		}
	}*/
	if (decode_string_to_list($_POST['frequency'])[0] != "idk") {
		foreach(decode_string_to_list($_POST['frequency']) as $element) {
			if ($element == "permanently") {
				$number_message_per_day = -1;
				$permanently_connected = 1;
			}
			if ($element == "minute") {
				if ($number_message_per_day != -1 && $number_message_per_day < 1440) { $number_message_per_day = 1440; }
			}
			if ($element == "hour") {
				if ($number_message_per_day != -1 && $number_message_per_day < 24) { $number_message_per_day = 24; }
			}
			if ($element == "day") {
				if ($number_message_per_day != -1 && $number_message_per_day < 1) { $number_message_per_day = 1; }
			}
		}
	}
	$require;
	if (is_array($_POST['require'])) {
	    $require = $_POST['require'];
	}
	else { $require = decode_string_to_list($_POST['require']); }
	if ($require[0] != "idk") {
		foreach($_POST['require'] as $element) {
			if ($element == "") {
			    continue;
			}
		}
	}
	$constraints;
    if (is_array($_POST['constraints'])) {
        $constraints = $_POST['constraints'];
    }
    else { $constraints = decode_string_to_list($_POST['constraints']); }
	if ($constraints[0] != "idk") {
		foreach($_POST['constraints'] as $element) {
			if ($element == "waterproof") {
				if (in_array('IP65',$protection_id) == false) {$protection_id[] = 'IP65';}
			}
		}
	}

    $communication_selected = f_getting_com_country(decode_string_to_list($_POST['use']));

	//DISPLAY WORKING
	$communication_tools = new Communication_tools();
    $distance_sensor = new Distance_sensor($_POST['range_distance'], $_POST['accuracy_distance'], $_POST['sampling_speed_distance'], $_POST['max_lighting_distance'], $_POST['temperature_sensitivity_distance'],$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
    $movement_sensor = new Movement_sensor($_POST['range_distance'], $_POST['accuracy_distance'], $_POST['sampling_speed_distance'], $_POST['max_lighting_distance'], $_POST['temperature_sensitivity_movement'],$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
    $pressure_sensor = new Pressure_sensor("",$_POST['minimum_pressure'], $_POST['maximum_pressure'],$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
    $shield_sensor = new Shield_sensor($_POST['max_lighting_shield'], $_POST['spacing_axes_shield'], $_POST['size_detection_shield'], $_POST['range_shield'],$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
    $temperature_sensor = new Temperature_sensor("","", "", "",$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
    $passage_sensor = new Passage_sensor($_POST['range_passage'], $_POST['reaction_delay_passage'], $weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
    $humidity_sensor = new Humidity_sensor("","",$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
    $position_sensor = new Position_sensor("","","","","",$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
    $sensors = new Sensors($distance_sensor,$position_sensor,$humidity_sensor,$movement_sensor,$passage_sensor,$pressure_sensor,$shield_sensor,$temperature_sensor,$communication_tools);

	function f_table_display($sensor,$sensors) {
	    $download = array();
		$data = f_table($sensor,$sensors);
		foreach($data as $element){
			if ($element->percentage > $GLOBALS['display']){
			    $download[count($download)] = $element;
				echo '<tr class="row100 body">';
				echo '<td class="cell100 column1">'.$element->model.'</td>';
				echo '<td class="cell100 column2">'.$element->percentage.'%</td>';
				echo '<td class="cell100 column3">'.$element->communication.'</td>';
				echo '<td class="cell100 column4"><a href = ressource/capteur/'.$element->model.'.pdf target="_blank">Download</a></td>';
				echo '<td class="cell100 column4"><a href = ressource/capteur/'.$element->model.'.pdf target="_blank">Download</a></td>';
				echo '<td class="cell100 column4"><a href = ressource/capteur/'.$element->model.'.pdf target="_blank">Download</a></td>';
				echo '<td class="cell100 column5">'.$element->recommendation;
				echo '</tr>';
			}
		}
		$download_enc = "'".EncodeCSV($download)."'";
		$fileName = "'".$GLOBALS['title'].'_'.$sensor."s'";
		echo '</tbody></table></div>';
		echo '<div class="export"><button onclick="f_ExportCSV('.$download_enc.','.$fileName.')">Export to CSV</button></div>';
	}

    echo '<div class="similar">';
        //f_similar($email,$name,$phone,$organism,$project_title);
    echo '</div>';

    //table object connectés
    /*echo '<div class="limiter"><div class="wrap-table100"><div class="table100 ver1 m-b-110"><div class="table100-head"><table><thead>
        <tr class="row100 head">
            <th class="cell100 column1">Name</th>
            <th class="cell100 column2">Correspondence</th>
            <th class="cell100 column3">Communications</th>
            <th class="cell100 column4">Data Sheet</th>
            <th class="cell100 column4">Download</th>
            <th class="cell100 column4">Download</th>
            <th class="cell100 column5">Recommendation</th>
        </tr></thead></table></div><div class="table100-body js-pscroll"><table><tbody>';
    f_connected_object($_POST,$communication_selected);
    echo '</tbody></table></div></div></div>';*/

    foreach($sensor as $element) {
        if ($element === "pressure_sensor") { echo '<p class="sub_table">Pressure sensors</p>'; }
        if ($element === "distance_sensor") { echo '<p class="sub_table">Distance sensors</p>'; }
        if ($element === "movement_sensor") { echo '<p class="sub_table">Movement sensors</p>'; }
        if ($element === "shield_sensor") { echo '<p class="sub_table">Shield sensors</p>'; }
        if ($element === "passage_sensor") { echo '<p class="sub_table">Passage sensors</p>'; }
        if ($element === "temperature_sensor") { echo '<p class="sub_table">Temperature sensors</p>'; }
        if ($element === "humidity_sensor") { echo '<p class="sub_table">Humidity sensors</p>'; }
        if ($element === "position_sensor") { echo '<p class="sub_table">Position sensors</p>'; }
		echo '
		<div class="limiter">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Name</th>
									<th class="cell100 column2">Correspondence</th>
									<th class="cell100 column3">Communications</th>
									<th class="cell100 column4">Data Sheet</th>
									<th class="cell100 column4">Download</th>
									<th class="cell100 column4">Download</th>
									<th class="cell100 column5">Recommendation</th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="table100-body js-pscroll">
						<table>
							<tbody>';
								f_table_display($element,$sensors); echo '
				</div>
			</div>
		</div>'; 
	}
	?>

	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);
			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
</body>
</html>