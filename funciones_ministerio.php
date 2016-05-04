


<?php
	include("conexion.php");
	echo "datos enviados correctamente";

	$txtidministerio= $_POST['txtidministerio'];
	$txtnombreministerio= $_POST['txtnombreministerio'];

	/*if($_POST['btnGuardar']){
		$insertar= mysql_query("INSERT into ministerio (nombre) 
		values ('$txtnombreministerio')");
	}*/


	if($_POST['btnGuardar']){
		if($txtnombreministerio == ''){
			echo "<script>alert('en blanco')</script>";
		}
		else{
			$insertar= mysql_query("INSERT into ministerio (nombre) 
			values ('$txtnombreministerio')");
		}
	}
	
	if($_POST['btnModificar']){
		$Modificar= mysql_query("update  ministerio SET nombre='$txtnombreministerio' where idMinisterio='$txtidministerio'");
	
	}

	if($_POST['btnEliminar']){
		$Eliminar= mysql_query("delete  from ministerio where idMinisterio='$txtidministerio'");
	
	}

	if($_POST['btnBuscar']){
		$registros = mysql_query("SELECT * FROM ministerio");

		echo "<table border='1'><tr><th>Id</th><th>Nombre</th></tr>";
		while ($reg = mysql_fetch_array($registros)){
			$n=$n+1;
			echo "<tr><td style=' text-align: left;'>".$reg['0']."</td><td style=' text-align: left;'>".$reg['1']."</td></tr>";
													
		}
		echo "</table>";
	}


	
?>