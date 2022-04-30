<?php include "header.php" ?>
<?php require('connexion.php'); 
  $medicaments=$pdo->query("SELECT * FROM medicament");
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                              Médicaments
                          </header>
                          <div class="card-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
                  <th>Nom</th>
                  <th>Stock</th>
                  <th class="hidden-phone">Prix</th>
                  <th class="hidden-phone">Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($medicaments as $medicament): ?>
                                  <tr class="gradeX" id="<?= $medicament['id_med'] ?>">
                                      <td><?= $medicament['nom'] ?></td>
                                      <td><?= $medicament['stock'] ?></td>
                                      <td class="center hidden-phone"><?= $medicament['prix'] ?></td>
                                      <td>
                                      <button class="btn btn-success btn-sm"><a href="ajoutmedph.php" style="color: #fff"><i class="fa fa-plus-square"></i></a></button>
                                      <button class="btn btn-primary btn-sm"><a href="modifiermedph.php?id_med=<?= $medicament['id_med'] ?>" style="color: #fff"><i class="fa fa-pencil"></i></a></button>
                                      <button class="btn btn-danger btn-sm"><a href="deletemedph.php?id_med=<?= $medicament['id_med'] ?>" style="color: #fff"><i class="fa fa-trash-o "></i></a></button>
                                  </td>
                                  </tr>
                  <?php endforeach; ?>
              </tbody>
              <tfoot>
              </tfoot>
              </table>
              <form name="export" action="excel.php" method="post">
                <input type="submit" name="export" class="btn btn-success" value="Export to Excel">
              </form>
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