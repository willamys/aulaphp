<?php
require_once('conexao.php');
require_once('pessoa.class.php');

function salvar($p){
  $cbd = connectar();
  $inserirPS = $cbd->prepare("INSERT INTO pessoa (nome, idade) VALUES (:nome,
      :idade);");
  $inserirPS->bindParam(':nome', $p->getNome(), PDO::PARAM_STR);
  $inserirPS->bindParam(':idade', $p->getIdade(), PDO::PARAM_INT);
  $inserirPS->execute();
}

function alterar($p){
  $cbd = connectar();
  $inserirPS = $cbd->prepare("UPDATE pessoa SET nome = :nome, idade = :idade 
  WHERE codigo = :codigo");
  $inserirPS->bindParam(':nome', $p->getNome(), PDO::PARAM_STR);
  $inserirPS->bindParam(':idade', $p->getIdade(), PDO::PARAM_INT);
  $inserirPS->bindParam(':codigo', $p->getCodigo(), PDO::PARAM_INT);
  $inserirPS->execute();
  return $inserirPS;
}

function excluir($codigo){
  $cbd = connectar();
  $inserirPS = $cbd->prepare("DELETE FROM pessoa WHERE codigo = :codigo;");
  $inserirPS->bindParam(':codigo', $codigo, PDO::PARAM_INT);
  $inserirPS->execute();
}

function listar(){
  $cbd = connectar();
  $pessoas = new ArrayObject();
  $resultado = $cbd->query("SELECT * FROM pessoa;");
  
  while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
    $pessoas->append($linha);
  }
  return $pessoas;
}

function listarPorCodigo($codigo){
  $cbd = connectar();
  $pessoa = null;
  $inserirPS = $cbd->prepare("SELECT * FROM pessoa WHERE codigo= :codigo;");
  $inserirPS->bindParam(':codigo', $codigo, PDO::PARAM_INT);
  $inserirPS->execute();
  
  while($linha = $inserirPS->fetch(PDO::FETCH_ASSOC)){
    $pessoa = new Pessoa($linha['nome'], $linha['idade']);
  }

  return $pessoa;
}

?>