<?php
    // classe Pessoa Juridica
    

     final class PessoaJuridica extends Pessoa {
        private $nameRazaoSocial;
        private $cnpj;
    

        // metodo de acesso
        public function setnameRazaoSocial($nameRazaoSocial){
            $this->nome = $nameRazaoSocial;
        }

        public function getnameRazaoSocial(){
            return $this->nameRazaoSocial;
        }

        public function setCnpj($cnpj){
            $this->cpf = $cnpj;
        }

        public function getCnpj(){
            return $this->cnpj;
        }

     }
?>
