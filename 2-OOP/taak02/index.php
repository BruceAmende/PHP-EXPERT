<?php

class __auto__(){
    $merk;
    $kleur;
    $type;
    $uitvoering;
    $brandstof;
  }

$nieuweAuto = new __auto__();
$nieuweAuto->merk = 'Tesla';
echo $nieuweAuto->merk;

$nieuweAuto = new __auto__();
$nieuweAuto->kleur = 'Rood';
echo $nieuweAuto->kleur;

$nieuweAuto = new __auto__();
$nieuweAuto->type = 'Model3';
echo $nieuweAuto->type;

$nieuweAuto = new __auto__();
$nieuweAuto->uitvoering = 'Cabrio';
echo $nieuweAuto->uitvoering;

$nieuweAuto = new __auto__();
$nieuweAuto->brandstof = 'Elektrisch';
echo $nieuweAuto->brandstof;


?>