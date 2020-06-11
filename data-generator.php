<?php

$services = ['incinerateur', 'recyclagePlastique', 'recyclagePapier', 'recyclageVerre', 'recyclageMetaux', 'centreTri','composteur'];
$plastiques = ['PET', 'PVC', 'PC', 'PEHD'];
$allWastes = 0;
$data = [
    "quartiers" => [],
    "services" => []
];

for ($x=0; $x < rand(1, 20); $x++) { 
    $population = rand(500, 80000);
    $totalDechets = $population * 0.536;
    $allWastes += $totalDechets;

    $data['quartiers'][] = [
        'population' => $population,
        'plastiques' => [
            'PET' => round($totalDechets * mt_rand(2, 6) / 100, 2),
            'PVC' => round($totalDechets * mt_rand(3, 10) / 100, 2),
            'PC' => round($totalDechets * mt_rand(1, 5) / 100, 2),
            'PEHD' => round($totalDechets * mt_rand(4, 7) / 100, 2),
        ],
        'papier' => round($totalDechets * mt_rand(18, 23) / 100, 2),
        'organique' => round($totalDechets * mt_rand(25, 35) / 100, 2),
        'verre' => round($totalDechets * mt_rand(10, 14) / 100, 2),
        'metaux' => round($totalDechets * mt_rand(1, 4) / 100, 2),
        'autre' => round($totalDechets * mt_rand(18, 24) / 10, 2)
    ];
}

foreach ($services as $service) {
    $min = 1;
    $max = 3;
    if($service == 'composteur') {
        $min = 3;
        $max = 20;
    }
    for ($i=0; $i < rand($min,$max); $i++) { 
        $usine = [
            'type' => $service,
        ];
        if($service == 'incinerateur') {
            $usine['ligneFour'] = rand(2,5);
            $usine['capaciteLigne'] = round($allWastes / 5 * mt_rand(1,2));
        }
        if($service == 'recyclagePlastique') {
            $usine['plastiques'] = getRandomItems($plastiques);
            $usine['capacite'] = round($allWastes / 12 * mt_rand(1,2));
        }
        if($service == 'recyclagePapier') {
            $usine['capacite'] = round($allWastes / 9 * mt_rand(1,2));
        }
        if($service == 'recyclageVerre') {
            $usine['capacite'] = round($allWastes / 16 * mt_rand(1,2));
            $usine['consigne'] = rand(0,1) == 0;
        }
        if($service == 'recyclageMetaux') {
            $usine['capacite'] = round($allWastes / 15 * mt_rand(1,2));
        }
        if($service == 'centreTri') {
            $usine['capacite'] = round($allWastes / 9 * mt_rand(1,2));
        }
        if($service == 'composteur') {
            $usine['capacite'] = rand(1,3);
            $usine['foyers'] = rand(40, 120);
        }
        $data['services'][] = $usine;
    }
}

$file = fopen('./data.json', 'w+');
fwrite($file, json_encode($data));
fclose($file);



function getRandomItems($array, $itemNumber=0) {
    if($itemNumber==0) {
        $itemNumber = rand(1,3);
    }
    $keys = array_rand($array, $itemNumber);
    $values = [];
    for ($i=0; $i < $itemNumber; $i++) { 
        $values[] = $array[$keys[$i]];
    }
    return $values;
}
