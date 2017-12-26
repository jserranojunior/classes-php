<?php 
/*
- ATRIBUTOS
    * dataCompleta
    * Mes
    * Ano
    * Dia
    * MesAno
    * MesAnoAnterior
    * MesAnoPosterior
    * dataAnterior
    * dataPosterior

- METODOS
     Exibir Nome do Mes
    
*/


class data{
    private $dataCompleta;
    private $dataCompletaAnterior;
    private $dataCompletaPosterior;


    public function __construct($data){
        $this->dataCompleta = date('Y-m-d', strtotime($data));        
    }

    public function getDataCompleta(){
        $this->dataCompleta = date('d-m-Y', strtotime($this->dataCompleta));
        return $this->dataCompleta;
    }

    public function getDataCompletaAnterior(){
        $this->dataCompletaAnterior = date("d-m-Y",strtotime(($this->dataCompleta) . " -1 month"));    
        return $this->dataCompletaAnterior;
    }

    public function getDataCompletaPosterior(){
        $this->dataCompletaPosterior = date("d-m-Y",strtotime(($this->dataCompleta) . " +1 month"));        
        return $this->dataCompletaPosterior;
    }

    public function getMes(){
        $this->mes = date('m', strtotime($this->dataCompleta));
        return $this->mes;
    }

    public function getAno(){
        $this->mes = date('Y', strtotime($this->dataCompleta));
        return $this->mes;
    }
}