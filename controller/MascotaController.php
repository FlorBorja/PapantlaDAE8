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

	public function showAll() {
		$this->mascota = $this->mascotaDao->all();
		$search = false; 
		require_once 'views/usser/consultaMascota.php';
	}

	public function showAll2() {
		$this->mascota = $this->mascotaDao->all();
		$search = false; 
		require_once 'views/usser/eliminarMascota.php';
	}

	public function showAll3() {
		$this->mascota = $this->mascotaDao->all();
		$search = false; 
		require_once 'views/usser/modificarMascota.php';
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

	public function showModifyMascota($id) {
		$this->mascotas = $this->mascotaDao->find($id);
		$mascota = $this->mascotas[0];
		require_once 'views/usser/actualizarMascota.php';
	}

	public function updateMascota(
		$id,
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
    			window.location.href='./actualizarMascota.php';
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
		$mascota->setID($id);

		$this->mascotaDao->update($mascota);
		echo"<script type='text/javascript'>
    		alert('Los datos de la mascota han sido modificados');
    		window.location.href='./bienvenida.php';
    		</script>";
	}

	public function deleteMascota($id) {
		$this->mascotas = $this->mascotaDao->find($id);
		$mascota = $this->mascotas[0];
		$this->mascotaDao->delete($mascota);
		echo"<script type='text/javascript'>
    		alert('La mascota ha muerto');
    		window.location.href='./bienvenida.php';
    		</script>";	
	}
}