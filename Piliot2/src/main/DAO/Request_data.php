<?php

class Request_data
{
    public $type;
    public $conditions;
    public $percentage;
    public $error;

    public function __construct($type,$conditions, $percentage, $error){
        $this->type = $type;
        $this->conditions = $conditions;
        $this->percentage = $percentage;
        $this->error = $error;
    }
}