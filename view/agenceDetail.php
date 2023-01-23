<?php require_once('../controller/agenceController.php');?>
<?php require_once('./header.php');?>

 <!--width="200" height="200">-->        

<!--Détails-->
    <div class="container card mt-5 mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="<?= $arrayDetail['photo'] ?>" class="img-fluid rounded-start" alt="image">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $arrayDetail['titre'] ?></h5>
            <p class="card-text"><?= $arrayDetail['description'] ?></p>
            <p class="card-text"><small class="text-muted">
             <?= $arrayDetail['adresse'] ?> <?= $arrayDetail['ville'] ?> <?= $arrayDetail['cp'] ?>    
            </small></p>
          </div>
        </div>
      </div>
    </div>
<!--FIN Détails-->

<?php require_once('./footer.php');?>