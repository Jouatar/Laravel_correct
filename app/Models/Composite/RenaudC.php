<?php

namespace App\Models\Composite;

class RenaudC extends VoitureC implements PrixTotal{

  private static $nbInstance = 0;
  public static $coutTotal = 0;
  protected $prix = 15000;

  public function __construct() {  
    parent::__construct('Renaud',$this->prix);
    $this::$nbInstance++;
  }

  public function getPrixTotal(){
    $this::$coutTotal = $this::$nbInstance * $this->prix;
    return $this::$coutTotal;
  }
}