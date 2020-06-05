<?php

require_once 'controller/UsuarioController.php';

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

	case '/views/logout':
		$controller = new UsuarioController();
		$controller->logout();
		break;

	/*case '/usser/games-list':
		$controller = new GamesController();
		$controller->showAll();
		break;

	case '/usser/register-game':
		$controller = new GamesController();
		$controller->showRegisterGame();
		break;

	case '/usser/add-game':
		$controller = new GamesController();
		$controller->addNewGame(
			form('title'),
			form('genders'),
			form('rating'),
			form('platform'),
			form('price')
		);
		break;

	case '/usser/edit-game':
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
		break;

	case '/usser/delete-game':
		$controller = new GamesController();
		$controller->deleteGame(form('id'));
		break;

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