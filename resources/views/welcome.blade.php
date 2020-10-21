<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>


    <body>

            <div class="container">
            <h2>Bienvenido Sistema Autos/Servicios</h2>
            <p>Gestion de sucursales</p>            
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Crear sucursal</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <button type="button" class="btn btn-success">
                            <a style="color:white;" href="{{ route('sucursal.create') }}">Crear</a> 
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>

            <br>
            <br>

            <p>Gestion de Mecanicos</p>            
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Crear Mecanico</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <button type="button" class="btn btn-success">
                            <a style="color:white;" href="{{ route('mecanico.create') }}">Crear</a> 
                    </button>
                    </td>
                </tr>
                </tbody>
            </table>

                <BR>
                <BR>
                </BR>

            <p>Agendar Hora mediante API</p>            
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Crear Hora</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <button type="button" class="btn btn-success">
                        <a style="color:white;" href="{{ route('agenda.create') }}">Agendar</a> 
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>

            </div>

    </body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</html>
