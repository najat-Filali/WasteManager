<?php

namespace App\Entities\ServicesTraitement;

class Incinerateur extends Traitement{

    protected $capaciteLigne; 
    protected $ligneFour; 

    public function __construct( $ligneFour, $capaciteLigne){
        $this->ligneFour = $ligneFour; 
        $this->capaciteLigne = $capaciteLigne;  
        $this->capacite = $ligneFour * $capaciteLigne; 
    }

    /**
     * Get the value of capaciteLigne
     */ 
    public function getCapaciteLigne()
    {
        return $this->capaciteLigne;
    }

    /**
     * Set the value of capaciteLigne
     *
     * @return  self
     */ 
    public function setCapaciteLigne($capaciteLigne)
    {
        $this->capaciteLigne = $capaciteLigne;

        return $this;
    }

    /**
     * Get the value of ligneFour
     */ 
    public function getLigneFour()
    {
        return $this->ligneFour;
    }

    /**
     * Set the value of ligneFour
     *
     * @return  self
     */ 
    public function setLigneFour($ligneFour)
    {
        $this->ligneFour = $ligneFour;

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
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set the value of capaciteMax
     *
     * @return  self
     */ 
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }
}