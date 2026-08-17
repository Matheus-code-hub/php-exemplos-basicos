<?php 

//Passando valores pela URL
//http://localhost/php-exemplos-basicos/2_opera_variaveis.php?numero1=10&numero2=5



//Método nativo do php "$_get", usando para passar valores pela URL
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

//verifica se os valores foram passados corretamente
//a função isset() nativa do php verifica se os valores foram passados corretamente

if (isset($numero1) && ($numero1)){
    $numero1 = (int) $numero1;
    $numero2 = (int) $numero2;


//calculo
$soma = $numero1 + $numero2;

$subtração = $numero1 - $numero2;

$multiplicação = $numero1 * $numero2;

$divisão = $numero1 / $numero2;

//Exibir resultados
echo "soma: $soma <br>";
echo "Subtração: $subtração <br>";
echo "multiplicação: $multiplicação <br>";
echo "divisão: $divisão <br>";

} else {
    echo "Por Favor, forneça os alores pela URL";
}