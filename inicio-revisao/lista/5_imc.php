<?php

// ==========================================
// PROGRAMA: CALCULADORA DE IMC
// ==========================================

// Função para calcular o IMC
function calcularIMC($peso, $altura)
{
    // Fórmula do IMC:
    // IMC = peso / altura²
    $imc = $peso / ($altura * $altura);

    // Retorna o valor calculado
    return $imc;
}

// ==========================================
// PROGRAMA PRINCIPAL
// ==========================================

echo "====================================\n";
echo "          CALCULADORA DE IMC\n";
echo "====================================\n";

// Entrada do peso
echo "Digite seu peso em kg: ";
$peso = (float) readline();

// Entrada da altura
echo "Digite sua altura em metros: ";
$altura = (float) readline();

// Verifica se os valores são válidos
if ($peso <= 0 || $altura <= 0) {

    echo "\nErro: o peso e a altura devem ser maiores que zero.\n";
} else {

    // Chamada da função para calcular o IMC
    $imc = calcularIMC($peso, $altura);

    // ==========================================
    // CLASSIFICAÇÃO DO IMC
    // ==========================================

    if ($imc < 18.5) {

        $classificacao = "Abaixo do peso";
    } elseif ($imc < 25) {

        $classificacao = "Peso normal";
    } elseif ($imc < 30) {

        $classificacao = "Sobrepeso";
    } else {

        $classificacao = "Obesidade";
    }

    // ==========================================
    // EXIBIÇÃO DOS RESULTADOS
    // ==========================================

    echo "\n====================================\n";
    echo "          RESULTADO\n";
    echo "====================================\n";

    echo "Peso: " . number_format($peso, 2, ',', '.') . " kg\n>";
    echo "Altura: " . number_format($altura, 2, ',', '.') . " m\n";
    echo "IMC: " . number_format($imc, 2, ',', '.') . "\n";
    echo "Classificação: " . $classificacao . "\n";

    echo "====================================\n";
}
