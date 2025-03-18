<?php
    //classe Pessoa
    class Pessoa {
        //atributos
        public $nome;
        public $idade;
        public $cpf;
        public $email;
        
        //metodos
        //function saudar() {
        //    return "Olá, é um prazer estar aqui!";
       // }

       //Mudarmos um pouco como o método funciona -- Referencia $this
        
       function saudar(){
        return " Olá, meu nome é " . $this->nome . " e é um prazer estar aqui!";
    }
        function exibirCartaoVisita(){
            echo '<h2> Segue o meu cartão de visita: </h2>';
            echo'<h3>'; 
            echo '<b>Nome:</b> ' . $this->nome . '<br>';
            echo '<b>Idade:</b> ' . $this->idade . '<br>';
            echo '<b>CPF:</b> ' . $this->cpf . '<br>';
            echo '<b>Email:</b>'. $this->email .'<br />';
            echo'</h3>';
        }
    }

?>
