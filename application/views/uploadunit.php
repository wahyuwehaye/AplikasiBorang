<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-4">
            <h2>
                MENGELOLA DOKUMEN <?php echo strtoupper($_SESSION['name']);?>
                <small>UNIVERSITAS TELKOM</small>
            </h2>
            </div>
            <div class="col-sm-8">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li class="active"><i class="material-icons">file_download</i> Dokumen</li>
            </ol>
            </div>
        </div>

        <!-- Exportable Table Dokumen Pendukung -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header js-sweetalert">
                    <h2>
                        Tabel Dokumen <?php echo strtoupper($_SESSION['name']);?>
                    </h2>
                        <!-- <button type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                            <i class="material-icons">add</i>
                        </button> -->
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="modal" data-target="#uploadunit" data-placement="top" title="Tambah Dokumen" href="javascript:void(0)"><i class="material-icons">add</i></button>
                    </div>
                    <div class="body">
                        <table id="borang" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th width="3%">No</th>
                                    <th width="40%">Nama Dokumen</th>
                                    <th width="30%">Nama File</th>
                                    <th width="30%">Keterangan</th>
                                    <th width="30%">Pemilik</th>
                                    <th width="10%">Tanggal Upload</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="3%">No</th>
                                    <th width="25%">Nama Dokumen</th>
                                    <th width="20%">Nama File</th>
                                    <th width="20%">Keterangan</th>
                                    <th width="20%">Pemilik</th>
                                    <th width="10%">Tanggal Upload</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <!-- <?php
                                    for($i=0;$i<count($datadokumen);$i++){
                                 ?>
                                <tr>
                                    <td><?php echo $datadokumen[$i]['dokumen'] ?> </td>
                                    <td><?php echo $datadokumen[$i]['filename'] ?> </td>
                                    <td><?php echo $datadokumen[$i]['status'] ?> </td>
                                    <td><?php echo $datadokumen[$i]['created_at'] ?> </td>
                                    <td>
                                        <div class="js-sweetalert"> -->
                                            <!-- <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>index.php/datadokumen/<?php echo $datadokumen[$i]['id']; ?>" data-whatever="<?php echo $datadokumen[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp; -->
                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Upload" href="<?php echo base_url();?>index.php/isian/<?php echo $datadokumen[$i]['id']; ?>" data-whatever="<?php echo $datadokumen[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp; -->
                                            <!-- <a type="button" onclick="uploadbukti(<?php echo $butir[$i]['butir'] ?>)" data-color="brown" class="btn bg-brown waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Upload Dokumen" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp;
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#dokumen11a" data-placement="top" title="Lihat" href="javascript:void(0)" data-whatever="<?php echo $datadokumen[$i]['id']; ?>"><i class="material-icons">pageview</i></a>&nbsp;
                                            <a id="del" onclick="deledok(<?php echo $datadokumen[$i]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroy/'.$datadokumen[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $datadokumen[$i]['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?> -->
                                <?php
                                    $CI =& get_instance();
                                    $list=1;
                                    $getlistbukti =$CI->db->query('select * from dokumen');
                                    foreach ($getlistbukti->result() as $bar){
                                        ?>
                                <tr>
                                    <td><?php echo $list ?> </td>
                                    <td><?php echo $bar->nama ?> </td>
                                    <td><?php echo $bar->filename ?> </td>
                                    <td><?php echo $bar->ket ?> </td>
                                    <td><?php echo $bar->pemilik ?> </td>
                                    <td><?php echo $bar->created_at ?> </td>
                                    <td>
                                        <a target="_blank" href="<?php echo base_url();?>dokumen/<?php echo $bar->filename; ?>" type="button" data-color="teal" class="btn bg-teal waves-effect btn-xs" onclick="downloadbukti(<?php echo $bar->id; ?>)" data-toggle="tooltip" data-placement="top" title="Download Dokumen" data-whatever="<?php echo $bar->id; ?>"><i class="material-icons">file_download</i></a>&nbsp;
                                        <!-- <a id="del" onclick="deletebukti(<?php echo $bar->id; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_dokumen/deletebukti/'.$bar->id); ?>" data-placement="top" title="Delete Dokumen" href="javascript:void(0)" data-whatever="<?php echo $bar->id; ?>"><i class="material-icons">delete_forever</i></a> -->
                                        
                                        <!-- <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#dokumen11a" data-placement="top" title="Lihat" href="javascript:void(0)" data-whatever="<?php echo $bar->id; ?>"><i class="material-icons">pageview</i></a>&nbsp; -->
                                        <!-- <a id="del" onclick="deledok(<?php echo $bar->id ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroy/'.$bar->id); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $bar->id; ?>"><i class="glyphicon glyphicon-trash"></i></a> -->
                                        </div>
                                    </td>
                                </tr>
                                        <?php
                                    $list=$list+1;
                                    }
                                ?>
                            </tbody>
                        </table>
                        </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table Dokumen Pendukung-->

        <!-- MODALS For Material Design Colors -->
        <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                        vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                        Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                        nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                        Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- UPLOAD BUKTI DOKUMEN -->
        <div class="modal fade" id="uploadunit" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Upload bukti yang harus disiapkan</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    //   $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                    //   echo form_open('c_borang/update', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open_multipart('C_dokumen/uploadunit', $attributes);
                ?>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="buktibutir">Nama Dokumen</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label">Keterangan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea class="form-control" name="ket" id="ket" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label">Upload Bukti</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" class="form-control" name="filename" id="filename">
                                    <!-- <input type="text" class="form-control" id="filename" name="filename"> -->
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
  $(function () {

    $('#uploadbukti').on('shown.bs.modal', function (event) {
        //ajax call to get isian Borang Informatin from database
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever');
        var link="<?php echo base_url(); ?>index.php/C_dokumen/findbukti";
        $.ajax({
            method: "POST",
            url: link,
            cache: false,
            data: { id: recipient }
          })
          .done(function( msg ) {
              var buku = JSON.parse(msg);
              $('#idbukti').val(buku[0]['id']);
              $('#buktibutir').val(buku[0]['butir']);
              $('#aspek').val(buku[0]['aspek']);
              $('#dokumen').val(buku[0]['dokumen']);
          });

    });



  });

function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}

    function reloadaja(){
        location.reload();
    }

  function uploadbukti(x) {
    var borang = "<?php echo $this->uri->segment(2, 0)?>";
    var upload_url = "<?php echo base_url(); ?>index.php/C_uploadisi/uploadbukti/"+x+"/"+borang;
    swal({
        title: "Bukti yang harus disiapkan!",
        text: "Bukti yang harus disiapkan dengan id = "+x,
        imageUrl: "<?php echo base_url(); ?>assets/images/thumbs-up.png"
    });
}

    function deletebukti(x){
    var borang = "<?php echo $this->uri->segment(2, 0)?>";
    var delete_url = "<?php echo base_url(); ?>C_dokumen/deletebukti/"+x+"/"+borang;
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

  function downloadbukti(x){
    var borang = "<?php echo $this->uri->segment(2, 0)?>";
    var delete_url = "<?php echo base_url(); ?>C_dokumen/downloadbukti/"+x+"/"+borang;
    
  }
</script>

</body>

</html>
