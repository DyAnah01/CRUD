<?php require_once('../controller/agenceController.php') ?>
<?php require_once('./header.php');?>
  <h2>GESTION DES AGENCES </h2>
    <!--SELECT (READ) -->
    <table class="table my-5 table1">
      <thead>
        <tr>
          <th scope="col">Agence</th>
          <th scope="col">Titre</th>
          <th scope="col">Adresse</th>
          <th scope="col">Ville</th>
          <th scope="col">Code postal</th>
          <th scope="col">Description</th>
          <th scope="col">Photo</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <?php foreach ($arrayAgence as $value) : ?>
        <tbody>
          <tr>
            <td><?= $value['id_agence'] ?></td>
            <td><?= $value['titre'] ?></td>
            <td><?= $value['adresse'] ?></td>
            <td><?= $value['ville'] ?></td>
            <td><?= $value['cp'] ?></td>
            <td width="250"><?= $value['description'] ?></td>
            <td><img src="<?= $value['photo']; ?>" alt="image" height="100" width="80"></td>
            <td>
              <a href="?action=supprimer&id=<?= $value['id_agence'] ?>">Supprimer</a>
              <a href="updateAgence.php?action=modifier&id=<?= $value['id_agence'] ?>">Modifier</a>
              <a href="agenceDetail.php?action=detail&id=<?= $value['id_agence']?>">Détails</a>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
    <!--FIN SELECT (READ)-->



    <!--ADD (INSERT INTO)-->
    <h2 class="my-5">ADD AGENCE</h2>
    <form method="post" class="mt-2 mb-5">
      <label for="">Titre</label>
      <input type="text" name="titre" placeholder="Titre" class="mb-2">
      <label for="">Adresse</label>
      <input type="text" name="adresse" placeholder="Adresse" class="mb-2">
      <label for="">Ville</label>
      <input type="text" name="ville" placeholder="ville" class="mb-2">
      <label for="">Code postal</label>
      <input type="number" name="cp" placeholder="Code postal" class="mb-2">
      <label for="">Description</label>
      <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" class="mb-2"></textarea>
      <label for="">Photo</label>
      <input type="text" name="photo" placeholder="Ajouter l'url de l'image" class="mb-2">
      <button name="valider_agence" class="mb-2">Enregistrer</button>
    </form>
    <!--FIN ADD (INSERT INTO)-->


    
    <?php require_once('./footer.php');?>




