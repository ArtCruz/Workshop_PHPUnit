<?php

    use PHPUnit\Framework\TestCase;
    require_once 'Filme.php';
    class FilmeTest extends TestCase
    {
        /** @test */
        public function test_cria_filme()
        {
            $filme = new Filme('Teste',2022,true,9);
            $this->assertInstanceOf(Filme::class, $filme);//realmente um objeto da classe filme e não retornou null
        }

        public function test_titulo_vazio(){
            $filme2 = new Filme('A Volta dos Que Não Foram', 1989, true, 10);
            $this->assertNotEmpty($filme2->getTitulo());
        }

        public function test_filme_em_cartaz(){          
            $filme3 = new Filme('Longas Tranças de Um Careca',2000, true,4);
            $this->assertTrue($filme3->getEmCartaz());
        }
    
    }
    
?>