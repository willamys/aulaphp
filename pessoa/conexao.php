<?php
function connectar(){
	try {
		$pw = ''; //senha
		$user = 'root';//usuário
		$bd ='alunox'; //banco de dados
		$cbd = new PDO('mysql:host=localhost;dbname='.$bd, $user, $pw);
		$cbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo "Erro: " . $e->getMessage() . " <br>";
		die();
	}
	return $cbd;
}
?>
