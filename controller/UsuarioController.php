<?php

require_once 'auth/Auth.php';
require_once 'model/dbConnection/dao/UsuarioDAO.php';

class UsuarioController {

	private $auth;
	private $usuarioDao;

	public function __construct() {
		$this->auth = new Auth();
		$this->usuarioDao = new UsuarioDAO();
	}

	public function authUsuario(
		$nomUs, 
		$passUs
	) {
		if (empty($nomUs) || empty($passUs)) {
			echo"<script type='text/javascript'>
    			alert('All fields must be filled');
    			window.location.href='/PAPANTLADAE8/';
    			</script>";
		}

		$usser = $this->usuarioDao->findNomus($nomUs);

		if(empty($usser)) {
			echo"<script type='text/javascript'>
    			alert('Email or password are incorrect');
    			window.location.href='/PAPANTLADAE8/';
    			</script>";
		}
		else if($usser->getPassword() == $passUs) {
			session_start();
			$_SESSION['usser'] = $usser->getName();
			header ('Location: /PAPANTLADAE8/views/usser/bienvenida.php');
		}
		else {
			echo"<script type='text/javascript'>
    			alert('Email or password are incorrect');
    			window.location.href='/PAPANTLADAE8';
    			</script>";
		}

	}

	public function logout(){
		@session_start();
        unset($_SESSION['usser']);
        header("Location: /PAPANTLADAE8/");
	}

	public function createAccount(
		$nomUs,
		$passUs
	) {
		if(empty($nomUs) || empty($passUs)){
			echo"<script type='text/javascript'>
    			alert('All fields must be filled');
    			window.location.href='views/registro_usuario.php;
    			</script>";
		}

		$usser = new Usuario (
			$nomUs,
			$passUs
		);
		$this->usuarioDao->create($usser);
		echo"<script type='text/javascript'>
			alert('Now you\'re sign in');
    		window.location.href='/PAPANTLADAE8/';
    		</script>";
	}

	public function showLogin() {
		$this->auth->afterLogin();
		require_once 'views/login.php';
	}

	public function showRegister() {
		require_once 'views/registro_usuario.php';
	}
}