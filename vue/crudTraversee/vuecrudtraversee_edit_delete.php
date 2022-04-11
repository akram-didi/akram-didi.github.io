<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $unetraversee['numero']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Modifier une traversee</h4></center>
            </div>
            <div class="modal-body">
				<form method="POST" action="?action=crudtraversee">
					<div class="container-fluid">
						<input type="hidden" class="form-control" name="numero" value="<?php echo $unetraversee['numero']; ?>">
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label modal-label">dateDep:</label>
								<label class="control-label modal-label">idBateau:</label>
								<label class="control-label modal-label">idLiaison:</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="dateDep" value="<?php echo $unetraversee['dateDep']; ?>">
								<input type="text" class="form-control" name="idBateau" value="<?php echo $unetraversee['idBateau']; ?>">
								<input type="text" class="form-control" name="idLiaison" value="<?php echo $unetraversee['idLiaison']; ?>">
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
<div class="modal fade" id="delete_<?php echo $unetraversee['numero']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supprimer bateau</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sure de vouloir supprimer la traversee numero  <?php echo $unetraversee['numero']; ?></p>
			</div>
            <div class="modal-footer">
				<form method="POST" action="?action=crudtraversee">
					<input type="hidden" class="form-control" name="numero" value="<?php echo $unetraversee['numero']; ?>">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
					<button type="submit" name="supr" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Oui</a>
				</form>
            </div>

        </div>
    </div>
</div>