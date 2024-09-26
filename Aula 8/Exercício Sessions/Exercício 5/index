<?php
session_start();

if (!isset($_SESSION['tema'])) {
    $_SESSION['tema'] = 'claro'; // Tema padrão
}

if (isset($_GET['tema'])) {
    $temaEscolhido = $_GET['tema'];
    if (in_array($temaEscolhido, ['claro', 'escuro', 'azul'])) {
        $_SESSION['tema'] = $temaEscolhido;
    }
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
    <title>Sistema de Preferências do Usuário</title>
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
    <h1>Selecione seu Tema</h1>
    <p>Você está usando o tema: <strong><?php echo ucfirst($_SESSION['tema']); ?></strong></p>
    <p>
        <a href="?tema=claro">Claro</a> |
        <a href="?tema=escuro">Escuro</a> |
        <a href="?tema=azul">Azul</a>
    </p>
    <p><a href="outra_pagina.php">Ir para outra página</a></p>
</body>
</html>
