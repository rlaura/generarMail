<!DOCTYPE html>
<html>
<head>
	<title>Generador de E-mails</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

<div class="container">

	<h1>Generador de e-mails</h1>
	
	<div>
		<p>Presioná el botón Generar para obtener un mail de Yopmail difícil de adivinar. Utilizamos un algoritmo que genera un usuario único de 25 caracteres. ¡Nunca habrá dos iguales!</p>
	
		<button class="btn" onclick="generarMail()">Generar</button>
	</div>

	<div class="respuesta">
		
		<i class="far fa-copy" id="copiar" onclick="copiar()"></i><input type="text" name="mail" id="mail">
		<div id="res"></div>
	</div>

</div>
<script type="text/javascript" src="js/generador.js"></script>
</body>
</html>
