<?php include "header.php" ?>
<?php require('connexion.php');
	$services=$pdo->query("SELECT * FROM service ");
  $chambres=$pdo->query("SELECT * FROM chambre WHERE disponibilite='oui'");
  $id_pat=$_GET["id_pat"];
?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                             Modifier un patient
                          </header>
                          <div class="card-body">
                              <form class="form-horizontal tasi-form" method="POST" action="modifierpatient2.php?id_pat=<?= $id_pat ?>">
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Chambre</label>
                                      <div class="col-sm-10">
                                          <select class="form-control mb-2" name="chambre">
                                            <?php foreach ($chambres as $chambre): ?>
                                              <option value="<?= $chambre['id_cham'] ?>"><?= $chambre['id_cham'] ?></option>
                                            <?php endforeach; ?>
                                      </select>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Date entrée</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="entree" placeholder="YYYY-MM-DD">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Date sortie</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input" name="sortie" placeholder="YYYY-MM-DD">
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