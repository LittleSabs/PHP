<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Identificação</title>
</head>
<body>
    <h1>Bem-vindo ao Sistema de Identificação</h1>
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="ano_nascimento">Ano de Nascimento:</label>
        <input type="number" id="ano_nascimento" name="ano_nascimento" required><br><br>
        <a href="welcomepage.php"> <input type="submit" value="Enviar"></a>
    </form>
   
</body>
</html>

<?php
session_start(); // Inicia a sessão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano_nascimento = $_POST['ano_nascimento'];

    // Calcula a idade
    $idade = date("Y") - $ano_nascimento;

    // Armazena as informações na sessão
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['idade'] = $idade;

    echo $_SESSION['nome'];
    echo $_SESSION['idade'];
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION["idade"], $_SESSION["nome"])) {
        echo "Bem-vindo "; 
        echo $_SESSION['nome'];
        echo "Você tem " . $_SESSION['idade'] . " anos";
    }
 
    ?>
</body>
</html>


