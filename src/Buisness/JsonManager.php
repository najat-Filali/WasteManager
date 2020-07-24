<?php

namespace App\Buisness;

use App\Entities\ServicesTraitement\Incinerateur;
use App\Entities\ServiceTraitement\Incinerateur as ServiceTraitementIncinerateur;

class JsonManager{

    private $path; 
    private $datas; 
    private $json; 
    private $petWasteQuantity; 
    private $pvcWasteQuantity; 
    private $pcWasteQuantity; 
    private $pehdWasteQuantity; 
    private $papierWasteQuantity; 
    private $organiqueWasteQuantity; 
    private $verreWasteQuantity; 
    private $metauxWasteQuantity; 
    private $autreWasteQuantity; 
    private $capaciteIncinerateur; 
    private $capaciteComposteur; 

    public function __construct(string $path){
      $this->path = $path; 
      $this->json= file_get_contents($this->path);
      $this->datas= json_decode($this->json, true); 
    }

    public function getQuantityPlastiquesByQuartier(){
          
      foreach($this->datas['quartiers'] as $key=>$val){
      //$population = $data->{'quartiers'}[1]->{'plastiques'}->{'PC'};  
      //var_dump($key . " => " . $val . "<br>");
        foreach($val as $bkey=>$bval){   
            //var_dump($bkey . " => " . $bval); //recup ici tout sauf detail plastique
            //$capacite = $data->{'quartiers'}[0]->{'population'}[0];  
            if($bkey=="plastiques"){       

              foreach($bval as $ckey=>$cval){
              // var_dump($ckey . " => " . $cval . "<br>");//recup ici les quantites plastiques   
                  if($ckey == "PET"){
                    $this->petWasteQuantity += $cval;
                  }if($ckey == "PVC"){
                    $this->pvcWasteQuantity += $cval;
                  }if($ckey == "PC"){
                    $this->pcWasteQuantity += $cval;
                  }if($ckey == "PEHD"){
                    $this->pehdWasteQuantity += $cval;

                  }
              }
            }  
          }
        }
    }
    public function getQuantityWastesByQuartier(){
          
      foreach($this->datas['quartiers'] as $key=>$val){
      //$population = $data->{'quartiers'}[1]->{'plastiques'}->{'PC'};  
      //var_dump($key . " => " . $val . "<br>");
        foreach($val as $bkey=>$bval){   
            //var_dump($bkey . " => " . $bval); //recup ici tout sauf plastique
            //$capacite = $data->{'quartiers'}[0]->{'population'}[0];  

                  if($bkey == "papier"){
                    $this->papierWasteQuantity += $bval;
                  }if($bkey == "organique"){
                    $this->organiqueWasteQuantity += $bval;
                  }if($bkey == "verre"){
                    $this->verreWasteQuantity += $bval;
                  }if($bkey == "metaux"){
                    $this->metauxWasteQuantity += $bval;
                  }if($bkey == "autre"){
                    $this->autreWasteQuantity += $bval;
                  }
              }
        }  
    }
    public function getCapacityByServices(){
      
      foreach($this->datas['services'] as $key=>$val){
        //var_dump($key . " => " . $val . "<br>");

        if($val['type'] == "incinerateur"){

          $ligneFour = $val['ligneFour']; 
          $capaciteLigne = $val['capaciteLigne']; 

          $this->capaciteIncinerateur += $ligneFour * $capaciteLigne; 
        }

        if($val['type'] == "composteur"){
          $capacite = $val['capacite']; 
          $foyers = $val['foyers']; 

          $this->capaciteComposteur += $capacite * $foyers; 

        }
/*
        foreach($val as $bkey=>$bval){   
            //var_dump($bkey . " => " . $bval); //OK 1er niveau //bkey ="type" bval= "incinerateur"

            if($bkey=="plastiques"){      
              foreach($bval as $ckey){
              //var_dump($ckey . "<br>");//ici types de plastiques   
     
              //TODO
              }
            }  
        }*/
      }
    }   

    public function getDatas()
    {
        return $this->datas;
    }

    /**
     * Set the value of datas
     *
     * @return  self
     */ 
    public function setDatas($datas)
    {
        $this->datas = $datas;

        return $this;
    }

       /**
     * Get the value of petWasteQuantity
     */ 
    public function getPetWasteQuantity()
    {
        return $this->petWasteQuantity;
    }

    /**
     * Set the value of petWasteQuantity
     *
     * @return  self
     */ 
    public function setPetWasteQuantity($petWasteQuantity)
    {
        $this->petWasteQuantity = $petWasteQuantity;

        return $this;
    }
        /**
     * Get the value of pvcWasteQuantity
     */ 
    public function getPvcWasteQuantity()
    {
        return $this->pvcWasteQuantity;
    }

