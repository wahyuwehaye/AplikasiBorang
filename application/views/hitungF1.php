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
                                        <td width="10%"><input type="text" name="nilai1[]" id="11a1" placeholder="4,00" onkeyup="cekjumlah11a()" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kerealistikan (1 - 4)</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="11a2" placeholder="4,00" onkeyup="cekjumlah11a()" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor keterkaitan (1 - 4)</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="11a3" placeholder="4,00" onkeyup="cekjumlah11a()" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor keterlibatan pemangku kepentingan (1 - 4)</td>
                                        <td width="10%"><input type="text" name="nilai4[]" id="11a4" placeholder="4,00" onkeyup="cekjumlah11a()" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor akhir</td>
                                        <td width="10%"><input type="text" name="nilai5[]" id="11askorakhir" readonly="readonly" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="11anilai" readonly="readonly" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="11b1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah11b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kelengkapan dokumen (1 - 4)</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="11b2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah11b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor akhir</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="11bskor" placeholder="4,00"  readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="11bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="12" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah12()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><div id="nilai12"><input type="text" name="skorakhir[]" id="12nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="21" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah21()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><div id="nilai21"><input type="text" name="skorakhir[]" id="21nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="22" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah22()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><div id="nilai22"><input type="text" name="skorakhir[]" id="22nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="23" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah23()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><div id="nilai23"><input type="text" name="skorakhir[]" id="23nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="24" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah24()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><div id="nilai24"><input type="text" name="skorakhir[]" id="24nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="25" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah25()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><div id="nilai25"><input type="text" name="skorakhir[]" id="25nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="26" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah26()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><div id="nilai26"><input type="text" name="skorakhir[]" id="26nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="311a1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311a()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah kolom 2 (Daya tampung PS)</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="311a2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311a()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Rasio = (jumlah kolom 3)/(jumlah kolom 2)</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="311arasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="311anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="311b1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311b()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah kolom 4 (Jumlah calon mhs yang lulus seleksi)</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="311b2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311b()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Rasio=(jumlah kolom 5)/jumlah kolom 4)</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="311brasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="311bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="311c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">TMB = total mahasiswa baru bukan transfer untuk program S1 reguler dan S1 non-reguler</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="311c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">RM = TMBT/TMB</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="311crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="311cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="311d1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311d()"></td>
                                        <td></td>
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="311dinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">IPK (Isi angka 0 jika belum ada lulusan)</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="311d2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311d()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="3"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="311dnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="312" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah312()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><input type="text" name="skorakhir[]" id="312nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="313" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah313()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><input type="text" name="skorakhir[]" id="313nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="314a1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah314a()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize" ></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>f</td>
                                        <td width="45%">Jumlah mahasiswa yang diterima pada TS-3 yang telah lulus.</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="314a2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah314a()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">KTW (Kelulusan tepat waktu dalam persen, kisaran nilai 0 - 100.)</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="314arasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="314anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="314b1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah314b()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>b</td>
                                        <td width="45%">Jumlah mahasiswa baru yang diterima pada TS-6 yang masih terdaftar pada TS</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="314b2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah314b()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>c</td>
                                        <td width="45%">Jumlah mahasiswa baru yang diterima pada TS-6 yang telah lulus</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="314b3" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah314b()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">MDO (Persentase mahasiswa DO/Mengundurkan diri)</td>
                                        <td width="10%"><input type="text" name="nilai4[]" id="314brasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="314bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="321" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah321()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><input type="text" name="skorakhir[]" id="321nilai" placeholder="4,00" readonly="readonly"  style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="322" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah322()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><input type="text" name="nilai2[]" id="322sl" placeholder="4,00"  readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="322nilai" placeholder="4,00"  readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="331a" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331a()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><div id="nilai331a"><input type="text" name="skorakhir[]" id="331anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="331b" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><div id="nilai331b"><input type="text" name="skorakhir[]" id="331bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="331c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>b</td>
                                        <td width="45%">Jumlah persentase untuk respon baik (Kisaran nilai 0 - 700%)</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="331c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>c</td>
                                        <td width="45%">Jumlah persentase untuk respon cukup (Kisaran nilai 0 - 700%)</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="331c3" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>d</td>
                                        <td width="45%">Jumlah persentase untuk respon kurang (Kisaran nilai 0 - 700%)</td>
                                        <td width="10%"><input type="text" name="nilai4[]" id="331c4" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor akhir (Jumlah a + b + c + d paling besar = 700%)</td>
                                        <td width="10%"><input type="text" name="nilai5[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="331cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="332" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah332()"></td>
                                        <td></td>
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="332info" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai (bila belum ada lulusan otomatis bernilai nol, lihat butir 3.1.4b)</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="332nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="333" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah333()"></td>
                                        <td></td>
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="333info" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai (bila belum ada lulusan otomatis bernilai nol, lihat butir 3.1.4b)</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="333nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td width="10%"><input type="text" name="nilai1[]" id="341" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah341()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><input type="text" name="skorakhir[]" id="341nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                                        <td><div id="nilaiborang"><p>0</p></div></td>
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

