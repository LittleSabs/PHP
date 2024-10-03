<?php
function removeDuplicados($numeros) {
    $semDuplicados = [];
    
    foreach ($numeros as $numero) {
        if (!in_array($numero, $semDuplicados)) {
            $semDuplicados[] = $numero;
        }
    }
    
    return $semDuplicados;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quantidade = intval($_POST['quantidade']);
    $numeros = [];
    
    for ($i = 0; $i < $quantidade; $i++) {
        if (isset($_POST["numero$i"])) {
            $numeros[] = intval($_POST["numero$i"]);
        }
    }

    $numerosSemDuplicados = removeDuplicados($numeros);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Remover Duplicados</title>
</head>
<body>
    <h1>Remover Números Duplicados</h1>
    
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
            <button type="submit">Remover Duplicados</button>
        </form>
    <?php endif; ?>

    <?php if (isset($numerosSemDuplicados)): ?>
        <h2>Números sem Duplicados:</h2>
        <p><?php echo implode(', ', $numerosSemDuplicados); ?></p>
    <?php endif; ?>
</body>
</html>
