<?php 

class Session {
	
	private static $utente = null;
	
	public static $lifetime = 600;
	public static $regenerate_id = false;
	
	public static function dbSession() {
		$handler = new DBSessionHandler();
		session_set_save_handler ($handler, true);
	}
	
	public static function getUtente() {
		
		if(Session::$utente != null)
			return Session::$utente;
		
		if(isset($_SESSION['utente'])) {
			$FUtente = new FUtente();
			$user = $FUtente->getObject($_SESSION['utente']);
			Session::$utente = $user;
			return $user;
		}
		return null;
	}
	
	public static function generate() {
		session_set_cookie_params(self::$lifetime);
		session_start();
		if(Session::$regenerate_id)
			session_regenerate_id();
		
	}
	
	public static function destroy() {
		
		session_destroy();
	}
	
	
}
