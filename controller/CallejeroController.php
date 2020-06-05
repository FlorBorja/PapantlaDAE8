<?php

require_once 'auth/Auth.php';
require_once 'model/dbConnection/dao/CallejeroDAO.php';

class CallejeroController {

	private $auth;
	private $callejeroDao;
	private $caninos;

	public function __construct() {
		$this->auth = new Auth();
		$this->auth->needLogin();
		$this->callejeroDao = new CallejeroDAO();
	}

	/*public function showAll() {
		$this->caninos = $this->callejeroDao->all();
		$search = false; 
		require_once 'views/usser/consultaCallejero.php';
	}

	public function searchCallejero($id) {
		$this->caninos = $this->callejeroDao->find($id);
		$search = true;
		require_once 'views/usser/consultaCallejero.php';
	}

	public function showRegistrarCallejero() {
		$canino = new Callejero(null, null, null, null); 
		require_once '/PAPANTLADAE8/views/usser/addCallejero.php';
	}*/

	public function addNewCallejero(
		$calleCan,
		$colCan,
		$rasCan,
		$condCan
	) {
		if(empty($calleCan) || 
		   empty($colCan) || 
		   empty($rasCan) ||
		   empty($condCan)
		) {
			echo"<script type='text/javascript'>
    			alert('All fields must be filled');
    			window.location.href='./addCallejero.php';
    			</script>";
		}

		$canino = new Callejero(
			$calleCan,
			$colCan,
			$rasCan,
			$condCan
		);
		$this->callejeroDao->create($canino);
		echo"<script type='text/javascript'>
    		alert('El canino ha sido registrado');
    		window.location.href='./addCallejero.php';
    		</script>";
	}

	public function showCallejeros(){
		$this->caninos = $this->callejeroDao->getCaninos();
		require_once 'views\usser\consultaCallejero.php'	;
    }

	/*public function showModifyGame($id) {
		$this->games = $this->gamesDao->find($id);
		$game = $this->games[0];
		require_once 'views/usser/addGame.php';
	}*/

	/*public function updateGame(
		$id,
		$title,
		$genders,
		$rating,
		$platform,
		$price
	) {
		if(empty($title) || 
		   empty($genders) || 
		   $rating == "--Choose an option--" ||
		   empty($platform) ||
		   empty($price)
		) {
			echo"<script type='text/javascript'>
    			alert('All fields must be filled');
    			window.location.href='./edit-game';
    			</script>";
		}

		$game = new Game(
			$title,
			$genders,
			$rating,
			$platform,
			$price
		);
		$game->setID($id);

		$this->gamesDao->update($game);
		echo"<script type='text/javascript'>
    		alert('The videogame has been updated');
    		window.location.href='./games-list';
    		</script>";
	}

	public function deleteCallejero($id) {
		$this->caninos = $this->callejeroDao->find($id);
		$canino = $this->canino[0];
		$this->callejeroDao->delete($canino);
		echo"<script type='text/javascript'>
    		alert('The videogame has been deleted');
    		window.location.href='./adoptarCallejero';
    		</script>";	
	}*/
}