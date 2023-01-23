<?php
ini_set("display_errors", 1); // Permet d'afficher tous les messages d'erreurs.
class Agences
{
    private $sql;


    const LOCALHOST = 'localhost';
    const DB_NAME = 'veville';
    const USER = 'root';
    const PASSWORD = '';

    public function pdo()
    {
        /**
         * New PDO = 1 (serveur + base de données ), 2 (pseudo), 3 (mdp), 4 (options).
         * Try et Catch permettent d'avoir 2 blocs d'instructions distinct.
         * Exception est une classe prédéfinie.
         * Une exception est une erreur que l'on peut attraper grâce aux mots-clé try et catch.
         * Die a pour but de stopper l'exécution de votre script et d'afficher le message que vous aurez éventuellement spécifié.
         * Die est très courant pour gérer les erreurs de connexion aux bases de données ou les erreurs de chemin lors des inclusions.
         */
        if (!$this->sql) {
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

    }

    public function add($values)
    {
        //create Agence
        // var_dump($this->pdo());
        $req = $this->pdo()->prepare("INSERT INTO agences VALUES (NULL, :titre, :adresse, :ville, :cp, :description, :photo)");
        $req->bindParam(':titre', $values['titre']);
        $req->bindParam(':adresse', $values['adresse']);
        $req->bindParam(':ville', $values['ville']);
        $req->bindParam(':cp', $values['cp']);
        $req->bindParam(':description', $values['description']);
        $req->bindParam(':photo', $values['photo']);
        $req->execute();
        header('Location: Agence.php');
    }

    public function show()
    {
        //read Agence  
        $req = $this->pdo()->prepare('SELECT * FROM agences'); //preparer la requete
        $req->execute(); //executer la requete
        $result = $req->fetchAll(PDO::FETCH_ASSOC); //recuperer le tableau
        return $result;
    } 

    public function delete($id)
    {
        //delete
        // var_dump($this->pdo());
        $req = $this->pdo()->prepare("DELETE FROM agences WHERE id_agence = ? ");
        $req->execute([$id]);
        header('Location: Agence.php');
    }

    public function detail($id)
    {
        // show details
        $req = $this->pdo()->prepare("SELECT * FROM agences WHERE id_agence = ? ");
        $req->execute([$id]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($titre,$adresse,$ville,$cp,$description,$photo,$id_agence)
    {
        //update
        $titre = $_POST['titre'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $cp = $_POST['cp'];
        $description = $_POST['description'];
        $photo = $_POST['photo'];
        $id_agence = $_POST['id_agence'];

        $req = $this->pdo()->prepare("
        UPDATE agences 
        SET 
            titre = :titre, 
            adresse = :adresse, 
            ville = :ville, 
            cp = :cp,
            description = :description, 
            photo = :photo 
        WHERE id_agence = :id
        ");

        $req->bindParam(':titre', $titre);
        $req->bindParam(':adresse', $adresse);
        $req->bindParam(':ville', $ville);
        $req->bindParam(':cp', $cp);
        $req->bindParam(':description', $description);
        $req->bindParam(':photo', $photo);
        $req->bindParam(':id', $id_agence);

        $req->execute();

        header('Location: Agence.php');
    }

} //fin class

$agence = new Agences;
$arrayAgence = $agence->show();


if (isset($_POST['valider_agence'])) $agence->add($_POST);

//  par défaut , si variable action n'existe pas
$action = isset($_GET['action']) ? $_GET['action'] : null;

//appel méthode delete
if($action == 'supprimer') $agence->delete($_GET['id']);

//appel méthode Detail
if($action == 'detail') $arrayDetail = $agence->detail($_GET['id']);

//Appel méthode Update :
if($action == 'modifier') $arrayUp = $agence->detail($_GET['id']);
if (isset($_POST['validerUpdate'])) 
    {
        $agence->update($_POST['titre'],$_POST['adresse'],$_POST['ville'],$_POST['cp'],$_POST['description'],$_POST['photo'],$_POST['id_agence']);
    }




