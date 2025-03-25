<?php
    // class Pessoa
    // herança -- criar uma classe apartir de outra
    //super classe reunir atributos e metodos 

    abstract class Pessoa {
        //atributos
        
        private $telefone;
        private $endereco;
        private $email;


        //metodos de acesso

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getTelefone(){
            return $this->telefone;
        }
        
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getEndereco(){
            return $this->endereco;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }
    

    }

?>
