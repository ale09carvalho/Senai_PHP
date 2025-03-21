<?php
//classe contaBanco

class ContaBanco{
    //atributos
    public $nome;
    public $email;
    public $telefone;
    public $tipo;
    public $numConta;
    public $numAgencia;
    
    //método exibeDados
    public function exibeDados(){
        echo "<h2>Dados do Usuário</h2>";
        echo "<hr>";
        echo "Nome: ".$this->nome."<br>";
        echo "Email: ".$this->email."<br>";
        echo "Telefone: ".$this->telefone."<br>";
        echo "Tipo: ".$this->tipo."<br>";
        echo "Número da Conta: ".$this->numConta."<br>";
        echo "Número da Agência: ".$this->numAgencia."<br>";
        echo "<hr>";
    }
}
?>
