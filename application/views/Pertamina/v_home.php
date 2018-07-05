 <div class="row">
    <div class="col-md-3">
        <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Pekerja</span>
                <span class="info-box-number"><?php echo $this->mpekerjaan_final->home('pekerja') ?> <small>Orang</small></span>
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span>Selanjutnya...</span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-child"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Pengawas</span>
                <span class="info-box-number"><?php echo $this->mpekerjaan_final->home('pengawas') ?> <small>Orang</small></span>
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span>Selanjutnya...</span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box bg-red">
            <span class="info-box-icon"><i class="glyphicon glyphicon-road"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Kontraktor </span>
                <span class="info-box-number"><?php echo $this->db->count_all('kontraktor'); ?> <small>Kontraktor</small></span>
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span>Selanjutnya...</span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Pekerjaan</span>
                <span class="info-box-number"><?php echo $this->db->count_all('pekerjaan'); ?> <small>Pekerjaan</small></span>
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span>Selanjutnya...</span>
            </div>
        </div>
    </div>
     
</div>


