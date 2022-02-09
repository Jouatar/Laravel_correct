<?php

namespace App\Models\State;

class Envoyer implements State{
    public function getState(){
        return 'Voiture terminer';
    }
    public function change(){
        return 'Voiture en cours de livraion';
    }
}