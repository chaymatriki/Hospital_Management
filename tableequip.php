<?php include "header.php" ?>
<?php require('connexion.php'); 
  $equipements=$pdo->query("SELECT * FROM equipement");
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Equipements
                          </header>
                          <table class="table table-striped table-advance table-hover" id="dynamic-table">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> id</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> nom</th>
                                  <th><i class="fa fa-bookmark"></i> chambre</th>
                                  <th><i class=" fa fa-edit"></i> quantite</th>
                                  <th><i class=" fa fa-edit"></i> prix</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($equipements as $equipement): ?>
                                  <tr id="<?= $equipement['id_equi'] ?>">
                                  <td><a href="#"><?= $equipement['id_equi'] ?></a></td>
                                  <td class="hidden-phone"><?= $equipement['nom'] ?></td>
                                  <td><?= $equipement['id_cham'] ?></td>
                                  <td><?= $equipement['quantite'] ?></td>
                                  <td><span class="badge badge-info label-mini"><?= $equipement['prix'] ?></span></td>
                                  <td>
                                      <button class="btn btn-success btn-sm"><a href="ajoutequip.php" style="color: #fff"><i class="fa fa-plus-square"></i></a></button>
                                      <button class="btn btn-primary btn-sm"><a href="modifierequip.php?id_equip=<?= $equipement['id_equi'] ?>" style="color: #fff"><i class="fa fa-pencil"></i></a></button>
                                      <button class="btn btn-danger btn-sm"><a href="deletequip.php?id_equi=<?= $equipement['id_equi'] ?>" style="color: #fff"><i class="fa fa-trash-o "></i></a></button>
                                  </td>
                              </tr>
                                <?php endforeach; ?>
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

<?php include "footer.php" ?>