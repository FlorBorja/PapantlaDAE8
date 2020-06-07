<html>
    <head>
        <title>Puppy Rescue: Registro de Mascota</title>
        <link href="../assets/css/registro_institucion.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php include_once '../menu.php' ?>
        <div id="rectangle1">
            <form action="
				<?php 
				if($institucion->getID() == null) {
					echo './add-institucion';
				} 
				else {
					echo './updateInstituto';
				}
				?>" 
                method="POST">
                <label>INSTITUCIÓN:</label>
                <br><br>
                <label>Nombre:</label>
                <input type="hidden" name="id" value="<?= $instituto->getID(); ?>">
                <input type="text" name="nomInst" id="nombre" value="<?= $instituto->getNomInst(); ?>"/>
                <br>
                <label>Dirección:</label>
                <input type="text" name="dirInst" id="direccion" value="<?= $instituto->getDirInst(); ?>"/>
                <br>
                <label>Teléfono:</label>
                <input type="text" name="telInst" id="telefono" value="<?= $instituto->getTelInst(); ?>"/>
                <br>
                <label>Código Postal:</label>
                <input type="text" name="cp" id="cp" value="<?= $instituto->getCP(); ?>"/>
        </div>
        <div id="rectangle2">
                <label>REPRESENTANTE:</label>
                <br><br>
                <label>Nombre Completo:</label>
                <input type="text" name="nomRep" id="nombre" value="<?= $instituto->getNomRep(); ?>"/>
                <br>
                <label>Cargo:</label>
                <input type="text" name="cargo" id="Cargo" value="<?= $instituto->getCargo(); ?>"/>
                <br>
                <label>Tipo de Institución:</label>
                <input type="text" name="tipoInst" id="TipoInst" value="<?= $instituto->getTipoInst(); ?>"/>
                <br>
                <label>Ident. Tributaria:</label>
                <input type="text" name="ideTrib" id="IdTrib" value="<?= $instituto->getIdeTrib(); ?>"/>
        </div>
                <input id="enviar_formulario" type="submit" value="Enviar Datos"/>
            </form>
    </body>
</html>