<?php

namespace App\Entities\Dechets; 

class Dechet {

    protected $typeDechets; 
    protected $totalDechets; 

    public function __construct(string $typeDechets){
        $this->typeDechets = $typeDechets; 
    }

    /**
     * Get the value of typeDechets
     */ 
    public function getTypeDechets()
    {
        return $this->typeDechets;
    }

    /**
     * Set the value of typeDechets
     *
     * @return  self
     */ 
    public function setTypeDechets($typeDechets)
    {
        $this->typeDechets = $typeDechets;

        return $this;
    }

    /**
     * Get the value of totalDechets
     */ 
    public function getTotalDechets()
    {
        return $this->totalDechets;
    }

    /**
     * Set the value of totalDechets
     *
     * @return  self
     */ 
    public function setTotalDechets($totalDechets)
    {
        $this->totalDechets = $totalDechets;

        return $this;
    }
}












