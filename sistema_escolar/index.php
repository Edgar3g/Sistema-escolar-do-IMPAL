<?php

    $erro_001=  isset( $_GET["erro_001"]) ? $_GET["erro_001"]:false;
    $erro_002=  isset( $_GET["erro_002"]) ? $_GET["erro_002"]:false;
    $erro_003=  isset( $_GET["erro_003"]) ? $_GET["erro_003"]:false;

    $msg_001= "<font color='red'><br><br>Número do cartão ou ID não foi digitado!<br></font>";
    $msg_002= "<font color='red'><br><br>Senha Não foi digitada!<br></font>";
    $msg_003= "<font color='red'><br><br>ID ou Senha incorrecta!  Por favor entre em contacto com a Secretaria do Alda Lara<br></font>";

?>

<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Alda-Lara</title>

    <!--Directorio do CSS-->
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />

    <!--Directorio do BOOTSTRAP-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!--Directorio do lOGOTIPO-->
    <link rel="shortcut icon" href="img/logo.png" />

</head>

<body id="body">
    <div class="container">

        <div class="col-md-3"></div>

        <div class="col-md-6">

            <div id="logo" class="text-center">
                <img src="img/logo.png" alt="logo" class="rounded">
            </div>

            <div class="row">
                <div id="teste">
                    
                    <form method="post" action="validacao_acesso.php">

                        <div class="form-group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
                                <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
                            </svg>
                            <label for="id_escolar">Nº Cartão:</label>
                            <input type="number" class="form-control" name="numero_cartao" id="id_escolar" placeholder="ID" >
                        </div>

                        <div class="form-group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                            </svg>
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="password">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
                        
                    </form>

                    <div>
                        <?php
                            if($erro_001){
                                echo $msg_001;
                            }if($erro_002){
                                echo $msg_002;
                            }if($erro_003){
                                echo $msg_003;
                            }
                        ?>
                    </div>

                </div>
            </div>
                            
        </div>

        <div class="col-md-3"></div>

        

    </div>
    
</body>

</html>