<?php

require_once 'auth/Auth.php';
require_once 'model/dbConnection/dao/InstitucionDAO.php';

class InstitucionController {

	private $auth;
	private $institucionDao;
	private $institucion;

	public function __construct() {
		$this->auth = new Auth();
		$this->auth->needLogin();
		$this->institucionDao = new institucionDao();
	}

	/*public function showAll() {
		$this->caninos = $this->institucionDao->all();
		$search = false; 
		require_once 'views/usser/consultaCallejero.php';
	}

	public function searchCallejero($id) {
		$this->caninos = $this->institucionDao->find($id);
		$search = true;
		require_once 'views/usser/consultaCallejero.php';
	}

	public function showRegistrarCallejero() {
		$canino = new Callejero(null, null, null, null); 
		require_once '/PAPANTLADAE8/views/usser/addCallejero.php';
	}*/

	public function addNewInstitucion(
        $nomInst,
        $dirInst,
        $telInst,
        $cp,
        $nomRep,
        $cargo,
        $tipoInst,
        $ideTrib
	) {
		if(empty($nomInst) || 
		   empty($dirInst) || 
           empty($telInst) ||
           empty($cp) ||
           empty($nomRep) ||
           empty($cargo) ||
           empty($tipoInst) ||
           empty($ideTrib) 
		) {
			echo"<script type='text/javascript'>
    			alert('Todos los campos deben de ser llenados');
    			window.location.href='./addInstitucion.php';
    			</script>";
		}

		$institucion = new Institucion(
			$nomInst,
            $dirInst,
            $telInst,
            $cp,
            $nomRep,
            $cargo,
            $tipoInst,
            $ideTrib
		);
		$this->institucionDao->create($institucion);
		echo"<script type='text/javascript'>
    		alert('La institucion ha sido registrada correctamente');
    		window.location.href='./addInstitucion.php';
    		</script>";
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
		$this->caninos = $this->institucionDao->find($id);
		$canino = $this->canino[0];
		$this->institucionDao->delete($canino);
		echo"<script type='text/javascript'>
    		alert('The videogame has been deleted');
    		window.location.href='./adoptarCallejero';
    		</script>";	
	}*/
}