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

    public function getOneAgence(){
        $request = $this->pdo()->prepare("SELECT * FROM agences WHERE" );
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

    public function detailVehicule($id){
        //READ but just one (more information about one vehicule) => SELECT
        $request = $this->pdo()->prepare("SELECT id_vehicule, ville, titre_vehicule, marque_vehicule, modele_vehicule, description_vehicule, photo_vehicule, prix_journalier FROM vehicule INNER JOIN agences ON agences.id_agence = vehicule.id_agence WHERE id_vehicule = ?;");
        $request->execute([$id]);
        $result = $request->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateVehicule($values)
    {
        //UPDATE
        // $id_agence = $values['id_agence'];
        // $titre_vehicule = $values['titre_vehicule'];
        // $marque_vehicule = $values['marque_vehicule'];
        // $modele_vehicule = $values['modele_vehicule'];
        // $description_vehicule = $values['description_vehicule'];
        // $photo_vehicule = $values['photo_vehicule'];
        // $prix_journalier = $values['prix_journalier'];
        // $id_vehicule = $values['id_vehicule'];

        $request = $this->pdo()->prepare("
        UPDATE vehicule 
        SET 
        id_agence = :id_agence,  
        titre_vehicule = :titre_vehicule, 
        marque_vehicule = :marque_vehicule, 
        modele_vehicule = :modele_vehicule, 
        description_vehicule = :description_vehicule, 
        photo_vehicule = :photo_vehicule, 
        prix_journalier = :prix_journalier 
        WHERE id_vehicule = :id_vehicule 
        ");
        $request->bindParam(':id_agence', $values['id_agence']);
        $request->bindParam(':titre_vehicule', $values['titre_vehicule']);
        $request->bindParam(':marque_vehicule', $values['marque_vehicule']);
        $request->bindParam(':modele_vehicule', $values['modele_vehicule']);
        $request->bindParam(':description_vehicule', $values['description_vehicule']);
        $request->bindParam(':photo_vehicule', $values['photo_vehicule']);
        $request->bindParam(':prix_journalier', $values['prix_journalier']);
        $request->bindParam(':id_vehicule', $values['id_vehicule']);


        print_r($values);

        $request->execute();
    }

} //Fin class Vehicule

// create object vehicule1
$vehicule1 = new Vehicule;

$arrayAgence1 = $vehicule1->getAllAgence();


// appeler la fonction addVehicule:
if(isset($_POST['valider_vehicule'])){
    $vehicule1->addVehicule($_POST);
}

$arrayAllVehiculeShow = $vehicule1->showVehicule();

// $actions = $_GET['actions'] if $_GET['actions'] is set
// Else $actions = null
$actions = isset($_GET['actions']) ? $_GET['actions'] : null;
 
//Call function delete
if($actions == 'supprimer'){
    $vehicule1->deleteVehicule($_GET['id']);
}

// call function detail
if($actions == 'details') $arrayOneVehiculeShow = $vehicule1->detailVehicule($_GET['id']);

/// Call update function
//1->recup value
if($actions == 'update') $arrayUpdateVehicule = $vehicule1->detailVehicule($_GET['id']);
//2->update

if(isset($_POST['validerUpdateVehicule']))
{
   $vehicule1->updateVehicule($_POST);
   header('Location: Vehicule.php');
}
 
if(isset($_POST['choice'])) echo "ERREUR";
