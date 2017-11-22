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
                                 for($i=0;$i<count($dataisian10);$i++){
                                 ?>
                                    <h1 style="text-align: center;">STANDAR 3.</h1>
                                    <h1 style="text-align: center;">MAHASISWA DAN LULUSAN&nbsp;</h1>
                                    <h3>3.1&nbsp; Profil Mahasiswa dan Lulusan</h3>
                                    <h3>3.1.1 Tuliskan data <strong>seluruh</strong> mahasiswa reguler<sup>(1)</sup> dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h3>
                                    <p>&nbsp;</p>
                                    <table style="height: 49px; width: 931px; margin-left: auto; margin-right: auto;" border="1" cellspacing="0" cellpadding="0">
                                    <thead>
                                        <tr style="height: 26px;">
                                            <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
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
                                            <td style="width: 52px; text-align: center; height: 13px;"><strong>(9)</strong></td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><strong>(10)</strong></td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><strong>(11)</strong></td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><strong>(12)</strong></td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><strong>(13)</strong></td>
                                            <td style="width: 53px; text-align: center; height: 13px;"><strong>(14)</strong></td>
                                            <td style="width: 53px; text-align: center; height: 13px;"><strong>(15)</strong></td>
                                            <td style="width: 53px; text-align: center; height: 13px;"><strong>(16)</strong></td>
                                        </tr>
                                        <?php 
                                            $jum1 = 0;
                                            $jum2 = 0;
                                            $jum3 = 0;
                                            $jum4 = 0;
                                            $jum5 = 0;
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
                                            $diloop = count($dataisian10);
                                        for($i=0;$i<count($dataisian10);$i++){
                                            $jum1 = $jum1 + $dataisian10[$i]['kolom1'];
                                            $jum2 = $jum2 + $dataisian10[$i]['kolom2'];
                                            $jum3 = $jum3 + $dataisian10[$i]['kolom3'];
                                            $jum4 = $jum4 + $dataisian10[$i]['kolom4'];
                                            $jum5 = $jum5 + $dataisian10[$i]['kolom5'];
                                            $jum6 = $jum6 + $dataisian10[$i]['kolom6'];
                                            $jum7 = $jum7 + $dataisian10[$i]['kolom7'];
                                            $jum8 = $jum8 + $dataisian10[$i]['kolom8'];
                                            $jum9 = $jum9 + $dataisian10[$i]['kolom9'];
                                            $jum10 = ($jum10 + $dataisian10[$i]['kolom10']);
                                            $jum11 = ($jum11 + $dataisian10[$i]['kolom11']);
                                            $jum12 = ($jum12 + $dataisian10[$i]['kolom12']);
                                            $jum13 = ($jum13 + $dataisian10[$i]['kolom13']);
                                            $jum14 = ($jum14 + $dataisian10[$i]['kolom14']);
                                            $jum15 = ($jum15 + $dataisian10[$i]['kolom15']);
                                            $diloop = $diloop - 1;
                                            $nil = $nil + 1;
                                        ?>
                                        <tr style="height: 13px;">
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                            <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom1'] ?>&nbsp;</td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom2'] ?>&nbsp;</td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom3'] ?>&nbsp;</td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom4'] ?>&nbsp;</td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom5'] ?>&nbsp;</td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom6'] ?>&nbsp;</td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom7'] ?>&nbsp;</td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom8'] ?>&nbsp;</td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom9'] ?>&nbsp;</td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom10'] ?>&nbsp;</td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom11'] ?>&nbsp;</td>
                                            <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom12'] ?>&nbsp;</td>
                                            <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom13'] ?>&nbsp;</td>
                                            <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom14'] ?>&nbsp;</td>
                                            <td style="width: 53px; text-align: center; height: 13px;"><?php echo $dataisian10[$diloop]['kolom15'] ?>&nbsp;</td>
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
                                        </tr>
                                    </tbody>
                                </table>
                                 <?php
                                    }
                                 ?>
                                 <h3>3.1.2 Tuliskan data <strong>seluruh</strong> mahasiswa reguler<sup>(1)</sup> dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h3>
                                 <p>&nbsp;</p>
                                    <table style="height: 49px; width: 931px; margin-left: auto; margin-right: auto;" border="1" cellspacing="0" cellpadding="0">
                                        <thead>
                                            <tr style="height: 26px;">
                                                <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">No</th>
                                                <th style="width: 84.4px; background-color: #ababab; text-align: center;" rowspan="2">
                                                <p><strong>Tahun Akademik</strong></p>
                                                </th>
                                                <th style="width: 84.4px; background-color: #ababab; text-align: center;" rowspan="2">
                                                <p><strong>Daya Tampung</strong></p>
                                                </th>
                                                <th style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">
                                                <p><strong>Jumlah Calon Mahasiswa&nbsp; </strong></p>
                                                </th>
                                                <th style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">
                                                <p><strong>Jumlah Mahasiswa Baru </strong></p>
                                                </th>
                                                <th style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">
                                                <p><strong>Jumlah Total Mahasiswa</strong></p></th>
                                            </tr>
                                            <tr style="height: 26px;">
                                                <th style="width: 84.4px; background-color: #ababab; text-align: center;">
                                                <p><strong>Ikut Seleksi</strong></p>
                                                </th>
                                                <th style="width: 84.4px; background-color: #ababab; text-align: center;">
                                                <p><strong>Lulus Seleksi</strong></p>
                                                </th>
                                                <th style="width: 84.4px; background-color: #ababab; text-align: center;">
                                                <p><strong>Non-Reguler</strong></p>
                                                </th>
                                                <th style="width: 84.4px; background-color: #ababab; text-align: center;">
                                                <p><strong>Transfer<sup>(3)</sup></strong></p>
                                                </th>
                                                <th style="width: 84.4px; background-color: #ababab; text-align: center;">
                                                <p><strong>Non-Reguler</strong></p>
                                                </th>
                                                <th style="width: 84.4px; background-color: #ababab; text-align: center;">
                                                <p><strong>Transfer<sup>(3)</sup></strong></p>
                                                </th>
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
                                            </tr>
                                            <?php 
                                                $jum1 = 0;
                                                $jum2 = 0;
                                                $jum3 = 0;
                                                $jum4 = 0;
                                                $jum5 = 0;
                                                $jum6 = 0;
                                                $jum7 = 0;
                                                // $tsnya = array('TS-4','TS-3','TS-2','TS-1','TS');
                                                $tsnya = array('TS','TS-1','TS-2','TS-3','TS-4');
                                                $nil = 0;
                                                $diloop = count($dataisian14);
                                            for($i=0;$i<count($dataisian14);$i++){
                                                $jum1 = $jum1 + $dataisian14[$i]['kolom1'];
                                                $jum2 = $jum2 + $dataisian14[$i]['kolom2'];
                                                $jum3 = $jum3 + $dataisian14[$i]['kolom3'];
                                                $jum4 = $jum4 + $dataisian14[$i]['kolom4'];
                                                $jum5 = $jum5 + $dataisian14[$i]['kolom5'];
                                                $jum6 = $jum6 + $dataisian14[$i]['kolom6'];
                                                $jum7 = $jum7 + $dataisian14[$i]['kolom7'];
                                                $diloop = $diloop - 1;
                                                $nil = $nil + 1;
                                            ?>
                                            <tr style="height: 13px;">
                                                <td style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?>&nbsp;</td>
                                                <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $tsnya[$diloop] ?></th>
                                                <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian14[$diloop]['kolom1'] ?>&nbsp;</td>
                                                <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian14[$diloop]['kolom2'] ?>&nbsp;</td>
                                                <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian14[$diloop]['kolom3'] ?>&nbsp;</td>
                                                <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian14[$diloop]['kolom4'] ?>&nbsp;</td>
                                                <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian14[$diloop]['kolom5'] ?>&nbsp;</td>
                                                <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian14[$diloop]['kolom6'] ?>&nbsp;</td>
                                                <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian14[$diloop]['kolom7'] ?>&nbsp;</td>
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
                                                <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum6;?>&nbsp;</td>
                                                <td style="width: 52px; text-align: center; height: 13px;"><?php echo $jum7;?>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h3>3.1.3  Sebutkan pencapaian prestasi mahasiswa dalam tiga tahun terakhir di bidang akademik dan non-akademik, antara lain prestasi dalam penelitian dan lomba karya ilmiah, PkM, olahraga, dan seni dalam tabel berikut. </h3>
                                    <p>Sebutkan pencapaian prestasi/reputasi mahasiswa dalam tiga tahun terakhir di bidang akademik dan non-akademik (misalnya prestasi dalam penelitian dan lomba karya ilmiah, olahraga, dan seni). </p>
                                    <p style="text-align: center;"><strong>Tabel 3.1.3 Pencapaian prestasi Mahasiswa</strong></p>
                                 <?php
                                    for($i=0;$i<count($dataisian15);$i++){
                                        ?>
                                    <table style="height: 49px; width: 931px; margin-left: auto; margin-right: auto;" border="1" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr style="height: 26px;">
                                        <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">No</th>
                                        <th style="width: 50px; background-color: #9e9e9e; text-align: center;">
                                        <p><strong>Nama Kegiatan dan Waktu Penyelenggaraan</strong></p>
                                        </th>
                                        <th style="width: 50px; background-color: #9e9e9e; text-align: center;">
                                        <p><strong>Tingkat (Lokal, Wilayah, Nasional, atau Internasional)</strong></p>
                                        </th>
                                        <th style="width: 50px; background-color: #9e9e9e; text-align: center;">
                                        <p><strong>Prestasi yang Dicapai</strong></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;">(1)</th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                    </tr>
                                    <?php
                                        $nil = 0;
                                        $diloop = count($dataisian15);
                                    for($i=0;$i<count($dataisian15);$i++){
                                        $diloop = $diloop - 1;
                                        $nil = $nil + 1;
                                    ?>
                                    <tr style="height: 13px;">
                                        <th scope="row" style="width: 52px; text-align: center; height: 13px;"><?php echo $nil ?></th>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian15[$diloop]['kolom1'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian15[$diloop]['kolom2'] ?>&nbsp;</td>
                                        <td style="width: 52px; text-align: center; height: 13px;"><?php echo $dataisian15[$diloop]['kolom3'] ?>&nbsp;</td>
                                    </tr>
                                    <?php
                                     } ?>
                                </tbody>
                            </table>
                                        <?php
                                    }
                            ?>
                            <h3>3.1.4  Tuliskan data jumlah mahasiswa reguler tujuh tahun terakhir dengan mengikuti format tabel berikut:</h3>
                            <p>* Tidak memasukkan mahasiswa transfer.
                                Catatan : huruf-huruf a, b, c, d, e dan f harus tetap tercantum pada tabel di atas.
                                </p>
                            <h3>3.2  Layanan kepada Mahasiswa  </h3>
                            <h3>Lengkapilah tabel berikut untuk setiap jenis pelayanan kepada mahasiswa PS.</h3>
                            <?php
                            for($i=0;$i<count($dataisian17);$i++){
                                ?>
                            <table style="margin-left: auto; margin-right: auto; height: 387px;" border="1" width="1072" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                        <td style="width: 54.8px; background-color: #9c9c9c; text-align: center;">
                                        <p><strong>No.</strong></p>
                                        </td>
                                        <td style="width: 54.8px; background-color: #9c9c9c; text-align: center;">
                                        <p><strong>Jenis Pelayanan kepada Mahasiswa</strong></p>
                                        </td>
                                        <td style="width: 54.8px; background-color: #9c9c9c; text-align: center;">
                                        <p><strong>Bentuk kegiatan, Pelaksanaan dan Hasilnya</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 54.8px; text-align: center;">
                                        <p>(1)</p>
                                        </td>
                                        <td style="width: 306px; text-align: center;">
                                        <p>(2)</p>
                                        </td>
                                        <td style="width: 703.6px; text-align: center;">
                                        <p>(3)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 54.8px; text-align: center;">
                                        <p>1</p>
                                        </td>
                                        <td style="width: 306px; text-align: center;">
                                        <p>Bimbingan dan konseling</p>
                                        </td>
                                        <td style="width: 703.6px; text-align: center;">
                                        <p><?php echo $dataisian17[$diloop]['kolom2'] ?></p>
                                        <p>&nbsp;</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 54.8px; text-align: center;">
                                        <p>2</p>
                                        </td>
                                        <td style="width: 306px; text-align: center;">
                                        <p>Minat dan bakat (ekstra kurikuler)</p>
                                        </td>
                                        <td style="width: 703.6px; text-align: center;">
                                        <p><?php echo $dataisian17[$diloop]['kolom4'] ?></p>
                                        <p>&nbsp;</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 54.8px; text-align: center;">
                                        <p>3</p>
                                        </td>
                                        <td style="width: 306px; text-align: center;">
                                        <p>Pembinaan <em>soft skills</em></p>
                                        </td>
                                        <td style="width: 703.6px; text-align: center;">
                                        <p><?php echo $dataisian17[$diloop]['kolom6'] ?></p>
                                        <p>&nbsp;</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 54.8px; text-align: center;">
                                        <p>4</p>
                                        </td>
                                        <td style="width: 306px; text-align: center;">
                                        <p>Beasiswa</p>
                                        <p>&nbsp;</p>
                                        </td>
                                        <td style="width: 703.6px; text-align: center;">
                                        <p><?php echo $dataisian17[$diloop]['kolom8'] ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 54.8px; text-align: center;">
                                    <p>5</p>
                                    </td>
                                    <td style="width: 306px; text-align: center;">
                                    <p>Kesehatan</p>
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 703.6px; text-align: center;">
                                    <p><?php echo $dataisian17[$diloop]['kolom10'] ?></p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
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