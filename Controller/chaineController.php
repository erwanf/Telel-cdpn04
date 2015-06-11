<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 11/06/2015
 * Time: 11:05
 */

namespace Controller;


use Model\ChaineDAO;
use Model\ChaineDTO;
use View\View;

class ChaineController {
    private $chaineDAO;

    function __construct()
    {
        $this->chaineDAO = new ChaineDAO();
    }


    public function allChaineAction(){
        $chaines = $this->chaineDAO->getAllChaine();
        $view = new View('chaine','allChaine');
        echo $view->create(array('chaines'=>$chaines));
    }

    public function insertAction(){
        $chaineDTO = new ChaineDTO();
        $chaineDTO->hydrate($_POST);
        $this->chaineDAO->insert($chaineDTO);
        header("Location: index.php?controller=chaine&action=allChaine");
    }


}