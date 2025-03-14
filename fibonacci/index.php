<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequencia Fibonacci</title>
</head>
<body>
    <h1>Calculo da Sequencia de Fibonacci</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="numero"> Numero: </label><br />
        <input type="number" name="numero"/>
        <br /><br />
        <button type="submit">Calcular</button>
    </form>
    
    <?php
    /*
    * Funçao Recursiva - deve necessariamente haver uma condição em que as funções para de se invocar. É simplesmente um IF e ELSE.
    * Se atingir determinado valor de argumento, para de se invocar.
    * Senão, continua se invocando.
    *----------------------------------
    * Função para calcular o fibonacci
    * Crie um script php que gere a sequência de fibonacci de acordo com o número informado pelo usuário.
    * em um formulario html. Exemplo O usuario informa no formulario o numero 10, o script php calcula a sequencia de fibonacci até o termo informado 10.
    * Observação: utilizar a funçao recursiva para calcular o fibonacci.
    */

        //funçao para calcular o fibonacci
    function calcularFibonacci($numero)
        {
        return $numero == 0 ? 0 : ($numero == 1 ? 1 : calcularFibonacci($numero - 1) + calcularFibonacci($numero - 2));
    }

     if($_SERVER["REQUEST_METHOD"] == "POST") {
        // declaração de variáveis
        $numero = $_POST["numero"];
        
        // executando a funçao
        echo "<h2> A sequencia de Fibonacci de " .$numero. " é: ";
        for($i = 0; $i < $numero; $i++)
        {
            echo calcularFibonacci($i). " ";
        }
        echo "</h2>";
     }
    ?>
</body>
</html>

