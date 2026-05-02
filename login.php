<?php
session_start();

$usuario_fixo = "admin";
$senha_hash = password_hash("1234", PASSWORD_DEFAULT);

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($user === $usuario_fixo && password_verify($senha, $senha_hash)) {
        $_SESSION["usuario"] = $user;
        header("Location: index.php");
        exit();
    } else {
        $erro = "Login inválido!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width: 300px;">
    <h3 class="text-center mb-3">Login</h3>

    <form method="POST">
        <input class="form-control mb-2" type="text" name="usuario" placeholder="Usuário" required>
        <input class="form-control mb-3" type="password" name="senha" placeholder="Senha" required>

        <button class="btn btn-primary w-100">Entrar</button>
    </form>

    <p class="text-danger text-center mt-2"><?php echo $erro; ?></p>
</div>

</body>
</html>