
<?php foreach ($this->mpekerjaan_final->data() as $key => $value): ?>

<div class="carousel-item <?php if (++$key == 1): ?>
  active
<?php endif ?> " style="background-image: url('#')">

  <div class="carousel-caption d-md-block slider_item carousel" data-interval="20000">
  	<div class="tittle" >
  		  <div class="title-p">PEKERJAAN HARI INI <?php echo $value->status; ?></div>
  		  <div class="date-picker"><?php echo date_id($value->tanggal) ?><!-- <?php include('date_picker.php') ?> --></div>
  	</div>
      	<div class="to-do">
          
      		<table border="0" class="tb_item" align="center">
        			<tr valign="top">
         				<td colspan="5"><h2><font face="Arial Black"><?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->nama_pekerjaan) ?> </font></h2></td>
        			</tr>

        			<tr align="left" valign="top">
         				<td width="200">No. Pekerjaan</td>
         				<td>:</td>
         				<td width="400"><?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->no_pekerjaan) ?></td>
         				<td width="250">Progress Sebelumnya</td>
         				<td width="200"> : <?php echo $value->progress; ?> %</td>
        			</tr>

        			<tr align="left" valign="top">
         				<td>Pelaksana</td>
         				<td>:</td>
         				<td><?php echo ucwords($this->mpekerjaan_final->data_kontraktor($value->id_kontraktor)->nama) ?></td>
         				<td>Plan Target</td>
         				<td>: <?php echo $value->plan_target ?> %</td>
        			</tr>

        			<tr align="left" valign="top">
         				<td>Pengawas</td>
         				<td>:&emsp; </td>
         				<td><?php echo ucwords($this->mpekerjaan_final->get_pengawas($value->pengawas)->nama_pegawai) ?></td>
         				<td>Mulai</td>
         				<td>: <?php echo substr($value->jam_mulai, 0,5) ?> WIB</td>
        			</tr>

          	 	 	<tr align="left" valign="top" valign="top" >
             				<td>Pekerja</td>
             				<td>: &emsp;</td>
             				<td>
     				       <?php 
                            $array =  explode(",", $value->id_pegawai); 
                            foreach ($array as $key => $values) : ?>
                            <li><?php echo ucwords($this->mpekerjaan_final->get_pengawas($values)->nama_pegawai) ?></li>
                            <?php endforeach; ?>
             				</td>
             				<td >Selesai <br> Durasi <br>Jenis Anggaran</td>
             				<td>: <?php echo substr($value->jam_selesai, 0,5) ?> WIB
                            <br>: <?php date_default_timezone_set('Asia/Jakarta');
                            $awal  = date_create($value->jam_mulai);
                            $akhir = date_create($value->jam_selesai); // waktu sekarang, pukul 06:13
                            $diff  = date_diff( $akhir, $awal );
                            echo $diff->h; // Hasil: 5 ?> Jam
                            <br>: <?php echo $value->jenis_anggaran; ?> 
                        </td>
          	  		</tr>
            	 	 	<tr valign="top">
            		  		<td colspan="5">
            		  			<table border="1" width="100%">
            	  				<tr align="left" valign="top">
            	  					<td width="50%">&emsp; Pekerjaan Hari Ini : <br>
            	  						
            	  							<?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->keterangan) ?>
            	  					
            	  					</td>
            	  					<td width="50%">&emsp; Keterangan : <br>
            	  						
            	  							<?php echo ucwords($this->mpekerjaan_final->get_edit($value->id_pekerjaan)->detail_keterangan) ?>
            	  					
            	  					</td>
            	  				</tr>
            	  			</table>
            	  		</td>
            	  	</tr>
       		</table>
       	</div>

    </div>
 
</div>

<?php endforeach ?>
