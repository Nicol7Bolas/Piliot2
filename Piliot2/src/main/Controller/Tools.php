<?php

function f_sort_combinaison($table) //function only used for combinaisons items
{
    $out = array();
    foreach ($table as $value) {
        $test = true;
        foreach ($out as $temporary) {
            if ($temporary === $value) { $test = false; }
        }
        if ($test == true) {
            $out[count($out)] = $value;
        }
    }
    return $out;
}

function f_table_to_list($table)
{
    $out = array();
    foreach ($table as $list) {
        foreach($list as $element) {
            $out[count($out)] = $element;
        }
    }
    return $out;
}

function f_text_combinaison($terms)
{
    $out = array();
    for ($i = 0 ; $i <= $terms ; $i++) {
        $temp = "";
        for ($k = 0 ; $k < $i ; $k++) {
            $temp = $temp."1";
        }
        for ($p = 0 ; $p < $terms - $i ; $p++) {
            $temp = $temp."0";
        }
        $out[$i] = $temp;
    }
    return $out;
}

function f_sort_order($list_ini)
{
    $list = $list_ini;
    for($i = 1 ; $i < count($list) ; $i++) {
        for($j = count($list) - 1 ; $j > 2 ; $j--){
            if($list[$j - 1]->percentage < $list[$j]->percentage) {
                $t = $list[$j];
                $list[$j] = $list[$j-1];
                $list[$j-1] = $t;
            }
        }
    }
    return $list;
}

function f_sort_sensor($table)
{
    $out = array();
    foreach ($table as $element){
        $test = false;
        foreach($out  as $element2){
            if($element->model == $element2->model) { $test = true; }
        }
        if ($test == false) {
            $out[count($out)] = $element;
        }
    }
    return $out;
}

function encode_list_to_string($list) {
    if (count($list) == 0){
        return "";
    }
    $output = "";
    foreach($list as $element) {
        $output = $output.$element."/";
    }
    return $output;
}

function decode_string_to_list($string){
    $output = array();
    $temp = "";
    for($i = 0; $i < strlen($string); $i++){
        $char = $string[$i];
        if ($char != "/") {
            $temp = $temp.$char;
        }
        if ($char == "/"){
            $output[count($output)] = $temp;
            $temp = "";
        }
    }
    return $output;
}

function ClearString ($string) {
    $output = "";
    for($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] == '/') {
            $output = $output." ";
        }
        else {
            $output = $output.$string[$i];
        }
    }
    return $output;
}