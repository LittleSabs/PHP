<?php
function desenharPiramide($altura) {
    $piramide = '';
    
    for ($i = 1; $i <= $altura; $i++) {
        $espacos = str_repeat(' ', $altura - $i);
        $asteriscos = str_repeat('*', (2 * $i) - 1);
        $piramide .= $espacos . $asteriscos . '<br>';
    }
    
    return $piramide;
}

$altura = null;
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $altura = intval($_POST['altura']);
    
    if ($altura <= 0) {
        $erro = 'Por favor, insira um número inteiro positivo maior que zero.';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pirâmide de Asteriscos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .piramide {
            white-space: pre;
        }
    </style>
</head>
<body>
    <h1>Desenhar Pirâmide de Asteriscos</h1>
    
    <form method="POST">
        <label for="altura">Digite a altura da pirâmide:</label>
        <input type="number" name="altura" id="altura" min="1" required>
        <button type="submit">Desenhar</button>
    </form>

    <?php if ($erro): ?>
        <p style="color: red;"><?php echo $erro; ?></p>
    <?php elseif ($altura): ?>
        <div class="piramide">
            <?php echo desenharPiramide($altura); ?>
        </div>
    <?php endif; ?>
</body>
</html>
