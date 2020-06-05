<?php $GLOBALS['page_name'] = 'registro_usuario'; ?>

<html>
    <head>
        <title>Puppy Rescue: Registro de Usuario</title>
        <link href="../views/assets/css/registro_usuario.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="rectangle">
            <form action="./registro_usuario/create-account" method="POST">
                <label>Nombre de Usuario:</label>
                <input type="text" name="nomUs" required/>
                <br>
                <label>Password:</label>
                <input type="text" name="passUs" required/>
                <button type="submit" id="enviar_formulario">REGISTRAR</button>
            </form>
            <button id="volver">
                <a href="login.php">Volver</a>
            </button>
        </div>
    </body>
</html>