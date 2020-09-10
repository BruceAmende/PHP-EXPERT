<?php

class Lamp{
     public $kleur;
      public $helderheid;
     public $isAan;

    function setStatus($status){ 
        $this->isAan = $status;
    }
}
$woonkamerLamp = new Lamp();
$woonkamerLamp->kleur='geel';
$woonkamerLamp->helderheid='zacht';
$woonkamerLamp->isAan=true;
$woonkamerLamp->setStatus(false);
echo $woonkamerLamp->isAan;


$keukenLamp = new Lamp();
$keukenLamp->kleur='wit';
$keukenLamp->helderheid='vel';
$keukenLamp->isAan=false;



?>