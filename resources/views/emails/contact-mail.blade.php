<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>
	<p>Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
	<p>Asunto: <strong>{{ $msg['subject'] }}</strong></p>
	<p>Contenido: <strong>{{ $msg['content'] }}</strong></p>
</body>
</html>