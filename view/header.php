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
      </ul>

    </div>
  </div>
</nav>
  </header>
  <div class="container">

  <?php 
  $actions = isset($_GET['actions']) ? $_GET['actions'] : null;
  if($actions == 'affichepageacceuil') header('Location: Accueil.php');
  if($actions == 'affichepageagence') header('Location: Agence.php');
  if($actions == 'affichepagevehicule') header('Location: Vehicule.php');


  ?>