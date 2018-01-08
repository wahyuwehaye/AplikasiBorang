<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-8">
            <h2>
                MENGELOLA DATA <?php echo strtoupper($_SESSION['name']); ?>
                <small>UNIVERSITAS TELKOM</small>
            </h2>
            </div>
            <div class="col-sm-4">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li class="active"><i class="material-icons">text_format</i> Data <?php echo ucfirst($_SESSION['username']); ?></li>
            </ol>
            </div>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header js-sweetalert">
                    <h2>
                        ISIAN DATA <?php echo strtoupper($_SESSION['name']); ?>
                    </h2>
                    </div>
                    <!-- <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick">
                                        <option value="">-- Pilih Fakultas --</option>
                                        <?php foreach($select_fakultas as $row) { ?>
                                            <option value="<?php echo $row->nama;?>"><?php echo $row->nama;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                    </div> -->
                    <div class="body">
                    <?php
                    $CI =& get_instance();
                    $id_but = $butir[0]['id'];
                    $id_bor = $buku[0]['id'];
                    $isiannya = 2857;
                    $getbutir = '';
                    $getid434 = '';
                    $querycaributir = $CI->db->query('select id, butir from butir where id="'.$isiannya.'" and id_borang = "'.$id_bor.'"');
                    foreach ($querycaributir->result() as $row){
                        $getbutir = $row->butir;
                        $getid434 = $row->id;
                        break;
                    }
                            $getidbutir = '';
                            $querycariidbutir = $CI->db->query('select * from butir where butir="3.1.1.a" and id_borang = "'.$id_bor.'"');
                            foreach ($querycariidbutir->result() as $row){
                                $getidbutir = $row->id;
                                break;
                            }
                    // ngecek isinya unit admisi
                    $getunitadmisi = 0;
                    $queryadmisi=$CI->db->query('SELECT COUNT(id) as cekadmisi FROM isian_16kolom WHERE id_butir="'.$isiannya.'" and kolom1="needed"');
                    $cekadmisi=$queryadmisi->result_array()[0]['cekadmisi'];
                    $cekadmisi=($cekadmisi!=0)?($cekadmisi):0;
                    if ($cekadmisi>0) {
                        // cek update atau insert
                        $querycekadmisi = $CI->db->query('select * from isian_16kolom where id_butir="'.$isiannya.'" and kolom1="needed" LIMIT 1');
                        foreach ($querycekadmisi->result() as $row){
                            $getunitadmisi = $row->id;
                            break;
                        }
                    }else{
                        $getunitadmisi = 0;
                    }
                    
                    // ngecek isinya unit kemahasiswaan
                    $getunitmhs = 0;
                    $querymhs=$CI->db->query('SELECT COUNT(id) as cekmhs FROM isian_16kolom WHERE id_butir="'.$isiannya.'" and kolom6="needed"');
                    $cekmhs=$querymhs->result_array()[0]['cekmhs'];
                    $cekmhs=($cekmhs!=0)?($cekmhs):0;
                    if ($cekmhs>0) {
                        // cek update atau insert
                        $querycekmhs = $CI->db->query('select * from isian_16kolom where id_butir="'.$isiannya.'" and kolom6="needed" LIMIT 1');
                        foreach ($querycekmhs->result() as $row){
                            $getunitmhs = $row->id;
                            break;
                        }
                    }else{
                        $getunitmhs = 0;
                    }
                            
                            ?>
                        <div class="row clearfix">
                        <?php
                        if($_SESSION['role']=="Admisi"){
                            ?>
            <!-- Hover Zoom Effect -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box-2 bg-red hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">mode_edit</i>
                        </div>
                        <div class="content">
                            <div class="text">BORANG PROGRAM STUDI</div>
                            <div class="number">FAKULTAS TEKNIK ELEKTRO</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->
                <!-- Tabel Edit -->
                        <div class="header">
                            <h2>
                                Edit Tabel Butir <?php echo $butir[0]['butir'] ?>
                                <small>BORANG S1 TEKNIK ELEKTRO</small>
                                <small><?php echo $butir[0]['bakumutu'] ?></small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Daya Tampung</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Calon Mahasiswa Reguler</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Mahasiswa Baru</th>
                                        <th width="14%" style="background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Pengaturan</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Ikut Seleksi</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Lulus Seleksi</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">(1)</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                    </tr>
                                    <?php 
                                        $jum1 = 0;
                                        $jum2 = 0;
                                        $jum3 = 0;
                                        $jum4 = 0;
                                        $jum5 = 0;
                                        // $tsnya = array('TS-4','TS-3','TS-2','TS-1','TS');
                                        $tsnya = array('TS','TS-1','TS-2','TS-3','TS-4');
                                        $nil = 0;
                                        $diloop = count($dataisian);
                                    for($i=0;$i<count($dataisian);$i++){
                                        $jum1 = $jum1 + $dataisian[$i]['kolom1'];
                                        $jum2 = $jum2 + $dataisian[$i]['kolom2'];
                                        $jum3 = $jum3 + $dataisian[$i]['kolom3'];
                                        $jum4 = $jum4 + $dataisian[$i]['kolom4'];
                                        $jum5 = $jum5 + $dataisian[$i]['kolom5'];
                                        $diloop = $diloop - 1;
                                        $nil = $nil + 1;
                                    ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom1'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom2'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom3'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom4'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom5'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;">
                                            <div class="js-sweetalert">
                                                <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#update311" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                                <a id="del" onclick="deletabelbutir(<?php echo $dataisian[$diloop]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$dataisian[$diloop]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                     } ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil+1 ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">Jumlah</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum1;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum2;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum3;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum4;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum5;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">Pengaturan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        <!-- Tutup Tabel Edit -->
        <!-- Tabel Edit -->
                        <div class="header">
                            <h2>
                                Edit Tabel Butir <?php echo $butir[0]['butir'] ?>
                                <small>BORANG S1 TEKNIK TELEKOMUNIKASI</small>
                                <small><?php echo $butir[0]['bakumutu'] ?></small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Daya Tampung</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Calon Mahasiswa Reguler</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Mahasiswa Baru</th>
                                        <th width="14%" style="background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Pengaturan</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Ikut Seleksi</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Lulus Seleksi</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">(1)</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                    </tr>
                                    <?php 
                                        $jum1 = 0;
                                        $jum2 = 0;
                                        $jum3 = 0;
                                        $jum4 = 0;
                                        $jum5 = 0;
                                        // $tsnya = array('TS-4','TS-3','TS-2','TS-1','TS');
                                        $tsnya = array('TS','TS-1','TS-2','TS-3','TS-4');
                                        $nil = 0;
                                        $diloop = count($dataisian);
                                    for($i=0;$i<count($dataisian);$i++){
                                        $jum1 = $jum1 + $dataisian[$i]['kolom1'];
                                        $jum2 = $jum2 + $dataisian[$i]['kolom2'];
                                        $jum3 = $jum3 + $dataisian[$i]['kolom3'];
                                        $jum4 = $jum4 + $dataisian[$i]['kolom4'];
                                        $jum5 = $jum5 + $dataisian[$i]['kolom5'];
                                        $diloop = $diloop - 1;
                                        $nil = $nil + 1;
                                    ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom1'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom2'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom3'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom4'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom5'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;">
                                            <div class="js-sweetalert">
                                                <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#update311" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                                <a id="del" onclick="deletabelbutir(<?php echo $dataisian[$diloop]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$dataisian[$diloop]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                     } ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil+1 ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">Jumlah</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum1;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum2;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum3;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum4;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum5;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">Pengaturan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        <!-- Tutup Tabel Edit -->
        <!-- Tabel Edit -->
                        <div class="header">
                            <h2>
                                Edit Tabel Butir <?php echo $butir[0]['butir'] ?>
                                <small>BORANG S1 TEKNIK FISIKA</small>
                                <small><?php echo $butir[0]['bakumutu'] ?></small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Daya Tampung</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Calon Mahasiswa Reguler</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Mahasiswa Baru</th>
                                        <th width="14%" style="background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Pengaturan</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Ikut Seleksi</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Lulus Seleksi</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">(1)</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                    </tr>
                                    <?php 
                                        $jum1 = 0;
                                        $jum2 = 0;
                                        $jum3 = 0;
                                        $jum4 = 0;
                                        $jum5 = 0;
                                        // $tsnya = array('TS-4','TS-3','TS-2','TS-1','TS');
                                        $tsnya = array('TS','TS-1','TS-2','TS-3','TS-4');
                                        $nil = 0;
                                        $diloop = count($dataisian);
                                    for($i=0;$i<count($dataisian);$i++){
                                        $jum1 = $jum1 + $dataisian[$i]['kolom1'];
                                        $jum2 = $jum2 + $dataisian[$i]['kolom2'];
                                        $jum3 = $jum3 + $dataisian[$i]['kolom3'];
                                        $jum4 = $jum4 + $dataisian[$i]['kolom4'];
                                        $jum5 = $jum5 + $dataisian[$i]['kolom5'];
                                        $diloop = $diloop - 1;
                                        $nil = $nil + 1;
                                    ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom1'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom2'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom3'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom4'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom5'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;">
                                            <div class="js-sweetalert">
                                                <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#update311" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                                <a id="del" onclick="deletabelbutir(<?php echo $dataisian[$diloop]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$dataisian[$diloop]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                     } ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil+1 ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">Jumlah</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum1;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum2;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum3;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum4;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum5;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">Pengaturan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        <!-- Tutup Tabel Edit -->
        <!-- Tabel Edit -->
                        <div class="header">
                            <h2>
                                Edit Tabel Butir <?php echo $butir[0]['butir'] ?>
                                <small>BORANG S1 SISTEM KOMPUTER</small>
                                <small><?php echo $butir[0]['bakumutu'] ?></small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Daya Tampung</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Calon Mahasiswa Reguler</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Mahasiswa Baru</th>
                                        <th width="14%" style="background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Pengaturan</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Ikut Seleksi</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Lulus Seleksi</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">(1)</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                    </tr>
                                    <?php 
                                        $jum1 = 0;
                                        $jum2 = 0;
                                        $jum3 = 0;
                                        $jum4 = 0;
                                        $jum5 = 0;
                                        // $tsnya = array('TS-4','TS-3','TS-2','TS-1','TS');
                                        $tsnya = array('TS','TS-1','TS-2','TS-3','TS-4');
                                        $nil = 0;
                                        $diloop = count($dataisian);
                                    for($i=0;$i<count($dataisian);$i++){
                                        $jum1 = $jum1 + $dataisian[$i]['kolom1'];
                                        $jum2 = $jum2 + $dataisian[$i]['kolom2'];
                                        $jum3 = $jum3 + $dataisian[$i]['kolom3'];
                                        $jum4 = $jum4 + $dataisian[$i]['kolom4'];
                                        $jum5 = $jum5 + $dataisian[$i]['kolom5'];
                                        $diloop = $diloop - 1;
                                        $nil = $nil + 1;
                                    ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom1'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom2'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom3'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom4'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom5'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;">
                                            <div class="js-sweetalert">
                                                <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#update311" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                                <a id="del" onclick="deletabelbutir(<?php echo $dataisian[$diloop]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$dataisian[$diloop]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                     } ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil+1 ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">Jumlah</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum1;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum2;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum3;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum4;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum5;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">Pengaturan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        <!-- Tutup Tabel Edit -->
        <!-- Tabel Edit -->
                        <div class="header">
                            <h2>
                                Edit Tabel Butir <?php echo $butir[0]['butir'] ?>
                                <small>BORANG S2 TEKNIK ELEKTRO</small>
                                <small><?php echo $butir[0]['bakumutu'] ?></small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Daya Tampung</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Calon Mahasiswa Reguler</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Mahasiswa Baru</th>
                                        <th width="14%" style="background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Pengaturan</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Ikut Seleksi</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Lulus Seleksi</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">(1)</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                    </tr>
                                    <?php 
                                        $jum1 = 0;
                                        $jum2 = 0;
                                        $jum3 = 0;
                                        $jum4 = 0;
                                        $jum5 = 0;
                                        // $tsnya = array('TS-4','TS-3','TS-2','TS-1','TS');
                                        $tsnya = array('TS','TS-1','TS-2','TS-3','TS-4');
                                        $nil = 0;
                                        $diloop = count($dataisian);
                                    for($i=0;$i<count($dataisian);$i++){
                                        $jum1 = $jum1 + $dataisian[$i]['kolom1'];
                                        $jum2 = $jum2 + $dataisian[$i]['kolom2'];
                                        $jum3 = $jum3 + $dataisian[$i]['kolom3'];
                                        $jum4 = $jum4 + $dataisian[$i]['kolom4'];
                                        $jum5 = $jum5 + $dataisian[$i]['kolom5'];
                                        $diloop = $diloop - 1;
                                        $nil = $nil + 1;
                                    ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom1'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom2'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom3'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom4'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom5'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;">
                                            <div class="js-sweetalert">
                                                <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#update311" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                                <a id="del" onclick="deletabelbutir(<?php echo $dataisian[$diloop]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$dataisian[$diloop]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                     } ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil+1 ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">Jumlah</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum1;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum2;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum3;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum4;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum5;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">Pengaturan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        <!-- Tutup Tabel Edit -->
                    <?php
                        }
                        if ($_SESSION['role']=="Kemahasiswaan") {
                            ?>
                <!-- Hover Zoom Effect -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box-2 bg-red hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">mode_edit</i>
                        </div>
                        <div class="content">
                            <div class="text">BORANG PROGRAM STUDI</div>
                            <div class="number">FAKULTAS TEKNIK ELEKTRO</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->
                        <!-- Tabel Edit -->
                        <div class="header">
                            <h2>
                                Edit Tabel Butir <?php echo $butir[0]['butir'] ?>
                                <small>BORANG S1 TEKNIK ELEKTRO</small>
                                <small><?php echo $butir[0]['bakumutu'] ?></small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Total Mahasiswa</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Lulusan</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">IPK Lulusan Reguler</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">Presentase Lulusan Reguler dengan IPK :</th>
                                        <th width="14%" style="background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Pengaturan</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Min</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Rat</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Mak</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&lt; 2,75</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">2,75-3,00</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&gt; 3,50</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">(1)</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(7)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(8)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(9)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(10)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(11)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                    </tr>
                                    <?php 
                                        $jum6 = 0;
                                        $jum7 = 0;
                                        $jum8 = 0;
                                        $jum9 = 0;
                                        $jum10 = 0;
                                        $jum11 = 0;
                                        $jum12 = 0;
                                        $jum13 = 0;
                                        $jum14 = 0;
                                        $jum15 = 0;
                                        // $tsnya = array('TS-4','TS-3','TS-2','TS-1','TS');
                                        $tsnya = array('TS','TS-1','TS-2','TS-3','TS-4');
                                        $nil = 0;
                                        $diloop = count($dataisian);
                                    for($i=0;$i<count($dataisian);$i++){
                                        $jum6 = $jum6 + $dataisian[$i]['kolom6'];
                                        $jum7 = $jum7 + $dataisian[$i]['kolom7'];
                                        $jum8 = $jum8 + $dataisian[$i]['kolom8'];
                                        $jum9 = $jum9 + $dataisian[$i]['kolom9'];
                                        $jum10 = ($jum10 + $dataisian[$i]['kolom10']);
                                        $jum11 = ($jum11 + $dataisian[$i]['kolom11']);
                                        $jum12 = ($jum12 + $dataisian[$i]['kolom12']);
                                        $jum13 = ($jum13 + $dataisian[$i]['kolom13']);
                                        $jum14 = ($jum14 + $dataisian[$i]['kolom14']);
                                        $jum15 = ($jum15 + $dataisian[$i]['kolom15']);
                                        $diloop = $diloop - 1;
                                        $nil = $nil + 1;
                                    ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom6'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom7'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom8'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom9'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom10'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom11'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom12'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom13'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom14'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom15'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;">
                                            <div class="js-sweetalert">
                                                <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#update311" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                                <a id="del" onclick="deletabelbutir(<?php echo $dataisian[$diloop]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$dataisian[$diloop]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                     } ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil+1 ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">Jumlah</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum6;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum7;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum8;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum9;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum10/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum11/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum12/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum13/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum14/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum15/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">Pengaturan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        <!-- Tutup Tabel Edit -->
        <!-- Tabel Edit -->
                        <div class="header">
                            <h2>
                                Edit Tabel Butir <?php echo $butir[0]['butir'] ?>
                                <small>BORANG S1 TEKNIK TELEKOMUNIKASI</small>
                                <small><?php echo $butir[0]['bakumutu'] ?></small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Total Mahasiswa</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Lulusan</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">IPK Lulusan Reguler</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">Presentase Lulusan Reguler dengan IPK :</th>
                                        <th width="14%" style="background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Pengaturan</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Min</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Rat</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Mak</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&lt; 2,75</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">2,75-3,00</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&gt; 3,50</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">(1)</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(7)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(8)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(9)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(10)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(11)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                    </tr>
                                    <?php 
                                        $jum6 = 0;
                                        $jum7 = 0;
                                        $jum8 = 0;
                                        $jum9 = 0;
                                        $jum10 = 0;
                                        $jum11 = 0;
                                        $jum12 = 0;
                                        $jum13 = 0;
                                        $jum14 = 0;
                                        $jum15 = 0;
                                        // $tsnya = array('TS-4','TS-3','TS-2','TS-1','TS');
                                        $tsnya = array('TS','TS-1','TS-2','TS-3','TS-4');
                                        $nil = 0;
                                        $diloop = count($dataisian);
                                    for($i=0;$i<count($dataisian);$i++){
                                        $jum6 = $jum6 + $dataisian[$i]['kolom6'];
                                        $jum7 = $jum7 + $dataisian[$i]['kolom7'];
                                        $jum8 = $jum8 + $dataisian[$i]['kolom8'];
                                        $jum9 = $jum9 + $dataisian[$i]['kolom9'];
                                        $jum10 = ($jum10 + $dataisian[$i]['kolom10']);
                                        $jum11 = ($jum11 + $dataisian[$i]['kolom11']);
                                        $jum12 = ($jum12 + $dataisian[$i]['kolom12']);
                                        $jum13 = ($jum13 + $dataisian[$i]['kolom13']);
                                        $jum14 = ($jum14 + $dataisian[$i]['kolom14']);
                                        $jum15 = ($jum15 + $dataisian[$i]['kolom15']);
                                        $diloop = $diloop - 1;
                                        $nil = $nil + 1;
                                    ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom6'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom7'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom8'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom9'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom10'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom11'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom12'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom13'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom14'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom15'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;">
                                            <div class="js-sweetalert">
                                                <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#update311" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                                <a id="del" onclick="deletabelbutir(<?php echo $dataisian[$diloop]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$dataisian[$diloop]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                     } ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil+1 ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">Jumlah</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum6;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum7;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum8;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum9;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum10/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum11/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum12/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum13/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum14/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum15/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">Pengaturan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        <!-- Tutup Tabel Edit -->
        <!-- Tabel Edit -->
                        <div class="header">
                            <h2>
                                Edit Tabel Butir <?php echo $butir[0]['butir'] ?>
                                <small>BORANG S1 TEKNIK FISIKA</small>
                                <small><?php echo $butir[0]['bakumutu'] ?></small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Total Mahasiswa</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Lulusan</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">IPK Lulusan Reguler</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">Presentase Lulusan Reguler dengan IPK :</th>
                                        <th width="14%" style="background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Pengaturan</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Min</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Rat</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Mak</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&lt; 2,75</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">2,75-3,00</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&gt; 3,50</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">(1)</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(7)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(8)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(9)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(10)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(11)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                    </tr>
                                    <?php 
                                        $jum6 = 0;
                                        $jum7 = 0;
                                        $jum8 = 0;
                                        $jum9 = 0;
                                        $jum10 = 0;
                                        $jum11 = 0;
                                        $jum12 = 0;
                                        $jum13 = 0;
                                        $jum14 = 0;
                                        $jum15 = 0;
                                        // $tsnya = array('TS-4','TS-3','TS-2','TS-1','TS');
                                        $tsnya = array('TS','TS-1','TS-2','TS-3','TS-4');
                                        $nil = 0;
                                        $diloop = count($dataisian);
                                    for($i=0;$i<count($dataisian);$i++){
                                        $jum6 = $jum6 + $dataisian[$i]['kolom6'];
                                        $jum7 = $jum7 + $dataisian[$i]['kolom7'];
                                        $jum8 = $jum8 + $dataisian[$i]['kolom8'];
                                        $jum9 = $jum9 + $dataisian[$i]['kolom9'];
                                        $jum10 = ($jum10 + $dataisian[$i]['kolom10']);
                                        $jum11 = ($jum11 + $dataisian[$i]['kolom11']);
                                        $jum12 = ($jum12 + $dataisian[$i]['kolom12']);
                                        $jum13 = ($jum13 + $dataisian[$i]['kolom13']);
                                        $jum14 = ($jum14 + $dataisian[$i]['kolom14']);
                                        $jum15 = ($jum15 + $dataisian[$i]['kolom15']);
                                        $diloop = $diloop - 1;
                                        $nil = $nil + 1;
                                    ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom6'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom7'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom8'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom9'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom10'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom11'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom12'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom13'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom14'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom15'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;">
                                            <div class="js-sweetalert">
                                                <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#update311" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                                <a id="del" onclick="deletabelbutir(<?php echo $dataisian[$diloop]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$dataisian[$diloop]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                     } ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil+1 ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">Jumlah</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum6;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum7;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum8;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum9;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum10/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum11/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum12/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum13/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum14/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum15/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">Pengaturan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        <!-- Tutup Tabel Edit -->
        <!-- Tabel Edit -->
                        <div class="header">
                            <h2>
                                Edit Tabel Butir <?php echo $butir[0]['butir'] ?>
                                <small>BORANG S1 SISTEM KOMPUTER</small>
                                <small><?php echo $butir[0]['bakumutu'] ?></small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Total Mahasiswa</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Lulusan</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">IPK Lulusan Reguler</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">Presentase Lulusan Reguler dengan IPK :</th>
                                        <th width="14%" style="background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Pengaturan</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Min</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Rat</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Mak</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&lt; 2,75</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">2,75-3,00</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&gt; 3,50</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">(1)</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(7)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(8)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(9)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(10)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(11)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                    </tr>
                                    <?php 
                                        $jum6 = 0;
                                        $jum7 = 0;
                                        $jum8 = 0;
                                        $jum9 = 0;
                                        $jum10 = 0;
                                        $jum11 = 0;
                                        $jum12 = 0;
                                        $jum13 = 0;
                                        $jum14 = 0;
                                        $jum15 = 0;
                                        // $tsnya = array('TS-4','TS-3','TS-2','TS-1','TS');
                                        $tsnya = array('TS','TS-1','TS-2','TS-3','TS-4');
                                        $nil = 0;
                                        $diloop = count($dataisian);
                                    for($i=0;$i<count($dataisian);$i++){
                                        $jum6 = $jum6 + $dataisian[$i]['kolom6'];
                                        $jum7 = $jum7 + $dataisian[$i]['kolom7'];
                                        $jum8 = $jum8 + $dataisian[$i]['kolom8'];
                                        $jum9 = $jum9 + $dataisian[$i]['kolom9'];
                                        $jum10 = ($jum10 + $dataisian[$i]['kolom10']);
                                        $jum11 = ($jum11 + $dataisian[$i]['kolom11']);
                                        $jum12 = ($jum12 + $dataisian[$i]['kolom12']);
                                        $jum13 = ($jum13 + $dataisian[$i]['kolom13']);
                                        $jum14 = ($jum14 + $dataisian[$i]['kolom14']);
                                        $jum15 = ($jum15 + $dataisian[$i]['kolom15']);
                                        $diloop = $diloop - 1;
                                        $nil = $nil + 1;
                                    ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom6'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom7'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom8'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom9'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom10'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom11'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom12'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom13'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom14'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom15'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;">
                                            <div class="js-sweetalert">
                                                <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#update311" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                                <a id="del" onclick="deletabelbutir(<?php echo $dataisian[$diloop]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$dataisian[$diloop]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                     } ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil+1 ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">Jumlah</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum6;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum7;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum8;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum9;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum10/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum11/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum12/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum13/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum14/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum15/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">Pengaturan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        <!-- Tutup Tabel Edit -->
        <!-- Tabel Edit -->
                        <div class="header">
                            <h2>
                                Edit Tabel Butir <?php echo $butir[0]['butir'] ?>
                                <small>BORANG S2 TEKNIK ELEKTRO</small>
                                <small><?php echo $butir[0]['bakumutu'] ?></small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Total Mahasiswa</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Lulusan</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">IPK Lulusan Reguler</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">Presentase Lulusan Reguler dengan IPK :</th>
                                        <th width="14%" style="background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Pengaturan</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler bukan Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Min</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Rat</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Mak</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&lt; 2,75</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">2,75-3,00</th>
                                        <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&gt; 3,50</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">(1)</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(7)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(8)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(9)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(10)</strong></td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><strong>(11)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>#</strong></td>
                                    </tr>
                                    <?php 
                                        $jum6 = 0;
                                        $jum7 = 0;
                                        $jum8 = 0;
                                        $jum9 = 0;
                                        $jum10 = 0;
                                        $jum11 = 0;
                                        $jum12 = 0;
                                        $jum13 = 0;
                                        $jum14 = 0;
                                        $jum15 = 0;
                                        // $tsnya = array('TS-4','TS-3','TS-2','TS-1','TS');
                                        $tsnya = array('TS','TS-1','TS-2','TS-3','TS-4');
                                        $nil = 0;
                                        $diloop = count($dataisian);
                                    for($i=0;$i<count($dataisian);$i++){
                                        $jum6 = $jum6 + $dataisian[$i]['kolom6'];
                                        $jum7 = $jum7 + $dataisian[$i]['kolom7'];
                                        $jum8 = $jum8 + $dataisian[$i]['kolom8'];
                                        $jum9 = $jum9 + $dataisian[$i]['kolom9'];
                                        $jum10 = ($jum10 + $dataisian[$i]['kolom10']);
                                        $jum11 = ($jum11 + $dataisian[$i]['kolom11']);
                                        $jum12 = ($jum12 + $dataisian[$i]['kolom12']);
                                        $jum13 = ($jum13 + $dataisian[$i]['kolom13']);
                                        $jum14 = ($jum14 + $dataisian[$i]['kolom14']);
                                        $jum15 = ($jum15 + $dataisian[$i]['kolom15']);
                                        $diloop = $diloop - 1;
                                        $nil = $nil + 1;
                                    ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom6'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom7'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom8'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom9'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom10'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom11'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom12'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom13'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom14'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian[$diloop]['kolom15'] ?>&nbsp;</td>
                                        <td style="width: 53px; text-align: center; height: 13px;">
                                            <div class="js-sweetalert">
                                                <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#update311" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                                                <a id="del" onclick="deletabelbutir(<?php echo $dataisian[$diloop]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$dataisian[$diloop]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$diloop]['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                     } ?>
                                    <tr style="height: 13px;">
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil+1 ?>&nbsp;</td>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">Jumlah</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum6;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum7;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum8;?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum9;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum10/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum11/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum12/$nil;?>&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum13/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum14/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;"><?php echo $jum15/$nil;?> %&nbsp;</td>
                                        <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">Pengaturan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        <!-- Tutup Tabel Edit -->
                                    <?php
                                }
                        ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>

<!-- Jquery Core Js -->
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

<!-- Editable Table Plugin Js -->
<script src="<?php echo base_url();?>assets/plugins/editable-table/mindmup-editabletable.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<!-- Sweet Alert Plugin Js -->
<script src="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

    <!-- Ckeditor -->
    <script src="<?php echo base_url();?>assets/plugins/ckeditor/ckeditor.js"></script>

<!-- TinyMCE -->
    <script src="<?php echo base_url();?>assets/plugins/tinymce/tinymce.js"></script>

<!-- Dropzone Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/dropzone/dropzone.js"></script>

<!-- Custom Js -->
<script src="<?php echo base_url();?>assets/js/admin.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/tables/editable-table.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/tables/jquery-datatable.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/ui/tooltips-popovers.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/ui/modals.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/ui/tooltips-popovers.js"></script>

<!-- Demo Js -->
<script src="<?php echo base_url();?>assets/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/ui/dialogs.js"></script>
<!-- <script src="<?php echo base_url();?>assets/js/pages/forms/editors.js"></script> -->

<!-- //session untuk menampilkan pesan Sukses Input Data -->
<?php
    if (isset($_SESSION['suksesinput'])) {
?>
    <body onload='swal({title: "Selamat!!!",
                        text: "Data Berhasil Tersimpan",
                        // timer: 3000,
                        type: "success",
                        showConfirmButton: true });'>
<?php
    unset($_SESSION['suksesinput']);
    }
?>

<!-- gagal input dengan isian yang salah -->
<?php
    if (isset($_SESSION['gagalinputrbt'])) {
?>
    <body onload='swal({title: "Gagal Input!!!",
                        text: "Data Gagal Tersimpan",
                        // timer: 3000,
                        type: "error",
                        showConfirmButton: true });'>
<?php
    unset($_SESSION['gagalinputrbt']);
    }
?>

<!-- //session untuk menampilkan pesan Sukses Update Data -->
<?php
    if (isset($_SESSION['suksesupdate'])) {
?>
    <body onload='swal({title: "Selamat!!!",
                        text: "Data Berhasil Terupdate",
                        // timer: 3000,
                        type: "success",
                        showConfirmButton: true });'>
<?php
    unset($_SESSION['suksesupdate']);
    }
?>

<script>
  function toTitleCase(str)
  {
      return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
  }

  function errorinput(){
    isi1 = document.getElementById('k3_311').value;
    isi2 = document.getElementById('k4_311').value;
    isi3 = document.getElementById('k2_311').value;
    nil1 = parseInt(isi1);
    nil2 = parseInt(isi2);
    nil3 = parseInt(isi3);
    hasil = nil1 + nil2;
    hasil1 = nil3 + nil1;
    if (nil2 > nil1) {
        swal("Error", "Jumlah Mahasiswa Baru Reguler Bukan Transfer Tidak Boleh Lebih Besar dari Jumlah Calon Mahasiswa Reguler yang Lulus Seleksi", "error");
    }

    if (nil1 > nil3) {
        swal("Error", "Jumlah Calon Mahasiswa Reguler yang Lulus Seleksi Tidak Boleh Lebih Besar dari Jumlah Calon Mahasiswa Reguler yang Ikut Seleksi", "error");
    }
  }

  function errorinputikutseleksi(){
    isi1 = document.getElementById('k2_31').value;
    isi2 = document.getElementById('k3_31').value;
    nil1 = parseInt(isi1);
    nil2 = parseInt(isi2);
    hasil = nil1 + nil2;
    if (nil2 > nil1) {
        swal("Error", "Jumlah Calon Mahasiswa Reguler yang Lulus Seleksi Tidak Boleh Lebih Besar dari Jumlah Calon Mahasiswa Reguler yang Ikut Seleksi", "error");
    }
  }

  function errorinputkoma(){
    isi1 = document.getElementById('k10_311').value;
    isi2 = document.getElementById('k11_311').value;
    isi3 = document.getElementById('k12_311').value;
    isi4 = document.getElementById('k13_311').value;
    isi5 = document.getElementById('k14_311').value;
    isi6 = document.getElementById('k15_311').value;
    nil1 = parseFloat(isi1);
    nil2 = parseFloat(isi2);
    nil3 = parseFloat(isi3);
    nil4 = parseFloat(isi4);
    nil5 = parseFloat(isi5);
    nil6 = parseFloat(isi6);
    desimal1 = nil1.toFixed(2);
    desimal2 = nil2.toFixed(2);
    desimal3 = nil3.toFixed(2);
    desimal4 = nil4.toFixed(2);
    desimal5 = nil5.toFixed(2);
    desimal6 = nil6.toFixed(2);
    cek1 = isi1.search(',');
    cek2 = isi2.search(',');
    cek3 = isi3.search(',');
    if ((cek1 > 0) || (cek2 > 0) || (cek3 > 0)) {
        swal("Error", "Tidak Boleh Memasukkan Koma", "error");
    }

    if ((desimal1 > 2.75) && (desimal4 > 0)) {
        swal("Error", "Persentase Lulusan Reguler dengan IPK < 2.75 tidak sesuai dengan Minimal IPK Lulusan Reguler", "error");
    }

    if ((desimal3 < 3.50) && (desimal6 > 0)) {
        swal("Error", "Persentase Lulusan Reguler dengan IPK > 3.50 tidak sesuai dengan Maksimal IPK Lulusan Reguler", "error");
    }
  }
</script>

</body>

</html>
