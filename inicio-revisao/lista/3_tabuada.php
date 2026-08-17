<?php

// ==========================================
// PROGRAMA: TABUADA DE UM NÚMERO
// ==========================================

// Número que será utilizado na tabuada
$numero = 5;

// Exibe o título
echo "================================<br>";
echo "          TABUADA DO $numero<br>";
echo "================================<br>";

// Estrutura de repetição para calcular
// a tabuada do número de 1 até 10
for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {

    // Calcula o resultado da multiplicação
    $resultado = $numero * $multiplicador;

    // Exibe a operação
    echo $numero . " x " . $multiplicador . " = " . $resultado . "<br>";
}

// Finalização
echo "<br>================================<br>";
echo "       FIM DA TABUADA<br>";
echo "================================<br>";

?>

