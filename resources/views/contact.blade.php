<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto {{ isset($tipo_usuario) ? 'para ' . $tipo_usuario : '' }}</h1>
    <section>
        <div>
            <form action="/guardar_formulario" method="POST">
                @csrf

                @if($tipo_usuario == 'cliente')
                    <label for="no_cliente">No. de Cliente</label><br>
                    <input type="text" name="no_cliente" value="{{ old('no_cliente') }}" id="no_cliente"><br>
                @endif

                <label for="nombre">Nombre</label><br>    
                <input type="text" name="nombre" value="{{old('nombre')}}"><br>
                
                <label for="correo">Correo</label><br>
                <input type="email" name="correo" value="{{old('correo')}}"><br>
                @error ('correo')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                
                <label for="mensaje">Mensaje</label><br>
                <textarea name="mensaje" id="" cols="30" rows="10" value="{{old('mensaje')}}"></textarea><br>

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