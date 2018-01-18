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
                    $isiannyaTE = 2857;
                    $isiannyaTT = 3001;
                    $isiannyaTF = 2266;
                    $isiannyaSK = 2757;
                    $getbutir = '';
                    $getid434 = '';
                    $querycaributir = $CI->db->query('select id, butir from butir where id="'.$isiannyaTE.'" and id_borang = "'.$id_bor.'"');
                    foreach ($querycaributir->result() as $row){
                        $getbutir = $row->butir;
                        $getid434 = $row->id;
                        break;
                    }
                    // TE
                    $getidbutirTE = '';
                    $querycariidbutirTE = $CI->db->query('select * from butir where butir="3.1.1.a" and id_borang = "'.$id_bor.'"');
                    foreach ($querycariidbutirTE->result() as $row){
                        $getidbutirTE = $row->id;
                        break;
                    }
                    // cek udah atau belum
                    $queryadmisiTEudah=$CI->db->query('SELECT COUNT(id) as cekadmisiTEudah FROM isian_16kolom WHERE id_butir="'.$isiannyaTE.'" and kolom6="needed"');
                    $cekadmisiTEudah=$queryadmisiTEudah->result_array()[0]['cekadmisiTEudah'];
                    $cekadmisiTEudah=($cekadmisiTEudah!=0)?($cekadmisiTEudah):0;
                    // ngecek isinya unit admisi
                    $getunitadmisiTE = 0;
                    $queryadmisiTE=$CI->db->query('SELECT COUNT(id) as cekadmisiTE FROM isian_16kolom WHERE id_butir="'.$isiannyaTE.'" and kolom1="needed"');
                    $cekadmisiTE=$queryadmisiTE->result_array()[0]['cekadmisiTE'];
                    $cekadmisiTE=($cekadmisiTE!=0)?($cekadmisiTE):0;
                    if ($cekadmisiTE>0) {
                        // cek update atau insert
                        $querycekadmisiTE = $CI->db->query('select * from isian_16kolom where id_butir="'.$isiannyaTE.'" and kolom1="needed" LIMIT 1');
                        foreach ($querycekadmisiTE->result() as $row){
                            $getunitadmisiTE = $row->id;
                            break;
                        }
                    }else{
                        $getunitadmisiTE = 0;
                    }

                    // example query
                    // SELECT * FROM `isian_16kolom` WHERE month(created_at)=1
                    // SELECT * FROM `isian_16kolom` WHERE dayofmonth(created_at) BETWEEN 1 AND 5
                    // 

                    // cek udah atau belum mahasiswa
                    $querymhsTEudah=$CI->db->query('SELECT COUNT(id) as cekmhsTEudah FROM isian_16kolom WHERE id_butir="'.$isiannyaTE.'" and kolom1=""');
                    $cekmhsTEudah=$querymhsTEudah->result_array()[0]['cekmhsTEudah'];
                    $cekmhsTEudah=($cekmhsTEudah!=0)?($cekmhsTEudah):0;
                    // ngecek isinya unit kemahasiswaan
                    $getunitmhsTE = 0;
                    $querymhsTE=$CI->db->query('SELECT COUNT(id) as cekmhsTE FROM isian_16kolom WHERE id_butir="'.$isiannyaTE.'" and kolom6="needed"');
                    $cekmhsTE=$querymhsTE->result_array()[0]['cekmhsTE'];
                    $cekmhsTE=($cekmhsTE!=0)?($cekmhsTE):0;
                    if ($cekmhsTE>0) {
                        // cek update atau insert
                        $querycekmhsTE = $CI->db->query('select * from isian_16kolom where id_butir="'.$isiannyaTE.'" and kolom6="needed" LIMIT 1');
                        foreach ($querycekmhsTE->result() as $row){
                            $getunitmhsTE = $row->id;
                            break;
                        }
                    }else{
                        $getunitmhsTE = 0;
                    }
                    // Tutup TE

                    // TT
                    $getidbutirTT = '';
                    $querycariidbutirTT = $CI->db->query('select * from butir where butir="3.1.1.a" and id_borang = "'.$id_bor.'"');
                    foreach ($querycariidbutirTT->result() as $row){
                        $getidbutirTT = $row->id;
                        break;
                    }
                    // cek udah atau belum
                    $queryadmisiTTudah=$CI->db->query('SELECT COUNT(id) as cekadmisiTTudah FROM isian_16kolom WHERE id_butir="'.$isiannyaTT.'" and kolom6="needed"');
                    $cekadmisiTTudah=$queryadmisiTTudah->result_array()[0]['cekadmisiTTudah'];
                    $cekadmisiTTudah=($cekadmisiTTudah!=0)?($cekadmisiTTudah):0;
                    // ngecek isinya unit admisi
                    $getunitadmisiTT = 0;
                    $queryadmisiTT=$CI->db->query('SELECT COUNT(id) as cekadmisiTT FROM isian_16kolom WHERE id_butir="'.$isiannyaTT.'" and kolom1="needed"');
                    $cekadmisiTT=$queryadmisiTT->result_array()[0]['cekadmisiTT'];
                    $cekadmisiTT=($cekadmisiTT!=0)?($cekadmisiTT):0;
                    if ($cekadmisiTT>0) {
                        // cek updaTT atau insert
                        $querycekadmisiTT = $CI->db->query('select * from isian_16kolom where id_butir="'.$isiannyaTT.'" and kolom1="needed" LIMIT 1');
                        foreach ($querycekadmisiTT->result() as $row){
                            $getunitadmisiTT = $row->id;
                            break;
                        }
                    }else{
                        $getunitadmisiTT = 0;
                    }

                    // cek udah atau belum mahasiswa
                    $querymhsTTudah=$CI->db->query('SELECT COUNT(id) as cekmhsTTudah FROM isian_16kolom WHERE id_butir="'.$isiannyaTT.'" and kolom1="needed"');
                    $cekmhsTTudah=$querymhsTTudah->result_array()[0]['cekmhsTTudah'];
                    $cekmhsTTudah=($cekmhsTTudah!=0)?($cekmhsTTudah):0;
                    // ngecek isinya unit kemahasiswaan
                    $getunitmhsTT = 0;
                    $querymhsTT=$CI->db->query('SELECT COUNT(id) as cekmhsTT FROM isian_16kolom WHERE id_butir="'.$isiannyaTT.'" and kolom6="needed"');
                    $cekmhsTT=$querymhsTT->result_array()[0]['cekmhsTT'];
                    $cekmhsTT=($cekmhsTT!=0)?($cekmhsTT):0;
                    if ($cekmhsTT>0) {
                        // cek updaTT atau insert
                        $querycekmhsTT = $CI->db->query('select * from isian_16kolom where id_butir="'.$isiannyaTT.'" and kolom6="needed" LIMIT 1');
                        foreach ($querycekmhsTT->result() as $row){
                            $getunitmhsTT = $row->id;
                            break;
                        }
                    }else{
                        $getunitmhsTT = 0;
                    }
                    // Tutup TT

                    // TF
                    $getidbutirTF = '';
                    $querycariidbutirTF = $CI->db->query('select * from butir where butir="3.1.1.a" and id_borang = "'.$id_bor.'"');
                    foreach ($querycariidbutirTF->result() as $row){
                        $getidbutirTF = $row->id;
                        break;
                    }
                    // cek udah atau belum
                    $queryadmisiTFudah=$CI->db->query('SELECT COUNT(id) as cekadmisiTFudah FROM isian_16kolom WHERE id_butir="'.$isiannyaTF.'" and kolom6="needed"');
                    $cekadmisiTFudah=$queryadmisiTFudah->result_array()[0]['cekadmisiTFudah'];
                    $cekadmisiTFudah=($cekadmisiTFudah!=0)?($cekadmisiTFudah):0;
                    // ngecek isinya unit admisi
                    $getunitadmisiTF = 0;
                    $queryadmisiTF=$CI->db->query('SELECT COUNT(id) as cekadmisiTF FROM isian_16kolom WHERE id_butir="'.$isiannyaTF.'" and kolom1="needed"');
                    $cekadmisiTF=$queryadmisiTF->result_array()[0]['cekadmisiTF'];
                    $cekadmisiTF=($cekadmisiTF!=0)?($cekadmisiTF):0;
                    if ($cekadmisiTF>0) {
                        // cek updaTF atau insert
                        $querycekadmisiTF = $CI->db->query('select * from isian_16kolom where id_butir="'.$isiannyaTF.'" and kolom1="needed" LIMIT 1');
                        foreach ($querycekadmisiTF->result() as $row){
                            $getunitadmisiTF = $row->id;
                            break;
                        }
                    }else{
                        $getunitadmisiTF = 0;
                    }
                    
                    // cek udah atau belum mahasiswa
                    $querymhsTFudah=$CI->db->query('SELECT COUNT(id) as cekmhsTFudah FROM isian_16kolom WHERE id_butir="'.$isiannyaTF.'" and kolom1="needed"');
                    $cekmhsTFudah=$querymhsTFudah->result_array()[0]['cekmhsTFudah'];
                    $cekmhsTFudah=($cekmhsTFudah!=0)?($cekmhsTFudah):0;
                    // ngecek isinya unit kemahasiswaan
                    $getunitmhsTF = 0;
                    $querymhsTF=$CI->db->query('SELECT COUNT(id) as cekmhsTF FROM isian_16kolom WHERE id_butir="'.$isiannyaTF.'" and kolom6="needed"');
                    $cekmhsTF=$querymhsTF->result_array()[0]['cekmhsTF'];
                    $cekmhsTF=($cekmhsTF!=0)?($cekmhsTF):0;
                    if ($cekmhsTF>0) {
                        // cek updaTF atau insert
                        $querycekmhsTF = $CI->db->query('select * from isian_16kolom where id_butir="'.$isiannyaTF.'" and kolom6="needed" LIMIT 1');
                        foreach ($querycekmhsTF->result() as $row){
                            $getunitmhsTF = $row->id;
                            break;
                        }
                    }else{
                        $getunitmhsTF = 0;
                    }
                    // Tutup TF

                    // SK
                    $getidbutirSK = '';
                    $querycariidbutirSK = $CI->db->query('select * from butir where butir="3.1.1.a" and id_borang = "'.$id_bor.'"');
                    foreach ($querycariidbutirSK->result() as $row){
                        $getidbutirSK = $row->id;
                        break;
                    }
                    // cek udah atau belum
                    $queryadmisiSKudah=$CI->db->query('SELECT COUNT(id) as cekadmisiSKudah FROM isian_16kolom WHERE id_butir="'.$isiannyaSK.'" and kolom6="needed"');
                    $cekadmisiSKudah=$queryadmisiSKudah->result_array()[0]['cekadmisiSKudah'];
                    $cekadmisiSKudah=($cekadmisiSKudah!=0)?($cekadmisiSKudah):0;
                    // ngecek isinya unit admisi
                    $getunitadmisiSK = 0;
                    $queryadmisiSK=$CI->db->query('SELECT COUNT(id) as cekadmisiSK FROM isian_16kolom WHERE id_butir="'.$isiannyaSK.'" and kolom1="needed"');
                    $cekadmisiSK=$queryadmisiSK->result_array()[0]['cekadmisiSK'];
                    $cekadmisiSK=($cekadmisiSK!=0)?($cekadmisiSK):0;
                    if ($cekadmisiSK>0) {
                        // cek updaSK atau insert
                        $querycekadmisiSK = $CI->db->query('select * from isian_16kolom where id_butir="'.$isiannyaSK.'" and kolom1="needed" LIMIT 1');
                        foreach ($querycekadmisiSK->result() as $row){
                            $getunitadmisiSK = $row->id;
                            break;
                        }
                    }else{
                        $getunitadmisiSK = 0;
                    }
                    
                    // cek udah atau belum mahasiswa
                    $querymhsSKudah=$CI->db->query('SELECT COUNT(id) as cekmhsSKudah FROM isian_16kolom WHERE id_butir="'.$isiannyaSK.'" and kolom1="needed"');
                    $cekmhsSKudah=$querymhsSKudah->result_array()[0]['cekmhsSKudah'];
                    $cekmhsSKudah=($cekmhsSKudah!=0)?($cekmhsSKudah):0;
                    // ngecek isinya unit kemahasiswaan
                    $getunitmhsSK = 0;
                    $querymhsSK=$CI->db->query('SELECT COUNT(id) as cekmhsSK FROM isian_16kolom WHERE id_butir="'.$isiannyaSK.'" and kolom6="needed"');
                    $cekmhsSK=$querymhsSK->result_array()[0]['cekmhsSK'];
                    $cekmhsSK=($cekmhsSK!=0)?($cekmhsSK):0;
                    if ($cekmhsSK>0) {
                        // cek updaSK atau insert
                        $querycekmhsSK = $CI->db->query('select * from isian_16kolom where id_butir="'.$isiannyaSK.'" and kolom6="needed" LIMIT 1');
                        foreach ($querycekmhsSK->result() as $row){
                            $getunitmhsSK = $row->id;
                            break;
                        }
                    }else{
                        $getunitmhsSK = 0;
                    }
                    // Tutup SK
                            
                            ?>
                        <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2>
                        <h2 class="card-inside-title">Tuliskan data seluruh mahasiswa reguler(1) dan lulusannya dalam lima tahun terakhir dengan mengikuti format berikut:</h2>
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
            <div class="row clearfix">
            <?php
            if ($cekadmisiTEudah<1) {
            ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK ELEKTRO
                            </h2>
                        </div>
                        <div class="body">
                            <?php
                            if ($getunitadmisiTE>0) {
                            ?>
                                <form method="POST" action="<?php echo base_url()?>C_unit/updateisian311admisi">
                            <?php
                            }else{
                            ?>
                                <form method="POST" action="<?php echo base_url()?>C_unit/ngisi311admisi">
                            <?php
                            }
                            ?>
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitadmisiTE; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannyaTE; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutirTE; ?>" />
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
                                <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                        </div>
                    </div>
                </div>
            <?php
            }
            if ($cekadmisiTTudah<1) {
            ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK TELEKOMUNIKASI
                            </h2>
                        </div>
                        <div class="body">
                            <input type="hidden" name="id311" id="id311" value="<?php echo $getunitadmisiTT; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannyaTT; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutirTT; ?>" />
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
            if ($cekadmisiTFudah<1) {
            ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK FISIKA
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitadmisiTF; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannyaTF; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutirTF; ?>" />
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
            <?php
            }
            if ($cekadmisiSKudah<1) {
            ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 SISTEM KOMPUTER
                            </h2>
                        </div>
                        <div class="body">
                                        <input type="hidden" name="id311" id="id311" value="<?php echo $getunitadmisiSK; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannyaSK; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutirSK; ?>" />
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
            ?>
                
                
                
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S2 TEKNIK ELEKTRO
                            </h2>
                        </div>
                        <div class="body">
                                        <input type="hidden" name="id311" id="id311" value="<?php echo $getunitadmisiTE; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannyaTE; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutirTE; ?>" />
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


            <?php
            if ($cekmhsTEudah<1) {
            ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK ELEKTRO
                            </h2>
                        </div>
                        <div class="body">
                            <?php
                            if ($getunitmhsTE>0) {
                            ?>
                                <form method="POST" action="<?php echo base_url()?>C_unit/updateisian311kemahasiswaan">
                            <?php
                            }else{
                            ?>
                                <form method="POST" action="<?php echo base_url()?>C_unit/ngisi311kemahasiswaan">
                            <?php
                            }
                            ?>
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitmhsTE; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannyaTE; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutirTE; ?>" />
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
                                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                        </div>
                    </div>
                </div>
            <?php
            }
            if ($cekmhsTTudah<1) {
            ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK TELEKOMUNIKASI
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitmhsTT; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannyaTT; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutirTT; ?>" />
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
            if ($cekmhsTFudah<1) {
            ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 TEKNIK FISIKA
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitmhsTF; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannyaTF; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutirTF; ?>" />
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
            <?php
            }
            if ($cekmhsSKudah<1) {
            ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S1 SISTEM KOMPUTER
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitmhsSK; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannyaSK; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutirSK; ?>" />
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
                
                
                
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                BORANG S2 TEKNIK ELEKTRO
                            </h2>
                        </div>
                        <div class="body">
                                    <input type="hidden" name="id311" id="id311" value="<?php echo $getunitmhsTE; ?>" />
                                    <input type="hidden" name="311id_butir" id="311id_butir" value="<?php echo $isiannyaTE; ?>" />
                                    <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $getidbutirTE; ?>" />
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
                        <!-- <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form> -->
                        
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
