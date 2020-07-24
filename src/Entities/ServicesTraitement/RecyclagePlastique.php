<?php

namespace App\Entities\ServicesTraitement;


class RecyclagePlastique extends Traitement{

    private $nbrDechetsRecus; 
    private $capaciteMax; 
    private $type = ['PET','PVC', 'PC', 'PEHD']; 

    public function __construct(string $type)
    {
        $this->type = $type;
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
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

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