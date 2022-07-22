<?php
/**
 * Função que recebe o Crea do Engenheiro
 * @author Eduarda Müller
 */

/**
 * Classe herdeira da classe Pessoa
*/
class Engenheiro extends Pessoa{
    private $crea;

    /**
     * Função getter do CREA
     * @return string crea
    */
    function getCrea(){
        return $this->crea;
    }

    /**
     * Função setter do CREA
     * @param string crea
    */
    function setCrea($crea){
        $this->crea=$crea;
    }
}

?>