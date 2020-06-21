<?php

namespace App\ServiceTraitement; 

class CentreTri{

    const CAPACITE = 73922; 
    public $nbrDechetsRecus; 
   
    public function trier(){


    }

    public function isOrganic() : bool{

        return true; 

    }

    public function isFull() : bool{
        if($this->CAPACITE > $this->nbrDechetsRecus){
            return true; 
        }
    }

}
