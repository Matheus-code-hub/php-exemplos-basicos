<?php

// ==========================================
// PROGRAMA: MÉDIA, MAIOR E MENOR NOTA
// ==========================================

// Array com as notas dos 5 alunos
$notas = [7.5, 8.0, 6.5, 9.0, 5.5];

// Variável para armazenar a soma das notas
$soma = 0;

// Inicializa a maior e a menor nota
$maiorNota = $notas[0];
$menorNota = $notas[0];

// ==========================================
// PERCORRENDO O ARRAY COM FOREACH
// ==========================================

foreach ($notas as $nota) {

    // Soma a nota atual
    $soma += $nota;

    // Verifica se é a maior nota
    if ($nota > $maiorNota) {
        $maiorNota = $nota;
    }

    // Verifica se é a menor nota
    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
}

// ==========================================
// CALCULO DA MÉDIA
// ==========================================

$quantidadeAlunos = count($notas);

$media = $soma / $quantidadeAlunos;

// ==========================================
// EXIBIÇÃO DOS RESULTADOS
// ==========================================

echo "====================================<br>";
echo "          NOTAS DA TURMA<br>";
echo "====================================<br>";

echo "Notas dos alunos:<br>";

$aluno = 1;

foreach ($notas as $nota) {

    echo "Aluno " . $aluno . ": ";
    echo number_format($nota, 1, ',', '.') . "<br>";

    $aluno++;
}

echo "\n====================================<br>";

echo "Soma das notas: ";
echo number_format($soma, 2, ',', '.') . "<br>";

echo "Média da turma: ";
echo number_format($media, 2, ',', '.') . "<br>";

echo "Maior nota: ";
echo number_format($maiorNota, 1, ',', '.') . "<br>";

echo "Menor nota: ";
echo number_format($menorNota, 1, ',', '.') . "<br>";

echo "====================================<br>";

?>