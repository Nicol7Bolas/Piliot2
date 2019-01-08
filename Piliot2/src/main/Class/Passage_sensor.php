<?php
require_once('Sensor_data.php');
class Passage_sensor extends Sensor_data

{
    public $maximum_range;
    public $reaction_delay;
    public $type;

    public $maximum_rangeI = 5;
    public $reaction_delayI = 5;
    public $typeI = 5;

    public function __construct($maximum_range, $reaction_delay, $weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI) {
        parent::__construct($weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
        $this->maximum_range = $maximum_range;
        $this->reaction_delay = $reaction_delay;
        $this->type = array();
    }
}