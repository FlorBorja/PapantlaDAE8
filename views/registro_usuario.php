<html>
    <head>
        <title>Puppy Rescue: Registro de Usuario</title>
        <link href="../views/assets/css/styles_registro_usuario.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="rectangle">
            <form method="post">
                <label>Nombre de Usuario:</label>
                <input type="text" name="nomUs" required/>
                <br>
                <label>Password:</label>
                <input type="text" name="passUs"/>
                <button type="submit" id="enviar_formulario">REGISTRAR</button>
            </form>
            <button id="volver">
                <a href="index.php?ruta=ingreso">Volver</a>
            </button>
        </div>
    </body>
</html>