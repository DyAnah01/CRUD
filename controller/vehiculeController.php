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

    public function addVehicule($values){
        // CREATE => INSERT INTO
        $request = $this->pdo()->prepare("INSERT INTO vehicule 
        VALUES (NULL, :id_agence, :titre, :marque, :modele, :description, :photo, :prix_journalier)");
        // ("SELECT ville FROM agences INNER JOIN vehicule ON agences.id_agence = vehicule.id_agence; ");
        $request->bindParam(':id_agence',$values['id_agence']);
        $request->bindParam(':titre',$values['titre']);
        $request->bindParam(':marque',$values['marque']);
        $request->bindParam(':modele',$values['modele']);
        $request->bindParam(':description',$values['description']);
        $request->bindParam(':photo',$values['photo']);
        $request->bindParam(':prix_journalier',$values['prix_journalier']);
         
        $request->execute();
    }//Fin function addVehicule (Create)


    //Récupérer les agences:
    public function getAllAgence(){
        $request = $this->pdo()->prepare("SELECT * FROM agences" );
        $request->execute();
        ///on fetchAll , on stock dans result
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        //on return result
    }

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

// create object vehicule1
$vehicule1 = new Vehicule;

$arrayAgence1 = $vehicule1->getAllAgence();
// var_dump($arrayAgence1);

// appeler la fonction addVehicule:
if(isset($_POST['valider_vehicule'])){
    $vehicule1->addVehicule($_POST);
    var_dump($_POST);
}