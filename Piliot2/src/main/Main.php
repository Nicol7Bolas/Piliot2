<?php
require_once('Class/Results.php');
require_once('Controller/Tools.php');
require_once('DAO/DAO_movement_sensor.php');
require_once('DAO/DAO_pressure_sensor.php');
require_once('DAO/DAO_temperature_sensor.php');
require_once('DAO/DAO_distance_sensor.php');
require_once('DAO/DAO_communication.php');
require_once('DAO/DAO_passage_sensor.php');
require_once('DAO/DAO_shield_sensor.php');
require_once('DAO/DAO_humidity_sensor.php');
require_once('DAO/DAO_position_sensor.php');

function f_generate_combinaison($sensor,$sensors)
{
    $texts = array(); $out = array();
    if ($sensor === "pressure_sensor") { $texts = f_text_combinaison(f_terms_pressure($sensors->pressure_sensor)); }
    if ($sensor === "distance_sensor") { $texts = f_text_combinaison(f_terms_distance($sensors->distance_sensor)); }
    if ($sensor === "movement_sensor") { $texts = f_text_combinaison(f_terms_distance($sensors->movement_sensor)); }
    if ($sensor === "moyen_communication") { $texts = f_text_combinaison(f_terms_communication($sensors->communication_tools)); }
    if ($sensor === "shield_sensor")
        $texts = f_text_combinaison(f_terms_shield($sensors->shield_sensor));
    if ($sensor === "passage_sensor")
        $texts = f_text_combinaison(f_terms_passage($sensors->passage_sensor));
    if ($sensor === "temperature_sensor")
        $texts = f_text_combinaison(f_terms_temperature($sensors->temperature_sensor));
    foreach ($texts as $text) {
        $test = new Combinaison($text);
        $test->buildCombinaison($text);
        $out[count($out)] = $test->getTabResult();
    }
    $out = f_table_to_list($out);
    return $out;
}

function f_terms_pressure($data)
{
    $terms = 0;
    if ($data->minimum_temperature != "") { $terms++; }
    if ($data->maximum_temperature != "") { $terms++; }
    if ($data->minimum_humidity != "") { $terms++; }
    if ($data->maximum_humidity != "") { $terms++; }
    if ($data->weight != "") { $terms++; }
    return $terms;
}

function f_terms_distance($data)
{
    $terms = 0;
    if ($data->minimum_temperature != "") { $terms++; }
    if ($data->maximum_temperature != "") { $terms++; }
    if ($data->minimum_humidity != "") { $terms++; }
    if ($data->maximum_humidity != "") { $terms++; }
    if ($data->weight != "") { $terms++; }
    if ($data->max_lighting != "") { $terms++; }
    if ($data->accuracy != "") { $terms++; }
    if ($data->temperature_sensitivity != "") { $terms++; }
    if ($data->sampling_speed != "") { $terms++; }
    if ($data->range != "") { $terms++; }
    return $terms;
}

function f_terms_movement($data)
{
    $terms = 0;
    if ($data->minimum_temperature != "") { $terms++; }
    if ($data->maximum_temperature != "") { $terms++; }
    if ($data->minimum_humidity != "") { $terms++; }
    if ($data->maximum_humidity != "") { $terms++; }
    if ($data->weight != "") { $terms++; }
    if ($data->max_lighting != "") { $terms++; }
    if ($data->accuracy != "") { $terms++; }
    if ($data->temperature_sensitivity != "") { $terms++; }
    if ($data->sampling_speed != "") { $terms++; }
    if ($data->range != "") { $terms++; }
    return $terms;
}

function f_terms_communication($data)
{
    $terms = 0;
    if ($data->modulation != "") { $terms++; }
    if ($data->minimum_frequency != "") { $terms++; }
    if ($data->maximum_frequency != "") { $terms++; }
    if ($data->minimum_data_debit != "") { $terms++; }
    if ($data->maximum_data_debit != "") { $terms++; }
    return $terms;
}

