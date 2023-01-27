<?php require_once('../controller/agenceController.php') ?>
<?php require_once('../controller/vehiculeController.php');?>
<?php require_once('./header.php');?>

        <div class="d-flex flex-row-reverse">
          <a class="btn btn-secondary" href="#" data-bs-toggle="modal" data-bs-target="#modalconnexion">Se connecter</a>
        </div>

  <!-- Modal pour INSCRIPTION-->
<div class="modal fade" id="modalInscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <form method="post" class="d-flex justify-content-center"><!-- form INSCRIPTION-->

              <h2 class="text-center">S'inscrire</h2>

              <div class="mb-3"><!--name="pseudo"-->
                <label for="pseudo" class="form-label">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo">
              </div>

              <div class="mb-3"><!--name="mdp"-->
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
              </div>

              <div class="mb-3"><!--name="nom"-->
                <label for="nom" class="form-label">nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
              </div>
              
              <div class="mb-3"><!--name="prenom"-->
                <label for="prenom" class="form-label">prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
              </div>

              <div class="mb-3"><!--name="email"-->
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              </div>

              <div><!--name="civilite"-->
              <div class="mb-3">Civilité</div>
                <select class="form-select mb-3" aria-label="Default select example" name="civilite">
                  <option selected>Select Civilité</option>
                  <option name="f" value="f">Femme</option>
                  <option name="m" value="m">Homme</option>
                </select>
              </div>

              <div class="mb-3">Select Statut</div><!--name="statut"-->
                <select class="form-select mb-3" aria-label="Default select example" name="statut">
                  <option selected>Statut</option>
                  <option name="1" value="1">Admin</option>
                  <option name="2" value="2">User</option>
                </select>
              </div>

              <div class="mb-3 mx-3"><!--name="date_enregistrement"-->
                <label for="dateInscription" class="form-label">Date d'inscription</label>
                <input type="date" class="form-control" id="dateInscription" name="date_enregistrement">
              </div>

              <div class="modal-footer"><!--name="validerInscription"-->
                <button name="validerInscription" class="btn btn-primary">Enregistrer</button> 
              </div>
            </form> <!--END FORM INSCRIPTION-->
      </div>

    </div>
  </div>
</div>  <!--End Modal INSCRIPTION -->


<!-- Modal CONNECTION -->
<div class="modal fade" id="modalconnexion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!--<h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>-->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form method="post"> <!--FORM CONNECTION-->
              <h2 class="text-center">Se connecter</h2>
              <div class="mb-3">
                <label for="pseudo" class="form-label">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo">
              </div>
              
              <div class="mb-3">
                <label for="mdpco" class="form-label">Password</label>
                <input type="password" class="form-control" id="mdpco" name="mdpco">
              </div>
              <div class="d-flex flex-column mb-3">
                  <p>Pas de compte ? </p>
                  <a class="" href="#" data-bs-toggle="modal" data-bs-target="#modalInscription">S'inscrire</a>
              </div>
              <button class="btn btn-primary">Enregistrer</button>              
            </form><!--END FORM CONNECTION-->
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
        <button type="button" class="btn btn-primary">Valider</button>
      </div>
    </div>
  </div>
</div><!-- END Modal CONNECTION -->




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
            <tr>

              <th scope="col">Agence</th>
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
                <td width="330"><?= $value['description'] ?></td>
                <td><img src="<?= $value['photo']; ?>" alt="image" height="200" width="200" class="ms-3"></td>
              </tr>
            </tbody>
          <?php endforeach; ?>
        </table>
        <!--FIN SELECT (READ) AFFICHE sur la page d'acceuil le tableau des agences sans les actions-->
    </div>
    


    <?php require_once('./footer.php');?>




