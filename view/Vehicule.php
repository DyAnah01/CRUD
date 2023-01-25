<?php require_once('../controller/vehiculeController.php');?>
<?php require_once('./header.php');?>

<h2>GESTION DES VEHICULES</h2>

    <!--ADD (INSERT INTO)-->
    <form method="post" class="mt-2 mb-5">

        <label for=""></label>
        <input type="texte" id="" name="titre" placeholder="Titre de l'annonce" class="mb-2">

        <label for="">Agence</label>    
        <select name="id_agence" id="">
          <?php foreach($arrayAgence1 as $value) :?> 
            <option value="<?=$value['id_agence']?>"><?=$value['ville']?></option>
          <?php endforeach ; ?>    
        </select>
        

        <label for="">Marque</label>
        <input type="text" name="marque" placeholder="Marque" class="mb-2">

        <label for="">Model</label>
        <input type="text" name="modele" placeholder="Model" class="mb-2">

        <label for="">Prix</label>
        <input type="number" name="prix_journalier" placeholder="Prix journalier" class="mb-2">

        <label for="">Photo</label>
        <input type="text" name="photo" placeholder="Ajouter l'url de l'image" class="mb-2">          

        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="10" placeholder="Description" class="mb-2"></textarea>     

      <button name="valider_vehicule" class="mb-2">Enregistrer</button>
    </form>
    <!--FIN ADD (INSERT INTO)-->








<?php require_once('./footer.php');?>