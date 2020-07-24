<?php

namespace App\Entities\ServicesTraitement;

class RecyclageMetal extends Traitement{

    protected $nbrDechetsRecus; 
    protected $capaciteMax; 
   
    public function __construct($nbrDechetsRecus)
    {
        $this->nbrDechetsRecus = $nbrDechetsRecus;
    }   

    /**
     * Get the value of nbrDechetsRecus
     */ 
    public function getNbrDechetsRecus()
    {
        return $this->nbrDechetsRecus;
    }

    /**
     * Set the value of nbrDechetsRecus
     *
     * @return  self
     */ 
    public function setNbrDechetsRecus($nbrDechetsRecus)
    {
        $this->nbrDechetsRecus = $nbrDechetsRecus;

        return $this;
    }

    /**
     * Get the value of capaciteMax
     */ 
    public function getCapaciteMax()
    {
        return $this->capaciteMax;
    }

    /**
     * Set the value of capaciteMax
     *
     * @return  self
     */ 
    public function setCapaciteMax($capaciteMax)
    {
        $this->capaciteMax = $capaciteMax;

        return $this;
    }
}