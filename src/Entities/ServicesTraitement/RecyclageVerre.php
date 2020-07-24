<?php


namespace App\Entities\ServicesTraitement;

class RecyclageVerre extends Traitement{

    private float $capacite; 
    private bool $consigne; 

    public function __construct()
    {
        $this->capacite = 20791; 
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
     * Get the value of consigne
     */ 
    public function getConsigne()
    {
        return $this->consigne;
    }

    /**
     * Set the value of consigne
     *
     * @return  self
     */ 
    public function setConsigne($consigne)
    {
        $this->consigne = $consigne;

        return $this;
    }
}