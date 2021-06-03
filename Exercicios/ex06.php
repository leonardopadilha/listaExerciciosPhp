<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 06</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
            $precoFabricaVeiculo = 15000;
            $percentualLucroDistribuidor = 10;
            $percentualImposto = 10;

            $valorImposto = $precoFabricaVeiculo * ($percentualImposto / 100);
            $percentualLucro = $precoFabricaVeiculo * ($percentualLucroDistribuidor / 100);
            $custoConsumidor = $precoFabricaVeiculo + $percentualLucro + $valorImposto;

            echo "Lucro do distribuidor: R$ " . number_format($percentualLucro, 2) . "<br/>"
                                              . "Imposto: R$ " . number_format($valorImposto, 2) . "<br/>"
                                              . "Total: R$ " . $custoConsumidor;
        ?>
    </div>
</body>
</html>