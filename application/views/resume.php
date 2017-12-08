<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-5">
            <h2>
                RESUME BUTIR <?php echo strtoupper(($buku[0]['jenis']));?>
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
                <li class="active"><i class="material-icons">description</i> Resume Butir Borang</li>
            </ol>
            </div>
        </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header js-sweetalert">
                        <h2>Tabel Butir <?php echo (ucwords($getdata[0]['namaprodi'])); ?></h2>
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
                                    <th rowspan="2">Butir</th>
                                    <th rowspan="2">Isian</th>
                                    <th colspan="2">Lampiran Sumbit BAN-PT</th>
                                    <th colspan="2">Dokumen Pendukung</th>
                                    <th rowspan="2">Nilai</th>
                                </tr>
                                <tr>
                                    <th>Nama Dokumen</th>
                                    <th>Status</th>
                                    <th>Nama Dokumen</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    for($i=0;$i<count($butir);$i++){
                                 ?>
                                <tr>
                                    <?php
                                        $CI =& get_instance();
                                        // cek sudah terisi atau belum
                                        $queryCekisi=$CI->db->query('SELECT COUNT(id) as cekisi FROM isian_16kolom WHERE id_butir IN (SELECT id FROM butir WHERE id = '.$butir[$i]['id'].')');
                                        $cekisi=$queryCekisi->result_array()[0]['cekisi'];
                                        $isinya=($cekisi!=0)?($cekisi):0;
                                        if ($isinya!==0) {
                                            $warnanya = "success";
                                        }else{
                                            $warnanya = "danger";
                                        }

                                        // cek nilainya
                                        $queryceknilai=$CI->db->query('SELECT COUNT(id) as cekskor FROM hitungf1 WHERE id_buku IN (SELECT id FROM butir WHERE id = '.$butir[$i]['id'].')');
                                        $cekskor=$queryceknilai->result_array()[0]['cekskor'];
                                        $cekskornya=($cekskor!=0)?($cekskor):0;
                                        if ($cekskornya!==0) {
                                            // ambil nilainya
                                            $querygetnilai=$CI->db->query('SELECT skorakhir FROM hitungf1 WHERE id_buku IN (SELECT id FROM butir WHERE id = '.$butir[$i]['id'].') order by id desc');
                                            $getnilai=$querygetnilai->result_array()[0]['skorakhir'];
                                            $skor=($getnilai!=0)?($getnilai):0;
                                        }else{
                                            $skor=0;
                                        }
                                    ?>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $butir[$i]['butir'] ?> </td>
                                    <td class='<?php echo($warnanya) ?>'><?php
                                    if ($isinya!==0) {
                                        echo "Sudah Terisi";
                                    }else{
                                        echo "Belum Terisi";
                                    }
                                     ?></td>
                                    <td class='<?php echo($warnanya) ?>'> - </td>
                                    <td class='<?php echo($warnanya) ?>'> - </td>
                                    <td class='<?php echo($warnanya) ?>'> - </td>
                                    <td class='<?php echo($warnanya) ?>'> - </td>
                                    <td class='<?php echo($warnanya) ?>'><?php echo $skor; ?></td>
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

</script>

</body>

</html>
