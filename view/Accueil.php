<?php require_once('../controller/agenceController.php') ?>
<?php require_once('../controller/vehiculeController.php');?>
<?php require_once('./header.php');?>
        <div class="d-flex flex-row-reverse">
          <a class="" href="#" data-bs-toggle="modal" data-bs-target="#modalconnexion">Se connecter</a>
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
              <div class="mb-3">
                <label for="pseudo" class="form-label">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>

              <div class="mb-3">
                <label for="nom" class="form-label">nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
              </div>
              
              <div class="mb-3">
                <label for="prenom" class="form-label">prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div>
              <div class="mb-3">Civilité</div>
                <select class="form-select mb-3" aria-label="Default select example">
                  <!--<option selected>Open this select menu</option>-->
                  <option value="f">Femme</option>
                  <option value="m">Homme</option>
                </select>
              </div>
              <div class="mb-3">Statut</div>
                <select class="form-select mb-3" aria-label="Default select example">
                  <!--<option selected>Open this select menu</option>-->
                  <option value="1">Admin</option>
                  <option value="2">User</option>
                </select>
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary">Enregistrer</button> 
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













    <div class=" d-flex justify-content-center"  >
      <?php foreach ($arrayAllVehiculeShow as $value) : ?>
        <div class="d-flex justify-content-center flex-column">
        <img src="<?= $value['photo_vehicule']; ?>" alt="image voiture" width="200">         
        </div>
      <? endforeach; ?>
    </div>

    <!--SELECT (READ) -->
    <h2>Nos fournisseurs</h2>
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
          <!--<th scope="col">Actions</th>-->
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
            <td><img src="<?= $value['photo']; ?>" alt="image" height="100" width="100"></td>
            <!--<td>
              <a href="?action=supprimer&id=<?= $value['id_agence'] ?>">Supprimer</a>
              <a href="updateAgence.php?action=modifier&id=<?//= $value['id_agence'] ?>">Modifier</a>
              <a href="agenceDetail.php?action=detail&id=<?//= $value['id_agence']?>">Détails</a>
            </td>-->
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
    <!--FIN SELECT (READ)-->
    <!--ADD (INSERT INTO)-->
    <!--<form method="post" class="mt-2 mb-5">
      <input type="text" name="titre" placeholder="Titre" class="mb-2">
      <input type="text" name="adresse" placeholder="Adresse" class="mb-2">
      <input type="text" name="ville" placeholder="ville" class="mb-2">
      <input type="number" name="cp" placeholder="Code postal" class="mb-2">
      <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" class="mb-2"></textarea>
      <input type="text" name="photo" placeholder="Ajouter l'url de l'image" class="mb-2">
      <button name="valider_agence" class="mb-2">Valider</button>
    </form>-->
    <!--FIN ADD (INSERT INTO)-->
    <?php require_once('./footer.php');?>




