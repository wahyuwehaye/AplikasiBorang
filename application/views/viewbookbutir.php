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
                                    <h1 style="text-align: left;">1.1.1 Jelaskan mekanisme <strong>penyusunan</strong> visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan</h1>
                                    <p><?php echo $dataisian1[$i]['kolom1'] ?></p>
                                    <h1 style="text-align: left;">1.1.2 Visi&nbsp;&nbsp;</h1>
                                    <p><?php echo $dataisian1[$i]['kolom2'] ?></p>
                                    <h1 style="text-align: left;">1.1.3 Misi</h1>
                                    <p><?php echo $dataisian1[$i]['kolom3'] ?></p>
                                    <h1 style="text-align: left;">1.1.4 Tujuan&nbsp;</h1>
                                    <p><?php echo $dataisian1[$i]['kolom4'] ?></p>
                                <?php }
                            // }elseif ($jum==2) {
                                for($i=0;$i<count($dataisian2);$i++){
                                ?>
                                    <h1 style="text-align: left;">1.1.5 Sasaran dan Strategi Pencapaiannya</h1>
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
                            <h3>3.3    Evaluasi Lulusan</h3>
                            <h3>3.3.1  Evaluasi Kinerja lulusan oleh Pihak Pengguna Lulusan
Adakah studi pelacakan (tracer study) untuk mendapatkan hasil evaluasi kinerja lulusan dengan pihak pengguna?
</h3>
                            <h3>Hasil studi pelacakan dirangkum dalam tabel berikut:</h3>
                            <h3>Nyatakan angka persentasenya(*)  pada kolom yang sesuai.</h3>
                            <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <table style="height: 101px; margin-left: auto; margin-right: auto;" border="1" width="1105" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 1096px;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>Hasil studi pelacakan dirangkum dalam tabel berikut:</p>
                                    <p>Nyatakan angka persentasenya(*)&nbsp; pada kolom yang sesuai.</p>
                                    <table style="margin-left: auto; margin-right: auto; height: 464px;" border="1" width="1086" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>Jenis Kemampuan</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;" colspan="4">
                                    <p><strong>Tanggapan Pihak Pengguna</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>Rencana Tindak Lanjut oleh Program Studi</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Sangat Baik</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Baik</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Cukup</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Kurang</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>(%)</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>(%)</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>(%)</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>(%)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Integritas (etika dan moral)</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Keahlian berdasarkan bidang ilmu (profesionalisme)</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Bahasa Inggris</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>4</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Penggunaan Teknologi Informasi</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>5</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Komunikasi</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>6</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Kerjasama tim</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>7</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Pengembangan diri</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 379.6px; text-align: center;" colspan="2">
                                    <p>Total</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>(a)</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>(b)</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>(c)</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>(d)</p>
                                    </td>
                                    <td style="width: 335.6px; background-color: #9c9c9c; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan&nbsp;:&nbsp; Sediakan dokumen pendukung pada saat asesmen lapangan</p>
                                    <p>(*) persentase tanggapan pihak pengguna = [(jumlah tanggapan pada peringkat) : (jumlah tanggapan yang ada)] x 100</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                            <h3>3.3.2  Rata-rata waktu tunggu lulusan untuk memperoleh pekerjaan yang pertama = … bulan (Jelaskan bagaimana data ini diperoleh)</h3>
                            <h3>3.3.3  Persentase lulusan yang bekerja pada bidang yang sesuai dengan keahliannya = … % (Jelaskan bagaimana data ini diperoleh)</h3>
                            <h3>3.4     Himpunan Alumni</h3>
                            <h3>Jelaskan apakah lulusan program studi memiliki himpunan alumni.  Jika memiliki, jelaskan aktivitas dan hasil kegiatan dari himpunan alumni untuk kemajuan program studi dalam kegiatan akademik dan non akademik, meliputi sumbangan dana, sumbangan fasilitas, keterlibatan dalam kegiatan, pengembangan jejaring, dan penyediaan fasilitas.</h3>
                            <h1>STANDAR 4. SUMBER DAYA MANUSIA</h1>
                            <h3>4.1     Sistem Seleksi dan Pengembangan</h3>
                            <h3>Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).</h3>
                            <h3>4.2     Monitoring dan Evaluasi</h3>
                            <h3>Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).</h3>
                            <h3>4.3  Dosen Tetap </h3>
                            <h3>Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.</h3>
                            <h3>Dosen tetap dipilah dalam 2 kelompok, yaitu:</h3>
                            <h3>1. dosen tetap yang bidang keahliannya sesuai dengan PS</h3>
                            <h3>2. dosen tetap yang bidang keahliannya di luar PS</h3>
                            <table style="margin-left: auto; margin-right: auto; height: 213px;" border="1" width="1064" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 60px;">
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Nama Dosen Tetap</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>&nbsp;</strong><strong>NIDN**</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Tgl. Lahir</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Jabatan Akademik***</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Gelar Akademik</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Pendidikan S1, S2, S3&nbsp; dan Asal PT*</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Bidang Keahlian untuk Setiap Jenjang Pendidikan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35.8px;">
                                    <td style="width: 55.6px; height: 35.8px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 139.6px; height: 35.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 85.2px; height: 35.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 85.2px; height: 35.8px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 134.8px; height: 35.8px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 125.2px; height: 35.8px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 175.6px; height: 35.8px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 245.2px; height: 35.8px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 55.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 175.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 245.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 55.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 175.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 245.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 55.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 175.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 245.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p><br />* Lampirkan fotokopi ijazah.</p>
                                    <p>** NIDN : Nomor Induk Dosen Nasional</p>
                                    <p>*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.</p>
                                    <p>&nbsp;</p>
                            <h3>4.3.2  Data dosen tetap yang bidang keahliannya di luar bidang PS: </h3>
                            <table style="margin-left: auto; margin-right: auto; height: 210px;" border="1" width="1071" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Nama Dosen Tetap</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>&nbsp;</strong></p>
                                    <p><strong>NIDN**</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Tgl. Lahir</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Jabatan Akademik***</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Gelar Akademik</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Pendidikan S1, S2, S3&nbsp; dan Asal PT*</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Bidang Keahlian untuk Setiap Jenjang Pendidikan</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 57.2px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 138px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 134px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 182px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 244.4px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 57.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 138px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 57.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 138px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 57.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 138px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* Lampirkan fotokopi ijazah.</p>
                                    <p>** NIDN : Nomor Induk Dosen Nasional</p>
                                    <p>*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan.</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                            <h3>4.3.3  Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)</h3>
                            <table style="margin-left: auto; margin-right: auto; height: 356px;" border="1" width="1069" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>N</strong><strong>o.</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>Nama </strong></p>
                                    <p><strong>Dosen Tetap</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" colspan="3">
                                    <p><strong>sks</strong></p>
                                    <p><strong>Pengajaran pada</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>sks</strong></p>
                                    <p><strong>Penelitian</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>sks</strong></p>
                                    <p><strong>Pengab-dian kepada Masya-rakat</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" colspan="2" rowspan="2">
                                    <p><strong>sks</strong></p>
                                    <p><strong>Manajemen**</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>Jumlah sks</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>PS Sendiri</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>PS Lain</strong></p>
                                    <p><strong>PT Sendiri</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>PT Lain</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>PT Sen-diri</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>PT Lain</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p><strong>(10)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 234.8px; text-align: left;" colspan="2">
                                    <p><strong>Jumlah</strong></p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 234.8px; text-align: left;" colspan="2">
                                    <p><strong>Rata-rata*</strong></p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan:</p>
                                    <p>Sks pengajaran sama dengan sks mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel adalah 1/2 kali sks mata kuliah.</p>
                                    <p>* &nbsp;&nbsp;rata-rata&nbsp;adalah jumlah sks dibagi dengan jumlah dosen tetap.</p>
                                    <p>** &nbsp;sks manajemen dihitung sbb&nbsp;:</p>
                                    <p>Beban kerja manajemen untuk jabatan-jabatan ini adalah sbb.</p>
                                    <p>Beban kerja manajemen untuk jabatan-jabatan ini adalah sbb.</p>
                                    <p>- rektor/direktur politeknik 12 sks</p>
                                    <p>- pembantu rektor/dekan/ketua sekolah tinggi/direktur akademi 10 sks</p>
                                    <p>- ketua lembaga/kepala UPT 8 sks</p>
                                    <p>- pembantu dekan/ketua jurusan/kepala pusat/ketua senat akademik/ketua senat fakultas 6 sks</p>
                                    <p>- sekretaris jurusan/sekretaris pusat/sekretaris senat akademik/sekretaris senat universitas/ sekretaris senat fakultas/ kepala lab. atau studio/kepala balai/ketua PS 4 sks</p>
                                    <p>- sekretaris PS 3 sks</p>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bagi PT yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara.</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                            <h3>4.3.4 Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:</h3>
                            <table style="margin-left: auto; margin-right: auto; height: 257px;" border="1" width="1081" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 61px;">
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Nama</strong></p>
                                    <p><strong>Dosen Tetap</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Bidang Keahlian</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Kode Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Nama Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Jumlah Kelas</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Jumlah Pertemuan yang Direncanakan</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Jumlah Pertemuan yang Dilaksanakan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 7.6px;">
                                    <td style="width: 75.6px; text-align: center; height: 7.6px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 170.8px; text-align: center; height: 7.6px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 7.6px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 7.6px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 164.4px; text-align: center; height: 7.6px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 7.6px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 150.8px; text-align: center; height: 7.6px;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 166.8px; text-align: center; height: 7.6px;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 75.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 170.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164.4px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 150.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 166.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 75.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 170.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164.4px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 150.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 166.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 75.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 170.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164.4px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 150.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 166.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 755.6px; text-align: center; height: 36px;" colspan="6">
                                    <p>Jumlah</p>
                                    </td>
                                    <td style="width: 150.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 166.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                            <h3>4.3.5  Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:</h3>
                            <table style="margin-left: auto; margin-right: auto; height: 251px;" border="1" width="1077" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 60px;">
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Nama</strong></p>
                                    <p><strong>Dosen Tetap</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Bidang Keahlian</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Kode Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Nama Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Jumlah Kelas</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Jumlah Pertemuan yang Direncanakan</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Jumlah Pertemuan yang Dilaksanakan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 72.4px; text-align: center; height: 35px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 168.4px; text-align: center; height: 35px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 35px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 35px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 165.2px; text-align: center; height: 35px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 35px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 158.8px; text-align: center; height: 35px;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 159.6px; text-align: center; height: 35px;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 72.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 165.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 159.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 72.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 165.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 159.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35.6px;">
                                    <td style="width: 72.4px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.4px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 165.2px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.8px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 159.6px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 750.8px; text-align: center; height: 35px;" colspan="6">
                                    <p>Jumlah</p>
                                    </td>
                                    <td style="width: 158.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 159.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                            <h3>4.4  Dosen Tidak Tetap</h3>
                            <h3>4.4.1  Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:</h3>
                            <table style="margin-left: auto; margin-right: auto; height: 214px;" border="1" width="1067" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 62px;">
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Dosen Tidak Tetap</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>&nbsp;</strong></p>
                                    <p><strong>NIDN**</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tgl. Lahir</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jabatan Akademik***</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Gelar Akademik</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Pendidikan S1, S2, S3&nbsp; dan Asal PT *</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Bidang Keahlian untuk Setiap Jenjang Pendidikan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35.2px;">
                                    <td style="height: 35.2px; width: 58px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 139.6px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 86.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 87.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 137.2px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 126px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 199.6px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 214px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="height: 35px; width: 58px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 139.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 87.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 137.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 126px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 199.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 214px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="height: 35px; width: 58px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 139.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 87.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 137.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 126px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 199.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 214px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="height: 35px; width: 58px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 139.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 87.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 137.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 126px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 199.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 214px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>* Lampirkan fotokopi ijazah.</p>
                                    <p>** NIDN : Nomor Induk Dosen Nasional</p>
                                    <p>*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan.<br /><br /></p>
                                    <p>&nbsp;</p>
                            <h3>4.4.2  Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:</h3>
                            <table style="margin-left: auto; margin-right: auto; height: 284px;" border="1" width="1064" cellspacing="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama</strong></p>
                                    <p><strong>Dosen</strong></p>
                                    <p><strong>Tdk Tetap</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Bidang Keahlian</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Kode Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Kelas</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Pertemuan yang Direnca-nakan</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Pertemuan yang Dilaksa-nakan</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 149.6px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 140.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 84.8px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 169.6px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 104.8px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 148.8px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 149.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 140.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 84.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 169.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 149.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 140.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 84.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 169.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 149.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 140.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 84.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 169.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 748px; text-align: center;" colspan="6">
                                    <p>Jumlah</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                            <h3>4.5   Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir</h3>
                            <h3>4.5.1  Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)</h3>
                            <table style="margin-left: auto; margin-right: auto; height: 190px;" border="1" width="1086" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 35.4px;">
                                    <td style="width: 93.2px; height: 35.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 93.2px; height: 35.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Tenaga Ahli/Pakar</strong></p>
                                    </td>
                                    <td style="width: 93.2px; height: 35.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama dan Judul Kegiatan</strong></p>
                                    </td>
                                    <td style="width: 93.2px; height: 35.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Waktu Pelaksanaan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 93.2px; text-align: center; height: 35px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 356.4px; text-align: center; height: 35px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 302px; text-align: center; height: 35px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 324.4px; text-align: center; height: 35px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 93.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 356.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 302px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 324.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 93.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 356.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 302px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 324.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 93.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 356.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 302px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 324.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                            <h3>4.5.2  Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS</h3>
                            <table style="margin-left: auto; margin-right: auto; height: 147px;" border="1" width="1105" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Dosen</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jenjang Pendidikan Lanjut</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Bidang Studi</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Perguruan Tinggi</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Negara</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tahun Mulai Studi</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 229.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 205.2px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 154px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 161.2px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 116.4px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 154px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 161.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 154px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 161.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                            <h3>4.5.3.   Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri</h3>
                            <table style="margin-left: auto; margin-right: auto; height: 226px; width: 1087px;" border="1" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 19px;">
                                    <td style="width: 64px; height: 38px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 38px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>Nama Dosen</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 38px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Kegiatan*</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 38px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>Tempat</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 38px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>Waktu</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 19px; background-color: #9c9c9c; text-align: center;" colspan="2">
                                    <p><strong>Sebagai</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 19px;">
                                    <td style="width: 64px; height: 19px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Penyaji</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 19px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Peserta</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 4.6px;">
                                    <td style="width: 64px; text-align: center; height: 4.6px;">
                                    <p><strong>&nbsp;</strong></p>
                                    </td>
                                    <td style="width: 220px; text-align: center; height: 4.6px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 224px; text-align: center; height: 4.6px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 182px; text-align: center; height: 4.6px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 136px; text-align: center; height: 4.6px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 116px; text-align: center; height: 4.6px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 128px; text-align: center; height: 4.6px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 64px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 220px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 136px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 64px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 220px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 136px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 64px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 220px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 136px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* Jenis kegiatan&nbsp;: Seminar ilmiah, Lokakarya, Penataran/Pelatihan, <em>Workshop,</em> Pagelaran, Pameran, Peragaan dll</p>
                                    <p>&nbsp;</p>
                            <h3>4.5.4    Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).</h3>
                            <table border="1" width="1096" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="background-color: #9c9c9c; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Nama Dosen</strong></p>
                                    </td>
                                    <td style="background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Prestasi yang Dicapai*</strong></p>
                                    </td>
                                    <td style="background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Waktu Pencapaian</strong></p>
                                    </td>
                                    <td style="background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Tingkat</strong></p>
                                    <p><strong>(Lokal, Nasional, Internasional)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="text-align: center;">
                                    <p>(1)</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>(2)</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>(3)</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>(4)</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>(5)</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* Sediakan dokumen pendukung pada saat asesmen lapangan.</p>
                                    <p>&nbsp;</p>
                            <h3>4.5.5  Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.</h3>
                            <table style="height: 240px;" border="1" width="1076" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 66.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 66.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Dosen</strong></p>
                                    </td>
                                    <td style="width: 66.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Organisasi Keilmuan atau Organisasi Profesi</strong></p>
                                    </td>
                                    <td style="width: 66.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Kurun Waktu</strong></p>
                                    </td>
                                    <td style="width: 66.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tingkat</strong></p>
                                    <p><strong>(Lokal, Nasional, Internasional)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 66.4px; text-align: center;">
                                    <p>(1)</p>
                                    </td>
                                    <td style="width: 223.2px; text-align: center;">
                                    <p>(2)</p>
                                    </td>
                                    <td style="width: 286.4px; text-align: center;">
                                    <p>(3)</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>(4)</p>
                                    </td>
                                    <td style="width: 315.2px; text-align: center;">
                                    <p>(5)</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 66.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 223.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 286.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 315.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 66.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 223.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 286.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 315.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 66.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 223.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 286.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 315.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                            <h3>4.6  Tenaga kependidikan</h3>
                            <h3>4.6.1 Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:</h3>
                            <table style="height: 383px;" border="1" width="1081" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 18px;">
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 12.2px;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 12.2px;" rowspan="2">
                                    <p><strong>Jenis Tenaga Kependidikan</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 18px;" colspan="8">
                                    <p><strong>Jumlah Tenaga Kependidikan dengan </strong></p>
                                    <p><strong>Pendidikan Terakhir</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 12.2px;" rowspan="2">
                                    <p><strong>Unit Kerja</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 40px;">
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>S3</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>S2</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>S1</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>D4</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>D3</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>D2</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>D1</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>SMA/SMK</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 40px;">
                                    <td style="width: 65.6px; text-align: center; height: 40px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center; height: 40px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    <td style="width: 146.4px; text-align: center; height: 40px;">
                                    <p><strong>(10)</strong></p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 40px;">
                                    <p><strong>(11)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 65.6px; text-align: center; height: 39px;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center; height: 39px;">
                                    <p>Pustakawan *</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 146.4px; height: 39px; background-color: #a3a3a3; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 54px;">
                                    <td style="width: 65.6px; text-align: center; height: 54px;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center; height: 54px;">
                                    <p>Laboran/ Teknisi/ Analis/ Operator/ Programer</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 146.4px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 41px;">
                                    <td style="width: 65.6px; text-align: center; height: 41px;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center; height: 41px;">
                                    <p>Administrasi</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 146.4px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 41px;">
                                    <td style="width: 65.6px; text-align: center; height: 41px;">
                                    <p>4</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center; height: 41px;">
                                    <p>Lainnya&nbsp;: &hellip;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 146.4px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 41px;">
                                    <td style="width: 272px; text-align: center; height: 41px;" colspan="2">
                                    <p><strong>Total</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 146.4px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan</p>
                                    <p>&nbsp;</p>
                            <h3>4.6.2  Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.</h3>
                            <h1>STANDAR 5. KURIKULUM, PEMBELAJARAN, DAN SUASANA AKADEMIK</h1>
                            <h3>5.1  Kurikulum</h3>
                            <h3>Kurikulum pendidikan tinggi adalah seperangkat rencana dan pengaturan mengenai isi, bahan kajian, maupun bahan pelajaran serta cara penyampaiannya, dan penilaian yang digunakan sebagai pedoman penyelenggaraan kegiatan pembelajaran di perguruan tinggi.
