<?php

// Programa para verificar se o aluno foi aprovado ou reprovado

// Entrada de dados
echo "===== SISTEMA DE NOTAS =====<br>";

echo "Digite o nome do aluno: ";
$nome = readline();

echo "Digite a média final do aluno: ";
$media = (float) readline();

echo "Digite a quantidade de faltas: ";
$faltas = (int) readline();

// Verificação das condições
// O aluno precisa ter média >= 6.0 E faltas <= 15
if ($media >= 6.0 && $faltas <= 15) {
    $situacao = "APROVADO";
} else {
    $situacao = "REPROVADO";
}

// Exibição dos resultados
echo "<br>===== RESULTADO FINAL =====<br>";
echo "Aluno: " . $nome . "<br>";
echo "Média final: " . number_format($media, 1, ',', '.') . "<br>";
echo "Quantidade de faltas: " . $faltas . "<br>";
echo "Situação: " . $situacao . "<br>";

?>