<?php  


	function validate_options(){

		if(!isset($_GET['op'])){
			return false;
		}

		// Incluindo os arquivos necessários
		//include_once dirname(__DIR__).'/models/class/Connect.class.php';
		include_once "models/class/Connect.class.php";
		//include_once dirname(__DIR__).'/models/class/Manager.class.php';
		include_once "models/class/Manager.class.php";

		switch($_GET['op']){

			case 'home':
				include_once $GLOBALS['project_path'].'/views/welcome_page.html';
			break;

				//Usuários

			case 'manager_user':
				$manager = new Manager;
				$users = $manager->select_common("users", null,null,null);
				include_once $GLOBALS['project_path'].'/views/users/manager_user.html';
			break;

			case 'insert_user':
				include_once $GLOBALS['project_path'].'/views/users/insert_user.html';
			break;

			case 'edit_user':
				$manager = new Manager;
				$user = $manager->select_common("users", null,['id_user'=>$_GET['id']],null);		
				include_once $GLOBALS['project_path'].'/views/users/edit_user.html';
			break;

			case 'delete_user':
				$manager = new Manager;
				$user = $manager->select_common("users", null,['id_user'=>$_GET['id']],null);
				include_once $GLOBALS['project_path'].'/views/users/confirmation.html';
			break;
			
				//Produtos

			case 'manager_product':
				$manager = new Manager;
				$products = $manager->select_common("products", null,null,null);
				include_once $GLOBALS['project_path'].'/views/products/manager_product.html';
			break;

			case 'insert_product':
				include_once $GLOBALS['project_path'].'/views/products/insert_product.html';
			break;

			case 'edit_product':
				$manager = new Manager;
				$product = $manager->select_common("products", null,['id_product'=>$_GET['id']],null);		
				include_once $GLOBALS['project_path'].'/views/products/edit_product.html';
			break;

			case 'delete_product':
				$manager = new Manager;
				$product = $manager->select_common("products", null,['id_product'=>$_GET['id']],null);
				include_once $GLOBALS['project_path'].'/views/products/confirmation.html';
			break;
		}
	}
?>