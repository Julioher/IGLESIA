<!doctype html>
<html>
<head>
<title>pantalla formulario atributo</title>
<meta charset="utf-8"/>


<style>
#padre{
background-color: #F6E3CE;
text-align: center;
width:40%;
margin-left:30%;
margin-top:4%;
}
#tbpadre, td{
border:0px solid black;
margin-right: auto;
margin-left: auto;
}
#mostrar{
height: 150px;
background-color: white;
border: 1px solid gray;
border-radius: 5px;
margin-left: 2%;
margin-right: 2%;
}
#padre{
border-radius: 5px;
border: 1px solid gray;
}

body{
background-size: 100vw 100vh;
background-attachment: fixed;
}
.vista{
border: 0.1px solid gray;
}
</style>
</head>



<body background="fondo1.jpg">
<div id="padre"><!--inicio div padre-->
	<h2>Mantenimiento de atributos</h2>
	
<form action="../php/funciones_atributo.php" method="POST">    <!--inicio del formulario-->
	<table id="tbpadre" ><!--inicio tabla padre-->
		<tr> <!--inicio de primera fila-->
			<td><label>Id:</label></td>
			<td><input type="text"  name="txtidatributo" id="txtidatributo" size="70"/></td>		
		</tr><!--fin de primera fila-->
		
		<tr><!--inicio de segunda fila-->
			<td><label>Nombre:</label><td>
			<input type="text" name="txtnombreatributo" id="txtnombreatributo" size="70"/></td></td>
		</tr><!--fin de segunda fila-->
	</table> <!--fin tabla padre-->
		<p>
	<div id="mostrar">
		</div>
		<p>
	<input type="submit" value="Buscar" name="btnBuscar"/>
	<input type="submit" value="Guardar" name="btnGuardar"/>
	<input type="submit" value="Modificar" name="btnModificar"/>
	<input type="submit" value="Eliminar" name="btnEliminar"/>
</form> <!--fin del formulario-->
</div><!--fin div padre-->



</body>
</html>