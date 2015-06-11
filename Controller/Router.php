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
        if(isset($_GET)&&!empty($_GET)){

        }
        else{
            $this->defaultController->indexAction();
        }
    }

}