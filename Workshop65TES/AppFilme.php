<?php

    require_once('Filme.php');

    $filme1 = new Filme('As Aventuras de Jo',2000,true,7);

    $filme1->setTitulo('Novo Titulo');
    echo $filme1->mostrarTitulo() .PHP_EOL;
    $filme2 = new Filme('Os Cabelos...', 2020, true, 8);
    echo $filme2->mostrarTitulo(); //Bug Alta Prioridade: Ao invés de ficar 'em Cartaz: true', ele fica 'em Cartaz: 1' 

?>