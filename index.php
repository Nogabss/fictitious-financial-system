<?php
require 'sessao.php';
require 'funcoes.php';

verificarLogin();

if (!isset($_SESSION['transacoes'])) {
    $_SESSION['transacoes'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $valor = floatval($_POST['valor']);
    $tipo = $_POST['tipo'];

    $_SESSION['transacoes'][] = [
        'nome' => $nome,
        'valor' => $valor,
        'tipo' => $tipo
    ];
}

$saldo = calcularSaldo($_SESSION['transacoes']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">Sistema Financeiro</span>
        <a href="logout.php" class="btn btn-danger">Sair</a>
    </div>
</nav>

<div class="container mt-4">

    <div class="card p-3 mb-4 shadow">
        <h4>Saldo Atual</h4>
        <h2 class="<?php echo $saldo >= 0 ? 'text-success' : 'text-danger'; ?>">
            <?php echo formatarReal($saldo); ?>
        </h2>
    </div>

    <div class="card p-3 shadow">
        <h4>Nova Transação</h4>

        <form method="POST" class="row g-2">
            <div class="col-md-4">
                <input class="form-control" type="text" name="nome" placeholder="Nome" required>
            </div>

            <div class="col-md-3">
                <input class="form-control" type="number" step="0.01" name="valor" placeholder="Valor" required>
            </div>

            <div class="col-md-3">
                <select class="form-select" name="tipo">
                    <option value="receita">Receita</option>
                    <option value="despesa">Despesa</option>
                </select>
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">Adicionar</button>
            </div>
        </form>

        <a href="historico.php" class="btn btn-secondary mt-3">Ver Histórico</a>
    </div>

</div>

</body>
</html>