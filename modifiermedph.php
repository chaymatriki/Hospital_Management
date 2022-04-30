<?php include "header.php" ?>
<?php require('connexion.php');
?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                             Mettre à jour le stock d'un médicament
                          </header>
                          <div class="card-body">
                              <form class="form-horizontal tasi-form" method="POST" action="modifiermedph2.php?id_med=<?= $_GET['id_med'] ?>&id_med=<?= $_GET['id_med'] ?>">
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Stock</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="stock">
                                      </div>
                                  </div>
                                  <button class="btn btn-primary" type="submit">Submit form</button>
                              </form>
                          </div>
                      </section>
                      </div>

                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
<?php include "footer.php" ?>