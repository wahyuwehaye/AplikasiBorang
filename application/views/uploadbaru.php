<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-4">
            <h2>
                <strong>MANAGE ISIAN BUTIR BORANG</strong>
                <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                <small><?php echo ucfirst($buku[0]['jenis'])." ".$buku[0]['fakpro']." - ".$buku[0]['tahun']." - Buku : ".$buku[0]['buku']; ?></small>
            </h2>
            </div>
            <div class="col-sm-8">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li><a href="<?php echo base_url();?>borang"><i class="material-icons">settings</i> Manage Borang</a></li>
                <li><a href="<?php echo base_url();?>butir/<?php echo $buku[0]['id']; ?>"><i class="material-icons">description</i> Butir Borang</a></li>
                <li class="active"><i class="material-icons">text_format</i> Isian Butir</li>
            </ol>
            </div>
        </div>
        <!-- Exportable Table Butir -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header js-sweetalert">
                    <h2>
                        <strong>DETAIL BUTIR </strong>
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
                        <table id="borang" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Butir</th>
                                    <th>Baku Mutu</th>
                                    <!-- <th>Penjelasan</th> -->
                                    <th>Keterangan</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th width="5%">Butir</th>
                                    <th width="30%">Baku Mutu</th>
                                    <!-- <th>Penjelasan</th> -->
                                    <th>Keterangan</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    // foreach ($butir as $key) {
                                    for($i=0;$i<count($butir);$i++){
                                 ?>
                                <tr>
                                    <!-- <td><?php echo $key->butir ?> </td>
                                    <td><?php echo $key->bakumutu ?> </td>
                                    <td><?php echo $key->penjelasan ?> </td>
                                    <td><?php echo $key->keterangan ?> </td> -->
                                    <td><?php echo $butir[$i]['butir'] ?> </td>
                                    <td><?php echo $butir[$i]['bakumutu'] ?> </td>
                                    <!-- <td><?php echo $butir[$i]['penjelasan'] ?> </td> -->
                                    <td><?php echo $butir[$i]['keterangan'] ?> </td>
                                    <td>
                                        <div class="js-sweetalert">
                                            <!-- <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>index.php/butir/<?php echo $butir[$i]['id']; ?>" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp; -->
                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Upload" href="<?php echo base_url();?>index.php/isian/<?php echo $butir[$i]['id']; ?>" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp; -->
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#updateButir" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">edit</i></a>&nbsp;
                                            <a id="del" onclick="dele(<?php echo $butir[$i]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$butir[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $butir[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a>
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
        <!-- #END# Exportable Table isian-->

<!-- Buat Upload File nya disini -->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>ISIAN BUTIR</strong>
                                <!-- <small>Taken from <a href="http://www.dropzonejs.com/" target="_blank">www.dropzonejs.com</a></small> -->
                            </h2>
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
                        <?php
                        $isiannya = $this->uri->segment(2, 0);
                        ?>
                        <div class="header">
                            <h2 class="card-inside-title"><?php echo $butir[0]['bakumutu'] ?></h2>
                        </div>
                        <div class="body">
                        <?php
                            if (count($dataisian)>0) {
                                for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_uploadisi/destroyuploadisi/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <div>
                            <embed src="<?php echo base_url();?>uploads/isian/<?php echo $dataisian[$i]['isian']; ?>" type='application/pdf' width='100%' height='700px'/>
                        </div>
                        </div>
                        <div class="header">
                            <h2 class="card-inside-title">Tabel Dokumen pendukung yang terkait pada butir <?php echo $butir[0]['butir'] ?></h2>
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
                                <?php
                                    for($i=0;$i<count($datadokumen);$i++){
                                 ?>
                                <tr>
                                    <td><?php echo $datadokumen[$i]['nama'] ?> </td>
                                    <td><?php echo $datadokumen[$i]['pemilik'] ?> </td>
                                    <td><?php echo $datadokumen[$i]['filename'] ?> </td>
                                    <td><?php echo $datadokumen[$i]['ket'] ?> </td>
                                    <td><?php echo $datadokumen[$i]['created_at'] ?> </td>
                                    <td>
                                        <div class="js-sweetalert">
                                            <!-- <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>index.php/datadokumen/<?php echo $datadokumen[$i]['id']; ?>" data-whatever="<?php echo $datadokumen[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp; -->
                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Upload" href="<?php echo base_url();?>index.php/isian/<?php echo $datadokumen[$i]['id']; ?>" data-whatever="<?php echo $datadokumen[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp; -->
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#updateDokumen" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $datadokumen[$i]['id']; ?>"><i class="material-icons">edit</i></a>&nbsp;
                                            <a id="del" onclick="deledok(<?php echo $datadokumen[$i]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_butir/destroy/'.$datadokumen[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $datadokumen[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                        <div class="header">
                            <h2 class="card-inside-title">Tambah Dokumen pendukung yang terkait pada butir <?php echo $butir[0]['butir'] ?></h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url()?>C_uploadisi/dokumen" id="frmFileUpload" class="dropzone form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_butir" id="id_butir" value="<?php echo $isiannya; ?>" />
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
                                                <input type="text" name="pemilik" class="form-control" placeholder="Enter Pemilik Dokumen">
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
                            <?php } ?>
                        <?php
                            }else{
                        ?>
                        <div class="body">
                            <form action="<?php echo base_url()?>C_uploadisi/isiannya" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_butir" id="id_butir" value="<?php echo $isiannya; ?>" />
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(Selected files are <strong>automatically</strong> uploaded.)</em>
                                    <!-- <em><h4 style="color: red"><strong>File Type : PDF</strong></h4></em> -->
                                    <em><small class="help-block" style="color:red;"><strong>Tipe File : pdf. Max File size : 500MB</strong></small></em>
                                </div>
                                <div class="fallback">
                                    <input name="isian" type="file" multiple />
                                </div>
                            </form>
                        </div>
                        <div class="header">
                            <h2 class="card-inside-title">Dokumen pendukung yang terkait pada butir <?php echo $butir[0]['butir'] ?></h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url()?>C_uploadisi/dokumen" id="frmFileUpload" class="dropzone form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_butir" id="id_butir" value="<?php echo $isiannya; ?>" />
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama">Nama Dokumen</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Enter Nama Dokumen">
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
                                                <input type="text" id="pemilik" name="pemilik" class="form-control" placeholder="Enter Pemilik Dokumen">
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
                                                <textarea rows="4" type="text" id="ket" name="ket" class="form-control" placeholder="Enter Keterangan"></textarea>
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
                            <a href="<?php echo base_url();?>uploadisi/<?php echo $butir[0]['id'] ?>" class="btn btn-block btn-primary waves-effect">SIMPAN</a>
                        </div>
                        <?php
                                }
                        ?>
                    </div>
                </div>
            </div>
<!-- End Code Upload File -->

        <!-- MODALS Tabel -->
        <div class="modal fade" id="viewVersion" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Data Version</h4>
                    </div>
                    <div class="modal-body">
                        <table id="borang" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>ID Butir</th>
                                    <!-- <th>Mekanisme Penyusunan</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Tujuan</th> -->
                                    <th>Dibuat</th>
                                    <th>Diupdate</th>
                                    <th>Version</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID Butir</th>
                                    <!-- <th>Mekanisme Penyusunan</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Tujuan</th> -->
                                    <th>Dibuat</th>
                                    <th>Diupdate</th>
                                    <th>Version</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    // foreach ($dataisianversion as $key) {
                                    for($i=0;$i<count($dataisianversion);$i++){
                                 ?>
                                <tr>
                                    <td><?php echo $dataisianversion[$i]['id_kolom'] ?> </td>
                                    <!-- <td><?php echo $dataisianversion[$i]['kolom1'] ?> </td>
                                    <td><?php echo $dataisianversion[$i]['kolom2'] ?> </td>
                                    <td><?php echo $dataisianversion[$i]['kolom3'] ?> </td>
                                    <td><?php echo $dataisianversion[$i]['kolom4'] ?> </td> -->
                                    <td><?php echo $dataisianversion[$i]['created_at'] ?> </td>
                                    <td><?php echo $dataisianversion[$i]['updated_at'] ?> </td>
                                    <td><?php echo $dataisianversion[$i]['version_no'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
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
                    echo form_open('C_butir/store', $attributes);
                    // echo form_open('c_borang/store');
                ?>
                    <div class="row clearfix">
                        <input type="hidden" name="id_borang" id="id_borang"value="<?php echo $buku[0]['id']?>">
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
                    echo form_open('C_butir/update', $attributes);
                    // echo form_open('c_borang/update');
                ?>
                    <div class="row clearfix">
                        <input type="hidden" name="idButir" id="idButir" value="">
                        <input type="hidden" name="id_borang" id="id_borang"value="<?php echo $buku[0]['id']?>">
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

        <div class="modal fade" id="updateDokumen" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Update Dokumen</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    //   $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                    //   echo form_open('c_borang/update', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open('C_dokumen/updatedok', $attributes);
                    // echo form_open('c_borang/update');
                ?>
                    <div class="row clearfix">
                        <input type="hidden" name="id" id="id" value="">
                        <input type="hidden" name="id_butir" id="id_butir"value="<?php echo $datadokumen[0]['id_butir']?>">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                    <label class="form-label">NAma Dokumen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="pemilik" id="pemilik">
                                    <label class="form-label">Pemilik Dokumen</label>
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
                                    <textarea class="form-control" name="ket" id="ket" rows="4"></textarea>
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
  $(function () {

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


        //ajax call to get isian Borang Informatin from database
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever');
        var link="<?php echo base_url(); ?>index.php/C_butir/find";
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

    $('#updateDokumen').on('shown.bs.modal', function (event) {
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


        //ajax call to get isian Borang Informatin from database
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever');
        var link="<?php echo base_url(); ?>index.php/C_dokumen/find";
        $.ajax({
            method: "POST",
            url: link,
            cache: false,
            data: { id: recipient }
          })
          .done(function( msg ) {
              var dokumen = JSON.parse(msg);
              $('#id').val(dokumen[0]['id']);
              $('#id_butir').val(dokumen[0]['id_butir']);
              $('#nama').val(dokumen[0]['nama']);
              $('#pemilik').val(dokumen[0]['pemilik']);
              // $('#penjelasan').val(buku[0]['penjelasan']);
              $('#ket').val(dokumen[0]['ket']);


          });
          //show input field "fakultas/prodi" if user choose fakultas/prodi in field jenis borang

    });

    $('#hapusBorang').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever');
        var link="<?php echo base_url(); ?>index.php/C_butir/destroy";
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

  function deledok(x){
    var butir = "<?php echo $datadokumen[0]['id_butir']?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_dokumen/destroydok/"+x+"/"+butir;
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

  function deleisi(x){
    var borang = "<?php echo $this->uri->segment(2, 0)?>";
    // if ((borang==1)) {
    //     var delete_url = "<?php echo base_url(); ?>index.php/C_uploadisi/destroyisian4kolom/"+x+"/"+borang;
    // } else if ((borang==2) || (borang==3) || (borang==4) || (borang==5) || (borang==6) || (borang==7) || (borang==24) || (borang==25) || (borang==26) || (borang==27) || (borang==28)){
    //     var delete_url = "<?php echo base_url(); ?>index.php/C_uploadisi/destroyisian1kolom/"+x+"/"+borang;
    // } else if (borang==8){
    //     var delete_url = "<?php echo base_url(); ?>index.php/C_uploadisi/destroyisian12kolom/"+x+"/"+borang;
    // } else if (borang==9){
    //     var delete_url = "<?php echo base_url(); ?>index.php/C_uploadisi/destroyisian5kolom/"+x+"/"+borang;
    // }else if(borang==15){
    //     var delete_url = "<?php echo base_url(); ?>index.php/C_uploadisi/destroyisian4kolomsatupersatu/"+x+"/"+borang;
    // }
    var delete_url = "<?php echo base_url(); ?>index.php/C_uploadisi/destroyuploadisi/"+x+"/"+borang;
    
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

  function infoPamong(){
    swal({
        title: "Info <small>dari </small>Sistem Tata Pamong",
        text: "Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</br></br> <b>Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk  membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</b>",
        html: true
    });
  }

  function infoSosialisasi(){
    swal({
        title: "Info <small>dari </small>Sosialisasi",
        text: "Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan.",
        html: true
    });
  }

  function infoKepemimpinan(){
    swal({
        title: "Info <small>dari </small>Kepemimpinan",
        text: "Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat. Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.  Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.  Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.</br></br> <b>Jelaskan pola kepemimpinan dalam Program Studi.</b>",
        html: true
    });
  }

  function infoPengelolaan(){
    swal({
        title: "Info <small>dari </small>Sistem Pengelolaan",
        text: "Sistem pengelolaan fungsional dan operasional program studi mencakup planning, organizing, staffing, leading, controlling dalam kegiatan  internal maupun eksternal.</br></br><b>Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</b>",
        html: true
    });
  }

  function infoMutu(){
    swal({
        title: "Info <small>dari </small>Penjaminan Mutu",
        text: "<b>Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</b>",
        html: true
    });
  }

  function infoUmpan(){
    swal({
        title: "Info <small>dari </small>Umpan Balik",
        text: "Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka? </br></br><b>Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</b>",
        html: true
    });
  }

  function infoKeberlanjutan(){
    swal({
        title: "Info <small>dari </small>Keberlanjutan",
        text: "Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal berikut ini</b>",
        html: true
    });
  }

  function info313(){
    swal({
        title: "Info <small>dari </small>Penghargaan atas prestasi mahasiswa di bidang nalar, bakat dan minat",
        text: "Sebutkan pencapaian prestasi/reputasi mahasiswa dalam tiga tahun terakhir di bidang akademik dan non-akademik (misalnya prestasi dalam penelitian dan lomba karya ilmiah, olahraga, dan seni).</b>",
        html: true
    });
  }

  function info341(){
    swal({
        title: "Info <small>dari </small>Partisipasi alumni dalam mendukung pengembangan akademik program studi dalam bentuk: (1) Sumbangan dana (2) Sumbangan fasilitas (3) Keterlibatan dalam kegiatan akademik (4) Pengembangan jejaring (5) Penyediaan fasilitas untuk kegiatan akademik",
        text: "Jelaskan apakah lulusan program studi memiliki himpunan alumni.  Jika memiliki, jelaskan aktivitas dan hasil kegiatan dari himpunan alumni untuk kemajuan program studi dalam kegiatan akademik dan non akademik, meliputi sumbangan dana, sumbangan fasilitas, keterlibatan dalam kegiatan, pengembangan jejaring, dan penyediaan fasilitas.</b>",
        html: true
    });
  }

  function info342(){
    swal({
        title: "Info <small>dari </small>Partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi dalam bentuk: (1) Sumbangan dana (2) Sumbangan fasilitas (3) Keterlibatan dalam kegiatan non akademik (4) Pengembangan jejaring (5) Penyediaan fasilitas untuk kegiatan non akademik",
        text: "Jelaskan apakah lulusan program studi memiliki himpunan alumni.  Jika memiliki, jelaskan aktivitas dan hasil kegiatan dari himpunan alumni untuk kemajuan program studi dalam kegiatan akademik dan non akademik, meliputi sumbangan dana, sumbangan fasilitas, keterlibatan dalam kegiatan, pengembangan jejaring, dan penyediaan fasilitas.</b>",
        html: true
    });
  }

  function info41(){
    swal({
        title: "Info <small>dari </small>Sistem Pengelolaan Sumber Daya Manusia",
        text: "Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya)</b>",
        html: true
    });
  }

  function info421(){
    swal({
        title: "Info <small>dari </small>Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja dosen dan tenaga kependidikan",
        text: "Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya)</b>",
        html: true
    });
  }

  function info422(){
    swal({
        title: "Info <small>dari </small>Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang pendidikan, penelitian, pelayanan/pengabdian kepada masyarakat",
        text: "Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).</b>",
        html: true
    });
  }
</script>

</body>

</html>
