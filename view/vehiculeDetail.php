<?php require_once('../controller/vehiculeController.php') ?>
<?php require_once('./header.php') ?>

<!--Détails-->
<div class="container card mt-5 mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="<?= $arrayOneVehiculeShow['photo_vehicule'] ?>" class="img-fluid rounded-start" alt="image">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $arrayOneVehiculeShow['titre_vehicule'] ?></h5>
            <p class="card-text"><?= $arrayOneVehiculeShow['description_vehicule'] ?></p>
            <p class="card-text"><?= $arrayOneVehiculeShow['prix_journalier'] ?> € (prix journalier)</p>
            <p class="card-text"><small class="text-muted">
             <?= $arrayOneVehiculeShow['ville'] ?>    
            </small></p>
          </div>
        </div>
      </div>
    </div>
<!--FIN Détails-->







<?php require_once('./footer.php') ?>