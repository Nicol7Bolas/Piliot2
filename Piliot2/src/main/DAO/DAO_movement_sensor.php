<?php
require_once('Request_data.php');
function f_condition_movement($cti,$data)
{
    $conditions = ""; $used = 0; $terms = 0; $comp = 0; $error = array();
    if ($data->range != "") {
        $terms += $data->rangeI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND `range` >= '.$data->range.''; $used += $data->rangeI;
        }
        else { $error[count($error)] = "range"; }
    }
    if ($data->accuracy != "") {
        $terms += $data->accuracyI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND accuracy <= '.$data->accuracy.''; $used += $data->accuracyI;
        }
        else { $error[count($error)] = "accuracy"; }
    }
    if ($data->power_consumption != "") {
        $terms += $data->power_consumptionI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND power_consumption <= '.$data->power_consumption.''; $used += $data->power_consumptionI;
        }
        else { $error[count($error)] = "power_consumption"; }
    }
    if ($data->sampling_speed != "") {
        $terms += $data->sampling_speedI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND sampling_speed like  "%/'.$data->sampling_speed.'/%"'; $used += $data->sampling_speedI;
        }
        else { $error[count($error)] = "sampling_speed"; }
    }
    if ($data->temperature_sensitivity != "") {
        $terms += $data->temperature_sensitivityI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND temperature_sensitivity <= '.$data->temperature_sensitivity.''; $used += $data->temperature_sensitivityI;
        }
        else { $error[count($error)] = "temperature_sensitivity"; }
    }
    if ($data->max_lighting != "") {
        $terms += $data->max_lightingI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND max_lighting <= '.$data->max_lighting.''; $used += $data->max_lightingI;
        }
        else { $error[count($error)] = "max_lighting"; }
    }
    if (count($data->protection_id) > 0) {
        $terms += $data->protection_idI; $comp++;
        if ($cti[$comp-1] == 1) {
            foreach($data->protection_id as $element) {
                $conditions = $conditions.' AND protection_id LIKE "/'.$element.'/"'; $used += $data->protection_idI;
            }
        }
        else { $error[count($error)] = "protection_id"; }
    }
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
    if ($data->minimum_frequency_resistance != "") {
        $terms += $data->frequency_resistanceI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND minimum_frequency_resistance >= '.$data->minimum_frequency_resistance.''; $used += $data->frequency_resistanceI;
        }
        else { $error[count($error)] = "minimum_frequency_resistance"; }
    }
    if ($data->maximum_frequency_resistance != "") {
        $terms += $data->frequency_resistanceI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND maximum_frequency_resistance <= '.$data->maximum_frequency_resistance.''; $used += $data->frequency_resistanceI;
        }
        else { $error[count($error)] = "maximum_frequency_resistance"; }
    }
    if (count($data->materials) > 0) {
        $terms += $data->materialsI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND (materials NOT LIKE "/" ';
            foreach($data->protection_id as $element) {
                $conditions = $conditions . ' OR materials NOT LIKE %'.$element .'%';
            }
            $used += $data->materialsI;
            $conditions = $conditions.' ) ';
        }
        else { $error[count($error)] = "materials"; }
    }
    if ($data->weight != "") {
        $terms += $data->weightI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND weight <= '.$data->weight.''; $used += $data->weightI;
        }
        else { $error[count($error)] = "weight"; }
    }
    if ($terms === 0) { $terms = 1; $used = 1; }
    $out = new Request_data("distance",$conditions,round ($used / $terms * 100 , 2),$error);
    return $out;
}