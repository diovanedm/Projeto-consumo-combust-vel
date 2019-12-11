<?php
    if($_POST['distancia'] && $_POST['autonomia'] || $POST['distancia'] > 0 && $_POST['autonomia']) {
        $distancia = $_POST['distancia'];
        $autonomia = $_POST['autonomia'];

        $valorGasolina = 4.80;
        $valorAlcool = 3.80;
        $valorDiesel = 3.90;
        
        $consumoGasolina = ($distancia / $autonomia) * $valorGasolina; 
        $consumoGasolina = number_format($consumoGasolina, 2, ',', '.');

        $consumoAlcool = ($distancia / $autonomia) * $valorAlcool;
        $consumoAlcool = number_format($consumoAlcool, 2, ',', '.');

        $consumoDiesel = ($distancia / $autonomia) * $valorDiesel;
        $consumoDiesel = number_format($consumoDiesel, 2, ',', '.');
    
        $mensagem.= " <p> O valor do consumo R$ para Gasolina foi de: $consumoGasolina </p> ";
        $mensagem.= " <p> O valor do consumo R$ para Alcool foi de: $consumoAlcool </p> ";
        $mensagem.= " <p> O valor do consumo R$ para Diesel foi de: $consumoDiesel </p> ";
    } else {
        $mensagem.= " <p>Erro ao receber informações do formulário! </p> ";
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Resposta</title>
</head>
<body>
    <div class="formulario">
        <form action="calculo.php" method="POST">
            <?php
                echo $mensagem;
            ?>
        </form>
    </div>
</body>
</html>