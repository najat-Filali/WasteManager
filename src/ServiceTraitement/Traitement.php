<?php

namespace App\ServiceTraitement; 

class Traitement{

    protected $type = []; 
    protected $capacite; 
    /**
     * @var Dechet
     */
    protected $dechet; 

    public function trierDechets(){

        switch($this->dechet){
            case "verre" : 
                $tri= new CentreTri(); 
                $tri->quantite->trier(); 
                break; 
            case "plastiques" :
                $tri= new CentreTri(); 
                $tri->trier(); 
                break;
            case "papier" :
                $tri= new CentreTri(); 
                $tri->trier(); 
                break;
            case "metal" :
                $tri= new CentreTri(); 
                $tri->trier(); 
                break;
            case "organique" :
                $composteur = new Composteur(3,12); 
                $incinerateur = new Incinerateur(3,12); 

                if($composteur->isFull){
                    $this->dechet->quantite += $incinerateur;                    
                }else{
                    $this->nbrDechetRecus += $composteur;       
                }
                break; 
            default:
                $incinerateur = new Incinerateur(3,12);
                $this->dechet->quantite += $incinerateur; 
                break;
        }
    }

   


}