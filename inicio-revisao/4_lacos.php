<?php 

// Laço FOR - Exemplo aplicado em tabuada 
for ($i = 1; $i <=10; $i++) {
    echo "8 x $i = " . (8 * $i) . "<br>";
}

//while - (enquanto) contagem regressiva
$n = 8;
while ($n > 0){
    echo $n . "<br>"; 
    $n--;
}

//Do while - (Faça enquanto) Executa ao menos 1 vez

echo "<br>";
$j = 0;
do {
   echo "j vale: $j <br>";
   $j++;
}while ($j <= 10);