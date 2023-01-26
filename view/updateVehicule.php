<?php require_once('../controller/vehiculeController.php') ?>
<?php require_once('./header.php') ?>


<form method="post" class="mt-2 mb-5">

    

    <input type="texte" id="" name="titre_vehicule" value="<?= $arrayUpdateVehicule['titre_vehicule'] ;?>" placeholder="Titre de l'annonce" class="mb-2">

    <select name="id_agence" id="" class="mb-2">
            <option><?= $arrayUpdateVehicule['ville'] ?></option>
        <?php foreach ($arrayAgence1 as $value) : ?>
            <option value="<?= $value['id_agence'] ?>"><?= $value['ville'] ?></option>
        <?php endforeach; ?>
    </select>

    <input type="text" name="marque_vehicule" value="<?= $arrayUpdateVehicule['marque_vehicule'] ?>" placeholder="Marque" class="mb-2" >

    <input type="text" name="modele_vehicule" value="<?= $arrayUpdateVehicule['modele_vehicule'] ?>" placeholder="Model" class="mb-2">

    <input type="number" name="prix_journalier" value="<?= $arrayUpdateVehicule['prix_journalier'] ?>" placeholder="Prix journalier" class="mb-2">

    <input type="text" name="photo_vehicule" value="<?= $arrayUpdateVehicule['photo_vehicule'] ?>" placeholder="Ajouter l'url de l'image" class="mb-2">

    <textarea name="description_vehicule" id="" cols="30" rows="10" placeholder="Description" class="mb-2"><?= $arrayUpdateVehicule['description_vehicule'] ?></textarea>

    <input type="hidden" name="id_vehicule">

    <button name="validerUpdateVehicule" class="mb-2">Enregistrer</button>

</form>






<?php require_once('./footer.php') ?>