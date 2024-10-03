<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <label for="x">Valor de x:</label>
    <input type="number" id="x" name="x" required> <br><br>

    <label for="y">Valor de y:</label>
    <input type="number" id="y" name="y" required> <br><br>
     
    <input type="submit" value="Enviar">
</form>

<?php
function avaliarValores($x, $y) {
    if ($x > 100 || $x < -100) {
        echo "Valor inválido de x.";
        return;
    }

    if ($y > 100 || $y < -100) {
        echo "Valor inválido de y.";
        return;
    }

    if ($x == 0 || $y == 0) {
        echo "Nos eixos";
        return;
    }

    if ($x > 0 && $y > 0) {
        echo "Q1";
        return;
    }

    if ($x < 0 && $y > 0) {
        echo "Q2";
        return;
    }

    if ($x < 0 && $y < 0) {
        echo "Q3";
        return;
    }

    if ($x > 0 && $y < 0) {
        echo "Q4";
        return;
    }
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $x = $_POST['x'];
    $y = $_POST['y'];
    avaliarValores($x, $y);
}
?>
</body>
</html>
