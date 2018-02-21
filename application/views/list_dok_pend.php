<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-6">
            <h2>
                <strong>MENGELOLA DOKUMEN PENDUKUNG BORANG 3A</strong>
                <small>Tabel Dokumen pendukung yang terkait pada butir <?php echo $pendukung[0]['butir'] ?></small>
            </h2>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li><a href="<?php echo base_url();?>borang"><i class="material-icons">settings</i> Manage Borang</a></li>
                <li class="active"><i class="material-icons">file_upload</i> Upload Dokumen Pendukung</li>
            </ol>
            </div>
        </div>
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>
                            <?php if(($_SESSION['role']=="Admin")){ ?>
                            <button type="button" class="btn bg-pink btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#uploadpendukung" data-placement="top" title="Tambah Dokumen" href="javascript:void(0)"><i class="material-icons">library_add</i></button>
                    <?php } ?>
                    <!-- <code>List Dokumen Pendukung</code> -->
                    <?php 
                    $CI =& get_instance();
                    $listpendukung =$CI->db->query('select * from dokumenpendukung where id = '.$this->uri->segment(2, 0));
                        foreach ($listpendukung->result() as $bar){
                    ?>
                    <code><?php echo $bar->dokumen?></code>
                    <?php } ?>
                </h2>
            </div>
            <div class="body table-responsive">
                <div class="col-md-6">
                    <table class="table table-hover">
                        <tbody>
                            <?php 
                            $list=1;
                            $getlistbukti =$CI->db->query('select * from data_dok_pendukung where id_pendukung = '.$this->uri->segment(2, 0).' and id %2 = 0');
                            foreach ($getlistbukti->result() as $bar){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $list ?></th>
                                <td><?php echo $bar->filename ?></td>
                                <?php
                                if ($bar->filename!=="") {
                                ?>
                                <td><a target="_blank" href="<?php echo base_url();?>pendukung/<?php echo $bar->filename ?>" data-toggle="tooltip" type="button" data-color="teal" class="btn bg-teal waves-effect btn-xs" data-placement="top" title="Download Dokumen"><i class="material-icons">file_download</i></a>&nbsp;<a id="del" onclick="dele(<?php echo $bar->id ?>)" data-toggle="tooltip" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-placement="top" title="Hapus Dokumen"><i class="material-icons">delete_forever</i></a></td>
                            <?php
                                }
                            ?>
                            </tr>
                            <?php $list=$list+1;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-hover">
                        <tbody>
                            <?php
                            $getlistbukti =$CI->db->query('select * from data_dok_pendukung where id_pendukung = '.$this->uri->segment(2, 0).' and id %2 <> 0');
                            foreach ($getlistbukti->result() as $bar){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $list ?></th>
                                <td><?php echo $bar->filename ?></td>
                                <?php
                                if ($bar->filename!=="") {
                                ?>
                                <td><a target="_blank" href="<?php echo base_url();?>pendukung/<?php echo $bar->filename ?>" data-toggle="tooltip" type="button" data-color="teal" class="btn bg-teal waves-effect btn-xs" data-placement="top" title="Download Dokumen"><i class="material-icons">file_download</i></a>&nbsp;<a id="del" onclick="dele(<?php echo $bar->id ?>)" data-toggle="tooltip" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-placement="top" title="Hapus Dokumen"><i class="material-icons">delete_forever</i></a></td>
                                <?php
                                }
                                ?>
                            </tr>
                            <?php $list=$list+1;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows -->

    </div>
</section>

<!-- UPLOAD BUKTI DOKUMEN -->
        <div class="modal fade" id="uploadpendukung" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Upload bukti yang harus disiapkan</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    $attributes = array('id' => 'myform');
                    echo form_open_multipart('C_dokumen/uploadpendukung', $attributes);
                ?>
                <input type="hidden" name="id_pendukung" value="<?php echo $this->uri->segment(2, 0); ?>">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label class="form-label">Upload Bukti</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" class="form-control" name="filename" id="filename">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- TUTUP UPLOAD BUKTI DOKUMEN -->

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
function reloadaja(){
    location.reload();
}

  function toTitleCase(str)
  {
      return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
  }

  function dele(x){
    var direct = "<?php echo $this->uri->segment(2, 0)?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_dokumen/del_pend/"+x+"/"+direct;
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
                window.location.href = delete_url;

            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
  }

</script>

</body>

</html>
