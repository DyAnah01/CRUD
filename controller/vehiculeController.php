<?php ini_set("display_erreors", 1);
class Vehicule
{
    private $sql;

    const LOCALHOST = 'localhost';
    const DB_NAME = 'veville';
    const USER = 'root';
    const PASSWORD = '';

    public function pdo() //fonction connection avec la base de donnée
    {
        if (!$this->sql)
        {
            try {
                $this->sql = new PDO(
                    "mysql:host=" . SELF::LOCALHOST . ";dbname=" . SELF::DB_NAME,
                    SELF::USER,
                    SELF::PASSWORD,
                    array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                    )
                );
            } catch (Exception $error) {
                die("Probleme connexion : " . $error->getMessage());
            }     
        }
        return $this->sql; //on retourne l'objet SQL (pdo)

    } //fin fonction connection avec la base de donnée


}