<?php

//Função simples com retorno 
function somar(int $a, float $b): float {
    return $a + $b;
}

//Exibindo resultado 
echo somar (8,15.6);
echo "<br>";

//procedimento (função sem retorno)
function saudacao($nome = "Aluno"){
    echo "Olá, $nome!Bem-vindo ao PHP . <br>";
}
//Exibindo a saudação
saudacao();
saudacao("Maria");

//Outro procedimento
function mostrarlinhas(){
    echo "-------------------------------------- <br>";
}

mostrarlinhas();