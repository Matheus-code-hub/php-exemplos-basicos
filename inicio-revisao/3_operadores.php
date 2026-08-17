<?php

// Declaraçao das variaveis
$feriado = false;
$fimDeSemana = true;

// Condicional com operador (OU)
if ($feriado || $fimDeSemana) {
   echo "\n Hoje não tem aula";
} else {
   echo "\n não é feriado";
}