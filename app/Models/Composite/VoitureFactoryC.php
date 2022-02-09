<?php
namespace App\Models\Composite;
use ErrorException;

class VoitureFactoryC{
    private $nom;
    
    public function __construct($nom){
        $this->nom = $nom;
    }
    
    public function makeCar($marqueVoiture) {
        switch($marqueVoiture){
            case "opel":
                return new OpelC();
            case "renaud":
                return new RenaudC();
            default:
                throw new ErrorException('Erreur, la marque n\'existe pas');
        }
    }

    public function getNom(){
        return $this->nom;
    }
}