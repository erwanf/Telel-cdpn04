<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 11/06/2015
 * Time: 11:50
 */

namespace Model;


class ChaineDTO {
    /********************************Attributs********************************/
    private $chaine_id;
    private $nom_chaine;
    private $adresse;
    private $code_postal;
    private $ville;
    private $telephone;
    private $chaine_cablee;
    private $fax;

    /******************************methode************************************/

    public function hydrate ($donnees){
        foreach($donnees as $key=>$value){
            $methode = 'set'.ucfirst($key);
            if (method_exists($this,$methode)){
                $this->$methode($value);
            }
        }
    }

    /*******************************getter and setter************************/
    /**
     * @return mixed
     */
    public function getChaine_id()
    {
        return $this->chaine_id;
    }

    /**
     * @param mixed $chaine_id
     */
    public function setChaine_id($chaine_id)
    {
        $this->chaine_id = $chaine_id;
    }

    /**
     * @return mixed
     */
    public function getNom_chaine()
    {
        return $this->nom_chaine;
    }

    /**
     * @param mixed $nom_chaine
     */
    public function setNom_chaine($nom_chaine)
    {
        $this->nom_chaine = $nom_chaine;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCode_postal()
    {
        return $this->code_postal;
    }

    /**
     * @param mixed $code_postal
     */
    public function setCode_postal($code_postal)
    {
        $this->code_postal = $code_postal;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getChaine_cablee()
    {
        return $this->chaine_cablee;
    }

    /**
     * @param mixed $chaine_cablee
     */
    public function setChaine_cablee($chaine_cablee)
    {
        $this->chaine_cablee = $chaine_cablee;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }





}