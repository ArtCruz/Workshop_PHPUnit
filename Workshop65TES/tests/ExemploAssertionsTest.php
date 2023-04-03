<?php

class ExemploAssertionsTest extends \PHPUnit\Framework\TestCase{

    public function testStringIguais(){//o teste SEMPRE DEVE ser público e neste caso optei por inserir o "test" no inicio ao invés da anotação "@test"

        $string1 = 'testando';
        $string2 = 'testando';

        $string3 = 'Testando';

        $this->assertSame($string1, $string2);
        //$this->assertSame($string2, $string3);

    }

    public function testNumerosAdd(){
        $this -> assertEquals(10, 5+5);
    }

}
?>