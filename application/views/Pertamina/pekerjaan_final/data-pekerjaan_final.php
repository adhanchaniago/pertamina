<!-- <pre><?php print_r($this->mpekerjaan_final->data()) ?></pre> -->
<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12"><?php echo $this->session->flashdata('alert'); ?></div>
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<div class="col-md-7">
					<h3 class="box-title">Today's work Data</h3>
				</div>
			</div>
			<div class="box-body">
				<div class="pull-right">
					<a href="<?php echo site_url('pekerjaan_final/create') ?>" class="btn btn-warning hvr-shadow btn-flat btn-sm"><i class="fa fa-plus"></i> Add</a>
				</div>
			</div>

		<?php echo form_open(current_url(), array('method' => 'GET')); ?>
			<div class="box-header">
				<div class="col-md-12">
					<div class="col-md-4">
						<input type="text" class="form-control" name="query" placeholder="Pencarian...." value="<?php echo $this->input->get('query') ?>">
					</div>
					<div class="col-md-3">
						<button type="submit" class="btn btn-warning hvr-shadow btn-flat btn-sm" id="search"><i class="fa fa-search"></i> Cari Data</button>
						<a href="<?php echo base_url('pekerjaan_final') ?>" class="btn btn-warning hvr-shadow btn-flat btn-sm" id="reset-form"><i class="fa fa-times"></i> Reset</a>
					</div>
					<div class="col-md-3 pull-right">
						<a href="#" class="btn btn-warning hvr-shadow btn-flat btn-sm btn-print" id="reset-form"><i class="fa fa-print"></i> Cetak</a>
					</div>
				</div>
			</div>
			<?php echo form_close(); ?>

			<div class="box-body">
				<table class="table table-hover table-bordered" >
					<thead class="bg-silver">
						<tr>
							<th class="text-center" style="width: 50px;">No</th>
							<th class="text-center">Employment </th>
							<!-- <th class="text-center">date</th> -->
							<th class="text-center">Contractor</th>
							<!-- <th class="text-center">Plan Target</th>
							<th class="text-center">Actual Target</th> -->
							<th class="text-center">Today Activities </th>
							<th class="text-center">Start</th>
							<th class="text-center">Finish</th>
							<!-- <th class="text-center">Status</th> -->
							<th class="text-center">Information</th>
							<th class="text-center"></th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($this->mpekerjaan_final->data() as $key => $value): ?>
						<tr>
							
							<td class="text-center"><?php echo ++$key ?></td>

							<td class="text-center">
							<?php 
		                    $array =  explode(",", $value->id_pegawai); 
		                    foreach ($array as $key => $values) : ?>
		                    <li class="text-left"><?php echo ucwords($this->mpekerjaan_final->get_pengawas($values)->nama_pegawai) ?></li>
		                    <?php endforeach; ?>
							</td>
							<!-- <td class="text-center"><?php echo date_id($value->tanggal) ?></td> -->
							<td class="text-center"><?php echo ucwords($this->mpekerjaan_final->data_kontraktor($value->id_kontraktor)->nama) ?></td>
							<td class="text-center"><?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->nama_pekerjaan) ?></td>
							<!-- <td class="text-center"><?php echo $value->plan_target ?></td>
							<td class="text-center"><?php echo $value->actual_target ?></td> -->
							<td class="text-center"><?php echo $value->jam_mulai ?></td>
							<td class="text-center"><?php echo $value->jam_selesai ?></td>
							<!-- <td class="text-center"><?php echo $value->status ?></td> -->
							<td class="text-center">
								<ol>
									<li><?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->keterangan) ?></li>
									<li><?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->detail_keterangan) ?></li>
								</ol>
							</td>
							<td class="text-center"><?php if($value->jam_selesai >= ('16:01')): ?><span class="label label-success">Lembur<span><?php endif ?></td>

							<td >
							
							<a href="#" class="btn btn-xs btn-primary" data-toggle="modal"  data-target="#modal-default" data-placement="top" title="Sunting"><i class="glyphicon glyphicon-new-window"></i></a>
							<a href="<?php echo site_url("pekerjaan_final/update/{$value->id}") ?>" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Sunting"><i class="fa fa-pencil"></i></a>
							<a href="javascript:void(0)" id="delete-pekerjaan_final" data-id="<?php echo $value->id ?>" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus">
                      		<i class="fa fa-trash-o"></i>
                      		</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>		
		</div>
	</div>
</div>


<!-- HAK AKSES -->
<div class="modal fade in modal-danger" id="modal-delete" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-warning"></i> Perhatian!</h4>
                <span>Hapus data ini dari sistem?</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
                <a id="delete-yes" class="btn btn-outline"> Ya </a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Input Data</h4>
      </div>

<?php  
/**
 * Open Form
 *
 * @var string
 **/
echo form_open(site_url("pekerjaan_final/update_model/{$value->id}"), array('class' => 'form-horizontal'));
?>

      <div class="modal-body">
        <div class="form-group">
			<label for="level" class="control-label col-md-3 col-xs-12">Actual Target : <strong class="text-red">*</strong></label>
			<div class="modal-body">
				<div class="col-md-6">
				<div class="input-group" style="margin-top: -20px;">
			    	<input type="text" class="form-control" name="actual_target" value="<?php echo $value->actual_target ?>">
			    	<span class="input-group-addon"><i class="fa fa-percent"></i></span>
			  	</div>
			  	<p class="help-block"><?php echo form_error('actual_target', '<small class="text-red">', '</small>'); ?></p>
			  	</div>
			</div>
		</div>
		<div class="form-group">
			<label for="level" class="control-label col-md-3 col-xs-12">Status : <strong class="text-red">*</strong></label>
			<div class="modal-body">
					<div class="col-md-8">
						<div class="input-group" style="margin-top: -20px;">
						<select name="status" class="form-control">
							<option value="">-- PILIH --</option>
							<option value="opened" <?php if($value->status=='opened') echo "selected"; ?>>Opened</option>
							<option value="closed" <?php if($value->status=='closed') echo "selected"; ?>>Closed</option>
						</select>
						<p class="help-block"><?php echo form_error('status', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
			</div>
		</div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="ion ion-reply"></i> Kembali</button>
        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        <?php  
// End Form
echo form_close();
?>
      </div>
    </div>
  </div>
</div>
