<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-6">
            <h2>
                PENGATURAN
                <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                <small>Mengelola Fitur Aplikasi</small>
            </h2>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li class="active"><i class="material-icons">settings</i> Kelola Fitur Aplikasi</li>
            </ol>
            </div>
        </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header js-sweetalert">
                        <!-- <button type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                            <i class="material-icons">add</i>
                        </button> -->
                        <?php
                        if($_SESSION['role']=="Admin"){
                        ?>
                        <h2>
                        Daftar Fitur Tambahan Aplikasi &nbsp;<button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="modal" data-target="#addpengaturan" data-placement="top" title="Tambah Pengaturan" href="javascript:void(0)"><i class="material-icons">add</i></button>
                        </h2>
                        <?php
                        }else{
                            echo "<h2>Daftar Fitur Tambahan Aplikasi</h2>";
                        }
                        ?>
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
                        <table id="pengaturan"
                            <?php
                                if($_SESSION['role']=="Admin"){
                                    echo 'class="table table-bordered table-striped table-hover dataTable js-exportable"';
                                }elseif (($_SESSION['role']=="Kaprodi") || ($_SESSION['role']=="Assessor")) {
                                    echo 'class="table table-bordered table-striped table-hover js-basic-example dataTable"';
                                }
                            ?>
                        >
                            <thead>
                                <tr>
                                    <th width="6%">No</th>
                                    <th>Nama Fitur Aplikasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="6%">No</th>
                                    <th>Nama Fitur Aplikasi</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    foreach ($pengaturan as $key) {
                                 ?>
                                <tr>
                                    <td><?php echo $key->id ?> </td>
                                    <td><?php echo strtoupper($key->nama_fitur) ?> </td>
                                    <td>
                                        <div class="js-sweetalert">
                                            <a type="button" data-color="purple" class="btn bg-purple waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat Prodi" href="<?php echo base_url();?>fitur/<?php echo $key->id; ?>" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">view_list</i></a>&nbsp;
                                            <?php
                                            if($_SESSION['role']=="Admin"){
                                            ?>
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#updatepengaturan" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">edit</i></a>&nbsp;
                                            <a id="del" onclick="dele(<?php echo $key->id;?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_pengaturan/destroy/'.$key->id); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">delete_forever</i></a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
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

        <div class="modal fade" id="addpengaturan" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Tambah pengaturan</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    $attributes = array('id' => 'myform');
                    echo form_open('C_pengaturan/store', $attributes);
                ?>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nama_fitur" required>
                                    <label class="form-label">Nama pengaturan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="updatepengaturan" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Update pengaturan</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    $attributes = array('id' => 'myform');
                    echo form_open('C_pengaturan/update', $attributes);
                ?>
                    <div class="row clearfix">
                        <input type="hidden" name="idpengaturan" id="idpengaturan" value="">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nama_fitur" id="nama_fitur">
                                    <label class="form-label">Nama pengaturan</label>
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

        <div class="modal fade" id="hapuspengaturan" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Hapus pengaturan?</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Anda yakin ingin menghapus data ini?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect" id="del">HAPUS</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>

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

<!-- Custom Js -->
<script src="<?php echo base_url();?>assets/js/admin.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/tables/jquery-datatable.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/ui/tooltips-popovers.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/ui/modals.js"></script>

<!-- Demo Js -->
<script src="<?php echo base_url();?>assets/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/ui/dialogs.js"></script>
<!-- //session untuk menampilkan pesan Sukses Input Data -->
<?php
    if (isset($_SESSION['sukseshapus'])) {
?>
    <body onload='swal({title: "Selamat!!!",
                        text: "Data Berhasil Terhapus",
                        // timer: 3000,
                        type: "success",
                        showConfirmButton: true });'>
<?php
    unset($_SESSION['sukseshapus']);
    }
?>

<!-- gagal input dengan isian yang salah -->
<?php
    if (isset($_SESSION['gagalinputrbt'])) {
?>
    <body onload='swal({title: "Gagal Input!!!",
                        text: "Data Gagal Tersimpan",
                        // timer: 3000,
                        type: "success",
                        showConfirmButton: true });'>
<?php
    unset($_SESSION['gagalinputrbt']);
    }
?>

<!-- gagal hapus pengaturan -->
<?php
    if (isset($_SESSION['gagalhapuspengaturan'])) {
?>
    <body onload='swal({title: "Gagal Terhapus!!!",
                        text: "Hapus terlebih dahulu data borang",
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

    $('#addpengaturan').on('shown.bs.modal', function () {
    });

    $('#updatepengaturan').on('shown.bs.modal', function (event) {
        //ajax call to get pengaturan list from database
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever');
        var link="<?php echo base_url(); ?>index.php/C_pengaturan/find";
        $.ajax({
            method: "POST",
            url: link,
            cache: false,
            data: { id: recipient }
          })
          .done(function( msg ) {
              var buku = JSON.parse(msg);
              $('#idpengaturan').val(buku[0]['id']);
              $('#nama_fitur').val(buku[0]['nama_fitur']);
          });

    });

    $('#hapuspengaturan').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever');
        var link="<?php echo base_url(); ?>index.php/C_pengaturan/destroy";
        $('#del').click(function() {
          $.ajax({
            method: "POST",
            url: link,
            data: { id: recipient }
          })
          .done(function( msg ) {
              alert( "Data Saved: " + msg );
            // swal("Good job!", "You clicked the button!", "success");
              $('#hapuspengaturan').modal('hide');
              location.reload();
            });
        });

    });
  });

  function dele(x){
    var delete_url = "<?php echo base_url(); ?>index.php/C_pengaturan/destroy/"+x;
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
