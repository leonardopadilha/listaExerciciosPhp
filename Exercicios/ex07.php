<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 07</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
            $nota1 = 10;
            $nota2 = 10;
            $nota3 = 30;

            $media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5) / ($nota1 + $nota2 + $nota3));
            echo "A média das provas é: " . number_format($media, 2);
        ?>
    </div>
</body>
</html>