Kurikulum seharusnya memuat standar kompetensi lulusan yang terstruktur dalam kompetensi utama, pendukung dan lainnya yang mendukung  tercapainya tujuan, terlaksananya misi, dan terwujudnya visi program studi. Kurikulum memuat mata kuliah/modul/blok yang mendukung pencapaian kompetensi lulusan dan memberikan keleluasaan pada mahasiswa untuk memperluas wawasan dan memperdalam keahlian sesuai dengan minatnya, serta dilengkapi dengan deskripsi mata kuliah/modul/blok, silabus, rencana pembelajaran dan evaluasi. 
Kurikulum harus dirancang berdasarkan relevansinya dengan tujuan, cakupan dan kedalaman materi, pengorganisasian yang mendorong terbentuknya hard skills dan keterampilan kepribadian dan perilaku (soft skills) yang dapat diterapkan dalam berbagai situasi dan kondisi.
</h3>
                            <h3>5.1.1  Kompetensi</h3>
                            <h3>5.1.1.1  Uraikan secara ringkas kompetensi utama lulusan</h3>
                            <h3>5.1.1.2  Uraikan secara ringkas kompetensi pendukung lulusan</h3>
                            <h3>5.1.1.3  Uraikan secara ringkas kompetensi lainnya/pilihan lulusan </h3>
                            <h3>5.1.2  Struktur Kurikulum</h3>
                            <h3>5.1.2.1  Jumlah sks PS (minimum untuk kelulusan) :  …  sks yang tersusun sebagai berikut:</h3>
                            <p>Jumlah sks PS (minimum untuk kelulusan) :&nbsp; &hellip;&nbsp; sks yang tersusun sebagai berikut:</p>
                                    <table style="height: 189px;" border="1" width="1089" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 393.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jenis Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 393.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>sks</strong></p>
                                    </td>
                                    <td style="width: 393.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 393.6px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 136.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 538.4px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 393.6px; text-align: left;">
                                    <p>Mata Kuliah Wajib</p>
                                    </td>
                                    <td style="width: 136.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 538.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 393.6px; text-align: left;">
                                    <p>Mata Kuliah Pilihan</p>
                                    </td>
                                    <td style="width: 136.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 538.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 393.6px; text-align: left;">
                                    <p>Jumlah Total</p>
                                    </td>
                                    <td style="width: 136.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 538.4px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                            <h3>5.1.2.2  Tuliskan struktur kurikulum berdasarkan urutan mata kuliah (MK) semester demi semester, dengan mengikuti format tabel berikut:</h3>
                            <table style="height: 473px;" border="1" width="1089" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 21px;">
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Smt</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Kode MK</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Nama Mata Kuliah*</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Bobot sks</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 21px;" colspan="2">
                                    <p><strong>sks MK dalam Kurikulum</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Bobot Tugas*** </strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 21px;" colspan="3">
                                    <p><strong>Kelengkapan****</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Unit/ Jur/ Fak Penyelenggara</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 12px;">
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 12px;">
                                    <p><strong>Inti**</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 12px;">
                                    <p><strong>Insti-tusional</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 12px;">
                                    <p><strong>Deskripsi</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 12px;">
                                    <p><strong>Silabus</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 12px;">
                                    <p><strong>SAP</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p><strong>(10)</strong></p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p><strong>(11)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>I</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>II</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>Dst</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 332.8px; height: 38px; text-align: left;" colspan="3">
                                    <p>Total sks</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 523.2px; height: 38px; background-color: #a6a6a6; text-align: center;" colspan="5">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* &nbsp;Tuliskan mata kuliah pilihan sebagai mata kuliah pilihan I, mata kuliah pilihan II, dst. (nama-nama mata kuliah pilihan yang dilaksanakan dicantumkan dalam tabel 5.1.3.)</p>
                                    <p>** &nbsp;&nbsp;Menurut rujukan <em>peer group</em> / SK Mendiknas 045/2002 (ps. 3 ayat 2e)</p>
                                    <p>*** Beri tanda &radic; pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) &ge; 20%.</p>
                                    <p>****Beri tanda &radic; pada mata kuliah yang dilengkapi dengan deskripsi, silabus, dan atau SAP. &nbsp;Sediakan dokumen pada saat asesmen lapangan.</p>
                                    <p>&nbsp;</p>
                            <h3>5.1.3   Tuliskan mata kuliah pilihan yang dilaksanakan dalam tiga tahun terakhir, pada tabel berikut:</h3>
                            <table style="height: 250px;" border="1" width="1073" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 38px;">
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Semester</strong></p>
                                    </td>
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Kode MK</strong></p>
                                    </td>
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Nama MK (Pilihan)</strong></p>
                                    </td>
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Bobot sks</strong></p>
                                    </td>
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Bobot Tugas*</strong></p>
                                    </td>
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Unit/ Jur/ Fak Pengelola</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 12px;">
                                    <td style="width: 145.6px; text-align: center; height: 12px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 12px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 348.8px; text-align: center; height: 12px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 120px; text-align: center; height: 12px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 130.4px; text-align: center; height: 12px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 12px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 145.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 348.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 120px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.4px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 145.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 348.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 120px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.4px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 145.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 348.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 120px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.4px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39.6px;">
                                    <td style="width: 607.2px; height: 39.6px; text-align: left;" colspan="3">
                                    <p>Total sks</p>
                                    </td>
                                    <td style="width: 120px; text-align: center; height: 39.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.4px; height: 39.6px; background-color: #a6a6a6; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.4px; height: 39.6px; background-color: #a6a6a6; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* beri tanda &radic; pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) &ge; 20%.</p>
                                    <p>&nbsp;</p>
                            <h3>5.1.4   Tuliskan substansi praktikum/praktek yang mandiri ataupun yang merupakan bagian dari mata kuliah tertentu, dengan mengikuti format di bawah ini:</h3>
                            <table style="height: 217px; width: 1059px;" border="1" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 93px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 254px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama Praktikum/Praktek</strong></p>
                                    </td>
                                    <td style="width: 328px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Isi Praktikum/Praktek</strong></p>
                                    </td>
                                    <td style="width: 352px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Tempat/Lokasi Praktikum/Praktek</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 164px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Judul/Modul</strong></p>
                                    </td>
                                    <td style="width: 164px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jam Pelaksanaan </strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 93px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 254px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 352px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 93px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 254px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 352px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 93px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 254px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 352px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                            <h3>5.2. Peninjauan Kurikulum dalam 5 Tahun Terakhir 
    Jelaskan mekanisme peninjauan kurikulum dan pihak-pihak yang dilibatkan dalam proses peninjauan tersebut.  
