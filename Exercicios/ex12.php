<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 09</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
            $numConta;
            $saldoInicialMes;
            $totalItensCobradosMes;
            $totalCreditosAplicadosMes;
            $limiteCreditoAutorizado;

            $limiteCredito = $saldoInicialMes + $totalItensCobradosMes - $totalCreditosAplicadosMes;

            if($limiteCredito > $limiteCreditoAutorizado) {
                echo "Para a conta $numConta o limite de crédito foi excedido: $limiteCredito";
            }else{
                echo "Para a conta $numConta o limite de crédito não foi excedido: $limiteCredito";
            }
        ?>
    </div>
</body>
</html>