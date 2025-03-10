<?php
    // funçoes
function area_quadrilatero($a, $b) {
    return $a * $b;
}
function area_triangulo($a, $b) {
    return ($a * $b) / 2;
}
function equacao_1grau($a, $b) {
    if ($a == 0) {
        return "A equação não é válida (a não pode ser zero).";
    }
    return -($b / $a);
}
    #declaraçao variaveis
    $a = str_replace(",",".",$_POST['a']);
    $b = str_replace(",",".",$_POST['b']);
    $calculo = $_POST['calculo'];
    $resultado = "";

    //estrutura de decisao
    switch ($calculo){
        case "area_quadrilatero":
            $resultado = areaQuadrilatero($a, $b);
            $resultado = "Área do Quadrilátero: " . $resultado;
            break;

        case "area_triangulo":
            $resultado = areaTriangulo($a,$b);
            $resultado = "Área do Triângulo: " . $resultado;
            break;
        case "equacao_1grau":
            $resultado = equacaoPrimeiroGrau($a, $b);
            $resultado = "Resultado da Equação do 1º Grau: " . $resultado;
            break;
        default:
            $resultado = "Cálculo não reconhecido.";
            break;
        }
            echo "<h1>Resultado</h1>";
            echo "<p>$resultado</p>";
        ?>
