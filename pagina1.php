<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 1 php</title>
</head>
<body>
    <?php

        //De laração de Variável
        $hora = date("H");

        if($hora < 12){
            echo "<p> Bom dia </p>";
        } else if($hora < 10){
            echo "<p>Boa tarde!</p>";
        } else{
            echo"<p>Boa noite!</p>";
        }
    ?>
</body>
</html>