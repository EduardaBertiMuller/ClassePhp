<?php
/**
 * Funcão que recebe a CRM do Médico
 * @author Eduarda Müller
 */

/**
 * Classe herdeira da classe Pessoa
 */
class Medico extends Pessoa{
    private $crm;

    /**
	 * Função getter da CRM
	 * @return string crm
	 */
	function getCrm(){
    return $this->crm;
	}

 	/**
	 * Função setter da CRM
	 * @param string crm
    */
	function setCrm($crm){
    	$this->crm=$crm;
	}
}

?>