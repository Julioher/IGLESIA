<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <title>Pantallaadmin</title>
	<meta charset="utf-8"/>
	<style>
	body {
    <!--background:#eee;-->
    margin:0;
    padding:0;
    font-family: "Trebuchet MS",Arial,Helvetica,sans-serif;
	<!--agregado por mí-->
	background-size: 100vw 100vh;
	background-attachment: fixed;
}
.example {
    position:relative;
    background:#fff url(../images/background.jpg);
   <!-- width:520px;-->
   width:100%;
    height:500px;
    border:1px #000 solid;
    margin:20px auto;
    padding:15px;
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
	margin-left: 15%;
	margin-right: 15%;
}

/* main menu styles */

.nav,.nav ul {
    list-style:none;
    margin:0;
    padding:0;
}

.nav {
    position:relative;
}

.nav ul {
    height:0;
    left:0;
    overflow:hidden;
    position:absolute;
    top:46px;
}

.nav li {
    float:left;
    position:relative;
}

.nav li a {
    -moz-transition:0.5s;
    -o-transition:0.5s;
    -webkit-transition:0.5s;
    background-color:#7770B4;
    border:1px solid #6E67A6;
    color:#FFF;
    display:block;
    font-size:16px;
    line-height:35px;
    padding:5px 20px;
    text-decoration:none;
    transition:0.5s;
}

.nav li:hover > a {
    background:#8CCA33;
    border-color:#6E67A6;
    color:#fff;
}

.nav li:hover ul.subs {
    height:auto;
    width:180px;
}

.nav ul li {
    -moz-transition:0.5s;
    -o-transition:0.5s;
    -webkit-transition:0.5s;
    opacity:0;
    transition:0.5s;
    width:100%;
}

.nav li ul li {
    -moz-transition-delay:0s;
    -o-transition-delay:0s;
    -webkit-transition-delay:0s;
    transition-delay:0s;
}

.nav li:hover ul li {
    opacity:1;
    -moz-transition-delay:0.5s;
    -o-transition-delay:0.5s;
    -webkit-transition-delay:0.5s;
    transition-delay:0.5s;
}

.nav ul li a {
    background:#7770B4;
    border-color:#6E67A6;
    color:#fff;
    line-height:1px;
    -moz-transition:1.5s;
    -o-transition:1.5s;
    -webkit-transition:1.5s;
    transition:1.5s;
}

.nav li:hover ul li a {
    line-height:35px;
}

.nav ul li a:hover {
    background:#8CCA33;
    background-image: -webkit-gradient(linear, 0% 0%, 0% 95%, from(rgba(255, 255, 255, 0.5)), to(rgba(255, 255, 255, 0)));
    background-image: -moz-linear-gradient(-90deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
    background-image: -o-linear-gradient(-90deg,rgba(255,255,255,0.5),rgba(255,255,25,0));
}
	
	
<!--fin del header-->
<!--inicio del img-->
img{
width:70px;
margin-left: 15%;
margin-right: 15%;
float: left;
}
<!--fin del img-->

	</style>
</head>
<body background="fondo1.jpg">
<div class="example" style=" background-image: url(imagen/catedral2.jpg); background-size:100%; no-repeat center-top;" >
 <ul class="nav">
        <li><a href="#">Registros</a></li>
        <li><a href="#">Ayuda</a></li>
        <li><a href="#">Cerrar Sesión</a></li>   
    </ul>
    
	<!--<img src="imagen/catedral2.jpg" width="70%"/>-->
</div>

</body>
</html>	
	
	
