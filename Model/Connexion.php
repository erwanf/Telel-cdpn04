<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 11/06/2015
 * Time: 11:53
 */

namespace Model;

use \PDO;
class Connexion {
    private $bdd;

    private function getBdd(){
        $host =  '127.0.0.1';
        $port = '3306';
        $db = 'tele';
        $user = 'root';
        $pw ='';
        $this->bdd = new PDO(
            'mysql:dbname='.$db.
            ';host='.$host.
            ';port='.$port,
            $user,
            $pw,
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)
        );
        return $this->bdd;
    }


    public function executeRequest($sql,$param=null){
        if ($param==null){
            $result = $this->getBdd()->query($sql);
        }
        else{
            $result=$this->getBdd()->prepare($sql);
            $result->execute($param);
        }
        return $result;
    }

}