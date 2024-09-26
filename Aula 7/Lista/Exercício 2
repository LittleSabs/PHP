<?php
function separaParesEImpares($numeros) {
    $pares = [];
    $impares = [];
    
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares[] = $numero;
        } else {
            $impares[] = $numero;
        }
    }
    
    return [$pares, $impares];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quantidade = intval($_POST['quantidade']);
    $numeros = [];
    
    for ($i = 0; $i < $quantidade; $i++) {
        if (isset($_POST["numero$i"])) {
            $numeros[] = intval($_POST["numero$i"]);
        }
    }

    list($pares, $impares) = separaParesEImpares($numeros);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Separar Pares e Ímpares</title>
</head>
<body>
    <h1>Separar Números Pares e Ímpares</h1>
    
    <form method="POST">
        <label for="quantidade">Quantos números você quer inserir?</label>
        <input type="number" name="quantidade" id="quantidade" min="1" required>
        <button type="submit">Enviar</button>
    </form>

    <?php if (isset($numeros)): ?>
        <form method="POST">
            <input type="hidden" name="quantidade" value="<?php echo $quantidade; ?>">
            <?php for ($i = 0; $i < $quantidade; $i++): ?>
                <label for="numero<?php echo $i; ?>">Número <?php echo $i + 1; ?>:</label>
                <input type="number" name="numero<?php echo $i; ?>" required>
                <br>
            <?php endfor; ?>
            <button type="submit">Separar</button>
        </form>
    <?php endif; ?>

    <?php if (isset($pares) && isset($impares)): ?>
        <h2>Números Pares:</h2>
        <p><?php echo implode(', ', $pares); ?></p>
        
        <h2>Números Ímpares:</h2>
        <p><?php echo implode(', ', $impares); ?></p>
    <?php endif; ?>
</body>
</html>
