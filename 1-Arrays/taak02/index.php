<?php

 foreach ($medewerkers as $key => $value) {
    echo $key;
   }
  $medewerkers = [
    [
      'voornaam' => 'Willem',
      'achternaam' => 'van Oranje',
      'functie'  => 'koning'
    ],
    [
      'voornaam' => 'Donald',
      'achternaam' => 'Trump',
      'functie'  => 'president'
    ],
    [
      'voornaam' => 'Homer',
      'achternaam' => 'Simpson',
      'functie'  => 'fabrieksarbeider'
    ],
    [
      'voornaam' => 'Johan',
      'achternaam' => 'Cruyff',
      'functie'  => 'voetbalicoon'
    ]
    ,
    [
      'voornaam' => 'Badr',
      'achternaam' => 'Hari',
      'functie'  => 'Kickboxer'
    ]
  ];


  echo $medewerkers[0]['voornaam']; 
  echo $medewerkers[$x]['voornaam']; 
  echo $medewerkers[$x]['voornaam'];






?>