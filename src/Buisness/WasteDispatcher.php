<?php 

namespace App\Buisness;

use App\Entities\ServicesTraitement\Traitement;

class WasteDispatcher{


    public function __construct($property)
    {
        $this->property = $property;
    }

    public function isFull(Traitement $traitement) : bool{
        if($traitement->capacite > $this->nbrDechetsRecus){
            return true; 
        }       
    } 

    public function trierDechets(string $typeDechets){
        
        switch($typeDechets){
            case "verre" : 
                break; 
            case "papier" :
                break;
            case "metaux" :
                break;
            case "organique" :
                break; 
            default:
                break;
        }
    }

    public function trierDechetsPlastiques(string $typeDechets){
        
        switch($typeDechets){
            case "PET" : 
                break; 
            case "PVC" :
                break;
            case "PC" :
                break;
            case "PEHD" :
                break; 
            default:
                break;
        }
    }
}