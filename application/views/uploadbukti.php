<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-4">
            <h2>
                MENGELOLA DOKUMEN <?php echo strtoupper(($buku[0]['jenis']));?>
                <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                <!-- <small><?php echo ucfirst($buku[0]['jenis'])." ".$buku[0]['fakpro']." - ".$buku[0]['tahun']." - Buku : ".$buku[0]['buku']; ?></small> -->
                <small><?php echo strtoupper($buku[0]['fakpro']." ".$getdata[0]['namafakultas']); ?></small>
            </h2>
            </div>
            <div class="col-sm-8">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li><a href="<?php echo base_url();?>fakultas"> Kelola Fakultas</a></li>
                <li><a href="<?php echo base_url();?>prodi/<?php echo $getdata[0]['idfakultas']; ?>"> Kelola Borang</a></li>
                <li><a href="<?php echo base_url();?>borang/<?php echo $getdata[0]['idprodi']; ?>"> Kelola Jenis Borang</a></li>
                <li><a href="<?php echo base_url();?>butir/<?php echo $getdata[0]['idborang']; ?>"> Kelola Butir Borang</a></li>
                <li class="active"><i class="material-icons">file_download</i> Dokumen Borang</li>
            </ol>
            </div>
        </div>

        <!-- Exportable Table Dokumen Pendukung -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header js-sweetalert">
                    <h2>
                        Tabel Dokumen pendukung yang terkait pada butir <?php echo $butir[0]['butir'] ?>
                    </h2>
                        <!-- <button type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                            <i class="material-icons">add</i>
                        </button> -->
                        <!-- <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="modal" data-target="#addButir" data-placement="top" title="Tambah Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button> -->
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
                        <table id="borang" <?php
                                if($_SESSION['role']=="Admin"){
                                    echo 'class="table table-bordered table-striped table-hover dataTable js-exportable"';
                                }elseif (($_SESSION['role']=="Kaprodi") || ($_SESSION['role']=="Assessor")) {
                                    echo 'class="table table-bordered table-striped table-hover js-basic-example dataTable"';
                                }
                            ?>
                        >
                            <thead>
                                <tr>
                                    <th width="3%">No</th>
                                    <th width="40%">Bukti yang harus disiapkan</th>
                                    <th width="30%">Nama File</th>
                                    <th width="10%">Status</th>
                                    <th width="10%">Tanggal Upload</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="3%">No</th>
                                    <th width="25%">Bukti yang harus disiapkan</th>
                                    <th width="20%">Nama File</th>
                                    <th width="10%">Status</th>
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
                                    $getlistbukti =$CI->db->query('select * from dokumenpendukung where id_borang="'.$getdata[0]['idborang'].'" and butir="'.$butir[0]['butir'].'" and not dokumen="" order by id ASC');
                                    foreach ($getlistbukti->result() as $bar){
                                        if (($bar->filename)=="") {
                                            $filename = "Belum di Upload";
                                            $status = "Belum";
                                            $tanggal = "Tidak Diketahui";
                                            $warnanya = "danger";
                                        }else{
                                            $filename = $bar->filename;
                                            $status = $bar->status;
                                            $tanggal = $bar->created_at;
                                            $warnanya = "success";
                                        }
                                        ?>
                                <tr>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $list ?> </td>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $bar->dokumen ?> </td>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $filename ?> </td>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $status ?> </td>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $tanggal ?> </td>
                                    <td class='<?php echo($warnanya) ?>'>
                                        <div class="js-sweetalert">
                                    <?php
                                        if (($bar->filename)=="") {
                                    ?>
                                        <a type="button" data-color="brown" class="btn bg-brown waves-effect btn-xs" data-toggle="modal" data-target="#uploadbukti" data-placement="top" title="Upload Dokumen" data-whatever="<?php echo $bar->id; ?>"><i class="material-icons">file_upload</i></a>&nbsp;
                                    <?php
                                        }else{
                                    ?>
                                        <a target="_blank" href="<?php echo base_url();?>bukti/<?php echo $bar->filename; ?>" type="button" data-color="teal" class="btn bg-teal waves-effect btn-xs" onclick="downloadbukti(<?php echo $bar->id; ?>)" data-toggle="tooltip" data-placement="top" title="Download Dokumen" data-whatever="<?php echo $bar->id; ?>"><i class="material-icons">file_download</i></a>&nbsp;
                                        <a id="del" onclick="deletebukti(<?php echo $bar->id; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_dokumen/deletebukti/'.$bar->id); ?>" data-placement="top" title="Delete Dokumen" href="javascript:void(0)" data-whatever="<?php echo $bar->id; ?>"><i class="material-icons">delete_forever</i></a>
                                    <?php
                                        }
                                    ?>
                                        
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
        <div class="modal fade" id="uploadbukti" tabindex="-1" role="dialog">
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
                    echo form_open_multipart('C_dokumen/updatebukti', $attributes);
                ?>
                    <div class="row clearfix">
                        <input type="hidden" name="idbukti" id="idbukti" value="">
                        <input type="hidden" name="direct" id="direct"value="<?php echo $this->uri->segment(2, 0);?>">
                        <div class="col-sm-12">
                            <label for="buktibutir">Butir</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" readonly class="form-control" id="buktibutir" name="buktibutir">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label">Aspek Penilaian</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea class="form-control" readonly name="aspek" id="aspek" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label">Nama file yang harus disiapkan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea class="form-control" readonly name="dokumen" id="dokumen" rows="2"></textarea>
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
