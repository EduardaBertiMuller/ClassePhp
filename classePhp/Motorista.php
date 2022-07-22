<?php

/**
 * Função que recebe a CNH do Motorista
 * @author Eduarda Müller
*/

/**
 * Classe herdeira da classe Pessoa
*/

class Motorista extends Pessoa{
    private $cnh;

    /**
	 * Função getter da CNH
	 * @return string cnh
	*/
	function getCnh(){
    	return $this->cnh;
	}

	/**
		* Função setter da CHN
	 	* @param string cnh
	*/
	function setCnh($cnh){
    	$this->cnh=$cnh;
	}
}

?>