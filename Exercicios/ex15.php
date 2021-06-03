<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 15</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
           function calculaImpostoImovel ($medidaM2, $areaConstruida){
                return $valorImposto = (($medidaM2 - $areaConstruida) * 3.80) + ($areaConstruida * 5);
           }

           $totalImposto = calculaImpostoImovel(50, 10);
           echo "O valor total do imposto a pagar é R$ " . number_format($totalImposto, 2) . " reais";
        ?>
    </div>
</body>
</html>