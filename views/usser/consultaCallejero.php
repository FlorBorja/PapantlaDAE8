<html>
    <head>
        <title>Puppy Rescue: Consulta de Callejeros</title>
        <link href="../assets/css/consulta_callejero.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php include_once '../menu.php' ?>
        <form action="./traer-caninos" method="POST">
                <button type="submit" >TRAER</button>
            </form>
        <table>
            <thead>
                <tr>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Rasgos F&iacute;sicos</th>
                    <th>Condici&oacute;n del canino</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($this->caninos as $canino) { ?>
                <tr>
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