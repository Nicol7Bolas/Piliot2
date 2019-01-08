<?php
require_once('Sensor_data.php');
class Distance_sensor extends Sensor_data
{
    public $range;
    public $accuracy;
    public $sampling_speed;
    public $temperature_sensitivity;
    public $max_lighting;

    public $rangeI = 5;
    public $accuracyI = 5;
    public $sampling_speedI = 5;
    public $temperature_sensitivityI = 5;
    public $max_lightingI = 5;

    public function __construct($range, $accuracy, $sampling_speed, $temperature_sensitivity, $max_lighting,$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI) {
        parent::__construct($weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
        $this->range = $range;
        $this->accuracy = $accuracy;
        $this->sampling_speed = $sampling_speed;
        $this->temperature_sensitivity = $temperature_sensitivity;
        $this->max_lighting = $max_lighting;
    }
}