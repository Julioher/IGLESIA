<!DOCTYPE HTML>
<html>
<head>
</head>
	<title>Proyecto de programación</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"/>
	<link rel="stylesheet" href="css/estyle.css"/>
	<link rel="stylesheet" href="css/style2.css"/>-->
	<link rel="stylesheet" href="css/calendario.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/calendario.js"></script>
	<script type="text/javascript" src="js/codigo.js"></script>
	<script type="text/javascript" src="js/codigo.js"></script>
</head>
<body class="body" background="fondo1.jpg">



	<div id="contenedor"> <!--inicio del contenedor general-->
	
	<header>
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu" class="icon-menu"></label>
			<nav class="menu">
				<ul>
					<li><a href="#"><b>Inicio</b></a></li>
					<li><a href="#"><b>Nosotros</b></a></li>
					<li><a href="#"><b>Santos</b></a></li>
					<li><a  href="file:///C:/xampp/htdocs/proyec_progra/historia_RCC.html"><b>Historia de RCC</b></a></li>
					<li><a href="#"><b>Descargas</b></a></li>
					<li><a href="file:///C:/xampp/htdocs/proyec_progra/galeria_img.html<"><b>Galería de imagenes</b></a></li>
					<li><a href="#"><b>Videos</b></a></li>
				</ul>
			 
			</nav>
		</header><!-- comentario -->
			
		
		<div id="imagen">
			<img id="vaticano" src="imagen/fondo_principal2.jpg"/>
		</div>
		
		
		
		<div id="subcontenedor"> <!--inicio del subcontenedor -->
		
		<div id="izquierdo"> <!--inicio del div izquierdo-->
		<form>			
					<h3 class="p">Suscribirse</h3>
					<label class="b"><b>Usuario:</b></label><br/>				
						 <input type="text" name="usuario" class="input"/><br/>
					<label class="b"><b>Contraseña:</b></label><br/>
						 <input type="password" name="password" class="input"/><br/>
					<label class="b"><b>Fecha de nacimiento:</b></label><br/>
						<input type="text" name="fecha" id="fecha" class="input"/></p>
						
						 
						<input type="submit" value="Suscribirse"/>
							<h3 class="p">Enlaces</h3>
							<p><a target="_blank" href="http://psicologoscatolicos.org/Documents/biblia-ab.htm">La Biblia</a></p>
							<p><a target="_blank" href="http://www.vatican.va/archive/catechism_sp/index_sp.html">Catecismo</a></p>
							<p><a target="_blank" href="http://www.vatican.va/roman_curia/pontifical_councils/justpeace/documents/rc_pc_justpeace_doc_20060526_compendio-dott-soc_sp.html">Doctrina Social<br/>de la iglesia</a></p>
							<p><a target="_blank" href="http://www.vatican.va/holy_father/index_sp.htm">Magisterio</a></p>
							<a target="_blank" href="http://www.news.va/es/sites/homilias"><img id="homilia" src="imagen/homilia.png"/></a>
							<p>
							<a target="_blank" href="http://www.news.va/es/sites/el-papa-francisco-en-corea"><img id="corea" src="imagen/corea.png"/></a>
							<p>
							<a target="_blank" href="https://twitter.com/pontifex_es"><img id="tweeter" src="imagen/tweeter.png"/></a>
					</form>
		</div> <!--fin del  div izquierdo-->
		
		<div id="centro"> <!--inicio del div centro-->
		<h3 class="p">Moseñor Romero</h3>
		<a target="_blank" href="http://fundacionmonsenorromero.org.sv/biografia"><img id="romero" src="imagen/romero.jpg"/></a>
		<p class="b"><b>Nuestro beato salvadoreño; un hombre lleno de historia<br/>valor
		y determinación, que luchó por su pueblo.</b></p>
		<h3 class="p">Papa Francisco</h3>
		<a target="_blank" href="https://w2.vatican.va/content/francesco/es/biography/documents/papa-francesco-biografia-bergoglio.html"><img id="papa" src="imagen/papa.jpg"/></a>
		<p class="b"><b>Nuestro Papa latino, carismático y humilde</b>
		</p>
		<h3 class="p">Rutilio Grande</h3>
		<a target="_blank" href="https://es.wikipedia.org/wiki/Rutilio_Grande"><img id="papa" src="imagen/rutilio.jpg"/></a>
		<p class="b"><b>Un gran sacerdote salvadoreño y servidor del Señor.</b>
		</p>
		</div> <!--fin del  div centro-->
		
		
		
		
		<div id="derecho"> <!--inicio del div derecho-->
	
		</div> <!--fin del  div derecho-->
		
		<div id="pie">
			<footer id="pie_principal">
			<p class="b"><b>RENOVACIÓN CARISMÁTICA CATÓLICA DE SANTIAGO DE MARÍA</b></p>
			</footer>		
		</div>
		
		</div> <!--fin del subcontenedor -->
		
		
		
	</div> <!--fin del contenedor general-->

</body>


</html>