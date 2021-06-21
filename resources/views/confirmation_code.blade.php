<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h2>Hola {{$name}}, bienvenido a Super Market!</h2>
    <p>Por favor confirmá tu correo electrónico con el que te registraste.</p>
    <p>para ello solo debes hacer Click en el siguiente enlace:</p>
    <a href="{{ url('register/verify/' . $confirmation_code) }}">
        Clic para confirmar correo electrónico
    </a>
</body>

</html>