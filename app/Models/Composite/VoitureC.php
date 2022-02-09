<?php

namespace App\Models\Composite;

use App\Models\Factory\Renaud;

class VoitureC implements PrixTotal {
  
  private static $tabPrixEnfant=[];
  protected $marque;
  protected $prix;

  public function __construct($maMarque, $monPrix) {
    $this->marque = $maMarque;
    $this->prix = $monPrix;
  }

  public function getMarque(){
    return $this->marque;
  }

  public function getPrix(){
    return $this->prix;
  }

  public function getPrixTotal(){
    return OpelC::$coutTotal + RenaudC::$coutTotal;
  }
}