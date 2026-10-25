<?php

class Car 
{
  private $num_telaio;
  protected function setVin($string)
  {
    return $this->num_telaio = $string;
  }
  protected function getVin()
  {
    return $this->num_telaio;
  }
}

class Fiat extends Car {
  protected $license;
  protected $name;

  public function __construct($targa,$nome)
  {
    $this->license = $targa;
    $this->name = $nome;
  }

  public function setMyVin($string)
  {
    return $this->setVin($string);
  }
  public function getMyVin()
  {
    return $this->getVin()
  }
  public function printMessage()
  {
    echo " la MIA macchina è una $this->name con targa $this->license e  con VIN " . this->getMyVin() ."\n";
  }
}

$car = new Fiat('aa 0000 bb','Mahindra');
$car->setMyVin('00000000000000A');
$car->printMessage();