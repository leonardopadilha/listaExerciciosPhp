<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 11</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
            $nomeColaborador;
            $salarioFuncionario;
            $tempoDeCasa;

            if($tempoDeCasa >= 5){
                $salarioFuncionario += ($salarioFuncionario * 0.15);
            }else{
                $salarioFuncionario += ($salarioFuncionario * 0.10);
            }

            echo "O novo salário do $nomeColaborador é R$ " 
                                    . number_format($salarioFuncionario, 2);
        ?>
    </div>
</body>
</html>