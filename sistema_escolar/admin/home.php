<?php
    // Painel do administrador
    
    session_start();

    if( empty($_SESSION['numero_cartao']) || empty($_SESSION['senha']) ){
        
        echo "<font color='red'><br><br> entraste Sem inicar a sessão <br></font>"; 
      
    }else{

         echo "AREA DO ADMINISTRADOR EM EDIÇÃO";
    }
   

?>