<?php
require_once('Sensor_data.php');
class Temperature_sensor extends Sensor_data
{
    public $accuracy;
    public $sampling_speed;
    public $minimum_temperature_measure;
    public $maximum_temperature_measure;

    public $accuracy_temperatureI = 10;
    public $power_consumption_temperatureI = 10;
    public $sampling_speed_temperatureI = 10;
    public $temperature_temperatureI = 10;

    public function __construct($accuracy, $sampling_speed, $minimum_temperature_measure, $maximum_temperature_measure,$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI) {
        parent::__construct($weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
        $this->accuracy = $accuracy;
        $this->power_consumption = $power_consumption;
        $this->sampling_speed = $sampling_speed;
        $this->minimum_temperature_measure = $minimum_temperature_measure;
        $this->maximum_temperature_measure = $maximum_temperature_measure;
    }
}