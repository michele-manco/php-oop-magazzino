<?php

// magazzino e-commerce di strumenti musicali
// caratteristiche in comune ad.esempio fra prodotto chitarre e tastiere:
// codice
// prezzo
// nome
// descrizione
// anno di produzione

class Prodotto {
  public $codice;
  public $prezzo;
  private  $nome;
  public $descrizione;
  public $anno_d_p;

  public function getNome(){
    return $this->nome;
  }
  public function setNome($nome) {
    echo $this->nome = $nome;
  }
  public function __construct($code, $price, $name){
    $this->codice = $code;
    $this->prezzo = $price;
    $this->nome = $name;
  }
}

// caratteristiche spec. chitarre:
// verniciatura
// num.corde
// legni
// pick-up

class Chitarra extends Prodotto{
  public $vernici;
  public $corde;
  public $legni;
  public $pickup;

}
//
// caratteristiche specifiche tastiere
// num. tasti
// materiali
// dim. display
class Tastiera extends Prodotto{
  public $tasti;
  public $materiali;
  public $display;

  // public function __construct($price, $name, $keys,$materials, $displaynum){
  //    parent::__construct($price, $name);
  //    $this->tasti = $keys;
  //    $this->materiali = $materials;:
  //    $this->display = $displaynum;
  // }

}

$prodotto1 = new Prodotto('strum001','1000€', 'Chitarra' );

$prodotto1->descrizione = 'bla bla ';
$prodotto1->$anno_d_p = '2001';


echo '<pre>';
var_dump($prodotto1);
echo '</pre>';

$chitarra1 = new Chitarra('strum001','1000€', 'Chitarra');
$chitarra1->vernici = 'nitro';
$chitarra1->corde = '6';
$chitarra1->legni = 'palissandro';
$chitarra1->pickup = '2 humbucker';
$chitarra1->descrizione = 'nuova';
$chitarra1->anno_d_p = '2001';

echo '<pre>';
var_dump($chitarra1);
echo '</pre>';

$tastiera1 = new Tastiera('strum002','1200€', 'Tastiera');
$tastiera1->tasti = '88';
$tastiera1->materiali = 'plastiche';
$tastiera1->display = '8p';

echo '<pre>';
var_dump($tastiera1);
echo '</pre>';






 ?>
