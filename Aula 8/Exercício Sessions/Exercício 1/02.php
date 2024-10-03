<?php
    //Inicia a sessão
    session_start();

    //Se o contador existir, adiciona mais um nele 
    if (isset($_SESSION['contador'])){
        $_SESSION['contador']++;
    }

    //Mostra o número atual do contador
    echo "Você acessou alguma página neste teste ". $_SESSION['contador'] . " vezes" . "<br>";


    //Botão para próxima página do teste
    echo "<button><a href='teste03.php'>Proxima Pagina</a></button>";
