<?php
    // Painel do administrador

    
    //Avaição de Segurança
    session_start();
    $_SESSION['painel']== 'admin';
    if( (empty($_SESSION['numero_cartao']) && empty($_SESSION['senha']) ) || $_SESSION['painel'] != 'admin' ){
        header("Location: ../index.php");
        die();
    }

      echo "AREA DO ADMINISTRADOR EM EDIÇÃO";   
    
   

?>