<?php

namespace App\Models\Strategie;

use App\Models\Factory\Voiture;

interface Strategie{
    public function calculeTva(Voiture $uneVoiture);
}