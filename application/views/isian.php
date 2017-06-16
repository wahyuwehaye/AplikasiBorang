<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-4">
            <h2>
                MANAGE ISIAN BUTIR BORANG
                <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                <small><?php echo ucfirst($buku[0]['jenis'])." ".$buku[0]['fakpro']." - ".$buku[0]['tahun']." - Buku : ".$buku[0]['buku']; ?></small>
            </h2>
            </div>
            <div class="col-sm-8">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li><a href="<?php echo base_url();?>index.php/borang"><i class="material-icons">settings</i> Manage Borang</a></li>
                <li><a href="<?php echo base_url();?>index.php/butir/<?php echo $buku[0]['id']; ?>"><i class="material-icons">description</i> Butir Borang</a></li>
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
                        DETAIL BUTIR 
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

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header js-sweetalert">
                    <h2>
                        ISIAN BUTIR 
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
                    <?php
                        $isiannya = $this->uri->segment(2, 0);
                        if ($isiannya==1) {
                            if (count($dataisian)>0) {
                                for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/updateisian11">
                        <input type="hidden" name="id11" id="id11" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir11" id="id_butir11" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">View Book Standar 1 : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian4kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_11" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Visi</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom2_11" id="tin2" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom2'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Misi</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom3_11" id="tin3" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom3'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Tujuan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom4_11" id="tin4" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom4'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no11" id="version_no11" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at11" id="created_at11" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php } ?>

                        <!-- <table id="borang" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>ID Butir</th>
                                    <th>Mekanisme Penyusunan</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Tujuan</th>
                                    <th>Version</th>
                                    <th width="14%">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID Butir</th>
                                    <th>Mekanisme Penyusunan</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Tujuan</th>
                                    <th>Version</th>
                                    <th width="14%">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    // foreach ($dataisian as $key) {
                                    for($i=0;$i<count($dataisian);$i++){
                                 ?>
                                <tr>
                                    <td><?php echo $dataisian[$i]['id_butir'] ?> </td>
                                    <td><?php echo $dataisian[$i]['kolom1'] ?> </td>
                                    <td><?php echo $dataisian[$i]['kolom2'] ?> </td>
                                    <td><?php echo $dataisian[$i]['kolom3'] ?> </td>
                                    <td><?php echo $dataisian[$i]['kolom4'] ?> </td>
                                    <td><a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a>&nbsp; </td>
                                    <td>
                                        <div class="js-sweetalert">
                                            <!-- <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>index.php/dataisian/<?php echo $dataisian[$i]['id']; ?>" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp; -->
                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Upload" href="<?php echo base_url();?>index.php/isian/<?php echo $dataisian[$i]['id']; ?>" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp; -->
                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a>&nbsp;
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#updateIsian1" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">edit</i></a>&nbsp;
                                            <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian4kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table> -->
                        <?php
                                }else{
                        ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/ngisi11">
                        <input type="hidden" name="id_butir11" id="id_butir11" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_11" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Visi</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom2_11" id="tin2" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Misi</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom3_11" id="tin3" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Tujuan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom4_11" id="tin4" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==2) {
                            if (count($dataisian)>0) {
                            
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/updateisian11b">
                        <input type="hidden" name="id11b" id="id11b" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir11b" id="id_butir11b" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">View Book Standar 1 : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sasaran dan Strategi Pencapaiannya</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_11b" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no11b" id="version_no11b" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at11b" id="created_at11b" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php } ?>
                        <!-- <table id="borang" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>ID Butir</th>
                                    <th>Sasaran dan Strategi Pencapaiannya</th>
                                    <th>Version</th>
                                    <th width="14%">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID Butir</th>
                                    <th>Sasaran dan Strategi Pencapaiannya</th>
                                    <th>Version</th>
                                    <th width="14%">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    // foreach ($dataisian as $key) {
                                    for($i=0;$i<count($dataisian);$i++){
                                 ?>
                                <tr>
                                    <td><?php echo $dataisian[$i]['id_butir'] ?> </td>
                                    <td><?php echo $dataisian[$i]['kolom1'] ?> </td>
                                    <td><a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a>&nbsp; </td>
                                    <td>
                                        <div class="js-sweetalert"> -->
                                            <!-- <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>index.php/dataisian/<?php echo $dataisian[$i]['id']; ?>" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp; -->
                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Upload" href="<?php echo base_url();?>index.php/isian/<?php echo $dataisian[$i]['id']; ?>" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp; -->
                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a>&nbsp;
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#updateIsian2" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">edit</i></a>&nbsp;
                                            <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table> -->
                        <?php
                                }else{
                        ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/ngisi11b">
                        <input type="hidden" name="id_butir11b" id="id_butir11b" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sasaran dan Strategi Pencapaiannya</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_11b" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==3) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/updateisian12">
                        <input type="hidden" name="id12" id="id12" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir12" id="id_butir12" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">View Book Standar 1 : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sosialisasi&nbsp;
                        <button type="button" onclick="infoSosialisasi()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_12" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no12" id="version_no12" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at12" id="created_at12" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php } ?>
                        <!-- <table id="borang" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>ID Butir</th>
                                    <th>Sosialisasi</th>
                                    <th>Version</th>
                                    <th width="14%">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID Butir</th>
                                    <th>Sosialisasi</th>
                                    <th>Version</th>
                                    <th width="14%">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    // foreach ($dataisian as $key) {
                                    for($i=0;$i<count($dataisian);$i++){
                                 ?>
                                <tr>
                                    <td><?php echo $dataisian[$i]['id_butir'] ?> </td>
                                    <td><?php echo $dataisian[$i]['kolom1'] ?> </td>
                                    <td><a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a>&nbsp; </td>
                                    <td>
                                        <div class="js-sweetalert"> -->
                                            <!-- <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>index.php/dataisian/<?php echo $dataisian[$i]['id']; ?>" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp; -->
                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Upload" href="<?php echo base_url();?>index.php/isian/<?php echo $dataisian[$i]['id']; ?>" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp; -->
                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a>&nbsp;
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#updateIsian3" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">edit</i></a>&nbsp;
                                            <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table> -->
                        <?php
                                }else{
                        ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/ngisi12">
                        <input type="hidden" name="id_butir12" id="id_butir12" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sosialisasi&nbsp;
                        <button type="button" onclick="infoSosialisasi()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_12" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==4) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/updateisian21">
                        <input type="hidden" name="id21" id="id21" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir21" id="id_butir21" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">View Book Standar 1 : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sistem Tata Pamong&nbsp;
                        <button type="button" onclick="infoPamong()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_21" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no21" id="version_no21" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at21" id="created_at21" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                        ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/ngisi21">
                        <input type="hidden" name="id_butir21" id="id_butir21" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sistem Tata Pamong&nbsp;
                        <button type="button" onclick="infoPamong()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_21" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==5) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/updateisian22">
                        <input type="hidden" name="id22" id="id22" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir22" id="id_butir22" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">View Book Standar 1 : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Kepemimpinan&nbsp;
                        <button type="button" onclick="infoKepemimpinan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_22" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no22" id="version_no22" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at22" id="created_at22" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/ngisi22">
                        <input type="hidden" name="id_butir22" id="id_butir22" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Kepemimpinan&nbsp;
                        <button type="button" onclick="infoKepemimpinan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_22" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==6) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/updateisian23">
                        <input type="hidden" name="id23" id="id23" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir23" id="id_butir23" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">View Book Standar 1 : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sistem Pengelolaan&nbsp;
                        <button type="button" onclick="infoPengelolaan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_23" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no23" id="version_no23" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at23" id="created_at23" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/ngisi23">
                        <input type="hidden" name="id_butir23" id="id_butir23" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sistem Pengelolaan&nbsp;
                        <button type="button" onclick="infoPengelolaan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_23" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==7) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/updateisian24">
                        <input type="hidden" name="id24" id="id24" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir24" id="id_butir24" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">View Book Standar 1 : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Penjaminan Mutu&nbsp;
                        <button type="button" onclick="infoMutu()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_24" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no24" id="version_no24" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at24" id="created_at24" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/ngisi24">
                        <input type="hidden" name="id_butir24" id="id_butir24" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Penjaminan Mutu&nbsp;
                        <button type="button" onclick="infoMutu()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_24" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==8) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/updateisian25">
                        <input type="hidden" name="id25" id="id25" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir25" id="id_butir25" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">View Book Standar 1 : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian12kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Umpan Balik&nbsp;
                        <button type="button" onclick="infoUmpan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <input type="hidden" name="kolom1_25" value="<?php echo $dataisian[$i]['kolom1'] ?>" />
                        <h2 class="card-inside-title">Isi Umpan Balik Dari Dosen :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom2_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom2'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Tindak Lanjut Dari Dosen :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom3_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom3'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="kolom4_25" value="<?php echo $dataisian[$i]['kolom4'] ?>" />
                        <h2 class="card-inside-title">Isi Umpan Balik Dari Mahasiswa :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom5_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom5'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Tindak Lanjut Dari Mahasiswa :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom6_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom6'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="kolom7_25" value="<?php echo $dataisian[$i]['kolom7'] ?>" />
                        <h2 class="card-inside-title">Isi Umpan Balik Dari Alumni :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom8_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom8'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Tindak Lanjut Dari Alumni :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom9_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom9'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="kolom10_25" value="<?php echo $dataisian[$i]['kolom10'] ?>" />
                        <h2 class="card-inside-title">Isi Umpan Balik Dari Pengguna Lulusan :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom11_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom11'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Tindak Lanjut Dari Pengguna Lulusan :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom12_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom12'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no25" id="version_no25" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at25" id="created_at25" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/ngisi25">
                        <input type="hidden" name="id_butir25" id="id_butir25" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Umpan Balik&nbsp;
                        <button type="button" onclick="infoUmpan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <input type="hidden" name="kolom1_25" value="Dosen" />
                        <h2 class="card-inside-title">Isi Umpan Balik Dari Dosen :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom2_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Tindak Lanjut Dari Dosen :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom3_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="kolom4_25" value="Mahasiswa" />
                        <h2 class="card-inside-title">Isi Umpan Balik Dari Mahasiswa :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom5_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Tindak Lanjut Dari Mahasiswa :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom6_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="kolom7_25" value="Alumni" />
                        <h2 class="card-inside-title">Isi Umpan Balik Dari Alumni :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom8_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Tindak Lanjut Dari Alumni :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom9_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="kolom10_25" value="Pengguna Lulusan" />
                        <h2 class="card-inside-title">Isi Umpan Balik Dari Pengguna Lulusan :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom11_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Tindak Lanjut Dari Pengguna Lulusan :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom12_25" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==9) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/updateisian26">
                        <input type="hidden" name="id26" id="id26" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir26" id="id_butir26" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">View Book Standar 1 : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian5kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Keberlanjutan&nbsp;
                        <button type="button" onclick="infoKeberlanjutan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Upaya untuk peningkatan animo calon mahasiswa :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_26" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Upaya peningkatan mutu manajemen :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom2_26" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom2'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Upaya untuk peningkatan mutu lulusan :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom3_26" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom3'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom4_26" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom4'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Upaya dan prestasi memperoleh dana hibah kompetitif :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom5_26" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom5'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no26" id="version_no26" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at26" id="created_at26" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>index.php/C_isian/ngisi26">
                        <input type="hidden" name="id_butir26" id="id_butir26" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Keberlanjutan&nbsp;
                        <button type="button" onclick="infoKeberlanjutan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Upaya untuk peningkatan animo calon mahasiswa :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_26" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Upaya peningkatan mutu manajemen :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom2_26" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Upaya untuk peningkatan mutu lulusan :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom3_26" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom4_26" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Upaya dan prestasi memperoleh dana hibah kompetitif :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom5_26" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }
                    ?>
                        
                        <!-- <button type="button" class="btn btn-primary waves-effect">SIMPAN</button> -->
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

        <!-- MODALS View Book -->
        <div class="modal fade" id="viewBook" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="defaultModalLabel">Lihat Isian Butir</h4>
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

        <!-- modals isian 1 -->

        <div class="modal fade" id="updateIsian1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Update Isian</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    //   $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                    //   echo form_open('c_borang/update', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open('C_isian/updateisian4kolom', $attributes);
                    // echo form_open('c_borang/update');
                ?>
                    <div class="row clearfix">
                        <input type="hidden" name="id" id="id" value="">
                        <input type="hidden" name="id_butir" id="id_butir" value="">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="kolom1" id="kolom1" rows="4"></textarea>
                                    <label class="form-label">Mekanisme Penyusunan</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="kolom2" id="kolom2" rows="4"></textarea>
                                    <label class="form-label">Visi</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="kolom3" id="kolom3" rows="4"></textarea>
                                    <label class="form-label">Misi</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="kolom4" id="kolom4" rows="4"></textarea>
                                    <label class="form-label">Tujuan</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="version_no" id="version_no">
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

        <!-- tutup modal isian 1 -->

        <!-- modals isian 2 -->

        <div class="modal fade" id="updateIsian2" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Update Isian</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    //   $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                    //   echo form_open('c_borang/update', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open('C_isian/updateisian1kolom', $attributes);
                    // echo form_open('c_borang/update');
                ?>
                    <div class="row clearfix">
                        <input type="hidden" name="id1" id="id1" value="">
                        <input type="hidden" name="id_butir1" id="id_butir1" value="">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="kolom11" id="kolom11" rows="4"></textarea>
                                    <label class="form-label">Sasaran dan Strategi Pencapaiannya</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="version_no1" id="version_no1">
                        <input type="hidden" name="created_at1" id="created_at1">
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

        <!-- tutup modal isian 2 -->

        <!-- modals isian 3 -->

        <div class="modal fade" id="updateIsian3" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="defaultModalLabel">Update Isian</h1>
                    </div>
                    <div class="modal-body">
                <!-- form start -->
                <?php
                    //   $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                    //   echo form_open('c_borang/update', $attributes);
                    $attributes = array('id' => 'myform');
                    echo form_open('C_isian/updateisian1nkolom', $attributes);
                    // echo form_open('c_borang/update');
                ?>
                    <div class="row clearfix">
                        <input type="hidden" name="id" id="id" value="">
                        <input type="hidden" name="id_butir" id="id_butir" value="">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea class="form-control" name="kolom21" id="kolom21" rows="4"></textarea>
                                    <label class="form-label">Sosialisasi</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="version_no" id="version_no">
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

        <!-- tutup modal isian 3 -->

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
  function toTitleCase(str)
  {
      return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
  }
  $(function () {

    //TinyMCE
    tinymce.init({
        selector: "textarea#tin1",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true,
        relative_urls:false
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin2",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin3",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin4",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin5",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin6",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin7",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin8",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin9",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin10",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin11",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin12",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin13",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin14",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin15",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    //TinyMCE
    tinymce.init({
        selector: "textarea#tin16",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = '<?php echo base_url();?>assets/plugins/tinymce';


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

    $('#updateIsian1').on('shown.bs.modal', function (event) {
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
        var link="<?php echo base_url(); ?>index.php/C_isian/findisian";
        $.ajax({
            method: "POST",
            url: link,
            cache: false,
            data: { id: recipient }
          })
          .done(function( msg ) {
              var buku = JSON.parse(msg);
              $('#id').val(buku[0]['id']);
              $('#id_butir').val(buku[0]['id_butir']);
              $('#kolom1').val(buku[0]['kolom1']);
              $('#kolom2').val(buku[0]['kolom2']);
              $('#kolom3').val(buku[0]['kolom3']);
              $('#kolom4').val(buku[0]['kolom4']);
              $('#version_no').val(buku[0]['version_no']);

          });
          //show input field "fakultas/prodi" if user choose fakultas/prodi in field jenis borang

    });

    $('#updateIsian2').on('shown.bs.modal', function (event) {
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
        var link="<?php echo base_url(); ?>index.php/C_isian/findisian";
        $.ajax({
            method: "POST",
            url: link,
            cache: false,
            data: { id: recipient }
          })
          .done(function( msg ) {
              var buku = JSON.parse(msg);
              $('#id1').val(buku[0]['id']);
              $('#id_butir1').val(buku[0]['id_butir']);
              $('#kolom11').val(buku[0]['kolom1']);
              $('#version_no1').val(buku[0]['version_no']);
              $('#created_at1').val(buku[0]['updated_at']);

          });
          //show input field "fakultas/prodi" if user choose fakultas/prodi in field jenis borang

    });

    $('#updateIsian3').on('shown.bs.modal', function (event) {
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
        var link="<?php echo base_url(); ?>index.php/C_isian/findisian";
        $.ajax({
            method: "POST",
            url: link,
            cache: false,
            data: { id: recipient }
          })
          .done(function( msg ) {
              var buku = JSON.parse(msg);
              $('#id').val(buku[0]['id']);
              $('#id_butir').val(buku[0]['id_butir']);
              $('#kolom21').val(buku[0]['kolom1']);
              $('#version_no').val(buku[0]['version_no']);

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

  function deleisi(x){
    var borang = "<?php echo $this->uri->segment(2, 0)?>";
    if (borang==1) {
        var delete_url = "<?php echo base_url(); ?>index.php/C_isian/destroyisian4kolom/"+x+"/"+borang;
    } else if ((borang==2) || (borang==3) || (borang==4) || (borang==5) || (borang==6) || (borang==7)){
        var delete_url = "<?php echo base_url(); ?>index.php/C_isian/destroyisian1kolom/"+x+"/"+borang;
    } else if (borang==8){
        var delete_url = "<?php echo base_url(); ?>index.php/C_isian/destroyisian12kolom/"+x+"/"+borang;
    } else if (borang==9){
        var delete_url = "<?php echo base_url(); ?>index.php/C_isian/destroyisian5kolom/"+x+"/"+borang;
    }
    
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
</script>

</body>

</html>
