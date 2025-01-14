<?php

class Animal{
    public string $nome;
    public string $raca;
    public string $cor;

    function __construct($nome,$raca){
        $this->nome = $nome;
        $this->raca = $raca;
    }

    public function hello(){

        echo "Olá! <br>" . $this->nome;
    } 

    public function getRaca(){
        return $this->raca;
    }

    public function setCor($cor){
        $this->$cor;
    }
}
$dog = new Animal("Totó", "VL");

$dog->hello();

$dog2 = new Animal("Bilu" , "Pintcher");
echo "<br>" . $dog2->raca;

$raca_dog = $dog->getRaca();
echo "<br>" . $raca_dog;

$dog->setCor("Marrom");
echo "<br>" . $dog->cor;