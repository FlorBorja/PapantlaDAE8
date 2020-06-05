<html>
    <head>
        <title>Puppy Rescue: Registro de Mascota</title>
        <link href="../assets/css/registro_mascota.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php include_once '../menu.php' ?>
        <div id="rectangle1">
            <form action="./add-mascota" method="POST">
                <label>Nombre:</label>
                <input type="text" name="nomMas" id="nombre_mas"/>
                <br>
                <label>Raza:</label>
                <input type="text" name="raza" id="raza"/>
                <br>
                <label>Color:</label>
                <input type="text" name="color" id="color"/>
                <br>
                <label>Edad:</label>
                <input type="text" name="edad" id="edad"/>
                <br>
                <label>Tamaño:</label>
                <input type="text" name="tamano" id="tamano"/>
                <br>
                <label>Esterilización:</label>
                <input type="text" name="esterilizacion" id="esterilizacion"/>
                <br>
                <label>Condicion Médica:</label>
                <input type="text" name="condicion" id="condicion"/>
                <br>
                <label>Rasgo físico característico:</label>
                <input type="text" name="rasgo" id="rasgo_caracteristico"/>
        </div>
        <div id="rectangle2">
                <label>Dueño:</label>
                <input type="text" name="dueno" id="dueno"/>
                <br>
                <label>Dirección:</label>
                <input type="text" name="direccion" id="direccion"/>
                <br>
                <label>Teléfono:</label>
                <input type="text" name="telefono" id="telefono"/>
        </div>
                <input id="enviar_formulario" type="submit" value="Enviar Datos"/>
            </form>
    </body>
</html>