<?php

class Kalkulacka{

    public $prvniCislo;
    public $druheCislo;

    public function soucet(){
    return $this->prvniCislo + $this->druheCislo;}
    
    public function rozdil(){
    return $this->prvniCislo - $this->druheCislo;}
    
    public function soucin(){   
    return $this->prvniCislo * $this->druheCislo;} 

    public function podil(){   
    return $this->prvniCislo / $this->druheCislo;}
}
?>
