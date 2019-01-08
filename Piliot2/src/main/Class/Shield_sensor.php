<?php
require_once('Sensor_data.php');
class Shield_sensor extends Sensor_data
{
    public $max_lighting_shield;
    public $spacing_axes_shield;
    public $size_detection_shield;
    public $range_shield;

    public $max_lighting_shieldI = 10;
    public $spacing_axes_shieldI = 10;
    public $size_detection_shieldI = 10;
    public $range_shieldI = 10;

    public function __construct($max_lighting_shield,$spacing_axes_shield, $size_detection_shield,$range_shield,$weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI) {
        parent::__construct($weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI,$humidityI);
        $this->max_lighting_shield = $max_lighting_shield;
        $this->spacing_axes_shield = $spacing_axes_shield;
        $this->size_detection_shield = $size_detection_shield;
        $this->range_shield = $range_shield;
    }
}