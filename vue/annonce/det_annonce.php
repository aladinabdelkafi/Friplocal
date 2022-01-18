<?php
include "includes/connexion.php";
$id_an = $_GET["id_an"];
$annonce = $cnx->query("select * from annonce where id_an='" . $id_an . "'")->fetch(PDO::FETCH_OBJ);
$marque = $cnx->query("select * from marque where id='" . $annonce->id_marque . "'")->fetch(PDO::FETCH_OBJ);
$categorie = $cnx->query("select * from categorie where id='" . $annonce->id_categorie . "'")->fetch(PDO::FETCH_OBJ);
$photo = new photo("", "", "");
$photos = $photo->liste_par_ann($cnx, $annonce->id_an);

$personne = $cnx->query("select * from personne where id='" . $annonce->id_pers . "'")->fetch(PDO::FETCH_OBJ);

?>

<div class="site-section" style="margin-top: 15%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="mb-4">
                    <div class="slide-one-item home-slider owl-carousel">
                        <?php
                        foreach ($photos as $photo) {
                        ?>
                            <div><img src="photos/<?php echo ($photo->nom_photo); ?>" alt="Image" class="img-fluid"></div>
                        <?php
                        }

                        ?>

                    </div>
                </div>

                <h4 class="h5 mb-4 text-black">Description</h4>
                <p><?php echo $annonce->description_an; ?></p>

            </div>
            <div class="col-lg-3 ml-auto">

                <div class="mb-5">

                    <form action="#" method="post">
                        <div class="form-group">
                            <h3 class="font-weight-bold">Information article</h3>
                            <h6 class="font-weight-bold"><?php echo $annonce->prix_an; ?> EURO</h6>
                            <hr>
                        </div>

                        <div class="form-group">
                            <h3><?php echo $annonce->titre_an; ?></h3>
                            <h6>Publié: <?php echo $annonce->date_pub_an; ?></h6>
                            <hr>
                        </div>

                        <div class="form-group">
                            <h6><span class="icon icon-room"></span><?php echo $annonce->region_an; ?>, France</h6>
                            <hr>
                            <h6>Marque: <?php echo $marque->nom_marq; ?></h6>
                            <h6>Categorie: <?php echo $categorie->nom_cat; ?></h6>
                            <hr>
                        </div>
                        <?php
                        if (!isset($_SESSION['email_pers']) || !isset($_SESSION['mdp_pers'])) {
                        ?>
                            <div class="form-group">
                                <h3>Information vendeur</h3>
                                <h6>Il faut créer un compte ou se connecter</h6>
                                <hr>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="form-group">
                                <h3>Information vendeur</h3>
                                <h6><b>Nom Prenom:</b> <?php echo $personne->nom_pers; ?> <?php echo $personne->prenom_pers; ?></h6>
                                <h6><b>Email:</b> <A HREF="mailto:<?php echo $personne->email_pers; ?>"><?php echo $personne->email_pers; ?> </A></h6>
                                <h6><b>Numéro téléphone:</b> <?php echo $personne->tel_pers; ?></h6>
                                <hr>
                            </div>
                        <?php
                        }
                        ?>

                    </form>
                </div>




            </div>

        </div>
    </div>
</div>

