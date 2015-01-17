<?php 

 /* SIMPLE SESSION PHP CLASS */
 
 class APP_Session {
 
     private $is_login=false;
	 public $user_id;
	 public $user_level;
	 public $message=false;

	function __construct() {
		session_start();
		$this->auth_user();
	}
	
	//Public check
	function $this->is_user_login(){
	  return ( $this->is_login ? true : false );
	}
	
	//Private Check
	private function cek_user(){
	
      if( $user = is_set('user_id') && $level = is_set('user_level') ) {
	     $this->user_id = $user;
		 $this->user_level = $level;
		 $this->is_login=true;
	  }
	  else { $this->is_login=false; }
	  
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