<html>
    <head>
        <title>Puppy Rescue: Consulta de Mascotas</title>
        <link href="../assets/css/consulta_mascota.css" rel="stylesheet" type="text/css">
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
                </tr>
            </thead>
            <tbody>
            <?php foreach ($this->mascota as $m) { ?>
                <tr>
                  <td><?php echo $m->getID(); ?></td>
                  <td><?php echo $m->getNomMas(); ?></td>
                  <td><?php echo $m->getRaza(); ?></td>
                  <td><?php echo $m->getColor(); ?></td>
                  <td><?php echo $m->getEdad(); ?></td>
                  <td><?php echo $m->getTamano(); ?></td>
                  <td><?php echo $m->getEsterilizacion(); ?></td>
                  <td><?php echo $m->getCondicion(); ?></td>
                  <td><?php echo $m->getRasgo(); ?></td>
                  <td><?php echo $m->getDueno(); ?></td>
                  <td><?php echo $m->getDireccion(); ?></td>
                  <td><?php echo $m->getTelefono(); ?></td>
                </tr>
              <?php } ?> 
            </tbody>
        </table>
    </body>
</html>