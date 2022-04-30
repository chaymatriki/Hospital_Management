<?php include "header.php" ?>
<?php require('connexion.php'); 
  $personelles=$pdo->query("SELECT A.*,B.nom nom_ser FROM personelles A,service B WHERE A.id_ser=B.id_ser");
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Personnel
                          </header>
                          <div class="card-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Type</th>
                  <th class="hidden-phone">Service</th>
                  <th class="hidden-phone">Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($personelles as $personelle): ?>
                                  <tr class="gradeX" id="<?= $personelle['id_pers'] ?>">
                                      <td><?= $personelle['nom'] ?></td>
                                      <td><?= $personelle['prenom'] ?></td>
                                      <td class="center hidden-phone"><?= $personelle['type'] ?></td>
                                      <td class="center hidden-phone"><?= $personelle['nom_ser'] ?></td>
                                      <td>
                                      <button class="btn btn-primary btn-sm"><a href="modifierpersonnel.php?id_pers=<?= $personelle['id_pers'] ?>" style="color: #fff"><i class="fa fa-pencil"></i></a></button>
                                      <button class="btn btn-danger btn-sm"><a href="deletepersonelle.php?id_pers=<?= $personelle['id_pers'] ?>" style="color: #fff"><i class="fa fa-trash-o "></i></a></button>
                                  </td>
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
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

<?php include "footer.php" ?>