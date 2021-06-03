<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 02</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
            $tempF = 20.5;
            $tempC = ($tempF - 32) * 5/9;
            echo "A temperatura $tempF Fahrenheit é equivalente a " . number_format($tempC, 1) . "ºC"; 
        ?>
    </div>
</body>
</html>