<?php
    // classe Pessoa Fisica
    // possso definir dessa forma=>  final class PessoaFisica  * porem nao consegue criar uma a partir dela seria uma classe sem filhos
    // dessa forma ==> final class PessoaFisica extends Pessoa -- ele ja entende que deve pegar da classe pai os atributos (nao precisa colocar tel,ender e email)

     final class PessoaFisica extends Pessoa{
        private $nome;
        private $cpf;
        private $dataNascimento;
        private $profissao;
        private $genero;

        // metodo de acesso
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }
        public function setDataNascimento($dataNacimento){
            $this->dataNascimento = $dataNacimento;
        }

        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        public function setProfissao($profissao){
            $this->profissao = $profissao;
        }

        public function getProfissao(){
            return $this->profissao;
        }

        public function setGenero($genero){
            $this->genero = $genero;
        }

        public function getGenero(){
            return $this->genero;
        }

     }


?>
