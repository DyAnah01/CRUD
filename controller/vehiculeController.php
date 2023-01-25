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
        VALUES (NULL, :id_agence, :titre_vehicule, :marque_vehicule, :modele_vehicule, :description_vehicule, :photo_vehicule, :prix_journalier)");

        $request->bindParam(':id_agence',$values['id_agence']);
        $request->bindParam(':titre_vehicule',$values['titre_vehicule']);
        $request->bindParam(':marque_vehicule',$values['marque_vehicule']);
        $request->bindParam(':modele_vehicule',$values['modele_vehicule']);
        $request->bindParam(':description_vehicule',$values['description_vehicule']);
        $request->bindParam(':photo_vehicule',$values['photo_vehicule']);
        $request->bindParam(':prix_journalier',$values['prix_journalier']);

        $request->execute();
        header('Location: Vehicule.php');
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
        $request = $this->pdo()->prepare("SELECT id_vehicule, ville, titre_vehicule, marque_vehicule, modele_vehicule, description_vehicule, photo_vehicule, prix_journalier FROM vehicule INNER JOIN agences ON agences.id_agence = vehicule.id_agence; ");
        $request->execute();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteVehicule($id){

        //DELETE => DELETE
        $request = $this->pdo()->prepare("DELETE FROM vehicule WHERE id_vehicule = ?");
        $request->execute([$id]);

        header('Location: Vehicule.php');
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
    // var_dump($_POST);
}

$arrayAllVehiculeShow = $vehicule1->showVehicule();

$actions = isset($_GET['actions']) ? $_GET['actions'] : null;

if($actions == 'supprimer'){
    $vehicule1->deleteVehicule($_GET['id']);
} 