</h3>
<h4>Tuliskan hasil peninjauan tersebut, mengikuti format tabel berikut.</h4>

                            <table style="height: 100px; margin-left: auto; margin-right: auto;" border="1" width="1090" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 1080.8px;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>Tuliskan hasil peninjauan tersebut, mengikuti format tabel berikut.</p>
                                    <table style="height: 260px;" border="1" width="1081" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No. MK</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama MK</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>MK</strong></p>
                                    <p><strong>Baru/</strong></p>
                                    <p><strong>Lama/Hapus</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Perubahan pada</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Alasan Peninjauan</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Atas Usulan/ Masukan&nbsp; dari</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Berlaku mulai Sem./Th.</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Silabus/SAP</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Buku Ajar</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 76px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 80.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 180.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 121.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 82.4px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 111.2px; text-align: center;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 180.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 121.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 111.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 180.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 121.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 111.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 180.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 121.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 111.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>

                            <h3>5.3    Pelaksanaan Proses Pembelajaran</h3>
                            <h3>Sistem pembelajaran dibangun berdasarkan perencanaan yang relevan dengan tujuan, ranah belajar dan hierarkinya.
Pembelajaran dilaksanakan menggunakan berbagai strategi dan teknik yang menantang, mendorong mahasiswa untuk berpikir kritis bereksplorasi, berkreasi dan bereksperimen dengan memanfaatkan aneka sumber.
Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki secara periodik kegiatan perkuliahan (kehadiran dosen dan mahasiswa), penyusunan materi perkuliahan, serta penilaian hasil belajar.
</h3>
                            <h3>5.3.1   Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan
