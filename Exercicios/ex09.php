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
            $salarioFuncionario = 800;
            $valorVenda = 1000;
            
            $comissao = $valorVenda * 0.15;  
            $salarioTotalFuncionario = $salarioFuncionario + $comissao;
            
            echo "Valor da venda: R$ " . number_format($valorVenda, 2) . "<br/>"
                        . "Comissão: R$ " . number_format($comissao, 2) . "<br/>"
                        . "Total a receber: R$ " . number_format($salarioTotalFuncionario, 2);
        ?>
    </div>
</body>
</html>
