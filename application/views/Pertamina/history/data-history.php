<div class="row">
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
							<!-- <th class="text-center">Status</th> -->
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
							<td class="text-center"><?php echo $value->plan_target + $value->actual_target; ?></td>
							<td class="text-center"><?php echo $value->jam_mulai ?></td>
							<td class="text-center"><?php echo $value->jam_selesai ?></td>
							<!-- <td class="text-center"><?php echo $value->status ?></td> -->
							
						</tr>
						<?php endforeach ?>
						
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
