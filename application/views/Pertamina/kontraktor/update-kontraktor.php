<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12"><?php echo $this->session->flashdata('alert'); ?></div>
	<div class="col-md-8 col-md-offset-2 col-xs-12">
		<div class="box box-primary">
<?php  
/**
 * Open Form
 *
 * @var string
 **/
echo form_open(current_url(), array('class' => 'form-horizontal'));
?>
			<div class="box-body" style="margin-top: 10px;">
			
				<div class="form-group">
					<label for="nama" class="control-label col-md-3 col-xs-12">Nama : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="text" name="nama" class="form-control" value="<?php echo $get->nama; ?>">
						<p class="help-block"><?php echo form_error('nama', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="level" class="control-label col-md-3 col-xs-12">Jenis : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="text" name="jenis" class="form-control" value="<?php echo $get->jenis; ?>">
						<p class="help-block"><?php echo form_error('jenis', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="level" class="control-label col-md-3 col-xs-12">Direktur: <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="text" name="direktur" class="form-control" value="<?php echo $get->direktur; ?>">
						<p class="help-block"><?php echo form_error('direktur', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>

				<div class="form-group">
					<label for="level" class="control-label col-md-3 col-xs-12">Seketaris: <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="text" name="sekretaris" class="form-control" value="<?php echo $get->sekretaris; ?>">
						<p class="help-block"><?php echo form_error('sekretaris', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>

				<div class="form-group">
					<label for="level" class="control-label col-md-3 col-xs-12">HSSE: <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="text" name="HSSE" class="form-control" value="<?php echo $get->HSSE; ?>">
						<p class="help-block"><?php echo form_error('HSSE', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
			</div>

			<div class="box-footer with-border">
				<div class="col-md-4 col-xs-5">
					<a href="<?php echo site_url('Konteraktor') ?>" class="btn btn-app pull-right">
						<i class="ion ion-reply"></i> Kembali
					</a>
				</div>
				<div class="col-md-6 col-xs-6">
					<button type="submit" class="btn btn-app pull-right">
						<i class="fa fa-save"></i> Simpan
					</button>
				</div>
			</div>
			<div class="box-footer with-border">
					<small><strong class="text-red">*</strong>	Field wajib diisi!</small> <br>
					<small><strong class="text-blue">*</strong>	Field Optional</small>
			</div>
<?php  
// End Form
echo form_close();
?>
		</div>
	</div>
</div>