Jelaskan mekanisme penyusunan materi kuliah dan monitoring perkuliahan, antara lain kehadiran dosen dan mahasiswa, serta materi kuliah.
</h3>
                            <h3>5.3.2  Lampirkan contoh soal ujian dalam 1 tahun terakhir untuk 5 mata kuliah keahlian berikut silabusnya.</h3>
                            <h3>5.4   Sistem Pembimbingan Akademik</h3>
                            <h3>5.4.1  Tuliskan nama dosen pembimbing akademik dan jumlah mahasiswa yang dibimbingnya dengan mengikuti format tabel berikut:  </h3>
                            <p>&nbsp;</p>
                                    <table style="height: 260px;" border="1" width="1075" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Dosen </strong><strong>Pembimbing Akademik</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Mahasiswa Bimbingan</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Rata-rata Banyaknya Pertemuan/mhs/semester</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 65.6px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 475.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 214.4px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 293.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 65.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 475.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 214.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 293.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 65.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 475.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 214.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 293.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 546.4px; text-align: center;" colspan="2">
                                    <p>Total</p>
                                    </td>
                                    <td style="width: 214.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 293.6px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 1065.6px; text-align: left;" colspan="4">
                                    <p>Rata-rata banyaknya pertemuan per mahasiswa per semester =&nbsp; ... kali.</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                            <h3>5.4.2  Jelaskan proses pembimbingan akademik  yang diterapkan pada Program Studi ini dalam hal-hal berikut:</h3>
                            <p>&nbsp;</p>
                                    <table style="height: 324px;" border="1" width="1074" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Hal</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Penjelasan</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 435.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 435.2px; text-align: left;">
                                    <p>Tujuan pembimbingan</p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 435.2px; text-align: left;">
                                    <p>Pelaksanaan pembimbingan</p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 435.2px; text-align: left;">
                                    <p>Masalah yang dibicarakan dalam pembimbingan</p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>4</p>
                                    </td>
                                    <td style="width: 435.2px; text-align: left;">
                                    <p>Kesulitan dalam pembimbingan dan upaya untuk mengatasinya</p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>5</p>
                                    </td>
                                    <td style="width: 435.2px; text-align: left;">
                                    <p>Manfaat yang diperoleh mahasiswa dari pembimbingan</p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                            <h3>5.5   Pembimbingan Tugas Akhir / Skripsi</h3>
                            <h3>5.5.1   Jelaskan pelaksanaan pembimbingan Tugas Akhir atau Skripsi yang diterapkan pada PS ini.  </h3>
                            <h3>•   Rata-rata banyaknya mahasiswa per dosen pembimbing tugas akhir (TA)
