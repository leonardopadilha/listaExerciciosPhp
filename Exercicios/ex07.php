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
            $nota1 = 7;
            $nota2 = 6;
            $nota3 = 4;

            $media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / ( 2 + 3 + 5);
            echo "A média das provas é: $media";
        ?>
    </div>
</body>
</html>
