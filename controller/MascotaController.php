<?php

require_once 'auth/Auth.php';
require_once 'model/dbConnection/dao/MascotaDAO.php';

class MascotaController {

	private $auth;
	private $mascotaDao;
	private $mascota;

	public function __construct() {
		$this->auth = new Auth();
		$this->auth->needLogin();
		$this->mascotaDao = new MascotaDao();
	}

	/*public function showAll() {
		$this->caninos = $this->mascotaDao->all();
		$search = false; 
		require_once 'views/usser/consultaCallejero.php';
	}

	public function searchCallejero($id) {
		$this->caninos = $this->mascotaDao->find($id);
		$search = true;
		require_once 'views/usser/consultaCallejero.php';
	}

	public function showRegistrarCallejero() {
		$canino = new Callejero(null, null, null, null); 
		require_once '/PAPANTLADAE8/views/usser/addCallejero.php';
	}*/

	public function addNewMascota(
        $nomMas,
        $raza,
        $color,
        $edad,
        $tamano,
        $esterilizacion,
        $condicion,
        $rasgo,
        $dueno,
        $direccion,
        $telefono
	) {
		if(empty($nomMas) || 
		   empty($raza) || 
           empty($color) ||
           empty($edad) ||
           empty($tamano) ||
           empty($esterilizacion) ||
           empty($condicion) ||
           empty($rasgo) ||
           empty($dueno) ||
           empty($direccion) ||
		   empty($telefono)
		) {
			echo"<script type='text/javascript'>
    			alert('Todos los campos deben de ser llenados');
    			window.location.href='./addMascota.php';
    			</script>";
		}

		$mascota = new Mascota(
			$nomMas,
            $raza,
            $color,
            $edad,
            $tamano,
            $esterilizacion,
            $condicion,
            $rasgo,
            $dueno,
            $direccion,
            $telefono
		);
		$this->mascotaDao->create($mascota);
		echo"<script type='text/javascript'>
    		alert('La mascota ha sido registrada correctamente');
    		window.location.href='./addMascota.php';
    		</script>";
	}

	public function showMascotas(){
		$this->mascota = $this->mascotaDao->getMascotas();
		require_once 'views\usser\consultaMascota.php'	;
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
		$this->caninos = $this->mascotaDao->find($id);
		$canino = $this->canino[0];
		$this->mascotaDao->delete($canino);
		echo"<script type='text/javascript'>
    		alert('The videogame has been deleted');
    		window.location.href='./adoptarCallejero';
    		</script>";	
	}*/
}