<html>
    <head>
        <title>Puppy Rescue: Consulta de Callejeros</title>
        <link href="../assets/css/consulta_callejero.css" rel="stylesheet" type="text/css">
        <LINK href="../assets/css/menu.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <div id="menu">
			<ul class="nav">
                <li><a href="">MASCOTA</a>
                    <ul>
						<li><a href="../usser/addMascota.php">Registrar</a></li>
						<li><form action="./consultaCallejero"><button><a href="../usser/modificarMascota.php">Modificar Datos</a></button></form></li>
						<li><form action="./consultaMascota"><button><a href="../usser/consultaMascota.php">Consultar</a></button></form></li>
						<li><form action="./consultaMascota2"><button><a href="../usser/eliminarMascota.php">Eliminar</a></button></form></li>
					</ul>
                </li>
                <li><a href="">CALLEJERO</a>
                    <ul>
						<li><a href="../usser/addCallejero.php">Registrar</a></li>
						<li><form action="./consultaCallejero"><button><a href="../usser/consultaCallejero.php">Consultar</a></button></form></li>
						<li><form action="./consultaCallejero2"><button><a href="../usser/adoptarCallejero.php">Adoptar</a></button></form></li>
					</ul>
                </li>
				<li><a href="">INSTITUCI&Oacute;N</a>
                    <ul>
                        <li><form action="./consultaInstitucion"><button><a href="../usser/consultaInstitucion.php">Consultar</a></button></form></li>
						<li><a href="../usser/addInstitucion.php">Registrar</a></li>
						<li><form action="./consultaCallejero"><button><a href="../usser/modificarInstitucion.php">Modificar Datos</a></button></form></li>
					</ul>
                </li>
				<li><form action="./logout"><button><a href="">CERRAR SESI&Oacute;N</a></button></form></li>
			</ul>
		</div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Rasgos F&iacute;sicos</th>
                    <th>Condici&oacute;n del canino</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($this->caninos as $canino) { ?>
                <tr>
                  <td><?php echo $canino->getID(); ?></td>  
                  <td><?php echo $canino->getCalle(); ?></td>
                  <td><?php echo $canino->getColonia(); ?></td>
                  <td><?php echo $canino->getRasgo(); ?></td>
                  <td><?php echo $canino->getCondicion(); ?></td>
                </tr>
              <?php } ?> 
            </tbody>
        </table>
    </body>
</html>