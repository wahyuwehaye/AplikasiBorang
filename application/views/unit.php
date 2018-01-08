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
                        <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2>
                        <h2 class="card-inside-title">Tuliskan data seluruh mahasiswa reguler(1) dan lulusannya dalam lima tahun terakhir dengan mengikuti format berikut:</h2>
                        <div class="row clearfix">
                        <?php
                        if($_SESSION['role']=="Admisi"){
                            if ($getunitadmisi>0) {
                            ?>
                                <form method="POST" action="<?php echo base_url()?>C_unit/updateisian311admisi">
                            <?php
                            }else{
                            ?>
                                <form method="POST" action="<?php echo base_url()?>C_unit/ngisi311admisi">
                            <?php
                            }
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
                        <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK ELEKTRO
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitadmisi; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannya; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutir; ?>" />
                                        <b>Daya Tampung</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom1_311" id="k1_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Calon Mahasiswa Reguler :</b></br>
                                        <b>Ikut Seleksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom2_311" id="k2_311" onkeyup="errorinputikutseleksi()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Lulus Seleksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom3_311" id="k3_311" onkeyup="errorinput()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Mahasiswa Baru :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom4_311" id="k4_311" onkeyup="errorinput()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom5_311" id="k5_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK TELEKOMUNIKASI
                            </h2>
                        </div>
                        <div class="body">
                            <input type="hidden" name="id311" id="id311" value="<?php echo $getunitadmisi; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannya; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutir; ?>" />
                                        <b>Daya Tampung</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom1_311" id="k1_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Calon Mahasiswa Reguler :</b></br>
                                        <b>Ikut Seleksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom2_311" id="k2_311" onkeyup="errorinputikutseleksi()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Lulus Seleksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom3_311" id="k3_311" onkeyup="errorinput()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Mahasiswa Baru :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom4_311" id="k4_311" onkeyup="errorinput()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom5_311" id="k5_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK FISIKA
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitadmisi; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannya; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutir; ?>" />
                                        <b>Daya Tampung</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom1_311" id="k1_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Calon Mahasiswa Reguler :</b></br>
                                        <b>Ikut Seleksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom2_311" id="k2_311" onkeyup="errorinputikutseleksi()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Lulus Seleksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom3_311" id="k3_311" onkeyup="errorinput()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Mahasiswa Baru :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom4_311" id="k4_311" onkeyup="errorinput()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom5_311" id="k5_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 SISTEM KOMPUTER
                            </h2>
                        </div>
                        <div class="body">
                                        <input type="hidden" name="id311" id="id311" value="<?php echo $getunitadmisi; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannya; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutir; ?>" />
                                        <b>Daya Tampung</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom1_311" id="k1_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Calon Mahasiswa Reguler :</b></br>
                                        <b>Ikut Seleksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom2_311" id="k2_311" onkeyup="errorinputikutseleksi()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Lulus Seleksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom3_311" id="k3_311" onkeyup="errorinput()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Mahasiswa Baru :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom4_311" id="k4_311" onkeyup="errorinput()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom5_311" id="k5_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S2 TEKNIK ELEKTRO
                            </h2>
                        </div>
                        <div class="body">
                                        <input type="hidden" name="id311" id="id311" value="<?php echo $getunitadmisi; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannya; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutir; ?>" />
                                        <b>Daya Tampung</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom1_311" id="k1_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Calon Mahasiswa Reguler :</b></br>
                                        <b>Ikut Seleksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom2_311" id="k2_311" onkeyup="errorinputikutseleksi()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Lulus Seleksi</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom3_311" id="k3_311" onkeyup="errorinput()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Mahasiswa Baru :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom4_311" id="k4_311" onkeyup="errorinput()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom5_311" id="k5_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
                    <?php
                        }
                        if ($_SESSION['role']=="Kemahasiswaan") {
                            if ($getunitmhs>0) {
                            ?>
                                <form method="POST" action="<?php echo base_url()?>C_unit/updateisian311kemahasiswaan">
                            <?php
                            }else{
                            ?>
                                <form method="POST" action="<?php echo base_url()?>C_unit/ngisi311kemahasiswaan">
                            <?php
                            }
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
                        <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK ELEKTRO
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitmhs; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannya; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutir; ?>" />
                                        <b>Jumlah Total Mahasiswa :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom6_311" id="k6_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom7_311" id="k7_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Lulusan :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom8_311" id="k8_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom9_311" id="k9_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>IPK Lulusan Reguler :</b></br>
                                        <b>Minimal</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom10_311" id="k10_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 2.75 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Rata-rata</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom11_311" id="k11_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 3.00 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Maksimal</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text"  name="kolom12_311" id="k12_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 3.50 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Presentase Lulusan Reguler dengan IPK :</b></br>
                                        <b>< 2.75</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom13_311" id="k13_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>2.75 - 3.50</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom14_311" id="k14_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>> 3.50</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom15_311" id="k15_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK TELEKOMUNIKASI
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitmhs; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannya; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutir; ?>" />
                                        <b>Jumlah Total Mahasiswa :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom6_311" id="k6_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom7_311" id="k7_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Lulusan :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom8_311" id="k8_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom9_311" id="k9_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>IPK Lulusan Reguler :</b></br>
                                        <b>Minimal</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom10_311" id="k10_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 2.75 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Rata-rata</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom11_311" id="k11_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 3.00 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Maksimal</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text"  name="kolom12_311" id="k12_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 3.50 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Presentase Lulusan Reguler dengan IPK :</b></br>
                                        <b>< 2.75</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom13_311" id="k13_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>2.75 - 3.50</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom14_311" id="k14_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>> 3.50</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom15_311" id="k15_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK FISIKA
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitmhs; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannya; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutir; ?>" />
                                        <b>Jumlah Total Mahasiswa :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom6_311" id="k6_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom7_311" id="k7_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Lulusan :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom8_311" id="k8_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom9_311" id="k9_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>IPK Lulusan Reguler :</b></br>
                                        <b>Minimal</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom10_311" id="k10_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 2.75 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Rata-rata</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom11_311" id="k11_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 3.00 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Maksimal</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text"  name="kolom12_311" id="k12_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 3.50 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Presentase Lulusan Reguler dengan IPK :</b></br>
                                        <b>< 2.75</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom13_311" id="k13_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>2.75 - 3.50</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom14_311" id="k14_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>> 3.50</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom15_311" id="k15_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 SISTEM KOMPUTER
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitmhs; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannya; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutir; ?>" />
                                        <b>Jumlah Total Mahasiswa :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom6_311" id="k6_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom7_311" id="k7_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Lulusan :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom8_311" id="k8_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom9_311" id="k9_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>IPK Lulusan Reguler :</b></br>
                                        <b>Minimal</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom10_311" id="k10_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 2.75 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Rata-rata</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom11_311" id="k11_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 3.00 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Maksimal</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text"  name="kolom12_311" id="k12_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 3.50 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Presentase Lulusan Reguler dengan IPK :</b></br>
                                        <b>< 2.75</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom13_311" id="k13_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>2.75 - 3.50</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom14_311" id="k14_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>> 3.50</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom15_311" id="k15_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S2 TEKNIK ELEKTRO
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitmhs; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannya; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutir; ?>" />
                                        <b>Jumlah Total Mahasiswa :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom6_311" id="k6_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom7_311" id="k7_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Jumlah Lulusan :</b></br>
                                        <b>Reguler Bukan Transfer</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom8_311" id="k8_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>Transfer(3)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom9_311" id="k9_311" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>IPK Lulusan Reguler :</b></br>
                                        <b>Minimal</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom10_311" id="k10_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 2.75 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Rata-rata</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom11_311" id="k11_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 3.00 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Maksimal</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text"  name="kolom12_311" id="k12_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 3.50 (Penulisan Angka Menggunakan (.) Titik">
                                            </div>
                                        </div>
                                        <b>Presentase Lulusan Reguler dengan IPK :</b></br>
                                        <b>< 2.75</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom13_311" id="k13_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>2.75 - 3.50</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom14_311" id="k14_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                                        <b>> 3.50</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">dialpad</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" name="kolom15_311" id="k15_311" onkeyup="errorinputkoma()" class="form-control" placeholder="Ex: 500">
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
                        
                                    <?php
                                }
                        ?>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                        
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
