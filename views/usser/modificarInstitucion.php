<html>
    <head>
        <title>Puppy Rescue: Consulta de Mascotas</title>
        <link href="../assets/css/consulta_institucion.css" rel="stylesheet" type="text/css">
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
                    <th>Opción</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($this->institucion as $institucion) { ?>
                <tr>
                  <td><?php echo $institucion->getID(); ?></td>
                  <td><?php echo $institucion->getNomInst(); ?></td>
                  <td><?php echo $institucion->getDirInst(); ?></td>
                  <td><?php echo $institucion->getTelInst(); ?></td>
                  <td><?php echo $institucion->getCP(); ?></td>
                  <td><?php echo $institucion->getNomRep(); ?></td>
                  <td><?php echo $institucion->getCargo(); ?></td>
                  <td><?php echo $institucion->getTipoInst(); ?></td>
                  <td><?php echo $institucion->getIdeTrib(); ?></td>
                  <td><form action="./actualizarInstitucion" method="POST">
						<input type="submit" name="edit<?= $institucion->getID(); ?>" value="Editar">
						<input type="hidden" name="id" value="<?= $institucion->getID(); ?>">
					    </form>
                  </td>
                </tr>
              <?php } ?> 
            </tbody>
        </table>
    </body>
</html>