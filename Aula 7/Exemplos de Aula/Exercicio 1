//soma com forms
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = "post" action = "">
        <label for = "numero1"> Numero:</label>
        <input type= "number" id= "nome" name="numero1" required> <br><br>

        <label for = "numero2"> Numero:</label>
        <input type= "number" id= "nome" name="numero2" required> <br><br>
         
        <input type= "submit" value="Enviar">
</form>
    <?php
    if ($_SERVER['REQUEST_METHOD']=== "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        echo $numero1 + $numero2;
    }
    ?>
   
</body>
</html>
