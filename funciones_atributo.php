

<?php
include("conexion.php");
echo "datos enviados correctamente";
//variables que van a la tabla atributo
$txtnombreatributo = $_POST['txtnombreatributo'];
$insertar2 = mysql_query("INSERT into atributo (nombre) VALUES ('$txtnombreatributo')");
 
?>