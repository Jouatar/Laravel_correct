<?php

namespace App\Models\Composite;

class OpelC extends VoitureC implements PrixTotal{

  private static $nbInstance = 0;
  public static $coutTotal = 0;
  protected $prix = 12000;

  public function __construct() {  
    parent::__construct('Opel',$this->prix);
    $this::$nbInstance++;
  }

  public function getPrixTotal(){
    $this::$coutTotal = $this::$nbInstance * $this->prix;
    return $this::$coutTotal;
  }
}