<?php

namespace App\Models\Strategie;

use App\Models\Factory\Voiture;
use App\Models\Strategie\Strategie;

class Tva20 implements Strategie {
    public function calculeTva(Voiture $uneVoiture)
    {
        return $uneVoiture->getPrix()*1.20;
    }
}