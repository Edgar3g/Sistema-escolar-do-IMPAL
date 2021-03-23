<?php
   //Painel do Aluno


    //Avaição de Segurança
    session_start();
    $_SESSION['painel']== 'aluno';
    if( (empty($_SESSION['numero_cartao']) && empty($_SESSION['senha']) ) || $_SESSION['painel'] != 'aluno' ){
        header("Location: ../index.php");
        die();
    }

    echo "AREA DO ALUNO EM EDIÇÃO";

?>