    /**
     * Set the value of pvcWasteQuantity
     *
     * @return  self
     */ 
    public function setPvcWasteQuantity($pvcWasteQuantity)
    {
        $this->pvcWasteQuantity = $pvcWasteQuantity;

        return $this;
    }
        /**
     * Get the value of pcWasteQuantity
     */ 
    public function getPcWasteQuantity()
    {
        return $this->pcWasteQuantity;
    }

    /**
     * Set the value of pcWasteQuantity
     *
     * @return  self
     */ 
    public function setPcWasteQuantity($pcWasteQuantity)
    {
        $this->pcWasteQuantity = $pcWasteQuantity;

        return $this;
    }

        /**
     * Get the value of pehdWasteQuantity
     */ 
    public function getPehdWasteQuantity()
    {
        return $this->pehdWasteQuantity;
    }

    /**
     * Set the value of pehdWasteQuantity
     *
     * @return  self
     */ 
    public function setPehdWasteQuantity($pehdWasteQuantity)
    {
        $this->pehdWasteQuantity = $pehdWasteQuantity;

        return $this;
    }

        /**
     * Get the value of papierWasteQuantity
     */ 
    public function getPapierWasteQuantity()
    {
        return $this->papierWasteQuantity;
    }

    /**
     * Set the value of papierWasteQuantity
     *
     * @return  self
     */ 
    public function setPapierWasteQuantity($papierWasteQuantity)
    {
        $this->papierWasteQuantity = $papierWasteQuantity;

        return $this;
    }

    /**
     * Get the value of organiqueWasteQuantity
     */ 
    public function getOrganiqueWasteQuantity()
    {
        return $this->organiqueWasteQuantity;
    }

    /**
     * Set the value of organiqueWasteQuantity
     *
     * @return  self
     */ 
    public function setOrganiqueWasteQuantity($organiqueWasteQuantity)
    {
        $this->organiqueWasteQuantity = $organiqueWasteQuantity;

        return $this;
    }

    /**
     * Get the value of verreWasteQuantity
     */ 
    public function getVerreWasteQuantity()
    {
        return $this->verreWasteQuantity;
    }

    /**
     * Set the value of verreWasteQuantity
     *
     * @return  self
     */ 
    public function setVerreWasteQuantity($verreWasteQuantity)
    {
        $this->verreWasteQuantity = $verreWasteQuantity;

        return $this;
    }

    /**
     * Get the value of metauxWasteQuantity
     */ 
    public function getMetauxWasteQuantity()
    {
        return $this->metauxWasteQuantity;
    }

    /**
     * Set the value of metauxWasteQuantity
     *
     * @return  self
     */ 
    public function setMetauxWasteQuantity($metauxWasteQuantity)
    {
        $this->metauxWasteQuantity = $metauxWasteQuantity;

        return $this;
    }

    /**
     * Get the value of autreWasteQuantity
     */ 
    public function getAutreWasteQuantity()
    {
        return $this->autreWasteQuantity;
    }

    /**
     * Set the value of autreWasteQuantity
     *
     * @return  self
     */ 
    public function setAutreWasteQuantity($autreWasteQuantity)
    {
        $this->autreWasteQuantity = $autreWasteQuantity;

        return $this;
    }
        /**
     * Get the value of capaciteIncinerateur
     */ 
    public function getCapaciteIncinerateur()
    {
        return $this->capaciteIncinerateur;
    }

    /**
     * Set the value of capaciteIncinerateur
     *
     * @return  self
     */ 
    public function setCapaciteIncinerateur($capaciteIncinerateur)
    {
        $this->capaciteIncinerateur = $capaciteIncinerateur;

        return $this;
    }
        /**
     * Get the value of capaciteComposteur
     */ 
    public function getCapaciteComposteur()
    {
        return $this->capaciteComposteur;
    }

    /**
     * Set the value of capaciteComposteur
     *
     * @return  self
     */ 
    public function setCapaciteComposteur($capaciteComposteur)
    {
        $this->capaciteComposteur = $capaciteComposteur;

        return $this;
    }
  }
/*
    
foreach($data['quartiers'] as $key=>$val){
    //$population = $data->{'quartiers'}[1]->{'plastiques'}->{'PC'};  
    //var_dump($key . " => " . $val . "<br>");
    foreach($val as $bkey=>$bval){   
        //var_dump($bkey . " => " . $bval); //recup ici tout sauf plastique
        //$capacite = $data->{'quartiers'}[0]->{'population'}[0];  
        if($bkey=="plastiques"){        
          foreach($bval as $ckey=>$cval){
           // var_dump($ckey . " => " . $cval . "<br>");//recup ici les plastiques      
          }
      }  
    }
  } 
  
  foreach($data['services'] as $key=>$val){
    //var_dump($key . " => " . $val . "<br>");
    foreach($val as $bkey=>$bval){   
        //var_dump($bkey . " => " . $bval); //OK 1er niveau
        if($bkey=="plastiques"){        
          foreach($bval as $ckey){
           //var_dump($ckey . "<br>");//ici types de plastiques       
          }
      }  

 












    }


  
*/
