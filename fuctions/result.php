<?php
    //funçoes com parametro e com retorno
    function darBoasVindas($nome){
        //retorna o valor da funçao
        return "Seja bem vindo, " .$nome. "!";
        
    }

    //algoritmo principal
    echo darBoasVindas($_POST['nome']);

?>
