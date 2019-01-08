<?php
include_once('Request_data.php');
function f_condition_communication($cti,$data)
{
    $conditions = ""; $used = 0; $terms = 0; $comp = 0; $error = "";
    $out = array();
    if ($data->modulation != "") {
        $terms += $data->modulationI; $comp++;
        if ($cti[$comp-1] == 1) {
        $conditions = $conditions.' AND modulation >= '.$data->modulation.''; $used += $data->modulationI;
        }
    }
    $out[0] = $conditions;
    if ($terms === 0) { $terms = 1; $used = 1; }
    $out = new Request_data("communication",$conditions,round ($used / $terms * 100 , 2),$error);
    return $out;
}