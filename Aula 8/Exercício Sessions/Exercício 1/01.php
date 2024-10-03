<?php
    //Inicia uma sessão no navegador
    session_start();

    //Inicia uma variável "contador" na sessão atual, com valor 0
    $_SESSION['contador'] = 0;

    echo "<h1> Página principal, que inicia o contador </h1>";

    echo "Contador iniciado. Valor: " . $_SESSION['contador'] . "<br>";

    echo "<button><a href='teste02.php'>Proxima Pagina</a></button>";
