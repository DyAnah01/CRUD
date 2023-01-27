<?php require_once('../controller/agenceController.php') ?>
<?php require_once('../controller/vehiculeController.php');?>
<?php require_once('../controller/membreController.php') ?>
<?php require_once('./header.php');?>

        




    <!--Affiche sur la page d'acceuil les vehicule ajouté-->
    <div class=" d-flex justify-content-center"  >
      <?php foreach ($arrayAllVehiculeShow as $value) : ?>
        <div class="d-flex justify-content-center flex-column">
        <img src="<?= $value['photo_vehicule']; ?>" alt="image voiture" width="200" height="300" class="mx-2">         
        </div>
      <? endforeach; ?>
    </div><!--END Affiche sur la page d'acceuil les vehicule ajouté-->




    <div class="container">
    <!--SELECT (READ) AFFICHE sur la page d'acceuil le tableau des agences sans les actions--> 
    <h2 class="my-5">Nos fournisseurs</h2>
        <table class="table my-5 table1">
          <thead>
            <tr class="text-center">

              <th scope="col">Agence</th>
              <th scope="col">Adresse</th>
              <th scope="col">Description</th>
              <th scope="col">Photo</th>
            </tr>
          </thead>
          <?php foreach ($arrayAgence as $value) : ?>
            <tbody>
              <tr class="text-center">
                <td><?= $value['titre'] ?></td>
                <td>
                  <?= $value['adresse'] ?> 
                  <?= $value['ville'] ?> 
                  <?= $value['cp'] ?>
                </td>
                <td width="330"><?= $value['description'] ?></td>
                <td><img src="<?= $value['photo']; ?>" alt="image" height="255" width="255" class="ms-3"></td>
              </tr>
            </tbody>
          <?php endforeach; ?>
        </table>
        <!--FIN SELECT (READ) AFFICHE sur la page d'acceuil le tableau des agences sans les actions-->
    </div>
    


    <?php require_once('./footer.php');?>




