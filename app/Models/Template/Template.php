<?php

namespace App\Models\Template;

abstract class Template {
    public function getText(){
        return $this->getMarque();
    }

    public function getMarque(){
        return 'Template modele';
    }
}