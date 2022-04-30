<?php include "header.php" ?>
<?php require('connexion.php'); 
  $medicaments=$pdo->query("SELECT B.*,quantite FROM patient_med A,medicament B WHERE A.id_med= B.id_med AND id_pat='".$_GET['id_pat']."'");
  $patient=$pdo->query("SELECT * FROM patient WHERE id_pat='".$_GET['id_pat']."'")->fetch();
  $operations=$pdo->query("SELECT B.* FROM patient_op A,operation B WHERE A.id_op= B.id_op AND id_pat='".$_GET['id_pat']."'");
?>
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <section class="card">
                  <header class="card-header">
                      Détails patient
                  </header>

              </section>
              <div class="row">
                  <div class="col-md-7">
                      <section class="card">
                          <div class="bio-graph-heading project-heading">
                              <strong> <?= $patient['nom'] ?> </strong>
                          </div>
                          <div class="card-body bio-graph-info">
                              <!--<h1>New Dashboard BS3 </h1>-->
                              <div class="row p-details">
                                  <div class="bio-row">
                                      <p><span class="bold">Nom </span>: <?= $patient['nom'] ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Numéro SS </span>: <span class="badge badge-primary"><?= $patient['numss'] ?></span></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Prénom </span>: <?= $patient['prenom'] ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Age</span>: <?= $patient['age'] ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Antecedant </span>: <?= $patient['antecedant'] ?></p>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
                  <div class="col-md-5">
                      <section class="card">
                        <header class="card-header">
                          Liste des médicaments
                        </header>
                        <div class="card-body">
                            <table class="table table-hover p-table">
                          <thead>
                          <tr>
                              <th>Nom</th>
                              <th>Quantite</th>
                              <th><button class="btn btn-success btn-sm"><a href="ajoutmed.php?id_pat=<?= $_GET['id_pat'] ?>" style="color: #fff"><i class="fa fa-plus-square"></i></a></button></th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($medicaments as $medicament): ?>
                                  <tr  class="gradeX" id="<?= $medicament['id_med'] ?>">
                                      <td>
                                          <?= $medicament['nom'] ?>
                                      </td>
                                      <td>
                                          <span class="badge badge-info"><?= $medicament['quantite'] ?></span>
                                      </td>
                                      <td>
                                      <button class="btn btn-primary btn-sm"><a href="modifiermed.php?id_med=<?= $medicament['id_med'] ?>&id_pat=<?= $_GET['id_pat'] ?>" style="color: #fff"><i class="fa fa-pencil"></i></a></button>
                                      <button class="btn btn-danger btn-sm"><a href="deletemed.php?id_med=<?= $medicament['id_med'] ?>&id_pat=<?= $_GET['id_pat'] ?>" style="color: #fff"><i class="fa fa-trash-o "></i></a></button>
                                  </td>
                                  </tr>
                            <?php endforeach; ?>
                          </tbody>
                          </table>
                        </div>
                      </section>
                  </div>
                  <div class="col-md-5">
                      <section class="card">
                        <header class="card-header">
                          Liste des opérations
                        </header>
                        <div class="card-body">
                            <table class="table table-hover p-table">
                          <thead>
                          <tr>
                              <th>Nom</th>
                              <th>Prix</th>
                              <th><button class="btn btn-success btn-sm"><a href="ajoutop.php?id_pat=<?= $_GET['id_pat'] ?>" style="color: #fff"><i class="fa fa-plus-square"></i></a></button></th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($operations as $operation): ?>
                                  <tr class="gradeX" id="<?= $operation['id_op'] ?>">
                                      <td>
                                          <?= $operation['nom'] ?>
                                      </td>
                                      <td>
                                          <span class="badge badge-info"><?= $operation['prix'] ?></span>
                                      </td>
                                      <td>
                                      <button class="btn btn-danger btn-sm"><a href="deleteop.php?id_op=<?= $operation['id_op'] ?>&id_pat=<?= $_GET['id_pat'] ?>" style="color: #fff"><i class="fa fa-trash-o "></i></a></button>
                                  </td>
                                  </tr>
                            <?php endforeach; ?>
                          </tbody>
                          </table>
                        </div>
                      </section>
                  </div>
                  <a href="ordpdf.php?id_pat=<?= $_GET['id_pat'] ?>" class="btn btn-primary" target="_blank">Rédiger Ordonnance</a>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

<?php include "footer.php" ?>
