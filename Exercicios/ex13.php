<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 13</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
            function calculaValorProduto($valorProduto, $qtdItensVendidos){
                return $valorTotal = (($valorProduto * $qtdItensVendidos) * 0.09) + 200;
            }

            $pagamentoSemanal = calculaValorProduto(100, 2);
            echo "O valor referente a semana é: R$ " . number_format($pagamentoSemanal, 2) . " reais";
        ?>
    </div>
</body>
</html>