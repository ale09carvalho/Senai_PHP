<?php
//importando a classe ContaBanco
include 'Conta.class.php';

//criando um objeto da classe ContaBanco
$usuario = new ContaBanco();// construtur objeto tipo ContaBanco

// Pega os valores do formulário e armazena nas variáveis
$usuario->nome = $_POST['nome'];
$usuario->email = $_POST['email'];
$usuario->telefone = $_POST['telefone'];
$usuario->tipo = $_POST['tipo'];
$usuario->numConta = $_POST['numConta'];
$usuario->numAgencia = $_POST['numAgencia'];

// Exibe os valores na tela
$usuario->exibeDados();

?>
