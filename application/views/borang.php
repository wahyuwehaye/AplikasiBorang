<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                MANAGE BORANG
                <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
            </h2>
        </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header js-sweetalert">
                        <!-- <button type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                            <i class="material-icons">add</i>
                        </button> -->
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="modal" data-target="#addBorang" data-placement="top" title="Tambah Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>
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
                        <table id="borang" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Jenis Borang</th>
                                    <th>Fakultas / Program Studi</th>
                                    <th>Tahun</th>
                                    <th>Buku</th>
                                    <th>Action</th>
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
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#updateBorang" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">edit</i></a>&nbsp;<button id="del" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('c_borang/destroy/'.$key->id); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $key->id; ?>"><i class="material-icons">delete_forever</i></button>
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
                    // echo form_open('c_borang/store', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open('c_borang/store', $attributes);
                    // echo form_open('c_borang/store');
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
                            <label for="jenis">Jenis Akteditasi</label>
                            <div class="form-group">
                                <div class="form-line">
                                <select class="form-control show-tick" name="jenis">
                                    <option value="">-- Jenis Akreditasi --</option>
                                    <option value="Prodi">Prodi</option>
                                    <option value="Fakultas">Fakultas</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="fakpro">
                                    <label class="form-label">Fakultas / Program Studi</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tahun">
                                    <label class="form-label">Tahun</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="buku">
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
                    //   echo form_open('c_borang/update', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open('c_borang/update', $attributes);
                    // echo form_open('c_borang/update');
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
                            <label for="jenis">Jenis Akteditasi</label>
                            <div class="form-group">
                                <div class="form-line">
                                <select class="form-control show-tick" name="jenis" id="jenisBorang">
                                    <option value="">-- Jenis Akreditasi --</option>
                                    <option value="Prodi">Prodi</option>
                                    <option value="Fakultas">Fakultas</option>
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
        var link="<?php echo base_url(); ?>index.php/c_borang/find";
        $.ajax({
            method: "POST",
            url: link,
            cache: false,
            data: { id: recipient }
          })
          .done(function( msg ) {
              var buku = JSON.parse(msg);
              $('#idBorang').val(buku[0]['id']);
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
        var link="<?php echo base_url(); ?>index.php/c_borang/destroy";
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

    $('#del').click(function() {
        var delete_url = $(this).attr('data-url');
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
    });



  });
</script>

</body>

</html>
