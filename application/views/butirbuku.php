<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-5">
            <h2>
                MENGELOLA BUTIRw <?php echo strtoupper(($buku[0]['jenis']));?>
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
                <li class="active"><i class="material-icons">description</i> Kelola Butir Borang</li>
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
                        $butird3 = stripos(($getdata[0]['namaprodi']), 'D3');
                        $butird4 = stripos(($getdata[0]['namaprodi']), 'D4');
                        $butirs1 = stripos(($getdata[0]['namaprodi']), 'S1');
                        $butirs2 = stripos(($getdata[0]['namaprodi']), 'S2');
                        $butirfak = stripos(($getdata[0]['namaprodi']), 'Fakultas');
                        $jenisfakd3 = stripos(($getdata[0]['namaprodi']), 'D3 Dan D4 Fakultas');
                        if($_SESSION['role']=="Admin"){
                        ?>
                        <h2>
                        Tabel Butir <?php echo (ucwords($getdata[0]['namaprodi'])); ?> &nbsp;
                        <?php
                        if (count($butir)>0) {
                                ?>
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="modal" data-target="#addButir" data-placement="top" title="Tambah Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>&nbsp;
                        <button type="button" data-color="light-blue" class="btn bg-red waves-effect btn-xs" onclick="deleteallbutir(<?php echo $this->uri->segment(2, 0); ?>)" data-toggle="tooltip" data-placement="top" title="Hapus Semua Butir Borang" href="javascript:void(0)"><i class="material-icons">delete</i></button>
                                <?php
                        }else{
                            if((($butird3!==false) || ($butird4!==false)) && ($butirfak !== false)){
                                ?>
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" onclick="buatbutir3BD3(<?php echo $this->uri->segment(2, 0); ?>)" data-toggle="tooltip" data-placement="top" title="Buat Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>
                                <?php
                            } elseif (($butird3!==false) || ($butird4!==false)) {
                                ?>
                        <!-- <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" onclick="buatbutir3AD3(<?php echo $this->uri->segment(2, 0); ?>)" data-toggle="tooltip" data-placement="top" title="Buat Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button> -->
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="modal" data-target="#addButir" data-placement="top" title="Tambah Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>
                                <?php
                            }elseif (($butirs1!==false) && ($butirfak!==false)) {
                                 ?>
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" onclick="buatbutir3BS1(<?php echo $this->uri->segment(2, 0); ?>)" data-toggle="tooltip" data-placement="top" title="Buat Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>
                        <!-- <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="modal" data-target="#addButir" data-placement="top" title="Tambah Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button> -->
                                <?php
                            }elseif ($butirs1!==false) {
                                 ?>
                        <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" onclick="buatbutir3AS1(<?php echo $this->uri->segment(2, 0); ?>)" data-toggle="tooltip" data-placement="top" title="Buat Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button>
                        <!-- <button type="button" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="modal" data-target="#addButir" data-placement="top" title="Tambah Butir Borang" href="javascript:void(0)"><i class="material-icons">add</i></button> -->
                                <?php
                            }elseif ($butirs2!==false) {
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
                                    <th width="20%">Baku Mutu</th>
                                    <!-- <th>Penjelasan</th> -->
                                    <th width="50%">Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="3%">No</th>
                                    <th width="5%">Butir</th>
                                    <th width="20%">Baku Mutu</th>
                                    <!-- <th>Penjelasan</th> -->
                                    <th width="50%">Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    $no = 1;
                                    // foreach ($butir as $key) {
                                    for($i=0;$i<count($butir);$i++){
                                 ?>
                                <tr>
                                    <td><?php echo $no ?> </td>
                                    <!-- <td><?php echo $key->butir ?> </td>
                                    <td><?php echo $key->bakumutu ?> </td>
                                    <td><?php echo $key->penjelasan ?> </td>
                                    <td><?php echo $key->keterangan ?> </td> -->
                                    <td><?php echo $butir[$i]['butir'] ?> </td>
                                    <td><?php echo $butir[$i]['bakumutu'] ?> </td>
                                    <!-- <td><?php echo $butir[$i]['penjelasan'] ?> </td> -->
                                    <!-- <td><?php echo $butir[$i]['keterangan'] ?> </td> -->
                                    <td><div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="8" class="form-control no-resize" placeholder="Please type what you want..." readonly="true"><?php echo $butir[$i]['keterangan'] ?>
                                            </textarea>
                                        </div>
                                    </div></td>
                                    <td>
                                    <?php
                                        $CI =& get_instance();
                                        // cek sudah terisi atau belum
                                        $queryCekisi=$CI->db->query('SELECT COUNT(id) as cekisi FROM isian_16kolom_buku WHERE id_butir IN (SELECT id FROM butir_buku WHERE id = '.$butir[$i]['id'].')');
                                        $cekisi=$queryCekisi->result_array()[0]['cekisi'];
                                        $isinya=($cekisi!=0)?($cekisi):0;

                                        // cek dulu apakah masuk ke F1 atau F3
                                        if($butirfak !== false){
                                            // cek nilainya
                                            $queryceknilai=$CI->db->query('SELECT COUNT(id) as cekskor FROM hitungf3 WHERE id_buku IN (SELECT id FROM butir_buku WHERE id = '.$butir[$i]['id'].')');
                                            $cekskor=$queryceknilai->result_array()[0]['cekskor'];
                                            $cekskornya=($cekskor!=0)?($cekskor):0;
                                            if ($cekskornya!==0) {
                                                // ambil nilainya
                                                $querygetnilai=$CI->db->query('SELECT skorakhir FROM hitungf3 WHERE id_buku IN (SELECT id FROM butir_buku WHERE id = '.$butir[$i]['id'].') order by id desc');
                                                $getnilai=$querygetnilai->result_array()[0]['skorakhir'];
                                                $skor=($getnilai!=0)?($getnilai):0;
                                            }else{
                                                $skor=0;
                                            }
                                        }else{
                                            // cek nilainya
                                            $queryceknilai=$CI->db->query('SELECT COUNT(id) as cekskor FROM hitungf1 WHERE id_buku IN (SELECT id FROM butir_buku WHERE id = '.$butir[$i]['id'].')');
                                            $cekskor=$queryceknilai->result_array()[0]['cekskor'];
                                            $cekskornya=($cekskor!=0)?($cekskor):0;
                                            if ($cekskornya!==0) {
                                                // ambil nilainya
                                                $querygetnilai=$CI->db->query('SELECT skorakhir FROM hitungf1 WHERE id_buku IN (SELECT id FROM butir_buku WHERE id = '.$butir[$i]['id'].') order by id desc');
                                                $getnilai=$querygetnilai->result_array()[0]['skorakhir'];
                                                $skor=($getnilai!=0)?($getnilai):0;
                                            }else{
                                                $skor=0;
                                            }
                                        }

                                        // cek sudah upload semua
                                        $getlistbukti =$CI->db->query('select COUNT(id) as cekfilebukti from dokumenpendukung where id_borang="'.$getdata[0]['idborang'].'" and butir="'.$butir[$i]['butir'].'" and filename = "" and not dokumen=""');
                                        // $getlistbukti =$CI->db->query('select COUNT(id) as cekfilebukti from dokumenpendukung where id_borang="'.$getdata[0]['idborang'].'" and butir="'.$butir[$i]['butir'].'" and id in (select id_pendukung from data_dok_pendukung)');
                                        $cekfilebukti=$getlistbukti->result_array()[0]['cekfilebukti'];
                                        $cekfilenya=($cekfilebukti!=0)?($cekfilebukti):0;
                                    ?>
                                        <div class="js-sweetalert">
                                            <?php 
                                                $jenisd3 = stripos(($getdata[0]['namaprodi']), 'D3');
                                                $jeniss1 = stripos(($getdata[0]['namaprodi']), 'S1');
                                                $jeniss2 = stripos(($getdata[0]['namaprodi']), 'S2');
                                                $jenisfak = stripos(($getdata[0]['namaprodi']), 'Fakultas');
                                                $jenisfakd3 = stripos(($getdata[0]['namaprodi']), 'D3 Dan D4 Fakultas');
                                                if ($jenisfakd3 !== false) {
                                            ?>
                                                    <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>isian_buku3bd3/<?php echo $butir[$i]['id']; ?>" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp; 
                                            <?php } elseif ($jenisd3 !== false) { ?>
                                                    <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>isian_buku3ad3/<?php echo $butir[$i]['id']; ?>" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp;
                                            <?php } elseif (($jeniss1!==false) && ($jenisfak!==false)) { ?>
                                                    <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>isian3bs1/<?php echo $butir[$i]['id']; ?>" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp;
                                            <?php } elseif ($jeniss1 !== false) { ?>
                                                    <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>isian_buku/<?php echo $butir[$i]['id']; ?>" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp;
                                            <?php } elseif ($jeniss2 !== false) { ?>
                                                    <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>isian_buku3as2/<?php echo $butir[$i]['id']; ?>" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp;
                                            <?php } ?>

                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Upload" href="<?php echo base_url();?>dokumen/<?php echo $butir[$i]['id']; ?>" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp; -->
                                            <?php
                                            if($_SESSION['role']=="Admin"){
                                                ?>
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#updateButir" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">edit</i></a>&nbsp;
                                            <a id="del" onclick="dele(<?php echo $butir[$i]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy_buku/'.$butir[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a>
                                            <?php
                                            }
                                            if ($isinya!==0) {
                                                ?>
                                            <a type="button" onclick="sudahterisi()" data-color="light-blue" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Sudah Terisi" href="javascript:void(0)" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">done</i></a>&nbsp;
                                                <?php
                                            }

                                            if ($cekfilenya!==0) {
                                            ?>
                                                <a type="button" data-color="brown" class="btn bg-brown waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Bukti yang harus disiapkan" href="<?php echo base_url();?>uploadbukti_pend/<?php echo $butir[$i]['id']; ?>" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp;
                                            <?php
                                            }else{
                                            ?>
                                                <a type="button" data-color="teal" class="btn bg-teal waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Bukti yang harus disiapkan" href="<?php echo base_url();?>uploadbukti_pend/<?php echo $butir[$i]['id']; ?>" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp;
                                            <?php
                                            }
                                            ?>
                                            
                                            <!-- <a type="button" onclick="sudahdinilai()" data-color="light-blue" class="btn bg-amber waves-effect btn-sm" data-toggle="tooltip" data-placement="top" title="Nilai" href="javascript:void(0)" data-whatever="<?php echo $butir[$i]['id']; ?>"><span class="badge"><?php echo $skor; ?></span></a>&nbsp; -->
                                        </div>
                                    </td>
                                </tr>
                                <?php $no=$no+1; } ?>
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

        <div class="modal fade" id="addButir" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Tambah Butir</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    // $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                    // echo form_open('c_borang/store', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open('C_butir/store_buku', $attributes);
                    // echo form_open('c_borang/store');
                ?>
                    <div class="row clearfix">
                        <input type="hidden" name="id_borang" id="id_borang" value="<?php echo $buku[0]['id']?>">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="butir">
                                    <label class="form-label">Butir</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="bakumutu" rows="4"></textarea>
                                    <label class="form-label">Baku Mutu</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="penjelasan" rows="4"></textarea>
                                    <label class="form-label">Penjelasan</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="keterangan" rows="4"></textarea>
                                    <label class="form-label">Keterangan</label>
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

        <div class="modal fade" id="updateButir" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Update Butir</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    //   $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                    //   echo form_open('c_borang/update', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open('C_butir/update_buku', $attributes);
                    // echo form_open('c_borang/update');
                ?>
                    <div class="row clearfix">
                        <input type="hidden" name="idButir" id="idButir" value="">
                        <input type="hidden" name="id_borang" id="id_borang" value="<?php echo $buku[0]['id']?>">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="butir" name="butir">
                                    <label class="form-label">Butir</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="bakumutu" id="bakumutu" rows="4"></textarea>
                                    <label class="form-label">Baku Mutu</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="penjelasan" id="penjelasan" rows="4"></textarea>
                                    <label class="form-label">Penjelasan</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="keterangan" id="keterangan" rows="4"></textarea>
                                    <label class="form-label">Keterangan</label>
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

    $('#addButir').on('shown.bs.modal', function () {

        // $( "#jenisBorang" ).change(function() {
        //   var selectedValue = $(this).val();
        //   if(selectedValue!='universitas'){
        //     $(".fakpro").show();
        //   }else{
        //     $(".fakpro").hide();
        //   }
        // });
    });

    $('#updateButir').on('shown.bs.modal', function (event) {
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
        var link="<?php echo base_url(); ?>index.php/C_butir/find_buku";
        $.ajax({
            method: "POST",
            url: link,
            cache: false,
            data: { id: recipient }
          })
          .done(function( msg ) {
              var buku = JSON.parse(msg);
              $('#idButir').val(buku[0]['id']);
              $('#butir').val(buku[0]['butir']);
              $('#bakumutu').val(buku[0]['bakumutu']);
              // $('#penjelasan').val(buku[0]['penjelasan']);
              $('#keterangan').val(buku[0]['keterangan']);


          });
          //show input field "fakultas/prodi" if user choose fakultas/prodi in field jenis borang

    });

    $('#hapusBorang').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever');
        var link="<?php echo base_url(); ?>index.php/C_butir/destroy_buku";
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
              $('#hapusButir').modal('hide');
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
    //             location.reload();
    //             window.location.href = delete_url;
    //         } else {
    //             swal("Cancelled", "Your imaginary file is safe :)", "error");
    //         }
    //     });
    // });



  });

  function dele(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/destroy_buku/"+x+"/"+borang;
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

  function buatbutir3BS1(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/buatbutir3BS1_buku/"+x+"/"+borang;
        swal({
            title: "Membuat Butir Borang Baru?",
            text: "Butir Borang Akan Terbuat Otomatis dari Standar 1 - 7",
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

  function buatbutir3AS1(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/buatbutir3AS1_buku/"+x+"/"+borang;
        swal({
            title: "Membuat Butir Borang Baru?",
            text: "Butir Borang Akan Terbuat Otomatis dari Standar 1 - 7",
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
  function buatbutir3BD3(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/buatbutir3BD3_buku/"+x+"/"+borang;
        swal({
            title: "Membuat Butir Borang Baru?",
            text: "Butir Borang Akan Terbuat Otomatis dari Standar 1 - 7",
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
  function buatbutir3AD3(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/buatbutir3AD3_buku/"+x+"/"+borang;
        swal({
            title: "Membuat Butir Borang Baru?",
            text: "Butir Borang Akan Terbuat Otomatis dari Standar 1 - 7",
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

  function deleteallbutir(x){
    var borang = "<?php echo $buku[0]['id']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_butir/destroyallbutir_buku/"+x+"/"+borang;
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
