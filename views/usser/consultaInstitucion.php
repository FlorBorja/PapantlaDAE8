<html>
    <head>
        <title>Puppy Rescue: Consulta de Mascotas</title>
        <link href="../assets/css/consulta_institucion.css" rel="stylesheet" type="text/css">
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
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>CP</th>
                    <th>Nombre Representante</th>
                    <th>Cargo Representante</th>
                    <th>Tipo de Institución</th>
                    <th>Identificación Tributaria</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($this->institucion as $i) { ?>
                <tr>
                  <td><?php echo $i->getID(); ?></td>
                  <td><?php echo $i->getNomInst(); ?></td>
                  <td><?php echo $i->getDirInst(); ?></td>
                  <td><?php echo $i->getTelInst(); ?></td>
                  <td><?php echo $i->getCP(); ?></td>
                  <td><?php echo $i->getNomRep(); ?></td>
                  <td><?php echo $i->getCargo(); ?></td>
                  <td><?php echo $i->getTipoInst(); ?></td>
                  <td><?php echo $i->getIdeTrib(); ?></td>
                </tr>
              <?php } ?> 
            </tbody>
        </table>
    </body>
</html>