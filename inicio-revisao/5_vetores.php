<?php 

//vetor (array simples - "1 linha")
$frutas = ["Maça", "Banana", "Uva"];

//Exibindo os valores com laço 
foreach ($frutas as $indice => $fruta){
    echo "Posição $indice: $fruta <br>";
}
//array (Linhas e calunas) com pilotos de F1

$matriz = [
["Max Verstappen", "Oscar ìastri", "Lando Norris"],
["Charles Leclerc", "Lewis Hamilton", "Geoge Russel"],
["Fernando Alonso", "Carlos Sainz", "Gabriel Borboleto"]
];

echo "<br><br>";
echo "Lista de pilotos de F1 (Dica: O 1 é o melhor.) <br><br>";

//Eibindo os valores da matriz
foreach ($matriz as $linha){
    foreach ($linha as $piloto){
        echo $piloto . " | ";
    }
    echo "<br>";
}