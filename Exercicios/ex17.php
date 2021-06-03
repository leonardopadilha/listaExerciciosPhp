<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 17</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
           function trocaNumero ($a, $b){
               $c = $a;
               $a = $b;
               $b = $a;
               return $c . " e " . $a;
           }

           $numeros = trocaNumero(5, 7);
           echo "Trocando os números: $numeros";
        ?>
    </div>
</body>
</html>