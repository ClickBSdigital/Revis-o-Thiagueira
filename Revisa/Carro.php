<?php

//  PODEMOS CRIAR UMA CLASSE COM OU SEM CONSTRUTOR, TEMOS ATRIBUTOS PUCLICOS E PRIVADO, MÉTODOS GET E SET.

// CRIE UMA CLASSE DE UM CARRO, COM NO MÍNIMO 3 ATRIBUTOS NO CONSTRUTOR, COM SEUS ATRIBUTOS SENDO 7 ATRIBUTOS, GETTERS E SETTES, MÉTODOS E TESTE SUAS CLASSES!!!!!!!!

// class Carro{
//     public string $modelo;
//     public string $marca;
//     public string $cor;

//     function __construct($modelo,$marca,$cor){
//         $this->modelo = $modelo;
//         $this->marca = $marca;
//         $this->cor = $cor;
//     }

//     public function inform(){
//         echo "Seu carro é: ! <br>" . $this->modelo;
//     } 

//     public function getMarca(){
//         return $this->marca;
//     }
// }
// $car1 = new Carro("Fiesta", "Ford", "Chumbo");

// $car1->inform();
// echo "<br>" . $car1->modelo;

// $car2 = new Carro("Corsa" , "Ford", "Preto");
// echo "<br>" . $car2->marca;



// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

// O código que você forneceu implementa uma classe básica chamada Carro com três atributos, modelo, marca e cor, e inclui um construtor para inicializá-los. Além disso, há um método inform para exibir informações do carro e um getter para a marca.

// Para atender totalmente à solicitação (7 atributos, getters e setters, métodos adicionais, e teste das classes), é possível expandir o código. Abaixo está a versão revisada e completa:

class Carro {
    private string $modelo;
    private string $marca;
    private string $cor;
    private int $ano;
    private int $quilometragem;
    private string $combustivel;
    private float $preco;

    // Construtor para inicializar os atributos principais
    public function __construct($modelo, $marca, $cor, $ano, $quilometragem, $combustivel, $preco) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->quilometragem = $quilometragem;
        $this->combustivel = $combustivel;
        $this->preco = $preco;
    }

    // Getters
    public function getModelo() {
        return $this->modelo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getQuilometragem() {
        return $this->quilometragem;
    }

    public function getCombustivel() {
        return $this->combustivel;
    }

    public function getPreco() {
        return $this->preco;
    }

    // Setters
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function setQuilometragem($quilometragem) {
        $this->quilometragem = $quilometragem;
    }

    public function setCombustivel($combustivel) {
        $this->combustivel = $combustivel;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    // Método para exibir informações completas do carro
    public function exibirInformacoes() {
        echo "Modelo: {$this->modelo} <br>";
        echo "Marca: {$this->marca} <br>";
        echo "Cor: {$this->cor} <br>";
        echo "Ano: {$this->ano} <br>";
        echo "Quilometragem: {$this->quilometragem} km <br>";
        echo "Combustível: {$this->combustivel} <br>";
        echo "Preço: R$ {$this->preco} <br>";
    }
}

// Testando a classe
$carro1 = new Carro("Fiesta", "Ford", "Chumbo", 2020, 30000, "Gasolina", 50000.00);
$carro2 = new Carro("Civic", "Honda", "Preto", 2018, 45000, "Flex", 85000.00);

echo "<h3>Informações do Carro 1:</h3>";
$carro1->exibirInformacoes();

echo "<h3>Informações do Carro 2:</h3>";
$carro2->exibirInformacoes();


// Explicações:
// Atributos:

// Foram adicionados mais quatro atributos: ano, quilometragem, combustivel, e preco.
// Encapsulamento:

// Atributos definidos como private para reforçar o princípio de encapsulamento.
// Getters e Setters:

// Incluídos métodos get e set para todos os atributos, permitindo manipular seus valores de forma controlada.
// Teste:

// Criados dois objetos Carro com dados diferentes e exibidas suas informações usando o método exibirInformacoes.
// Com essa implementação, o código está mais completo e atende aos critérios de classe bem estruturada em PHP.
