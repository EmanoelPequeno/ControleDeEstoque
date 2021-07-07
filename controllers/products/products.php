<?php
    // Incluindo os arquivos necessários
	include_once "../../models/class/Connect.class.php";
	include_once "../../models/class/Manager.class.php";
	include_once "../../models/config.php";

    $manager = new Manager;

    switch($_POST['action']){
        case 'add' :
            unset($_POST['action']);
            $manager->insert_common("products", $_POST, null);

            header("location:".$project_index."admin.php?op=manager_product");
        break;

        case 'edit' :
            unset($_POST['action']);

            $manager->update_common("products", $_POST, ['id_product'=>$_POST['id_product']], null);

            header("location:".$project_index."admin.php?op=manager_product");
        break;

        case 'delete' :
            $manager->delete_common("products", ['id_product'=>$_POST['id_product']], null);
            header("location:".$project_index."admin.php?op=manager_product");
        break;

        /*case 'register' :

            $verification = $manager->select_common("users", null,['user_email'=>$_POST['user_email']],null);
            if($verification == ""){
                unset($_POST['action']);
                $_POST['user_password'] = sha1($_POST['user_password']);
                $manager->insert_common("users", $_POST, null);
                header("location:".$project_index."index.php?=registered_sucessfully");
            }else {
                header("location:".$project_index."register.php?=user_already_exists");
            }
            break;*/

    }


?>