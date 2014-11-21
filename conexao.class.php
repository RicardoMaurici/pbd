<?php
Class Conexao{
	protected $host = "localhost";
	protected $user = "postgres";
	protected $password = "root";
	protected $nomebd = "projetoBD";
	protected $con = null;

	function __construct(){}

	#inicia conexao
	function open(){
		$this->con = pg_connect("host=$this->host user=$this->user password=$this->password dbname=$this->nomebd");
		return $this->con;
	}

	function statusCon(){
		if(!$this->con){
			echo "<h5>O sistema não está conectado à [$this->nomebd] em [$this->host].</h5>";
			exit;
		}else{
			echo "<h5>O sistema está conectado ao Banco $this->nomebd em $this->host.</h5>";
		}
	}
}

?>
