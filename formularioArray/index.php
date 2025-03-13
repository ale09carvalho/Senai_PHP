<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Dados Pessoais </title>
</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h1>Formulário de Dados Pessoais</h1>
        <hr />
        <label for="name">Nome: </label><br />
        <input type="text" name="nome" /><br><br />
        
        <label for="idade">Idade: </label><br />
        <input type="text" name="idade" /><br><br />
        
        <label for="email">E-mail: </label><br />
        <input type="email" name="email" /><br><br />
        
        <label for="telefone">Telefone: </label><br />
        <input type="number" name="telefone" /><br><br />
        
        <label for="CPF"> CPF: </label><br />
        <input type="text" name="CPF" /><br><br />
        
        <label for="profissao">Profissão: </label><br />
        <input type="text" name="profissao" /><br><br />
        
        <label for="CEP"> CEP: </label><br />
        <input type="text" name="cep" /><br><br /> 
        
        <label for="UF">UF: </label><br />
        <input type="text" name="UF" /><br><br />
        
        <label for="cidade">Cidade: </label><br />
        <input type="text" name="cidade" /><br><br /> 
        
        <label for="bairro">Bairro: </label><br />
        <input type="text" name="bairro" /><br><br />
        
        <label for="logradouro">Logradouro: </label><br />
        <input type="text" name="logradouro" /><br><br />
       
        <label for="complemento">Complemento: </label><br />
        <input type="text" name="complemento" /><br><br />
        
        <label for="numero">Numero: </label><br />
        <input type="number" name="numero" /><br><br />
        
        <button type="submit">Enviar </button>
        <hr />
    </form>
    <hr />
</body>
</html>

<?php
/* Crie um novo projeto chamado "dados_usuario" nele crie um arquivo chamado index.php, onde voce ira criar um formulario  onde o usuario 
ira prencher os seguintes dados:
- Nome
- Idade
E-mail
- Telefone
- CPF
- Profissao
- CEP
- UF
- Cidade
- Bairro
- Logradouro
- Complemento
- Numero
** Os dados devem ser armazenados em um array e exibidos na mesma tela */

// ARRAY ASSOCIATIVO

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $dados = array (
                    'nome' => $_POST['nome'],
                    'idade' => $_POST['idade'],
                    'email' => $_POST['email'],
                    'telefone' => $_POST['telefone'],
                    'CPF' => $_POST['CPF'],
                    'profissao' => $_POST['profissao'],
                    'CEP' => $_POST['cep'],
                    'UF' => $_POST['UF'],
                    'cidade' => $_POST['cidade'],
                    'bairro' => $_POST['bairro'],
                    'logradouro' => $_POST['logradouro'],
                    'complemento' => $_POST['complemento'],
                    'numero' => $_POST['numero']
                );
                
                // saida de dados

                foreach ($dados as $campo => $valor) {
                    echo "<b>" .$campo. ":</b>" .$valor ."<br />";
                }
                

            }

?>
