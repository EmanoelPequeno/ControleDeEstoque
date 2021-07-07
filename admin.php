<?php

	include_once 'models/config.php';
	include_once 'controllers/validate.php';
	
	session_start();
	if(!isset($_SESSION[md5("user_data")])){
        header("location: index.php?error=session_not_found");
    }

	function page_content(){
		// Chamando o validador de opções
		validate_options();
	}

	include_once 'views/template.html';
	//include_once 'views/welcome_page.html';

?>