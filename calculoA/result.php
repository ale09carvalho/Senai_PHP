<?php
// funçoes area do quadrilatero
function areaQuadrilatero($b, $h)
{
    return $b * $h;
}
// area do triangulo
function areaTriangulo($b, $h)
{
    return $b * $h / 2;
}
function equacao($a, $b)
{
    return  -$b/$a;
}

// declaraçao variaveis
$n1 = str_replace(",", ".", $_POST['n1']);
$n2 = str_replace(",", ".", $_POST['n2']);
$operacao = $_POST['operacao'];

//estrutura de decisao
switch ($operacao) {
    case "quadrilatero":
        echo "Area do quadrilatero é " . calcularQuadrilatero ($n1, $n2) . ".";
        break;

    case "triangulo":
        echo "Area do Triangulo é " . calcularTriangulo ($n1, $n2) . ".";
        break;

    case "Equacao 1º Grau":
        echo "A equaçao do 1 Grau é " . calcularequacao1Grau($n1, $n2) . ".";
        break;
}

//link para  voltar para a pagina anterior
echo '<br /><a href="index.html"> Voltar</a>';

?>
