<?php include "header.php" ?>
<?php require('connexion.php'); 
  $patients=$pdo->query("SELECT * FROM patient WHERE id_pers='".$_SESSION['id_pers']."'");
?>
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                <div class="col-sm-12">
              <section class="card">
              <header class="card-header">
                  Patients
             <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
              </header>
              <div class="card-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Age</th>
                  <th class="hidden-phone">Antécédant</th>
                  <th class="hidden-phone">numeroSS</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($patients as $patient): ?>
                                  <tr class="gradeX" id="<?= $patient['id_pat'] ?>">
                                      <td><?= $patient['nom'] ?></td>
                                      <td><?= $patient['prenom'] ?></td>
                                      <td><?= $patient['age'] ?></td>
                                      <td class="center hidden-phone"><?= $patient['antecedant'] ?></td>
                                      <td class="center hidden-phone"><?= $patient['numss'] ?></td>
                                  </tr>
                  <?php endforeach; ?>
              </tbody>
              <tfoot>
              </tfoot>
              </table>
              </div>
              </div>
              </section>
              </div>
              </div>
              </section>
              </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

<?php include "footer.php" ?>
