<?php include "header.php" ?>
<?php require('connexion.php');
	$chambres=$pdo->query("SELECT * FROM chambre ");
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
                             Ajouter un équipement
                          </header>
                          <div class="card-body">
                              <form class="form-horizontal tasi-form" method="POST" action="ajoutequip2.php">
                                 
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Nom</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input" name="nom">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">Quantite</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input" name="quantite">
                                      </div>
                                  </div>

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
                                  <!--<div class="form-group row">
                                      <label class="col-sm-2 col-sm-2 control-label">User</label>
                                      <div class="col-sm-10">
                                          <select class="form-control mb-2" name="user_id">
		                                        <?php foreach ($users as $user): ?>
                                          		<option value="<?= $user['id_user'] ?>"><?= $user['login'] ?></option>
                                          	<?php endforeach; ?>
		                                  </select>
                                      </div>
                                  </div>!-->
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