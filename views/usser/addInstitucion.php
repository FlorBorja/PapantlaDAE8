<html>
    <head>
        <title>Puppy Rescue: Registro de Mascota</title>
        <link href="../assets/css/registro_institucion.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php include_once '../menu.php' ?>
        <div id="rectangle1">
            <form method="post">
                <label>INSTITUCIÓN:</label>
                <br><br>
                <label>Nombre:</label>
                <input type="text" name="nombre" id="nombre"/>
                <br>
                <label>Dirección:</label>
                <input type="text" name="direccion" id="direccion"/>
                <br>
                <label>Teléfono:</label>
                <input type="text" name="telefono" id="telefono"/>
                <br>
                <label>Código Postal:</label>
                <input type="text" name="cp" id="cp"/>
        </div>
        <div id="rectangle2">
                <label>REPRESENTANTE:</label>
                <br><br>
                <label>Nombre Completo:</label>
                <input type="text" name="nombre" id="nombre"/>
                <br>
                <label>Cargo:</label>
                <input type="text" name="Cargo" id="Cargo"/>
                <br>
                <label>Tipo de Institución:</label>
                <input type="text" name="TipoInst" id="TipoInst"/>
                <br>
                <label>Ident. Tributaria:</label>
                <input type="text" name="IdTrib" id="IdTrib"/>
        </div>
                <input id="enviar_formulario" type="submit" value="Enviar Datos"/>
            </form>
    </body>
</html>