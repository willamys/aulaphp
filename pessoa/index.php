<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--EXIBIR TUDO QUE HÁ NO BD EM TABLE-->
	<a href="add.php">Add</a>
	
	<?php if (isset($_GET['msg']) && $_GET['msg'] == "sucesso"){ ?>
		<p style="color:green">
			Sucesso: Dados armazenados com sucesso!
		</p>
	<?php }else if(isset($_GET['msg']) && $_GET['msg'] == "falha"){ ?>
		<p style="color:red">
			Falha: Os dados não foram enviados.
		</p>
		<?php }?>
	<h1>Dados cadastrados:</h1>
	<table border="1">
		<tr> <th>Código</th> <th>Nome</th> <th>Idade</th><th>Editar</th><th>Excluir</th> </tr>
		<?php
		require_once('dao.pessoa.php');
		$resultado = listar();
		foreach($resultado as $linha) { ?>
			<tr> <?php
			echo "<td>" . $linha['codigo'] . "</td>";
			echo "<td>" . $linha['nome'] . "</td>";
			echo "<td>" . $linha['idade'] . "</td>";
			echo "<td><a href='alterar.php?codigo=" . $linha['codigo'] . "'>Editar</a</td>";
			echo "<td><a href='excluir.pessoa.php?codigo=" . $linha['codigo'] . "'>Excluir</a</td>";
			?> </tr>
		<?php } /*fim while*/ ?>
	</table>
</body>
</html>