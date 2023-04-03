<?php

class Carrinho{

    public float $preco;
    public static float $imposto = 1.2;

    private array $produtos = [];

    public function getPrecoTotal():float{
        return $this -> preco * self::$imposto;
    }

    public function add(Produto $produto){
        $this->produtos[] = $produto;
    }

    public function getCarrinho(){
        return $this->produtos;
    }
}
?>