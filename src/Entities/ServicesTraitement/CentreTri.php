<?php

namespace App\Entities\ServicesTraitement;

class CentreTri extends Traitement{

    protected $nbrDechetsRecus; 
    protected $recyclageVerre; 
    protected $recyclagePlastique; 
    protected $recyclagePapier; 
    protected $recyclageMetal; 

    public function __construct(){
        $this->capacite = 73922;  
    }

    public function isFull() : bool{
        if($this->capacite > $this->nbrDechetsRecus){
            return true; 
        }
    }
    /**
     * Get the value of recyclageVerre
     */ 
    public function getRecyclageVerre()
    {
        return $this->recyclageVerre;
    }

    /**
     * Set the value of recyclageVerre
     *
     * @return  self
     */ 
    public function setRecyclageVerre($recyclageVerre)
    {
        $this->recyclageVerre = $recyclageVerre;

        return $this;
    }

    /**
     * Get the value of recyclagePlastique
     */ 
    public function getRecyclagePlastique()
    {
        return $this->recyclagePlastique;
    }

    /**
     * Set the value of recyclagePlastique
     *
     * @return  self
     */ 
    public function setRecyclagePlastique($recyclagePlastique)
    {
        $this->recyclagePlastique = $recyclagePlastique;

        return $this;
    }

    /**
     * Get the value of recyclagePapier
     */ 
    public function getRecyclagePapier()
    {
        return $this->recyclagePapier;
    }

    /**
     * Set the value of recyclagePapier
     *
     * @return  self
     */ 
    public function setRecyclagePapier($recyclagePapier)
    {
        $this->recyclagePapier = $recyclagePapier;

        return $this;
    }

    /**
     * Get the value of recyclageMetal
     */ 
    public function getRecyclageMetal()
    {
        return $this->recyclageMetal;
    }

    /**
     * Set the value of recyclageMetal
     *
     * @return  self
     */ 
    public function setRecyclageMetal($recyclageMetal)
    {
        $this->recyclageMetal = $recyclageMetal;

        return $this;
    }
}
