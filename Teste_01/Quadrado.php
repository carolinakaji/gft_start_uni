<?php

// Chama a interface
require_once 'AreaCalculavel.php';
// Criando classe
class Quadrado implements AreaCalculavel{
// Atributo
public $lado;

public function aQuadrado($lado){
  $this->setQuadrado($this-->getQuadrado());
}
public function getQuadrado(){
  return $this->area;
}
public function setQuadrado($lado){
  $this->area = $lado * $lado;
}
}
// Área do Quadrado = lado*lado;


