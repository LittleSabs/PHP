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
        'senha' => password_hash($senha, PASSWORD_DEFAULT) // Armazena a senha de forma segura
    ];

    $_SESSION['usuarios'][] = $usuario;

    return $id;
}

$mensagemSucesso = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeUsuario = trim($_POST['nome_usuario']);
    $senha = trim($_POST['senha']);

    if (!empty($nomeUsuario) && !empty($senha)) {
        $id = registrarUsuario($nomeUsuario, $senha);
        $mensagemSucesso = "Usuário registrado com sucesso! ID: $id";
    } else {
        $mensagemSucesso = "Por favor, preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h1>Criar Conta de Usuário</h1>
    
    <form method="POST">
        <label for="nome_usuario">Nome de Usuário:</label>
        <input type="text" name="nome_usuario" id="nome_usuario" required>
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br><br>
        <button type="submit">Registrar</button>
    </form>

    <?php if ($mensagemSucesso): ?>
        <p style="color: green;"><?php echo $mensagemSucesso; ?></p>
    <?php endif; ?>
</body>
</html>
