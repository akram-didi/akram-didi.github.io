

		<select name="secteur">
			<option value="">--sélectionner un secteur--</option>
				<?php
				foreach ($secteur as $unsecteur) {
					$selected = "";
					if ((isset($_POST['secteur'])) && ($_POST['secteur']==$console['id'])) {
						$selected = "selected";
					}
					echo '<option value="'.$console['id'].'" '.$selected.'>'.$console['libelle'].'</option>';
				} ?>
		</select>
		<input type="submit" value="cliquer" title="cliquer" />
	</form>




<h1 class="page-header text-center">Liste des ports</h1>
	<div class="">
		<table  id="myTable" class="table table-bordered table-striped">
			<thead>
				<th>ID</th>
				<th>Nom</th>
				<th>Adresse</th>
				<th>Code postal</th>
                <th>Ville</th>
                <th>Id lieu</th>
			</thead>
			<tbody>
            <?php foreach ($port as $unport) { ?>
					  <tr><td><?php echo $unport['id']; ?></td>
					  <td> <?php echo $unport['nom']; ?></td>
					  <td> <?php echo $unport['adresse']; ?></td>
					  <td><?php echo $unport['codePostal']; ?></td>
                      <td><?php echo $unport['ville']; ?></td>
                      <td><?php echo $unport['id_lieu']; ?></td></tr>
				<?php	} ?> 
			</tbody>
		</table>
	</div>
  




<h1 class="page-header text-center">Liste des bateaux</h1>
	<div class="">
		<table id="myTable" class="table table-bordered table-striped">
			<thead>
				<th>ID</th>
				<th>Nom</th>
				<th>Longueur</th>
				<th>Largeur</th>
                <th>Vitesse</th>
                <th>Nombre passager</th>
                <th>Nombre vehicule</th>
				<th>port depart</th>
				<th>port arriver </th>

			</thead>
			<tbody>
            <?php foreach ($bateau as $unbateau) { ?>
					  <tr><td><?php echo $unbateau['id']; ?></td>
					  <td> <?php echo $unbateau['nom']; ?><br /></td>
					  <td> <?php echo $unbateau['longueur']; ?></td>
					  <td><?php echo $unbateau['largeur']; ?></td>
                      <td><?php echo $unbateau['vitesse']; ?></td>
                      <td><?php echo $unbateau['nbPassager']; ?></td>
                      <td><?php echo $unbateau['nbVehicule']; ?></td>
					  <td><?php echo $unbateau['id_port']; ?></td>
					  <td><?php echo $unbateau['id_port_arrivee']; ?></td></tr>
				<?php	} ?> 
			</tbody>
		</table>
	</div>
  

	<h1 class="page-header text-center">Liste des secteurs</h1>
	<div class="">
		<table id="myTable" class="table table-bordered table-striped">
			<thead>
				<th>ID</th>
				<th>libelle</th>
				<th>port depart</th>
				<th>port arriver </th>

			</thead>
			<tbody>
            <?php foreach ($secteur as $unsecteur) { ?>
					  <tr><td><?php echo $unsecteur['id']; ?></td>
					  <td> <?php echo $unsecteur['libelle']; ?><br /></td>
					  <td><?php echo $unsecteur['id_port']; ?></td>
					  <td><?php echo $unsecteur['id_port_arrivee']; ?></td></tr>
				<?php	} ?> 
			</tbody>
		</table>
	</div>
  