function f_terms_shield($data)
{
    $terms = 0;
    if ($data->minimum_temperature != "") { $terms++; }
    if ($data->maximum_temperature != "") { $terms++; }
    if ($data->minimum_humidity != "") { $terms++; }
    if ($data->maximum_humidity != "") { $terms++; }
    if ($data->weight != "") { $terms++; }
    return $terms;
}

function f_terms_passage($data){
    $terms = 0;
    if ($data->minimum_temperature != "") { $terms++; }
    if ($data->maximum_temperature != "") { $terms++; }
    if ($data->minimum_humidity != "") { $terms++; }
    if ($data->maximum_humidity != "") { $terms++; }
    if ($data->maximum_range != "") { $terms++; }
    if ($data->reaction_delay != "") { $terms++; }
    return $terms;
}

function f_terms_temperature($data){
    $terms = 0;
    if ($data->minimum_temperature_storage != "") { $terms++; }
    if ($data->maximum_temperature_storage != "") { $terms++; }
    if ($data->minimum_humidity != "") { $terms++; }
    if ($data->maximum_humidity != "") { $terms++; }
    if ($data->accuracy != "") { $terms++; }
    if ($data->power_consumption != "") { $terms++; }
    if ($data->sampling_speed != "") { $terms++; }
    if ($data->minimum_temperature != "") { $terms++; }
    if ($data->maximum_temperature != "") { $terms++; }
    if ($data->shock_resistance != "") { $terms++; }
    if ($data->materials != "") { $terms++; }
    if ($data->weight != "") { $terms++; }
    if ($data->protection_id != "") { $terms++; }
    return $terms;
}

function f_terms_humidity($data){
    $terms = 0;
    if ($data->minimum_temperature_storage != "") { $terms++; }
    if ($data->maximum_temperature_storage != "") { $terms++; }
    if ($data->minimum_humidity != "") { $terms++; }
    if ($data->maximum_humidity != "") { $terms++; }
    if ($data->accuracy != "") { $terms++; }
    if ($data->power_consumption != "") { $terms++; }
    if ($data->sampling_speed != "") { $terms++; }
    if ($data->minimum_temperature != "") { $terms++; }
    if ($data->maximum_temperature != "") { $terms++; }
    if ($data->shock_resistance != "") { $terms++; }
    if ($data->materials != "") { $terms++; }
    if ($data->weight != "") { $terms++; }
    if ($data->protection_id != "") { $terms++; }
    return $terms;
}

function f_request($conditions, $percentage, $sensor){
    $out = array();
    $query = 'SELECT model,recommendation,communication FROM '.$sensor.' WHERE model != "" '.$conditions;
    $response = $GLOBALS['bdd']->query($query);
    if(!$response) { return null; }
    else {
        while ($data = $response->fetch()) {
            $out[count($out)] = new Results($data['model'],$percentage,array(),$data['recommendation'],ClearString($data['communication']));
        }
    }
    if (count($out) == 0) { $out[0] = new Results("",0,array(),"",""); }
    return $out;
}

