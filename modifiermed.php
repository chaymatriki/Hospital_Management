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
                             Modifier le traitement un medicament
                          </header>
                          <div class="card-body">
                              <form class="form-horizontal tasi-form" method="POST" action="modifiermed2.php?id_pat=<?= $_GET['id_pat'] ?>&id_med=<?= $_GET['id_med'] ?>">
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Quantite</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="quantite">
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