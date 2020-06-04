<html>
    <head>
        <title>Puppy Rescue: Registro de Callejero</title>
        <link href="../assets/css/registro_callejero.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php include_once '../menu.php' ?>
        <div id="rectangle">
            <form method="post">
                <label>Calle:</label>
                <input type="text" name="calleCan" required/>
                <br>
                <label>Colonia:</label>
                <input type="text" name="colCan" required/>
                <br>
                <label>Rasgos F&iacute;sicos:</label>
                <input type="text" name="rasCan" required/>
                <br>
                <label>Condición del canino:</label>
                <input type="text" name="condCan" required/>
                <br>
                <button type="submit" id="enviar_formulario">REGISTRAR</button>
            </form>
            <button id="volver">
                <a href="">Volver</a>
            </button>
        </div>
    </body>
</html>