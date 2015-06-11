<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 11/06/2015
 * Time: 11:50
 */

namespace Model;


class ChaineDAO extends Connexion {

    public function getAllChaine(){
        $sql = 'SELECT * FROM chaine;';
    }
}