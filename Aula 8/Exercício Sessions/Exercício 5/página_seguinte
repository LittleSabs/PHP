<?php
session_start();

if (!isset($_SESSION['tema'])) {
    $_SESSION['tema'] = 'claro'; // Tema padrão
}

$temas = [
    'claro' => 'background-color: #f0f0f0; color: #000;',
    'escuro' => 'background-color: #333; color: #fff;',
    'azul' => 'background-color: #007bff; color: #fff;',
];

$estiloAtual = $temas[$_SESSION['tema']];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Outra Página</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            <?php echo $estiloAtual; ?>
        }
    </style>
</head>
<body>
    <h1>Bem-vindo à Outra Página!</h1>
    <p>Você está usando o tema: <strong><?php echo ucfirst($_SESSION['tema']); ?></strong></p>
    <p>
        <a href="index.php">Voltar para a página principal</a>
    </p>
</body>
</html>
