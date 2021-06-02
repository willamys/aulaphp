<?php
    require_once('pessoa.class.php');
    require_once('dao.pessoa.php');
//Se recebemos dados por POST para serem inseridos
    if (isset($_GET['codigo'])) {
//Inserir dados com Prepared Statements
        if(!($_GET['codigo'] == "")){
            //criar objeto passando o nome e idade
            excluir($_GET['codigo']);
            
            header('location:index.php?msg=sucesso');
        }else{
            header('location:index.php?msg=falha');
        }
    }else{
        header('location:index.php?msg=falha');
    }
    ?>