<?php

namespace App\Models\State;

class ConstruireChassis implements State{
    public function getState(){
        return 'En cour de construction du chassis';
    }

    public function change(){
        return new Peindre();
    }
}