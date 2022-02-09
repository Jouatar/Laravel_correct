<?php

namespace App\Models\Strategie;

use App\Models\Factory\Voiture;
use Exception;

class FactureLine {
    protected $maVoiture;

    public function __construct(Voiture $uneVoiture)
    {
        $this->maVoiture = $uneVoiture;
    }

    public function getMontant() {
        if($this->maVoiture->getMarque()==='Renaud'){
            $fctLine = new Tva20();
        }
        if($this->maVoiture->getMarque()==='Opel'){
            $fctLine = new Tva10();
        }
        return $fctLine->calculeTva($this->maVoiture);
    }
}