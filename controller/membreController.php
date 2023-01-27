<?php ini_set("display_erreors", 1);
class Membre
{
    private $sql;

    const LOCALHOST = 'localhost';
    const DB_NAME = 'veville';
    const USER = 'root';
    const PASSWORD = '';

    public function pdo() //function connection with database
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
            } 
            catch (Exception $error) 
            {
                die("Probleme connexion : " . $error->getMessage());
            }     
        }
        return $this->sql; // return the object SQL (pdo)

    } //fin function connection with database

    public function addMembre($values){
        //prepare request
        $request = $this->pdo()->prepare("INSERT INTO membre VALUES (NULL, :pseudo, :mdp, :nom, :prenom, :email, :civilite, :statut, :date_enregistrement)");
        // parametrer les données
        $request->bindParam(':pseudo',$values['pseudo']);
        $request->bindParam(':mdp',$values['mdp']);
        $request->bindParam(':nom',$values['nom']);
        $request->bindParam(':prenom',$values['prenom']);
        $request->bindParam(':email',$values['email']);
        $request->bindParam(':civilite',$values['civilite']);
        $request->bindParam(':statut',$values['statut']);
        $request->bindParam(':date_enregistrement',$values['date_enregistrement']);
        // executer la requete
        $request->execute();




    }

    // public function s





}