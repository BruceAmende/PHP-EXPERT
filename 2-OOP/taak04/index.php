<?php

class Scooter{
    $merk;
    $kleur;
    $inhoudTank;
}



    $peugeot = new Scooter();
    $peugeot->merk = 'peugeot',;
    $peugeot->kleur = 'zwart',;
    $peugeot->inhoudTank = '7',;
    $peugeot->checkInhoud();

    $piago = new Scooter();
    $piago->merk = 'piago',;
    $piago->kleur = 'rood',;
    $piago->inhoudTank = '6',;
    $piago->checkInhoud();
     
    function checkInhoud(){ 
        if($this->inhoudTank == 0){
            echo 'De tank is leeg!' 
            }
        else{
            echo 'de tank is niet leeg!';
        }
    }
    

    
    



?>