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
                    <div class="body">
                        <div class="row clearfix">
                        <div class="header">
                            <h2 class="card-inside-title">Tabel Dokumen <?php echo strtoupper($_SESSION['name']) ?></h2>
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
                        <div class="header">
                            <h2 class="card-inside-title">Tambah Dokumen <?php echo strtoupper($_SESSION['name']) ?></h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url()?>C_uploadisi/dokumen311" id="frmFileUpload" class="dropzone form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_butir311" id="id_butir311" value="" />
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama">Nama Dokumen</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nama" class="form-control" placeholder="Enter Nama Dokumen">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="pemilik">Pemilik Dokumen</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="pemilik" class="form-control" placeholder="Enter Pemilik Dokumen" value="<?php echo(strtoupper($_SESSION['name'])) ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="ket">Keterangan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" type="text" name="ket" class="form-control" placeholder="Enter Keterangan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(Selected files are <strong>automatically</strong> uploaded.)</em>
                                    <em><small class="help-block" style="color:red;"><strong>Tipe File : pdf, doc, docx, xls, rar, zip. Max File size : 500MB</strong></small></em>
                                </div>
                                <div class="fallback">
                                    <input name="filename" type="file" multiple />
                                </div>
                            </form>
                        </div>
                        <div class="body">
                            <button type="submit" onclick="reloadaja()" class="btn btn-block btn-primary waves-effect">SIMPAN</button>
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
