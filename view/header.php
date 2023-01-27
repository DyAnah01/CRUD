<?php require_once('../controller/membreController.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <header class="my-5">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item mx-5">
          <a class="nav-link active" aria-current="page" href="Accueil.php?actions=affichepageacceuil">Accueil</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="Agence.php?actions=affichepageagence">Gestion des Agences</a>
        </li>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="Vehicule.php?actions=affichepagevehicule">Gestion des Vehicule</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="#">Gestion de commande</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="#">Gestion des membres</a>
        </li>
        <li class="nav-item d-flex flex-row-reverse">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalconnexion">Se connecter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </header>

  <?php 
  $actions = isset($_GET['actions']) ? $_GET['actions'] : null;
  if($actions == 'affichepageacceuil') header('Location: Accueil.php');
  if($actions == 'affichepageagence') header('Location: Agence.php');
  if($actions == 'affichepagevehicule') header('Location: Vehicule.php');
  ?>





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

<div class="container">