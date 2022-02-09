<?php

namespace App\Models\State;

class Construire{
    private $state;

    public function __construct(){
        $this->state = new Demande();
    }

    public function getState() {
        return $this->state->getState();
    }

    public function avancer(){
        $this->state = $this->state->change();
    }
}