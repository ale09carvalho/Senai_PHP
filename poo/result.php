<?php
    // importando a classe
    include "Pessoa.class.php";
    
    // instanciando a classe Pessoa - (criar objeto do tipo pessoa)
    $usuario = new Pessoa(); // construtor - construindo um objeto do tipo pessoa

    // repassando os valores informados pelo usuário para os atributos do objeto
    //pegar os valores do formulário e atribui ao objelto

    $usuario->nome = $_POST["nome"];
    $usuario->idade = $_POST["idade"];
    $usuario->cpf = $_POST["cpf"];
    $usuario->email = $_POST["email"];
    
    // executando a 1º função
    echo '<h1>' . $usuario->saudar() . '</h1>';
    $usuario->exibirCartaoVisita()
    
    
?>
