<?php
require_once('Sensor_data.php');
class Pressure_sensor extends Sensor_data

{
    public $type;
    public $minimum_pressure;
    public $maximum_pressure;

    public $typeI = 5;
    public $pressureI = 5;

    public function __construct($type,$minimum_pressure, $maximum_pressure,$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI) {
        parent::__construct($weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
        $this->type = $type;
        $this->minimum_pressure = $minimum_pressure;
        $this->maximum_pressure = $maximum_pressure;
    }
}