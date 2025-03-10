<?php
    // declaração de variáveis
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    //estrutura de decisão
    if ($idade >= 18) {
        echo $nome . " é maior de idade.";
    }
    else {
        echo $nome . " é menor de idade.";
    }

    // link para retornar para a página anterior
    echo '<br><a href="index.html">Voltar</a>';
?>
