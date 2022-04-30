<?php include "header.php" ?>
<?php require('connexion.php');
	$services=$pdo->query("SELECT * FROM service ");
	$users=$pdo->query("SELECT * FROM user");
?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="card">
                          <header class="card-header">
                             Ajouter un personnel
                          </header>
                          <div class="card-body">
                              <form class="form-horizontal tasi-form" method="POST" action="ajoutpersonelle.php">
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
                                      <label class="col-sm-2 col-sm-2 control-label">type</label>
                                      <div class="col-sm-10">
                                          <select class="form-control" name="type">
              <option value="agent d'acceuil">Agent d'acceuil</option>
              <option value="medecin">Médecin</option>
              <option value="pharmacien">Pharmacien</option>
              <option value="Financier">Financier</option>
            </select>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Service</label>
                                      <div class="col-sm-10">
                                          <select class="form-control mb-2" name="service_id">
                                          	<?php foreach ($services as $service): ?>
                                          		<option value="<?= $service['id_ser'] ?>"><?= $service['nom'] ?></option>
                                          	<?php endforeach; ?>
		                                  </select>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">User</label>
                                      <div class="col-sm-10">
                                          <select class="form-control mb-2" name="user_id">
		                                        <?php foreach ($users as $user): ?>
                                          		<option value="<?= $user['id_user'] ?>"><?= $user['login'] ?></option>
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