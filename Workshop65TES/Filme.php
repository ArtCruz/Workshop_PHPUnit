<?php

class Filme{
    private $titulo;
    private $anoPublicacao;
    private $custoProducao;
    private $nota;

    public function __construct($titulo,$anoPublicacao,$emCartaz,$nota){

        $this->setTitulo($titulo);
        $this->setAnoPublicacao($anoPublicacao);
        $this->setEmCartaz($emCartaz);
        $this->setNota($nota);

    }

    public function listarFilme(){
        return $this->getTitulo();
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getEmCartaz(){
        return $this->emCartaz;
    }

    public function setEmCartaz($emCartaz){
        $this->emCartaz = $emCartaz; 
    }

    public function setTitulo($titulo){
        $this->titulo = 'Titulo: '.$titulo;
    }

    public function setAnoPublicacao($anoPublicacao){
        $this->anoPublicacao = ', Ano Publicaçao: '.$anoPublicacao;
    }

    public function setNota($nota){
        $this->nota = ', Nota: '.$nota.', Em Cartaz: ';
    }

    public function mostrarTitulo(){
        return $this->titulo . $this->anoPublicacao. $this->nota. $this->emCartaz;
    }

}

?>