<<<<<<< HEAD
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
                                        <td width="10%"><input type="text" required name="nilai1[]" id="422" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah422()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="422nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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


                <!--Butir 4.3.1a -->
                      <tbody > 

                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[29]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[29]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[29]['aspek'] ?></td>
                                        <td></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[29]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[29]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="431ainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                       
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah Dosen Tetap(1 - 4)</td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="431a1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah431a()" data-toggle="tooltip" data-placement="top" ></td>
                                        <td></td>
                                         <td width="25%" rowspan="5"><textarea rows="12" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">S1 Dosen tetap berpendidikan terakhir S1</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="431a2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah431a()" data-toggle="tooltip" data-placement="top"></td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <td colspan="2">S2 Dosen tetap berpendidikan terakhir S2</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="431a3" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah431a()" data-toggle="tooltip" data-placement="top" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">S3 Dosen tetap berpendidikan terakhir S3</td>
                                        <td width="10%"><input type="text" name="nilai4[]" id="431a4" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah431a()" data-toggle="tooltip" data-placement="top" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah Dosen bergelar S2 dan S3</td>
                                        <td width="10%"><input type="text" name="nilai5[]" id="431ajumlah" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">KD1 Persentase dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS</td>
                                        <td width="10%"><input type="text" name="nilai6[]" id="431aKD" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="431anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>

                  <!--Butir 4.3.1b -->         
                       <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row"><?php echo $f1[30]['id'] ?></th>
                                        <td width="5%" rowspan="6"><?php echo $f1[30]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[30]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[30]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[30]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="idnyainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                   
                                   <tr>
                                        <td colspan="2">Jumlah dosen tetap (butir 4.3.1.a)</td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="431bjumlah" placeholder="4,00" style="color:white; background: grey;" readonly="readonly"  class="form-control no-resize"></td>
                                        <td></td>
                                          <td width="25%" rowspan="5"><textarea rows="12" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah dosen bergelar S3</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="431b" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" ></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">KD2 Persentase dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="431bKD2" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" onkeyup="cekjumlah431a()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="431bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

                              <!--Butir 4.3.1c -->         
                       <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row"><?php echo $f1[31]['id'] ?></th>
                                        <td width="5%" rowspan="6"><?php echo $f1[31]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[31]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[31]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[31]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                   
                                   <tr>
                                        <td colspan="2">  </td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="431cjumlah" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                          <td width="25%" rowspan="5"><textarea rows="12" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah dosen dengan jabatan lektor kepala dan guru besar</td>
                                         <td width="10%"><input type="text" required name="nilai2[]" id="431c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah441c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">KD3 Persentase dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="431cKD3" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="431cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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


            <!--Butir 4.3.1d -->         
                       <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row"><?php echo $f1[32]['id'] ?></th>
                                        <td width="5%" rowspan="6"><?php echo $f1[32]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[32]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[32]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[32]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="idnyainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                   
                                   <tr>
                                        <td colspan="2"> Jumlah dosen tetap (butir 4.3.1.a) </td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="431ajumlah" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize" onkeyup="cekjumlah431a()"></td>
                                        <td></td>
                                          <td width="25%" rowspan="5"><textarea rows="12" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Dosen yang memiliki sertifikat pendidik profesional</td>
                                         <td width="10%"><input type="text" required name="nilai2[]" id="331c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">KD4 Persentase dosen yang memiliki Sertifikat Pendidik Profesional</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="idnyarasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="idnyanilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

                            <tbody>
                                <tr>
                                        <th width="5%" rowspan="8" scope="row"></th>
                                        <td width="5%" rowspan="8"></td>
                                        <td colspan="2"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="color:blue;">PILIH PRODI : EKSAKTA ATAU SOSIAL. ISI HANYA DIKOLOM YG TEPAT </td>
                                    </tr>
                                    <tr>
                                         <td colspan="2" style="color:blue;">Kolom isian yg tidak ada datanya harus diisi angka nol </td>
                                    </tr>
                           </tbody>

                               <!--Butir 4.3.2 -->
                        <tbody> 

                                    <tr>
                                        <th width="5%" rowspan="11" scope="row"><?php echo $f1[33]['id'] ?></th>
                                        <td width="5%" rowspan="11"><?php echo $f1[33]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[33]['aspek'] ?></td>
                                        <td></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[33]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[33]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="idnyainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                       
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah mahasiswa eksata</td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="432c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah432()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                         <td width="25%" rowspan="5"><textarea rows="12" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah mahasiswa sosial</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="432c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah432()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <td colspan="2">Jumlah dosen eksata</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="432c3" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah432()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah dosen sosial</td>
                                        <td width="10%"><input type="text" name="nilai4[]" id="432c4" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah432()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Rasio eksata</td>
                                        <td width="10%"><input type="text" name="nilai5[]" id="432rasio" placeholder="4,00"  readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Rasio sosial</td>
                                        <td width="10%"><input type="text" name="nilai6[]" id="432rasio1" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai sosial</td>
                                        <td width="10%"><input type="text" name="nilai6[]" id="432rasio3" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai eksakta</td>
                                        <td width="10%"><input type="text" name="nilai7[]" id="432rasio4" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilaiidnya"><input type="text" name="skorakhir[]" id="432nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>   

             <!-- Butir 4.3.3 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[34]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[34]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[34]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[34]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[34]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="433" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah433()"></td>
                                        <td></td>
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="333info" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="433nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

 <!-- BUTIR 4.3.4 & 4.3.5-->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[35]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[35]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[35]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[35]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[35]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="434" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah434()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td>1</td>
                                        <td width="45%">Lebih dari 7 mata kuliah diajar oleh dosen yang tidak sesuai keahliannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">4 –7 mata kuliah diajar oleh dosen yang tidak sesuai keahliannya. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">1 – 3 mata kuliah diajar oleh dosen yang tidak sesuai keahliannya. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Semua mata kuliah diajar oleh dosen yang sesuai keahliannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                   
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="434nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
<!-- BUTIR 4.3.4 & 4.3.5-->

                            <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[36]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[36]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[36]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[36]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[36]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="435cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                    
                                        <td colspan="2">Kehadiran direncanakan</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="435c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                       
                                        <td colspan="2">Kehadiran dilaksanakan</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="435c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah435()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Persentase kehadiran dosen tetap</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="435rasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="435nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

        <!-- BUTIR 4.4.1-->

                               <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[37]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[37]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[37]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[37]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[37]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="441info" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah dosen tidak tetap</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="4411" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah441()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah dosen tetap (sesuai dan tidak sesuai bidang PS)</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="4412" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah441()"></td>
                                        <td></td>
                                    </tr>
                                
                                    <tr>
                                        <td colspan="2">Persentase dosen tidak tetap terhadap jumlah seluruh dosen (Pdtt)</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="441rasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="441nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

      <!-- BUTIR 4.4.2a-->                  
                     <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[38]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[38]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[38]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[38]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[38]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="442a" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah442a()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
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
                                        <td width="45%">Lebih dari 6 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">5-6 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">3-4 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">1 – 2 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Semua dosen tidak tetap mengajar mata kuliah yang sesuai keahliannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                   
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="442anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

        <!-- BUTIR 4.4.2b-->

                               <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[39]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[39]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[39]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[39]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[39]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="331cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Jumlah kehadiran yang direncanakan.</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="331c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah kehadiran yang dilaksanakan.</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="331c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                
                                    <tr>
                                        <td colspan="2">Persentase kehadiran dosen tidak tetap</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="331cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

            <!-- Butir 4.5.1 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[40]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[40]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[40]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[40]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[40]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="451" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah451()"></td>
                                        <td></td>
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="333info" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="451nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

            <!--Butir 4.5.2 -->         
                       <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[41]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[41]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[41]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[41]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[41]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="idnyainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                   
                                   <tr>
                                        <td colspan="2"> Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS. </td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="idnyarasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                          <td width="25%" rowspan="5"><textarea rows="12" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> Persentase dosen berpendidikan S3 (dalam %) </td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="idnyarasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">N2 Jumlah dosen tugas belajar S2/Sp-1</td>
                                         <td width="10%"><input type="text" required name="nilai3[]" id="331c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                      <tr>
                                        <td colspan="2">N3 Jumlah dosen tugas belajar S3/Sp-2</td>
                                         <td width="10%"><input type="text" required name="nilai4[]" id="331c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">SD SD=(0.75 N2 + 1.25 N3)</td>
                                        <td width="10%"><input type="text" name="nilai5[]" id="idnyarasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="idnyanilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 4.5.3 -->    
                 <tbody > 

                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[42]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[42]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[42]['aspek'] ?></td>
                                        <td></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[42]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[42]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="idnyainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                       
                                    </tr>
                                    <tr>
                                        <td colspan="2">a Jumlah kehadiran sebagai penyaji</td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="idnya1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                         <td width="25%" rowspan="5"><textarea rows="12" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">b Jumlah kehadiran sebagai peserta</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="idnya2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">N Jumlah dosen tetap (butir 4.3.1.a)</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="idnyaskor" placeholder="4,00"  readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">SP SP = (a+b/4)/N</td>
                                        <td width="10%"><input type="text" name="nilai4[]" id="idnyanilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilaiidnya"><input type="text" name="skorakhir[]" id="idnyanilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                <!--Butir 4.5.4 -->    
                                 <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[43]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[43]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[43]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[43]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[43]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="454" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah454()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor </td>
                                        <td></td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak pernah mendapat penghargaan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Mendapatkan penghargaan, hibah, pendanaan program dan kegiatan akademik yang berupa hibah dana  dari PT sendiri (disertai bukti).</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi regional/lokal (disertai bukti). </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi nasional (disertai bukti).</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi internasional (disertai bukti).</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="454nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 4.5.5 -->   
                         <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[44]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[44]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[44]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[44]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[44]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="455c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah455()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                       <td width="25%"><textarea rows="2" name="masukan[]" id="idnyainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Persentase dosen yang menjadi anggota masyarakat bidang ilmu</td>
                                         <td width="10%"><input type="text" required name="nilai2[]" id="455c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah455()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada dosen tetap yang menjadi anggota masyarakat bidang ilmu. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Ada tapi kurang dari 15%  dosen tetap yang menjadi anggota masyarakat bidang ilmu tingkat internasional atau nasional.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Antara 15% s.d. 30% dosen tetap yang menjadi anggota masyarakat bidang ilmu tingkat internasional atau nasional. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Lebih dari 30% dosen tetap  menjadi anggota masyarakat bidang ilmu tingkat internasional atau nasional.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Lebih dari 30%  dosen tetap menjadi anggota masyarakat bidang ilmu tingkat internasional. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                   
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="455nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 4.6.1a -->    
                         <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row"><?php echo $f1[45]['id'] ?></th>
                                        <td width="5%" rowspan="6"><?php echo $f1[45]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[45]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[45]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[45]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="461ainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>X1</td>
                                        <td width="45%">Jumlah pustakawan S2 atau S3</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="461a1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah461a()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>X2</td>
                                        <td width="45%">Jumlah pustakawan D4 atau S1</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="461a2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah461a()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>X3</td>
                                        <td width="45%">Jumlah pustakawan D1, D2, D3, atau bersertifikat pelatihan</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="461a3" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah461a()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A</td>
                                        <td width="45%">A=(4 X1 + 3 X2 + 2 X3)/4</td>
                                        <td width="10%"><input type="text" required name="nilai4[]" id="461arasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="461anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

                <!--Butir 4.6.1b --> 
                         <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[46]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[46]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[46]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[46]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[46]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="461b" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah461b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Kurang dalam jumlah atau terlalu banyak sehingga kurang kegiatannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Cukup dalam jumlah dan kualifikasi tetapi mutu kerjanya sedang-sedang saja.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Jumlah cukup dan memadai kegiatannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Jumlah cukup dan memadai kegiatannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="461bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 4.6.1c -->   
                         <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[47]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[47]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[47]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[47]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[47]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="461cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>X1</td>
                                        <td width="45%">Jumlah tenaga admin D4 atau S1</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="461c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah461c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>X2</td>
                                        <td width="45%">Jumlah tenaga admin D3</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="461c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah461c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>X3</td>
                                        <td width="45%">Jumlah tenaga admin D1 atau D2</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="461c3" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah461c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>X4</td>
                                        <td width="45%">Jumlah tenaga admin SMU/SMK</td>
                                        <td width="10%"><input type="text" required name="nilai4[]" id="461c4" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah461c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>D</td>
                                        <td td width="45%">(4X1+3X2+2X3+X4)/4</td>
                                        <td width="10%"><input type="text" required name="nilai5[]" id="461crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="461cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 4.6.2 -->  
                             <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[48]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[48]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[48]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[48]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[48]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="462" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah462()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Tidak ada upaya pengembangan, padahal kualifikasi dan kompetensi  tenaga kependidikan relatif masih kurang.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Upaya pengembangan telah dilakukan dengan  cukup sehingga dapat meningkatkan kualifikasi dan kompetensi tenaga kependidikan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Upaya pengembangan telah dilakukan dengan  baik sehingga dapat meningkatkan kualifikasi dan kompetensi tenaga kependidikan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Upaya pengembangan telah dilakukan dengan sangat baik sehingga dapat meningkatkan kualifikasi dan kompetensi tenaga kependidikan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="462nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.1.1a -->  
                         <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[49]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[49]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[49]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[49]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[49]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="511a" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah511a()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <td>0</td>
                                        <td width="45%">Kurikulum tidak memuat kompetensi lulusan secara lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya), namun rumusannya kurang jelas.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara cukup jelas.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara jelas.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara sangat jelas.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="511anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.1.1b --> 
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[50]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[50]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[50]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[50]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[50]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="511b" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah511b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak sesuai dengan visi-misi serta tidak jelas orientasinya, atau tidak memuat memuat standar kompetensi.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Tidak sesuai dengan visi-misi.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Sesuai dengan visi-misi, tetapi masih berorientasi ke masa lalu.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Sesuai dengan visi-misi, berorientasi ke masa kini.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Sesuai dengan visi-misi, sudah berorientasi  ke masa depan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="511bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.1.2a -->  
                    <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[51]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[51]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[51]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[51]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[51]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="512a" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah512a()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak memiliki standar kompetensi.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Tidak sesuai dengan standar kompetensi.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Sesuai dengan standar kompetensi, tetapi masih berorientasi ke masa lalu.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Sesuai dengan standar kompetensi, berorientasi ke masa kini.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Sesuai dengan standar kompetensi, sudah berorientasi  ke masa depan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="512anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.1.2b --> 

                               <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[52]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[52]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[52]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[52]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[52]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="512binfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Jumlah MK pada kolom 7 yg ada tanda centang (v)</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="512b1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah512b()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah MK wajib +  pilihan</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="512b2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah512b()"></td>
                                        <td></td>
                                    </tr>
                                
                                    <tr>
                                        <td colspan="2">Persentase MK dengan tugas >=20%</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="512brasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="512bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
      
                <!--Butir 5.1.2c -->       

                               <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[53]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[53]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[53]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[53]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[53]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="512cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Jumlah MK dengan deskripsi, silabus, dan SAP</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="512c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah512c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah seluruh MK</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="512c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah512c()"></td>
                                        <td></td>
                                    </tr>
                                
                                    <tr>
                                        <td colspan="2">Persentase mata kuliah yang memiliki deskripsi, silabus dan SAP</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="512crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="512cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

                <!--Butir 5.1.3 -->       

                               <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[54]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[54]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[54]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[54]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[54]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="331cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Bobot MK pilihan yang harus diambil</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="331c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">MK pilihan yang disediakan</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="331c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                
                                    <tr>
                                        <td colspan="2">Rasio SKS mata kuliah pilihan yang disediakan terhadap jumlah sks yang diwajibkan</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="331cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.1.4 -->   
                              <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[55]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[55]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[55]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[55]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[55]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="514" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah514()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Substansi praktikum dan pelaksanaan praktikum.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Pelaksanaan modul praktikum cukup, tetapi dilaksanakan di PT lain.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Pelaksanaan modul praktikum cukup, dilaksanakan di PT sendiri.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Pelaksanaan modul praktikum lebih dari cukup  (ditambah dengan demonstrasi di laboratorium ) di PT sendiri.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="514nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.2a -->  
                       <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[56]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[56]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[56]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[56]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[56]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="52a" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah52a()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <td>0</td>
                                        <td width="45%">Dalam 5 tahun terakhir, tidak pernah melakukan peninjauan ulang (Khusus untuk PS yang berdiri 5 tahun atau lebih).</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Pengembangan mengikuti perubahan di perguruan tinggi lain tanpa penyesuaian.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Pengembangan mengikuti perubahan di perguruan tinggi lain yang disesuaikan dengan visi, misi, dan umpan balik.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Pengembangan dilakukan bekerjasama dengan perguruan tinggi lain tetapi tidak melibatkan pemangku kepentingan eksternal lainnya walaupun menyesuaikan dengan visi, misi, dan umpan balik.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Pengembangan dilakukan secara mandiri dengan melibatkan pemangku kepentingan internal dan eksternal dan memperhatikan visi, misi, dan umpan balik program studi.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="52anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.2b -->
                          <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[57]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[57]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[57]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[57]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[57]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="52b" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah52b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada pembaharuan kurikulum selama 5 tahun terakhir.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">(Tidak ada skor 1)</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Pembaharuan hanya menata ulang kurikulum yang sudah ada, tanpa disesuaikan dengan perkembangan. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Pembaharuan kurikulum dilakukan sesuai dengan perkembangan ilmu di bidangnya, tetapi kurang memperhatikan kebutuhan pemangku kepentingan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Pembaharuan kurikulum dilakukan sesuai dengan perkembangan ilmu di bidangnya dan kebutuhan pemangku kepentingan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai331a"><input type="text" required name="skorakhir[]" id="52bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                <!--Butir 5.3.1a --> 
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[58]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[58]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[58]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[58]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[58]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%">
                                        <td></td>
                                        <td width="25%" rowspan="4"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah skor untuk tiga aspek (Rentang 3 - 12)</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="331c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                      
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor Akhir</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="idnyasl" placeholder="4,00"  readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="idnyanilai" placeholder="4,00"  readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.3.1b --> 
                 <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[59]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[59]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[59]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[59]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[59]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="531b" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah531b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada mekanisme monitoring.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Materi kuliah hanya disusun oleh dosen pengajar tanpa melibatkan dosen lain.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Sesuai dengan standar kompetensi, tetapi masih berorientasi ke masa lalu.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Materi kuliah disusun oleh kelompok dosen dalam satu bidang ilmu, dengan memperhatikan masukan dari dosen lain.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Materi kuliah disusun oleh kelompok dosen dalam satu bidang ilmu, dengan memperhatikan masukan dari dosen lain atau dari pengguna lulusan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="531bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.3.2 -->   
                         <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[60]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[60]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[60]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[60]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[60]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="532" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah532()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <td>0</td>
                                        <td width="45%">Semua soal ujian tidak bermutu atau tidak sesuai dengan GBPP/SAP.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Hanya satu contoh soal ujian yang mutunya baik, dan sesuai dengan GBPP/SAP.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Dua s.d. tiga contoh soal ujian yang mutunya baik, dan sesuai dengan GBPP/SAP.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Empat dari lima contoh soal ujian yang mutunya baik, dan sesuai dengan GBPP/SAP.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Mutu soal ujian untuk lima mata kuliah yang diberikan semuanya bermutu baik, dan sesuai dengan GBPP/SAP.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="532nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.4.1a -->    
                            <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[61]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[61]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[61]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[61]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[61]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="541ainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Banyaknya dosen PA</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="541a1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah541a()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Banyaknya mahasiswa bimbingan PA</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="541a2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah541a()"></td>
                                        <td></td>
                                    </tr>
                                
                                    <tr>
                                        <td colspan="2">Rasio mahasiswa/dosen</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="541arasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="541anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.4.1b -->
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[62]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[62]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[62]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[62]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[62]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="541b" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah541b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada pembimbingan, hanya ada pengesahan dokumen akademik oleh pegawai administratif </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Perwalian tidak dilakukan oleh dosen PA tetapi oleh Tenaga Administrasi.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Perwalian dilakukan oleh sebagian dosen PA dan sebagian oleh Tenaga Administrasi.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Perwalian dilakukan oleh seluruh dosen PA tetapi tidak seluruhnya menurut panduan tertulis.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Dilakukan oleh seluruh dosen PA dengan baik sesuai panduan tertulis.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="541bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.4.1c -->   
                            <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[63]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[63]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[63]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[63]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[63]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="541c" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah541c()"></td>
                                        <td></td>
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="333info" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="541cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

                <!--Butir 5.4.2 -->   
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[64]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[64]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[64]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[64]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[64]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="542" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah542()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <td>0</td>
                                        <td width="45%">Sistem bantuan dan bimbingan akademik tidak jalan, atau tidak ada pembimbingan. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Sistem bantuan dan bimbingan akademik tidak efektif.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Sistem bantuan dan bimbingan akademik cukup efektif.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Sistem bimbingan akademik efektif.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Sistem bimbingan akademik sangat efektif.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="542nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.5.1a -->  
                            <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[65]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[65]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[65]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[65]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[65]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="551a" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah551a()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada panduan tertulis.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">(Tidak ada nilai 1)</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Ada panduan tertulis tetapi tidak disosialisasikan dengan baik, serta tidak dilaksanakan secara konsisten.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada panduan tertulis dan disosialisasikan dengan baik, tetapi tidak dilaksanakan secara konsisten.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada panduan tertulis yang disosialisasikan dan dilaksanakan dengan konsisten.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="551anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.5.1b --> 
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[66]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[66]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[66]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[66]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[66]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="551binfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Jumlah dosen pembimbing tugas akhir</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="551b1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah551b()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah mahasiswa tugas akhir</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="551b2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah551b()"></td>
                                        <td></td>
                                    </tr>
                                
                                    <tr>
                                        <td colspan="2">Rasio mahasiswa/dosen</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="551brasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="551bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.5.1c -->  
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[67]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[67]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[67]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[67]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[67]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="551c" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah551c()"></td>
                                        <td></td>
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="333info" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="551cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.5.1d -->    
                       <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[68]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[68]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[68]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[68]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[68]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="551d" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah551d()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Sebagian besar dosen pembimbing belum berpendidikan minimal S2 dan  tidak sesuai dengan bidang keahliannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Sebagian besar dosen pembimbing berpendidikan minimal S2, tetapi sebagian kecil tidak sesuai dengan bidang keahliannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Seluruh dosen pembimbing berpendidikan minimal S2, tetapi sebagian kecil tidak sesuai dengan bidang keahliannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Seluruh dosen pembimbing berpendidikan minimal S2 dan sesuai dengan bidang keahliannya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="551dnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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


                            <tbody>
                                <tr>
                                        <th width="5%" rowspan="8" scope="row"></th>
                                        <td width="5%" rowspan="8"></td>
                                        <td colspan="2"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="color:blue;">Kolom isian yang tidak ada datanya, harus diisi dengan nol.</td>
                                    </tr>
                                    <tr>
                                         <td colspan="2" style="color:red;">Untuk PS dengan waktu penyelesaian TA selama 1 semsster </td>
                                    </tr>
                           </tbody> 

                <!--Butir 5.5.2 -->     
                    <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[69]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[69]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[69]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[69]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[69]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="331cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Rata-rata waktu penyelesaian TA</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="331c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai TA terjadwal 1 semester</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="331c2" placeholder="4,00" style="background: grey;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                         <td colspan="2" style="color:red;">Untuk PS dengan waktu penyelesaian TA selama 2 semsster </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Rata-rata waktu penyelesaian TA</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: yellow;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai TA terjadwal 2 semester8</td>
                                        <td width="10%"><input type="text" required name="nilai4[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="331cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.6 -->      
                             <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[70]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[70]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[70]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[70]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[70]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="56" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah56()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                        <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada upaya perbaikan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Upaya perbaikan dilakukan untuk 1 dari yang seharusnya diperbaiki/ ditingkatkan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Upaya perbaikan dilakukan untuk 2 dari 4 yang seharusnya diperbaiki/ ditingkatkan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Upaya perbaikan dilakukan untuk 3 dari 4  yang seharusnya diperbaiki/ ditingkatkan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Upaya perbaikan dilakukan untuk  semua dari yang seharusnya diperbaiki/ ditingkatkan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="56nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.7.1 -->  
                          <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[71]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[71]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[71]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[71]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[71]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="571" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah571()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                   
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Tidak ada kebijakan tertulis tentang otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, dan kemitraan dosen-mahasiswa.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Kebijakan tertulis kurang lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Kebijakan lengkap mencakup informasi tentang otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, dan kemitraan dosen-mahasiswa, namun tidak dilaksanakan secara konsisten.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Kebijakan lengkap mencakup informasi tentang otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, dan kemitraan dosen-mahasiswa, serta dilaksanakan secara konsisten.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="571nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.7.2 -->
                          <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[72]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[72]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[72]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[72]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[72]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="572" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah572()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                  
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Prasarana utama masih kurang, demikian pula dengan dukungan dana.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Tersedia, cukup lengkap, milik sendiri atau sewa, dan dana yang cukup memadai.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Tersedia, milik sendiri,   lengkap, dan dana yang memadai.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Tersedia, milik sendiri,  sangat lengkap dan dana yang sangat memadai.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="572nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.7.3 -->  
                              <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[73]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[73]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[73]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[73]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[73]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="573" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah573()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                       
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Kegiatan ilmiah yang terjadwal dilaksanakan lebih dari 6 bulan sekali.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Kegiatan ilmiah yang terjadwal dilaksanakan 4 s/d 6 bulan sekali.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Kegiatan ilmiah yang terjadwal dilaksanakan 2 s/d 3 bulan sekali.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Kegiatan ilmiah yang terjadwal dilaksanakan setiap bulan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><<input type="text" required name="skorakhir[]" id="573nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.7.4 -->  
                              <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[74]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[74]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[74]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[74]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[74]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="574" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah574()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Upaya dinilai kurang dan hasilnya tidak nampak, atau tidak ada upaya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Cukup dalam upaya dan hasilnya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Upaya baik, namun hasilnya baru cukup</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Upaya baik dan hasilnya suasana kondusif untuk meningkatkan suasana akademik yang baik.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="574nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 5.7.5 -->   
                                  <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[75]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[75]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[75]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[75]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[75]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="575" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah575()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                        
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Kegiatan yang dilakukan tidak menunjang pengembangan perilaku kecendekiawanan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Kegiatan yang dilakukan cukup menunjang pengembangan perilaku kecendekiawanan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Kegiatan yang dilakukan menunjang pengembangan perilaku kecendekiawanan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Kegiatan yang dilakukan sangat menunjang pengembangan perilaku kecendekiawanan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="575nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.1-->  
                              <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[76]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[76]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[76]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[76]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[76]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="61" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah61()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                        <tr>
                                        <td>0</td>
                                        <td width="45%">Program studi tidak dilibatkan dalam perencanaan/ alokasi dan pengelolaan dana.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Program studi hanya diminta untuk memberikan masukan. Perencanaan alokasi dan pengelolaan dana dilakukan oleh Fakultas/ Sekolah Tinggi.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Program studi dilibatkan dalam perencanaan alokasi, namun pengelolaan dana dilakukan oleh Fakultas/Sekolah Tinggi.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Program studi tidak diberi otonomi, tetapi dilibatkan dalam melaksanakan perencanaan alokasi  dan pengelolaan dana.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Program studi secara otonom melaksanakan perencanaan alokasi  dan pengelolaan dana.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai331a"><input type="text" required name="skorakhir[]" id="61nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
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
                <!--Butir 6.2.1 -->   
                             <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[77]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[77]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[77]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[77]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[77]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="331cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Rata-rata dana pendidikan per tahun</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="331c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Rata-rata dana penelitian per tahun</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="331c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Rata-rata dana PkM per tahun</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="331c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Total dana operasional per tahun</td>
                                        <td width="10%"><input type="text" required name="nilai4[]" id="331c2" placeholder="4,00" style="background: grey;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                     <tr>
                                        <td colspan="2">Jumlah mahasiswa pada TS (Tabel 3.1.4)</td>
                                        <td width="10%"><input type="text" required name="nilai5[]" id="331c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Dom (dana operasional/mahasiswa/thn</td>
                                        <td width="10%"><input type="text" required name="nilai6[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="331cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    
                                    <input type='hidden' name='nilai7[]' value="0">
                                    <input type='hidden' name='nilai8[]' value="0">
                                    <input type='hidden' name='nilai9[]' value="0">
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
                <!--Butir 6.2.2 -->
                            <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[78]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[78]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[78]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[78]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[78]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="331cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Total dana penelitian dalam tiga tahun terakhir</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="331c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah dosen tetap dengan keahlian sesuai PS (butir 4.3.1.a)</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="331c2" placeholder="4,00" style="background: grey;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Rata-rata dana penelitian per dosen per tahun</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="331cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.2.3 -->  
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row"><?php echo $f1[79]['id'] ?></th>
                                        <td width="5%" rowspan="7"><?php echo $f1[79]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[79]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[79]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[79]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="331cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" >Total dana PkM dalam tiga tahun terakhir</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="331c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah dosen tetap PS  (butir 4.3.1.a)</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="331c2" placeholder="4,00" style="background: grey;" class="form-control no-resize" onkeyup="cekjumlah331c()"></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Rata-rata dana PkM per dosen per tahun</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="331cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.3.1 -->   
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="12" scope="row"><?php echo $f1[80]['id'] ?></th>
                                        <td width="5%" rowspan="12"><?php echo $f1[80]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[80]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[80]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[80]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="331cinfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea> </td> 
                                    </tr>
                                   
                                        <tr>
                                        <td>a</td>
                                        <td width="45%">Luas semua ruang untuk > 4 dosen</td>
                                        <td width="10%"><input type="text" required name="nilai1[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: yellow;" class="form-control no-resize"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>b</td>
                                        <td width="45%">Luas semua ruang untuk 3 - 4 dosen</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: yellow;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>c</td>
                                        <td width="45%">Luas semua ruang untuk 2 dosen</td>
                                        <td width="10%"><input type="text" required name="nilai3[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: yellow;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>d</td>
                                        <td width="45%">Luas semua ruang untuk 1 dosen</td>
                                        <td width="10%"><input type="text" required name="nilai4[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: yellow;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A</td>
                                        <td width="45%">A=a+2b+3c+4d</td>
                                        <td width="10%"><input type="text" required name="nilai5[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>B</td>
                                        <td width="45%">B=a+b+c+d</td>
                                        <td width="10%"><input type="text" required name="nilai6[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>SLRDT</td>
                                        <td width="45%">A/B</td>
                                        <td width="10%"><input type="text" required name="nilai7[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        
                                        <td colspan="2">Banyaknya dosen tetap dengan bidang sesuai PS  (butir 4.3.1.a)</td>
                                        <td width="10%"><input type="text" required name="nilai8[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        
                                        <td colspan="2">Skor kelengkapan sarana dan kenyamanan ruangan (-1.5 s.d. 1.5)</td>
                                        <td width="10%"><input type="text" required name="nilai9[]" id="331crasio" placeholder="4,00" readonly="readonly" style="color:white; background: yellow;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai331a"><input type="text" required name="skorakhir[]" id="331anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <input type='hidden' name='nilai10[]' value="0">
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>    
                <!--Butir 6.3.2-->  
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[81]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[81]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[81]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[81]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[81]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%">

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                        <tr>
                                        <td colspan="2">Prasarana (kecuali  ruang dosen) dalam proses pembelajaran.</td>
                                       <td width="10%"><input type="text" required name="nilai1[]" id="632" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah632()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Prasarana kurang lengkap dan mutunya kurang baik.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Prasarana cukup lengkap dan mutunya cukup untuk proses pembelajaran.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Prasarana lengkap dan mutunya baik untuk proses pembelajaran</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Prasarana lengkap dan mutunya sangat baik untuk proses pembelajaran. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="632nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.3.3 -->     
                      <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[82]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[82]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[82]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[82]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[82]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="633" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah633()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                        <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak ada prasarana penunjang.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Prasarana penunjang kurang lengkap dan mutunya kurang baik.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Prasarana penunjang cukup lengkap dan mutunya cukup untuk memenuhi kebutuhan mahasiswa.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Prasarana penunjang lengkap dan mutunya baik untuk memenuhi kebutuhan mahasiswa.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Prasarana penunjang lengkap dan mutunya sangat baik untuk memenuhi kebutuhan mahasiswa.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="633nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.4.1a -->    
                             <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[83]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[83]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[83]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[83]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[83]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="641a" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah641a()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="3"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                <tr>
                                    <td colspan="2">Skor</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="641askor" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="641anilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.4.1b-->   
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[84]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[84]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[84]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[84]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[84]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="641b" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah641b()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="3"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                <tr>
                                    <td colspan="2">Skor</td>
                                        <td width="10%"><input type="text" required name="nilai2[]" id="641bskor" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="641bnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.4.1c--> 
                      <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[85]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[85]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[85]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[85]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[85]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="641c" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah641c()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                        <tr>
                                        <td>0</td>
                                        <td width="45%">Tidak memiliki jurnal terakreditasi DIKTI.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Tidak ada jurnal yang nomornya lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Memiliki satu judul jurnal, nomornya lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Memiliki dua judul jurnal, nomornya lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Memiliki tiga atau lebih judul jurnal, nomornya lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="641cnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.4.1d--> 
                        <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[86]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[86]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[86]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[86]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[86]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="641d" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah641d()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Tidak ada jurnal internasional yang nomornya lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Satu judul jurnal internasional yang nomornya lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Dua atau lebih judul jurnal yang nomornya lengkap.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="641dnilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

                <!--Butir 6.4.1e -->
                            <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row"><?php echo $f1[87]['id'] ?></th>
                                        <td width="5%" rowspan="4"><?php echo $f1[87]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[87]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[87]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[87]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="641e" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah641e()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="3"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="641enilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.4.2 -->  
                                 <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[88]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[88]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[88]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[88]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[88]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="642" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah642()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Tidak ada perpustakaan di luar PT yang dapat diakses. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Ada perpustakaan di luar PT yang dapat diakses dan cukup baik fasilitasnya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada perpustakaan di luar PT yang dapat diakses dan baik fasilitasnya.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada beberapa perpustakaan di luar PT yang dapat diakses dan sangat baik fasilitasnya atau jika nilai rata-rata dari butir 6.4.1 >= 3.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="642nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.4.3 -->  
                            <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[89]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[89]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[89]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[89]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[89]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="643" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah643()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    <tr>
                                        <td>0</td>
                                        <td width="45%">Sangat kurang, kegiatan praktikum praktis tidak pernah dilakukan. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                      <tr>
                                        <td>1</td>
                                        <td width="45%">Kurang memadai, sehingga kegiatan praktikum dilaksanakan kurang dari batas minimal.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Cukup memadai, sebagian besar dalam kondisi baik, namun tidak mungkin digunakan di luar kegiatan praktikum terjadwal.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Memadai, sebagian besar dalam kondisi baik, dan PS memiliki akses yang baik (masih memungkinkan menggunakannya di luar kegiatan praktikum terjadwal, walau terbatas).</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Sangat memadai, terawat dengan sangat baik, dan PS memiliki akses yang sangat baik (memiliki fleksibilitas dalam menggunakannya di luar kegiatan praktikum terjadwal). </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="643nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.5.1-->     
                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[90]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[90]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[90]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[90]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[90]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="651" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah651()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Proses pembelajaran dilakukan secara manual.Pengelolaan koleksi perpustakaan menggunakan komputer stand alone, atau secara manual.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Sebagian dengan komputer, namun tidak terhubung dengan jaringan luas/internet.Kebanyakan software yang digunakan belum berlisensi.  Koleksi perpustakaan dikelola dengan komputer yang tidak terhubung jaringan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Dengan komputer yang terhubung dengan jaringan luas/internet, software yang berlisensi dengan jumlah yang memadai. Tersedia fasilitas e-learning namun belum dimanfaatkan secara efektif.  Koleksi perpustakaan dapat diakses secara on-line namun masih ada kendala dalam kecepatan akses.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Dengan komputer yang terhubung dengan jaringan luas/internet, software yang berlisensi dengan jumlah yang memadai. Tersedia fasilitas e-learning yang digunakan secara baik, dan akses on-line ke koleksi perpustakaan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="651nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 6.5.2-->   
                                <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[91]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[91]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[91]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[91]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[91]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="652info" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                      
                                        <td colspan="2">Banyak tanda √ pada kolom (3)--> Kisaran 0-11</td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="652c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah652()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                     <tr>
                                      
                                        <td colspan="2">Banyak tanda √ pada kolom (4)--> Kisaran 0-11</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="652c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah652()"></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td colspan="2">Banyak tanda √ pada kolom (5)--> Kisaran 0-11</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="652c3" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah652()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                       
                                        <td colspan="2">Banyak tanda √ pada kolom (6)--> Kisaran 0-11</td>
                                        <td width="10%"><input type="text" name="nilai4[]" id="652c4" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah652()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor</td>
                                        <td width="10%"><input type="text" name="nilai5[]" id="652rasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="652nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 7.1.1 --> 
                        <tbody> 
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[92]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[92]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[92]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[92]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[92]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="idnyainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                         <td>Na</td>
                                        
                                        <td width="45%">Jumlah penelitian dengan biaya LN</td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="idnya1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                     <tr>
                                        <td>Nb</td>
                                        <td width="45%">Jumlah penelitian dengan biaya luar (PT)</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="idnya1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                         <td>Nc</td>
                                        <td width="45%">Jumlah penelitian dengan biaya PT/sendiri</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="idnya2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>f</td>
                                        <td width="45%">Jumlah dosen tetap dengan bidang sesuai PS (butir 4.3.1.a)</td>
                                        <td width="10%"><input type="text" name="nilai4[]" id="idnya3" placeholder="4,00" style="background: grey;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai Kasar (NK)</td>
                                        <td width="10%"><input type="text" name="nilai5[]" id="idnyarasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="idnyanilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

                <!--Butir 7.1.2 -->
                             <tbody> 
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[93]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[93]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[93]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[93]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[93]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="idnyainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Na</td>
                                        <td width="45%">Jumlah penelitian dengan biaya LN</td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="idnya1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                     <tr>
                                        <td>Nb</td>
                                        <td width="45%">Jumlah penelitian dengan biaya luar (PT)</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="idnya1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                         <td>Nc</td>
                                        <td width="45%">Jumlah penelitian dengan biaya PT/sendiri</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="idnya2" placeholder="4,00" style="background: grey;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                    </tr>
                                   
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="idnyanilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 7.1.3 --> 
                               <tbody> 
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[94]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[94]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[94]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[94]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[94]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="idnyainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Na</td>
                                        <td width="45%">Jumlah keterlibatan dosen dalam artikel/karya ilmiah/seni tingkat internasional</td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="idnya1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                     <tr>
                                        <td>Nb</td>
                                        <td width="45%">Jumlah keterlibatan dosen dalam artikel/karya ilmiah/seni tingkat nasional</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="idnya1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Nc</td>
                                        <td width="45%">Jumlah keterlibatan dosen dalam artikel/karya ilmiah/seni tingkat lokal</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="idnya2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>f</td>
                                        <td width="45%">Jumlah dosen tetap dengan bidang sesuai PS (butir 4.3.1.a)</td>
                                        <td width="10%"><input type="text" name="nilai4[]" id="idnya3" placeholder="4,00" style="background: grey;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai Kasar (NK)</td>
                                        <td width="10%"><input type="text" name="nilai5[]" id="idnyarasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="idnyanilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 7.1.4 -->
                         <tbody> 
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[95]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[95]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[95]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[95]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[95]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                      
                                        <td colspan="2">Skor karya yang memperoleh HaKI.</td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="714" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah741()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                     <tr>
                                       <td>2</td>
                                        
                                        <td width="45%">Tidak ada karya dosen tetap yang memperoleh HaKI</td>
                                        
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                         <td>3</td>
                                        
                                        <td width="45%">  Satu yang memperoleh HaKI</td>
                                        
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        
                                        <td width="45%"> Dua atau lebih karya yang memperoleh HaKI</td>
                        
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="idnyanilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 7.2.1 -->    
                        <tbody> 
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row"><?php echo $f1[96]['id'] ?></th>
                                        <td width="5%" rowspan="8"><?php echo $f1[96]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[96]['aspek'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[96]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[96]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="25%"><textarea rows="2" name="masukan[]" id="idnyainfo" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                         <td>Na</td>
                                        
                                        <td width="45%">Jumlah kegiatan PkM dengan biaya LN</td>
                                        <td width="10%"><input type="text" name="nilai1[]" id="idnya1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                     <tr>
                                       <td>Nb</td>
                                        
                                        <td width="45%">Jumlah kegiatan PkM dengan biaya luar (PT)</td>
                                        <td width="10%"><input type="text" name="nilai2[]" id="idnya1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                         <td>Nc</td>
                                        
                                        <td width="45%">Jumlah kegiatan PkM dengan biaya PT/sendiri</td>
                                        <td width="10%"><input type="text" name="nilai3[]" id="idnya2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>f</td>
                                        
                                        <td width="45%">Jumlah dosen tetap dengan bidang sesuai PS (butir 4.3.1.a)</td>
                                        <td width="10%"><input type="text" name="nilai4[]" id="idnya3" placeholder="4,00" style="background: grey;" class="form-control no-resize" onkeyup="cekjumlahidnya()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai Kasar (NK)</td>
                                        <td width="10%"><input type="text" name="nilai5[]" id="idnyarasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" name="skorakhir[]" id="idnyanilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 7.2.2 -->
                            <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[97]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[97]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[97]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[97]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[97]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="722" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah722()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    </tr>
                                        <tr>
                                        <td>0</td>
                                        <td width="45%">Mahasiswa tidak dilibatkan dalam kegiatan PkM.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Keterlibatan mahasiswa sangat kurang.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Mahasiswa hanya diminta sebagai tenaga pembantu.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Mahasiswa terlibat penuh, namun tanggung jawab ada pada dosen Pembina.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Mahasiswa terlibat penuh dan diberi tanggung jawab.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="722nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 7.3.1 --> 
                             <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[98]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[98]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[98]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[98]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[98]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="731" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah731()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Belum ada atau tidak ada kerjasama.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Ada kerjasama dengan institusi di dalam negeri, kurang dalam jumlah. Sebagian besar relevan dengan bidang keahlian PS. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada kerjasama dengan institusi di dalam negeri, cukup dalam jumlah.  Sebagian besar relevan dengan bidang keahlian PS</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada kerjasama dengan institusi di dalam negeri, banyak dalam jumlah.  Semuanya  relevan dengan bidang keahlian PS.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="731nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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
                <!--Butir 7.3.2 -->
                         <tbody>
                                    <tr>
                                        <th width="5%" rowspan="9" scope="row"><?php echo $f1[99]['id'] ?></th>
                                        <td width="5%" rowspan="9"><?php echo $f1[99]['butir'] ?></td>
                                        <td colspan="2"><?php echo $f1[99]['aspek'] ?></td>
                                        <input type='hidden' name='id_buku[]' value="<?php echo $bukunya;?>">
                                        <input type='hidden' name='id_f1[]' value="<?php echo $f1[99]['id'];?>">
                                        <input type='hidden' name='butir[]' value="<?php echo $f1[99]['butir'];?>">
                                        <input type='hidden' name='nama_asesor[]' value="<?php echo ($_SESSION['name']);?>">
                                        <input type='hidden' name='masukan[]' value="">
                                        <input type='hidden' name='created_at[]' value="<?php echo date('Y-m-d H:i:s');?>">
                                        <input type='hidden' name='review_ke[]' value="<?php echo $newversi;?>">
                                        <td width="10%"><input type="text" required name="nilai1[]" id="732" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah732()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>

                                        <td></td>
                                     <td width="25%" rowspan="8"><textarea rows="14" name="komentar[]" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                                                           <tr>
                                        <td colspan="2">Skor matriks</td>
                                        <td></td>
                                        <td width="10%"></td>
                                         
                                        <td></td>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Belum ada atau tidak ada kerjasama.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Ada kerjasama dengan institusi di dalam negeri, kurang dalam jumlah. Sebagian besar relevan dengan bidang keahlian PS. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Ada kerjasama dengan institusi di dalam negeri, cukup dalam jumlah.  Sebagian besar relevan dengan bidang keahlian PS</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Ada kerjasama dengan institusi di dalam negeri, banyak dalam jumlah.  Semuanya  relevan dengan bidang keahlian PS.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><input type="text" required name="skorakhir[]" id="732nilai" placeholder="4,00" readonly="readonly" style="color:white; background: grey;" class="form-control no-resize"></td>
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

=======
>>>>>>> a7f06b8ee0a320d5fd4a888af9010ee1052addaf
        function cekjumlah11a(){
              var txt1 = document.getElementById('11a1').value;
              var txt2 = document.getElementById('11a2').value;
              var txt3 = document.getElementById('11a3').value;
              var txt4 = document.getElementById('11a4').value;
              var result = ((parseFloat(txt1) + parseFloat(txt2) + parseFloat(txt3) + parseFloat(txt4))/4);
<<<<<<< HEAD
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

        function cekjumlah333(){
              var txt1 = document.getElementById('333').value;
              var nilai = (parseFloat(txt1)/100).toFixed(2);
              var result = (parseFloat(txt1));
              var hitung = ((parseFloat(nilai)));

              var nilainya = 0 ;
                if(result==0){
                    nilainya = 0;
                } else if (result > 100) { 
                   
                } else if (result >=80/100) {
                    nilainya= 4;
                } else {
                    nilainya = (5*result);
                }
                var nilaides= nilainya.toFixed(2);

                var str1= 'Persentase lulusan yang bekerja sesuai dengan bidang keahliannya = '.concat(result);
              if (!isNaN(result)) {
                     document.getElementById('333nilai').value = nilaides;
                    document.getElementById('333info').value = str1;
                  }
        } 

          function cekjumlah341(){
              var txt1 = document.getElementById('341').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('341nilai').value = desimalnya;
                  }
        }

           
            function cekjumlah342(){
              var txt1 = document.getElementById('342').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('342nilai').value = desimalnya;
                  }
        }

            function cekjumlah41(){
              var txt1 = document.getElementById('41').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('41nilai').value = desimalnya;
                  }
        }

            function cekjumlah421(){
              var txt1 = document.getElementById('421').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('421nilai').value = desimalnya;
                  }
        }

            function cekjumlah422(){
              var txt1 = document.getElementById('422').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('422nilai').value = desimalnya;
                  }
        }

        function cekjumlah431a(){
              var txt1 = document.getElementById('431a1').value;
              var txt2 = document.getElementById('431a2').value;
              var txt3 = document.getElementById('431a3').value;
              var txt4 = document.getElementById('431a4').value;
             
              var hasilnya1 = 0;
              var hasilnya3 = 0;
              var result = ((parseFloat(txt1) + parseFloat(txt2) + parseFloat(txt3) + parseFloat(txt4)));
              var jum1 = parseFloat(txt2) + parseFloat(txt3);
              if (jum1>txt1) {
                hasilnya1 = 0;
              }else{
                hasilnya1 = parseFloat(txt3) + parseFloat(txt4);
              }

              var hasilnya2 = ((hasilnya1/txt1)*100);
              if (hasilnya2 >= 90) {
                hasilnya=4;
              }else if (hasilnya2>30) {
                hasilnya3 = ((20*hasilnya2)/3-2);
              }else{
                hasilnya3 = 0;
              }

            var KD2 = ((txt4) /(hasilnya1)*100); 
            var nilai431=0;
            if(KD2>=40) {
                nilai431=4;
            } else {
                nilai431=(2+(5*KD2));
            }
           
             var nil =nilai431.toFixed(2);
             var nil1= KD2.toFixed(2);
            
             var has2 = hasilnya2.toFixed(2);
             var has3 = hasilnya3.toFixed(2);
             var has4= parseFloat(hasilnya1);
             
              if (!isNaN(result)) {
                     document.getElementById('431ajumlah').value = hasilnya1;
                     document.getElementById('431aKD').value = has2;
                     document.getElementById('431anilai').value =has3 ;
                     document.getElementById('431ainfo').value = has3;
                     document.getElementById('431bnilai').value = nil;
                     document.getElementById('431bKD2').value = nil1;
                     document.getElementById('431bjumlah').value = has4;
                     document.getElementById('431b').value = txt4;
           }      
        }

         function cekjumlah431c(){
             var jumlah=document.getElementById('431ajumlah').value;
             var nil2 =nilai431c.toFixed(2);
             var nil02= KD3.toFixed(2);

            var txt5 = document.getElementById('431c1').value;
            var result=parseFloat(txt5);
            KD3 = ((txt5) /(jumlah)*100); 
            var nilai431c=0;
            if (KD3>=40/400) {
                nilai431c=4;
            } else {
                nilai431=((1+7.5*KD3));
            }
            var has5= parseFloat(jumlah);
               if (!isNaN(result)) {
                     document.getElementById('431cjumlah').value = has5;
                     document.getElementById('431cnilai').value =nil2;
                     document.getElementById('431cKD3').value = nil02;

                  }    

         }

         function cekjumlah432(){
              var txt1 = document.getElementById('432c1').value;
              var txt2 = document.getElementById('432c2').value;
              var txt3 = document.getElementById('432c3').value;
              var txt4 = document.getElementById('432c4').value;
              var nilai1 = (parseFloat(txt1));
              var nilai2 = (parseFloat(txt2));
              var nilai3 = (parseFloat(txt3));
              var nilai4 = (parseFloat(txt4));
              var result = ((parseFloat(nilai1) + parseFloat(nilai2) + parseFloat(nilai3) + parseFloat(nilai4)));
            var  htg= (parseFloat(nilai1) / parseFloat(nilai3));
            var  htg1= (parseFloat(nilai2) / parseFloat(nilai4));
            var  hitung=0;
              if ( nilai1==0 || nilai3==0) {
                hitung=0;
              } else {
                hitung = htg;
              }

            var hitung1=0;
              if ( nilai1==0 || nilai3==0) {
                hitung1=0;
              } else {
                hitung1 = htg1;
              }

            var  hitung3=0;
              if (hitung1<=5) {
                hitung3=0;
              } else if (hitung1<27){
                hitung3=((2*(hitung1-5)/11));
              } else if (hitung1<70) {
                hitung3=((4*(70-hitung1)/37));
              } else {
                hitung3=0;
              }

            var hitung4=0;
            if (hitung<17) {
                hitung4=((4*hitung)/17);
            } else if (hitung<=23) {
                hitung4=(4*(60-hitung));
            } else {
                hitung4=0;
            }

            var nilainya=0;
             if (txt1>0){
                nilainya=hitung4;
             }else {
                nilainya=hitung3;
             }
              var hasilnya1 = hitung.toFixed(2);
              var hasilnya2 = hitung1.toFixed(2);
          
              var hasilnya4 = hitung3.toFixed(2);
              var hasilnya5 = hitung4.toFixed(2);
              var hasilnya = nilainya.toFixed(2);
              var info1 = (parseFloat(txt1));
              var info2 = (parseFloat(txt2));
              var info3 = (parseFloat(txt3));
              var info4 = (parseFloat(txt4));
              var hasilinfo1 = info1.toFixed(2);
              var hasilinfo2 = info2.toFixed(2);
              var hasilinfo3 = info3.toFixed(2);
              var hasilinfo4 = info4.toFixed(2);
              var str1 = 'Pendapat pengguna terhadap kualitas alumni. Respon sangat baik = '.concat(hasilinfo1);
              var str2 = ' .Respon baik '.concat(hasilinfo2);
              var str3 = ' .Respon cukup '.concat(hasilinfo3);
              var str4 = ' .Respon kurang '.concat(hasilinfo4);
              if (!isNaN(result)) {
                     document.getElementById('432rasio').value = hasilnya1;
                     document.getElementById('432rasio1').value = hasilnya2;
                     document.getElementById('432rasio3').value = hasilnya4;
                     document.getElementById('432rasio4').value = hasilnya5;
                     document.getElementById('432nilai').value = nilainya;
                     document.getElementById('432info').value = str1.concat(str2,str3,str4);
                  }
         }

           function cekjumlah433(){
              var txt1 = document.getElementById('433').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              var nilainya=0;
              if (txt1<=5 || txt1>=21){
                nilainya=1;
              } else if (txt1>5 && txt1<11){
                nilainya=((txt1-3)/2);
              } else if (txt1>=11 && txt1<=13) {
                nilainya=4;
              } else {
                nilainya=((71-3*txt1)/8);
              }
              var hasilnya=nilainya.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('433nilai').value = hasilnya;
                  }
        }


        function cekjumlah434(){
              var txt1 = document.getElementById('434').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('434nilai').value = desimalnya;
                  }
        }

         function cekjumlah435(){
              var txt1 = document.getElementById('435c1').value;
              var txt2 = document.getElementById('435c2').value;
              var result = (parseFloat(txt2) / parseFloat(txt1)*100);

              var desimalnya = result.toFixed(2);
              var nilainya = 0;
              var hitung=0;
              
              if (result>1) {
                hitung=0;
              }else {
                hitung=result;
              }

              if (result>=95/100) {
                nilainya = 4;
              }else if ( result>60/100) {
                nilainya = (((80*result)-48)/7);
              } else {
                    nilainya=0;
              }
              
              var hasilnya = nilainya.toFixed(2);
              var str1 = 'Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi = '.concat(txt1);
              var str2 = ' / '.concat(txt2);
              var str3 = ' = '.concat(desimalnya);
              if (!isNaN(result)) {
                     document.getElementById('435rasio').value = desimalnya;
                     document.getElementById('435nilai').value = hasilnya;
                     document.getElementById('435info').value = str1.concat(str2,str3);
                  }
        }

        function cekjumlah441(){
              var txt1 = document.getElementById('4411').value;
              var txt2 = document.getElementById('4412').value;
              var result = (parseFloat(txt1) / (parseFloat(txt1) + parseFloat(txt2))*100);
              var desimalnya = result.toFixed(2);
              var nilainya = 0;
              if (result>=10*100) {
                nilainya = 4;
              }else if ( result<50/100) {
                nilainya = ((10*(50/100-result)));
              } else {
                    nilainya=0;
              }
              
              var hasilnya = nilainya.toFixed(2);
              var str1 = 'Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi = '.concat(txt1);
              var str2 = ' / '.concat(txt2);
              var str3 = ' = '.concat(desimalnya);
              if (!isNaN(result)) {
                     document.getElementById('441rasio').value = desimalnya;
                     document.getElementById('441nilai').value = hasilnya;
                     document.getElementById('441info').value = str1.concat(str2,str3);
                  }
        }

        function cekjumlah442a(){
              var txt1 = document.getElementById('442a').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('442anilai').value = desimalnya;
                  }
        }

         function cekjumlah451(){
              var txt1 = document.getElementById('451').value;
              var result = (parseFloat(txt1));
              var nilainya = result.toFixed(2);
              var nilainya=0;
              if (result>=12) {
                nilainya=4;
              } else {
                nilainya=((1+result)/4);
              }

              if (!isNaN(result)) {
                     document.getElementById('451nilai').value = nilainya;
                  }
        }

        function cekjumlah454(){
              var txt1 = document.getElementById('454').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('454nilai').value = desimalnya;
                  }
        }

         function cekjumlah455(){
             var txt1 = document.getElementById('455c1').value;
             var txt2 = document.getElementById('455c2').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('455nilai').value = desimalnya;
                  }
        }

         function cekjumlah461a(){
              var txt1 = document.getElementById('461a1').value;
              var txt2 = document.getElementById('461a2').value;
              var txt3 = document.getElementById('461a3').value;
              
              var result = ((parseFloat(txt1) + parseFloat(txt2) + parseFloat(txt3) + parseFloat(txt4)));
              var dihitung= (((4*(parseFloat(txt1))) + (3*(parseFloat(txt2))) + (2*(parseFloat(txt3))/4)));
            
              var desimalnya = result.toFixed(2);
              var nilainya = 0;
              if (result>=4) {
                nilainya = 4;
              } else  {
                nilainya= dihitung;
              }
              var hasilnya = nilainya.toFixed(2);
              var str1 = 'Presentase Mahasiswa yang DO atau mengundurkan diri = '.concat(pembagi);
              var str2 = ' / '.concat(txt1);
              var str3 = ' = '.concat(desimalnya);
              if (!isNaN(result)) {
                     document.getElementById('461arasio').value = desimalnya;
                     document.getElementById('461anilai').value = hasilnya;
                     document.getElementById('461ainfo').value = str1.concat(str2,str3);
                  }
        }

        function cekjumlah461b(){
              var txt1 = document.getElementById('461b').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('461bnilai').value = desimalnya;
                  }
        }

         function cekjumlah461c(){
              var txt1 = document.getElementById('461c1').value;
              var txt2 = document.getElementById('461c2').value;
              var txt3 = document.getElementById('461c3').value;
              var txt4 = document.getElementById('461c4').value;
              var nilai1 = (parseFloat(txt1)).toFixed(2);
              var nilai2 = (parseFloat(txt2)).toFixed(2);
              var nilai3 = (parseFloat(txt3)).toFixed(2);
              var nilai4 = (parseFloat(txt4)).toFixed(2);
              var result = ((parseFloat(nilai1) + parseFloat(nilai2) + parseFloat(nilai3) + parseFloat(nilai4)));
              var dihitung= ((4*(parseFloat(nilai1)) + (3*(parseFloat(nilai2))) + (2*(parseFloat(nilai3))) + ((parseFloat(nilai4))/4)));

            if (result>=4) {
                nilainya = 4;
              } else {
                nilainya= dihitung;
              }
              var hsl = (parseFloat(dihitung)/4);
              var hasilnya = nilainya.toFixed(2);
              var info1 = (parseFloat(txt1));
              var info2 = (parseFloat(txt2));
              var info3 = (parseFloat(txt3));
              var info4 = (parseFloat(txt4));
              var hasilinfo1 = info1.toFixed(2);
              var hasilinfo2 = info2.toFixed(2);
              var hasilinfo3 = info3.toFixed(2);
              var hasilinfo4 = info4.toFixed(2);
              var str1 = 'Pendapat pengguna terhadap kualitas alumni. Respon sangat baik = '.concat(hasilinfo1);
              var str2 = ' .Respon baik '.concat(hasilinfo2);
              var str3 = ' .Respon cukup '.concat(hasilinfo3);
              var str4 = ' .Respon kurang '.concat(hasilinfo4);
              if (!isNaN(result)) {
                     document.getElementById('461crasio').value = hsl;
                     document.getElementById('461cnilai').value = hasilnya;
                     document.getElementById('461cinfo').value = str1.concat(str2,str3,str4);
                  }
 
        }
               
         function cekjumlah462(){
              var txt1 = document.getElementById('462').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('462nilai').value = desimalnya;
                  }
        }

        function cekjumlah511a(){
              var txt1 = document.getElementById('511a').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('511anilai').value = desimalnya;
                  }
        }



         function cekjumlah511b(){
              var txt1 = document.getElementById('511b').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('511bnilai').value = desimalnya;
                  }
        }

        function cekjumlah512a(){
              var txt1 = document.getElementById('512a').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('512anilai').value = desimalnya;
                  }
        }

         function cekjumlah512b(){
              var txt1 = document.getElementById('512b1').value;
              var txt2 = document.getElementById('512b2').value;
              var result1 =((parseFloat(txt1) / parseFloat(txt2))*100);
              var result2= (parseFloat(txt2) / parseFloat(txt1));
              var desimalnya1 = result1.toFixed(2);
              var desimalnya2 = result2.toFixed(2);
              var nilainya1 = 0;
              var nilainya2 = 0;
              if (desimalnya1>=50) {
                nilainya1 = 4;
              }else {
                nilainya1= (8*desimalnya1);
              }
            
              var hasilnya1 = nilainya1.toFixed(2);
              var hasilnya2 = nilainya2.toFixed(2);
              var str1 = 'Presentase kelulusan tepat waktu (KWT) = '.concat(txt2);
              var str2 = ' / '.concat(txt1);
              var str3 = ' = '.concat(desimalnya1);
              if (!isNaN(result1)) {
                     document.getElementById('512brasio').value = desimalnya1;
                     document.getElementById('512bnilai').value = hasilnya1;
                     document.getElementById('512binfo').value = str1.concat(str2,str3);
                  }
        }


         function cekjumlah512c(){
              var txt1 = document.getElementById('512c1').value;
              var txt2 = document.getElementById('512c2').value;
              var result1 =((parseFloat(txt1) / parseFloat(txt2))*100);
              var result2= (parseFloat(txt2) / parseFloat(txt1));
              var desimalnya1 = result1.toFixed(2);
              var desimalnya2 = result2.toFixed(2);
              var nilainya1 = 0;
              var nilainya2 = 0;
              if (txt1>txt2) {
                nilainya1 = 0;
              }else {
                nilainya1= desimalnya1;
              }

              if (nilainya1<=55/100){
                nilainya2=0;
              } else if(nilainya1<95/100){
                nilainya2=(10*(nilainya1-55/100));
              } else {
                nilainya2=4;
              }
              var hasilnya1 = nilainya1.toFixed(2);
              var hasilnya2 = nilainya2.toFixed(2);
              var str1 = 'Presentase kelulusan tepat waktu (KWT) = '.concat(txt2);
              var str2 = ' / '.concat(txt1);
              var str3 = ' = '.concat(desimalnya1);
              if (!isNaN(result1)) {
                     document.getElementById('512crasio').value = hasilnya1;
                     document.getElementById('512cnilai').value = hasilnya2;
                     document.getElementById('512cinfo').value = str1.concat(str2,str3);
                  }
        }

         function cekjumlah514(){
              var txt1 = document.getElementById('514').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('514nilai').value = desimalnya;
                  }
        }

        function cekjumlah52a(){
              var txt1 = document.getElementById('52a').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('52anilai').value = desimalnya;
                  }
        }

        function cekjumlah52b(){
              var txt1 = document.getElementById('52b').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('52bnilai').value = desimalnya;
                  }
        }

        function cekjumlah531b(){
              var txt1 = document.getElementById('531b').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('531bnilai').value = desimalnya;
                  }
        }

         function cekjumlah532(){
              var txt1 = document.getElementById('532').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('532nilai').value = desimalnya;
                  }
        }

         function cekjumlah541a(){
              var txt1 = document.getElementById('541a1').value;
              var txt2 = document.getElementById('541a2').value;
              var result1 =(parseFloat(txt1) / parseFloat(txt2));
              var result2= (parseFloat(txt2) / parseFloat(txt1));
              var desimalnya1 = result1.toFixed(2);
              var desimalnya2 = result2.toFixed(2);
              var nilainya1 = 0;
              var nilainya2 = 0;

              if (desimalnya1=0){
                nilainya1=0;
              } else if (desimalnya1<=20){
                nilainya1=4;
              } else if (desimalnya1<60){
                nilainya1=((60-(desimalnya1)/10));
              } else {
                nilainya1=0;
              }    

              var hasilnya1 = nilainya1.toFixed(2);
              var hasilnya2 = nilainya2.toFixed(2);
              var str1 = 'Presentase kelulusan tepat waktu (KWT) = '.concat(txt2);
              var str2 = ' / '.concat(txt1);
              var str3 = ' = '.concat(desimalnya1);
              if (!isNaN(result1)) {
                     document.getElementById('541arasio').value = desimalnya2;
                     document.getElementById('541anilai').value = hasilnya1;
                     document.getElementById('541ainfo').value = str1.concat(str2,str3);
                  }
        }


          function cekjumlah541b(){
              var txt1 = document.getElementById('541b').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('541bnilai').value = desimalnya;
                  }
        }

        // function cekjumlah541c(){
        //       var txt1 = document.getElementById('541c').value;
        //       var result = (parseFloat(txt1));
        //       var nilainya = result.toFixed(2);
        //       var nilainya=0;

        //       if (result=){
        //         nilainya=0;
        //      }else if (result<3) {
        //         nilainya=(result+1);
        //      } else {
        //         nilainya=4;
        //      }
        //      var desimalnya=nilainya.toFixed(2);
        //       if (!isNaN(result)) {
        //              document.getElementById('541cnilai').value = desimalnya;
        //           }
        // }
          function cekjumlah542(){
              var txt1 = document.getElementById('542').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('542nilai').value = desimalnya;
                  }
        }

        function cekjumlah551a(){
              var txt1 = document.getElementById('551a').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)){
                     document.getElementById('551anilai').value = desimalnya;
                  }
        }

        function cekjumlah551b(){
              var txt1 = document.getElementById('551b1').value;
              var txt2 = document.getElementById('551b2').value;
              var result = ((parseFloat(txt1) + parseFloat(txt2)));
             
              var nilai1= (parseFloat(txt1).toFixed(2));
              var nilai2= (parseFloat(txt2).toFixed(2));
              var htg = (parseFloat(nilai2) / (parseFloat(nilai1)));
              var hitung=0;
              var nilainya=0;
              var htg1 =(5-(parseFloat(hitung/4)));

              if ( nilai1==0 || nilai2==0) {
                hitung=0;
              } else {
                hitung = htg;
              }
            
              if (hitung=0) {
                nilainya=0;
              } else if (hitung<=4) {
                nilainya=4;
              } else if (hitung<20) {
                nilainya=htg1;
              } else {
                nilainya=0;
              }
              var rasio = hitung.toFixed(2);
              var desimalnya = nilainya.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('551bnilai').value = desimalnya;
                     document.getElementById('551brasio').value = rasio;

                  }
        }

         function cekjumlah551c(){
              var txt1 = document.getElementById('551c').value;
              var result = (parseFloat(txt1));
              var nilainya = result.toFixed(2);
              var hitung= ((parseFloat(txt1)/2));
              var nilainya=0;
              if (hitung>=8){
                nilainya=4;
             }else{
                nilainya=hitung;
             }
             var desimalnya=nilainya.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('551cnilai').value = desimalnya;
                  }
        }


        function cekjumlah551d(){
              var txt1 = document.getElementById('551d').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('551dnilai').value = desimalnya;
                  }
        }

        function cekjumlah56(){
              var txt1 = document.getElementById('56').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('56nilai').value = desimalnya;
                  }
        }


        function cekjumlah571(){
              var txt1 = document.getElementById('571').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('571nilai').value = desimalnya;
                  }
        }

        function cekjumlah572(){
              var txt1 = document.getElementById('572').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('572nilai').value = desimalnya;
                  }
        }

        function cekjumlah573(){
              var txt1 = document.getElementById('573').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('573nilai').value = desimalnya;
                  }
        }

        function cekjumlah573(){
              var txt1 = document.getElementById('573').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('573nilai').value = desimalnya;
                  }
        }

        function cekjumlah574(){
              var txt1 = document.getElementById('574').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('574nilai').value = desimalnya;
                  }
        }

        function cekjumlah575(){
              var txt1 = document.getElementById('575').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('575nilai').value = desimalnya;
                  }
        }

        function cekjumlah61(){
              var txt1 = document.getElementById('61').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('61nilai').value = desimalnya;
                  }
        }

        function cekjumlah632(){
              var txt1 = document.getElementById('632').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('632nilai').value = desimalnya;
                  }
        }

        function cekjumlah633(){
              var txt1 = document.getElementById('633').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('633nilai').value = desimalnya;
                  }
        }


         function cekjumlah641a(){
              var txt1 = document.getElementById('641a').value;
              var result = (parseFloat(txt1));
              var skor = ((parseFloat(txt1)/100));
              var nilainya =0;
                 if (skor>=4) {
                    nilainya=4;
                 } else {
                    nilainya=skor;
                 }
              var hitung=skor.toFixed(2);
              var desimalnya=nilainya.toFixed(2);
              
              if (!isNaN(result)) {
                     document.getElementById('641anilai').value = desimalnya;
                     document.getElementById('641askor').value = hitung;
                  }
        }

         function cekjumlah641b(){
              var txt1 = document.getElementById('641b').value;
              var result = (parseFloat(txt1));
              var skor = ((parseFloat(txt1)/50));
              var nilainya =0;
                 if (skor>=4) {
                    nilainya=4;
                 } else {
                    nilainya=skor;
                 }
              var hitung=skor.toFixed(2);
              var desimalnya=nilainya.toFixed(2);
              
              if (!isNaN(result)) {
                     document.getElementById('641bnilai').value = desimalnya;
                     document.getElementById('641bskor').value = hitung;
                  }
        }
           function cekjumlah641c(){
              var txt1 = document.getElementById('641c').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('641cnilai').value = desimalnya;
                  }
        }

         function cekjumlah641d(){
              var txt1 = document.getElementById('641d').value;
              var result = (parseFloat(txt1));
=======
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

        function cekjumlah24(){
              var txt1 = document.getElementById('24').value;
              var result = ((parseFloat(txt1)));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('24nilai').value = desimalnya;
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
>>>>>>> a7f06b8ee0a320d5fd4a888af9010ee1052addaf
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
<<<<<<< HEAD
                     document.getElementById('641dnilai').value = desimalnya;
                  }
        }

          function cekjumlah641e(){
              var txt1 = document.getElementById('641e').value;
              var result = (parseFloat(txt1));
              var nilainya = result.toFixed(2);
              var hitung= (4*(parseFloat(txt1)/9));
              var nilainya=0;
              if (hitung>4){
                nilainya=4;
             }else{
                nilainya=hitung;
             }
             var desimalnya=nilainya.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('641enilai').value = desimalnya;
                  }
        }

         function cekjumlah642(){
              var txt1 = document.getElementById('642').value;
              var result = (parseFloat(txt1));
=======
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
>>>>>>> a7f06b8ee0a320d5fd4a888af9010ee1052addaf
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
<<<<<<< HEAD
                     document.getElementById('642nilai').value = desimalnya;
                  }
        }
         function cekjumlah643(){
              var txt1 = document.getElementById('643').value;
              var result = (parseFloat(txt1));
=======
                     document.getElementById('311crasio').value = desimalnya;
                     document.getElementById('311cnilai').value = hasilnya;
                     document.getElementById('311cinfo').value = str1.concat(str2,str3);
                  }
        }

        function cekjumlah311d(){
              var txt1 = document.getElementById('311d1').value;
              var txt2 = document.getElementById('311d2').value;
              var result = (parseFloat(txt1) / parseFloat(txt2));
>>>>>>> a7f06b8ee0a320d5fd4a888af9010ee1052addaf
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
<<<<<<< HEAD
                     document.getElementById('643nilai').value = desimalnya;
                  }
        }
         function cekjumlah651(){
              var txt1 = document.getElementById('651').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('651nilai').value = desimalnya;
                  }
        }

        function cekjumlah652(){
              var txt1 = document.getElementById('652c1').value;
              var txt2 = document.getElementById('652c2').value;
              var txt3 = document.getElementById('652c3').value;
              var txt4 = document.getElementById('652c4').value;
              var nilai1 = (parseFloat(txt1)).toFixed(2);
              var nilai2 = (parseFloat(txt2)).toFixed(2);
              var nilai3 = (parseFloat(txt3)).toFixed(2);
              var nilai4 = (parseFloat(txt4)).toFixed(2);
              var result = ((parseFloat(nilai1) + parseFloat(nilai2) + parseFloat(nilai3) + parseFloat(nilai4)));
              var dihitung= ((parseFloat(nilai1)) + (2*(parseFloat(nilai2))) + (3*(parseFloat(nilai3))) + ((4*(parseFloat(nilai4))/11)));
            if (result>11) {
                nilainya = 0;
              }else {
                nilainya= dihitung;
              }
              var hasilnya = nilainya.toFixed(2);
              var info1 = (parseFloat(txt1)/100);
              var info2 = (parseFloat(txt2)/100);
              var info3 = (parseFloat(txt3)/100);
              var info4 = (parseFloat(txt4)/100);
              var hasilinfo1 = info1.toFixed(2);
              var hasilinfo2 = info2.toFixed(2);
              var hasilinfo3 = info3.toFixed(2);
              var hasilinfo4 = info4.toFixed(2);
              var str1 = 'Pendapat pengguna terhadap kualitas alumni. Respon sangat baik = '.concat(hasilinfo1);
              var str2 = ' .Respon baik '.concat(hasilinfo2);
              var str3 = ' .Respon cukup '.concat(hasilinfo3);
              var str4 = ' .Respon kurang '.concat(hasilinfo4);
              if (!isNaN(result)) {
                     document.getElementById('652rasio').value = nilainya;
                     document.getElementById('652nilai').value = nilainya;
                     document.getElementById('652info').value = str1.concat(str2,str3,str4);
=======
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
>>>>>>> a7f06b8ee0a320d5fd4a888af9010ee1052addaf
                  }
              }

