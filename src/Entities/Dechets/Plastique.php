<?php

namespace App\Entities\Dechets; 

class Plastique extends Dechet{

    const CATEGORY = ['PET','PVC', 'PC', 'PEHD']; 
    const CO2 = ['incineration'=> '', 'recyclage'=> '' ]; 
   
    public function __construct(string $category){     
        $this->category = $category;      
    }












}