<?php
require_once('Request_data.php');
function f_condition_temperature($cti,$data)
{
    $conditions = ""; $used = 0; $terms = 0; $comp = 0; $error = array();
    $out = array();
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
    if ($data->minimum_temperature_measure != "") {
        $terms += $data->temperature_temperatureI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND minimum_environment_temperature <= '.$data->minimum_temperature_measure.''; $used += $data->temperature_temperatureI;
        }
        else { $error[count($error)] = "minimum_environment_temperature"; }
    }
    if ($data->maximum_temperature_measure != "") {
        $terms += $data->temperature_temperatureI; $comp++;
        if ($cti[$comp-1] == 1) {
            $conditions = $conditions.' AND maximum_environmen_temperature >= '.$data->maximum_temperature_measure.''; $used += $data->temperature_temperatureI;
        }
        else { $error[count($error)] = "maximum_environmen_temperature"; }
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
    if (count($data->protection_id) > 0) {
        $terms += $data->protection_idI; $comp++;
        if ($cti[$comp-1] == 1) {
            foreach($data->protection_id as $element) {
                $conditions = $conditions.' AND protection_id LIKE "/'.$element.'/"'; $used += $data->protection_idI;
            }
        }
        else { $error[count($error)] = "weight"; }
    }
    $out[0] = $conditions;
    if ($terms === 0) { $terms = 1; $used = 1; }
    $out[1] = round ($used / $terms * 100 , 2);
    return $out;
}