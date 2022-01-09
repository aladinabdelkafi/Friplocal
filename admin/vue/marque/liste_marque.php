<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-user-plus"></i></i>
							Liste des marques
						</h3>
						<input class="btn btn-block btn-secondary btn-sm col-3 float-right" type="button" value="Nouveau marque" onclick="window.location.href='dashboard.php?controller=marque&action=add1'">
					</div>

					<?php
					echo '<table border=1 class="table table-bordered table-striped">
					<tr>
						<th>Nom marque</th>
						<th>Action</th>
						
					</tr>';
					foreach ($marques as $marque) {

						echo "<tr>";
						echo "<td>". $marque->nom_marq . "</td>
						<td>
						<a href='dashboard.php?controller=marque&action=supp&id=" . $marque->id . "'>supp</a> 
							<a href='dashboard.php?controller=marque&action=edit1&id=".$marque->id."'>modif</a>
						</td>";
						echo "</tr>";
					}
					echo "</table>";
					?>
				</div>
			</section>
		</div>
	</div>
</section>