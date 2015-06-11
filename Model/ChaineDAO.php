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
        $sql = 'SELECT * FROM chaine ORDER BY chaine_id;';
        $result = $this->executeRequest($sql);

        $chaines = array();
        while($row = $result->fetch()){
            $dto = new ChaineDTO();
            $dto->hydrate($row);
            $chaines[]=$dto;
        }
        return $chaines;
    }

    public function insert(chaineDTO $dto){
        $sql = 'INSERT INTO chaine( nom_chaine, adresse, code_postal, ville,
            telephone, chaine_cablee, fax) VALUES  (?,?,?,?,?,?,?);';
        $param = array(
            $dto->getNom_chaine(),
            $dto->getAdresse(),
            $dto->getCode_postal(),
            $dto->getVille(),
            $dto->getTelephone(),
            $dto->getChaine_cablee(),
            $dto->getFax()
        );
        $this->executeRequest($sql,$param);
    }
}