<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $unport['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Modifier port</h4></center>
            </div>
            <div class="modal-body">
				<form method="POST" action="?action=crudport">
					<div class="container-fluid">
						<input type="hidden" class="form-control" name="id" value="<?php echo $unport['id']; ?>">
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label modal-label">Nom:</label>
								<label class="control-label modal-label">adresse:</label>
								<label class="control-label modal-label">codePostal:</label>
								<label class="control-label modal-label">ville:</label>
								<label class="control-label modal-label">id_lieu:</label>
							
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nom" value="<?php echo $unport['nom']; ?>">
								<input type="text" class="form-control" name="adresse" value="<?php echo $unport['adresse']; ?>">
								<input type="text" class="form-control" name="codePostal" value="<?php echo $unport['codePostal']; ?>">
								<input type="text" class="form-control" name="ville" value="<?php echo $unport['ville']; ?>">
								<input type="text" class="form-control" name="id_lieu" value="<?php echo $unport['id_lieu']; ?>">
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
<div class="modal fade" id="delete_<?php echo $unport['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supprimer bateau</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sure de vouloir supprimer le bateau <?php echo $unport['nom']; ?></p>
			</div>
            <div class="modal-footer">
				<form method="POST" action="?action=crudport">
					<input type="hidden" class="form-control" name="id" value="<?php echo $unport['id']; ?>">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
					<button type="submit" name="supr" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Oui</a>
				</form>
            </div>

        </div>
    </div>
</div>