……. mahasiswa/dosen TA
</h3>
                            <h3>•   Rata-rata jumlah pertemuan dosen-mahasiswa untuk menyelesaikan tugas akhir : .... kali mulai dari saat mengambil TA hingga menyelesaikan TA.</h3>
                            <h3>•   Tuliskan nama-nama dosen yang menjadi pembimbing tugas akhir atau skripsi, dan jumlah mahasiswa yang bimbingan dengan mengikuti format tabel berikut: </h3>
                            <p>&nbsp;</p>
                                    <ul>
                                    <li>Tuliskan nama-nama dosen yang menjadi pembimbing tugas akhir atau skripsi, dan jumlah mahasiswa yang bimbingan dengan mengikuti format tabel berikut:&nbsp;</li>
                                    </ul>
                                    <table style="height: 204px;" border="1" width="1079" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 68px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No</strong></p>
                                    </td>
                                    <td style="width: 68px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Dosen Pembimbing </strong></p>
                                    </td>
                                    <td style="width: 68px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Mahasiswa</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 68px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 627.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 363.2px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 68px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 627.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 363.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 68px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 627.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 363.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 68px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 627.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 363.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                            <h3>5.5.2  Rata-rata lama penyelesaian tugas akhir/skripsi pada tiga tahun terakhir :  ... bulan. (Menurut kurikulum tugas akhir direncanakan ... semester).</h3>
                            <h3>5.6  Upaya Perbaikan Pembelajaran
