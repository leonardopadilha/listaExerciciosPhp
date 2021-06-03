<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 16</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
           $num;

           $maior = ($num > 30 || $num > 20 || $num > 10) ? $num : "$num é menor";

           echo $maior;
        ?>
    </div>
</body>
</html>