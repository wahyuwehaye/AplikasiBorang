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
                <li><a href="<?php echo base_url();?>index.php/borang"><i class="material-icons">settings</i> Manage Borang</a></li>
                <li><a href="<?php echo base_url();?>index.php/butir/<?php echo $buku[0]['id']; ?>"><i class="material-icons">description</i> Butir Borang</a></li>
                <li><a href="<?php echo base_url();?>index.php/isian/<?php echo $butir[0]['id']; ?>"><i class="material-icons">description</i> Isian Butir</a></li>
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
                                    <h1 style="text-align: center;"><strong>STANDAR 1.</strong></h1>
                                    <h1 style="text-align: center;"><strong>VISI, MISI, TUJUAN DAN SASARAN, SERTA STRATEGI PENCAPAIAN</strong></h1>
                                    <h3 style="text-align: left;"><strong>1.1 &nbsp;Jelaskan dasar penyusunan dan mekanisme penyusunan visi, misi, tujuan dan sasaran institusi perguruan tinggi, serta pihakpihak yang dilibatkan dalam penyusunannya.&nbsp;</strong></h3>
                                    <h3><strong>Paparan Penyusunan Visi, Misi, Tujuan dan Sasaran</strong></h3>
                                    <p><?php echo $dataisian1[$i]['kolom1'] ?></p>
                                    <!-- <h3>Visi</h3> -->
                                    <p><?php echo $dataisian1[$i]['kolom2'] ?></p>
                                    <!-- <h3>Misi</h3> -->
                                    <p><?php echo $dataisian1[$i]['kolom3'] ?></p>
                                    <!-- <h3>Tujuan</h3> -->
                                    <p><?php echo $dataisian1[$i]['kolom4'] ?></p>
                                <?php }
                            // }elseif ($jum==2) {
                                for($i=0;$i<count($dataisian2);$i++){
                                ?>
                                    <h3>1.2&nbsp;Pernyataan tonggak-tonggak capaian (milestones) tujuan yang dinyatakan dalam sasaran-sasaran yang merupakan target terukur, dan penjelasan mengenai strategi serta tahapan pencapaiannya.&nbsp;</h3>
                                    <p><?php echo $dataisian2[$i]['kolom1'] ?></p>
                                <?php }
                            // }elseif ($jum==3) {
                                for($i=0;$i<count($dataisian3);$i++){
                                ?>
                                    <h3>1.3&nbsp;Sosialisasi visi, misi, tujuan, sasaran dan strategi pencapaian dan penggunaannya sebagai acuan dalam penyusunan rencana kerja institusi perguruan tinggi.&nbsp;</h3>
                                    <h3>1.3.1&nbsp;Uraikan sosialisasi visi, misi, tujuan, dan sasaran perguruan tinggi agar dipahami seluruh pemangku kepentingan (sivitas akademika, tenaga kependidikan, pengguna lulusan, dan masyarakat).</h3>
                                    <p><?php echo $dataisian3[$i]['kolom1'] ?></p>
                                <?php }
                                for($i=0;$i<count($dataisian4);$i++){
                                 ?>
                                    <h1 style="text-align: center;">STANDAR 2.</h1>
                                    <h1 style="text-align: center;">TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN PENJAMINAN MUTU</h1>
                                    <p><strong>2.1 Tata Pamong di Universitas Telkom</strong></p>
                                    <p><strong>2.1.1 Uraikan secara ringkas sistem tatapamong (sebutkan lembaga yang berperan, perangkat pendukung, kebijakan dan peraturan/ketentuan termasuk kode etik yang dijadikan pedoman dalam penyelenggaraan perguruan tinggi, serta prosedur penetapannya) &nbsp;di institusi perguruan tinggi dalam &nbsp;membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab, dan adil, serta pelaksanaannya.&nbsp;</strong></p>
                                    <p>&nbsp;</p>
                                    <p><?php echo $dataisian4[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian5);$i++){
                                 ?>
                                    <h3>2.2 Kepemimpinan</h3>
                                    <h3>Jelaskan pola dan kinerja kepemimpinan di Institusi perguruan tinggi, mencakup informasi tentang kepemimpinan operasional, organisasi, dan publik.&nbsp;</h3>
                                    <p><?php echo $dataisian5[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian6);$i++){
                                 ?>
                                    <h3>2.3 Sistem Pengelolaan&nbsp;</h3>
                                    <p>Sistem pengelolaan fungsional dan operasional institusi perguruan tinggi mencakup fungsi pengelolaan (planning, organizing, staffing, leading, dan controlling) dalam penyelenggaraan program dan kegiatan perguruan tinggi.&nbsp;</p>
                                    <h3>2.3.1 Jelaskan sistem pengelolaan institusi perguruan tinggi serta dokumen pendukungnya (Jelaskan unit/bagian/lembaga yang berperan dalam setiap fungsi pengelolaan serta proses pengambilan keputusan).&nbsp;</h3>
                                    <p><?php echo $dataisian6[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian7);$i++){
                                 ?>
                                    <h3>2.4 Sistem Penjaminan Mutu</h3>
                                    <p>Sistem penjaminan mutu meliputi kebijakan mutu, perangkat penjaminan mutu (organisasi, pernyataan mutu, manual mutu, standar mutu), pelaksanaan penjaminan mutu, serta monitoring dan evaluasi.&nbsp;</p>
                                    <h3>2.4.1 Jelaskan &nbsp;keberadaan manual mutu yang mencakup informasi tentang kebijakan, pernyataan, unit pelaksana, standar, prosedur, SOP, dan pentahapan sasaran mutu perguruan tinggi.&nbsp;</h3>
                                    <p><?php echo $dataisian7[$i]['kolom1'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian8);$i++){
                                 ?>
                                    <h3>2.5 Umpan Balik</h3>
                                    <h3>Umpan Balik dari <?php echo $dataisian8[$i]['kolom1'] ?></h3>
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
                                    <p><?php echo $dataisian8[$i]['kolom12'] ?></p>
                                 <?php
                                 }
                                 for($i=0;$i<count($dataisian9);$i++){
                                 ?>
                                    <h3>2.6 Keberlanjutan</h3>
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
        height: 300,
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