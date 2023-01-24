<?php require_once('../controller/vehiculeController.php');?>
<?php require_once('./header.php');?>

<h2>GESTION DES VEHICULES</h2>

    <!--ADD (INSERT INTO)-->
    <form method="post" class="mt-2 mb-5">

        <label for="">Titre</label>
        <input type="text" id="" name="" placeholder="Vehicule" class="mb-2">

        <label for="">Description</label>
        <textarea name="" id="" cols="30" rows="10" placeholder="Description" class="mb-2"></textarea>     

        <label for="">Photo</label>
        <input type="text" name="" placeholder="Ajouter l'url de l'image" class="mb-2">      

        <label for="">Adresse</label>
        <input type="text" name="" placeholder="Adresse" class="mb-2">

        <label for="">Ville</label>
        <input type="text" name="" placeholder="Ville" class="mb-2">

      <button name="" class="mb-2">Enregistrer</button>
    </form>
    <!--FIN ADD (INSERT INTO)-->




<?php require_once('./footer.php');?>