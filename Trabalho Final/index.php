<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Online</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Sabs booknook</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Livros Disponíveis</h2>
        <div class="livros">
            <?php include 'livros.php'; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Sabs booknook. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
