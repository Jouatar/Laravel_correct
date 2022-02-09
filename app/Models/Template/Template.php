<?php

namespace App\Models\Template;

abstract class Template {
    public function getText(){
        return $this->getMarque();
    }

    abstract public function getMarque();
}