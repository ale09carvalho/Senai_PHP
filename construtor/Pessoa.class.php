<?php
    //Classe Pessoa
    class Pessoa {
        // Atributos
        public $nome;
        public $idade;
        public $email;
        public $cargo;

        // underscore _ _ construct padrao para criaçao  ---  passar os valores ja na sua construção
        public function __construct( $nome, $idade, $email, $cargo) {
           
          // cada atributo recebe o valor passado como parametro
            // this é uma referencia a propria classe
            // this.nome é o atributo nome da classe            
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;
            $this->cargo = $cargo;
        }

}
?>
