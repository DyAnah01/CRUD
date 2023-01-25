<?php require_once('../controller/vehiculeController.php');?>
<?php require_once('./header.php');?>

<h2>GESTION DES VEHICULES</h2>
        <!--SELECT (READ) -->
    <table class="table my-5 table1">
      <thead>
        <tr>
          <th scope="col">Vehicule</th>
          <th scope="col">Agence</th><!--FK-->
          <th scope="col">titre</th>
          <th scope="col">Marque</th>
          <th scope="col">Model</th>
          <th scope="col">Description</th>
          <th scope="col">Photo</th>
          <th scope="col">Prix</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <?php foreach ($arrayAllVehiculeShow as $value) : ?>
        <tbody>
          <tr>
            <td><?= $value['id_vehicule'] ?></td>
            <td><?= $value['ville'] ?></td><!--FK-->
            <td><?= $value['titre_vehicule'] ?></td><!--FK-->
            <td><?= $value['marque_vehicule'] ?></td>
            <td><?= $value['modele_vehicule'] ?></td>
            <td><?= $value['description_vehicule'] ?></td>
            <td><img src="<?= $value['photo_vehicule']; ?>" alt="image" height="100" width="100"></td>
            <td><?= $value['prix_journalier'] ?></td>      
            <td>
              <a href="?actions=supprimer&id=<?= $value['id_vehicule'];?>">Supprimer</a>
              <a href="?actions=update">Modifier</a>
              <a href="?actions=details">Détails</a>
            </td>
          </tr>
        </tbody>
      <?php  endforeach; ?>
    </table>
    <!--FIN SELECT (READ)-->




    <!--ADD (INSERT INTO)-->
    <form method="post" class="mt-2 mb-5">

        <label for=""></label>
        <input type="texte" id="" name="titre_vehicule" placeholder="Titre de l'annonce" class="mb-2">

        <label for="">Agence</label>    
        <select name="id_agence" id="">
          <?php foreach($arrayAgence1 as $value) :?> 
            <option value="<?=$value['id_agence']?>"><?=$value['ville']?></option>
          <?php endforeach ; ?>    
        </select>
        

        <label for="">Marque</label>
        <input type="text" name="marque_vehicule" placeholder="Marque" class="mb-2">

        <label for="">Model</label>
        <input type="text" name="modele_vehicule" placeholder="Model" class="mb-2">

        <label for="">Prix</label>
        <input type="number" name="prix_journalier" placeholder="Prix journalier" class="mb-2">

        <label for="">Photo</label>
        <input type="text" name="photo_vehicule" placeholder="Ajouter l'url de l'image" class="mb-2">          

        <label for="">Description</label>
        <textarea name="description_vehicule" id="" cols="30" rows="10" placeholder="Description" class="mb-2"></textarea>     

      <button name="valider_vehicule" class="mb-2">Enregistrer</button>
    </form>
    <!--FIN ADD (INSERT INTO)-->











<?php require_once('./footer.php');?>