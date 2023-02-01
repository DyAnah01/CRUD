<?php require_once('../controller/agenceController.php') ?>
<?php require_once('../controller/vehiculeController.php');?>
<?php require_once('./header.php');?>




    <!--SELECT (READ) --> 
    <div class="d-flex justify-content-center">
      <?php foreach ($arrayAllVehiculeShow as $value) : ?>
      <img src="<?= $value['photo_vehicule'] ?>" alt="image" height="300" width="200" class="mx-1">
      <?php  endforeach; ?>
    </div>  

    <!--FIN SELECT (READ)-->


<!--SELECT (READ) -->
<h2 class="mt-5">Nos fournisseurs</h2>
<table class="table my-5 table1">
      <thead>
        <tr>
          <th scope="col">Titre</th>
          <th scope="col">Adresse</th>
          <th scope="col">Description</th>
          <th scope="col">Photo</th>
        </tr>
      </thead>
      <?php foreach ($arrayAgence as $value) : ?>
        <tbody>
          <tr>
            <td><?= $value['titre'] ?></td>
            <td>
              <?= $value['adresse'] ?>
              <?= $value['ville'] ?>
              <?= $value['cp'] ?>
            </td>
            <td width="250"><?= $value['description'] ?></td>
            <td><img src="<?= $value['photo']; ?>" alt="image" height="100" width="100"></td>
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
    <!--FIN SELECT (READ)-->

<?php require_once('./footer.php');?>