<?php
class Utilisateur {

    protected const TEST ='TATA';
    //the user name
    private string $nom;
    //User code
    protected string $code;

    /**
     * Utilisateur constructor.
     * @param string $nom
     */
    public  function __construct(string $nom) {
        $this->setNom($nom);
    }

    /** return the user's name
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /** set the user's name
     * @param string $nom the user name
     */
    public function setNom(string $nom): Utilisateur {
        $this->nom =$nom;
        return $this;
    }

    /** (uniqid = renvoie un string avec un préfixe si précissé)
     * generate a user code random
     */
    public function generateCode(): string {
        $this->code = uniqid('utilisateur-') . "-" .time();
        return $this->code;
    }
}