<?php ini_set("display_erreors", 1);
class Vehicule
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

    public function addveVehicule($values){
        // CREATE => INSERT INTO
        $request = $this->pdo()->prepare("INSERT INTO vehicule VALUES (NULL, :titre, :marque, :modele, :description, :photo, :prix INNER JOIN ville ON agences.id_agence = vehicule.id_agence)");
        
        

    }//Fin function 

    public function showVehicule(){
        //READ => SELECT

    }

    public function deleteVehicule(){
        //DELETE => DELETE

    }

    public function detailVehicule(){
        //READ but just one (more information about one vehicule) => SELECT

    }

    public function updateVehicule(){
        //UPDATE

    }




} //Fin class Vehicule