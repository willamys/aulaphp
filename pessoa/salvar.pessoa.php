<?php
    require_once('pessoa.class.php');
    require_once('dao.pessoa.php');
//Se recebemos dados por POST para serem inseridos
    if (isset($_POST['nome']) && isset($_POST['idade'])) {
//Inserir dados com Prepared Statements
        if(!($_POST['nome'] == "" || $_POST['idade'] == "")){
            //criar objeto passando o nome e idade
            $p = new Pessoa($_POST['nome'], $_POST['idade']);
            
            salvar($p);
            
            header('location:index.php?msg=sucesso');
        }else{
            header('location:index.php?msg=falha');
        }
    }else{
        header('location:index.php?msg=falha');
    }
    ?>