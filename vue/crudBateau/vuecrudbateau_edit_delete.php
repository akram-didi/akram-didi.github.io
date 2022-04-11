<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $unbateau['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Modifier bateau</h4></center>
            </div>
            <div class="modal-body">
				<form method="POST" action="?action=crudbateau">
					<div class="container-fluid">
						<input type="hidden" class="form-control" name="id" value="<?php echo $unbateau['id']; ?>">
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label modal-label">Nom:</label>
								<label class="control-label modal-label">longueur:</label>
								<label class="control-label modal-label">largeur:</label>
								<label class="control-label modal-label">nbPassager:</label>
								<label class="control-label modal-label">nbVehicule:</label>

							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nom" value="<?php echo $unbateau['nom']; ?>">
								<input type="text" class="form-control" name="longueur" value="<?php echo $unbateau['longueur']; ?>">
								<input type="text" class="form-control" name="largeur" value="<?php echo $unbateau['largeur']; ?>">
								<input type="text" class="form-control" name="vitesse" value="<?php echo $unbateau['vitesse']; ?>">
								<input type="text" class="form-control" name="nbPassager" value="<?php echo $unbateau['nbPassager']; ?>">
								<input type="text" class="form-control" name="nbVehicule" value="<?php echo $unbateau['nbVehicule']; ?>">
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
<div class="modal fade" id="delete_<?php echo $unbateau['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supprimer bateau</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sure de vouloir supprimer le bateau <?php echo $unbateau['nom']; ?></p>
			</div>
            <div class="modal-footer">
				<form method="POST" action="?action=crudbateau">
					<input type="hidden" class="form-control" name="id" value="<?php echo $unbateau['id']; ?>">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
					<button type="submit" name="supr" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Oui</a>
				</form>
            </div>

        </div>
    </div>
</div>