<?php
    //Painel do Professor

    
    //Avaição de Segurança
    session_start();
    $_SESSION['painel']== "prof";
    if( (empty($_SESSION['numero_cartao']) && empty($_SESSION['senha']) ) || $_SESSION['painel'] != 'prof' ){
        header("Location: ../index.php");
        die();
    }

    echo "AREA DO PROFESSOR EM EDIÇÃO";

?>