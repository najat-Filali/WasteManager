<?php

namespace App;

use App\ServiceTraitement\Composteur;

// indique le chemin du fichier JSON, il peut s'agir d'une URL
$json = file_get_contents("data.json");
$data = json_decode($json,true); //param true parse en array, sinon objet

//$maVar = $data->{'propObj1'}->{'propObj2'}->{'propARecup'}; //obj ds un objt, descendre ds les obj
//$maVar2 = $data->{‘prop’}[0]->{‘prop2’}[2]->{‘prop’}; //cas de l'array, desceend ds propr

    foreach($data['services'] as $key=>$val){
        //$popu = $data->{'quartiers'}[1]->{'plastiques'}->{'PC'}; //fonctionne  

        //var_dump($key . " => " . $val . "<br>");
    
        foreach($val as $bkey=>$bval){

            var_dump($bkey . " => " . $bval);
            //$capacite = $data->{'quartiers'}[0]->{'population'}[0];  
            //$data1= $bkey[1]->$bkey[1]->$bkey[0]; 


        }
    }

function createComposteur(){
  //recupere ici infos et cree un array de composteurs
}

