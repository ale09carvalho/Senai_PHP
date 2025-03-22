<?php
    // importa a classe
    include "Pessoa.class.php";

    // instancia a classe
    $usuario = new Pessoa("", 0, "");

    //atribui os valores aos atributos
    $usuario->setNome("$_POST[nome]");
    $usuario->setidade("$_POST[idade]");
    $usuario->setEmail("$_POST[email]");

    // Exibe os dados

    echo "<hr>";    
    echo '<b>Nome: </b> ' . $usuario->getNome()  . '.<br />';
    echo '<b>Idade:</b> ' . $usuario->getIdade() . '.<br />';
    echo '<b>E-mail:</b>' . $usuario->getEmail() . '.<br />';

?>
