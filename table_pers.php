<?php include "header.php" ?>
<?php require('connexion.php'); 
  $users=$pdo->query("SELECT * FROM user WHERE accepte='non'");
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              USERS
                          </header>
                          <div class="card-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Type</th>
                  <th class="hidden-phone">Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $user): ?>
                                  <tr class="gradeX" id="<?= $user['id_user'] ?>">
                                      <td><?= $user['nom_user'] ?></td>
                                      <td><?= $user['prenom_user'] ?></td>
                                      <td class="center hidden-phone"><?= $user['type'] ?></td>
                                      <td>
                                      <button class="btn btn-success btn-sm"><a href="ap.php?id_user=<?= $user['id_user'] ?>" style="color: #fff"><i class="fa fa-plus-square"></i></a></button>
                                      <button class="btn btn-danger btn-sm"><a href="dp.php?id_user=<?= $user['id_user'] ?>" style="color: #fff"><i class="fa fa-trash-o "></i></a></button>
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