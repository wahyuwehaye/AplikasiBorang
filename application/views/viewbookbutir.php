<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-4">
            <h2>
                LIHAT ISIAN BUTIR BORANG
                <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                <small><?php echo ucfirst($buku[0]['jenis'])." ".$buku[0]['fakpro']." - ".$buku[0]['tahun']." - Buku : ".$buku[0]['buku']; ?></small>
            </h2>
            </div>
            <div class="col-sm-8">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li><a href="<?php echo base_url();?>borang"><i class="material-icons">settings</i> Manage Borang</a></li>
                <li><a href="<?php echo base_url();?>butir/<?php echo $buku[0]['id']; ?>"><i class="material-icons">description</i> Butir Borang</a></li>
                <li><a href="<?php echo base_url();?>isian/<?php echo $butir[0]['id']; ?>"><i class="material-icons">description</i> Isian Butir</a></li>
                <li class="active"><i class="material-icons">book</i> Lihat Isian Butir</li>
            </ol>
            </div>
        </div>

            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DETAIL ISIAN
                                <!-- <small>CKEditor is a ready-for-use HTML text editor designed to simplify web content creation. Taken from <a href="http://ckeditor.com/" target="_blank">ckeditor.com</a></small> -->
                            </h2>
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
                            <textarea id="tinymce">
                            <?php
                            $jum = $this->uri->segment(2, 0);
                            // if ($jum==1) {
                                for($i=0;$i<count($dataisian1);$i++){
                                ?>
                                    <h1 style="text-align: center;">STANDAR 1. VISI, MISI, TUJUAN, DAN SASARAN, SERTA STRATEGI PENCAPAIAN&nbsp;</h1>
                                    <h1 style="text-align: left;">1.1 Visi, Misi, Tujuan, dan Sasaran serta Strategi Pencapaian</h1>
                                    <h3 style="text-align: left;">Jelaskan mekanisme <strong>penyusunan</strong> visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan</h3>
                                    <!-- <h3>Tujuan</h3> -->
                                    <p>&nbsp;</p>
                                    <p><?php echo $dataisian1[$i]['kolom1'] ?></p>
                                    <h1 style="text-align: left;">1.1.1 Visi&nbsp;&nbsp;</h1>
                                    <p><?php echo $dataisian1[$i]['kolom2'] ?></p>
                                    <h1 style="text-align: left;">1.1.2 Misi</h1>
                                    <p><?php echo $dataisian1[$i]['kolom3'] ?></p>
                                    <h1 style="text-align: left;">1.1.3 Tujuan&nbsp;</h1>
                                    <p><?php echo $dataisian1[$i]['kolom4'] ?></p>
                                <?php }
                            // }elseif ($jum==2) {
                                for($i=0;$i<count($dataisian2);$i++){
                                ?>
                                    <h1 style="text-align: left;">1.1.4 Sasaran dan Strategi Pencapaiannya</h1>
                                    <p><?php echo $dataisian2[$i]['kolom1'] ?></p>
                                <?php }
                            // }elseif ($jum==3) {
                                for($i=0;$i<count($dataisian3);$i++){
                                ?>
                                    <h1 style="text-align: left;">1.2 Sosialisasi&nbsp;</h1>
                                    <h3>Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan.&nbsp;</h3>
                                    <p><?php echo $dataisian3[$i]['kolom1'] ?></p>
                                <?php }
                                for($i=0;$i<count($dataisian4);$i++){
                                 ?>
                                    <h1 style="text-align: center;">STANDAR 2. <strong>Tata &nbsp;Pamong, KEPEMIMPINAN, SISTEM &nbsp;Pengelolaan, DAN Penjaminan Mutu</strong></h1>
                                    <h2>2.1&nbsp; &nbsp;Sistem Tata Pamong</h2>
                                    <h3>Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (<em>input</em>, proses, <em>output</em> dan <em>outcome</em> serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan, &nbsp;dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</h3>
                                    <h3>&nbsp;</h3>
                                    <h3>Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk&nbsp; membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</h3>
                                    <p><?php echo $dataisian4[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian5);$i++){
                                 ?>
                                    <h1 style="text-align: left;">2.2&nbsp; Kepemimpinan</h1>
                                    <h3>Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.</h3>
                                    <h3>Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.&nbsp; Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.&nbsp; Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.&nbsp; Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.</h3>
                                    <h3>Jelaskan pola kepemimpinan dalam Program Studi.</h3>
                                    <p><?php echo $dataisian5[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian6);$i++){
                                 ?>
                                    <h1>2.3&nbsp;&nbsp;&nbsp; Sistem Pengelolaan</h1>
                                    <h3>Sistem pengelolaan fungsional dan operasional program studi mencakup <em>planning, organizing</em>, <em>staffing, leading, controlling</em> dalam kegiatan &nbsp;internal maupun eksternal<em>.</em></h3>
                                    <h3>Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</h3>
                                    <p><?php echo $dataisian6[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian7);$i++){
                                 ?>
                                    <h1>2.4&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Penjaminan Mutu</h1>
                                    <h3>Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</h3>
                                    <p><?php echo $dataisian7[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian8);$i++){
                                 ?>
                                    <h1>2.5 &nbsp;&nbsp;Umpan Balik</h1>
                                    <h3>Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?&nbsp; Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</h3>
                                    <p>&nbsp;</p>
                                    <!-- <h3>Umpan Balik dari <?php echo $dataisian8[$i]['kolom1'] ?></h3>
                                    <h4>Isi Umpan Balik :</h4>
                                    <p><?php echo $dataisian8[$i]['kolom2'] ?></p>
                                    <h4>Tindak Lanjut :</h4>
                                    <p><?php echo $dataisian8[$i]['kolom3'] ?></p>
                                    <h3>Umpan Balik dari <?php echo $dataisian8[$i]['kolom4'] ?></h3>
                                    <h4>Isi Umpan Balik :</h4>
                                    <p><?php echo $dataisian8[$i]['kolom5'] ?></p>
                                    <h4>Tindak Lanjut :</h4>
                                    <p><?php echo $dataisian8[$i]['kolom6'] ?></p>
                                    <h3>Umpan Balik dari <?php echo $dataisian8[$i]['kolom7'] ?></h3>
                                    <h4>Isi Umpan Balik :</h4>
                                    <p><?php echo $dataisian8[$i]['kolom8'] ?></p>
                                    <h4>Tindak Lanjut :</h4>
                                    <p><?php echo $dataisian8[$i]['kolom9'] ?></p>
                                    <h3>Umpan Balik dari <?php echo $dataisian8[$i]['kolom10'] ?></h3>
                                    <h4>Isi Umpan Balik :</h4>
                                    <p><?php echo $dataisian8[$i]['kolom11'] ?></p>
                                    <h4>Tindak Lanjut :</h4>
                                    <p><?php echo $dataisian8[$i]['kolom12'] ?></p> -->
                                    <table style="height: 56px;" border="1" width="932" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <th style="width: 303px; background-color: #969393; text-align: center; vertical-align: middle;">Umpan Balik dari</th>
                                    <th style="width: 303px; background-color: #969393; text-align: center; vertical-align: middle;">Isi Umpan Balik</th>
                                    <th style="width: 303px; background-color: #969393; text-align: center; vertical-align: middle;">
                                    <p>Tindak Lanjut</p>
                                    </th>
                                    </tr>
                                    <tr>
                                    <td style="width: 303px; text-align: center;"><strong>(1)</strong></td>
                                    <td style="width: 303px; text-align: center;"><strong>(2)</strong></td>
                                    <td style="width: 304px; text-align: center;"><strong>(3)</strong></td>
                                    </tr>
                                    <?php
                                        for($i=0;$i<count($dataisian8);$i++){
                                    ?>
                                    <tr>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom1'] ?></td>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom2'] ?></td>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom3'] ?></td>
                                    </tr>
                                    <tr>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom4'] ?></td>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom5'] ?></td>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom6'] ?></td>
                                    </tr>
                                    <tr>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom7'] ?></td>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom8'] ?></td>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom9'] ?></td>
                                    </tr>
                                    <tr>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom10'] ?></td>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom11'] ?></td>
                                    <td style="width: 303px; text-align: left;">&nbsp;<?php echo $dataisian8[$i]['kolom12'] ?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    </tbody>
                                    </table>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian9);$i++){
                                 ?>
                                    <h1>2.6&nbsp; Keberlanjutan</h1>
                                    <h3>Jelaskan upaya untuk menjamin keberlanjutan (<em>sustainability</em>) program studi ini, khususnya dalam hal:</h3>
                                    <h3>a.  Upaya untuk peningkatan animo calon mahasiswa:</h3>
                                    <p><?php echo $dataisian9[$i]['kolom1'] ?></p>
                                    <h3>b.  Upaya peningkatan mutu manajemen:</h3>
                                    <p><?php echo $dataisian9[$i]['kolom2'] ?></p>
                                    <h3>c.  Upaya untuk peningkatan mutu lulusan:</h3>
                                    <p><?php echo $dataisian9[$i]['kolom3'] ?></p>
                                    <h3>d.  Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:</h3>
                                    <p><?php echo $dataisian9[$i]['kolom4'] ?></p>
                                    <h3>e.  Upaya dan prestasi memperoleh dana hibah kompetitif:</h3>
                                    <p><?php echo $dataisian9[$i]['kolom5'] ?></p>
                                 <?php
                                 }
                                 // for($i=0;$i<count($dataisian15);$i++){
                                 ?>
                                    <h1 style="text-align: center;">STANDAR 3.</h1>
                                    <h1 style="text-align: center;">MAHASISWA DAN LULUSAN&nbsp;</h1>
                                    <h3>3.1&nbsp; Profil Mahasiswa dan Lulusan</h3>
                                    <h3>3.1.1 Tuliskan data <strong>seluruh</strong> mahasiswa reguler<sup>(1)</sup> dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h3>
                                    <p>&nbsp;</p>
                                    <table style="height: 42px;" border="1" width="935" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 26px;">
                                    <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                    <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Daya Tampung</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Calon Mahasiswa Reguler</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Mahasiswa Baru</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Total Mahasiswa</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Lulusan</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">IPK Lulusan Reguler</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">Presentase Lulusan Reguler dengan IPK :</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Ikut Seleksi</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Lulus Seleksi</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
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
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(1)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(7)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(8)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(9)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(10)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(11)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(12)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(13)</strong></td>
                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(14)</strong></td>
                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(15)</strong></td>
                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(16)</strong></td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">TS-4</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">TS-3</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">TS-2</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">TS-1</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">TS</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">Jumlah</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>

                                    <h3>3.1.3  Sebutkan pencapaian prestasi mahasiswa dalam tiga tahun terakhir di bidang akademik dan non-akademik, antara lain prestasi dalam penelitian dan lomba karya ilmiah, PkM, olahraga, dan seni dalam tabel berikut. </h3>
                                    <p style="text-align: center;"><strong>Tabel 3.1.3 Pencapaian prestasi Mahasiswa</strong></p>
                                    <table style="height: 49px; width: 931px; margin-left: auto; margin-right: auto;" border="1" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 50px;">
                                    <th style="width: 24px; height: 73px; background-color: #2d6ba6; text-align: center;" rowspan="2">
                                    <p>No</p>
                                    (1)</th>
                                    <th style="width: 24px; height: 73px; background-color: #2d6ba6; text-align: center;" rowspan="2">
                                    <p>Nama Kegiatan</p>
                                    (2)</th>
                                    <th style="width: 24px; height: 73px; background-color: #2d6ba6; text-align: center;" rowspan="2">
                                    <p>Waktu Penyelenggaraan</p>
                                    (3)</th>
                                    <th style="width: 24px; height: 50px; background-color: #2d6ba6; text-align: center;" colspan="3">Tingkat*</th>
                                    <th style="width: 24px; height: 73px; background-color: #2d6ba6; text-align: center;" rowspan="2">
                                    <p>Prestasi yang Dicapai</p>
                                    <p>(7)</p>
                                    </th>
                                    </tr>
                                    <tr style="height: 23px;">
                                    <th style="width: 24px; height: 23px; background-color: #2d6ba6; text-align: center;">
                                    <p>Prop/Wil</p>
                                    <p>(4)</p>
                                    </th>
                                    <th style="width: 24px; height: 23px; background-color: #2d6ba6; text-align: center;">
                                    <p>Nas</p>
                                    <p>(5)</p>
                                    </th>
                                    <th style="width: 24px; height: 23px; background-color: #2d6ba6; text-align: center;">
                                    <p>Inter</p>
                                    <p>(6)</p>
                                    </th>
                                    </tr>
                                    <?php
                                        for($i=0;$i<count($dataisian15);$i++){
                                    ?>
                                    <tr style="height: 35px;">
                                    <td style="width: 24px; height: 35px; text-align: center;">&nbsp;<?php echo $i+1 ?></td>
                                    <td style="width: 232px; height: 35px; text-align: center;">&nbsp;<?php echo $dataisian15[$i]['kolom1'] ?></td>
                                    <td style="width: 148px; height: 35px; text-align: center;">&nbsp;<?php echo $dataisian15[$i]['kolom2'] ?></td>
                                    <td style="width: 105px; height: 35px; text-align: center;">&nbsp;<?php if((($dataisian15[$i]['kolom3'])=='lokal')){ echo "lokal";}else{echo "-";} ?></td>
                                    <td style="width: 128px; height: 35px; text-align: center;">&nbsp;<?php if((($dataisian15[$i]['kolom3'])=='nasional')){ echo "nasional";}else{echo "-";} ?></td>
                                    <td style="width: 128px; height: 35px; text-align: center;">&nbsp;<?php if((($dataisian15[$i]['kolom3'])=='internasional')){ echo "internasional";}else{echo "-";} ?></td>
                                    <td style="width: 128px; height: 35px; text-align: center;">&nbsp;<?php echo $dataisian15[$i]['kolom4'] ?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    </tbody>
                                    </table>
                                 <?php
                                 // }
                                 for($i=0;$i<count($dataisian24);$i++){
                                 ?>
                                    <h3>3.4.1 Partisipasi alumni dalam mendukung pengembangan akademik program studi dalam bentuk: (1) Sumbangan dana (2) Sumbangan fasilitas (3) Keterlibatan dalam kegiatan akademik (4) Pengembangan jejaring (5) Penyediaan fasilitas untuk kegiatan akademik</h3>
                                    <p><?php echo $dataisian24[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian25);$i++){
                                 ?>
                                    <h3>3.4.2 Partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi dalam bentuk: (1) Sumbangan dana (2) Sumbangan fasilitas (3) Keterlibatan dalam kegiatan non akademik (4) Pengembangan jejaring (5) Penyediaan fasilitas untuk kegiatan non akademik</h3>
                                    <p><?php echo $dataisian25[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian27);$i++){
                                 ?>
                                    <h3>4.2.1 Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja dosen dan tenaga kependidikan</h3>
                                    <p><?php echo $dataisian27[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian26);$i++){
                                 ?>
                                    <h1 style="text-align: center;">STANDAR 4.</h1>
                                    <h1 style="text-align: center;">SUMBERDAYA MANUSIA&nbsp;</h1>
                                    <h3>4.1 Sistem Pengelolaan Sumber Daya Manusia</h3>
                                    <p>Jelaskan sistem pengelolaan sumber daya manusia yang meliputi perencanaan seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik, serta remunerasi, penghargaan, dan sanksi, termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya.&nbsp;</p>
                                    <p><?php echo $dataisian26[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian27);$i++){
                                 ?>
                                    <h3>4.2.1 Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja dosen dan tenaga kependidikan</h3>
                                    <p><?php echo $dataisian27[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian28);$i++){
                                 ?>
                                    <h3>4.2.1 Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang pendidikan, penelitian, pelayanan/pengabdian kepada masyarakat</h3>
                                    <p><?php echo $dataisian28[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                            ?>
                                
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->
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


    <!-- TinyMCE -->
    <script src="<?php echo base_url();?>assets/plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/pages/forms/editors.js"></script> -->

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>

    <script type="text/javascript">
        $(function () {
    //TinyMCE
    tinymce.init({
        selector: "textarea#tinymce",
        theme: "modern",
        height: 1000,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = '<?php echo base_url();?>assets/plugins/tinymce';
});
    </script>
</body>

</html>