<?php

class Sensor_data
{
    public $weight;
    public $materials;
    public $protection_id;
    public $shock_resistance;
    public $minimum_frequency_resistance;
    public $maximum_frequency_resistance;
    public $minimum_humidity;
    public $maximum_humidity;
    public $minimum_temperature;
    public $maximum_temperature;
    public $minimum_temperature_storage;
    public $maximum_temperature_storage;
    public $power_consumption;
    public $communication_selected;

    public $shock_resistanceI = 1;
    public $frequency_resistanceI = 1;
    public $humidity_storageI = 1;
    public $temperature_storageI = 1;
    public $temperatureI = 1;
    public $humidityI = 1;
    public $weightI = 1;
    public $power_consumptionI = 1;
    public $materialsI = 5;
    public $protection_idI = 5;

    public function __construct($weight, $materials, $protection_id, $shock_resistance, $minimum_frequency_resistance, $maximum_frequency_resistance, $minimum_humidity, $maximum_humidity, $minimum_temperature, $maximum_temperature, $minimum_temperature_storage, $maximum_temperature_storage, $power_consumption, $shock_resistanceI, $frequency_resistanceI, $humidity_storageI, $temperature_storageI, $temperatureI, $weightI, $power_consumptionI, $humidityI)
    {
        $this->weight = $weight;
        if (count($materials) > 0) {
            $this->materials = $materials;
        }
        else {
            $this->materials = array();
        }
        $this->protection_id = $protection_id;
        $this->shock_resistance = $shock_resistance;
        $this->minimum_frequency_resistance = $minimum_frequency_resistance;
        $this->maximum_frequency_resistance = $maximum_frequency_resistance;
        $this->minimum_humidity = $minimum_humidity;
        $this->maximum_humidity = $maximum_humidity;
        $this->minimum_temperature = $minimum_temperature;
        $this->maximum_temperature = $maximum_temperature;
        $this->minimum_temperature_storage = $minimum_temperature_storage;
        $this->maximum_temperature_storage = $maximum_temperature_storage;
        $this->power_consumption = $power_consumption;
        $this->shock_resistanceI = $shock_resistanceI;
        $this->frequency_resistanceI = $frequency_resistanceI;
        $this->humidity_storageI = $humidity_storageI;
        $this->temperature_storageI = $temperature_storageI;
        $this->temperatureI = $temperatureI;
        $this->humidityI = $humidityI;
        $this->weightI = $weightI;
        $this->power_consumptionI = $power_consumptionI;
    }

}