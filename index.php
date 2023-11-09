<?php

require_once __DIR__. "/lib/MysqliDb.php";
require_once __DIR__. "/config/config.php";
require_once __DIR__ ."/app/controllers/UserController.php";
require_once __DIR__ ."/app/models/User.php";

//$action =isset($_GET['action'])? $_GET['action']: 'index';


$config=require "config/config.php";

$db=new MysqliDb($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
 
$requset=$_SERVER['REQUEST_URI'];
 
define('BASE_PATH','/MVC/');
 //var_dump($requset);
 
$model=new Usermodel($db);
$controller=new UserController($model);

switch ($requset)
{
    case BASE_PATH:
        $controller->index();
        break;
        case BASE_PATH.'add':
        $controller->addUser() ;
            break;  

            case BASE_PATH . 'update?id=' . $_GET['id']:
                $controller->updateUser($_GET['id']);
                break;
            case BASE_PATH . 'edit?id=' . $_GET['id']:
                // var_dump($_GET['id']);
                $controller->editUser($_GET['id']);
                break;
                    
                    case BASE_PATH.'delete?id='.$_GET['id']:
                        $controller->deleteUser($_GET['id']) ;
                            break;

}



/* if(method_exists($controller,$action))
{

    $controller->$action();

}
else
{

    echo "action not found";
} */

?>