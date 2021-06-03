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
            $salarioFuncionario = 2000;
            $tempoDeCasa = 7;
			$calculaBonus = 0;

            if($tempoDeCasa >= 5){
				$calculaBonus += $salarioFuncionario * 0.20;
                $salarioFuncionario += $calculaBonus;
            }else{
				$calculaBonus += $salarioFuncionario * 0.10;
                $salarioFuncionario += $calculaBonus;
            }

            echo "Valor do Bônus: R$ " . number_format($calculaBonus, 2, ",", ".") . "<br/>" 
	                                   . "O novo salário do colaborador é R$ " . number_format($salarioFuncionario, 2, ",", ".");
        ?>
    </div>
</body>
</html>
