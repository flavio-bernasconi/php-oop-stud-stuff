<?php

  trait printFullName{

    public function fullName(){

      echo $this -> name . " " . $this -> surname . "<br>";
    }

  }

  class Persona{

    use printFullName;

    public $name;
    public $surname;
    public $address;


    public function __construct($name, $surname, $address ){
      $this -> name = $name;
      $this -> surname = $surname;
      $this -> address = $address;

    }

    public function toString(){
      echo $this -> address;
    }

  }//fine Persona



  class Studente extends Persona {

    public $programma;
    public $tasse;


    public function __construct($name, $surname, $address, $programma, $tasse){

      parent::__construct($name, $surname, $address);
      $this -> programma = $programma;
      $this -> tasse = $tasse;

    }

    public function toString(){
      echo parent::toString() . "<br>" .
      $this -> programma . "<br>" . $this -> tasse;

    }

  }//fine Studente


  class Professore extends Persona {

    public $specializzazione;
    public $paga;

    public function __construct($name, $surname, $address, $specializzazione, $paga){

      parent::__construct($name, $surname, $address);
      $this -> specializzazione = $specializzazione;
      $this -> paga = $paga;

    }

    public function toString(){
      echo parent::toString() . "<br>" . $this -> specializzazione . "<br>" . $this -> paga;
    }



  }//fine Professore



  $persona1 = new Persona("marco","neri","manzoni 345");
  $persona1 -> fullName();
  $persona1 -> toString();

  echo "<br><br>";

  $studente1 = new Studente("luca","bianchi","roma 23","matematica - fisica","2341");
  $studente1 -> fullName();
  $studente1 -> toString();

  echo "<br><br>";

  $professore1 = new Professore("paolo","rossi","roma 66","chimica - matematica","1200");
  $professore1 -> fullName();
  $professore1 -> toString();


?>
