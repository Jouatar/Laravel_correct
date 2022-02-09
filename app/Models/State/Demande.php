<?php

namespace App\Models\State;

class Demande implements State{
    public function getState(){
        return 'En cour de demande';
    }

    public function change(){
        return new ConstruireChassis();
    }
}