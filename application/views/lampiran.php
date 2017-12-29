<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-5">
            <h2>
                MENGELOLA BUTIR <?php echo strtoupper(($buku[0]['jenis']));?>
                <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                <!-- <small><?php echo ucfirst($buku[0]['jenis'])." ".$buku[0]['fakpro']." - ".$buku[0]['tahun']." - Buku : ".$buku[0]['buku']; ?></small> -->
                <small><?php echo strtoupper($buku[0]['fakpro']." - ".$buku[0]['tahun']." - ".$getdata[0]['namafakultas']); ?></small>
            </h2>
            </div>
            <div class="col-sm-7">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li><a href="<?php echo base_url();?>fakultas"> Kelola Fakultas</a></li>
                <li><a href="<?php echo base_url();?>prodi/<?php echo $getdata[0]['idfakultas']; ?>"> Kelola Borang</a></li>
                <li><a href="<?php echo base_url();?>borang/<?php echo $getdata[0]['idprodi']; ?>"> Kelola Jenis Borang</a></li>
                <li class="active"><i class="material-icons">description</i> Kelola Lampiran Borang</li>
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
                            $lampirand3 = stripos(($getdata[0]['namaprodi']), 'D3');
                            $lampirand4 = stripos(($getdata[0]['namaprodi']), 'D4');
                            $lampirans1 = stripos(($getdata[0]['namaprodi']), 'S1');
                            $lampirans2 = stripos(($getdata[0]['namaprodi']), 'S2');
                            $lampiranfak = stripos(($getdata[0]['namaprodi']), 'Fakultas');
                        ?>
                        <h2>
                        Tabel Lampiran <?php echo (ucwords($getdata[0]['namaprodi'])); ?> &nbsp;
                        <?php
                        if (count($lampiran)>0) {
                                ?>
                        <!-- <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="modal" data-target="#addButir" data-placement="top" title="Tambah Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>&nbsp;
                        <button type="button" data-color="light-blue" class="btn bg-red waves-effect btn-xs" onclick="deletealllampiran(<?php echo $this->uri->segment(2, 0); ?>)" data-toggle="tooltip" data-placement="top" title="Hapus Semua Butir Borang" href="javascript:void(0)"><i class="material-icons">delete</i></button> -->
                                <?php
                        }else{
                            if(($lampirand3 !== false) && ($lampiranfak !== false)){
                                ?>
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" onclick="buatlampiran3BD3(<?php echo $this->uri->segment(2, 0); ?>)" data-toggle="tooltip" data-placement="top" title="Buat Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>
                                <?php
                            } elseif (($lampirand3!==false) || ($lampirand4!==false)) {
                                ?>
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" onclick="buatlampiran3AD3(<?php echo $this->uri->segment(2, 0); ?>)" data-toggle="tooltip" data-placement="top" title="Buat Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>
                                <?php
                            }elseif (($lampirans1!==false) && ($lampiranfak!==false)) {
                                 ?>
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" onclick="buatlampiran3BS1(<?php echo $this->uri->segment(2, 0); ?>)" data-toggle="tooltip" data-placement="top" title="Buat Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>
                                <?php
                            }elseif ($lampirans1!==false) {
                                 ?>
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" onclick="buatlampiran3AS1(<?php echo $this->uri->segment(2, 0); ?>)" data-toggle="tooltip" data-placement="top" title="Buat Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>
                                <?php
                            }elseif ($lampirans2!==false) {
                                 ?>
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="modal" data-target="#addButir" data-placement="top" title="Tambah Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>
                                <?php
                            }
                        }
                        ?>
                        </h2>
                        <?php
                        }else{
                        ?>
                        <h2>Tabel Butir <?php echo (ucwords($getdata[0]['namaprodi'])); ?></h2>
                        <?php
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
                        <table id="borang" 
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
                                    <th width="3%">No</th>
                                    <th width="5%">Butir</th>
                                    <th width="30%">Keterangan</th>
                                    <th width="30%">Nama Dokumen</th>
                                    <th width="30%">Nama File</th>
                                    <th width="10%">Status</th>
                                    <th width="10%">Tanggal Upload</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="3%">No</th>
                                    <th width="5%">Butir</th>
                                    <th width="30%">Keterangan</th>
                                    <th width="30%">Nama Dokumen</th>
                                    <th width="30%">Nama File</th>
                                    <th width="10%">Status</th>
                                    <th width="10%">Tanggal Upload</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    // foreach ($lampiran as $key) {
                                    $list=1;
                                    for($i=0;$i<count($lampiran);$i++){
                                        if (($lampiran[$i]['filename'])=="") {
                                            $filename = "Belum di Upload";
                                            $status = "Belum";
                                            $tanggal = "Tidak Diketahui";
                                            $warnanya = "danger";
                                        }else{
                                            $filename = $lampiran[$i]['filename'];
                                            $status = $lampiran[$i]['status'];
                                            $tanggal = $lampiran[$i]['created_at'];
                                            $warnanya = "success";
                                        }
                                 ?>
                                <tr>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $list ?> </td>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $lampiran[$i]['butir'] ?> </td>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $lampiran[$i]['keterangan'] ?> </td>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $lampiran[$i]['dokumen'] ?> </td>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $filename ?> </td>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $status ?> </td>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $tanggal ?> </td>
                                    <td class='<?php echo($warnanya) ?>'>
                                        <div class="js-sweetalert">
                                    <?php
                                        if (($lampiran[$i]['filename'])=="") {
                                    ?>
                                        <a type="button" data-color="brown" class="btn bg-brown waves-effect btn-xs" data-toggle="modal" data-target="#uploadlampiran" data-placement="top" title="Upload Dokumen" data-whatever="<?php echo $lampiran[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp;
                                    <?php
                                        }else{
                                    ?>
                                        <a target="_blank" href="<?php echo base_url();?>lampiran/<?php echo $lampiran[$i]['filename']; ?>" type="button" data-color="teal" class="btn bg-teal waves-effect btn-xs" onclick="downloadlampiran(<?php echo $lampiran[$i]['id']; ?>)" data-toggle="tooltip" data-placement="top" title="Download Dokumen" data-whatever="<?php echo $lampiran[$i]['id']; ?>"><i class="material-icons">file_download</i></a>&nbsp;
                                        <a id="del" onclick="deletelampiran(<?php echo $lampiran[$i]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_dokumen/deletelampiran/'.$lampiran[$i]['id']); ?>" data-placement="top" title="Delete Dokumen" href="javascript:void(0)" data-whatever="<?php echo $lampiran[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a>
                                    <?php
                                        }
                                    ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    $list=$list+1; } ?>
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

        <!-- UPLOAD lampiran DOKUMEN -->
        <div class="modal fade" id="uploadlampiran" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Upload Lampiran Borang</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    //   $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                    //   echo form_open('c_borang/update', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open_multipart('C_dokumen/updatelampiran', $attributes);
                ?>
                    <div class="row clearfix">
                        <input type="hidden" name="idlampiran" id="idlampiran" value="">
                        <input type="hidden" name="direct" id="direct"value="<?php echo $this->uri->segment(2, 0);?>">
                        <div class="col-sm-12">
                            <label for="lampiranbutir">Butir</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" readonly class="form-control" id="lampiranbutir" name="lampiranbutir">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label">Keterangan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea class="form-control" readonly name="keterangan" id="keterangan" rows="3"></textarea>
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
                            <label class="form-label">Upload lampiran</label>
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
        <!-- TUTUP UPLOAD lampiran DOKUMEN -->

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

<script>
  function toTitleCase(str)
  {
      return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
  }
  $(function () {
    $('#uploadlampiran').on('shown.bs.modal', function (event) {
        //ajax call to get isian Borang Informatin from database
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever');
        var link="<?php echo base_url(); ?>index.php/C_dokumen/findlampiran";
        $.ajax({
            method: "POST",
            url: link,
            cache: false,
            data: { id: recipient }
          })
          .done(function( msg ) {
              var buku = JSON.parse(msg);
              $('#idlampiran').val(buku[0]['id']);
              $('#lampiranbutir').val(buku[0]['butir']);
              $('#keterangan').val(buku[0]['keterangan']);
              $('#dokumen').val(buku[0]['dokumen']);
          });

    });
  });

  function uploadlampiran(x) {
    var borang = "<?php echo $this->uri->segment(2, 0)?>";
    var upload_url = "<?php echo base_url(); ?>index.php/C_uploadisi/uploadlampiran/"+x+"/"+borang;
    swal({
        title: "lampiran yang harus disiapkan!",
        text: "lampiran yang harus disiapkan dengan id = "+x,
        imageUrl: "<?php echo base_url(); ?>assets/images/thumbs-up.png"
    });
}

    function deletelampiran(x){
    var borang = "<?php echo $this->uri->segment(2, 0)?>";
    var delete_url = "<?php echo base_url(); ?>C_dokumen/deletelampiran/"+x+"/"+borang;
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

  function downloadlampiran(x){
    var borang = "<?php echo $this->uri->segment(2, 0)?>";
    var delete_url = "<?php echo base_url(); ?>C_dokumen/downloadlampiran/"+x+"/"+borang;
    
  }

  function dele(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/destroy/"+x+"/"+borang;
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

  function buatlampiran3BS1(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/buatlampiran3BS1/"+x+"/"+borang;
        swal({
            title: "Membuat List Lampiran Secara Otomatis?",
            text: "List Lampiran Akan Terbuat Secara Otomatis dari Standar 1 - 7",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, create it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Sukses!", "Butir Borang Sudah Terbuat", "success");
                window.location.href = delete_url;

            } else {
                swal("Cancelled!", "Butir Borang Tidak Terbuat :)", "error");
            }
        });
  }

  function buatlampiran3AS1(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/buatlampiran3AS1/"+x+"/"+borang;
        swal({
            title: "Membuat List Lampiran Secara Otomatis?",
            text: "List Lampiran Akan Terbuat Secara Otomatis dari Standar 1 - 7",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, create it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Sukses!", "Butir Borang Sudah Terbuat", "success");
                window.location.href = delete_url;

            } else {
                swal("Cancelled!", "Butir Borang Tidak Terbuat :)", "error");
            }
        });
  }
  function buatlampiran3BD3(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/buatlampiran3BD3/"+x+"/"+borang;
        swal({
            title: "Membuat List Lampiran Secara Otomatis?",
            text: "List Lampiran Akan Terbuat Secara Otomatis dari Standar 1 - 7",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, create it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Sukses!", "Butir Borang Sudah Terbuat", "success");
                window.location.href = delete_url;

            } else {
                swal("Cancelled!", "Butir Borang Tidak Terbuat :)", "error");
            }
        });
  }
  function buatlampiran3AD3(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/buatlampiran3AD3/"+x+"/"+borang;
        swal({
            title: "Membuat List Lampiran Secara Otomatis?",
            text: "List Lampiran Akan Terbuat Secara Otomatis dari Standar 1 - 7",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, create it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Sukses!", "Butir Borang Sudah Terbuat", "success");
                window.location.href = delete_url;

            } else {
                swal("Cancelled!", "Butir Borang Tidak Terbuat :)", "error");
            }
        });
  }

  function deletealllampiran(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/destroyalllampiran/"+x+"/"+borang;
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

  function sudahterisi() {
    swal({
        title: "Hebat!",
        text: "Isian pada butir ini sudah terisi.",
        imageUrl: "<?php echo base_url(); ?>assets/images/thumbs-up.png"
    });
}

function sudahdinilai() {
    swal({
        title: "Hebat!",
        text: "",
        imageUrl: "<?php echo base_url(); ?>assets/images/thumbs-up.png"
    });
}
</script>

</body>

</html>
