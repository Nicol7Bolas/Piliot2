<?php
function f_condition_connected_object($communication){
    $query = "SELECT * FROM `connected_object` WHERE `communication_tools` LIKE (;
    foreach($communication as $value) {
        $query = $query.' '.$value." OR"
    }
    $query = substr($query,0,-2);
    return $query;
?>
