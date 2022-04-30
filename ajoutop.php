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
                             Ajouter une opération
                          </header>
                          <div class="card-body">
                              <form class="form-horizontal tasi-form" method="POST" action="ajoutop2.php?id_pat=<?= $_GET['id_pat'] ?>">
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Opérations</label>
                                      <div class="col-sm-10">
                                          <select class="form-control mb-2" name="id_op">
                                            <?php foreach ($operations as $operation): ?>
                                              <option value="<?= $operation['id_op'] ?>"><?= $operation['nom'] ?></option>
                                            <?php endforeach; ?>
                                      </select>
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