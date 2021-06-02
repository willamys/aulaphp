<!DOCTYPE html>
<?php require_once('dao.pessoa.php');?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $codigo = $_GET['codigo'];
    $codigoSafe = htmlspecialchars($codigo);?>
    <h1>Alterar Pessoa:</h1>
    <!--Formulário de entrada de dados-->
    <form name="inserir" action="alterar.pessoa.php" method="post">
        <input type="hidden" name="codigo" value="<?php echo $codigoSafe;?>">    
        <?php $pessoa = listarPorCodigo($codigoSafe);?>
        Nome: <input type="text" name="nome" value="<?php echo $pessoa->getNome();?>">
        Idade: <input type="text" name="idade" value="<?php echo $pessoa->getIdade();?>">
        <input type="submit" value="Inserir">
    </form>
</body>
</html>
