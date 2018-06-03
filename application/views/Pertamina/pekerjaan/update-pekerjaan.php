
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
					<label for="nama" class="control-label col-md-3 col-xs-12">Nomor Pekerjaan: <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="text" name="no_pekerjaan" class="form-control" value="<?php echo $get->no_pekerjaan; ?>" placeholder="Nomor Pekerjaan">
						<p class="help-block"><?php echo form_error('no_pekerjaan', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="level" class="control-label col-md-3 col-xs-12">Nama Pekerjaan: <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="text" name="nama_pekerjaan" class="form-control" value="<?php echo $get->nama_pekerjaan ?>" placeholder="Nama Pekerjaan">
						<p class="help-block"><?php echo form_error('nama_pekerjaan', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
                    <label for="deskripsi" class="control-label col-md-3 col-xs-12">Keterangan : <strong class="text-red">*</strong></label>
                   	<div class="col-md-8">
                   		<textarea name="keterangan" rows="6" class="form-control"   placeholder="Keterangan"><?php echo $get->keterangan ?></textarea>
                   		<p class="help-block"><?php echo form_error('keterangan', '<small class="text-red">', '</small>'); ?></p>      
                    </div>
                </div>
			</div>

			<div class="box-footer with-border">
				<div class="col-md-4 col-xs-5">
					<a href="<?php echo site_url('Pekerjaan') ?>" class="btn btn-app pull-right">
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