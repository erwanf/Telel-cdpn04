<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 11/06/2015
 * Time: 09:55
 */

namespace View;


class View {

    private $folder;

    public function __construct($nameFolder,$nameFile){
        $this->folder = "./View/".$nameFolder."/".$nameFile."View.php";
    }

    private function generateFile($view, $data){
        if(file_exists($view)){
            if(isset($data)){
                extract($data);
                ob_start();
                require($view);
                ob_get_clean();
            }
        }
        else{
            throw new \Exception(
                "le fichier ".$view." est introuvable, pas de chance!!!"
            );
            die();
        }
    }

    public function create($data){
        $content = $this->generateFile($this->folder,$data);
        echo"plopp";
        $viewFinish = $this->generateFile('./View/layout.php', array('content'=>$content));
        return $viewFinish;
    }

}