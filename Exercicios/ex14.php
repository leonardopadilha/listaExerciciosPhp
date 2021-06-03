<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 14</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
            $lado1;
            $lado2;
            $lado3;

            if($lado1 != 0 && $lado2 != 0 && $lado3 != 0){
                if ($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3){
                    echo "Triângulo Escaleno";
                }elseif ($lado1 == $lado2 && $lado2 == $lado3){
                    echo "Triângulo Equilátero";
                }else {
                    echo "Triângulo Isósceles";
                }
            }else {
                echo "Essa forma não é um triângulo";
            }
        ?>
    </div>
</body>
</html>