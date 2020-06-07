<html>
    <head>
        <title>Puppy Rescue: Registro de Callejero</title>
        <link href="../assets/css/registro_callejero.css" rel="stylesheet" type="text/css">
        <script type="text/javascript">
			function confirmLogout() {
				if(confirm('¿Deseas cerrar sesion?')) {
					return true;
				}
				else {
					return false;
				}
			}

		</script>
    </head>
    <body>
        <?php include_once '../menu.php' ?>

        <div id="rectangle">
            <form action="./add-canino" method="POST">
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
        </div>

    </body>
</html>