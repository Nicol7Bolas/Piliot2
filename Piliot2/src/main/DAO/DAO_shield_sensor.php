<?php
require_once('Request_data.php');
function f_condition_shield($cti,$data)
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
    $out[0] = $conditions;
    if ($terms === 0) { $terms = 1; $used = 1; }
    $out[1] = round ($used / $terms * 100 , 2);
    return $out;
}