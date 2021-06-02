<?php
class Pessoa{
	private $codigo;
    private $nome;
    private $idade;

    function __construct($nome, $idade){
        $this->setNome($nome);
        $this->setIdade($idade);
       // echo "Pessoa criada com sucesso";
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
   
    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

	/**
	 * Get the value of codigo
	 */ 
	public function getCodigo()
	{
		return $this->codigo;
	}

	/**
	 * Set the value of codigo
	 *
	 * @return  self
	 */ 
	public function setCodigo($codigo)
	{
		$this->codigo = $codigo;
	}
}
?>