<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method ="post" action ="index2.php">
        <label for="nome">Nome:<label>
        <input type= "text" id="nome" name="nome" required> <br><br>

        <button type="submit" value"Enviar"> Enviar</button>
        </form>
        <?php
        if (isset($_POST["nome"])) {
            $RES = $_POST["nome"];
            echo "Hello ". $RES . "!";
        }
        ?>

        
</body>
</html>
