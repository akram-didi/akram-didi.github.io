<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $uneliaison['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Modifier bateau</h4></center>
            </div>
            <div class="modal-body">
				<form method="POST" action="?action=crudliaison">
					<div class="container-fluid">
						<input type="hidden" class="form-control" name="id" value="<?php echo $uneliaison['id']; ?>">
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label modal-label">id port:</label>
								<label class="control-label modal-label">id port arivee:</label>
								<label class="control-label modal-label">id secteur:</label>
								<label class="control-label modal-label">dMilles:</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="id_port" value="<?php echo $uneliaison['id_port']; ?>">
								<input type="text" class="form-control" name="id_port_arrivee" value="<?php echo $uneliaison['id_port_arrivee']; ?>">
								<input type="text" class="form-control" name="id_Secteur" value="<?php echo $uneliaison['id_Secteur']; ?>">
								<input type="text" class="form-control" name="dMilles" value="<?php echo $uneliaison['dMilles']; ?>">
							</div>
						</div>
					</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
					<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Modifier</a>
				</div>
			</form>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $uneliaison['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supprimer bateau</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sure de vouloir supprimer le bateau <?php echo $uneliaison['id_port']; ?></p>
			</div>
            <div class="modal-footer">
				<form method="POST" action="?action=crudliaison">
					<input type="hidden" class="form-control" name="id" value="<?php echo $uneliaison['id']; ?>">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
					<button type="submit" name="supr" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Oui</a>
				</form>
            </div>

        </div>
    </div>
</div>