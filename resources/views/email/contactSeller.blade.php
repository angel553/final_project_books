<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Email</title>
</head>
<body>
  
  <p>Tu publicación tiene un cliente interesado</p>
  <br>
  <p>Datos del cliente: </p>
  <br><br>
  <p><strong>Nombre del cliente: </strong>{{$contact['name']}}</p>
  <p><strong>Correo: </strong>{{$contact['email']}}</p>
  <p><strong>Asunto: </strong>{{$contact['subject']}}</p>
  <p><strong>Mensaje: </strong>{{$contact['message']}}</p>

</body>
</html>