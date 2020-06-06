<?php

require_once 'controller/UsuarioController.php';
require_once 'controller/CallejeroController.php';
require_once 'controller/MascotaController.php';
require_once 'controller/InstitucionController.php';

if(isset($_SERVER['PATH_INFO'])) {
	$url = $_SERVER['PATH_INFO'];
}
else {
	$url = '/';
}

switch ($url) {
	case '/':
	case '/login':
		$controller = new UsuarioController();
		$controller->showLogin();
		break;
	
	case '/login/authenticate':
		$controller = new UsuarioController();
		$controller->authUsuario(
			form('nomUs'),
			form('passUs')
		);
		break;

	case '/regitro_usuario':
		$controller = new UsuarioController();
		$controller->showRegister();
		break;

	case '/views/registro_usuario/create-account':
		$controller = new UsuarioController();
		$controller->createAccount(
			form('nomUs'),
			form('passUs')
		);
		break;

	case '/views/usser/logout':
		$controller = new UsuarioController();
		$controller->logout();
		break;

	/*case '/usser/games-list':
		$controller = new GamesController();
		$controller->showAll();
		break;

	case '/views/usser/consultaCallejero':
		$controller = new CallejeroController();
		$controller->showRegistrarCallejero();
		break;*/

	case '/views/usser/consultaCallejero':
		$controller = new CallejeroController();
		$controller->showAll();
		break;	

	case '/views/usser/consultaCallejero2':
		$controller = new CallejeroController();
		$controller->showAll2();
		break;	

	/*case '/views/usser/consultaCallejero2':
		$controller = new CallejeroController();
		$controller->showCallejeros2();
		break;*/

	case '/views/usser/add-canino':
		$controller = new CallejeroController();
		$controller->addNewCallejero(
			form('calleCan'),
			form('colCan'),
			form('rasCan'),
			form('condCan')
		);
		break;

	case '/views/usser/add-mascota':
		$controller = new MascotaController();
		$controller->addNewMascota(
			form('nomMas'),
			form('raza'),
			form('color'),
			form('edad'),
			form('tamano'),
			form('esterilizacion'),
			form('condicion'),
			form('rasgo'),
			form('dueno'),
			form('direccion'),
			form('telefono')
		);
		break;

	case '/views/usser/consultaMascota':
		$controller = new MascotaController();
		$controller->showMascotas();
		break;	
	
	case '/views/usser/add-institucion':
		$controller = new InstitucionController();
		$controller->addNewInstitucion(
			form('nomInst'),
			form('dirInst'),
			form('telInst'),
			form('cp'),
			form('nomRep'),
			form('cargo'),
			form('tipoInst'),
			form('ideTrib')
		);
		break;

	case '/views/usser/consultaInstitucion':
		$controller = new InstitucionController();
		$controller->showInstituciones();
		break;
		
	/*case '/usser/edit-game':
		$controller = new GamesController();
		$controller->showModifyGame(form('id'));
		break;

	case '/usser/update-game':
		$controller = new GamesController();
		$controller->updateGame(
			form('id'),
			form('title'),
			form('genders'),
			form('rating'),
			form('platform'),
			form('price')
		);
		break;

	case '/usser/search-game':
		$controller = new GamesController();
		$controller->searchGame(form('id'));
		break;*/

	case '/views/usser/adoptarCallejero':
		$controller = new CallejeroController();
		$controller->deleteCallejero(form('id'));
		break;

	
/*
	case '/usser/remove-game':
		$controller = new GamesController();
    

	default:
		error(404, "Not Found");
		break;*/
}

function form($key) {
    if(!isset($_REQUEST[$key])) {
        return null;
    }
    return $_REQUEST[$key];
}

/*function error($code, $message, $description='') {
    http_response_code($code);
    require_once 'views/error.php';
}*/