Uraikan upaya perbaikan pembelajaran serta hasil yang telah dilakukan dan dicapai dalam tiga tahun terakhir dan hasilnya.
</h3>
                            <p>&nbsp;</p>
                                    <table style="height: 312px;" border="1" width="1079" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 36px;">
                                    <td style="width: 538.4px; background-color: #c9c9c9; text-align: center; height: 72px;" rowspan="2">
                                    <p><strong>Butir</strong></p>
                                    </td>
                                    <td style="width: 538.4px; background-color: #c9c9c9; text-align: center; height: 36px;" colspan="2">
                                    <p><strong>Upaya Perbaikan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 538.4px; background-color: #c9c9c9; text-align: center; height: 36px;">
                                    <p><strong>Tindakan</strong></p>
                                    </td>
                                    <td style="width: 538.4px; background-color: #c9c9c9; text-align: center; height: 36px;">
                                    <p><strong>Hasil</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36.6px;">
                                    <td style="width: 538.4px; text-align: center; height: 36.6px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 36.6px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 36.6px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 538.4px; height: 36px; text-align: left;">
                                    <p>Materi</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 37px;">
                                    <td style="width: 538.4px; height: 36px; text-align: left;">
                                    <p>Metode Pembelajaran</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 37px;">
                                    <td style="width: 538.4px; height: 36px; text-align: left;">
                                    <p>Penggunaan Teknologi Pembelajaran</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 37px;">
                                    <td style="width: 538.4px; height: 36px; text-align: left;">
                                    <p>Cara-cara evaluasi</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 37px;">
                                    <td style="width: 538.4px; height: 36px; text-align: left;">
                                    <p>&hellip;..</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                            <h3>5.7  Upaya Peningkatan Suasana Akademik</h3>
                            <h3>Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut:</h3>
                            <h3>5.7.1   Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik).</h3>
                            <h3>5.7.1   Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik).</h3>
                            <h3>5.7.3   Program dan kegiatan di dalam dan di luar proses pembelajaran, yang dilaksanakan baik di dalam maupun di luar kelas,  untuk menciptakan suasana akademik yang kondusif (misalnya seminar, simposium, lokakarya, bedah buku, penelitian bersama, pengenalan kehidupan kampus, dan temu dosen-mahasiswa-alumni).</h3>
                            <h3>5.7.4   Interaksi akademik antara dosen-mahasiswa, antar mahasiswa, serta antar dosen.</h3>
                            <h3>5.7.5   Pengembangan perilaku kecendekiawanan. </h3>
                            <h1>    STANDAR 6. PEMBIAYAAN, PRASARANA, SARANA, DAN SISTEM INFORMASI</h1>
                            <h3>6.1   Pengelolaan Dana</h3>
                            <h3>Keterlibatan aktif program studi harus tercerminkan dalam dokumen tentang proses perencanaan, pengelolaan dan pelaporan serta pertanggungjawaban penggunaan dana kepada pemangku kepentingan melalui mekanisme yang transparan dan akuntabel.</h3>
                            <h3>Jelaskan keterlibatan PS dalam perencanaan anggaran dan pengelolaan dana.</h3>
                            <h3>6.2   Perolehan dan Alokasi Dana</h3>
                            <h3>6.2.1  Tuliskan realisasi perolehan dan alokasi dana (termasuk hibah) dalam juta rupiah termasuk gaji,  selama tiga tahun terakhir, pada tabel berikut:</h3>
                            <p>&nbsp;</p>
                                    <table style="height: 657px;" border="1" width="1070" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 16px;">
                                    <td style="width: 201.6px; height: 13px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Sumber Dana</strong></p>
                                    </td>
                                    <td style="width: 201.6px; height: 13px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Dana</strong></p>
                                    </td>
                                    <td style="width: 201.6px; height: 16px; background-color: #c9c9c9; text-align: center;" colspan="3">
                                    <p><strong>Jumlah Dana (Juta Rupiah)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 27.6px;">
                                    <td style="width: 201.6px; height: 27.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-2</strong></p>
                                    </td>
                                    <td style="width: 201.6px; height: 27.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-1</strong></p>
                                    </td>
                                    <td style="width: 201.6px; height: 27.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 201.6px; height: 35px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 201.6px; height: 105px; text-align: left;" rowspan="3">
                                    <p>PT sendiri</p>
                                    </td>
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 201.6px; height: 105px; text-align: left;" rowspan="3">
                                    <p>Yayasan</p>
                                    </td>
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 201.6px; height: 105px; text-align: left;" rowspan="3">
                                    <p>Diknas</p>
                                    </td>
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 201.6px; height: 105px; text-align: left;" rowspan="3">
                                    <p>Sumber lain</p>
                                    </td>
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 517.6px; height: 36px; text-align: left;" colspan="2">
                                    <p>Total</p>
                                    </td>
                                    <td style="width: 168.8px; height: 36px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 36px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 36px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Penggunaan dana:</p>
                                    <table style="height: 410px;" border="1" width="1067" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 15px;">
                                    <td style="width: 89.6px; height: 17.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 89.6px; height: 17.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Penggunaan</strong></p>
                                    </td>
                                    <td style="width: 89.6px; height: 15px; background-color: #c9c9c9; text-align: center;" colspan="3">
                                    <p><strong>Persentase Dana </strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 2.8px;">
                                    <td style="width: 89.6px; height: 2.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-2</strong></p>
                                    </td>
                                    <td style="width: 89.6px; height: 2.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-1</strong></p>
                                    </td>
                                    <td style="width: 89.6px; height: 2.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 317.6px; text-align: center; height: 38px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Pendidikan</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Penelitian</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Pengabdian kepada Masyarakat</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>4</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Investasi prasarana</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>5</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Investasi sarana</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>6</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Investasi SDM</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Lain-lain</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                            <h3>6.2.2  Tuliskan dana untuk kegiatan penelitian pada tiga tahun terakhir yang melibatkan dosen yang bidang keahliannya sesuai dengan program studi, dengan mengikuti format tabel berikut:</h3>
                            <p>&nbsp;</p>
                                    <table style="height: 272px;" border="1" width="1078" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tahun</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Judul Penelitian</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Sumber dan Jenis Dana</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Dana*</strong></p>
                                    <p><strong>(dalam Juta Rupiah)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 250.4px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 244px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 250.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 250.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 250.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 819.2px; text-align: center;" colspan="3">
                                    <p><strong>Jumlah</strong></p>
                                    </td>
                                    <td style="width: 244px; text-align: center;">
                                    <p><strong>&nbsp;</strong></p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;* Di luar dana penelitian/penulisan skripsi, tesis, dan disertasi sebagai bagian dari studi lanjut.</p>
                                    <p>&nbsp;</p>
                            <h3>6.2.3 Tuliskan dana yang diperoleh dari/untuk kegiatan pelayanan/pengabdian kepada masyarakat pada tiga tahun terakhir dengan mengikuti format tabel berikut: </h3>
                            <p>&nbsp;</p>
                                    <table style="height: 275px;" border="1" width="1077" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 34px;">
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center; height: 34px;">
                                    <p><strong>Tahun</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center; height: 34px;">
                                    <p><strong>Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center; height: 34px;">
                                    <p><strong>Sumber dan Jenis Dana</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center; height: 34px;">
                                    <p><strong>Jumlah Dana</strong></p>
                                    <p><strong>(dalam Juta Rupiah)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 216.8px; text-align: center; height: 38px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center; height: 38px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 249.6px; text-align: center; height: 38px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 244px; text-align: center; height: 38px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 216.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 249.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 216.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 249.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 216.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 249.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 818.4px; text-align: center; height: 39px;" colspan="3">
                                    <p><strong>Jumlah</strong></p>
                                    </td>
                                    <td style="width: 244px; text-align: center; height: 39px;">
                                    <p><strong>&nbsp;</strong></p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                            <h3>6.3   Prasarana</h3>
                            <h3>6.3.1 Tuliskan data ruang kerja dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h3>
                            <p>&nbsp;</p>
                                    <table style="height: 316px;" border="1" width="964" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 44px;">
                                    <td style="width: 528.8px; height: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Ruang Kerja Dosen</strong></p>
                                    </td>
                                    <td style="width: 528.8px; height: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Ruang</strong></p>
                                    </td>
                                    <td style="width: 528.8px; height: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Luas (m<sup>2</sup>)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42px;">
                                    <td style="width: 528.8px; text-align: center; height: 42px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 207.2px; text-align: center; height: 42px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42px;">
                                    <td style="width: 528.8px; height: 42px; text-align: left;">
                                    <p>Satu ruang untuk lebih dari 4 dosen</p>
                                    </td>
                                    <td style="width: 207.2px; text-align: center; height: 42px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42px;">
                                    <p>(a)</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42px;">
                                    <td style="width: 528.8px; height: 42px; text-align: left;">
                                    <p>Satu ruang untuk 3 - 4 dosen</p>
                                    </td>
                                    <td style="width: 207.2px; text-align: center; height: 42px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42px;">
                                    <p>(b)</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42px;">
                                    <td style="width: 528.8px; height: 42px; text-align: left;">
                                    <p>Satu ruang untuk 2 dosen</p>
                                    </td>
                                    <td style="width: 207.2px; text-align: center; height: 42px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42px;">
                                    <p>(c)</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42.6px;">
                                    <td style="width: 528.8px; height: 42.6px; text-align: left;">
                                    <p>Satu ruang untuk 1 dosen (bukan pejabat struktural)</p>
                                    </td>
                                    <td style="width: 207.2px; text-align: center; height: 42.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42.6px;">
                                    <p>(d)</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42px;">
                                    <td style="width: 528.8px; height: 42px; text-align: left;">
                                    <p>TOTAL</p>
                                    </td>
                                    <td style="width: 207.2px; height: 42px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42px;">
                                    <p>(t)</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                            <h3>6.3.2   Tuliskan data prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. kecuali  ruang dosen) yang dipergunakan PS dalam proses belajar mengajar dengan  mengikuti format tabel berikut:</h3>
                            <p>&nbsp;</p>
                                    <table style="height: 256px;" border="1" width="1077" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Prasarana</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jumlah Unit</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Total Luas (m<sup>2</sup>)</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kepemilikan</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kondisi</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Utilisasi (Jam/minggu)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SD</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SW</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Terawat</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tidak Terawat</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 67.2px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 176px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 92.8px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 104px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 67.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 176px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 67.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 176px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 67.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 176px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Keterangan:</p>
                                    <p>SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama</p>
                                    <p>&nbsp;</p>
                            <h3>6.3.3   Tuliskan data prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik) dengan mengikuti format tabel berikut:</h3>
                            <p>&nbsp;</p>
                                    <table style="height: 261px;" border="1" width="1072" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Prasarana Penunjang</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jumlah Unit</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Total Luas (m<sup>2</sup>)</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kepemilikan</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kondisi</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Unit Pengelola</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SD</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SW</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Terawat</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tidak Terawat</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 75.2px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 92px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 77.6px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 75.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 77.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 75.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 77.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 75.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 77.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Keterangan:</p>
                                    <p>SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama.</p>
                                    <p>&nbsp;</p>
                            <h3>6.4   Sarana Pelaksanaan Kegiatan Akademik</h3>
                            <h3>6.4.1   Pustaka (buku teks, karya ilmiah, dan jurnal; termasuk juga dalam bentuk CD-ROM dan media lainnya)</h3>
                            <h3>Tuliskan rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS dengan mengikuti format tabel 1 berikut:</h3>
                            <p>Tuliskan rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS dengan mengikuti format tabel 1 berikut:</p>
                                    <p>Tabel 1. Rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS</p>
                                    <table style="height: 354px;" border="1" width="1087" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 496.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jenis Pustaka</strong></p>
                                    </td>
                                    <td style="width: 496.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Judul</strong></p>
                                    </td>
                                    <td style="width: 496.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah <em>Copy</em></strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Buku teks</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Jurnal nasional yang terakreditasi</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Jurnal internasional</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Prosiding</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Skripsi/Tesis</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Disertasi</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: center;">
                                    <p><strong>TOTAL</strong></p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Isikan jurnal/prosiding seminar yang tersedia/yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir dengan mengikuti format tabel 2 berikut:</p>
                                    <p>Tabel 2. &nbsp;Jurnal yang tersedia/yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir</p>
                                    <table style="height: 318px;" border="1" width="1084" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 264px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jenis</strong></p>
                                    </td>
                                    <td style="width: 264px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Jurnal</strong></p>
                                    </td>
                                    <td style="width: 264px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Rincian Tahun dan Nomor</strong></p>
                                    </td>
                                    <td style="width: 264px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 264px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 220.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;" rowspan="3">
                                    <p>Jurnal Terakreditasi DIKTI *</p>
                                    </td>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>1.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>2.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>Dst.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;" rowspan="3">
                                    <p>Jurnal Internasional *</p>
                                    </td>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>1.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>2.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>Dst.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan * = termasuk <em>e-journal</em>.</p>
                            <h3>6.4.2    Sebutkan sumber-sumber pustaka di lembaga lain (lembaga perpustakaan/ sumber dari internet beserta  alamat website) yang biasa diakses/dimanfaatkan oleh dosen dan mahasiswa program studi ini.</h3>
                            <ol>
                                    <li>...</li>
                                    <li>...</li>
                                    <li>...</li>
                                    <li>dst</li>
                                    </ol>
                            <h3>6.4.3  Tuliskan peralatan utama yang digunakan di laboratorium (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/balai kesehatan, green house, lahan untuk pertanian, dan sejenisnya) yang dipergunakan dalam proses pembelajaran di jurusan/fakultas dengan  mengikuti format tabel berikut:</h3>
                            <table style="height: 626px;" border="1" width="1087" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama Laboratorium</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Peralatan Utama</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jumlah Unit</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kepemilikan</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kondisi</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Rata-rata Waktu Penggunaan (jam/minggu)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SD</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SW</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Terawat</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tidak Terawat</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Keterangan:</p>
                                    <p>SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama/Hak Pakai.</p>
                                    <p>&nbsp;</p>
                            <h3>6.5   Sistem Informasi</h3>
                            <h3>6.5.1   Jelaskan sistem informasi dan fasilitas yang digunakan oleh program studi untuk proses pembelajaran (hardware, software, e-learning, perpustakaan, dll.).</h3>
                            <h3>6.5.2    Beri tanda √ pada kolom yang sesuai (hanya satu kolom) dengan aksesibilitas tiap jenis data, dengan mengikuti format tabel berikut:</h3>
                            <table style="height: 650px;" border="1" width="1085" cellspacing="0" cellpadding="0">
                                    <thead>
                                    <tr>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Data</strong></p>
                                    </td>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;" colspan="4">
                                    <p><strong>Sistem Pengelolaan Data</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Secara Manual</strong></p>
                                    </td>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Dengan Komputer Tanpa Jaringan</strong></p>
                                    </td>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Dengan Komputer Jaringan Lokal (LAN)</strong></p>
                                    </td>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Dengan Komputer Jaringan Luas (WAN)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 336.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Mahasiswa</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Kartu Rencana Studi (KRS)</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Jadwal mata kuliah</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>4</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Nilai mata kuliah</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>5</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Transkrip akademik</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>6</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Lulusan</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>7</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Dosen</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>8</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Pegawai</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>9</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Keuangan</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>10</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Inventaris</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>11</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Perpustakaan</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <h1>STANDAR 7.  PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA</h1>
                            <h3>7.1   Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS</h3>
                            <h3>7.1.1   Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:</h3>
                            <table style="height: 287px;" border="1" width="1082" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 418.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Sumber Pembiayaan</strong></p>
                                    </td>
                                    <td style="width: 418.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-2</strong></p>
                                    </td>
                                    <td style="width: 418.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-1</strong></p>
                                    </td>
                                    <td style="width: 418.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: left;">
                                    <p>Pembiayaan sendiri oleh peneliti</p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: left;">
                                    <p>PT yang bersangkutan</p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: left;">
                                    <p>Depdiknas</p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: left;">
                                    <p>Institusi dalam negeri di luar Depdiknas</p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: left;">
                                    <p>Institusi luar negeri</p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan: (*) sediakan data pendukung pada saat asesmen lapangan</p>
                                    <p>&nbsp;</p>
                            <h3>7.1.2   Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?  </h3>
                            <p>Jika ada, banyaknya mahasiswa PS yang ikut serta dalam penelitian dosen adalah  ... orang, dari ... mahasiswa yang melakukan tugas akhir melalui skripsi.</p>
                            <h3>7.1.3  Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h3>
                            <table style="height: 281px;" border="1" width="1080" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Judul</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama-nama Dosen</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Dihasilkan/ Dipublikasikan pada</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Tahun</strong></p>
                                    <p><strong>Penyajian/</strong></p>
                                    <p><strong>Publikasi</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" colspan="3">
                                    <p><strong>Tingkat* </strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Lokal</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nasio-nal</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Interna-sional</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 58.4px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 163.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 172.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 201.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 135.2px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 107.2px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 58.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 163.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 172.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 201.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 135.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 58.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 163.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 172.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 201.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 135.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 58.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 163.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 172.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 201.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 135.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 753.6px; text-align: center;" colspan="5">
                                    <p>Jumlah</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>n<sub>c</sub>=</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>n<sub>b</sub>=</p>
                                    </td>
                                    <td style="width: 107.2px; text-align: center;">
                                    <p>n<sub>a</sub>=</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan: * = Tuliskan banyaknya dosen pada sel yang sesuai</p>
                            <h3>7.1.4  Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.</h3>
                            <table style="height: 182px;" border="1" width="1098" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 164px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 164px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Karya*</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 164px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 919.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 164px; text-align: center;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 919.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 164px; text-align: center;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 919.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 164px; text-align: center;">
                                    <p>Dst.</p>
                                    </td>
                                    <td style="width: 919.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* Lampirkan surat paten HaKI atau keterangan sejenis.</p>
                            <h3>7.2   Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PkM)</h3>
                            <h3>7.2.1  Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h3>
                            <table style="height: 258px;" border="1" width="1077" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 22px;">
                                    <td style="width: 460px; background-color: #c9c9c9; text-align: center; height: 22px;">
                                    <p><strong>Sumber Dana Kegiatan Pelayanan/Pengabdian kepada Masyarakat</strong></p>
                                    </td>
                                    <td style="width: 460px; background-color: #c9c9c9; text-align: center; height: 22px;">
                                    <p><strong>TS-2</strong></p>
                                    </td>
                                    <td style="width: 460px; background-color: #c9c9c9; text-align: center; height: 22px;">
                                    <p><strong>TS-1</strong></p>
                                    </td>
                                    <td style="width: 460px; background-color: #c9c9c9; text-align: center; height: 22px;">
                                    <p><strong>TS</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 460px; text-align: center; height: 35px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 460px; text-align: left; height: 35px;">
                                    <p>Pembiayaan sendiri oleh dosen</p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35.8px;">
                                    <td style="width: 460px; text-align: left; height: 35.8px;">
                                    <p>PT yang bersangkutan</p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35.8px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35.8px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35.8px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 460px; text-align: left; height: 35px;">
                                    <p>Depdiknas</p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 460px; text-align: left; height: 35px;">
                                    <p>Institusi dalam negeri di luar Depdiknas</p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 460px; text-align: left; height: 35px;">
                                    <p>Institusi luar negeri</p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan: (*) Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)</p>
                            <h3>7.2.2   Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?</h3>
                            <h3>7.3   Kegiatan Kerjasama dengan Instansi Lain </h3>
                            <h3>7.3.1  Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.</h3>
                            <table style="height: 296px;" border="1" width="1083" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 40px;">
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama Instansi</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis</strong></p>
                                    <p><strong>Kegiatan</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kurun Waktu </strong></p>
                                    <p><strong>Kerja Sama</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Manfaat yang Telah Diperoleh</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Mulai</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Berakhir</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 68.8px; text-align: center; height: 36px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 333.6px; text-align: center; height: 36px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 68.8px; text-align: center; height: 36px;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 333.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 68.8px; text-align: center; height: 36px;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 333.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 68.8px; text-align: center; height: 36px;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 333.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 37px;">
                                    <td style="width: 68.8px; text-align: center; height: 37px;">
                                    <p>dst.</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 333.6px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan&nbsp;: (*) dokumen pendukung disediakan pada saat asesmen lapangan</p>
                            <h3>7.3.2  Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.</h3>
                            <table style="height: 275px;" border="1" width="1079" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 33px;">
                                    <td style="width: 68.8px; height: 14.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 14.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama Instansi</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 14.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis</strong></p>
                                    <p><strong>Kegiatan</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kurun Waktu </strong></p>
                                    <p><strong>Kerja Sama</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 14.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Manfaat yang Telah Diperoleh</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 20.2px;">
                                    <td style="width: 68.8px; height: 20.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Mulai</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 20.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Berakhir</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 68.8px; text-align: center; height: 35px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center; height: 35px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 35px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 340px; text-align: center; height: 35px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 68.8px; text-align: center; height: 35px;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 68.8px; text-align: center; height: 35px;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 68.8px; text-align: center; height: 35px;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 68.8px; text-align: center; height: 35px;">
                                    <p>dst.</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan&nbsp;: (*) dokumen pendukung disediakan pada saat asesmen lapangan</p>
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