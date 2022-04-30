<?php include "header.php" ?>
<?php require('connexion.php');
	$services=$pdo->query("SELECT * FROM service ");
  $chambres=$pdo->query("SELECT * FROM chambre WHERE disponibilite='oui'");
  $medecins=$pdo->query("SELECT id_pers FROM personelles WHERE type='medecin'")
?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                             Ajouter un patient
                          </header>
                          <div class="card-body">
                              <form class="form-horizontal tasi-form" method="POST" action="ajoutpatient2.php">
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Nom</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="nom">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Prenom</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="prenom">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">age</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input" name="age">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">antecedant</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input" name="antecedant">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">numeroSS</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input" name="numeross">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Medecin</label>
                                      <div class="col-sm-10">
                                          <select class="form-control mb-2" name="id-pers">
                                            <?php foreach ($medecins as $medecin): ?>
                                              <option value="<?= $medecin['id_pers'] ?>"><?= $medecin['id_pers'] ?></option>
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