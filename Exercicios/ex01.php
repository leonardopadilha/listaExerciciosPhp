<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 01</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
        $idade = 20;
        $meses = 1;
        $dias = 10;

        $totalMes = $meses * 30;
        $totalAnos = $idade * 365;

        $itadeTodal = $totalAnos + $totalMes + $dias;
        echo "A quantidade total vivida em dias são: $itadeTodal"; 
        ?>
    </div>
</body>
</html>