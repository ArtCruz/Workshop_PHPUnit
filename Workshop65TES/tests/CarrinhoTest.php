<?php

use PHPUnit\Framework\TestCase;

class CarrinhoTest extends TestCase{

    /**public function setUp():void{        //BUG DE MÉDIA PRIORIDADE: o método setUp() aparece após o TearDown()

        echo "Iniciando Testes".PHP_EOL;
        echo "...";//Torna os testes mais visiveis no terminal

    }  */
    

    public function testRetornoCorretoPrecoTotal(){        //BUG DE MÉDIA PRIORIDADE: Como não consegui utilizar o use de maneira correta tive que isar o Require e isso acarretou certos problemas na hora de realizar os testes
        require "Carrinho.php";

        $carrinho = new Carrinho();
        $carrinho->preco = 10;
        $precoLiq = $carrinho->getPrecoTotal();

        $this->assertEquals(12, $precoLiq);
    }

    /** @test */
    public function mudancaValorImpostoCarrinho(){
        require 'Carrinho.php';
        Carrinho::$imposto = 1.5;

        $carrinho = new Carrinho();
        $carrinho->preco = 10;
        $precoLiq = $carrinho->getPrecoTotal();

        $this->assertEquals(15, $precoLiq);
    }

    public function test_carrinho_vazio(){        
        require 'Carrinho.php';
        $carrinho = new Carrinho();

        $this->assertEmpty($carrinho->getCarrinho());
    }

    public function test_carrinho_nao_vazio(){    
        require 'Carrinho.php';
        require 'Produto.php';

        $carrinho = new Carrinho();
        $carrinho->add(new Produto());

        $this->assertNotEmpty($carrinho->getCarrinho());
    }

    /**public function tearDown():void{        

        echo "Teste Finalizado".PHP_EOL;

    } */
    

}
?>