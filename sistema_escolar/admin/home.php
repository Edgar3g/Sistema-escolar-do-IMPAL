<?php
    // Painel do administrador
    
    @session_start();

    //Avaição de Segurança
    if( empty($_SESSION['numero_cartao']) || empty($_SESSION['senha']) ){
        header("Location: ../index.php");
        die();
    }

      echo "AREA DO ADMINISTRADOR EM EDIÇÃO";   
    
   

?>