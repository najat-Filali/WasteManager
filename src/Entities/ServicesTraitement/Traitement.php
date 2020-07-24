<?php

namespace App\Entities\ServicesTraitement; 

class Traitement{

    protected float $capacite; 
    protected float $capaciteRestante; 
    protected float $nbrDechetsRecus; 

    public function __construct($capacite)
    {
        $this->capacite = $capacite;
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
     * Get the value of capaciteRestante
     */ 
    public function getCapaciteRestante()
    {
        return $this->capaciteRestante;
    }

    /**
     * Set the value of capaciteRestante
     *
     * @return  self
     */ 
    public function setCapaciteRestante($capaciteRestante)
    {
        $this->capaciteRestante = $capaciteRestante;

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
}