<?php
session_start();
$message = "";
include 'db.php'; // Incluir a conexão ao banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Preparar e executar a consulta
    $stmt = $conn->prepare("SELECT password FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        
        // Verificar a senha
        if (strcmp($senha, $hashed_password) == 0) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $usuario;
            header("Location: index.php");
            exit;
        } else {
            $message = "Usuário ou senha inválidos.";
        }
    } else {
        $message = "Usuário ou senha inválidos.";
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>

    <main>
        <form method="POST" action="login.php">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Entrar</button>
        </form>
        <?php if ($message) echo "<p class='error'>$message</p>"; ?>
    </main>

    <footer>
        <p>&copy; 2024 Sabs booknook. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

