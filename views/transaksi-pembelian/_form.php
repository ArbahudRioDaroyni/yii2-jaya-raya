<?php
app\assets\MaterialKitDateTimePickerAsset::register($this);
app\assets\MaterialKitSelect2Asset::register($this);
?>

<form id="form">
	<div class="row">

		<div class="col-lg-6">
			<h3 id="content-h3" class="card-title">Mitra</h3>
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Nama</label>
				<input type="text" class="form-control" id="exampleInput1">
				<span class="bmd-help">Block Helper.</span>
			</div>
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Telepon</label>
				<input type="text" class="form-control" id="exampleInput1">
				<span class="bmd-help">Block Helper.</span>
			</div>
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Alamat</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				<span class="bmd-help">Block Helper.</span>
			</div>
		</div>

		<div class="col-lg-6">
			<h3 id="content-h3" class="card-title">Petani</h3>
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Nama</label>
				<input type="text" class="form-control" id="exampleInput1">
				<span class="bmd-help">Block Helper.</span>
			</div>
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Telepon</label>
				<input type="text" class="form-control" id="exampleInput1">
				<span class="bmd-help">Block Helper.</span>
			</div>
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Alamat</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				<span class="bmd-help">Block Helper.</span>
			</div>
		</div>

		<div class="col-lg-12">
			<h3 id="content-h3" class="card-title">Detail Invoice</h3>
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Tanggal Jatuh Tempo</label>
				<input type="text" class="form-control datetimepicker" value="10/05/2016"/>
				<span class="bmd-help">Block Helper.</span>
			</div>
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Luas lahan</label>
				<input type="text" class="form-control" id="exampleInput1">
				<span class="bmd-help">Block Helper.</span>
			</div>
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Jumlah Pohon</label>
				<input type="text" class="form-control" id="exampleInput1">
				<span class="bmd-help">Block Helper.</span>
			</div>		
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Koordinat</label>
				<input type="text" class="form-control" id="exampleInput1">
				<span class="bmd-help">Block Helper.</span>
			</div>		
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Jumlah Estimasi Kopra</label>
				<input type="text" class="form-control" id="exampleInput1">
				<span class="bmd-help">Block Helper.</span>
			</div>
			<div class="form-group">
				<label for="exampleInput1" class="bmd-label-floating">Select2</label>
				<select class="select2" id="select2" name="state">
					<option></option>
					<option value="AL">Alabama</option>
					<option value="WY">Wyoming</option>
				</select>
			</div>
		</div>
		

	</div>
	<div class="footer" style="margin-top: 12px;">
		<button type="submit" class="btn btn-success"><i class="material-icons">done</i> Submit</button>
		<button type="submit" class="btn btn-danger"><i class="material-icons">close</i> Batal</button>
	</div>
</form>

	</div>
</div>

<?php $script = <<< JS
	// javascript for init
	$('.datetimepicker').datetimepicker({
		icons: {
			time: "fa fa-clock-o",
			date: "fa fa-calendar",
			up: "fa fa-chevron-up",
			down: "fa fa-chevron-down",
			previous: 'fa fa-chevron-left',
			next: 'fa fa-chevron-right',
			today: 'fa fa-screenshot',
			clear: 'fa fa-trash',
			close: 'fa fa-remove'
		}
	});
	//Initialize Select2 Elements
	$('.select2').select2({
		placeholder: "Select an option",
		allowClear: true,
	});
JS;
$this->registerJs($script); ?> 