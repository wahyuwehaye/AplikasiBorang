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
            <?=form_open("C_penilaian/tambah_proses");?>
            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body table-responsive">
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
                                        <th width="5%" rowspan="7" scope="row">1</th>
                                        <td width="5%" rowspan="7"><?php echo $butir[97]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[97]['bakumutu'] ?></td>
                                        <td></td>
                                        <td></td>
                                        <td width="25%" rowspan="7"><textarea rows="16" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kejelasan (1 - 4) </td>
                                        <td width="10%"><input type="text" name="11a1" id="11a1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kerealistikan (1 - 4)</td>
                                        <td width="10%"><input type="text" name="11a2" id="11a2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor keterkaitan (1 - 4)</td>
                                        <td width="10%"><input type="text" name="11a3" id="11a3" placeholder="4,00" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor keterlibatan pemangku kepentingan (1 - 4)</td>
                                        <td width="10%"><input type="text" name="11a4" id="11a4" placeholder="4,00" onkeyup="cekjumlah11a()" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor akhir</td>
                                        <td width="10%"><div id="skorakhir11a"><input type="text" name="11askor" id="11askor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai11a"><input type="text" name="11anilai" id="11anilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 1.1.b -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="5" scope="row">2</th>
                                        <td width="5%" rowspan="5"><?php echo $butir[96]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[96]['bakumutu'] ?></td>
                                        <td></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="12" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kejelasan tahapan waktu dan kerealistikan (1 - 4)</td>
                                        <td width="10%"><input type="text" name="11b1" id="11b1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kelengkapan dokumen (1 - 4)</td>
                                        <td width="10%"><input type="text" name="11b2" id="11b2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah11b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor akhir</td>
                                        <td width="10%"><div id="skorakhir11b"><input type="text" name="11bskor" id="11bskor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai11b"><input type="text" name="11bnilai" id="11bnilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 1.2 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row">3</th>
                                        <td width="5%" rowspan="7"><?php echo $butir[95]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[95]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="12" id="12" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah12()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="7"><textarea rows="14" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
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
                                        <td width="10%"><div id="nilai12"><input type="text" name="12nilai" id="12nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.1 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row">4</th>
                                        <td width="5%" rowspan="7"><?php echo $butir[94]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[94]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="21" id="21" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah21()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="7"><textarea rows="14" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
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
                                        <td width="10%"><div id="nilai21"><input type="text" name="21nilai" id="21nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.2 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row">5</th>
                                        <td width="5%" rowspan="7"><?php echo $butir[93]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[93]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="22" id="22" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah22()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="7"><textarea rows="14" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
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
                                        <td width="10%"><div id="nilai22"><input type="text" name="22nilai" id="22nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.3 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row">6</th>
                                        <td width="5%" rowspan="8"><?php echo $butir[92]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[92]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="23" id="23" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah23()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
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
                                        <td width="10%"><div id="nilai23"><input type="text" name="23nilai" id="23nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.4 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row">7</th>
                                        <td width="5%" rowspan="8"><?php echo $butir[91]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[91]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="24" id="24" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah24()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
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
                                        <td width="10%"><div id="nilai24"><input type="text" name="24nilai" id="24nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.5 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row">8</th>
                                        <td width="5%" rowspan="8"><?php echo $butir[90]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[90]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="25" id="25" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah25()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
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
                                        <td width="10%"><div id="nilai25"><input type="text" name="25nilai" id="25nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 2.6 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row">9</th>
                                        <td width="5%" rowspan="8"><?php echo $butir[89]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[89]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="26" id="26" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah26()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
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
                                        <td width="10%"><div id="nilai26"><input type="text" name="26nilai" id="26nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.1.a -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row">10</th>
                                        <td width="5%" rowspan="6"><?php echo $butir[88]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[88]['bakumutu'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <td width="25%"><div id="info311a"><textarea rows="2" name="" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></div></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah kolom 3 (Jumlah yang ikut seleksi))</td>
                                        <td width="10%"><input type="text" name="311a1" id="311a1" placeholder="4,00" style="background: yellow;" class="form-control no-resize"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah kolom 2 (Daya tampung PS)</td>
                                        <td width="10%"><input type="text" name="311a2" id="311a2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311a()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Rasio = (jumlah kolom 3)/(jumlah kolom 2)</td>
                                        <td width="10%"><div id="rasio311a"><input type="text" name="311arasio" id="311arasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai311a"><input type="text" name="311anilai" id="311anilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.1.b -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row">11</th>
                                        <td width="5%" rowspan="6"><?php echo $butir[87]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[87]['bakumutu'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <td width="25%"><div id="info311b"><textarea rows="2" name="" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></div></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah kolom 5 (Jumlah mhs baru reguler yang melakukan registrasi)</td>
                                        <td width="10%"><input type="text" name="311b1" id="311b1" placeholder="4,00" style="background: yellow;" class="form-control no-resize"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jumlah kolom 4 (Jumlah calon mhs yang lulus seleksi)</td>
                                        <td width="10%"><input type="text" name="311b2" id="311b2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311b()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Rasio=(jumlah kolom 5)/jumlah kolom 4)</td>
                                        <td width="10%"><div id="rasio311b"><input type="text" name="311brasio" id="311brasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai311b"><input type="text" name="311bnilai" id="311bnilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.1.c -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row">12</th>
                                        <td width="5%" rowspan="6"><?php echo $butir[86]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[86]['bakumutu'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <td width="25%"><div id="info311c"><textarea rows="2" name="" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></div></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">TMBT = total mahasiswa baru transfer untuk program S1 reguler dan S1 non-reguler</td>
                                        <td width="10%"><input type="text" name="311c1" id="311c1" placeholder="4,00" style="background: yellow;" class="form-control no-resize"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">TMB = total mahasiswa baru bukan transfer untuk program S1 reguler dan S1 non-reguler</td>
                                        <td width="10%"><input type="text" name="311c2" id="311c2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311c()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">RM = TMBT/TMB</td>
                                        <td width="10%"><div id="rasio311c"><input type="text" name="311crasio" id="311crasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai311c"><input type="text" name="311cnilai" id="311cnilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.1.d -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="4" scope="row">13</th>
                                        <td width="5%" rowspan="4"><?php echo $butir[85]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[85]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="311d1" id="311d1" placeholder="4,00" style="background: yellow;" class="form-control no-resize"></td>
                                        <td></td>
                                        <td width="25%"><div id="info311d"><textarea rows="2" name="" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></div></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">IPK (Isi angka 0 jika belum ada lulusan)</td>
                                        <td width="10%"><input type="text" name="311d2" id="311d2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah311d()"></td>
                                        <td></td>
                                        <td width="25%" rowspan="3"><textarea rows="8" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai311d"><input type="text" name="311dnilai" id="311dnilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.2 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row">14</th>
                                        <td width="5%" rowspan="8"><?php echo $butir[84]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[84]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="312" id="312" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah312()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
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
                                        <td width="10%"><div id="nilai312"><input type="text" name="312nilai" id="312nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.3 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row">15</th>
                                        <td width="5%" rowspan="7"><?php echo $butir[83]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[83]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="313" id="313" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah313()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="7"><textarea rows="12" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
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
                                        <td width="10%"><div id="nilai313"><input type="text" name="313nilai" id="313nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.1.4.a -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row">16</th>
                                        <td width="5%" rowspan="6"><?php echo $butir[82]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[82]['bakumutu'] ?></td>
                                        <td width="10%"></td>
                                        <td></td>
                                        <td width="25%"><div id="info314a"><textarea rows="2" name="" id="" placeholder="INFORMASI DARI BORANG" style="color:white;background: grey;" class="form-control no-resize"></textarea></div></td>
                                    </tr>
                                    <tr>
                                        <td>d</td>
                                        <td width="45%">Jumlah mahasiswa yang diterima pada TS-3 (4 tahun yang lalu)</td>
                                        <td width="10%"><input type="text" name="314a1" id="314a1" placeholder="4,00" style="background: yellow;" class="form-control no-resize"></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="8" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>f</td>
                                        <td width="45%">Jumlah mahasiswa yang diterima pada TS-3 yang telah lulus.</td>
                                        <td width="10%"><input type="text" name="314a2" id="314a2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah314a()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">KTW (Kelulusan tepat waktu dalam persen, kisaran nilai 0 - 100.)</td>
                                        <td width="10%"><div id="rasio314a"><input type="text" name="314arasio" id="314arasio" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai314a"><input type="text" name="314anilai" id="314anilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.2.1.a -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row">17</th>
                                        <td width="5%" rowspan="8"><?php echo $butir[81]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[81]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="321a" id="321a" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah321a()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
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
                                        <td width="10%"><div id="nilai321a"><input type="text" name="321anilai" id="321anilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 3.2.1.b -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="8" scope="row">18</th>
                                        <td width="5%" rowspan="8"><?php echo $butir[80]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[80]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="321b" id="321b" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah321b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="8"><textarea rows="14" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
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
                                        <td width="10%"><div id="nilai321b"><input type="text" name="321bnilai" id="321bnilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
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
                            <div class="number"><button type="button" class="btn bg-teal btn-block btn-lg waves-effect">Akumulasi Nilai</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->
        </div>
        <?=form_close();?>
    </section>

    <script type="text/javascript">
        function cekjumlah11a(){
          var isi1 = $("#11a1").val();
          var isi2 = $("#11a2").val();
          var isi3 = $("#11a3").val();
          var isi4 = $("#11a4").val();
               if(isi4 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah11a/"+isi1+"/"+isi2+"/"+isi3+"/"+isi4,
                   success:function(data){
                       $("#skorakhir11a").html(data);
                       $("#nilai11a").html(data);
                   }
               });
               }
        }

        function cekjumlah11b(){
          var isi1 = $("#11b1").val();
          var isi2 = $("#11b2").val();
               if(isi2 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah11b/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#skorakhir11b").html(data);
                       $("#nilai11b").html(data);
                   }
               });
               }
        }

        function cekjumlah12(){
          var isi1 = $("#12").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah12/"+isi1,
                   success:function(data){
                       $("#nilai12").html(data);
                   }
               });
               }
        }

        function cekjumlah21(){
          var isi1 = $("#21").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah21/"+isi1,
                   success:function(data){
                       $("#nilai21").html(data);
                   }
               });
               }
        }

        function cekjumlah22(){
          var isi1 = $("#22").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah22/"+isi1,
                   success:function(data){
                       $("#nilai22").html(data);
                   }
               });
               }
        }

        function cekjumlah23(){
          var isi1 = $("#23").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah23/"+isi1,
                   success:function(data){
                       $("#nilai23").html(data);
                   }
               });
               }
        }

        function cekjumlah24(){
          var isi1 = $("#24").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah24/"+isi1,
                   success:function(data){
                       $("#nilai24").html(data);
                   }
               });
               }
        }

        function cekjumlah25(){
          var isi1 = $("#25").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah25/"+isi1,
                   success:function(data){
                       $("#nilai25").html(data);
                   }
               });
               }
        }

        function cekjumlah26(){
          var isi1 = $("#26").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah26/"+isi1,
                   success:function(data){
                       $("#nilai26").html(data);
                   }
               });
               }
        }

        function cekjumlah311a(){
          var isi1 = $("#311a1").val();
          var isi2 = $("#311a2").val();
               if(isi2 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/rasio311a/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#rasio311a").html(data);
                   }
               });
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah311a/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#nilai311a").html(data);
                   }
               });
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/info311a/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#info311a").html(data);
                   }
               });
               }
        }

        function cekjumlah311b(){
          var isi1 = $("#311b1").val();
          var isi2 = $("#311b2").val();
               if(isi2 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/rasio311b/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#rasio311b").html(data);
                   }
               });
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah311b/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#nilai311b").html(data);
                   }
               });
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/info311b/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#info311b").html(data);
                   }
               });
               }
        }

        function cekjumlah311c(){
          var isi1 = $("#311c1").val();
          var isi2 = $("#311c2").val();
               if(isi2 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/rasio311c/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#rasio311c").html(data);
                   }
               });
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah311c/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#nilai311c").html(data);
                   }
               });
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/info311c/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#info311c").html(data);
                   }
               });
               }
        }

        function cekjumlah311d(){
          var isi1 = $("#311d1").val();
          var isi2 = $("#311d2").val();
               if(isi2 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah311d/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#nilai311d").html(data);
                   }
               });
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/info311d/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#info311d").html(data);
                   }
               });
               }
        }

        function cekjumlah312(){
          var isi1 = $("#312").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah312/"+isi1,
                   success:function(data){
                       $("#nilai312").html(data);
                   }
               });
               }
        }

        function cekjumlah313(){
          var isi1 = $("#313").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah313/"+isi1,
                   success:function(data){
                       $("#nilai313").html(data);
                   }
               });
               }
        }

        function cekjumlah314a(){
          var isi1 = $("#314a1").val();
          var isi2 = $("#314a2").val();
               if(isi2 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/rasio314a/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#rasio314a").html(data);
                   }
               });
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah314a/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#nilai314a").html(data);
                   }
               });
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/info314a/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#info314a").html(data);
                   }
               });
               }
        }

        function cekjumlah321a(){
          var isi1 = $("#321a").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah321a/"+isi1,
                   success:function(data){
                       $("#nilai321a").html(data);
                   }
               });
               }
        }

        function cekjumlah321b(){
          var isi1 = $("#321b").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah321b/"+isi1,
                   success:function(data){
                       $("#nilai321b").html(data);
                   }
               });
               }
        }

        function akumulasi(){
          var nil1 = $("#11askor").val();
          var nil2 = $("#11bskor").val();
          var nil3 = $("#12skor").val();
          var nil4 = $("#21skor").val();
          var nil5 = $("#22skor").val();
          var nil6 = $("#23skor").val();
          var nil7 = $("#24skor").val();
          var nil8 = $("#25skor").val();
          var nil9 = $("#26skor").val();
          var nil10 = $("#311anilai").val();
          var nil11 = $("#311bnilai").val();
          var nil12 = $("#311cnilai").val();
          var nil13 = $("#311dnilai").val();
          var nil14 = $("#312nilai").val();
          var nil15 = $("#313nilai").val();
          var nil16 = $("#314anilai").val();
          var nil17 = $("#321anilai").val();
          var nil18 = $("#321bnilai").val();
               $.ajax({
                   // url:"<?php echo base_url()?>index.php/C_penilaian/nilaiborang/"+nil1+"/"+nil2+"/"+nil3+"/"+nil4+"/"+nil5+"/"+nil6+"/"+nil7+"/"+nil8+"/"+nil9+"/"+nil10+"/"+nil11+"/"+nil12+"/"+nil13,
                   url:"<?php echo base_url()?>index.php/C_penilaian/nilaiborang/"+nil1+"/"+nil2+"/"+nil3+"/"+nil4+"/"+nil5+"/"+nil6+"/"+nil7+"/"+nil8+"/"+nil9+"/"+nil10+"/"+nil11+"/"+nil12+"/"+nil13+"/"+nil14+"/"+nil15+"/"+nil16+"/"+nil17+"/"+nil18,
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