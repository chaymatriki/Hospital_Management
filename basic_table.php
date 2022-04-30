<?php include "header.php" ?>
<?php require('connexion.php'); 
  $patients=$pdo->query("SELECT * FROM patient");
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Patients
                          </header>
                          <table class="table table-striped table-advance table-hover" id="dynamic-table">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nom</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Prénom</th>
                                  <th><i class="fa fa-bookmark"></i> Age</th>
                                  <th><i class=" fa fa-edit"></i> Antécédent</th>
                                  <th><i class=" fa fa-edit"></i> Numéro SS</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($patients as $patient): ?>
                                  <tr class="gradeX" id="<?= $patient['id_pat'] ?>">
                                  <td><a href="#"><?= $patient['nom'] ?></a></td>
                                  <td class="hidden-phone"><?= $patient['prenom'] ?></td>
                                  <td><?= $patient['age'] ?></td>
                                  <td><?= $patient['antecedant'] ?></td>
                                  <!--<td><?= $patient['service'] ?></td>!-->
                                  <td><span class="badge badge-info label-mini"><?= $patient['numss'] ?></span></td>
                                  <td>
                                      <button class="btn btn-success btn-sm"><a href="ajoutpatient.php" style="color: #fff"><i class="fa fa-plus-square"></i></a></button>
                                      <button class="btn btn-primary btn-sm"><a href="modifierpatient.php?id_pat=<?= $patient['id_pat'] ?>" style="color: #fff"><i class="fa fa-pencil"></i></a></button>
                                      <button class="btn btn-danger btn-sm"><a href="deletepatient.php?id_pat=<?= $patient['id_pat'] ?>" style="color: #fff"><i class="fa fa-trash-o "></i></a></button>
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
