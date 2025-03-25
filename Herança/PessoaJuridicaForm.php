<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da Pessoa Juridica</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <h1>Formulário de Dados da Pessoa Juridica: </h1>
        <hr />
        <h2>Informe os dados </h2>
        <label for="nameRazaoSocial">Razao Social: </label><br />
        <input type="text" name="nameRazaoSocial" /><br><br />

        <label for="cnpj">CNPJ: </label><br />
        <input type="text" name="cnpj" /><br><br />

        <label for="telefone">Telefone: </label><br />
        <input type="text" name="telefone" /><br><br />

        <label for="endereco">Endereço </label><br />
        <input type="text" name="endereco" /><br><br />

        <label for="email">E-mail: </label><br />
        <input type="text" name="email" /><br><br />
        <br /><br />
        <button type="submit">Enviar</button>
        <br><br />
        <hr />

    </form>

    <?php
    // Importar as classes Pessoa e PessoaJuridica
    include "./classes/Pessoa.class.php";
    include "./classes/PessoaJuridica.class.php";

    // Verificar se o formulario foi submetido
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // Instanciar um objeto da classe PessoaJuridica
        $usuario = new PessoaJuridica("", "", "", "", "");

        // atribuir valores vindo do formulario
        $usuario->setNameRazaoSocial($_POST['nameRazaoSocial']);
        $usuario->setCnpj($_POST['cnpj']);
        $usuario->setEmail($_POST['email']);
        $usuario->setTelefone($_POST['telefone']);
        $usuario->setEndereco($_POST['endereco']);

        // Exibir os valores dos atributos
        echo "<b>Razão Social:</b> " . $usuario->getNameRazaoSocial() . "<br>";
        echo "<b>CNPJ:</b> " . $usuario->getCnpj() . "<br>";
        echo "<b>Email:</b> " . $usuario->getEmail() . "<br>";
        echo "<b>Telefone:</b> " . $usuario->getTelefone() . "<br>";
        echo "<b>Endereço:</b> " . $usuario->getEndereco() . "<br>";

        //link par voltar para pagina principal
        echo '<br/><a href="index.php"> Voltar</a>';
    }
    ?>
</body>
</html>
