<?php

    class Banco_dados{
        private $host="localhost";
        private $user="root";
        private $senha="";
        private $database="sistema_escolar";

        public function set_bd($host,$user,$senha,$database){
            $this->host=$host;
            $this->user=$user;
            $this->senha=$senha;
            $this->database=$database;
        }
        public function conecao_bd(){
            $conn= mysqli_connect($this->host,$this->user,$this->senha,$this->database);
            if(!$conn){
                die ("<br><font color='red'> 
                    Erro na Conecção com Banco de Dados...[Por favor entrar em Contacto com o Desenvolvedor do aplicativo->Eng.CARLOS MARQUES]
                </font><br>" );
                
            }else{
                return $conn;
            }

    }
}

?>
