<?php

require './App/Entity/Car.php';

echo "<h1> Cadastro de Carros </h1>";

$carro = new Car("Fiesta", "Ford", "Chumbo", 2020, 30000, "Gasolina", 50000.00);

$modelo = $carro->getMarca();

echo $modelo;