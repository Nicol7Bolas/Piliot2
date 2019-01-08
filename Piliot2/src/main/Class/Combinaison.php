<?php

class Combinaison
{
    private $begin='';
    private $text='';
    private $index=0;
    private $maxSize;
    private $factoriel;
    private $result='';
    private $tabResult=array();

    public function __construct($var){
        $this->begin = $var;
        $this->text = $var;
        $this->maxSize = $this->size($var);
        $this->factoriel = $this->factoriel($this->size($var));
    }
    public function getFactoriel() {
        return $this->factoriel;
    }
    public function getTabResult() {
        return $this->tabResult;
    }
    private function size($var){
        if(is_array($var)){
            return count($var);
        }
        if(is_string($var)){
            return strlen($var);
        }
    }
    private function factoriel($n){
        if($n === 0){
            return 1;
        }else{
            return $n*$this->factoriel($n-1);
        }
    }
    public function buildCombinaison($var){
        $size=$this->size($var);
        for($i=0; $i<$size; $i++){
            $varUpdate=substr_replace( $var ,'',$i,1 );
            $this->result.=$var[$i];
            if ($varUpdate!=""){
                $this->buildCombinaison($varUpdate);
            }
            else{
                $this->result=substr($this->begin,0,($this->maxSize-$this->size($this->result))).$this->result;
                $this->begin=$this->result;
                $this->tabCombinaison($this->result);
                $this->result="";
            }
        }
        $temp = $this->tabResult;
        $this->tabResult = f_sort_combinaison($temp);
    }
    private function tabCombinaison($var=''){
        $this->tabResult[$this->index]=$var;
        $this->index++;
    }
    public function __destruct(){
    }
}