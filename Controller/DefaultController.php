<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 11/06/2015
 * Time: 09:51
 */

namespace Controller;


use View\View;

class DefaultController {

    public function indexAction(){
        $view = new View("default", "default");
        echo $view->create(array('default'=>null));

    }

}