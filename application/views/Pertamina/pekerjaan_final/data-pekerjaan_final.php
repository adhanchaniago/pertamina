<!-- <pre><?php print_r(date('H:i:s')) ?></pre> -->
<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12"><?php echo $this->session->flashdata('alert'); ?></div>
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<div class="col-md-7">
					<h3 class="box-title">Today's work Data</h3>
				</div>
			</div>
<?php  
/**
 * Start Form Pencarian
 *
 * @return string
 **/
echo form_open(current_url(), array('method' => 'get'));
?>
			<div class="box-body">
				<div class="col-md-4">
					Tampilkan 
					<select name="per_page" class="form-control input-sm" style="width:60px; display: inline-block;" onchange="window.location = '<?php echo site_url('pegawai?per_page='); ?>' + this.value + '&query=<?php echo $this->input->get('query'); ?>&village=<?php echo $this->input->get('village'); ?>';">
					<?php  
					/**
					 * Loop 10 to 100
					 * Guna untuk limit data yang ditampilkan
					 * 
					 * @var 10
					 **/
					$start = 20; 
					while($start <= 100) :
						$selected = ($start == $this->input->get('per_page')) ? 'selected' : '';
						echo "<option value='{$start}' " . $selected . ">{$start}</option>";

						$start += 10;
					endwhile;
					?>
					</select>
					per halaman
				</div>
				<div class="pull-right">
				
					<a href="<?php echo site_url('pekerjaan_final/create') ?>" class="btn btn-warning hvr-shadow btn-flat btn-sm"><i class="fa fa-plus"></i> Add</a>
				
				</div>
			</div>

			<div class="box-body">
				<div class="col-md-2">
				    <div class="form-group">
				        <label>Level :</label>
				        <select name="level" class="form-control input-sm">
				        	<option value="">-- PILIH --</option>
				        	<!-- <option value="Admin" <?php if($this->input->get('level')=='Admin') echo 'selected'; ?>>Admin</option>
				        	<option value="Username" <?php if($this->input->get('level')=='Username') echo 'selected'; ?>>Username</option> -->
				        </select>	
				    </div>
				</div>

				<div class="col-md-3">
				    <div class="form-group">
				        <label>Kata Kunci :</label>
				        <input type="text" name="query" class="form-control input-sm" value="<?php echo $this->input->get('query') ?>" placeholder="Username / Nama Lengkap / Email . . . ">
				    </div>
				</div>
				<div class="col-md-3">
				    <div class="form-group">
                    <button type="submit" class="btn btn-warning hvr-shadow top"><i class="fa fa-filter"></i> Filter</button>
                    <a href="<?php echo site_url('konteraktor') ?>" class="btn btn-warning hvr-shadow top" style="margin-left: 10px;"><i class="fa fa-times"></i> Reset</a>
				    </div>
				</div>
			</div>
<?php  
// End form pencarian
echo form_close();
?>
			<div class="box-body">
				<table class="table table-hover table-bordered" >
					<thead class="bg-silver">
						<tr>
							<th class="text-center" style="width: 50px;">No</th>
							<th class="text-center">Name of Supervisor</th>
							<th class="text-center">date</th>
							<th class="text-center">Contractor Name</th>
							<th class="text-center">Plan Target</th>
							<th class="text-center">Actual Target</th>
							<th class="text-center">Start Time</th>
							<th class="text-center">Finish Time</th>
							<th class="text-center">Status</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($this->mpekerjaan_final->data() as $key => $value): ?>
						<tr>
							
							<td class="text-center"><?php echo ++$key ?></td>
							<td class="text-center"><?php echo ucwords($this->mpekerjaan_final->get_pengawas($value->pengawas)->nama_pegawai) ?></td>
							<td class="text-center"><?php echo date_id($value->tanggal) ?></td>
							<td class="text-center"><?php echo ucwords($this->mpekerjaan_final->data_kontraktor($value->id_kontraktor)->nama) ?></td>
							<td class="text-center"><?php echo $value->plan_target ?></td>
							<td class="text-center"><?php echo $value->actual_target ?></td>
							<td class="text-center"><?php echo $value->jam_mulai ?></td>
							<td class="text-center"><?php echo $value->jam_selesai ?></td>
							<td class="text-center"><?php echo $value->status ?></td>
							<td class="text-center"><?php if($value->jam_selesai >= date('H:i:s')): ?><span class="label label-success">Lembur<span><?php endif ?></td>	
							<td>
							
							<a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-id="<?php echo $value->id ?>" data-target="#modal-default" data-placement="top" title="Sunting"><i class="glyphicon glyphicon-new-window"></i></a>
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
