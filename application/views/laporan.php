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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header js-sweetalert">
                    <h2>
                        LIST LAPORAN
                    </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                        <div class="header">
                            <h2 class="card-inside-title">Tabel Dokumen Setiap Unit</h2>
                        </div>
                        <div class="body">
                        <table id="borang" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Nama Dokumen</th>
                                    <th>Pemilik Dokumen</th>
                                    <th>Softcopy</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Upload</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama Dokumen</th>
                                    <th>Pemilik Dokumen</th>
                                    <th>Softcopy</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Upload</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                
                            </tbody>
                        </table>
                        </div>
                        </div>
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

</script>

</body>

</html>
