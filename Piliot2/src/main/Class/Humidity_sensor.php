<?php
require_once('Sensor_data.php');
class Humidity_sensor extends Sensor_data
{
    public $accuracy;
    public $temperature_sensitivity;

    public function __construct($temperature_sensitivity, $accuracy,$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI) {
        parent::__construct($weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
        $this->accuracy = $accuracy;
        $this->temperature_sensitivity = $temperature_sensitivity;
    }
}