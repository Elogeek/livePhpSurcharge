<?php
class Admin extends  Utilisateur {

    protected const TEST = 'YOYO';

    private array $bannedUsers = [];
    protected string $code;

    public function generateCode(): string
    {
        return str_replace('utilisateur', 'admin', parent::generateCode());
        //méthode 1 en plus simple

        /** méthode 2
         * $this->code = uniqid('admin-') . "-" . time();
         * return $this->code;
         **/
    }

    public function display() {
        //fera la même chose (sur la classe enft,Admin)
        echo "<p>" . self::TEST . "</p>";
        echo "<p>" . Admin::TEST . "</p>";

        //sur la classe parent
        echo "<p>" . parent::TEST . "</p>";
        echo "<p>" . Utilisateur::TEST . "</p>";
    }
}