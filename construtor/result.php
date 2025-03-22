<?php
    //importa a classe
    include "Pessoa.class.php";

    //instancia a classe Pessoa - criar um objeto de uma class - Pessoa é o nome da  classe
    // Pessoa() é o Metodo construtor da classe Pessoa - metodo não é visivel
    // ja passando os valores para o construtor
    // $usuario = new Pessoa($_POST["nome"], $_POST["idade"], $_POST["email"], $_POST["cargo"]);


    //outra forma de inicializar o construtot
    // O construtor permite que você defina valores iniciais para os atributos do objeto, garantindo que o objeto comece em um estado válido.
    // inicia a classe construtor com valores nullo
    $usuario = new Pessoa(" ", 0, "", "");

    // inicializa os atributos
    $usuario->nome = $_POST["nome"];
    $usuario->idade = $_POST["idade"];
    $usuario->email = $_POST["email"];
    $usuario->cargo = $_POST["cargo"];

    //exibe dados
    echo "<h1> Dados do Usuário </h1>";
    echo "<hr>";    
    echo "<p><b>Nome</b>: " . $usuario->nome . "</p>";
    echo "<p><b>Idade</b>: " . $usuario->idade . "</p>";
    echo "<p><b>Email</b>: " . $usuario->email . "</p>";
    echo "<p><b>Cargo</b>: " . $usuario->cargo . "</p>";
?>
