<?php
    // declaraçao de variavel
    //str_replace — Substitui as ocorrências  , e . string 

    $nome = $_POST["nome"];
    $peso = str_replace (",", ".", $_POST["peso"]);
    $altura = str_replace (",", ".", $_POST["altura"]);

    //calcular o imc - divide-se o peso pela altura elevada ao quadrado
    // função POW (POTENCIA)

    $imc = $peso/pow($altura, 2);

    //Diagnostico com base no valor do imc
    #if ($imc <= 18.5) $result =$nome . "Esta abauxo do peso.";
    #else if($imc <= 25) $result = $nome;  "Esta no peso ideal.";

    if ($imc <= 18.5) {
        $result =$nome . "Esta abaixo do peso.";
    }
    else if($imc <= 25){
        $result = $nome . "Esta no peso ideal.";
    }
    else if ($imc <= 30){
        $result = $nome . "Esta acima do peso.";
    }
    else if ($imc <= 35){
        $result = $nome .  "Esta obeso.";
    }
    else if ($imc <= 40){
        $result = $nome . "Esta obesidade nivel II.";
    }
    else {
        $result = $nome .  "Esta obesidade mórbida.";
    }

    //exibe os valores na tela 
    //round($imc, 2) qtd casas decimais no resultado do imc
    echo <body style = "font-family:arial,helvetica, sans-serif;">;
    echo '<h1 style="text-align: center:">;
    echo ';color:' .$corTexto .' ";");
    echo  $nome  ", seu IMC é:" . round($imc, 2) .".";
    echo '</h1>';
    echo '<h2 style = "text-align: center;">';
    echo $result;
   

    //link para voltar para pagina anterior

    echo '<br/> <a href= "index.html">Voltar</a>';
    echo '</body>';
?>             
