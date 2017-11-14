<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-5">
            <h2>
                FORM PENILAIAN BORANG
                <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                <small><?php echo ucfirst($buku[0]['jenis'])." ".$buku[0]['fakpro']." - ".$buku[0]['tahun']." - Buku : ".$buku[0]['buku']; ?></small>
            </h2>
            </div>
            <div class="col-sm-7">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li><a href="<?php echo base_url();?>penilaian"><i class="material-icons">assignment_turned_in</i> Penilaian</a></li>
                <li class="active"><i class="material-icons">book</i> Form Penilaian</li>
            </ol>
            </div>
        </div>

            <!-- Hover Zoom Effect -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box-2 bg-amber hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">mode_edit</i>
                        </div>
                        <div class="content">
                            <div class="text">BORANG PROGRAM STUDI</div>
                            <div class="number">YANG DI ISI HANYA SEL YANG BERWARNA KUNING</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->
            <?=form_open("C_penilaian/inputnilaiF1");?>
            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body table-responsive">
            <?php
                $CI =& get_instance();
                $bukunya = $this->uri->segment(2, 0);
                $newversi = 0;
                $this->db->select('id');
                $this->db->from('hitungf1');
                $this->db->where('id_buku', $bukunya);
                $versinya = $this->db->count_all_results();
                if ($versinya==0) {
                    $newversi = 1;
                }else{
                    $grabversi = "";
                    $getversi = $CI->db->query('select review_ke from hitungf1 where id_buku="'.$bukunya.'" ORDER BY id DESC LIMIT 1');
                    foreach ($getversi->result() as $row){
                        $grabversi = $row->review_ke;
                        break;
                    }
                    $newversi = $grabversi+1;
                }
                
            ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">NO.</th>
                                        <th width="5%">BUTIR</th>
                                        <th colspan="2">KETERANGAN</th>
                                        <th>NILAI</th>
                                        <th></th>
                                        <th>INFORMASI DARI BORANG</th>
                                    </tr>
                                </thead>
            <!-- BUTIR 1.1.a -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[0]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[0]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[0]['aspek'] ?></td>
                                        <td></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[0]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[0]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%" rowspan="7"><textarea rows="16" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kejelasan (1 - 4) </td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="11a1" placeholder="4,00" onkeyup="cekjumlah11a()" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kerealistikan (1 - 4)</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="11a2" placeholder="4,00" onkeyup="cekjumlah11a()" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor keterkaitan (1 - 4)</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="11a3" placeholder="4,00" onkeyup="cekjumlah11a()" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor keterlibatan pemangku kepentingan (1 - 4)</td>
                                        <td width="10%"><input type="text" required name="nilai4[]" id="11a4" placeholder="4,00" onkeyup="cekjumlah11a()" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor akhir</td>
                                        <td width="10%"><input type="text" required name="nilai5[]" id="11askorakhir" readonly="readonly" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="11anilai" readonly="readonly" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 1.1.b -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="5" scope="row"><?php echo $f1[1]['id'] ?></th>
                                        <td width="5%" rowspan="5"><?php echo $f1[1]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[1]['aspek'] ?></td>
                                        <td></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[1]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[1]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%" rowspan="5"><textarea rows="12" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kejelasan tahapan waktu dan kerealistikan (1 - 4)</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="11b1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah11b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kelengkapan dokumen (1 - 4)</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="11b2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah11b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor akhir</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="11bskor" placeholder="4,00"  readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="11bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 1.2 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[2]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[2]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[2]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[2]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[2]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="12" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah12()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="7"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Tidak dipahami oleh seluruh sivitas akademika dan tenaga kependidikan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Kurang dipahami oleh  sivitas akademika  dan tenaga kependidikan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Dipahami dengan baik oleh sebagian  sivitas akademika dan tenaga kependidikan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Dipahami dengan baik oleh seluruh sivitas akademika  dan tenaga kependidikan. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai12"><input type="text" required name="skorakhir[]" id="12nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.1 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[3]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[3]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[3]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[3]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[3]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="21" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah21()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="7"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Program studi memiliki  tata pamong, namun hanya memenuhi 1 s.d. 2 dari 5 aspek tsb di atas.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Ada tata pamong yang  menjamin penyelenggaraan program studi, namun hanya memenuhi 3 dari 5 aspek tsb di atas.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada tata pamong yang menjamin penyelenggaraan program studi yang memenuhi 4 dari 5 aspek tsb di atas.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada tata pamong yang menjamin penyelenggaraan program studi yang memenuhi 5 aspek tsb di atas.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai21"><input type="text" required name="skorakhir[]" id="21nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.2 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[4]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[4]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[4]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[4]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[4]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="22" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah22()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="7"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Kepemimpinan program studi lemah dalam karakteristik berikut: (1) kepemimpinan operasional, (2) kepemimpinan organisasi, (3) kepemimpinan publik. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Kepemimpinan program studi memiliki karakter kepemimpinan yang kuat dalam salah satu dari karakteristik berikut: (1) kepemimpinan operasional, (2) kepemimpinan organisasi, (3) kepemimpinan publik. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Kepemimpinan program studi memiliki karakter kepemimpinan yang kuat dalam dua dari karakteristik berikut: (1) kepemimpinan operasional, (2) kepemimpinan organisasi, (3) kepemimpinan publik. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Kepemimpinan program studi memiliki karakteristik yang kuat dalam: (1) kepemimpinan operasional, (2) kepemimpinan organisasi, (3) kepemimpinan publik. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai22"><input type="text" required name="skorakhir[]" id="22nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.3 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[5]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[5]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[5]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[5]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[5]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="23" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah23()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada sistem pengelolaan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Sistem pengelolaan fungsional dan operasional program studi dilakukan tidak sesuai dengan SOP.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Sistem pengelolaan fungsional dan operasional program studi dilakukan hanya sebagian sesuai dengan SOP dan dokumen kurang lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Sistem pengelolaan fungsional dan operasional program studi dilakukan dengan cukup baik, sesuai dengan SOP, namun dokumen kurang lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Sistem pengelolaan fungsional dan operasional program studi berjalan sesuai dengan SOP, yang didukung dokumen yang lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai23"><input type="text" required name="skorakhir[]" id="23nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.4 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[6]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[6]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[6]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[6]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[6]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="25" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah25()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada sistem penjaminan mutu.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Ada sistem penjaminan mutu, tetapi tidak berfungsi.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Sistem penjaminan mutu berfungsi sebagian namun  tidak ada umpan balik dan dokumen kurang lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Sistem penjaminan mutu berjalan sesuai dengan standar penjaminan mutu, umpan balik tersedia tetapi tidak ada tindak lanjut.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Sistem penjaminan mutu berjalan sesuai dengan standar penjaminan mutu, ada  umpan balik dan tindak lanjutnya, yang didukung dokumen yang lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai25"><input type="text" required name="skorakhir[]" id="25nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.5 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[7]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[7]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[7]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[7]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[7]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="25" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah25()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada umpan balik.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Umpan balik hanya diperoleh dari sebagian dan tidak ada tindak lanjut.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Umpan balik hanya diperoleh dari sebagian dan ada tindak lanjut secara insidental.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Umpan balik diperoleh dari dosen, mahasiswa, alumni dan pengguna serta ditindaklanjuti secara insidental.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Umpan balik diperoleh dari dosen, mahasiswa, alumni dan pengguna serta ditindaklanjuti secara berkelanjutan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai25"><input type="text" required name="skorakhir[]" id="25nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.6 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[8]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[8]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[8]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[8]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[8]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="26" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah26()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada usaha.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Ada bukti hanya 1 usaha yang dilakukan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Ada bukti hanya sebagian kecil usaha (2-3) yang dilakukan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada bukti sebagian usaha ( > 3) dilakukan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada bukti semua usaha dilakukan berikut hasilnya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai26"><input type="text" required name="skorakhir[]" id="26nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.1.a -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row"><?php echo $f1[9]['id'] ?></th>
                                        <td width="5%" rowspan="6"><?php echo $f1[9]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[9]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[9]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[9]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="311ainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah kolom 3 (Jumlah yang ikut seleksi))</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="311a1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311a()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah kolom 2 (Daya tampung PS)</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="311a2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311a()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Rasio = (jumlah kolom 3)/(jumlah kolom 2)</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="311arasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="311anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.1.b -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row"><?php echo $f1[10]['id'] ?></th>
                                        <td width="5%" rowspan="6"><?php echo $f1[10]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[10]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[10]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[10]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="311binfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah kolom 5 (Jumlah mhs baru reguler yang melakukan registrasi)</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="311b1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311b()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah kolom 4 (Jumlah calon mhs yang lulus seleksi)</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="311b2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311b()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Rasio=(jumlah kolom 5)/jumlah kolom 4)</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="311brasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="311bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.1.c -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row"><?php echo $f1[11]['id'] ?></th>
                                        <td width="5%" rowspan="6"><?php echo $f1[11]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[11]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[11]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[11]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="311cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">TMBT = total mahasiswa baru transfer untuk program S1 reguler dan S1 non-reguler</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="311c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">TMB = total mahasiswa baru bukan transfer untuk program S1 reguler dan S1 non-reguler</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="311c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">RM = TMBT/TMB</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="311crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="311cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.1.d -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[12]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[12]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[12]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[12]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[12]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="311d1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311d()"></td>
                                        <td></td>
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="311dinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">IPK (Isi angka 0 jika belum ada lulusan)</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="311d2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311d()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="3"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="311dnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.2 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[13]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[13]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[13]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[13]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[13]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="312" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah312()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Jumlah mahasiswa yang diterima mengakibatkan beban dosen sangat berat, melebihi 19 sks.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Jumlah mahasiswa yang diterima mengakibatkan beban dosen relatif berat, yaitu lebih dari 17 s.d. 19 sks.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 15  s.d. 17 sks.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 13  s.d. 15 sks.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban mendekati ideal, yaitu kurang atau sama dengan 13 sks.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="312nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.3 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[14]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[14]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[14]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[14]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[14]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="313" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah313()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="7"><textarea rows="12" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Tidak ada bukti penghargaan. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Ada bukti penghargaan juara lomba ilmiah, olah raga, maupun seni tingkat lokal PT.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada bukti penghargaan juara lomba ilmiah, olah raga, maupun seni tingkat wilayah.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada bukti penghargaan juara lomba ilmiah, olah raga, maupun seni tingkat nasional atau internasional.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="313nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.4.a -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row"><?php echo $f1[15]['id'] ?></th>
                                        <td width="5%" rowspan="6"><?php echo $f1[15]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[15]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[15]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[15]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="314ainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>d</td>
                                        <td width="45%">Jumlah mahasiswa yang diterima pada TS-3 (4 tahun yang lalu)</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="314a1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah314a()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize" ></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>f</td>
                                        <td width="45%">Jumlah mahasiswa yang diterima pada TS-3 yang telah lulus.</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="314a2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah314a()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">KTW (Kelulusan tepat waktu dalam persen, kisaran nilai 0 - 100.)</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="314arasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="314anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.4.b -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row"><?php echo $f1[16]['id'] ?></th>
                                        <td width="5%" rowspan="6"><?php echo $f1[16]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[16]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[16]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[16]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="314binfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>a</td>
                                        <td width="45%">Jumlah mahasiswa baru yang diterima pada TS-6 (7 tahun yang lalu)</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="314b1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah314b()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>b</td>
                                        <td width="45%">Jumlah mahasiswa baru yang diterima pada TS-6 yang masih terdaftar pada TS</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="314b2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah314b()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>c</td>
                                        <td width="45%">Jumlah mahasiswa baru yang diterima pada TS-6 yang telah lulus</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="314b3" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah314b()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">MDO (Persentase mahasiswa DO/Mengundurkan diri)</td>
                                        <td width="10%"><input type="text" required name="nilai4[]" id="314brasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="314bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.2.1 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[17]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[17]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[17]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[17]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[17]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="321" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah321()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Kurang dari 2 unit pelayanan. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Ada 2 jenis unit pelayanan. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Ada jenis layanan nomor 1 sampai dengan nomor 2.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada jenis layanan nomor 1 sampai dengan nomor 3.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada semua (5 jenis) pelayanan mahasiswa yang dapat diakses. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="321nilai" placeholder="4,00" readonly="readonly"  style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.2.2 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[18]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[18]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[18]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[18]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[18]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="322" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah322()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="4"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Kisaran jumlah nilai ke lima jenis layanan antara 0 - 20.</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">SL</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="322sl" placeholder="4,00"  readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="322nilai" placeholder="4,00"  readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.3.1.a -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[19]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[19]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[19]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[19]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[19]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="331a" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331a()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada upaya pelacakan lulusan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Upaya pelacakan lulusan dilakukan sekedarnya dan hasilnya tidak terekam. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Upaya pelacakan dilakukan sekedarnya dan hasilnya terekam. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada upaya yang intensif untuk melacak  lulusan, tetapi hasilnya belum  terekam secara komprehensif.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada upaya yang intensif untuk melacak  lulusan dan datanya terekam secara komprehensif.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai331a"><input type="text" required name="skorakhir[]" id="331anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.3.1.b -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[20]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[20]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[20]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[20]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[20]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="331b" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada tindak lanjut.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Hasil pelacakan untuk perbaikan 1 item.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Hasil pelacakan untuk perbaikan 2 item.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Hasil pelacakan untuk perbaikan 3 item.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Hasil pelacakan untuk perbaikan 4 item.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai331b"><input type="text" required name="skorakhir[]" id="331bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.3.1.C -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[21]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[21]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[21]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[21]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[21]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="331cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>a</td>
                                        <td width="45%">Jumlah persentase untuk respon sangat baik (Kisaran nilai 0 - 700%)</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="331c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>b</td>
                                        <td width="45%">Jumlah persentase untuk respon baik (Kisaran nilai 0 - 700%)</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="331c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>c</td>
                                        <td width="45%">Jumlah persentase untuk respon cukup (Kisaran nilai 0 - 700%)</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="331c3" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>d</td>
                                        <td width="45%">Jumlah persentase untuk respon kurang (Kisaran nilai 0 - 700%)</td>
                                        <td width="10%"><input type="text" required name="nilai4[]" id="331c4" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor akhir (Jumlah a + b + c + d paling besar = 700%)</td>
                                        <td width="10%"><input type="text" required name="nilai5[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="331cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- Butir 3.3.2 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[22]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[22]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[22]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[22]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[22]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="332" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah332()"></td>
                                        <td></td>
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="332info" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai (bila belum ada lulusan otomatis bernilai nol, lihat butir 3.1.4b)</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="332nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                        <td width="25%" rowspan="3"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- Butir 3.3.3 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[23]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[23]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[23]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[23]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[23]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="333" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah333()"></td>
                                        <td></td>
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="333info" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai (bila belum ada lulusan otomatis bernilai nol, lihat butir 3.1.4b)</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="333nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                        <td width="25%" rowspan="3"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>

        <!--Butir 3.4.1 -->
        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[24]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[24]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[24]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[24]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[24]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="341" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah341()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada partisipasi alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Hanya 1 bentuk partisipasi saja yang dilakukan oleh alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Hanya 2 bentuk partisipasi yang dilakukan oleh alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">3-4 bentuk partisipasi dilakukan oleh alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Semua bentuk partisipasi dilakukan oleh alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="341nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>

     <!--Butir 3.4.2 -->
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[25]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[25]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[25]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[25]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[25]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="341" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah341()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada partisipasi alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Hanya 1 bentuk partisipasi saja yang dilakukan oleh alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Hanya 2 bentuk partisipasi yang dilakukan oleh alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">3-4 bentuk partisipasi dilakukan oleh alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Semua bentuk partisipasi dilakukan oleh alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="341nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>

                 <!--Butir 4.1 -->
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[26]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[26]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[26]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[26]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[26]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="341" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah341()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada partisipasi alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Ada pedoman tertulis, tidak lengkap dan tidak dilaksanakan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Ada pedoman tertulis yang lengkap; tetapi tidak dilaksanakan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada pedoman tertulis yang lengkap; dan tidak ada bukti dilaksanakan secara konsisten.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada pedoman tertulis yang lengkap; dan ada bukti dilaksanakan secara konsisten.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="341nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>

                 <!--Butir 4.2.1 -->
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[27]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[27]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[27]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[27]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[27]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="341" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah341()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada partisipasi alumni.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Ada pedoman tertulis, tidak lengkap dan tidak dilaksanakan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Ada pedoman tertulis yang lengkap; tetapi tidak dilaksanakan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada pedoman tertulis yang lengkap; dan tidak ada bukti dilaksanakan secara konsisten.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada pedoman tertulis yang lengkap; dan ada bukti dilaksanakan secara konsisten.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="341nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>

                <!--Butir 4.2.2 -->
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[28]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[28]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[28]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[28]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[28]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="341" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah341()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada bukti tentang kinerja dosen yang terdokumentasikan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Ada bukti tentang kinerja dosen di bidang  pendidikan tetapi tidak terdokumentasikan dengan baik serta tidak ada di bidang penelitian  atau pelayanan/ pengabdian kepada masyarakat. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Ada bukti tentang kinerja dosen di bidang pendidikan yang terdokumentasikan dengan baik tetapi tidak ada di bidang penelitian  atau pelayanan/ pengabdian kepada masyarakat. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada bukti tentang kinerja dosen di bidang: (1) pendidikan, (2) penelitian, (3) pelayanan/ pengabdian kepada masyarakat tetapi tidak terdokumentasi dengan baik.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada bukti tentang kinerja dosen di bidang: (1) pendidikan, (2) penelitian, (3) pelayanan/ pengabdian kepada masyarakat yang terdokumentasi dengan baik.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="341nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai2[]' value="0">
                                    <input type='hidden' name='nilai3[]' value="0">
                                    <input type='hidden' name='nilai4[]' value="0">
                                    <input type='hidden' name='nilai5[]' value="0">
                                    <input type='hidden' name='nilai6[]' value="0">
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>

                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->

            <!-- Hover Zoom Effect -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box-2 bg-blue hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">assessment</i>
                        </div>
                        <div class="content">
                            <div class="text">BORANG PROGRAM STUDI</div>
                            <div class="number">REKAP ASESMEN KECUKUPAN</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->
            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header js-sweetalert">
                            <button onclick="akumulasi()" type="button" class="btn btn-primary waves-effect">Akumulasi Nilai</button>
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
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <!-- <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead> -->
                                <tbody>
                                    <tr>
                                        <th scope="row">Borang Program Studi</th>
                                        <td><div id="nilaiborang"><p> 0</p></div></td>
                                    </tr>
                                    <!-- <tr>
                                        <th scope="row">Evaluasi Diri</th>
                                        <td><div id="nilaied">0</div></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Borang Unit Pengelola</th>
                                        <td><div id="nilaipengelola">0</div></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nilai Akhir</th>
                                        <td><div id="nilaiakhir">0</div></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Hasil Asesmen Kecukupan</th>
                                        <td><div id="nilaiasesmen">0</div></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
            <!-- Hover Zoom Effect -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box-2 bg-light-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">done_all</i>
                        </div>
                        <div class="content">
                            <div class="text">SIMPAN SEMUA NILAI BORANG UNTUK PROGRAM STUDI <?php echo strtoupper($buku[0]['fakpro']); ?></div>
                            <div class="number"><button type="submit" class="btn bg-teal btn-block btn-lg waves-effect">Simpan Nilai</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->
        </div>
        <?=form_close();?>
    </section>

    <script type="text/javascript">
        function sum() {
              var txtFirstNumberValue = document.getElementById('txt1').value;
              var txtSecondNumberValue = document.getElementById('txt2').value;
              var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
              if (!isNaN(result)) {
                 document.getElementById('txt3').value = result;
              }
        }

        function cekjumlah11a(){
              var txt1 = document.getElementById('11a1').value;
              var txt2 = document.getElementById('11a2').value;
              var txt3 = document.getElementById('11a3').value;
              var txt4 = document.getElementById('11a4').value;
              var result = ((parseFloat(txt1) + parseFloat(txt2) + parseFloat(txt3) + parseFloat(txt4))/4);
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('11askorakhir').value = desimalnya;
                     document.getElementById('11anilai').value = desimalnya;
                  }
        }

        function cekjumlah11b(){
              var txt1 = document.getElementById('11b1').value;
              var txt2 = document.getElementById('11b2').value;
              var result = ((parseFloat(txt1) + parseFloat(txt2))/2);
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('11bskor').value = desimalnya;
                     document.getElementById('11bnilai').value = desimalnya;
                  }
        }

        function cekjumlah12(){
              var txt1 = document.getElementById('12').value;
              var result = ((parseFloat(txt1)));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('12nilai').value = desimalnya;
              }
        }

        function cekjumlah21(){
              var txt1 = document.getElementById('21').value;
              var result = ((parseFloat(txt1)));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('21nilai').value = desimalnya;
              }
        }

        function cekjumlah22(){
              var txt1 = document.getElementById('22').value;
              var result = ((parseFloat(txt1)));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('22nilai').value = desimalnya;
              }
        }

        function cekjumlah23(){
              var txt1 = document.getElementById('23').value;
              var result = ((parseFloat(txt1)));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('23nilai').value = desimalnya;
              }
        }

        function cekjumlah25(){
              var txt1 = document.getElementById('25').value;
              var result = ((parseFloat(txt1)));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('25nilai').value = desimalnya;
              }
        }

        function cekjumlah25(){
              var txt1 = document.getElementById('25').value;
              var result = ((parseFloat(txt1)));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('25nilai').value = desimalnya;
              }
        }

        function cekjumlah26(){
              var txt1 = document.getElementById('26').value;
              var result = ((parseFloat(txt1)));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('26nilai').value = desimalnya;
              }
        }

        function cekjumlah311a(){
              var txt1 = document.getElementById('311a1').value;
              var txt2 = document.getElementById('311a2').value;
              var result = (parseFloat(txt1) / parseFloat(txt2));
              var desimalnya = result.toFixed(2);
              var nilainya = 0;
              if (result>=4) {
                nilainya = 4;
              }else {
                nilainya = ((3+desimalnya)/2);
              }
              var hasilnya = nilainya.toFixed(2);
              var str1 = 'Jumlah calon yang ikut seleksi = '.concat(txt1);
              var str2 = ', daya tampung PS = '.concat(txt2);
              var str3 = ', Rasio Calon Mahasiswa yang ikut seleksi terhadap daya tampung = '.concat(desimalnya);
              if (!isNaN(result)) {
                     document.getElementById('311arasio').value = desimalnya;
                     document.getElementById('311anilai').value = hasilnya;
                     document.getElementById('311ainfo').value = str1.concat(str2,str3);
                  }
        }

        function cekjumlah311b(){
              var txt1 = document.getElementById('311b1').value;
              var txt2 = document.getElementById('311b2').value;
              var result = (parseFloat(txt1) / parseFloat(txt2));
              var desimalnya = result.toFixed(2);
              var nilainya = 0;
              if (result>=95) {
                nilainya = 4;
              }else {
                nilainya = ((40*desimalnya-10)/7);
              }
              var hasilnya = nilainya.toFixed(2);
              var str1 = 'Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi = '.concat(txt1);
              var str2 = ' / '.concat(txt2);
              var str3 = ' = '.concat(desimalnya);
              if (!isNaN(result)) {
                     document.getElementById('311brasio').value = desimalnya;
                     document.getElementById('311bnilai').value = hasilnya;
                     document.getElementById('311binfo').value = str1.concat(str2,str3);
                  }
        }

        function cekjumlah311c(){
              var txt1 = document.getElementById('311c1').value;
              var txt2 = document.getElementById('311c2').value;
              var result = (parseFloat(txt1) / parseFloat(txt2));
              var desimalnya = result.toFixed(2);
              var nilainya = 0;
              if (desimalnya>=1.25) {
                nilainya = 0;
              }else {
                nilainya = 4;
              }
              var hasilnya = nilainya.toFixed(2);
              var str1 = 'Rasio mahasiswa baru transfer terhadap mahasiswa baru bukan transfer = '.concat(txt1);
              var str2 = ' / '.concat(txt2);
              var str3 = ' = '.concat(desimalnya);
              if (!isNaN(result)) {
                     document.getElementById('311crasio').value = desimalnya;
                     document.getElementById('311cnilai').value = hasilnya;
                     document.getElementById('311cinfo').value = str1.concat(str2,str3);
                  }
        }

        function cekjumlah311d(){
              var txt1 = document.getElementById('311d1').value;
              var txt2 = document.getElementById('311d2').value;
              var result = (parseFloat(txt1) / parseFloat(txt2));
              var desimalnya = result.toFixed(2);
              var nilainya = 0;
              if (desimalnya>=0) {
                nilainya = 4;
              }else {
                nilainya = 4;
              }
              var hasilnya = nilainya.toFixed(2);
              var str1 = 'rata-rata IPK Makasiswa = '.concat(txt1);
              if (!isNaN(result)) {
                     document.getElementById('311dnilai').value = hasilnya;
                     document.getElementById('311dinfo').value = str1;
                  }
        }

        function cekjumlah312(){
              var txt1 = document.getElementById('312').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('312nilai').value = desimalnya;
                  }
        }

        function cekjumlah313(){
              var txt1 = document.getElementById('313').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('313nilai').value = desimalnya;
                  }
        }

        function cekjumlah314a(){
              var txt1 = document.getElementById('314a1').value;
              var txt2 = document.getElementById('314a2').value;
              var result1 = ((parseFloat(txt2) / parseFloat(txt1))*100);
              var result2= (parseFloat(txt2) / parseFloat(txt1));
              var desimalnya1 = result1.toFixed(2);
              var desimalnya2 = result2.toFixed(2);
              var nilainya1 = 0;
              var nilainya2 = 0;
              if (desimalnya1>=50) {
                nilainya1 = 4;
              }else {
                nilainya1= ((1+6*desimalnya1));
              }
              if (desimalnya2 >=50) {
                nilainya2  = 4;
              }else {
                nilainya2 = ((1+6*desimalnya2));
              }
              var hasilnya1 = nilainya1.toFixed(2);
              var hasilnya2 = nilainya2.toFixed(2);
              var str1 = 'Presentase kelulusan tepat waktu (KWT) = '.concat(txt2);
              var str2 = ' / '.concat(txt1);
              var str3 = ' = '.concat(desimalnya1);
              if (!isNaN(result1)) {
                     document.getElementById('314arasio').value = desimalnya1;
                     document.getElementById('314anilai').value = hasilnya2;
                     document.getElementById('314ainfo').value = str1.concat(str2,str3);
                  }
        }

        function cekjumlah314b(){
              var txt1 = document.getElementById('314b1').value;
              var txt2 = document.getElementById('314b2').value;
              var txt3 = document.getElementById('314b3').value;
              var result = (((parseFloat(txt1) - parseFloat(txt2) - parseFloat(txt3))/parseFloat(txt1))*100);
              var dihitung= (((parseFloat(txt1) - parseFloat(txt2) - parseFloat(txt3))/parseFloat(txt1)));
              var pembagi= (parseFloat(txt1) - parseFloat(txt2) - parseFloat(txt3));
              var desimalnya = result.toFixed(2);
              var nilainya = 0;
              if (desimalnya<=6) {
                nilainya = 4;
              }else if (desimalnya<45) {
                nilainya= ((180-(400*dihitung))/39);
              }
              var hasilnya = nilainya.toFixed(2);
              var str1 = 'Presentase Mahasiswa yang DO atau mengundurkan diri = '.concat(pembagi);
              var str2 = ' / '.concat(txt1);
              var str3 = ' = '.concat(desimalnya);
              if (!isNaN(result)) {
                     document.getElementById('314brasio').value = desimalnya;
                     document.getElementById('314bnilai').value = hasilnya;
                     document.getElementById('314binfo').value = str1.concat(str2,str3);
                  }
        }

        function cekjumlah321(){
              var txt1 = document.getElementById('321').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('321nilai').value = desimalnya;
                  }
        }

        function cekjumlah322(){
              var txt1 = document.getElementById('322').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('322nilai').value = desimalnya;
                     document.getElementById('322sl').value = desimalnya;
                  }
        }

        function cekjumlah331a(){
              var txt1 = document.getElementById('331a').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('331anilai').value = desimalnya;
                  }
        }

        function cekjumlah331b(){
              var txt1 = document.getElementById('331b').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('331bnilai').value = desimalnya;
                  }
        }

        function cekjumlah331c(){
              var txt1 = document.getElementById('331c1').value;
              var txt2 = document.getElementById('331c2').value;
              var txt3 = document.getElementById('331c3').value;
              var txt4 = document.getElementById('331c4').value;
              var nilai1 = (parseFloat(txt1)/100).toFixed(2);
              var nilai2 = (parseFloat(txt2)/100).toFixed(2);
              var nilai3 = (parseFloat(txt3)/100).toFixed(2);
              var nilai4 = (parseFloat(txt4)/100).toFixed(2);
              var result = ((parseFloat(nilai1) + parseFloat(nilai2) + parseFloat(nilai3) + parseFloat(nilai4)));
              var dihitung= (((4*(parseFloat(nilai1))) + (3*(parseFloat(nilai2))) + (2*(parseFloat(nilai3))) + parseFloat(nilai4))/7);
              // var desimalnya = dihitung.toFixed(2);
              var nilainya = 0;
              if (result>7) {
                nilainya = 0;
              }else {
                nilainya= dihitung;
              }
              var hasilnya = nilainya.toFixed(2);
              var info1 = (parseFloat(txt1)/7*100);
              var info2 = (parseFloat(txt2)/7*100);
              var info3 = (parseFloat(txt3)/7*100);
              var info4 = (parseFloat(txt4)/7*100);
              var hasilinfo1 = info1.toFixed(2);
              var hasilinfo2 = info2.toFixed(2);
              var hasilinfo3 = info3.toFixed(2);
              var hasilinfo4 = info4.toFixed(2);
              var str1 = 'Pendapat pengguna terhadap kualitas alumni. Respon sangat baik = '.concat(hasilinfo1);
              var str2 = ' .Respon baik '.concat(hasilinfo2);
              var str3 = ' .Respon cukup '.concat(hasilinfo3);
              var str4 = ' .Respon kurang '.concat(hasilinfo4);
              if (!isNaN(result)) {
                     document.getElementById('331crasio').value = nilainya;
                     document.getElementById('331cnilai').value = nilainya;
                     document.getElementById('331cinfo').value = str1.concat(str2,str3,str4);
                  }
        }

         function cekjumlah332(){
              var txt1 = document.getElementById('332').value;
              var result = (parseFloat(txt1));

              var nilainya = 0 ;
                if(result==0){
                    nilainya = 0;
                } else if (result <=3) { 
                    nilainya=4;
                } else if (result <18) {
                    nilainya= (72-4*result)/15;
                }
                var nilaides= nilainya.toFixed(2);
                var str1= 'Rata-rata waktu tunggu lulusan untuk memperoleh pekerjaan yang pertama = '.concat(result);
                var str2= ' bulan';
              if (!isNaN(result)) {
                     document.getElementById('332nilai').value = nilaides;
                    document.getElementById('332info').value = str1.concat(str2);
                  }
        }






        function akumulasi(){
     
          var nil1 = $("#11anilai").val();
          var nil2 = $("#11bnilai").val();
          var nil3 = $("#12nilai").val();
          var nil4 = $("#21nilai").val();
          var nil5 = $("#22nilai").val();
          var nil6 = $("#23nilai").val();
          var nil7 = $("#25nilai").val();
          var nil8 = $("#25nilai").val();
          var nil9 = $("#26nilai").val();
          var nil10 = $("#311anilai").val();
          var nil11 = $("#311bnilai").val();
          var nil12 = $("#311cnilai").val();
          var nil13 = $("#311dnilai").val();
          var nil14 = $("#312nilai").val();
          var nil15 = $("#313nilai").val();
          var nil16 = $("#314anilai").val();
          var nil17 = $("#314bnilai").val();
          var nil18 = $("#321nilai").val();
          var nil19 = $("#322nilai").val();
          var nil20 = $("#331anilai").val();
          var nil21 = $("#331bnilai").val();
          var nil22 = $("#331cnilai").val();
          var nil23 = $("#332nilai").val();
        if (nil1!=="" && nil2!==""&&nil3!==""&&nil4!==""&&nil5!==""&&nil6!==""&&nil7!==""&&nil8!==""&& nil9!==""&&nil10!==""&& nil11!==""&&nil12!==""&&nil13!==""&& nil14!==""&&nil15!==""&&nil16!==""&& nil17!==""&& nil18!==""&&nil19!=="" && nil20!==""&&nil21!==""&&nil22!==""&&nil23!=="" ) { 
               $.ajax({
                   // url:"<?php echo base_url()?>index.php/C_penilaian/nilaiborang/"+nil1+"/"+nil2+"/"+nil3+"/"+nil4+"/"+nil5+"/"+nil6+"/"+nil7+"/"+nil8+"/"+nil9+"/"+nil10+"/"+nil11+"/"+nil12+"/"+nil13,
                   url:"<?php echo base_url()?>index.php/C_penilaian/nilaiborang/"+nil1+"/"+nil2+"/"+nil3+"/"+nil4+"/"+nil5+"/"+nil6+"/"+nil7+"/"+nil8+"/"+nil9+"/"+nil10+"/"+nil11+"/"+nil12+"/"+nil13+"/"+nil14+"/"+nil15+"/"+nil16+"/"+nil17+"/"+nil18+"/"+nil19+"/"+nil20+"/"+nil21+"/"+nil22+"/"+nil23,
                   success:function(data){
                       $("#nilaiborang").html(data);
                   }
               });
             }
             else {
               swal("Cancelled", "Your imaginary file is safe :)", "error");
             //  document.getElementById('nilaiborang').value = coba;

             }
        }
    </script>

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

    <!-- Sweet Alert Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- TinyMCE -->
    <script src="<?php echo base_url();?>assets/plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/ui/tooltips-popovers.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/pages/forms/editors.js"></script> -->

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>

    <script type="text/javascript">
        
    </script>
</body>

</html>