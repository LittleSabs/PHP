<?php
function desenharQuadrado($lado) {
    $quadrado = '';
    for ($i = 0; $i < $lado; $i++) {
        $quadrado .= str_repeat('*', $lado) . '<br>';
    }
    return $quadrado;
}

function desenharRetangulo($largura, $altura) {
    $retangulo = '';
    for ($i = 0; $i < $altura; $i++) {
        $retangulo .= str_repeat('*', $largura) . '<br>';
    }
    return $retangulo;
}

function desenharTriangulo($altura) {
    $triangulo = '';
    for ($i = 1; $i <= $altura; $i++) {
        $espacos = str_repeat(' ', $altura - $i);
        $asteriscos = str_repeat('*', (2 * $i) - 1);
        $triangulo .= $espacos . $asteriscos . '<br>';
    }
    return $triangulo;
}

$form = null;
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $forma = $_POST['forma'];
    
    switch ($forma) {
        case 'quadrado':
            $lado = intval($_POST['lado']);
            if ($lado < 1) {
                $erro = 'Por favor, insira um número inteiro positivo para o lado.';
            } else {
                $form = desenharQuadrado($lado);
            }
            break;

        case 'retangulo':
            $largura = intval($_POST['largura']);
            $altura = intval($_POST['altura']);
            if ($largura < 1 || $altura < 1) {
                $erro = 'Por favor, insira números inteiros positivos para largura e altura.';
            } else {
                $form = desenharRetangulo($largura, $altura);
            }
            break;

        case 'triangulo':
            $altura = intval($_POST['altura']);
            if ($altura < 1) {
                $erro = 'Por favor, insira um número inteiro positivo para a altura.';
            } else {
                $form = desenharTriangulo($altura);
            }
            break;

        default:
            $erro = 'Forma geométrica inválida.';
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Desenhar Formas Geométricas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .forma {
            white-space: pre;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Escolha uma Forma Geométrica</h1>
    
    <form method="POST">
        <label for="forma">Selecione a forma:</label>
        <select name="forma" id="forma" required>
            <option value="quadrado">Quadrado</option>
            <option value="retangulo">Retângulo</option>
            <option value="triangulo">Triângulo</option>
        </select>
        <br><br>

        <div id="proporcoes">
            <div id="ladoDiv">
                <label for="lado">Lado do Quadrado:</label>
                <input type="number" name="lado" id="lado" min="1">
            </div>
            <div id="larguraDiv" style="display: none;">
                <label for="largura">Largura do Retângulo:</label>
                <input type="number" name="largura" id="largura" min="1">
            </div>
            <div id="alturaDiv" style="display: none;">
                <label for="altura">Altura do Retângulo ou Triângulo:</label>
                <input type="number" name="altura" id="altura" min="1">
            </div>
        </div>
        <br>
        <button type="submit">Desenhar</button>
    </form>

    <?php if ($erro): ?>
        <p style="color: red;"><?php echo $erro; ?></p>
    <?php elseif ($form): ?>
        <div class="forma">
            <?php echo $form; ?>
        </div>
    <?php endif; ?>

    <script>
        document.getElementById('forma').addEventListener('change', function() {
            var forma = this.value;
            document.getElementById('ladoDiv').style.display = forma === 'quadrado' ? 'block' : 'none';
            document.getElementById('larguraDiv').style.display = forma === 'retangulo' ? 'block' : 'none';
            document.getElementById('alturaDiv').style.display = (forma === 'retangulo' || forma === 'triangulo') ? 'block' : 'none';
        });
    </script>
</body>
</html>
