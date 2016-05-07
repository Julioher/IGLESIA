

<?php
include("../php/conexion.php");
echo "datos enviados correctamente";
//variables que van a la tabla atributo
$txtnombreatributo = $_POST['txtnombreatributo'];
$txtidatributo = $_POST['txtidatributo'];
 	/*Esta es la condición para guardar registros en el campo "nombre"
 	de la tabla "atributo". */
	if($_POST['btnGuardar']){ //inicio del if padre
		if($txtnombreatributo == ''){//inicio de la condición hija
				echo "<script>alert('en blanco')</script>";
			}
			else{
				$insertar = mysql_query("INSERT into atributo (nombre) 
					VALUES ('$txtnombreatributo')");
			} //fin de la condición hija
	}//fin del if padre

	/*Esta es la condición para modificar registros en el campo "nombre"
 	de la tabla "atributo". */
	if($_POST['btnModificar']){
		$modificar = mysql_query("UPDATE atributo set nombre='$txtnombreatributo' 
			where idAtributo='$txtidatributo'");
	}
	
	/*Esta es la condición para eliminar registros 
 	de la tabla "atributo". */
	if($_POST['btnEliminar']){
		$eliminar = mysql_query("DELETE from atributo where idAtributo = '$txtidatributo'");
	}
	/*Esta es la condición para buscar registros 
 	de la tabla "atributo". */
	if($_POST['btnBuscar']){
		$buscar = mysql_query("SELECT * from atributo");
		echo "<table border='1'><tr><th>Id</th><th>Nombre</th></tr>";
		while ($reg = mysql_fetch_array($buscar)){
			$n=$n+1;
			echo "<tr><td style=' text-align: left;'>".$reg['0']."</td><td style=' text-align: left;'>".$reg['1']."</td></tr>";											
		}
		echo "</table>";
	}
?>