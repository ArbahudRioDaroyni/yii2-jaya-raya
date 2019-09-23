<!-- Classic Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?= $modalHeader ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">clear</i>
				</button>
			</div>
			<div class="modal-body">
                <?= $this->renderAjax('@app/views/kasbon-pembelian/_form.php') ?>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->