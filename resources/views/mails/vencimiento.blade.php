<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div>
    <table border="2">
        <thead>
        <tr>
            <th>Información</th>
            <th>Día(s) Restante(s)</th>
        </tr>
        </thead>
        <tr>
            <td>Se acerca la fecha de Vencimiento: {{ $fecha }}</td>
            <td align="center"> {{ $dias }}</td>
        </tr>
    </table>

</div>
</body>
</html>

