<?php

class Sensors
{
    public $distance_sensor;
    public $humidity_sensor;
    public $movement_sensor;
    public $passage_sensor;
    public $pressure_sensor;
    public $shield_sensor;
    public $temperature_sensor;
    public $communication_tools;
    public $position_sensor;

    public function __construct($distance_sensor, $position_sensor, $humidity_sensor, $movement_sensor, $passage_sensor, $pressure_sensor, $shield_sensor, $temperature_sensor, $communication_tools){
        $this->humidity_sensor = $humidity_sensor;
        $this->position_sensor = $position_sensor;
        $this->distance_sensor = $distance_sensor;
        $this->movement_sensor = $movement_sensor;
        $this->passage_sensor = $passage_sensor;
        $this->pressure_sensor = $pressure_sensor;
        $this->shield_sensor = $shield_sensor;
        $this->temperature_sensor = $temperature_sensor;
        $this->communication_tools = $communication_tools;
    }
}