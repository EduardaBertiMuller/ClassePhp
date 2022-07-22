<?php

/**
 * Funcão que recebe os valores das pessoas
 * @author Eduarda Müller
 * @version 1.0
*/


/**
 * Classe Pessoa define parâmetros para o medico, motorista e engenheiro.
*/
class Pessoa{

    /** @access private
     *  @name nome
    */
    private $nome;
    
    /** @access private
     *  @name dataNascimento
    */
    private $dataNascimento;

    /** @access private
     *  @name cpf
    */
    private $cpf;

    /** @access private
     *  @name rg
    */
    private $rg;


    /**
     * Função getter do nome 
     * @return string nome
    */
    function getNome(){
        return $this->nome;
    }

    /**
	 * Função setter do nome
	 * @param string nome
    */
    function setNome($nome){
        $this->nome=$nome;
    }


    /**
     * Função getter da data de nascimento
     * @return string dataNascimento
    */
    function getDataNascimento(){
        return $this->dataNascimento;
    }

    /**
	 * Função setter da data de nascimento
	 * @param string dataNascimento
	*/
    function setDataNascimento($dataNascimento){
        $this->dataNascimento=$dataNascimento;
    }

    /**
	 * Função getter do CPF
     * @return string cpf
	*/
    function getCpf(){
        return $this->cpf;
    }

    /**
	 * Função setter do CPF
	 * @param string cpf
	*/
    function setCpf($cpf){
        $this->cpf=$cpf;
    }

    /**
	 * Função getter do RG
     * @return string rg
	*/
    function getRg(){
        return $this->rg;
    }

    /**
	 * Função setter do RG
	 * @param string rg
	 */
    function setRg($rg){
        $this->rg=$rg;
    }
}

?>