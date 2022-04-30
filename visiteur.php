<?php include "header2.php" ?>
<?php require('connexion.php'); 
  $patients=$pdo->query("SELECT A.*,B.num_cham,C.nom service FROM patient A,chambre B,service C WHERE A.id_cham=B.id_cham and B.id_ser=C.id_ser");
  $patients2=$pdo->query("SELECT * FROM patient WHERE id_cham IS NULL");
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
                                  <th><i class="fa fa-bullhorn"></i> ID</th>
                                  <th><i class="fa fa-bullhorn"></i> Nom</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Prénom</th>
                                  <th>Chambre</th>
                                  <th>Service</th>
                                  <th>Entrée</th>
                                  <th>Sortie</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($patients as $patient): ?>
                                  <tr class="gradeX" id="<?= $patient['id_pat'] ?>">
                                  <td><a href="#"><?= $patient['id_pat'] ?></a></td>
                                  <td><a href="#"><?= $patient['nom'] ?></a></td>
                                  <td class="hidden-phone"><?= $patient['prenom'] ?></td>
                                  <td><?= $patient['num_cham'] ?></td>
                                  <td><?= $patient['service'] ?></td>
                                  <td><?= $patient['date_entree'] ?></td>
                                  <td><?= $patient['date_sortie'] ?></td>
                              </tr>
                                <?php endforeach; ?>
                                <?php foreach ($patients2 as $patient2): ?>
                                  <tr class="gradeX" id="<?= $patient2['id_pat'] ?>">
                                  <td><a href="#"><?= $patient2['id_pat'] ?></a></td>
                                  <td><a href="#"><?= $patient2['nom'] ?></a></td>
                                  <td class="hidden-phone"><?= $patient2['prenom'] ?></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
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
