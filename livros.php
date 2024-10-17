<?php
$livros = [
    ["titulo" => "Cruel Prince", "autor" => "Holly Black", "preco" => "R$ 59,90"],
    ["titulo" => "Dom Casmurro", "autor" => "Machado de Assis", "preco" => "R$ 29,90"],
    ["titulo" => "O Pequeno Príncipe", "autor" => "Antoine de Saint-Exupéry", "preco" => "R$ 34,90"],
    ["titulo" => "A Revolução dos Bichos", "autor" => "George Orwell", "preco" => "R$ 24,90"],
    ["titulo" => "O Alquimista", "autor" => "Paulo Coelho", "preco" => "R$ 49,90"],
    ["titulo" => "Good Girls Guide to murderer", "autor" => "Holly Jackson", "preco" => "R$ 39,90"],
];

foreach ($livros as $livro) {
    echo "<div class='livro'>";
    echo "<h3>{$livro['titulo']}</h3>";
    echo "<p>Autor: {$livro['autor']}</p>";
    echo "<p>Preço: {$livro['preco']}</p>";
    echo "<button>Comprar</button>";
    echo "</div>";
}
?>
