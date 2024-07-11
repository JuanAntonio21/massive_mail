<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correos Enviados</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="my-5 mx-2 text-center">Correos Enviados</h1>
    <div class="container">
        <div class="col-12 mx-2">
            <form action="{{ route('correos-enviados') }}" method="GET" class="mt-3">
                <div class="row">
                    <div class="col-4">
                        <label for="fecha" class="col-form-label text-left">Selecciona una fecha:</label>
                    </div>
                    <div class="col-4">
                        <input type="date" id="fecha" name="fecha" class="form-control">
                    </div>
                    <div class="col-4 text-right">
                        <button type="submit" class="btn btn-primary" style="background-color: #fa691a !important;">Filtrar</button>
                    </div>
                </div>
            </form>
        </div>        
    </div> 
    
    <div class="container">
        <div class="col-12 mx-2">
            <table class="table table-bordered mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th style="background-color:#fa691a">Correo Electrónico</th>
                        <th style="background-color:#fa691a">Fecha de Envío</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($correosEnviados as $correo)
                    <tr>
                        <td>{{ $correo->email }}</td>
                        <td>{{ $correo->fecha_envio }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>   
        </div>
    </div>
</body>
</html>
