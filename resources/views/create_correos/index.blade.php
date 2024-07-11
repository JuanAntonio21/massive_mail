<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de correos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div>
            <h1 class="my-5 mx-2 text-center" style="color: #fa691a;">Crear nuevo texto para el anuncio</h1>
        </div>
        
        <div class="row justify-content-center my-4">
            <div class="col-12">
                <p class="mb-0">Introduce el Titulo para el nuevo correo</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <textarea class="form-control" placeholder="Introduce el titulo del correo" id="title"></textarea>
            </div>
        </div>

        <div class="row justify-content-center my-4">
            <div class="col-12">
                <p class="mb-0">Introduce el mensaje para el nuevo correo</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <textarea class="form-control" placeholder="Introduce el mensaje del correo" id="message"></textarea>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <form action="{{ route('crear-nuevo-correo') }}" method="POST">
            @csrf
            <button type="submit" class="btn" style="background-color: #fa691a; color:aliceblue">Crear nuevo correo</button>
        </form>
    </div>    
</body>
</html>
