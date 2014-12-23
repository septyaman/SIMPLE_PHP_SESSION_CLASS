<?php 

 /* 
     SIMPLE SESSION PHP CLASS
 */
 
 class APP_Session {


	function __construct() {
		session_start();
	}
	
	 // Check the session if exist and !empty
	 // Return value if exist, or return false
	 
	function is_set($variabel_cek) {
	    if(isset($_SESSION[$variabel_cek]) && !empty($_SESSION[$variabel_cek])){return $_SESSION[$variabel_cek];}
		else {return false;}
	}
	
	 // Set The session value
	 
	function set($variable, $value) {
		$_SESSION[$variable] = $value;
	}
}