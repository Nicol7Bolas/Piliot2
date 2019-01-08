<?php

class Results
{
    public $model;
    public $percentage;
    public $error;
    public $recommendation;

    public function __construct($model, $percentage, $error, $recommendation){
        $this->model = $model;
        $this->percentage = $percentage;
        if($recommendation != 0) {$this->recommendation = $recommendation;}
        else {$this->recommendation = "None";}
        if(count($error) > 0) {
            $this->error = $error;
        }
        else { $this->error = array(); }
    }
}