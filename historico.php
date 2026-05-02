<?php
require 'sessao.php';
require 'funcoes.php';

verificarLogin();

$transacoes = $_SESSION['transacoes'] ?? [];

if (isset($_POST['limpar'])) {
    $_SESSION['transacoes'] = [];
    header("Location: historico.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Histórico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">Histórico</span>
        <a href="index.php" class="btn btn-light">Voltar</a>
    </div>
</nav>

<div class="container mt-4">

    <div class="card p-3 shadow">
        <h4>Transações</h4>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Impacto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transacoes as $t): ?>
                <tr>
                    <td><?php echo $t['nome']; ?></td>
                    <td><?php echo ucfirst($t['tipo']); ?></td>
                    <td><?php echo formatarReal($t['valor']); ?></td>
                    <td class="<?php echo $t['tipo']=='receita' ? 'text-success' : 'text-danger'; ?>">
                        <?php echo ($t['tipo']=='receita' ? '+' : '-') . formatarReal($t['valor']); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <form method="POST">
            <button name="limpar" class="btn btn-danger">Limpar Histórico</button>
        </form>

    </div>

</div>

</body>
</html>