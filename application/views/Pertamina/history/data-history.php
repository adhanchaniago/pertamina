<div class="row">
<<<<<<< HEAD
  <div class="col-md-8 col-md-offset-2 col-xs-12"><?php echo $this->session->flashdata('alert'); ?></div>
  <div class="col-md-12">
  
  <div class="box box-primary">
  <div class="box-header">
      <h3 class="box-title">Data History</h3>
  </div>

  <!-- HAK AKSES -->  
    <div class="box-body">
    </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
					<th  style="width: 50px;">No</th>
					<th >Tanggal</th>
					<th >Nama Pekerjaan</th>
					<th >Nama Pengawas</th>
					<th  style="width: 150px;">Pekerja</th>
					<!-- <th >Nama Kontraktor</th> -->
					<th >Plan Target</th>
					<th >Actual Target</th>
					<th >Pencapaian</th>
					<th >Jam Mulai</th>
					<th >Jam Selesai</th>
					<th >Aktivitas</th>
					<th >Keterangan</th>
					<th ></th>
				
				</tr>
              </thead>
              <tbody>
              <?php foreach ($this->mhistory->data() as $key => $value): ?>
				<tr>
					
					<td ><?php echo ++$key ?></td>
					<td ><?php echo date_id($value->tanggal) ?></td>
					<td ><?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->nama_pekerjaan) ?></td>
					<td ><?php echo ucwords($this->mhistory->get_pengawas($value->pengawas)->nama_pegawai) ?></td>
					<td class="text-left">
					<?php 
                    $array =  explode(",", $value->id_pegawai); 
                    foreach ($array as $key => $values) : ?>
                    <li class="text-left"><?php echo ucwords($this->mpekerjaan_final->get_pengawas($values)->nama_pegawai) ?></li>
                    <?php endforeach; ?>
					</td>
					<!-- <td ><?php echo ucwords($this->mhistory->data_kontraktor($value->id_kontraktor)->nama) ?></td> -->
					<td ><?php echo $value->plan_target ?></td>
					<td ><?php echo $value->actual_target ?></td>
					<td ><?php echo ceil($value->actual_target /  $value->plan_target * 100) ?></td>
					<td ><?php echo substr($value->jam_mulai, 0,5) ?></td>
					<td ><?php echo substr($value->jam_selesai, 0,5) ?></td>
					<td><?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->keterangan) ?></td>
					<td><?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->detail_keterangan) ?></td>
					<td class="text-left">
					<a href="<?php echo site_url("pekerjaan_final/update/{$value->id}") ?>" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Sunting"><i class="fa fa-pencil"></i></a>
					<a href="javascript:void(0)" id="delete-history" data-id="<?php echo $value->id ?>" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus">
              		<i class="fa fa-trash-o"></i>
              		</a>
					</td>

					
				</tr>
				<?php endforeach ?>
				
            </table>
        </div>
         
    </div>
=======
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<div class="col-md-7">
					<h3 class="box-title">Data History</h3>
				</div>
			</div>
			<div class="box-body">
				<table class="table table-hover table-bordered" >
					<thead class="bg-silver">
						<tr>
							<th class="text-center" style="width: 50px;">No</th>
							<th class="text-center">Tanggal</th>
							<th class="text-center">Nama Pekerjaan</th>
							<th class="text-center">Nama Pengawas</th>
							<th class="text-center">Pekerja</th>
							<!-- <th class="text-center">Nama Kontraktor</th> -->
							<th class="text-center">Plan Target</th>
							<th class="text-center">Actual Target</th>
							<th class="text-center">Pencapaian</th>
							<th class="text-center">Jam Mulai</th>
							<th class="text-center">Jam Selesai</th>
							<th class="text-center">Aktivitas</th>
							<th class="text-center">Keterangan</th>
							<th class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($this->mhistory->data() as $key => $value): ?>
						<tr>
							
							<td class="text-center"><?php echo ++$key ?></td>
							<td class="text-center"><?php echo date_id($value->tanggal) ?></td>
							<td class="text-center"><?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->nama_pekerjaan) ?></td>
							<td class="text-center"><?php echo ucwords($this->mhistory->get_pengawas($value->pengawas)->nama_pegawai) ?></td>
							<td class="text-center">
							<?php 
		                    $array =  explode(",", $value->id_pegawai); 
		                    foreach ($array as $key => $values) : ?>
		                    <li class="text-left"><?php echo ucwords($this->mpekerjaan_final->get_pengawas($values)->nama_pegawai) ?></li>
		                    <?php endforeach; ?>
							</td>
							<!-- <td class="text-center"><?php echo ucwords($this->mhistory->data_kontraktor($value->id_kontraktor)->nama) ?></td> -->
							<td class="text-center"><?php echo $value->plan_target ?></td>
							<td class="text-center"><?php echo $value->actual_target ?></td>
							<td class="text-center"><?php echo ceil($value->actual_target /  $value->plan_target * 100) ?></td>
							<td class="text-center"><?php echo substr($value->jam_mulai, 0,5) ?></td>
							<td class="text-center"><?php echo substr($value->jam_selesai, 0,5) ?></td>
							<td><?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->keterangan) ?></td>
							<td><?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->detail_keterangan) ?></td>
							<td class="text-center">
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
>>>>>>> dfabadbe0b8d30b6518064c045a9d2793360ca9f
</div>
  
</div>

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