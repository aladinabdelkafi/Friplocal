<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-user-plus"></i></i>
							Modifier annonce
						</h3>
					</div>

					<form id="ff" method="post" action="dashboard.php?controller=annonce&action=edit" enctype="multipart/form-data">
						<div class="card-body">

							<div class="row">

								<div class="col-sm-4">
									<div class="form-group">
										<label>Nom annonce</label>
										<input class="form-control" type="text" name="titre_an" value="<?php echo $annonce->titre_an; ?>" required>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label>Prix annonce</label>
										<input class="form-control" type="text" name="prix_an" value="<?php echo $annonce->prix_an; ?>" required>

									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label>Date</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="form-control input-group-text"><i class="fas fa-calendar-alt"></i></span>
											</div>

											<input class="form-control" type="date" name="date_pub_an" value="<?php echo $annonce->date_pub_an; ?>" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row">


								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Couleur</label>
										<input class="form-control" type="text" name="couleur_an" value="<?php echo $annonce->couleur_an; ?>" required>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Departement</label>
										<select class="form-control" name="region_an">
											<option value="1 - Ain">1 - Ain</option>
											<option value="2 - Aisne">2 - Aisne</option>
											<option value="3 - Allier">3 - Allier</option>
											<option value="4 - Alpes-de-Haute-Provence">4 - Alpes-de-Haute-Provence</option>
											<option value="5 - Hautes-Alpes">5 - Hautes-Alpes</option>
											<option value="6 - Alpes-Maritimes">6 - Alpes-Maritimes</option>
											<option value="7 - Ardèche">7 - Ardèche</option>
											<option value="8 - Ardennes">8 - Ardennes</option>
											<option value="9 - Ariège">9 - Ariège</option>
											<option value="10 - Aube">10 - Aube</option>
											<option value="11 - Aude">11 - Aude</option>
											<option value="12 - Aveyron">12 - Aveyron</option>
											<option value="13 - Bouches-du-Rhône">13 - Bouches-du-Rhône</option>
											<option value="14 - Calvados">14 - Calvados</option>
											<option value="15 - Cantal">15 - Cantal</option>
											<option value="16 - Charente">16 - Charente</option>
											<option value="17 - Charente-Maritime">17 - Charente-Maritime</option>
											<option value="18 - Cher">18 - Cher</option>
											<option value="19 - Corrèze">19 - Corrèze</option>
											<option value="21 - Côte-d'Or">21 - Côte-d'Or</option>
											<option value="22 - Côtes-d'Armor">22 - Côtes-d'Armor</option>
											<option value="23 - Creuse">23 - Creuse</option>
											<option value="24 - Dordogne">24 - Dordogne</option>
											<option value="25 - Doubs">25 - Doubs</option>
											<option value="26 - Drôme">26 - Drôme</option>
											<option value="27 - Eure">27 - Eure</option>
											<option value="28 - Eure-et-Loi">28 - Eure-et-Loir</option>
											<option value="29 - Finistère">29 - Finistère</option>
											<option value="2A - Corse-du-Sud">2A - Corse-du-Sud</option>
											<option value="2B - Haute-Corse">2B - Haute-Corse</option>
											<option value="30 - Gard">30 - Gard</option>
											<option value="311 - Haute-Garonne">31 - Haute-Garonne</option>
											<option value="32 - Gers">32 - Gers</option>
											<option value="33 - Gironde">33 - Gironde</option>
											<option value="34 - Hérault">34 - Hérault</option>
											<option value="35 - Ille-et-Vilaine">35 - Ille-et-Vilaine</option>
											<option value="36 - Indre">36 - Indre</option>
											<option value="37 - Indre-et-Loire">37 - Indre-et-Loire</option>
											<option value="38 - Isère">38 - Isère</option>
											<option value="39 - Jura">39 - Jura</option>
											<option value="40 - Landes">40 - Landes</option>
											<option value="41 - Loir-et-Cher">41 - Loir-et-Cher</option>
											<option value="42 - Loire">42 - Loire</option>
											<option value="43 - Haute-Loire">43 - Haute-Loire</option>
											<option value="44 - Loire-Atlantique">44 - Loire-Atlantique</option>
											<option value="45 - Loiret">45 - Loiret</option>
											<option value="46 - Lot">46 - Lot</option>
											<option value="47 - Lot-et-Garonne">47 - Lot-et-Garonne</option>
											<option value="48 - Lozère">48 - Lozère</option>
											<option value="49 - Maine-et-Loire">49 - Maine-et-Loire</option>
											<option value="50 - Manche">50 - Manche</option>
											<option value="51 - Marne">51 - Marne</option>
											<option value="52 - Haute-Marne">52 - Haute-Marne</option>
											<option value="53 - Mayenne">53 - Mayenne</option>
											<option value="54 - Meurthe-et-Moselle">54 - Meurthe-et-Moselle</option>
											<option value="55 - Meuse">55 - Meuse</option>
											<option value="56 - Morbihan">56 - Morbihan</option>
											<option value="57 - Moselle">57 - Moselle</option>
											<option value="58 - Nièvre">58 - Nièvre</option>
											<option value="59 - Nord">59 - Nord</option>
											<option value="60 - Oise">60 - Oise</option>
											<option value="61 - Orne">61 - Orne</option>
											<option value="62 - Pas-de-Calais">62 - Pas-de-Calais</option>
											<option value="63 - Puy-de-Dôme">63 - Puy-de-Dôme</option>
											<option value="64 - Pyrénées-Atlantiques">64 - Pyrénées-Atlantiques</option>
											<option value="65 - Hautes-Pyrénées">65 - Hautes-Pyrénées</option>
											<option value="66 - Pyrénées-Orientales">66 - Pyrénées-Orientales</option>
											<option value="67 - Bas-Rhin">67 - Bas-Rhin</option>
											<option value="68 - Haut-Rhin">68 - Haut-Rhin</option>
											<option value="69 - Rhône">69 - Rhône</option>
											<option value="70 - Haute-Saône">70 - Haute-Saône</option>
											<option value="71 - Saône-et-Loire">71 - Saône-et-Loire</option>
											<option value="72 - Sarthe">72 - Sarthe</option>
											<option value="73 - Savoie">73 - Savoie</option>
											<option value="74 - Haute-Savoie">74 - Haute-Savoie</option>
											<option value="75 - Paris">75 - Paris</option>
											<option value="76 - Seine-Maritime">76 - Seine-Maritime</option>
											<option value="77 - Seine-et-Marne">77 - Seine-et-Marne</option>
											<option value="78 - Yvelines">78 - Yvelines</option>
											<option value="79 - Deux-Sèvres">79 - Deux-Sèvres</option>
											<option value="80 - Somme">80 - Somme</option>
											<option value="81 - Tarn">81 - Tarn</option>
											<option value="82 - Tarn-et-Garonne">82 - Tarn-et-Garonne</option>
											<option value="83 - Var">83 - Var</option>
											<option value="84 - Vaucluse">84 - Vaucluse</option>
											<option value="85 - Vendée">85 - Vendée</option>
											<option value="86 - Vienne">86 - Vienne</option>
											<option value="87 - Haute-Vienne">87 - Haute-Vienne</option>
											<option value="88 - Vosges">88 - Vosges</option>
											<option value="89 - Yonne">89 - Yonne</option>
											<option value="90 - Territoire de Belfort">90 - Territoire de Belfort</option>
											<option value="91 - Essonne">91 - Essonne</option>
											<option value="92 - Hauts-de-Seine">92 - Hauts-de-Seine</option>
											<option value="93 - Seine-Saint-Denis">93 - Seine-Saint-Denis</option>
											<option value="94 - Val-de-Marne">94 - Val-de-Marne</option>
											<option value="95 - Val-d'Oise">95 - Val-d'Oise</option>
											<option value="971 - Guadeloupe">971 - Guadeloupe</option>
											<option value="972 - Martinique">972 - Martinique</option>
											<option value="973 - Guyane">973 - Guyane</option>
											<option value="974 - La Réunion">974 - La Réunion</option>
											<option value="976 - Mayotte">976 - Mayotte</option>
										</select>
									</div>
								</div>
								<?php
								$mar = new marque($annonce->id_marque, "");
								$marque = $mar->detail($cnx);

								?>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Marque</label>
										<select class="form-control" name="id_marque">
											<option value="<?php echo $annonce->id_marque; ?>"><?php echo $marque->nom_marq; ?></option>
											<?php

											$lis = $mar->liste($cnx);
											foreach ($lis as $mar) {
												if ($mar->id != $annonce->id_marque) {
													echo "<option    value =" . $mar->id . ">" . $mar->nom_marq . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
								<?php
								$cats = new categorie($annonce->id_categorie, "");
								$catecorie = $cats->detail($cnx);

								?>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Categorie</label>
										<select class="form-control" name="id_categorie">
											<option value="<?php echo $annonce->id_categorie; ?>"><?php echo $catecorie->nom_cat; ?></option>
											<?php

											$lis = $cats->liste($cnx);
											foreach ($lis as $ca) {
												if ($ca->id != $annonce->id_categorie) {
													echo "<option   value =" . $ca->id . ">" . $ca->nom_cat . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>


								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Taille</label>
										<input class="form-control" type="text" name="taille" value="<?php echo $annonce->taille; ?>" required>
									</div>
								</div>

								<div class="col-sm-8">
									<div class="form-group">
										<label for="exampleInputEmail1">Description</label>
										<textarea type="email" class="form-control" name="description_an" required>Votre description ici !
                                        </textarea>
									</div>
								</div>


								<input type="hidden" name="id_an" value="<?php echo $annonce->id_an; ?>">
								<input type="hidden" name="id_pers" value="<?php echo $annonce->id_pers; ?>">
								<div class="gallery" width="180"></div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

								<script type="text/javascript">
									function readURL(input) {

										if ($('#image')[0].files.length > 10) {
											alert('choisir maximume 10 images');


										}

									}

									$(function() {
										// Multiple images preview in browser
										var imagesPreview = function(input, placeToInsertImagePreview) {

											if (input.files) {
												var filesAmount = input.files.length;
												if (filesAmount > 10)
													filesAmount = 10;
												for (i = 0; i < filesAmount; i++) {
													var reader = new FileReader();

													reader.onload = function(event) {
														$($.parseHTML('<img width="300">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
													}

													reader.readAsDataURL(input.files[i]);
												}
											}

										};

										$('#image').on('change', function() {
											imagesPreview(this, 'div.gallery');
										});
									});
								</script>
							</div>
						</div>
						<div class="card-footer">
							<br> Valider Annonce <input type="checkbox" name="status" value="Accepte" <?php if ($annonce->status == 'Accepte') echo 'checked=checked'; ?>>

							<input type="submit" value="Modifier" class="btn btn-primary float-right">
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