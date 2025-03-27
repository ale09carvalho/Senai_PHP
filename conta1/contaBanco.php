<?php
class ContaBancaria
{
    private $titular;
    private $cpf;
    private $email;
    private $saldo;
    private $numeroConta;

    public function __construct($titular, $cpf, $email)
    {
        $this->titular = $titular;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->saldo = 0.0;
        $this->numeroConta = rand(100000, 999999);
    }

    public function exibirDados()
    {
        return "<div class='container mt-5'><div class='card p-4'><h3 class='text-success'>Conta Criada com Sucesso!</h3><br>"
            . "<strong>Nome:</strong> $this->titular<br>"
            . "<strong>CPF:</strong> $this->cpf<br>"
            . "<strong>Email:</strong> $this->email<br>"
            . "<strong>Número da Conta:</strong> $this->numeroConta<br>"
            . "<strong>Saldo:</strong> R$ " . number_format($this->saldo, 2, ',', '.') . "</div></div>";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conta = new ContaBancaria($_POST['nome'], $_POST['cpf'], $_POST['email']);
    echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>";
    echo $conta->exibirDados();
} else {
    echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>";
?>

    <div class="container mt-5">

        <div class="card p-4">
            <h2 class="text-primary">Preencha o formulário</h2>

            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Telefone:</label>
                    <input type="text" class="form-control" name="telefone" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">CPF:</label>
                    <input type="text" class="form-control" name="cpf" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">CEP:</label>
                    <input type="text" class="form-control" name="cep" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Profissão:</label>
                    <input type="text" class="form-control" name="profissao" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">UF:</label>
                    <input type="text" class="form-control" name="uf" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Cidade:</label>
                    <input type="text" class="form-control" name="cidade" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Bairro:</label>
                    <input type="text" class="form-control" name="bairro" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Logradouro:</label>
                    <input type="text" class="form-control" name="logradouro" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Complemento:</label>
                    <input type="text" class="form-control" name="complemento">
                </div>

                <div class="mb-3">
                    <label class="form-label">Número:</label>
                    <input type="text" class="form-control" name="numero" required>
                </div>

                <button type="submit" class="btn btn-primary">Criar Conta</button>
            </form>
        </div>
    </div>
<?php
}
?>
