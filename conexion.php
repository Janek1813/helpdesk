<?php
    class Conexion {
        public function conectar(){
            $servidor = "localhost";
            $usuario = "root";
            $password = "";
            $db = "helpdesk";
            $conexion = mysql_connect($servidor, $usuario, $password, $db);

            return $conexion;
        }
    }