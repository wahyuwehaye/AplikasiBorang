<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-8">
            <h2>
                LIST LAPORAN
                <small>UNIVERSITAS TELKOM</small>
            </h2>
            </div>
            <div class="col-sm-4">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li class="active"><i class="material-icons">text_format</i> Laporan</li>
            </ol>
            </div>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT KEMAHASISWAAN</div>
                            <ul class="dashboard-stat-list">
                                <?php
                                    $CI =& get_instance();
                                    $list=1;
                                    $querymhs=$CI->db->query('SELECT COUNT(id) as cekmhs FROM dokumen WHERE pemilik like "%kemahasiswaan%"');
                                    $cekmhs=$querymhs->result_array()[0]['cekmhs'];
                                    $cekmhs=($cekmhs!=0)?($cekmhs):0;
                                    $getlistbuktimhs =$CI->db->query('select * from dokumen where pemilik like "%kemahasiswaan%"');
                                    foreach ($getlistbuktimhs->result() as $barmhs){
                                        ?>
                                <li>
                                    <b><?php echo $list ?>.</b> <?php echo $barmhs->nama ?>
                                    <span class="pull-right"><a target="_blank" href="<?php echo base_url();?>dokumen/<?php echo $barmhs->filename; ?>" type="button" data-color="cyan" class="btn bg-cyan waves-effect btn-xs" onclick="downloadbukti(<?php echo $barmhs->id; ?>)" data-toggle="tooltip" data-placement="top" title="Download Dokumen" data-whatever="<?php echo $barmhs->id; ?>"><i class="material-icons">file_download</i></a></span>
                                </li>
                                        <?php
                                    $list=$list+1;
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ADMISI</div>
                            <ul class="dashboard-stat-list">
                                <?php
                                    $CI =& get_instance();
                                    $list=1;
                                    $queryadmisi=$CI->db->query('SELECT COUNT(id) as cekadmisi FROM dokumen WHERE pemilik like "%admisi%"');
                                    $cekadmisi=$queryadmisi->result_array()[0]['cekadmisi'];
                                    $cekadmisi=($cekadmisi!=0)?($cekadmisi):0;
                                    $getlistbuktiadmisi =$CI->db->query('select * from dokumen where pemilik like "%admisi%"');
                                    foreach ($getlistbuktiadmisi->result() as $baradmisi){
                                        ?>
                                <li>
                                    <b><?php echo $list ?>.</b> <?php echo $baradmisi->nama ?>
                                    <span class="pull-right"><a target="_blank" href="<?php echo base_url();?>dokumen/<?php echo $baradmisi->filename; ?>" type="button" data-color="cyan" class="btn bg-cyan waves-effect btn-xs" onclick="downloadbukti(<?php echo $baradmisi->id; ?>)" data-toggle="tooltip" data-placement="top" title="Download Dokumen" data-whatever="<?php echo $baradmisi->id; ?>"><i class="material-icons">file_download</i></a></span>
                                </li>
                                        <?php
                                    $list=$list+1;
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
                <!-- Dir 1 -->
            <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">DIREKTORAT ...</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    Belum Ada Laporan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
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

</script>

</body>

</html>
