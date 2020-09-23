<?php

//Recebendo valores fornecidos pelo usuario
$numero =  (isset($_POST['numero'])) ? $_POST['numero'] : '';
$msgInicio = 'Elefante ';
$msgFinal = 'muito mais';
$palavra = ' incomoda ';
$msgTotal ='';

if($numero > 0){
  for($i=0; $i < $numero; $i++){
    $msgTotal .= $palavra;
  }
  echo ($msgInicio . $msgTotal . $msgFinal);
}elseif($numero === '' || $numero <= 0){
  echo 'Escreva um número válido';
}
echo "<p><a href='index.php'>Voltar</a></p>";
// Loop de repetição para calcular quantas vezes a palavra incomoda aparecerá: iniciando de zero até o valor informado


