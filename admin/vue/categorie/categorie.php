<section class="content">
    <div class="container-fluid">
        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-user-plus"></i></i>
                            ajout categorie
                        </h3>
                    </div>

                    <form  enctype="multipart/form-data">
                        <div class="card-body">

                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Nom categorie</label>
                                        <input class="form-control" type="text" name="nom_cat" id="nom_cat" required>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="button" value="Ajouter" class="btn btn-primary float-right">
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</section>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).on("click", ".btn", function() {
        console.log(window.location.hostname);
        var urlString = "controller=categorie&action=add&nom_cat="+document.getElementById("nom_cat").value;
        $.ajax({
            url: "dashboard.php",
            type: "POST",
            cache: false,
            data: urlString,
            success: function(response) {
                window.location.href = "dashboard.php?controller=categorie&action=liste";
            }
        });
    });
</script>