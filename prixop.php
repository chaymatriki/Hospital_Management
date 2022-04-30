<?php include "header.php" ?>
<?php require('connexion.php'); 
  $operations=$pdo->query("SELECT * FROM operation");
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Opérations
                          </header>
                          <div class="card-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
                  <th>Nom</th>
                  <th class="hidden-phone">Prix</th>
                  <th class="hidden-phone">Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($operations as $operation): ?>
                                  <tr class="gradeX" id="<?= $operation['id_op'] ?>">
                                      <td><?= $operation['nom'] ?></td>
                                      <td class="center hidden-phone"><?= $operation['prix'] ?></td>
                                      <td>
                                      <button class="btn btn-primary btn-sm"><a href="modifierprixop.php?id_op=<?= $operation['id_op'] ?>" style="color: #fff"><i class="fa fa-pencil"></i></a></button>
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