<<<<<<< HEAD

        function cekjumlah714(){
              var txt1 = document.getElementById('714').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('714nilai').value = desimalnya;
                  }
        }



        function cekjumlah722(){
              var txt1 = document.getElementById('722').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('722nilai').value = desimalnya;
                  }
        }

        function cekjumlah731(){
              var txt1 = document.getElementById('731').value;
              var result = (parseFloat(txt1));
              var desimalnya = result.toFixed(2);
              if (!isNaN(result)) {
                     document.getElementById('731nilai').value = desimalnya;
                  }
        }

        function cekjumlah732(){
              var txt1 = document.getElementById('732').value;
=======
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
>>>>>>> a7f06b8ee0a320d5fd4a888af9010ee1052addaf
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
<<<<<<< HEAD
                     document.getElementById('732nilai').value = desimalnya;
                  }
        }

       function akumulasi(){
     
=======
                     document.getElementById('332nilai').value = nilaides;
                    document.getElementById('332info').value = str1.concat(str2);
                  }
        }






        function akumulasi(){
>>>>>>> a7f06b8ee0a320d5fd4a888af9010ee1052addaf
          var nil1 = $("#11anilai").val();
          var nil2 = $("#11bnilai").val();
          var nil3 = $("#12nilai").val();
          var nil4 = $("#21nilai").val();
          var nil5 = $("#22nilai").val();
          var nil6 = $("#23nilai").val();
          var nil7 = $("#24nilai").val();
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
<<<<<<< HEAD
          var nil23 = $("#332nilai").val();
          var nil24 = $("#333nilai").val();
          var nil25 = $("#341nilai").val();
          var nil26 = $("#342nilai").val();
          var nil27 = $("#41nilai").val();
          var nil28 = $("#421nilai").val();
          var nil29 = $("#422nilai").val();
          var nil30 = $("#431anilai").val();
      

        if (nil1!=="" && nil2!==""&&nil3!==""&&nil4!==""&&nil5!==""&&nil6!==""&&nil7!==""&&nil8!==""&& nil9!==""&&nil10!==""&& nil11!==""&&nil12!==""&&nil13!==""&& nil14!==""&&nil15!==""&&nil16!==""&& nil17!==""&& nil18!==""&&nil19!=="" && nil20!==""&&nil21!==""&&nil22!==""&&nil23!==""&&nil24!==""&&nil25!==""&&nil26!==""&&nil27!==""&&nil28!==""&&nil29!==""&&nil30!==""    ) { 
               $.ajax({
                   // url:"<?php echo base_url()?>index.php/C_penilaian/nilaiborang/"+nil1+"/"+nil2+"/"+nil3+"/"+nil4+"/"+nil5+"/"+nil6+"/"+nil7+"/"+nil8+"/"+nil9+"/"+nil10+"/"+nil11+"/"+nil12+"/"+nil13,
                   url:"<?php echo base_url()?>index.php/C_penilaian/nilaiborang/"+nil1+"/"+nil2+"/"+nil3+"/"+nil4+"/"+nil5+"/"+nil6+"/"+nil7+"/"+nil8+"/"+nil9+"/"+nil10+"/"+nil11+"/"+nil12+"/"+nil13+"/"+nil14+"/"+nil15+"/"+nil16+"/"+nil17+"/"+nil18+"/"+nil19+"/"+nil20+"/"+nil21+"/"+nil22+"/"+nil23+"/"+nil24+"/"+nil25+"/"+nil26+"/"+nil27+"/"+nil28+"/"+nil29+"/"+nil30,
=======
               $.ajax({
                   // url:"<?php echo base_url()?>index.php/C_penilaian/nilaiborang/"+nil1+"/"+nil2+"/"+nil3+"/"+nil4+"/"+nil5+"/"+nil6+"/"+nil7+"/"+nil8+"/"+nil9+"/"+nil10+"/"+nil11+"/"+nil12+"/"+nil13,
                   url:"<?php echo base_url()?>index.php/C_penilaian/nilaiborang/"+nil1+"/"+nil2+"/"+nil3+"/"+nil4+"/"+nil5+"/"+nil6+"/"+nil7+"/"+nil8+"/"+nil9+"/"+nil10+"/"+nil11+"/"+nil12+"/"+nil13+"/"+nil14+"/"+nil15+"/"+nil16+"/"+nil17+"/"+nil18+"/"+nil19+"/"+nil20+"/"+nil21+"/"+nil22,
>>>>>>> a7f06b8ee0a320d5fd4a888af9010ee1052addaf
                   success:function(data){
                       $("#nilaiborang").html(data);
                   }
               });
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