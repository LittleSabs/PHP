<?php
    //Inicia a sessão
    session_start();

    //Imprime o valor atual (E final) do contador
    echo $_SESSION['contador'] . "<br>";
    
    //Destrói a session, eliminando todos os dados nela contidos.
    //Ou seja, nosso contador foi dessa pra melhor, se der refresh na página vai estar vazio.
    //Usado quando se quer prezar pela segurança dos dados, sem deixar vestígios.
    session_destroy();

    echo "Sessão acabada! Todos os dados foram eliminados!";
