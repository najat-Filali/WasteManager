<?php

namespace App\ServiceTraitement; 

class Composteur {

    public $capacite; 
    public $foyers; 
    public $nbrDechetsRecus; 
    public $capaciteMax; 

    public function __construct(int $foyers, int $capacite){
        $this->foyers = $foyers; 
        $this->capacite = $capacite;  
    }

    public function isFull() : bool{

        $capaciteMax = $this->foyers*$this->capacite; 
        if($capaciteMax > $this->nbrDechetsRecus){
            return true; 
        }
    }


}


