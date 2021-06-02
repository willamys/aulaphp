<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Inserir Nova Pessoa:</h1>
    <!--Formulário de entrada de dados-->
    <form name="inserir" action="salvar.pessoa.php" method="post">
        Nome: <input type="text" name="nome">
        Idade: <input type="text" name="idade">
        <input type="submit" value="Inserir">
    </form>
</body>
</html>