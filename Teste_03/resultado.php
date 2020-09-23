<?php


/*3) Escreva um programa que pergunte o dia, mês e ano do aniversário de uma pessoa e diga se a data é válida ou não. Caso não seja, diga o motivo. Suponha que todos os meses têm 31 dias e que estejamos no ano de 2018. Caso a data esteja correta imprima “Data válida”.
*/

// Verifica se existe um valor inserido, caso sim, atribui à variável o valor ou string vazia
$dia =  (isset($_POST['dia'])) ? $_POST['dia'] : '';
$mes =  (isset($_POST['mes'])) ? $_POST['mes'] : '';
$ano =  (isset($_POST['ano'])) ? $_POST['ano'] : '';

$msgErro = '';

if (intval($dia) > 31 || intval($dia) < 0 || $dia = '') {
  $msgErro .= '<p>Dia inválido, favor digitar dia entre 1 e 31</p><br>';
} else {
  $msgErro = '';
}
if (intval($mes) > 12 || intval($mes) < 0 || $mes = '') {
  $msgErro .= '<p>Mês inválido, favor digitar dia entre 1 e 12</p><br>';
} else {
  $msgErro .= '';
}
if (intval($ano) > 2018 || intval($ano) < 0 || $ano = '') {
  $msgErro .= '<p>Ano inválido, favor digitar dia entre 0 e 2018</p><br>';
} else {
  $msgErro .= '';
}

// Verifica se existem mensagens de erro, se houver a condição não é válida e exibem as mensagens de erro. Caso verdadeiro, mostra mensagem Valida.
if ($msgErro == '') {
  echo "<p>Data válida</p>";
} else {
  echo $msgErro;
}
