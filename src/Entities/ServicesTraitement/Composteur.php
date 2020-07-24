<?php

namespace App\Entities\ServicesTraitement;

class Composteur extends Traitement{

    protected $foyers; 

    public function __construct(int $foyers, int $capacite){
        $this->foyers = $foyers; 
        $this->capacite = $foyers * $capacite; 
    }
    /**
     * Get the value of capacite
     */ 
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set the value of capacite
     *
     * @return  self
     */ 
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get the value of foyers
     */ 
    public function getFoyers()
    {
        return $this->foyers;
    }

    /**
     * Set the value of foyers
     *
     * @return  self
     */ 
    public function setFoyers($foyers)
    {
        $this->foyers = $foyers;

        return $this;
    }


}


