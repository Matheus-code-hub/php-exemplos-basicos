<?php

// Programa para calcular o valor de uma compra

// Entrada de dados
echo "Digite o preço do produto: R$ ";
$preco = (float) readline();

echo "Digite a quantidade comprada: ";
$quantidade = (int) readline();

// Cálculo do valor total
$total = $preco * $quantidade;

// Verificação do desconto
if ($total >= 200) {
    $desconto = $total * 0.10;
    $valorFinal = $total - $desconto;
} else {
    $desconto = 0;
    $valorFinal = $total;
}

// Exibição dos resultados
echo "<br>===== RESUMO DA COMPRA =====<br>";
echo "Preço do produto: R$ " . number_format($preco, 2, ',', '.') . "<br>";
echo "Quantidade: " . $quantidade . "\n";
echo "Valor total: R$ " . number_format($total, 2, ',', '.') . "<br>";
echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
echo "Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";

?>