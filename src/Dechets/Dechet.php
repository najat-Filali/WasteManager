<?php

namespace App\Dechets; 

class Dechet {

    protected $typesDechets; 
    protected $quantiteDechets; 


    public function __construct(string $typeDechets ){

            $this->typesDechets=$typeDechets; 
    }

}












