<?php 

class Session {
	
	private static $utente = null;
	
	public static $lifetime = 600;
	public static $regenerate_id = false;
	
	// Abilita il salvataggio delle sessioni sul db
	public static function dbSession() {
		$handler = new DBSessionHandler();
		session_set_save_handler ($handler, true);
	}
	
	// Restituisce l'utente corrente, prendendolo dai
	// dati nella sessione
	public static function getUtente() {
		// Se l'utente è già stato preso dal db
		// restituiscilo
		if(Session::$utente != null)
			return Session::$utente;
		// Se l'utente non è stato preso dal db
		// ma è loggato, allora prendilo dal database
		if(isset($_SESSION['utente'])) {
			$FUtente = new FUtente();
			$user = $FUtente->getObject($_SESSION['utente']);
			Session::$utente = $user;
			return $user;
		}
		return null;
	}
	
	// Avvia la sessione, setta il tempo massimo e rigenera
	// il session id se richiesto.
	public static function generate() {
		// Session cookie lifetime
		session_set_cookie_params(self::$lifetime);
		session_start();
		// Rigenerare il session id è utile in 
		// caso di attacchi dove il session id 
		// viene rubato.
		if(Session::$regenerate_id)
			session_regenerate_id();
		
	}

	// Distruzione della sessione 
	public static function destroy() {
		
		session_destroy();
	}
	
	
}
