<html>
    <head>
        <title>Puppy Rescue: Consulta de Caninos</title>
        <link href="../assets/css/adoptar_callejero.css" rel="stylesheet" type="text/css">
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
    <script type="text/javascript">
    function confirmDelete() {
				if(confirm('Estas seguro de que deseas adoptarlo?')) {
					return true;
				}
				else {
					return false;
				}
			}
</script>
    <body>
        <?php include_once '../menu.php' ?>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Calle</th>
                <th>Colonia</th>
                <th>Rasgos F&iacute;sicos</th>
                <th>Condici&oacute;n del canino</th>
                <th>Opci&oacute;n</th>
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
                  <td><form action="./adoptarCallejero">
						<input type="submit" value="Adoptar" onclick="return confirmDelete()">
						<input type="hidden" name="id" value="<?= $canino->getID(); ?>">
					    </form>
                  </td>
                </tr>
              <?php } ?>
              </tbody> 
        </table>
    </body>
</html>