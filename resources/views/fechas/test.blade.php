<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Gestión de Mantenimientos</div>
            <form action="calcular" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group" align="center">
                    <label for="inicio">Fecha de Inicio</label>
                    <input type="date" id="inicio" name="inicio">
                </div>
                <div class="form-group" align="center">
                    <label for="fin">Fecha de Mantenimiento</label>
                    <input type="date" id="fin" name="fin">
                </div>
                <div class="form-group" align="center">
                    <button type="submit">Consultar</button>
                </div>
            </form>
        </div>
    </div>
    <br/>
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Operaciones Con Fechas</div>
            <form action="sumarFecha    " method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group" align="center">
                    <label for="inicio">Fecha de Inicio</label>
                    <input type="date" id="inicio" name="inicio">
                </div>
                <div class="form-group" align="center">
                    <label for="fin">Fecha de Mantenimiento</label>
                    <input type="date" id="fin" name="fin">
                </div>
                <div class="form-group" align="center">
                    <button type="submit">Consultar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
