<?php $GLOBALS['page_name'] = 'bienvenida'; ?>

<html>
    <head>
        <title>Puppy Rescue: Registro de Mascota</title>
        <link href="../assets/css/bienvenida.css" rel="stylesheet" type="text/css">
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
    </body>
</html>