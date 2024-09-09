<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = "post" action = "">
        <label for = "x"> Valor de x:</label>
        <input type= "number" id= "nome" name="x" required> <br><br>

        <label for = "y"> Valor de y:</label>
        <input type= "number" id= "nome" name="y" required> <br><br>
         
        <input type= "submit" value="Enviar">
</form>
    <?php
    if ($_SERVER['REQUEST_METHOD']=== "POST") {
        $x = $_POST['x'];
        $y = $_POST['y'];
        
        if($x>100 && $x<-100) {
            echo "valor inválido de y";
        }

        if($y>100 && $y<-100) {
            echo "valor inválido de y";
        } else {
            if($x==0 || $y==0 ) {
                echo "Nos eixos";
            }
            if($x>0 && $y>0) {
                echo "Q1";
            }
            if($x<0 && $y>0) {
                echo "Q2";
            }
            if($x<0 && $y<0) {
                echo "Q3";
            }
            if($x>0 && $y<0) {
                echo "Q4";
            }

        }
    }
    ?>
   
</body>
</html>
