

<h1 class="page-header text-center">CRUD port</h1>
	<div class="row">
		<div class="row">
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
	</div>	
		
	<div class="">
		<table id="myTable" class="table table-bordered table-striped">
			<thead>
				<th>ID</th>
				<th>Nom</th>
				<th>adresse</th>
				<th>Codepostal</th>
				<th>Ville</th>
				<th>id_lieu</th>
			</thead>
			<tbody>
				<?php
					
					
					foreach ($port as $unport){
						echo 
						"<tr>
							<td>".$unport['id']."</td>
							<td>".$unport['nom']."</td>
							<td>".$unport['adresse']."</td>
							<td>".$unport['codePostal']."</td>
							<td>".$unport['ville']."</td>
							<td>".$unport['id_lieu']."</td>
							
							<td>
								<a href='#edit_".$unport['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Modifier</a>
								<a href='#delete_".$unport['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Supprimer</a>
							</td>
						</tr>";
						include("vue/crudport/vuecrudport_edit_delete.php");
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
			<form method="POST" action="?action=crudport">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nom:</label>
                        <label class="control-label modal-label">Adresse:</label>
                        <label class="control-label modal-label">Code Postal:</label>
                        <label class="control-label modal-label">ville:</label>
                        <label class="control-label modal-label">id-lieu:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom" required>
                        <input type="text" class="form-control" name="adresse" required>
                        <input type="text" class="form-control" name="codePostal" required>
                        <input type="text" class="form-control" name="ville" required>
                        <input type="text" class="form-control" name="id_lieu" required>
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