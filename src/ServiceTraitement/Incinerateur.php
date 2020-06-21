<?php


namespace App\ServiceTraitement; 

class Incinerateur {

    public $capacite; 
    public $ligneFour; 
    public $nbrDechetsRecus; 
    public $capaciteMax;  

    public function __construct(int $ligneFour, int $capacite){
        $this->ligneFour = $ligneFour; 
        $this->capacite = $capacite;  
    }

    public function isFull() : bool{

        $capaciteMax = $this->ligneFour*$this->capacite; 
        if($capaciteMax > $this->nbrDechetsRecus){
            return true; 
        }
    }


}