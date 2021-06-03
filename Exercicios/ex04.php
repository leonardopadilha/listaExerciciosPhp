<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 04</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
            $valorMercadoria = 902.50;

            $valorDividio = intval ($valorMercadoria / 3);
            $valorMercadoria -= $valorDividio;
            $valorPrimeiraParcela = $valorMercadoria - $valorDividio;

            echo "Dados para pagamento, entrada: 
                  R$ "  . number_format($valorPrimeiraParcela, 2) . "<br/>"
                        . "2x de R$ " . number_format($valorDividio, 2);
        ?>
    </div>
</body>
</html>