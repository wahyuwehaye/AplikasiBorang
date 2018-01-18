<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-6">
            <h2>
                MENGELOLA JENIS <?php echo strtoupper($prodi[0]['nama']);?>
                <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                <small><?php echo strtoupper($fakultas[0]['nama']); ?> UNIVERSITAS TELKOM</small>
            </h2>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li><a href="<?php echo base_url();?>fakultas"> Kelola Fakultas</a></li>
                <li><a href="<?php echo base_url();?>prodi/<?php echo $prodi[0]['id_fakultas']; ?>"> Kelola Borang</a></li>
                <li class="active"><i class="material-icons">settings</i> Kelola Jenis Borang</li>
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
                        Tabel Jenis <?php echo (ucwords($prodi[0]['nama'])); ?> &nbsp;
                        <?php
                        if (count($borang)>0) {
                        ?>
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="modal" data-target="#addBorang" data-placement="top" title="Tambah Jenis Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>
                        <?php
                        }else{
                        ?>
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" onclick="buatjenisborang(<?php echo $this->uri->segment(2, 0); ?>)" data-toggle="tooltip" data-placement="top" title="Buat Jenis Borang Otomatis" href="javascript:void(0)"><i class="material-icons">add</i></button>
                        <?php
                        }
                        ?>
                        </h2>
                        <?php
                        }else{
                        ?>
                        <h2>Tabel Jenis <?php echo (ucwords($prodi[0]['nama'])); ?></h2>
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
                                    <th>Jenis Borang</th>
                                    <th>Fakultas / Program Studi</th>
                                    <th>Tahun</th>
                                    <th>Buku</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Jenis Borang</th>
                                    <th>Fakultas / Program Studi</th>
                                    <th>Tahun</th>
                                    <th>Buku</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    foreach ($borang as $key) {
                                 ?>
                                <tr>
                                    <td><?php echo ucfirst($key->jenis) ?> </td>
                                    <td><?php echo $key->fakpro ?> </td>
                                    <td><?php echo $key->tahun ?> </td>
                                    <td><?php echo $key->buku ?> </td>
                                    <td>
                                        <div class="js-sweetalert">
                                            <!-- <a type="button" data-color="purple" class="btn bg-teal waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Input dari Excel" href="<?php echo base_url();?>uploadexcel/<?php echo $key->id; ?>" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">input</i></a>&nbsp; -->
                                            <?php
                                            $borangg = stripos(($key->jenis), 'Borang');
                                            $evdir = stripos(($key->jenis), 'Evaluasi Diri');
                                            $excel = stripos(($key->jenis), 'Excel');
                                            $lampiran = stripos(($key->jenis), 'Lampiran');
                                            if ($borangg !== false) {
                                            ?>
                                            <a type="button" data-color="purple" class="btn bg-purple waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Detail Borang" href="<?php echo base_url();?>butir/<?php echo $key->id; ?>" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">description</i></a>&nbsp;
                                            <a type="button" data-color="cyan" class="btn bg-cyan waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Detail Buku Borang" href="<?php echo base_url();?>butirbuku/<?php echo $key->id; ?>"><i class="material-icons">book</i></a>&nbsp;
                                            <a type="button" data-color="amber" class="btn bg-amber waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat Resume Borang" href="<?php echo base_url();?>resume/<?php echo $key->id; ?>"><i class="material-icons">pageview</i></a>&nbsp;
                                            <?php
                                            }elseif ($evdir !== false) {
                                            ?>
                                            <a type="button" data-color="purple" class="btn bg-purple waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Detail Evaluasi Diri" href="<?php echo base_url();?>evdir/<?php echo $key->id; ?>" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">description</i></a>&nbsp;
                                            <?php
                                            }elseif ($excel !== false) {
                                            ?>
                                            <a type="button" data-color="purple" class="btn bg-purple waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Detail Excel" href="<?php echo base_url();?>excel/<?php echo $key->id; ?>" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">description</i></a>&nbsp;
                                            <?php
                                            }elseif ($lampiran !== false) {
                                            ?>
                                            <a type="button" data-color="purple" class="btn bg-purple waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Detail Lampiran" href="<?php echo base_url();?>lampiran/<?php echo $key->id; ?>" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">description</i></a>&nbsp;
                                            <?php
                                            }
                                            ?>
                                            <!-- <a type="button" data-color="amber" class="btn bg-amber waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat Resume Borang" href="<?php echo base_url();?>resume/<?php echo $key->id; ?>"><i class="material-icons">pageview</i></a>&nbsp; -->
                                            <a onclick="downloadborang()" type="button" data-color="blue-grey" class="btn bg-blue-grey waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Download Borang"><i class="material-icons">file_download</i></a>&nbsp;
                                            <a onclick="nilaiborang()" type="button" data-color="yellow" class="btn bg-yellow waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat Nilai"><i class="material-icons">grade</i></a>&nbsp;
                                            <?php
                                            if($_SESSION['role']=="Admin"){
                                            ?>
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#updateBorang" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">edit</i></a>&nbsp;
                                            <a id="del" onclick="dele(<?php echo $key->id;?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_borang/destroy/'.$key->id); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">delete_forever</i></a>
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

        <div class="modal fade" id="addBorang" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Tambah Borang</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    // $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                    // echo form_open('C_borang/store', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open('C_borang/store', $attributes);
                    // echo form_open('C_borang/store');
                ?>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <!-- <select class="form-control show-tick">
                                <option value="">-- Jenis Akreditasi --</option>
                                <option value="10">Prodi</option>
                                <option value="20">Fakultas</option>
                            </select> -->
                            <!-- <div class="form-line">
                                <input name="role" type="radio" id="radio_30" value="Prodi" class="with-gap radio-col-red" />
                                <label for="radio_30">Prodi</label>
                                <input name="role" type="radio" id="radio_35" value="Fakultas" class="with-gap radio-col-blue" />
                                <label for="radio_35">Fakultas</label>
                            </div> -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_prodi" value="<?php echo $this->uri->segment(2, 0); ?>">
                            <label for="jenis">Jenis Borang</label>
                            <div class="form-group">
                                <div class="form-line">
                                <select class="form-control show-tick" name="jenis" required>
                                    <option value="">-- Jenis Borang --</option>
                                    <?php
                                    $jenisnya = stripos(($prodi[0]['nama']), 'Fakultas');
                                    if ($jenisnya !== FALSE) {
                                    ?>
                                        <option value="Borang 3B">Borang 3B</option>
                                        <option value="Excel 3B">Excel 3B</option>
                                        <option value="Evaluasi Diri 3B">Evaluasi Diri 3B</option>
                                        <option value="Lampiran 3B">Lampiran 3B</option>
                                    <?php
                                    }else{
                                    ?>
                                        <option value="Borang 3A">Borang 3A</option>
                                        <option value="Excel 3A">Excel 3A</option>
                                        <option value="Evaluasi Diri 3A">Evaluasi Diri 3A</option>
                                        <option value="Lampiran 3A">Lampiran 3A</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="fakpro" value="<?php echo ($prodi[0]['nama']); ?>" required>
                                    <label class="form-label">Fakultas / Program Studi</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tahun" required>
                                    <label class="form-label">Tahun</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="buku" required>
                                    <label class="form-label">Buku</label>
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

        <div class="modal fade" id="updateBorang" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Update Borang</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    //   $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                    //   echo form_open('C_borang/update', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open('C_borang/update', $attributes);
                    // echo form_open('C_borang/update');
                ?>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <!-- <select class="form-control show-tick">
                                <option value="">-- Jenis Akreditasi --</option>
                                <option value="10">Prodi</option>
                                <option value="20">Fakultas</option>
                            </select> -->
                            <!-- <div class="form-line">
                                <input name="role" type="radio" id="radio_30" value="Prodi" class="with-gap radio-col-red" />
                                <label for="radio_30">Prodi</label>
                                <input name="role" type="radio" id="radio_35" value="Fakultas" class="with-gap radio-col-blue" />
                                <label for="radio_35">Fakultas</label>
                            </div> -->
                            <input type="hidden" name="idBorang" id="idBorang" value="">
                            <input type="hidden" name="id_prodi" id="id_prodi">
                            <label for="jenis">Jenis Borang</label>
                            <div class="form-group">
                                <div class="form-line">
                                <select class="form-control show-tick" name="jenis" id="jenisBorang">
                                    <option value="">-- Jenis Borang --</option>
                                    <?php
                                    $jenisnya = stripos(($prodi[0]['nama']), 'Fakultas');
                                    if ($jenisnya !== FALSE) {
                                    ?>
                                        <option value="Borang 3B">Borang 3B</option>
                                        <option value="Excel 3B">Excel 3B</option>
                                        <option value="Evaluasi Diri 3B">Evaluasi Diri 3B</option>
                                        <option value="Lampiran 3B">Lampiran 3B</option>
                                    <?php
                                    }else{
                                    ?>
                                        <option value="Borang 3A">Borang 3A</option>
                                        <option value="Excel 3A">Excel 3A</option>
                                        <option value="Evaluasi Diri 3A">Evaluasi Diri 3A</option>
                                        <option value="Lampiran 3A">Lampiran 3A</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="fakpro" id="fakpro">
                                    <label class="form-label">Fakultas / Program Studi</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tahun" id="tahun">
                                    <label class="form-label">Tahun</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="buku" id="buku">
                                    <label class="form-label">Buku</label>
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

        <div class="modal fade" id="hapusBorang" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Hapus Borang Akreditasi?</h4>
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

<script>
  function toTitleCase(str)
  {
      return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
  }
  $(function () {
    // $(".fakpro").hide();

    // $('#borang').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": true,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false
    // });

    $('#addBorang').on('shown.bs.modal', function () {

        // $( "#jenisBorang" ).change(function() {
        //   var selectedValue = $(this).val();
        //   if(selectedValue!='universitas'){
        //     $(".fakpro").show();
        //   }else{
        //     $(".fakpro").hide();
        //   }
        // });
    });

    $('#updateBorang').on('shown.bs.modal', function (event) {
        //$(".fakpro").hide();
        // $( "#updateAccModal #jenisBorang" ).change(function() {
        //   var selectedValue = $(this).val();
        //   if(selectedValue!='universitas'){
        //     $(".fakpro").show();
        //   }else{
        //     $(".fakpro").hide();
        //     $("#fakpro").val("");
        //   }
        // });


        //ajax call to get Dokumen Borang Informatin from database
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever');
        var link="<?php echo base_url(); ?>index.php/C_borang/find";
        $.ajax({
            method: "POST",
            url: link,
            cache: false,
            data: { id: recipient }
          })
          .done(function( msg ) {
              var buku = JSON.parse(msg);
              $('#idBorang').val(buku[0]['id']);
              $('#id_prodi').val(buku[0]['id_prodi']);
              $('#jenisBorang').val(""+buku[0]['jenis']);
              $('#jenisBorang option[value="'+buku[0]['jenis']+'"]').prop('selected', true);
              $('#fakpro').val(toTitleCase(buku[0]['fakpro']));
              $('#fakpro').val(toTitleCase(buku[0]['fakpro']));
              $('#tahun').val(buku[0]['tahun']);
              $('#buku').val(buku[0]['buku']);
              $('#jenisBorang').val(buku[0]['jenis']);


          });
          //show input field "fakultas/prodi" if user choose fakultas/prodi in field jenis borang

    });

    $('#hapusBorang').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever');
        var link="<?php echo base_url(); ?>index.php/C_borang/destroy";
        var csrf = $('input[name=_token]').val();
        $('#del').click(function() {
          $.ajax({
            method: "POST",
            url: link,
            data: { id: recipient }
          })
          .done(function( msg ) {
              alert( "Data Saved: " + msg );
            // swal("Good job!", "You clicked the button!", "success");
              $('#hapusBorang').modal('hide');
              location.reload();
            });
        });

    });

    // $('#del').click(function() {
    //     var delete_url = $(this).attr('data-url');
    //     swal({
    //         title: "Are you sure?",
    //         text: "You will not be able to recover this imaginary file!",
    //         type: "warning",
    //         showCancelButton: true,
    //         confirmButtonColor: "#DD6B55",
    //         confirmButtonText: "Yes, delete it!",
    //         cancelButtonText: "No, cancel plx!",
    //         closeOnConfirm: false,
    //         closeOnCancel: false
    //     }, function (isConfirm) {
    //         if (isConfirm) {
    //             swal("Deleted!", "Your imaginary file has been deleted.", "success");
    //             window.location.href = delete_url;

    //         } else {
    //             swal("Cancelled", "Your imaginary file is safe :)", "error");
    //         }
    //     });
    // });



  });

  function downloadborang(){
    swal({
        title: "Download File Borang?",
        text: "Saat ini File Borang yang anda pilih belum tersedia",
        imageUrl: "<?php echo base_url(); ?>assets/images/download.png"
    });
  }

  function nilaiborang(){
    swal("Nilai Buku Borang", "Saat ini belum ada nilai dari borang yang anda pilih.", "success");
                window.location.href = delete_url;
  }

  function dele(x){
    var id = "<?php echo $prodi[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_borang/destroy/"+x+"/"+id;
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

  function buatjenisborang(x){
    var prodi = "<?php echo ($prodi[0]['nama'])?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_borang/buatjenisborang/"+x+"/"+prodi;
        swal({
            title: "Membuat Jenis Borang Baru?",
            text: "Jenis Borang Akan Terbuat Sebanyak 4 jenis",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, create it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                swal("Sukses!", "Jenis Borang Sudah Terbuat", "success");
                window.location.href = delete_url;

            } else {
                swal("Cancelled!", "Jenis Borang Tidak Terbuat :)", "error");
            }
        });
  }

  
</script>

</body>

</html>
