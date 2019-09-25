<!-- Classic Modal -->
<div class="modal fade" id="modalAlert" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?= $modalHeader ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">clear</i>
				</button>
			</div>
			<div class="modal-body">
				<p><?= $modalBody ?>
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-link"><?= $modalBtnAccept ?></button>
				<button type="button" class="btn btn-danger btn-link" data-dismiss="modal"><?= $modalBtnDecline ?></button>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->