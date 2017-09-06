<?php
	define("DATABASE_HOST", "localhost");
	define("DATABASE_USERNAME", "root");
	define("DATABASE_PASSWORD", "root");
	define("DATABASE_NAME", "my_db");
	
	//site root
	define("SITE_ROOT", "/test/");
	
	mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD) 
		or handle_error();
	
	
	function handle_error(){
		header("Location: " . SITE_ROOT . "error.html");
		exit ();
	}
	
		
	define("DEBUG_MODE", true);
	function debug_print($message) {
		if (DEBUG_MODE) {
			echo $message;
		}
	}
	
	
?>