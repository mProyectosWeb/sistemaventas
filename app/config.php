<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemaventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {

    $pdo = new PDO(
        dsn: $servidor, 
        username: USUARIO, 
        password: PASSWORD, 
        options: array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    echo "La conexion a la base de datos fue con exito";

} catch (PDOException $e) {
    // print_r($e);
    echo "Error al conectar a la base de datos";
}