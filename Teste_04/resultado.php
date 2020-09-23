<?php

//Recebendo valores fornecidos pelo usuario
$numero =  (isset($_POST['numero'])) ? $_POST['numero'] : '';
$msgInicio = 'Elefante ';
$msgFinal = 'muito mais';
$palavra = ' incomoda ';
$msgTotal ='';

// Verifica condição se o valor é maior que 0
if($numero > 0){
  // Loop de repetição para calcular quantas vezes a palavra incomoda aparecerá: iniciando de zero até o valor informado
  for($i=0; $i < $numero; $i++){
    $msgTotal .= $palavra;
  }
  // Exibe a música em tela
  echo ($msgInicio . $msgTotal . $msgFinal);
  // Verifica validade dos valores serem negativos ou vazio
}elseif($numero === '' || $numero <= 0){
  // Exibe mensagem de valores invalidos em tela
  echo 'Escreva um número válido';
}
echo "<p><a href='index.php'>Voltar</a></p>";



