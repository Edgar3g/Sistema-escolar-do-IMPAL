<?php

    @session_start();
    $numero_cartao= $_POST["numero_cartao"];
    $senha= $_POST["senha"];

    if( isset($_POST["entrar"]) ){ 

        if( empty( $_POST["numero_cartao"]) || empty($_POST["senha"]) ){

            if( empty( $_POST["numero_cartao"]) ){
               $erro.="erro_001=".md5(true).'&';
            }
            if( empty($_POST["senha"]) ) {
                $erro.="erro_002=".md5(true);
            }
            header("Location: index.php?".$erro);
            die();
        } 
    }       
  
    include_once "conecao.php";

    $banco_dados= new Banco_dados();
    $conn=$banco_dados->conecao_bd();

    $sql= "SELECT * FROM usuarios WHERE numero_cartão= '$numero_cartao' and senha= '$senha' ";
    
    $resultado_id= mysqli_query($conn,$sql);
    
    if($resultado_id){
        
        $dados_usuario= mysqli_fetch_array($resultado_id);

        if( isset($dados_usuario) ){
            
            
        
            $_SESSION['estado']=        $dados_usuario['estado'];
            $_SESSION['painel']=        $dados_usuario['painel'];

            if($_SESSION['estado']== "inactivo"){
                header("Location: index.php?erro_004=".md5(true));
                die();
            }
            if($_SESSION['painel']== "admin"){

                $_SESSION['nome']=          $dados_usuario['nome'];
                $_SESSION['numero_cartao']= $dados_usuario['numero_cartão'];
                $_SESSION['senha']=         $dados_usuario['senha'];
                header("Location: admin/home.php");
                
            }
            if($_SESSION['painel']== "prof"){

                $_SESSION['nome']=          $dados_usuario['nome'];
                $_SESSION['numero_cartao']= $dados_usuario['numero_cartão'];
                $_SESSION['senha']=         $dados_usuario['senha'];
                header("Location: prof/home.php");
                die();
            }
            if($_SESSION['painel']== "aluno"){

                $_SESSION['nome']=          $dados_usuario['nome'];
                $_SESSION['numero_cartao']= $dados_usuario['numero_cartão'];
                $_SESSION['senha']=         $dados_usuario['senha'];
                header("Location: aluno/home.php");
                die();

            }else{
                echo "<font color='red'><br><br>Seu Perfil não foi encrontrado! Por favor entre em contacto com a Direcção do Alda Lara<br></font>"; 
            }s
              
        }else{
            header("Location: index.php?erro_003=".md5(true));
            die();
        }
       
    }else{
        echo "Consulta No Banco de Dados não consedida";
        die();
    } 

?>