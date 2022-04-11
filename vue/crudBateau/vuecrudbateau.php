



<h1 class="page-header text-center">CRUD Bateaux</h1>
	
		<div class="">
		<?php
       
			if(isset($_SESSION['error'])){
				echo
				"
				<div class='alert alert-danger text-center'>
					<button class='close'>&times;</button>
					".$_SESSION['error']."
				</div>
				";
				unset($_SESSION['error']);
			}
			if(isset($_SESSION['success'])){
				echo
				"
				<div class='alert alert-success text-center'>
					<button class='close'>&times;</button>
					".$_SESSION['success']."
				</div>
				";
				unset($_SESSION['success']);
			}
		?>
		</div>
		<div class="row">
			<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter</a>
		</div>
		<div class="height10">
		</div>

		
	<div class="">
		<table id="myTable" class="table table-bordered table-striped">
			<thead>
				<th>ID</th>
				<th>Nom</th>
				<th>Longueur</th>
				<th>Largeur</th>
				<th>Vitesse</th>
				<th>Nb Passager</th>
				<th>Nb Vehicule</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					
					
					foreach ($bateau as $unbateau){
						echo 
						"<tr>
							<td>".$unbateau['id']."</td>
							<td>".$unbateau['nom']."</td>
							<td>".$unbateau['longueur']."</td>
							<td>".$unbateau['largeur']."</td>
							<td>".$unbateau['vitesse']."</td>
							<td>".$unbateau['nbPassager']."</td>
							<td>".$unbateau['nbVehicule']."</td>
							<td>
								<a href='#edit_".$unbateau['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Modifier</a>
								<a href='#delete_".$unbateau['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Supprimer</a>
							</td>
						</tr>";
						include("vue/crudBateau/vuecrudbateau_edit_delete.php");
					}
				?>
			</tbody>
		</table>
	</div>


    

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>



<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Ajouter un nouveau bateau</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="?action=crudbateau">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nom:</label>
				
						<label class="control-label modal-label">longueur:</label>
				
						<label class="control-label modal-label">largeur:</label>
						<label class="control-label modal-label">vitesse:</label>
						<label class="control-label modal-label">nbPassager:</label>
						<label class="control-label modal-label">nbVehicule:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom" required>
				
						<input type="text" class="form-control" name="longueur" required>
						<input type="text" class="form-control" name="largeur" required>
						<input type="text" class="form-control" name="vitesse" required>
						<input type="text" class="form-control" name="nbPassager" required>
						<input type="text" class="form-control" name="nbVehicule" required>
						
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Enregistrer</a>
			</form>
            </div>

        </div>
    </div>
</div>

