<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 03</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
            $largura = 10;
            $comprimento = 50;
            $potenciaLampada = 12;
            $wattLampada = 18;
            
            $area = $largura * $comprimento;
            $qtdLampadaNecessaria = intval (($wattLampada / $potenciaLampada) * $area);

            echo "Área total: $area m2" . "<br/>" . "Serão necessárias $qtdLampadaNecessaria lâmpadas.";
        ?>
    </div>
</body>
</html>