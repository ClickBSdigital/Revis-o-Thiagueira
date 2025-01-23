<?php

require './App/Entity/Car.php';
require './App/Entity/Pessoa.php';


echo "<h1> Cadastro de Carros </h1>";

$carro = new Car("Fiesta", "Ford", "Chumbo", 2020, 30000, "Gasolina", 50000.00);

$modelo = $carro->getMarca();

echo $modelo;

$pes = new Pessoa();
echo '<br>';

// SABER O TIPO DA VARIÁVEL
print_r($pes);

$pes->nome = "Eliandro";
$pes->estado_civil = "Casado";
$pes->idade = 47;

echo '<br>';
echo '<br>';

// SABER O TIPO DA VARIÁVEL
print_r($pes);

var_dump($pes);

echo '<br>';
echo '<br>';
echo $pes->nome;