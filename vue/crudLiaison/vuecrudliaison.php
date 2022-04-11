<h1 class="page-header text-center">CRUD trajet</h1>
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
				<th>id port</th>
				<th>id port arrivee </th>
				<th>id secteur</th>
				<th>dMilles</th>
			</thead>
			<tbody>
				<?php
					
					
					foreach ($liaison as $uneliaison){
						echo 
						"<tr>
							<td>".$uneliaison['id']."</td>
							<td>".$uneliaison['id_port']."</td>
							<td>".$uneliaison['id_port_arrivee']."</td>
							<td>".$uneliaison['id_Secteur']."</td>
							<td>".$uneliaison['dMilles']."</td>
							<td>
								<a href='#edit_".$uneliaison['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Modifier</a>
								<a href='#delete_".$uneliaison['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Supprimer</a>
							</td>
						</tr>";
						include("vue/crudLiaison/vuecrudliaison_edit_delete.php");
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
			<form method="POST" action="?action=crudliaison">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">id port:</label>
                        <label class="control-label modal-label">id port arrivee:</label>
						<label class="control-label modal-label">id secteur:</label>
						<label class="control-label modal-label">dMilles:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_port" required>
                        <input type="text" class="form-control" name="id_port_arrivee" required>
						<input type="text" class="form-control" name="id_Secteur" required>
						<input type="text" class="form-control" name="dMilles" required>
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