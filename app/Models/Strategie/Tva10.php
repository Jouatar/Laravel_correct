<?php

namespace App\Models\Strategie;

use App\Models\Factory\Voiture;
use App\Models\Strategie\Strategie;

class Tva10 implements Strategie {
    public function calculeTva(Voiture $uneVoiture)
    {
        return $uneVoiture->getPrix()*1.10;
    }
}