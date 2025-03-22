<?php
    // classe Pessoa
    class Pessoa {
        // atributos
        private $nome;
        private $idade;
        private $email;

        //metodo construtor
        public function __construct($nome, $idade, $email){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;
        }

        // metodos de acesso - usa para conseguir acessar os atributos privados 2 tipo metodo get e set
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setidade($idade){
            $this->idade = $idade;
        }   
        public function getidade(){
            return $this->idade;
        }
        public function setEmail($email){
            $this->email = $email;
     }
        public function getEmail(){
        return $this->email;
    }
}


?>
