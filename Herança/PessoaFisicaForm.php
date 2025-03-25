<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dados da Pessoa Fisica</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <h1>Formulário de Dados da Pessoa Fisica</h1>
        <hr />
        <h2>Informe os dados </h2>
        <label for="name">Nome: </label><br />
        <input type="text" name="nome" /><br><br />

        <label for="CPF"> CPF: </label><br />
        <input type="text" name="CPF" /><br><br />

        <label for="dataNascimento"> Data de Nascimento: </label><br />
        <input type="text" name="dataNascimento" /><br><br />

        <label for="profissao">Profissão: </label><br />
        <input type="text" name="profissao" /><br><br />

        <button type="submit">Enviar </button>
        <br><br />
        <hr />
    </form>

    <?php
    // Importar as classes Pessoa e PessoaFisica
    include "./classes/Pessoa.class.php";
    include "./classes/PessoaFisica.class.php";

    // Verificar se o formulario foi submetido
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // Instanciar um objeto da classe PessoaFisica
        $usuario = new PessoaFisica("", "", "", "");

        // atribuir valores vindo do formulario
        $usuario->setNome($_POST['nome']);
        $usuario->setCPF($_POST['CPF']);
        $usuario->setDataNascimento($_POST['dataNascimento']);
        $usuario->setProfissao($_POST['profissao']);

        // Exibir os valores dos atributos

        echo "<b>Nome:</b> " . $usuario->getNome() . "<br>";
        echo "<b>CPF:</b> " . $usuario->getCPF() . "<br>";
        echo "<b>Data de Nascimento:</b> " . $usuario->getDataNascimento() . "<br>";
        echo "<b>Profissão:</b> " . $usuario->getProfissao() . "<br>";

        // link para voltar para a página principal
        echo '<br/><a href="index.php">Voltar</a>';
    }
    ?>
</body>

</html>
