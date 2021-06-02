<?php
//CRIAR A CONEXÃO COM O SGBD MySQL

function connectar(){
	try {
		$pw = 'constantinopla'; //senha
		$user = 'root';//usuário
		$bd ='alunox'; //banco de dados
		$cbd = new PDO('mysql:host=localhost;dbname='.$bd, $user, $pw);
		$cbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Conectado ao BD!<br>";
	} catch (PDOException $e) {
		echo "Erro: " . $e->getMessage() . " <br>";
		die();
	}
	return $cbd;
}
?>