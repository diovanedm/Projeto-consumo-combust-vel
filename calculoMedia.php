<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title> Calculo distância </title>
    </head>
    <body>
        <div class="formulario">
            <form action="calculo.php" method="POST">
                Distância:
                <input type="text" name="distancia" id="distancia">
                
                Consumo:    
                <input type="text" name="autonomia" id="autonomia">

                <button class="botao" type="submit"> calcular </button>
            </form>
        </div>
    </body>
</html>