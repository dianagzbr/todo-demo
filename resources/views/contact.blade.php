<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <section>
        <div>
            <form action="/guardar_formulario" method="POST">
                @csrf
                <label for="nombre">Nombre</label><br>    
                <input type="text" name="nombre"><br>
                
                <label for="correo">Correo</label><br>
                <input type="email" name="correo"><br>
                
                <label for="mensaje">Mensaje</label><br>
                <textarea name="mensaje" id="" cols="30" rows="10"></textarea><br>

                <input type="submit" value="Enviar">
            </form>        
        </div>
    </section>
</body>
</html>