<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Origina</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 style="color: #fa691a" class="text-center mt-2">ORIGINA</h1>
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-4">
                <form action="{{ route('enviar-correo') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn" style="background-color: #fa691a; color:aliceblue">Enviar correo de bienvenida</button>
                </form>
            </div>
            <div class="col-md-4">
                <form action="{{ route('correos-enviados') }}" method="GET">
                    @csrf
                    <button type="submit" class="btn" style="background-color: #fa691a; color:aliceblue">Ver correos enviados</button>
                </form>
            </div>
            <div class="col-md-4">
                <form action="{{ route('crear-correo') }}" method="GET">
                    @csrf
                    <button type="submit" class="btn" style="background-color: #fa691a; color:aliceblue">Crear nuevo correo</button>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>
