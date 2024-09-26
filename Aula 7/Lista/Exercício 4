<?php
function estadoFinalFila($n, $fila, $m, $saidas) {
    // Transformar a lista de saídas em um array associativo para fácil verificação
    $saidasSet = array_flip($saidas);
    
    // Filtrar a fila para manter apenas os que não saíram
    $filaFinal = [];
    foreach ($fila as $id) {
        if (!isset($saidasSet[$id])) {
            $filaFinal[] = $id;
        }
    }
    
    return $filaFinal;
}

$entrada = explode(PHP_EOL, trim(file_get_contents('php://input')));
$n = intval($entrada[0]);
$fila = array_map('intval', explode(' ', $entrada[1]));
$m = intval($entrada[2]);
$saidas = array_map('intval', explode(' ', $entrada[3]));

$filaFinal = estadoFinalFila($n, $fila, $m, $saidas);

echo implode(' ', $filaFinal);
?>
