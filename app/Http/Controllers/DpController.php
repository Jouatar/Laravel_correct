<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Facade\Concession;
use App\Models\Singleton;
use App\Models\Factory\VoitureFactory;
use App\Models\Facade\Facade;
use App\Models\Observer\Observer;
use App\Models\Observer\Sujet;
use App\Models\Strategie\FactureLine;
use App\Models\Template\TemplateEnfant1;
use App\Models\Template\TemplateEnfant2;
use Carbon\Factory;

class DpController extends Controller {
  
  public function index() {
    return view('pattern.indexDp');
  }

  public function show($n) {
    if($n==='1'){
      $a = Singleton::getInstance();
      $b = Singleton::getInstance();
      return view('pattern.singleton', ['a' => $a, 'b' => $b]);
    }
    if($n==='2'){
      $usine = new VoitureFactory('Usine de Baptiste');
      $opel = $usine->makeCar("opel");
      $renaud = $usine->makeCar("renaud");
      return view('pattern.factory', ['opel' => $opel, 'renaud' => $renaud]);
    }
    if($n==='3'){
      $facade = new Facade();
      $tabRes = $facade->commander(1);
      return view('pattern.facade',['usine'=>$tabRes[0], 'concession'=>$tabRes[1], 'facture'=>$tabRes[2] ]);
    }
    if($n==='4'){
      $concession = new Concession('la conss\' à toto');
      $usine = new VoitureFactory('Usine de Baptiste');
      $concession->addVoiture($usine->makeCar('renaud'));
      $concession->addVoiture($usine->makeCar('opel'));
      $concession->addVoiture($usine->makeCar('renaud'));
      return view('pattern.iterator',['iteratorConcession'=>$concession->getIterator()]);
    }
    if($n==='5'){
      $obsa = new Observer('A');
      $obsb = new Observer('B');
      $sujet = new Sujet();
      $sujet->attach($obsa);
      $sujet->attach($obsb);
      return view('pattern.observer', ['sujet'=>$sujet]);
    }
    if($n==='6'){
      $factory = new VoitureFactory('L\'usi\' à Baba');
      $voitureO = $factory->makeCar('opel');
      $voitureR = $factory->makeCar('renaud');
      $factureLineO = new FactureLine($voitureO);
      $factureLineR = new FactureLine($voitureR);
      return view('pattern.strategie', ['vo'=>$voitureO,'flo'=>$factureLineO, 'vr'=>$voitureR, 'flr'=>$factureLineR]);
    }
    if($n==='7'){
      $temp1 = new TemplateEnfant1();
      $temp2 = new TemplateEnfant2();
      return view('pattern.template', ['tp1' => $temp1, 'tp2' => $temp2]);
    }
    if($n==='8'){
      return view('pattern.command', []);
    }
    if($n==='9'){
      return view('pattern.composite', []);
    }
    if($n==='10'){
      return view('pattern.chainofresponsability', []);
    }
    if($n==='11'){
      return view('pattern.state', []);
    }
    return view('error404');
  }

}