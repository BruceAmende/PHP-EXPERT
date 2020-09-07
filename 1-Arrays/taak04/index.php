<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];


$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];

echo $speelgoed[0]['naam'];
echo "\n";
echo $speelgoed[0]['soort'];
echo "\n";
echo $speelgoed[0]['prijs'];
echo "\n  <br>";
echo $speelgoed[1]['naam'];
echo "\n";
echo $speelgoed[1]['soort'];
echo "\n";
echo $speelgoed[1]['prijs'];
echo "\n  <br>";
echo $speelgoed[2]['naam'];
echo "\n";
echo $speelgoed[2]['soort'];
echo "\n";
echo $speelgoed[2]['prijs'];
echo "\n  <br>";

echo $games['sport']['naam'];
echo "\n";
echo $games['sport']['uitgever'];
echo "\n";
echo $games['sport']['prijs'];
echo "\n  <br>";
echo $games['action']['naam'];
echo "\n";
echo $games['action']['uitgever'];
echo "\n";
echo $games['action']['prijs'];
echo "\n  <br>";
echo $games['fps']['naam'];
echo "\n";
echo $games['fps']['uitgever'];
echo "\n";
echo $games['fps']['prijs'];




