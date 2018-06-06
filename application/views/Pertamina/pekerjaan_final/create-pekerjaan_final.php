
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
					<label for="nama" class="control-label col-md-3 col-xs-12">Nama Pekerjaan : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<select name="id_pekerjaan" class="form-control select2">
							<option value="">-- PILIH --</option>
							<?php foreach ($get_pekerjaan as $key => $value) :?>
							<option value="<?php echo $value->id; ?>"><?php echo $value->nama_pekerjaan ?></option>
						<?php endforeach; ?>
						</select>
						<p class="help-block"><?php echo form_error('id_pekerjaan', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="level" class="control-label col-md-3 col-xs-12">Nama Pegawai  : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<select name="id_pegawai[]" class="form-control select2" multiple="multiple">
							<option value="">-- PILIH --</option>
							<?php foreach ($this->mpekerjaan_final->get_pegawai('pekerja') as $key => $value) :?>
							<option value="<?php echo $value->id_pegawai; ?>"><?php echo $value->nama_pegawai ?></option>
						<?php endforeach; ?>
						</select>
						<p class="help-block"><?php echo form_error('id_pegawai[]', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="level" class="control-label col-md-3 col-xs-12">Nama Pengawas  : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<select name="pengawas" class="form-control select2">
							<option value="">-- PILIH --</option>
							<?php foreach ($this->mpekerjaan_final->get_pegawai('pengawas') as $key => $value) :?>
							<option value="<?php echo $value->id_pegawai; ?>"><?php echo $value->nama_pegawai ?></option>
						<?php endforeach; ?>
						</select>
						<p class="help-block"><?php echo form_error('pengawas', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="level" class="control-label col-md-3 col-xs-12">Tanggal  : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
					<div class="input-group">
				    	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				    	<input type="text" class="form-control" name="tanggal" id="datepicker" value="<?php echo set_value('tgl_lahir'); ?>" placeholder="Ex : 1980-12-31">
				  	</div>
					<p class="help-block"><?php echo form_error('tanggal', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="level" class="control-label col-md-3 col-xs-12">Nama Kontraktor  : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<select name="id_kontraktor" class="form-control select2">
							<option value="">-- PILIH --</option>
							<?php foreach ($get as $key => $value) :?>
							<option value="<?php echo $value->id; ?>"><?php echo $value->nama ?></option>
							<?php endforeach; ?>
						</select>
						<p class="help-block"><?php echo form_error('id_kontraktor', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>

				<div class="form-group">
					<label for="level" class="control-label col-md-3 col-xs-12">Plan Target: <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="text" name="plan_target" class="form-control" value="<?php echo set_value('plan_target'); ?>">
						<p class="help-block"><?php echo form_error('plan_target', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				              
                <div class="form-group ">
					<label for="level" class="control-label col-md-3 col-xs-12">Jam Mulai  : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
					<div class="input-group bootstrap-timepicker">
				    	<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
				    	<input type="text" class="form-control timepicker" name="jam_mulai" id="timepicker" value="<?php echo set_value('jam_mulai'); ?>">
				  	</div>
					<p class="help-block"><?php echo form_error('jam_mulai', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div> 

				 <div class="form-group ">
					<label for="level" class="control-label col-md-3 col-xs-12">Jam Selesai  : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
					<div class="input-group bootstrap-timepicker">
				    	<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
				    	<input type="text" class="form-control timepicker" name="jam_selesai" id="timepicker" value="<?php echo set_value('jam_selesai'); ?>">
				  	</div>
					<p class="help-block"><?php echo form_error('jam_selesai', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>

				<div class="form-group">
					<label for="agama" class="control-label col-md-3 col-xs-12">Status : <strong class="text-red">*</strong></label>
					<div class="col-md-4">
						<select name="status" class="form-control select2">
							<option value="">-- PILIH --</option>
							<option value="opened" <?php if(set_value('status')=='opened') echo "selected"; ?>>Opened</option>
							<option value="closed" <?php if(set_value('status')=='closed') echo "selected"; ?>>Closed</option>
						</select>
						<p class="help-block"><?php echo form_error('status', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>           

			</div>

			<div class="box-footer with-border">
				<div class="col-md-4 col-xs-5">
					<a href="<?php echo site_url('pekerjaan_final') ?>" class="btn btn-app pull-right">
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
</div>a