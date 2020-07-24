<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Buisness\JsonManager; 


//$json = file_get_contents("data.json");
//$datas = json_decode($json,true); 

//$maVar = $data->{'propObj1'}->{'propObj2'}->{'propARecup'}; //obj ds un objt, descendre ds les obj
//$maVar2 = $data->{‘prop’}[0]->{‘prop2’}[2]->{‘prop’}; //cas de l'array, desceend ds propr

/*
foreach($datas['quartiers'] as $key=>$val){
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

foreach($datas['services'] as $key=>$val){
  //var_dump($key . " => " . $val . "<br>");
  foreach($val as $bkey=>$bval){   
      //var_dump($bkey . " => " . $bval); //OK 1er niveau; bkey="type" bval==""
      if($bkey=="plastiques"){        
        foreach($bval as $ckey){
         //var_dump($ckey . "<br>");//ici 2e niveau types de plastiques       
        }
    }  
  }
} 
*/
$jsonManager = new JsonManager("data.json"); 
//$datas = $jsonManager->getDatas(); 

//$dataServices = $datas["services"][0]["type"];//recupere type [0]

$jsonManager->getQuantityPlastiquesByQuartier(); 
$jsonManager->getQuantityWastesByQuartier(); 
$jsonManager->getCapacityByServices(); 


$dataPet =$jsonManager->getPetWasteQuantity(); 
$dataPvc =$jsonManager->getPvcWasteQuantity(); 
$dataPc= $jsonManager->getPcWasteQuantity(); 
$dataPehd= $jsonManager->getPehdWasteQuantity(); 
$dataPapier = $jsonManager->getPapierWasteQuantity(); 
$dataVerre = $jsonManager->getVerreWasteQuantity(); 

$dataIncinerateur = $jsonManager->getCapaciteIncinerateur(); 
$dataComposteur = $jsonManager->getCapaciteComposteur(); 



//var_dump($dataPet);
//var_dump($dataPvc);
var_dump($dataPc);
var_dump($dataPehd);
var_dump("total de dechets papier : " . $dataPapier);
var_dump("total de dechets verre : " . $dataVerre);

var_dump("capacite totale des incinerateurs : ". $dataIncinerateur);
var_dump("capacite totale des composteurs : ". $dataComposteur);




