<?php

namespace App\Entities\ServicesTraitement;

class RecyclagePapier extends Traitement{

    public $capacite; 
    public $nbrDechetsRecus; 
    public $capaciteMax; 

    public function __construct($nbrDechetsRecus)
    {
        $this->nbrDechetsRecus = $nbrDechetsRecus;
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