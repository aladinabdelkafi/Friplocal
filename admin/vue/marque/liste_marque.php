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

					<table id='marqueTable' border=1 class="table table-bordered table-striped">

						<thead>
							<tr>
								<th>Nom marque</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>

				</div>
			</section>
		</div>
	</div>
</section>

<script type="text/javascript">
	loadMarques();

	function loadMarques() {
		var xhttp = new XMLHttpRequest();

		xhttp.open("GET", "loadMarques.php", true);

		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {

				var response = JSON.parse(this.responseText);
				
				var marqueTable =
					document.getElementById("marqueTable").getElementsByTagName("tbody")[0];

				marqueTable.innerHTML = "";

				for (var key in response) {
					if (response.hasOwnProperty(key)) {
						var val = response[key];

						var NewRow = marqueTable.insertRow(0);
						var nom_marq = NewRow.insertCell(0);
						var action = NewRow.insertCell(1);

						nom_marq.innerHTML = val['nom_marq'];
						action.innerHTML = "<a href='dashboard.php?controller=marque&action=supp&id=" + val['id'] + "'>supprimer</a>    &nbsp;&nbsp;&nbsp;  <a href = 'dashboard.php?controller=marque&action=edit1&id="+ val['id'] +"'> modifier </a>"

					}
				}

			}
		};

		xhttp.send();
	}
</script>