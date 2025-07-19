<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>
<?php
// Matheus dos Reis Santos 11242101572
// Cesário Costa Almeida Júnior 11242100406
function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    
    if ($imc < 18.5) {
        return array(
            'imc' => number_format($imc, 2),
            'classificacao' => 'MAGREZA',
            'grau' => '0'
        );
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        return array(
            'imc' => number_format($imc, 2),
            'classificacao' => 'NORMAL',
            'grau' => '0'
        );
    } elseif ($imc >= 25.0 && $imc <= 29.9) {
        return array(
            'imc' => number_format($imc, 2),
            'classificacao' => 'SOBREPESO',
            'grau' => 'I'
        );
    } elseif ($imc >= 30.0 && $imc <= 39.9) {
        return array(
            'imc' => number_format($imc, 2),
            'classificacao' => 'OBESIDADE',
            'grau' => 'II'
        );
    } else {
        return array(
            'imc' => number_format($imc, 2),
            'classificacao' => 'OBESIDADE GRAVE',
            'grau' => 'III'
        );
    }
}

?>