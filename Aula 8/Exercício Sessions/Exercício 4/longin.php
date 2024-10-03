<?php
session_start();

if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}

function registrarUsuario($nomeUsuario, $senha) {
    $id = count($_SESSION['usuarios']) + 1;

    $usuario = [
        'id' => $id,
        'nome_usuario' => $nomeUsuario,
        'senha' => password_hash($senha, PASSWORD_DEFAULT)
    ];

    $_SESSION['usuarios'][] = $usuario;

    return $id;
}

function verificarLogin($nomeUsuario, $senha) {
    foreach ($_SESSION['usuarios'] as $usuario) {
        if ($usuario['nome_usuario'] === $nomeUsuario && password_verify($senha, $usuario['senha'])) {
            return true;
        }
    }
    return false;
}

$mensagemSucesso = '';
$mensagemErro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeUsuario = trim($_POST['nome_usuario']);
    $senha = trim($_POST['senha']);

    if (verificarLogin($nomeUsuario, $senha)) {
        $_SESSION['usuario_logado'] = $nomeUsuario;
        header("Location: bem_vindo.php");
        exit;
    } else {
        $mensagemErro = 'Nome de usuário ou senha incorretos.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login do Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h1>Página de Login</h1>
    
    <form method="POST">
        <label for="nome_usuario">Nome de Usuário:</label>
        <input type="text" name="nome_usuario" id="nome_usuario" required>
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br><br>
        <button type="submit">Login</button>
    </form>

    <?php if ($mensagemErro): ?>
        <p style="color: red;"><?php echo $mensagemErro; ?></p>
    <?php endif; ?>
</body>
</html>
