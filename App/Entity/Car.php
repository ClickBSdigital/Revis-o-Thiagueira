<?php

class Car {
    public string $modelo;
    public string $marca;
    public string $cor;
    public int $ano;
    public int $quilometragem;
    public string $combustivel;
    public float $preco;

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
}