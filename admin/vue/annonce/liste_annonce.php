<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-user-plus"></i></i>
							Liste des annonces
						</h3>
					</div>

					<!-- /.card-header -->

					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Titre</th>
								<th>Prix</th>
								<th>Date de publication</th>
								<th>Departement</th>
								<th>Marque</th>
								<th>Categorie</th>
								<th>Status</th>

								<th>actions</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($annonces as $annonce) {
								$mar = new marque($annonce->id_marque, "");
								$cat = new categorie($annonce->id_categorie, "");
								$marque = $mar->detail($cnx);
								$categ = $cat->detail($cnx);

								echo "<tr>";
								echo "

									<td>" . $annonce->titre_an . "</td>
									<td>" .  $annonce->prix_an . "</td>
									<td>" . $annonce->date_pub_an . "</td>
									<td>" . $annonce->region_an . "</td>
									<td>" . $marque->nom_marq . "</td>
									<td>" . $categ->nom_cat . "</td>
									<td>" . $annonce->status . "</td>

									<td> <a href='dashboard.php?controller=annonce&action=supp&id_an=" . $annonce->id_an . "'>supp</a> 
									<a href='dashboard.php?controller=annonce&action=edit1&id_an=" . $annonce->id_an . "'>modif</a></td>




									
								";
								echo "</tr>";
							}
							echo "
						</tbody>
						<tfoot>
						<tr>

						<th>Titre</th>
						<th>Prix</th>
						<th>Date de publication</th>
						<th>Departement</th>
						<th>Marque</th>
						<th>Categorie</th>
						<th>Status</th>

						<th>actions</th>

						</tr>
						</tfoot>

						</table>";

							?>
				</div>
			</section>
			<!-- /.card-body -->
		</div>
	</div>
</section>
<!-- /.card -->