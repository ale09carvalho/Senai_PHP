<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FATORIAL</title>
</head>
<body>
    <h1>Calculo do Fatorial de um numero inteiro</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="numero"> Numero: </label><br />
        <input type="number" name="numero"/>
        <br /><br />
        <button type="submit">Calcular</button>
    </form>
    
    <?php
/**
 * ====================== FUNÇÃO RECURSIVA ===========================
 * Usada em situações onde a função chama a ela mesma...
 *Uma função recursiva é nada mais nada menos que uma função que invoca...ela mesma.
*/  
        //funçao para calcular o fatorial
    function calcularFatorial($numero)
    {
        //fatorial de 5! - 5*4*3*2*1
        return $numero == 0 ? 1 : $numero * calcularFatorial($numero - 1);
    }

     if($_SERVER["REQUEST_METHOD"] == "POST") {
        // declaração de variáveis
        $numero = $_POST["numero"];
        
        // executando a funçao
        echo "<h2> O fatorial de" .$numero. "! é: " . calcularFatorial($numero). "</h2>";
     }

    ?>
</body>
</html>