function f_table($sensor,$sensors,$communication_selected){
    $out = array();
    $combinaison_list = f_generate_combinaison($sensor,$sensors);
    if ($sensor === "pressure_sensor") {
        if (count($combinaison_list) === 0) { $combinaison_list[0] = 0; }
        foreach ($combinaison_list as $combinaison) {
            $condition = f_condition_pressure($combinaison,$sensors->pressure_sensor);
            $temp = f_request($condition[0],$condition[1],$sensor);
            if ($temp[0] != "") {
                $out = $temp;
            }
        }
    }
    if ($sensor === "distance_sensor"){
        if (count($combinaison_list) === 0) { $combinaison_list[0] = 0; }
        foreach ($combinaison_list as $combinaison) {
            $condition = f_condition_distance($combinaison,$sensors->distance_sensor);
            $temp = f_request($condition->conditions,$condition->percentage,$sensor);
            if ($temp[0] != "") {
                $out = $temp;
            }
        }
    }
    if ($sensor === "shield_sensor") {
        if (count($combinaison_list) === 0) { $combinaison_list[0] = 0; }
        foreach ($combinaison_list as $combinaison) {
            $condition = f_condition_shield($combinaison,$sensors->shield_sensor);
            $temp = f_request($condition[0],$condition[1],$sensor);
            if ($temp[0] != "") {
                $out = $temp;
            }
        }
    }
    if ($sensor === "passage_sensor") {
        if (count($combinaison_list) === 0) { $combinaison_list[0] = 0; }
        foreach ($combinaison_list as $combinaison) {
            $condition = f_condition_passage($combinaison,$sensors->passage_sensor);
            $temp = f_request($condition[0],$condition[1],$sensor);
            if ($temp[0] != "") {
                $out = $temp;
            }
        }
    }
    if ($sensor === "temperature_sensor") {
        if (count($combinaison_list) === 0) { $combinaison_list[0] = 0; }
        foreach ($combinaison_list as $combinaison) {
            $condition = f_condition_temperature($combinaison,$sensors->temperature_sensor);
            $temp = f_request($condition[0],$condition[1],$sensor);
            if ($temp[0] != "") {
                $out = $temp;
            }
        }
    }
    if ($sensor === "position_sensor") {
        if (count($combinaison_list) === 0) { $combinaison_list[0] = 0; }
        foreach ($combinaison_list as $combinaison) {
            $condition = f_condition_position($combinaison,$sensors->position_sensor);
            $temp = f_request($condition->conditions,$condition->percentage,$sensor);
            if ($temp[0] != "") {
                $out = $temp;
            }
        }
    }
    if ($sensor === "humidity_sensor") {
        if (count($combinaison_list) === 0) { $combinaison_list[0] = 0; }
        foreach ($combinaison_list as $combinaison) {
            $condition = f_condition_humidity($combinaison,$sensors->humidity_sensor);
            $temp = f_request($condition[0],$condition[1],$sensor);
            if ($temp[0] != "") {
                $out = $temp;
            }
        }
    }
    if ($sensor === "movement_sensor") {
        if (count($combinaison_list) === 0) { $combinaison_list[0] = 0; }
        foreach ($combinaison_list as $combinaison) {
            $condition = f_condition_movement($combinaison,$sensors->movement_sensor);
            $temp = f_request($condition->conditions,$condition->percentage,$sensor);
            if ($temp[0] != "") {
                $out = $temp;
            }
        }
    }
    $out = f_sort_order($out);
    $out = f_sort_sensor($out);
    //$out = f_filtering_communication($out,$communication_selected);
    return $out;
}

function f_filtering_communication($tab,$communication_selected){
    $table = $tab;
    foreach($table as $sensor){
        $temp = array();
        $communication = $sensor->communication;
        foreach($communication_selected as $com){
            if (\strpos($communication,$com)){
                $temp[(count($temp))] = $com;
            }
        }
        $sensor->communication = $temp;
    }
    return $table;
}

function EncodeCSV ($sensors) {
    $link1 = $_SERVER['PHP_SELF'];
    $output = "Model name;Percentage of correspondence;None respected;Percentage of recommendation;Communications available; DataSheet link;".'\n';
    foreach($sensors as $element) {
        $link2 = 'ressource/capteur/'.$element->model.'.pdf';
        $link = $link1.$link2;
        $output = $output.$element->model.';';
        $output = $output.$element->percentage.';';
        $temp = "";
        foreach($element->error as $error){
            if ($temp != "") { $temp = $temp.'/'; }
            $temp = $temp.$error;
        }
        $output = $output.$temp.';';
        $output = $output.$element->recommendation.';';
        $output = $output.$element->communication.';';
        $output = $output.$link.';;'.'\n';
    }
    return $output;
}
?>