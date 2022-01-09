
<!-- Main content -->
<section class="content" style="padding-top:15%;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
            </div>

            <h3 class="profile-username text-center"><?php echo $personne->prenom_pers; ?> <?php echo $personne->nom_pers; ?></h3>

            <p class="text-muted text-center"><?php echo $personne->status; ?></p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b><?php echo $personne->email_pers; ?></b>
              </li>
              <li class="list-group-item">
                <b><?php echo $personne->tel_pers; ?></b>
              </li>
              <li class="list-group-item">
                <b>Friends</b> <a class="float-right">13,287</a>
              </li>
            </ul>


          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">

          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="site-section bg-white">
                    <div class="container">
                      <div class="row mb-5" style="margin-top: -10%;">
                        <div class="col-md-7 text-left border-primary">
                          <h2 class="font-weight-light text-primary">Mes annonces :</h2>
                        </div>
                      </div>
                      <div class="row mt-5">
                        <?php
                        foreach ($annonces as $annonce) {
                          $mar = new marque($annonce->id_marque, "");
                          $cat = new categorie($annonce->id_categorie, "");
                          $marque = $mar->detail($cnx);
                          $categ = $cat->detail($cnx);
                          $photo= new photo("","","");
                          $photos= $photo-> liste_par_ann($cnx,$annonce->id_an);
                          
                        ?>
                          <div class="col-lg-3">
                            <div class="d-block d-md-flex listing vertical">
                              <a href="index.php?controller=annonce&action=det&id_an=<?php echo $annonce->id_an; ?>" class="img d-block" style="background-image: url(photos/<?php echo($photos[0]->nom_photo); ?>);"> </a>
                              <div class="lh-content">
                                <span class="category"><?php echo $annonce->prix_an; ?> EURO</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html"><?php echo $annonce->titre_an; ?></a></h3>

                                <address><span class="icon icon-room"></span><?php echo $annonce->region_an; ?>, France</address>
                                <span class="category"><?php echo $annonce->status; ?></span>
                              </div>
                            </div>
                          </div>

                        <?php }
                        ?>

                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.post -->

              </div>


            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->