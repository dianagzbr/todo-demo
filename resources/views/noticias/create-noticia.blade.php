<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Noticia</title>
</head>
<body>
    <h1>Crear Noticia</h1>
    <section>
        <div>
        <form action="{{ route('noticia.store') }}" method="POST">
            @csrf

            <label for="titulo">Titulo:</label><br>
            <input type="text" name="titulo" value="{{ old('titulo') }}"><br>

            <label for="fecha">Fecha:</label><br>
            <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}">

            <label for="noticia">Noticia:</label><br>
            <textarea name="noticia" cols="30" rows="4">{{ old('noticia') }}</textarea><br>

            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria">
                <option value="Deportes">Deportes</option>
                <option value="Nacional">Nacional</option>
                <option value="Internacional">Internacional</option>
            </select>

            <input type="submit" value="Enviar">
        </form>       
        </div>
    </section>
</body>
</html>

<!--
    Metodos CRUD
    index -> listado
    create -> formulario de creación
    store -> crea nuevo registro en la base de datos
    edit -> formulario con información
    update -> actualizar registro DB
    show -> mostrar detalle de registro
    delete -> borra registro de DB
-->