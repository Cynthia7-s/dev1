<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | Registro</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('recursos_formulario/style.css') ?>">
</head>
<body>
    <form action="registro.php" method="POST">
        <div id="formulario"> 
            <h1>FORMULARIO</h1>
        </div>
        <div id="tabla-formulario">
            <label for="nombre">Nombre</label>
            <input placeholder="Ingrese su nombre..." name="nombre" type="text" id="tabla">
            
            <label for="apellido_paterno">Apellido Paterno</label>
            <input placeholder="Ingrese su apellido paterno..." name="apellido_paterno" type="text" id="tabla">
            
            <label for="apellido_materno">Apellido Materno</label>
            <input placeholder="Ingrese su apellido materno..." name="apellido_materno" type="text" id="tabla">

            <label for="sexo">Género</label>
            <select name="sexo" id="tabla">
                <option value="0">Masculino</option>
                <option value="1">Femenino</option>
            </select>

            <label for="email">Correo electrónico (*)</label>
            <input placeholder="Escriba su correo electrónico" name="email" type="email" id="tabla">

            <label for="password">Contraseña</label>
            <input placeholder="Escriba su contraseña" name="password" type="password" id="tabla">

            <label for="imagen_perfil">Foto de perfil</label>
            <input type="file" name="imagen_perfil" id="tabla">

            <label for="idrol">Rol</label>
            <select name="idrol" id="tabla">
                <option value="745">Adminstrador</option>
                <option value="125">Operador</option>
            </select>

            <button name="registro" type="submit" id="button">¡Registrarse!</button>
        </div>
    </form>
</body>
</html>
