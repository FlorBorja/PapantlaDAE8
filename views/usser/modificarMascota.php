<html>
    <head>
        <title>Puppy Rescue: Eliminar Mascotas</title>
        <link href="../assets/css/modificar_mascota.css" rel="stylesheet" type="text/css">
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
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Raza</th>
                    <th>Color</th>
                    <th>Edad</th>
                    <th>Tamaño</th>
                    <th>Esterilización</th>
                    <th>Condición Médica</th>
                    <th>Rasgo Físico</th>
                    <th>Nombre del Dueño</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Opción</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($this->mascota as $mascota) { ?>
                <tr>
                  <td><?php echo $mascota->getID(); ?></td>
                  <td><?php echo $mascota->getNomMas(); ?></td>
                  <td><?php echo $mascota->getRaza(); ?></td>
                  <td><?php echo $mascota->getColor(); ?></td>
                  <td><?php echo $mascota->getEdad(); ?></td>
                  <td><?php echo $mascota->getTamano(); ?></td>
                  <td><?php echo $mascota->getEsterilizacion(); ?></td>
                  <td><?php echo $mascota->getCondicion(); ?></td>
                  <td><?php echo $mascota->getRasgo(); ?></td>
                  <td><?php echo $mascota->getDueno(); ?></td>
                  <td><?php echo $mascota->getDireccion(); ?></td>
                  <td><?php echo $mascota->getTelefono(); ?></td>
                  <td><form action="./actualizarMascota" method="POST">
						<input type="submit" name="edit<?= $mascota->getID(); ?>" value="Editar">
						<input type="hidden" name="id" value="<?= $mascota->getID(); ?>">
					    </form>
                  </td>
                </tr>
              <?php } ?> 
            </tbody>
        </table>
    </body>
</html>