<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-6">
            <h2>DASHBOARD</h2>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li class="active"><i class="material-icons">home</i> Home</li>
            </ol>
            </div>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue-grey hover-expand-effect hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL FAKULTAS</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo(count($fakultas)) ?>" data-speed="1500" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">beenhere</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL BORANG</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo(count($prodi)) ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-blue hover-expand-effect hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">done_all</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL JENIS BORANG</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo(count($borang)) ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">receipt</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL BUTIR BORANG</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo(count($butir)) ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        <!-- baris ke dua -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-indigo hover-expand-effect hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">face</i>
                    </div>
                    <div class="content">
                        <div class="text">JUMLAH USER</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo(count($users)) ?>" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-teal hover-expand-effect hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">equalizer</i>
                    </div>
                    <div class="content">
                        <div class="text">JENIS BORANG TERISI</div>
                        <div class="number"><?php 
                            $persentaseisi = (count($jumlahisi)!=0)?(round(((count($jumlahisi))/(count($borang)))*100,2)):0;
                            echo number_format($persentaseisi, 2, ',', '.').' %';
                        ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">warning</i>
                    </div>
                    <div class="content">
                        <div class="text">JENIS BORANG KOSONG</div>
                        <div class="number">
                            <?php
                                $kosong = (count($borang))-(count($jumlahisi));
                                $persentasekosong = ($kosong!=0)?(round($kosong/count($borang)*100,2)):0;
                                echo number_format($persentasekosong, 2, ',', '.').' %';
                             ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-purple hover-expand-effect hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">spellcheck</i>
                    </div>
                    <div class="content">
                        <div class="text">BUTIR BORANG TERISI</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo(count($isian)) ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->
        <!-- <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>CPU USAGE (%)</h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <span class="m-r-10 font-12">REAL TIME</span>
                                    <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                </div>
                            </div>
                        </div>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="real_time_chart" class="dashboard-flot-chart"></div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- #END# CPU Usage -->

        <!-- Tabel Info -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                            <h2>MONITORING PENGISIAN BORANG</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Fakultas</th>
                                            <th>Nama Borang</th>
                                            <th>Jenis Borang</th>
                                            <th width="35%">Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (count($dashboard)>0) {
                                                $no=1;
                                                for($i=0;$i<count($dashboard);$i++){
                                            ?>
                                            <tr>
                                                    <?php
                                                        $CI =& get_instance();
                                                        $queryJumIsian=$CI->db->query('SELECT COUNT(id) AS jumlahisian FROM isian_16kolom WHERE id_butir IN (SELECT id FROM butir WHERE id_borang IN (SELECT id FROM borang WHERE id = '.$dashboard[$i]['idborang'].'))');
                                                        $jumlahisian=$queryJumIsian->result_array()[0]['jumlahisian']; 

                                                        $queryJumTotal=$CI->db->query('SELECT COUNT(id) AS jumlahTotal FROM butir WHERE id_borang IN (SELECT id FROM borang WHERE id = '.$dashboard[$i]['idborang'].')');
                                                        $jumlahTotal=$queryJumTotal->result_array()[0]['jumlahTotal'];
                                                        $presentase=($jumlahisian!=0)?($jumlahisian/$jumlahTotal)*100:0;
                                                    ?>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $dashboard[$i]['namafakultas'] ?></td>
                                                <td><?php echo $dashboard[$i]['namaprodi'] ?></td>
                                                <td><?php echo $dashboard[$i]['jenisborang'] ?></td>
                                                <td>
                                                    <div class="progress" data-toggle="tooltip" data-placement="top" title="<?php echo number_format($presentase, 2, '.', '.'); ?>%">
                                                        <div class="progress-bar bg-cyan progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: <?php echo number_format($presentase, 2, '.', '.'); ?>%">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $no=$no+1; }
                                        }else{
                                            ?>
                                            <td colspan="5" style="text-align: center; background-color: #ff5339; ">Tidak Ada Data</td>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- End Tabel Info -->
        </div>
    </div>
</section>
