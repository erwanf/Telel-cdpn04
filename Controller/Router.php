<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 11/06/2015
 * Time: 09:44
 */

namespace Controller;


class Router {

    private $defaultController;

    public function __construct(){
        $this->defaultController = new DefaultController;
    }

    public function routerRequest (){
        if(isset($_GET['controller']) && isset($_GET['action'])){
            $path = _CONTROLLER_PATH_.ucfirst($_GET['controller']).'Controller.php';
//            var_dump($path);
            $controller='\\Controller\\'.ucfirst($_GET['controller']).'Controller';
//            var_dump($controller);
            $action = $_GET['action'].'Action';
            if (file_exists($path)){
                $myController = new $controller;
//                var_dump($myController);
                if (method_exists($myController,$action)){
                    $myController->$action();
                }
                else{
                    $this->defaultController->indexAction();
                    echo 'mausaise action';
                }
            }
            else{
                $this->defaultController->indexAction();
                echo 'mauvais Controller';
            }
        }
        else{
            $this->defaultController->indexAction();
            echo "rien n'est setté";
        }
    }

}