    <?php require_once('../controller/agenceController.php') ?>
    <?php require_once('./header.php') ?>

    <!--ADD (INSERT INTO)-->
    <form method="post" class="mt-2 mb-5">
        
        <input type="text" name="titre" placeholder="Titre" class="mb-2" value="<?= $arrayUp['titre'];?>">
        <input type="text" name="adresse" placeholder="Adresse" class="mb-2" value="<?= $arrayUp['adresse'];?>">
        <input type="text" name="ville" placeholder="ville" class="mb-2" value="<?= $arrayUp['ville'];?>">
        <input type="number" name="cp" placeholder="Code postal" class="mb-2" value="<?= $arrayUp['cp'];?>">
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" class="mb-2" ><?= $arrayUp['description'];?></textarea>
        <input type="text" name="photo" placeholder="Ajouter l'url de l'image" class="mb-2" value="<?= $arrayUp['photo'];?>">
        <input type="hidden" name="id_agence" value="<?= $arrayUp['id_agence'] ?>" >
        <button name="validerUpdate" class="mb-2">Valider</button>

    </form>
    <!--FIN ADD (INSERT INTO)-->
    <?php require_once('./footer.php') ?>