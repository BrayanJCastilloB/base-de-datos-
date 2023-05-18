<?php
$servidor= "localhost";
$usuario= "root";
$clave="";
$BD="";

$conectar=new mysqli($servidor,$usuario,$clave,$BD);

if ($conectar->connect_errno) {
    die("la conexion ha fallado"   . $conectar->connect_errno);
}
else{
    echo("conexion exitosa");

}

?>
