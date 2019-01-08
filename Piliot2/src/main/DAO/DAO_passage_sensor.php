<?php
require_once('Request_data.php');
function f_condition_passage($cti,$data)
{
    $conditions = ""; $used = 0; $terms = 0; $comp = 0;
    $out = array();
    if ($data->minimum_temperature != "") {
        $terms += $data->temperatureI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND minimum_temperature <= '.$data->minimum_temperature.''; $used += $data->temperatureI;
        }
        else { $error[count($error)] = "minimum_temperature"; }
    }
    if ($data->maximum_temperature != "") {
        $terms += $data->temperatureI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND maximum_temperature >= '.$data->maximum_temperature.''; $used += $data->temperatureI;
        }
        else { $error[count($error)] = "maximum_temperature"; }
    }
    if ($data->minimum_humidity != "") {
        $terms += $data->humidityI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND minimum_humidity <= '.$data->minimum_humidity.''; $used += $data->humidityI;
        }
        else { $error[count($error)] = "minimum_humidity"; }
    }
    if ($data->maximum_humidity != "") {
        $terms += $data->humidityI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND maximum_humidity >= '.$data->maximum_humidity.''; $used += $data->humidityI;
        }
        else { $error[count($error)] = "maximum_humidity"; }
    }
    if ($data->weight != "") {
        $terms += $data->weightI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND weight <= '.$data->weight.''; $used += $data->weightI;
        }
        else { $error[count($error)] = "weight"; }
    }
    if ($data->reaction_delay != "") {
        $terms += $data->reaction_delayI; $comp++; 
		if ($cti[$comp-1] == 1) {
			$conditions = $conditions.' AND reaction_delay <= '.$data->reaction_delay.''; $used += $data->reaction_delayI;
		}
		else { $error[count($error)] = "reaction_delay"; }
    }
    if ($data->maximum_range != "") {
        $terms += $data->maximum_rangeI; $comp++; 
		if ($cti[$comp-1] == 1) {
			$conditions = $conditions.' AND maximum_range >= '.$data->maximum_range.''; $used += $data->maximum_rangeI;
		}
		else { $error[count($error)] = "maximum_range"; }
    }
    if (count($data->type) > 0) {
        $terms += $data->typeI; $comp++; 
		if ($cti[$comp-1] == 1) {
			$i = 1; $max = count($data->type);
			$conditions = $conditions.' AND (';
			foreach($data->type as $element) {
				$conditions = $conditions.'type = "'.$element.'"';
				if ($i < $max ) { $conditions = $conditions.' OR '; $i++; }
			}
			$conditions = $conditions.') ';
			$used += $data->typeI;
		}
		else { $error[count($error)] = "type"; }
    }
    $out[0] = $conditions;
    if ($terms === 0) { $terms = 1; $used = 1; }
    $out[1] = round ($used / $terms * 100 , 2);
    return $out;
}