<?php

namespace App\Models\State;

class Peindre implements State{
    public function getState(){
        return 'En cour de session peinture';
    }

    public function change(){
        return new Envoyer();
    }
}