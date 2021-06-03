<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="_css/estilo.css"/>;
    <title>Exercício 05</title>
    <style>
    </style>
</head>
<body>
    <div>
        <?php
            $nomeFuncionario;
            $numDependentes;
            $qtdHorasTrabalhadas;
            $salarioBruto;

            $adicionalSalario = ($qtdHorasTrabalhadas * 12) + ($numDependentes * 40) + $salarioBruto;
            $calculaInss = $adicionalSalario * 0.085;
            $calculaIr = $adicionalSalario * 0.05;
            $salarioLiquido = $adicionalSalario - ($calculaInss + $calculaIr);

            echo "Nome do funcionário: $nomeFuncionario" . "<br/>" 
                . "Número de dependentes: $numDependentes" . "<br/>" 
                . "Salário Bruto: R$ " . number_format($salarioBruto, 2) . "<br/>"
                . " " . "<br/>"  
                . " ===== Desconto =====" . "<br/>" 
                . "Valor INSS: R$ " . number_format($calculaInss, 2) . "<br/>"
                . "Valor IR: R$ " . number_format($calculaIr, 2) . "<br/>"
                . " " . "<br/>" 
                . " ===== Total a Receber =====" . "<br/>" 
                . "Salário Líquido: R$ " . number_format($salarioLiquido, 2);
        ?>
    </div>
</body>
</html>