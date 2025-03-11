<?php
include "funcoes.php"

// declaraçao de variavis

$r = str_replace (',','.',$_POST['r']);
//saida de dados

echo "<b> Area do circulo:<b>" . calcularAreaCirculo($r). ". <br/>";
echo "<br> Tamanho da circuferencia:<br>" . calcalarCircuferencia($r). ".<br/>";

// arrendondar valor
/*
echo "<b> Area do circulo:<b>" .round(calcularAreaCirculo($r),2) . ". <br/>";
echo "<br> Tamanho da circuferencia:<br>" . round(calcalarCircuferencia($r),2) . ".<br/>";
*/

?>
