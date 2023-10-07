<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenio al curso de Laravel 10</h1><hr>
    <h2>{{ $nombre }}</h2>
    <h3>Lista de asistencia 07/Octubre/2023</h3>
    <ul>
        @foreach ($alumnos as $a)
            <li>{{ $a }}</li>
        @endforeach
    </ul>
    <h2>Datos</h2>
    <table border="1">
        <tr>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Turno</td>
        </tr>
        @foreach ($datos as $d)
            <tr>
                <td>{{ $d["nombre"] }}</td>
                <td>{{ $d["edad"] }}</td>
                <td>{{ $d["turno"] }}</td>
            </tr>
        @endforeach
    </table>
    <p>Laravel utiliza una arquitectura MVC Modelo vista controlador</p>

    <p>
        Modelo: Es la base de datos, los modelos son nuestras tablas, por cada tabla
        debemos tener un modelo.
        Los modelos están en la carpeta de app/Models
    </p>

    <p>
        Vista: Las vistas son los HTML y CSS que se muestran en la página Web
        Están en la carpeta de resources/views
    </p>

    <p>
        Controladores: Son archivos donde se plasma la lógica del negocio
        Están en app/http/Controllers
    </p>

    <p>
        Las rutas: son urls que nos dirigen hacía una página específica
        Están en routes/web.php
    </p>
</body>
</html>