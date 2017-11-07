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
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian11">
                        <input type="hidden" name="id11" id="id11" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir11" id="id_butir11" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi11">
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian11b">
                        <input type="hidden" name="id11b" id="id11b" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir11b" id="id_butir11b" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi11b">
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian12">
                        <input type="hidden" name="id12" id="id12" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir12" id="id_butir12" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sosialisasi&nbsp;
                        <button type="button" onclick="infoSosialisasi()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi12">
                        <input type="hidden" name="id_butir12" id="id_butir12" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sosialisasi&nbsp;
                        <button type="button" onclick="infoSosialisasi()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian21">
                        <input type="hidden" name="id21" id="id21" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir21" id="id_butir21" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sistem Tata Pamong&nbsp;
                        <button type="button" onclick="infoPamong()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas. </h2>
                        <h2 class="card-inside-title">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk  membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi21">
                        <input type="hidden" name="id_butir21" id="id_butir21" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sistem Tata Pamong&nbsp;
                        <button type="button" onclick="infoPamong()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas. </h2>
                        <h2 class="card-inside-title">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk  membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian22">
                        <input type="hidden" name="id22" id="id22" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir22" id="id_butir22" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Kepemimpinan&nbsp;
                        <button type="button" onclick="infoKepemimpinan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.
                        Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.  Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.  Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.
                        </h2>
                        <h2 class="card-inside-title">Jelaskan pola kepemimpinan dalam Program Studi.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi22">
                        <input type="hidden" name="id_butir22" id="id_butir22" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Kepemimpinan&nbsp;
                        <button type="button" onclick="infoKepemimpinan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.
                        Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.  Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.  Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.  Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.
                        </h2>
                        <h2 class="card-inside-title">Jelaskan pola kepemimpinan dalam Program Studi.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian23">
                        <input type="hidden" name="id23" id="id23" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir23" id="id_butir23" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sistem Pengelolaan&nbsp;
                        <button type="button" onclick="infoPengelolaan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Sistem pengelolaan fungsional dan operasional program studi mencakup planning, organizing, staffing, leading, controlling dalam kegiatan  internal maupun eksternal.</h2>
                        <h2 class="card-inside-title">Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi23">
                        <input type="hidden" name="id_butir23" id="id_butir23" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sistem Pengelolaan&nbsp;
                        <button type="button" onclick="infoPengelolaan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                         <h2 class="card-inside-title">Sistem pengelolaan fungsional dan operasional program studi mencakup planning, organizing, staffing, leading, controlling dalam kegiatan  internal maupun eksternal.</h2>
                        <h2 class="card-inside-title">Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian24">
                        <input type="hidden" name="id24" id="id24" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir24" id="id_butir24" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Penjaminan Mutu&nbsp;
                        <button type="button" onclick="infoMutu()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi24">
                        <input type="hidden" name="id_butir24" id="id_butir24" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Penjaminan Mutu&nbsp;
                        <button type="button" onclick="infoMutu()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian25">
                        <input type="hidden" name="id25" id="id25" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir25" id="id_butir25" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian12kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Umpan Balik&nbsp;
                        <button type="button" onclick="infoUmpan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?  Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi25">
                        <input type="hidden" name="id_butir25" id="id_butir25" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Umpan Balik&nbsp;
                        <button type="button" onclick="infoUmpan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?  Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian26">
                        <input type="hidden" name="id26" id="id26" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir26" id="id_butir26" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian5kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Keberlanjutan&nbsp;
                        <button type="button" onclick="infoKeberlanjutan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal:</h2>
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
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi26">
                        <input type="hidden" name="id_butir26" id="id_butir26" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Keberlanjutan&nbsp;
                        <button type="button" onclick="infoKeberlanjutan()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal:</h2>
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
                        }elseif (($isiannya==10) || ($isiannya==11) || ($isiannya==12) || ($isiannya==13)) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian311">
                        <input type="hidden" name="id311" id="id311" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2>
                        <h2 class="card-inside-title">Tuliskan data seluruh mahasiswa reguler(1) dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_311" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no311" id="version_no311" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at311" id="created_at311" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi311">
                        <input type="hidden" name="id_butir311" id="id_butir311" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2>
                        <h2 class="card-inside-title">Tuliskan data seluruh mahasiswa reguler(1) dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_311" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 42px;" border="1" width="935" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 26px;">
                                    <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Tahun Akademik</th>
                                    <th style="width: 52px; height: 52px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" rowspan="2">Daya Tampung</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Calon Mahasiswa Reguler</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Mahasiswa Baru</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Total Mahasiswa</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="2">Jumlah Lulusan</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">IPK Lulusan Reguler</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;" colspan="3">Presentase Lulusan Reguler dengan IPK :</th>
                                    </tr>
                                    <tr style="height: 26px;">
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Ikut Seleksi</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Lulus Seleksi</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler Bukan Transfer</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Reguler bukan Transfer</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Transfer</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Min</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Rat</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">Mak</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&lt; 2,75</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">2,75-3,00</th>
                                    <th style="width: 52px; height: 26px; background-color: #a8a8a8; text-align: center; vertical-align: middle;">&gt; 3,50</th>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(1)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(2)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(3)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(4)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(5)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(6)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(7)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(8)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(9)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(10)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(11)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(12)</strong></td>
                                    <td style="width: 52px; text-align: center; height: 13px;"><strong>(13)</strong></td>
                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(14)</strong></td>
                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(15)</strong></td>
                                    <td style="width: 53px; text-align: center; height: 13px;"><strong>(16)</strong></td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">TS-4</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">TS-3</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">TS-2</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">TS-1</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">TS</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 53px; text-align: center; height: 13px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 13px;">
                                    <td style="width: 52px; text-align: center; height: 13px;">Jumlah</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; text-align: center; height: 13px;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    <td style="width: 52px; height: 13px; background-color: #b0abab; text-align: center;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>

                                    <p>Catatan:</p>
                                    <p>TS:Tahun akademik penuh terakhir saat pengisian borang</p>
                                    <p>Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum</p>
                                    <p>Catatan:</p>
                                    <p>(1)&nbsp; Mahasiswa <strong>program reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).</p>
                                    <p>(2)&nbsp; Mahasiswa <strong>program non-reguler</strong> adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.</p>
                                    <p>(3)&nbsp; Mahasiswa <strong>transfer</strong> adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==14) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian312">
                        <input type="hidden" name="id312" id="id312" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir312" id="id_butir312" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Tuliskan data mahasiswa non-reguler(2) dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_312" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no312" id="version_no312" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at312" id="created_at312" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi312">
                        <input type="hidden" name="id_butir312" id="id_butir312" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Tuliskan data mahasiswa non-reguler(2) dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_312" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 355px; border-color: #b3b3b3;" border="1" width="972" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 84.4px; background-color: #ababab; text-align: center;" rowspan="2">
                                    <p><strong>Tahun Akademik</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #ababab; text-align: center;" rowspan="2">
                                    <p><strong>Daya Tampung</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">
                                    <p><strong>Jumlah Calon Mahasiswa&nbsp; </strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">
                                    <p><strong>Jumlah Mahasiswa Baru </strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #ababab; text-align: center;" colspan="2">
                                    <p><strong>Jumlah Total Mahasiswa</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; background-color: #ababab; text-align: center;">
                                    <p><strong>Ikut Seleksi</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #ababab; text-align: center;">
                                    <p><strong>Lulus Seleksi</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #ababab; text-align: center;">
                                    <p><strong>Non-Reguler</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #ababab; text-align: center;">
                                    <p><strong>Transfer<sup>(3)</sup></strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #ababab; text-align: center;">
                                    <p><strong>Non-Reguler</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #ababab; text-align: center;">
                                    <p><strong>Transfer<sup>(3)</sup></strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 118.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 128.4px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 150px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 109.2px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 130.8px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p>TS-4</p>
                                    </td>
                                    <td style="width: 118.8px; text-align: center;">&nbsp;</td>
                                    <td style="width: 128.4px; text-align: center;">&nbsp;</td>
                                    <td style="width: 150px; text-align: center;">&nbsp;</td>
                                    <td style="width: 107.6px; text-align: center;">&nbsp;</td>
                                    <td style="width: 125.2px; text-align: center;">&nbsp;</td>
                                    <td style="width: 109.2px; text-align: center;">&nbsp;</td>
                                    <td style="width: 130.8px; text-align: center;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p>654</p>
                                    </td>
                                    <td style="width: 118.8px; text-align: center;">&nbsp;</td>
                                    <td style="width: 128.4px; text-align: center;">&nbsp;</td>
                                    <td style="width: 150px; text-align: center;">&nbsp;</td>
                                    <td style="width: 107.6px; text-align: center;">&nbsp;</td>
                                    <td style="width: 125.2px; text-align: center;">&nbsp;</td>
                                    <td style="width: 109.2px; text-align: center;">&nbsp;</td>
                                    <td style="width: 130.8px; text-align: center;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p>TS-2</p>
                                    </td>
                                    <td style="width: 118.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 150px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 109.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p>TS-1</p>
                                    </td>
                                    <td style="width: 118.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 150px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 109.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p>TS</p>
                                    </td>
                                    <td style="width: 118.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 150px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 109.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==15) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian313">
                        <input type="hidden" name="id313" id="id313" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir313" id="id_butir313" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sebutkan pencapaian prestasi/reputasi mahasiswa dalam tiga tahun terakhir di bidang akademik dan non-akademik (misalnya prestasi dalam penelitian dan lomba karya ilmiah, olahraga, dan seni). </h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_313" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no313" id="version_no313" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at313" id="created_at313" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi313">
                        <input type="hidden" name="id_butir313" id="id_butir313" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sebutkan pencapaian prestasi/reputasi mahasiswa dalam tiga tahun terakhir di bidang akademik dan non-akademik (misalnya prestasi dalam penelitian dan lomba karya ilmiah, olahraga, dan seni). </h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_313" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                   <table style="margin-left: auto; margin-right: auto; height: 250px;" border="1" width="1074" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 50px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 50px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Nama Kegiatan dan Waktu Penyelenggaraan</strong></p>
                                    </td>
                                    <td style="width: 50px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Tingkat (Lokal, Wilayah, Nasional, atau Internasional)</strong></p>
                                    </td>
                                    <td style="width: 50px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Prestasi yang Dicapai</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 50px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 448.4px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 279.6px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 286px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 50px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 448.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 279.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 286px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 50px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 448.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 279.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 286px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 50px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 448.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 279.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 286px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 50px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 448.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 279.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 286px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==16) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian314">
                        <input type="hidden" name="id314" id="id314" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir314" id="id_butir314" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Tuliskan data jumlah mahasiswa reguler tujuh tahun terakhir dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_314" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no314" id="version_no314" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at314" id="created_at314" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi314">
                        <input type="hidden" name="id_butir314" id="id_butir314" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Tuliskan data jumlah mahasiswa reguler tujuh tahun terakhir dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_314" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 383px; width: 1083px;" border="1" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 35px;">
                                    <td style="width: 102px; background-color: #9e9e9e; text-align: center; height: 25px;" rowspan="2">
                                    <p><strong>Tahun Masuk</strong></p>
                                    </td>
                                    <td style="width: 102px; background-color: #9e9e9e; text-align: center; height: 35px;" colspan="7">
                                    <p><strong>Jumlah Mahasiswa Reguler per Angkatan pada Tahun*</strong></p>
                                    </td>
                                    <td style="width: 102px; background-color: #9e9e9e; text-align: center; height: 25px;" rowspan="2">
                                    <p><strong>Jumlah Lulusan s.d. TS</strong></p>
                                    <p><strong>(dari Mahasiswa Reguler)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 4px;">
                                    <td style="width: 102px; background-color: #9e9e9e; text-align: center; height: 4px;">
                                    <p><strong>TS-6</strong></p>
                                    </td>
                                    <td style="width: 102px; background-color: #9e9e9e; text-align: center; height: 4px;">
                                    <p><strong>TS-5</strong></p>
                                    </td>
                                    <td style="width: 102px; background-color: #9e9e9e; text-align: center; height: 4px;">
                                    <p><strong>TS-4</strong></p>
                                    </td>
                                    <td style="width: 102px; background-color: #9e9e9e; text-align: center; height: 4px;">
                                    <p><strong>TS-3</strong></p>
                                    </td>
                                    <td style="width: 102px; background-color: #9e9e9e; text-align: center; height: 4px;">
                                    <p><strong>TS-2</strong></p>
                                    </td>
                                    <td style="width: 102px; background-color: #9e9e9e; text-align: center; height: 4px;">
                                    <p><strong>TS-1</strong></p>
                                    </td>
                                    <td style="width: 102px; background-color: #9e9e9e; text-align: center; height: 4px;">
                                    <p><strong>TS</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 102px; text-align: center; height: 35px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 92px; text-align: center; height: 35px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 92px; text-align: center; height: 35px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 93px; text-align: center; height: 35px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 93px; text-align: center; height: 35px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 35px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 35px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 109px; text-align: center; height: 35px;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 281px; text-align: center; height: 35px;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 102px; text-align: center; height: 35px;">
                                    <p>TS-6</p>
                                    </td>
                                    <td style="width: 92px; text-align: center; height: 35px;">
                                    <p><em>(a)=</em></p>
                                    </td>
                                    <td style="width: 92px; text-align: center; height: 35px;">
                                    <p><em>&nbsp;</em></p>
                                    </td>
                                    <td style="width: 93px; text-align: center; height: 35px;">
                                    <p><em>&nbsp;</em></p>
                                    </td>
                                    <td style="width: 93px; text-align: center; height: 35px;">
                                    <p><em>&nbsp;</em></p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 35px;">
                                    <p><em>&nbsp;</em></p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 35px;">
                                    <p><em>&nbsp;</em></p>
                                    </td>
                                    <td style="width: 109px; text-align: center; height: 35px;">
                                    <p><em>(b)=</em></p>
                                    </td>
                                    <td style="width: 281px; text-align: center; height: 35px;">
                                    <p><em>(c)=</em></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 102px; text-align: center; height: 36px;">
                                    <p>TS-5</p>
                                    </td>
                                    <td style="width: 92px; background-color: #9e9e9e; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; text-align: center; height: 36px;">
                                    <p><em>&nbsp;</em></p>
                                    </td>
                                    <td style="width: 93px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 93px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 109px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 281px; text-align: center; height: 36px;">
                                    <p><em>&nbsp;</em></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 102px; text-align: center; height: 36px;">
                                    <p>TS-4</p>
                                    </td>
                                    <td style="width: 92px; background-color: #9e9e9e; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 93px; text-align: center; height: 36px;">
                                    <p><em>&nbsp;</em></p>
                                    </td>
                                    <td style="width: 93px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 109px; text-align: center; height: 36px;">
                                    <p><em>&nbsp;</em></p>
                                    </td>
                                    <td style="width: 281px; text-align: center; height: 36px;">
                                    <p><em>&nbsp;</em></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 102px; text-align: center; height: 36px;">
                                    <p>TS-3</p>
                                    </td>
                                    <td style="width: 92px; background-color: #9e9e9e; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 93px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 93px; text-align: center; height: 36px;">
                                    <p><em>(d) =</em></p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 109px; text-align: center; height: 36px;">
                                    <p><em>(e) =</em></p>
                                    </td>
                                    <td style="width: 281px; text-align: center; height: 36px;">
                                    <p><em>(f) =</em></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 102px; text-align: center; height: 36px;">
                                    <p>TS-2</p>
                                    </td>
                                    <td style="width: 92px; background-color: #9e9e9e; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 93px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 93px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 109px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 281px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 102px; text-align: center; height: 36px;">
                                    <p>TS-1</p>
                                    </td>
                                    <td style="width: 92px; background-color: #9e9e9e; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 93px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 93px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 100px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 100px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 109px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 281px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 102px; text-align: center; height: 36px;">
                                    <p>TS</p>
                                    </td>
                                    <td style="width: 92px; background-color: #9e9e9e; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 93px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 93px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 100px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 100px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 109px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 281px; background-color: #9c9c9c; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p><br />* Tidak memasukkan mahasiswa transfer.</p>
                                    <p>Catatan&nbsp;: huruf-huruf a, b, c, d, e dan f harus tetap tercantum pada tabel di atas.</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==17) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian32">
                        <input type="hidden" name="id32" id="id32" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir32" id="id_butir32" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Layanan kepada Mahasiswa  </h2>
                        <h2 class="card-inside-title">Lengkapilah tabel berikut untuk setiap jenis pelayanan kepada mahasiswa PS.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_32" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no32" id="version_no32" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at32" id="created_at32" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi32">
                        <input type="hidden" name="id_butir32" id="id_butir32" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Layanan kepada Mahasiswa  </h2>
                        <h2 class="card-inside-title">Lengkapilah tabel berikut untuk setiap jenis pelayanan kepada mahasiswa PS.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_32" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 387px;" border="1" width="1072" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 54.8px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 54.8px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Jenis Pelayanan kepada Mahasiswa</strong></p>
                                    </td>
                                    <td style="width: 54.8px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Bentuk kegiatan, Pelaksanaan dan Hasilnya</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 54.8px; text-align: center;">
                                    <p>(1)</p>
                                    </td>
                                    <td style="width: 306px; text-align: center;">
                                    <p>(2)</p>
                                    </td>
                                    <td style="width: 703.6px; text-align: center;">
                                    <p>(3)</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 54.8px; text-align: center;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 306px; text-align: center;">
                                    <p>Bimbingan dan konseling</p>
                                    </td>
                                    <td style="width: 703.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 54.8px; text-align: center;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 306px; text-align: center;">
                                    <p>Minat dan bakat (ekstra kurikuler)</p>
                                    </td>
                                    <td style="width: 703.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 54.8px; text-align: center;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 306px; text-align: center;">
                                    <p>Pembinaan <em>soft skills</em></p>
                                    </td>
                                    <td style="width: 703.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 54.8px; text-align: center;">
                                    <p>4</p>
                                    </td>
                                    <td style="width: 306px; text-align: center;">
                                    <p>Beasiswa</p>
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 703.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 54.8px; text-align: center;">
                                    <p>5</p>
                                    </td>
                                    <td style="width: 306px; text-align: center;">
                                    <p>Kesehatan</p>
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 703.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif (($isiannya==19) || ($isiannya==20) || ($isiannya==21)) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian331">
                        <input type="hidden" name="id331" id="id331" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir331" id="id_butir331" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Evaluasi Kinerja lulusan oleh Pihak Pengguna Lulusan</h2>
                        <h2 class="card-inside-title">Adakah studi pelacakan (tracer study) untuk mendapatkan hasil evaluasi kinerja lulusan dengan pihak pengguna?</h2>
                        <h2 class="card-inside-title">Jika ada, uraikan metode, proses dan mekanisme kegiatan studi pelacakan tersebut.  Jelaskan pula bentuk tindak lanjut dari hasil kegiatan ini.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_331" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no331" id="version_no331" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at331" id="created_at331" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi331">
                        <input type="hidden" name="id_butir331" id="id_butir331" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Evaluasi Kinerja lulusan oleh Pihak Pengguna Lulusan</h2>
                        <h2 class="card-inside-title">Adakah studi pelacakan (tracer study) untuk mendapatkan hasil evaluasi kinerja lulusan dengan pihak pengguna?</h2>
                        <div class="demo-checkbox">
                                <input type="checkbox" id="tidakada" class="filled-in" />
                                <label for="tidakada">Tidak Ada</label></br>
                                <input type="checkbox" id="ada" class="filled-in" />
                                <label for="ada">Ada</label>
                            </div>
                        <h2 class="card-inside-title">Jika ada, uraikan metode, proses dan mekanisme kegiatan studi pelacakan tersebut.  Jelaskan pula bentuk tindak lanjut dari hasil kegiatan ini.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_331" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <table style="height: 101px; margin-left: auto; margin-right: auto;" border="1" width="1105" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 1096px;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>Hasil studi pelacakan dirangkum dalam tabel berikut:</p>
                                    <p>Nyatakan angka persentasenya(*)&nbsp; pada kolom yang sesuai.</p>
                                    <table style="margin-left: auto; margin-right: auto; height: 464px;" border="1" width="1086" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>Jenis Kemampuan</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;" colspan="4">
                                    <p><strong>Tanggapan Pihak Pengguna</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>Rencana Tindak Lanjut oleh Program Studi</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Sangat Baik</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Baik</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Cukup</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Kurang</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>(%)</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>(%)</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>(%)</strong></p>
                                    </td>
                                    <td style="width: 86px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>(%)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Integritas (etika dan moral)</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Keahlian berdasarkan bidang ilmu (profesionalisme)</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Bahasa Inggris</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>4</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Penggunaan Teknologi Informasi</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>5</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Komunikasi</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>6</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Kerjasama tim</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 86px; text-align: center;">
                                    <p>7</p>
                                    </td>
                                    <td style="width: 291.6px; text-align: center;">
                                    <p>Pengembangan diri</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 335.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 379.6px; text-align: center;" colspan="2">
                                    <p>Total</p>
                                    </td>
                                    <td style="width: 102.8px; text-align: center;">
                                    <p>(a)</p>
                                    </td>
                                    <td style="width: 80.4px; text-align: center;">
                                    <p>(b)</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>(c)</p>
                                    </td>
                                    <td style="width: 86.8px; text-align: center;">
                                    <p>(d)</p>
                                    </td>
                                    <td style="width: 335.6px; background-color: #9c9c9c; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan&nbsp;:&nbsp; Sediakan dokumen pendukung pada saat asesmen lapangan</p>
                                    <p>(*) persentase tanggapan pihak pengguna = [(jumlah tanggapan pada peringkat) : (jumlah tanggapan yang ada)] x 100</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==22) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian332">
                        <input type="hidden" name="id332" id="id332" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir332" id="id_butir332" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2>
                        <h2 class="card-inside-title">Tuliskan data seluruh mahasiswa reguler(1) dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h2> -->
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_332" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no332" id="version_no332" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at332" id="created_at332" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi332">
                        <input type="hidden" name="id_butir332" id="id_butir332" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2>
                        <h2 class="card-inside-title">Tuliskan data seluruh mahasiswa reguler(1) dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h2> -->
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_332" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    Rata-rata waktu tunggu lulusan untuk memperoleh pekerjaan yang pertama = … bulan (Jelaskan bagaimana data ini diperoleh)
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==23) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian333">
                        <input type="hidden" name="id333" id="id333" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir333" id="id_butir333" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2>
                        <h2 class="card-inside-title">Tuliskan data seluruh mahasiswa reguler(1) dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h2> -->
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_333" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no333" id="version_no333" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at333" id="created_at333" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi333">
                        <input type="hidden" name="id_butir333" id="id_butir333" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2>
                        <h2 class="card-inside-title">Tuliskan data seluruh mahasiswa reguler(1) dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h2> -->
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_333" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    Persentase lulusan yang bekerja pada bidang yang sesuai dengan keahliannya = … % (Jelaskan bagaimana data ini diperoleh)
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==24) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian341">
                        <input type="hidden" name="id341" id="id341" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir341" id="id_butir341" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Partisipasi alumni dalam mendukung pengembangan akademik program studi dalam bentuk: (1) Sumbangan dana (2) Sumbangan fasilitas (3) Keterlibatan dalam kegiatan akademik (4) Pengembangan jejaring (5) Penyediaan fasilitas untuk kegiatan akademik&nbsp;
                        <button type="button" onclick="info341()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Jelaskan apakah lulusan program studi memiliki himpunan alumni.  Jika memiliki, jelaskan aktivitas dan hasil kegiatan dari himpunan alumni untuk kemajuan program studi dalam kegiatan akademik dan non akademik, meliputi sumbangan dana, sumbangan fasilitas, keterlibatan dalam kegiatan, pengembangan jejaring, dan penyediaan fasilitas.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_341" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no341" id="version_no341" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at341" id="created_at341" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi341">
                        <input type="hidden" name="id_butir341" id="id_butir341" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Partisipasi alumni dalam mendukung pengembangan akademik program studi dalam bentuk: (1) Sumbangan dana (2) Sumbangan fasilitas (3) Keterlibatan dalam kegiatan akademik (4) Pengembangan jejaring (5) Penyediaan fasilitas untuk kegiatan akademik&nbsp;
                        <button type="button" onclick="info341()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Jelaskan apakah lulusan program studi memiliki himpunan alumni.  Jika memiliki, jelaskan aktivitas dan hasil kegiatan dari himpunan alumni untuk kemajuan program studi dalam kegiatan akademik dan non akademik, meliputi sumbangan dana, sumbangan fasilitas, keterlibatan dalam kegiatan, pengembangan jejaring, dan penyediaan fasilitas.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_341" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==25) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian342">
                        <input type="hidden" name="id342" id="id342" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir342" id="id_butir342" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi dalam bentuk: (1) Sumbangan dana (2) Sumbangan fasilitas (3) Keterlibatan dalam kegiatan non akademik (4) Pengembangan jejaring (5) Penyediaan fasilitas untuk kegiatan non akademik&nbsp;
                        <button type="button" onclick="info342()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Jelaskan apakah lulusan program studi memiliki himpunan alumni.  Jika memiliki, jelaskan aktivitas dan hasil kegiatan dari himpunan alumni untuk kemajuan program studi dalam kegiatan akademik dan non akademik, meliputi sumbangan dana, sumbangan fasilitas, keterlibatan dalam kegiatan, pengembangan jejaring, dan penyediaan fasilitas.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_342" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no342" id="version_no342" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at342" id="created_at342" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi342">
                        <input type="hidden" name="id_butir342" id="id_butir342" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi dalam bentuk: (1) Sumbangan dana (2) Sumbangan fasilitas (3) Keterlibatan dalam kegiatan non akademik (4) Pengembangan jejaring (5) Penyediaan fasilitas untuk kegiatan non akademik&nbsp;
                        <button type="button" onclick="info342()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Jelaskan apakah lulusan program studi memiliki himpunan alumni.  Jika memiliki, jelaskan aktivitas dan hasil kegiatan dari himpunan alumni untuk kemajuan program studi dalam kegiatan akademik dan non akademik, meliputi sumbangan dana, sumbangan fasilitas, keterlibatan dalam kegiatan, pengembangan jejaring, dan penyediaan fasilitas.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_342" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==26) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian41">
                        <input type="hidden" name="id41" id="id41" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir41" id="id_butir41" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sistem Pengelolaan Sumber Daya Manusia&nbsp;
                        <button type="button" onclick="info41()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_41" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no41" id="version_no41" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at41" id="created_at41" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi41">
                        <input type="hidden" name="id_butir41" id="id_butir41" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sistem Pengelolaan Sumber Daya Manusia&nbsp;
                        <button type="button" onclick="info41()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya).</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_41" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif (($isiannya==27) || ($isiannya==28)) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian421">
                        <input type="hidden" name="id421" id="id421" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir421" id="id_butir421" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja dosen dan tenaga kependidikan&nbsp;
                        <button type="button" onclick="info421()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_421" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no421" id="version_no421" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at421" id="created_at421" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi421">
                        <input type="hidden" name="id_butir421" id="id_butir421" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja dosen dan tenaga kependidikan&nbsp;
                        <button type="button" onclick="info421()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya).</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_421" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif (($isiannya==29) || ($isiannya==30) || ($isiannya==31) || ($isiannya==32)) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian422">
                        <input type="hidden" name="id422" id="id422" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir422" id="id_butir422" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang pendidikan, penelitian, pelayanan/pengabdian kepada masyarakat&nbsp;
                        <button type="button" onclick="info422()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.</h2>
                        <h2 class="card-inside-title">Dosen tetap dipilah dalam 2 kelompok, yaitu:</h2>
                        <h2 class="card-inside-title">1. dosen tetap yang bidang keahliannya sesuai dengan PS</h2>
                        <h2 class="card-inside-title">2. dosen tetap yang bidang keahliannya di luar PS</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_422" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no422" id="version_no422" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at422" id="created_at422" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi422">
                        <input type="hidden" name="id_butir422" id="id_butir422" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang pendidikan, penelitian, pelayanan/pengabdian kepada masyarakat&nbsp;
                        <button type="button" onclick="info422()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja minimum 36 jam/minggu.</h2>
                        <h2 class="card-inside-title">Dosen tetap dipilah dalam 2 kelompok, yaitu:</h2>
                        <h2 class="card-inside-title">1. dosen tetap yang bidang keahliannya sesuai dengan PS</h2>
                        <h2 class="card-inside-title">2. dosen tetap yang bidang keahliannya di luar PS</h2>
                        <h2 class="card-inside-title">Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_422" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 213px;" border="1" width="1064" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 60px;">
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Nama Dosen Tetap</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>&nbsp;</strong><strong>NIDN**</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Tgl. Lahir</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Jabatan Akademik***</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Gelar Akademik</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Pendidikan S1, S2, S3&nbsp; dan Asal PT*</strong></p>
                                    </td>
                                    <td style="width: 55.6px; height: 60px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Bidang Keahlian untuk Setiap Jenjang Pendidikan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35.8px;">
                                    <td style="width: 55.6px; height: 35.8px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 139.6px; height: 35.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 85.2px; height: 35.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 85.2px; height: 35.8px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 134.8px; height: 35.8px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 125.2px; height: 35.8px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 175.6px; height: 35.8px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 245.2px; height: 35.8px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 55.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 175.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 245.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 55.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 175.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 245.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 55.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 85.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 175.6px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 245.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p><br />* Lampirkan fotokopi ijazah.</p>
                                    <p>** NIDN : Nomor Induk Dosen Nasional</p>
                                    <p>*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==33) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian432">
                        <input type="hidden" name="id432" id="id432" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir432" id="id_butir432" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Data dosen tetap yang bidang keahliannya di luar bidang PS:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_432" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no432" id="version_no432" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at432" id="created_at432" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi432">
                        <input type="hidden" name="id_butir432" id="id_butir432" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Data dosen tetap yang bidang keahliannya di luar bidang PS:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_432" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <table style="margin-left: auto; margin-right: auto; height: 210px;" border="1" width="1071" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Nama Dosen Tetap</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>&nbsp;</strong></p>
                                    <p><strong>NIDN**</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Tgl. Lahir</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Jabatan Akademik***</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Gelar Akademik</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Pendidikan S1, S2, S3&nbsp; dan Asal PT*</strong></p>
                                    </td>
                                    <td style="width: 57.2px; background-color: #9e9e9e; text-align: center;">
                                    <p><strong>Bidang Keahlian untuk Setiap Jenjang Pendidikan</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 57.2px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 138px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 134px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 182px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 244.4px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 57.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 138px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 57.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 138px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 57.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 138px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 86px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 134px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 125.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* Lampirkan fotokopi ijazah.</p>
                                    <p>** NIDN : Nomor Induk Dosen Nasional</p>
                                    <p>*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan.</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==34) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian433">
                        <input type="hidden" name="id433" id="id433" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir433" id="id_butir433" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_433" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no433" id="version_no433" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at433" id="created_at433" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi433">
                        <input type="hidden" name="id_butir433" id="id_butir433" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Aktivitas dosen tetap yang bidang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_433" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 356px;" border="1" width="1069" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>N</strong><strong>o.</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>Nama </strong></p>
                                    <p><strong>Dosen Tetap</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" colspan="3">
                                    <p><strong>sks</strong></p>
                                    <p><strong>Pengajaran pada</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>sks</strong></p>
                                    <p><strong>Penelitian</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>sks</strong></p>
                                    <p><strong>Pengab-dian kepada Masya-rakat</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" colspan="2" rowspan="2">
                                    <p><strong>sks</strong></p>
                                    <p><strong>Manajemen**</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="3">
                                    <p><strong>Jumlah sks</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>PS Sendiri</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>PS Lain</strong></p>
                                    <p><strong>PT Sendiri</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>PT Lain</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>PT Sen-diri</strong></p>
                                    </td>
                                    <td style="width: 84.4px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>PT Lain</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p><strong>(10)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 234.8px; text-align: left;" colspan="2">
                                    <p><strong>Jumlah</strong></p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 234.8px; text-align: left;" colspan="2">
                                    <p><strong>Rata-rata*</strong></p>
                                    </td>
                                    <td style="width: 74px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 83.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 67.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 75.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan:</p>
                                    <p>Sks pengajaran sama dengan sks mata kuliah yang diajarkan. Bila dosen mengajar kelas paralel, maka beban sks pengajaran untuk satu tambahan kelas paralel adalah 1/2 kali sks mata kuliah.</p>
                                    <p>* &nbsp;&nbsp;rata-rata&nbsp;adalah jumlah sks dibagi dengan jumlah dosen tetap.</p>
                                    <p>** &nbsp;sks manajemen dihitung sbb&nbsp;:</p>
                                    <p>Beban kerja manajemen untuk jabatan-jabatan ini adalah sbb.</p>
                                    <p>Beban kerja manajemen untuk jabatan-jabatan ini adalah sbb.</p>
                                    <p>- rektor/direktur politeknik 12 sks</p>
                                    <p>- pembantu rektor/dekan/ketua sekolah tinggi/direktur akademi 10 sks</p>
                                    <p>- ketua lembaga/kepala UPT 8 sks</p>
                                    <p>- pembantu dekan/ketua jurusan/kepala pusat/ketua senat akademik/ketua senat fakultas 6 sks</p>
                                    <p>- sekretaris jurusan/sekretaris pusat/sekretaris senat akademik/sekretaris senat universitas/ sekretaris senat fakultas/ kepala lab. atau studio/kepala balai/ketua PS 4 sks</p>
                                    <p>- sekretaris PS 3 sks</p>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bagi PT yang memiliki struktur organisasi yang berbeda, beban kerja manajemen untuk jabatan baru disamakan dengan beban kerja jabatan yang setara.</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==35) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian434">
                        <input type="hidden" name="id434" id="id434" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir434" id="id_butir434" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_434" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no434" id="version_no434" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at434" id="created_at434" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi434">
                        <input type="hidden" name="id_butir434" id="id_butir434" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_434" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 257px;" border="1" width="1081" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 61px;">
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Nama</strong></p>
                                    <p><strong>Dosen Tetap</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Bidang Keahlian</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Kode Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Nama Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Jumlah Kelas</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Jumlah Pertemuan yang Direncanakan</strong></p>
                                    </td>
                                    <td style="width: 75.6px; background-color: #9c9c9c; text-align: center; height: 61px;">
                                    <p><strong>Jumlah Pertemuan yang Dilaksanakan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 7.6px;">
                                    <td style="width: 75.6px; text-align: center; height: 7.6px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 170.8px; text-align: center; height: 7.6px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 7.6px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 7.6px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 164.4px; text-align: center; height: 7.6px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 7.6px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 150.8px; text-align: center; height: 7.6px;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 166.8px; text-align: center; height: 7.6px;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 75.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 170.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164.4px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 150.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 166.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 75.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 170.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164.4px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 150.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 166.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 75.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 170.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164.4px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 150.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 166.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 755.6px; text-align: center; height: 36px;" colspan="6">
                                    <p>Jumlah</p>
                                    </td>
                                    <td style="width: 150.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 166.8px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==36) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian435">
                        <input type="hidden" name="id435" id="id435" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir435" id="id_butir435" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_435" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no435" id="version_no435" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at435" id="created_at435" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi435">
                        <input type="hidden" name="id_butir435" id="id_butir435" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS,  dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_435" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 251px;" border="1" width="1077" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 60px;">
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Nama</strong></p>
                                    <p><strong>Dosen Tetap</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Bidang Keahlian</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Kode Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Nama Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Jumlah Kelas</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Jumlah Pertemuan yang Direncanakan</strong></p>
                                    </td>
                                    <td style="width: 72.4px; background-color: #9c9c9c; text-align: center; height: 60px;">
                                    <p><strong>Jumlah Pertemuan yang Dilaksanakan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 72.4px; text-align: center; height: 35px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 168.4px; text-align: center; height: 35px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 35px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 35px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 165.2px; text-align: center; height: 35px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 35px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 158.8px; text-align: center; height: 35px;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 159.6px; text-align: center; height: 35px;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 72.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 165.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 159.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 72.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 165.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 159.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35.6px;">
                                    <td style="width: 72.4px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.4px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 139.6px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.6px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 165.2px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.6px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.8px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 159.6px; text-align: center; height: 35.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 750.8px; text-align: center; height: 35px;" colspan="6">
                                    <p>Jumlah</p>
                                    </td>
                                    <td style="width: 158.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 159.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==37) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian441">
                        <input type="hidden" name="id441" id="id441" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir441" id="id_butir441" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Dosen Tidak Tetap</h2>
                        <h2 class="card-inside-title">Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_441" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no441" id="version_no441" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at441" id="created_at441" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi441">
                        <input type="hidden" name="id_butir441" id="id_butir441" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Dosen Tidak Tetap</h2>
                        <h2 class="card-inside-title">Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_441" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 214px;" border="1" width="1067" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 62px;">
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Dosen Tidak Tetap</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>&nbsp;</strong></p>
                                    <p><strong>NIDN**</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tgl. Lahir</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jabatan Akademik***</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Gelar Akademik</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Pendidikan S1, S2, S3&nbsp; dan Asal PT *</strong></p>
                                    </td>
                                    <td style="height: 62px; width: 58px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Bidang Keahlian untuk Setiap Jenjang Pendidikan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35.2px;">
                                    <td style="height: 35.2px; width: 58px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 139.6px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 86.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 87.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 137.2px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 126px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 199.6px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="height: 35.2px; width: 214px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="height: 35px; width: 58px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 139.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 87.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 137.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 126px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 199.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 214px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="height: 35px; width: 58px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 139.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 87.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 137.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 126px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 199.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 214px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="height: 35px; width: 58px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 139.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 86.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 87.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 137.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 126px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 199.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="height: 35px; width: 214px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>* Lampirkan fotokopi ijazah.</p>
                                    <p>** NIDN : Nomor Induk Dosen Nasional</p>
                                    <p>*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan.<br /><br /></p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif (($isiannya==38) || $isiannya==39) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian442">
                        <input type="hidden" name="id442" id="id442" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir442" id="id_butir442" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_442" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no442" id="version_no442" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at442" id="created_at442" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi442">
                        <input type="hidden" name="id_butir442" id="id_butir442" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_442" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 284px;" border="1" width="1064" cellspacing="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama</strong></p>
                                    <p><strong>Dosen</strong></p>
                                    <p><strong>Tdk Tetap</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Bidang Keahlian</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Kode Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Kelas</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Pertemuan yang Direnca-nakan</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Pertemuan yang Dilaksa-nakan</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 149.6px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 140.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 84.8px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 169.6px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 104.8px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 148.8px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 149.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 140.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 84.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 169.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 149.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 140.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 84.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 169.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 149.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 140.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 84.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 169.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 748px; text-align: center;" colspan="6">
                                    <p>Jumlah</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==40) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian451">
                        <input type="hidden" name="id451" id="id451" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir451" id="id_butir451" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir</h2>
                        <h2 class="card-inside-title">Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_451" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no451" id="version_no451" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at451" id="created_at451" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi451">
                        <input type="hidden" name="id_butir451" id="id_butir451" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir</h2>
                        <h2 class="card-inside-title">Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_451" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 190px;" border="1" width="1086" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 35.4px;">
                                    <td style="width: 93.2px; height: 35.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 93.2px; height: 35.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Tenaga Ahli/Pakar</strong></p>
                                    </td>
                                    <td style="width: 93.2px; height: 35.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama dan Judul Kegiatan</strong></p>
                                    </td>
                                    <td style="width: 93.2px; height: 35.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Waktu Pelaksanaan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 93.2px; text-align: center; height: 35px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 356.4px; text-align: center; height: 35px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 302px; text-align: center; height: 35px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 324.4px; text-align: center; height: 35px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 93.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 356.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 302px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 324.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 93.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 356.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 302px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 324.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 93.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 356.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 302px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 324.4px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==41) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian452">
                        <input type="hidden" name="id452" id="id452" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir452" id="id_butir452" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_452" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no452" id="version_no452" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at452" id="created_at452" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi452">
                        <input type="hidden" name="id_butir452" id="id_butir452" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                         <h2 class="card-inside-title">Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_452" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 147px;" border="1" width="1105" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Dosen</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jenjang Pendidikan Lanjut</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Bidang Studi</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Perguruan Tinggi</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Negara</strong></p>
                                    </td>
                                    <td style="width: 74.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tahun Mulai Studi</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 229.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 205.2px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 154px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 161.2px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 116.4px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 154px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 161.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 74.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 154px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 161.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 148.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==42) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian453">
                        <input type="hidden" name="id453" id="id453" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir453" id="id_butir453" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_453" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no453" id="version_no453" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at453" id="created_at453" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi453">
                        <input type="hidden" name="id_butir453" id="id_butir453" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_453" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="margin-left: auto; margin-right: auto; height: 226px; width: 1087px;" border="1" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 19px;">
                                    <td style="width: 64px; height: 38px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 38px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>Nama Dosen</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 38px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Kegiatan*</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 38px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>Tempat</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 38px; background-color: #9c9c9c; text-align: center;" rowspan="2">
                                    <p><strong>Waktu</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 19px; background-color: #9c9c9c; text-align: center;" colspan="2">
                                    <p><strong>Sebagai</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 19px;">
                                    <td style="width: 64px; height: 19px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Penyaji</strong></p>
                                    </td>
                                    <td style="width: 64px; height: 19px; background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Peserta</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 4.6px;">
                                    <td style="width: 64px; text-align: center; height: 4.6px;">
                                    <p><strong>&nbsp;</strong></p>
                                    </td>
                                    <td style="width: 220px; text-align: center; height: 4.6px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 224px; text-align: center; height: 4.6px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 182px; text-align: center; height: 4.6px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 136px; text-align: center; height: 4.6px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 116px; text-align: center; height: 4.6px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 128px; text-align: center; height: 4.6px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 64px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 220px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 136px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 64px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 220px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 136px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 64px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 220px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 182px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 136px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* Jenis kegiatan&nbsp;: Seminar ilmiah, Lokakarya, Penataran/Pelatihan, <em>Workshop,</em> Pagelaran, Pameran, Peragaan dll</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==43) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian454">
                        <input type="hidden" name="id454" id="id454" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir454" id="id_butir454" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_454" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no454" id="version_no454" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at454" id="created_at454" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi454">
                        <input type="hidden" name="id_butir454" id="id_butir454" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title"><h2 class="card-inside-title">Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).</h2></h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_454" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table border="1" width="1096" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="background-color: #9c9c9c; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Nama Dosen</strong></p>
                                    </td>
                                    <td style="background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Prestasi yang Dicapai*</strong></p>
                                    </td>
                                    <td style="background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Waktu Pencapaian</strong></p>
                                    </td>
                                    <td style="background-color: #9c9c9c; text-align: center;">
                                    <p><strong>Tingkat</strong></p>
                                    <p><strong>(Lokal, Nasional, Internasional)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="text-align: center;">
                                    <p>(1)</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>(2)</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>(3)</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>(4)</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>(5)</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* Sediakan dokumen pendukung pada saat asesmen lapangan.</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==44) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian455">
                        <input type="hidden" name="id455" id="id455" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir455" id="id_butir455" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_455" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no455" id="version_no455" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at455" id="created_at455" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi455">
                        <input type="hidden" name="id_butir455" id="id_butir455" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_455" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 240px;" border="1" width="1076" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 66.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 66.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Dosen</strong></p>
                                    </td>
                                    <td style="width: 66.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Organisasi Keilmuan atau Organisasi Profesi</strong></p>
                                    </td>
                                    <td style="width: 66.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Kurun Waktu</strong></p>
                                    </td>
                                    <td style="width: 66.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tingkat</strong></p>
                                    <p><strong>(Lokal, Nasional, Internasional)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 66.4px; text-align: center;">
                                    <p>(1)</p>
                                    </td>
                                    <td style="width: 223.2px; text-align: center;">
                                    <p>(2)</p>
                                    </td>
                                    <td style="width: 286.4px; text-align: center;">
                                    <p>(3)</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>(4)</p>
                                    </td>
                                    <td style="width: 315.2px; text-align: center;">
                                    <p>(5)</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 66.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 223.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 286.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 315.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 66.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 223.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 286.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 315.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 66.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 223.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 286.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 153.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 315.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif (($isiannya==45) || ($isiannya==46) || ($isiannya==47)) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian461">
                        <input type="hidden" name="id461" id="id461" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir461" id="id_butir461" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Tenaga kependidikan</h2>
                        <h2 class="card-inside-title">Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_461" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no461" id="version_no461" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at461" id="created_at461" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi461">
                        <input type="hidden" name="id_butir461" id="id_butir461" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Tenaga kependidikan</h2>
                        <h2 class="card-inside-title">Tuliskan data tenaga kependidikan  yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_461" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 383px;" border="1" width="1081" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 18px;">
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 12.2px;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 12.2px;" rowspan="2">
                                    <p><strong>Jenis Tenaga Kependidikan</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 18px;" colspan="8">
                                    <p><strong>Jumlah Tenaga Kependidikan dengan </strong></p>
                                    <p><strong>Pendidikan Terakhir</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 12.2px;" rowspan="2">
                                    <p><strong>Unit Kerja</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 40px;">
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>S3</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>S2</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>S1</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>D4</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>D3</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>D2</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>D1</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center; height: 40px;">
                                    <p><strong>SMA/SMK</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 40px;">
                                    <td style="width: 65.6px; text-align: center; height: 40px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center; height: 40px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 40px;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    <td style="width: 146.4px; text-align: center; height: 40px;">
                                    <p><strong>(10)</strong></p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 40px;">
                                    <p><strong>(11)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 65.6px; text-align: center; height: 39px;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center; height: 39px;">
                                    <p>Pustakawan *</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 146.4px; height: 39px; background-color: #a3a3a3; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 54px;">
                                    <td style="width: 65.6px; text-align: center; height: 54px;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center; height: 54px;">
                                    <p>Laboran/ Teknisi/ Analis/ Operator/ Programer</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 146.4px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 54px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 41px;">
                                    <td style="width: 65.6px; text-align: center; height: 41px;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center; height: 41px;">
                                    <p>Administrasi</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 146.4px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 41px;">
                                    <td style="width: 65.6px; text-align: center; height: 41px;">
                                    <p>4</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center; height: 41px;">
                                    <p>Lainnya&nbsp;: &hellip;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 146.4px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 41px;">
                                    <td style="width: 272px; text-align: center; height: 41px;" colspan="2">
                                    <p><strong>Total</strong></p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 53.6px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 146.4px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 228px; text-align: center; height: 41px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* Hanya yang memiliki pendidikan formal dalam bidang perpustakaan</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==48) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian462">
                        <input type="hidden" name="id462" id="id462" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir462" id="id_butir462" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_462" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no462" id="version_no462" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at462" id="created_at462" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi462">
                        <input type="hidden" name="id_butir462" id="id_butir462" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_462" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif (($isiannya==49) || ($isiannya==50)) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian511">
                        <input type="hidden" name="id511" id="id511" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir511" id="id_butir511" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Kurikulum</h2>
                        <h2 class="card-inside-title">Kurikulum pendidikan tinggi adalah seperangkat rencana dan pengaturan mengenai isi, bahan kajian, maupun bahan pelajaran serta cara penyampaiannya, dan penilaian yang digunakan sebagai pedoman penyelenggaraan kegiatan pembelajaran di perguruan tinggi.</h2>
                        <h2 class="card-inside-title">Kurikulum seharusnya memuat standar kompetensi lulusan yang terstruktur dalam kompetensi utama, pendukung dan lainnya yang mendukung  tercapainya tujuan, terlaksananya misi, dan terwujudnya visi program studi. Kurikulum memuat mata kuliah/modul/blok yang mendukung pencapaian kompetensi lulusan dan memberikan keleluasaan pada mahasiswa untuk memperluas wawasan dan memperdalam keahlian sesuai dengan minatnya, serta dilengkapi dengan deskripsi mata kuliah/modul/blok, silabus, rencana pembelajaran dan evaluasi.</h2>
                        <h2 class="card-inside-title">Kurikulum harus dirancang berdasarkan relevansinya dengan tujuan, cakupan dan kedalaman materi, pengorganisasian yang mendorong terbentuknya hard skills dan keterampilan kepribadian dan perilaku (soft skills) yang dapat diterapkan dalam berbagai situasi dan kondisi.</h2>
                        <h2 class="card-inside-title">Kompetensi</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_511" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Uraikan secara ringkas kompetensi utama lulusan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom2_511" id="tin2" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom2'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Uraikan secara ringkas kompetensi pendukung lulusan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom3_511" id="tin3" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom3'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Uraikan secara ringkas kompetensi lainnya/pilihan lulusan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom4_511" id="tin4" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom4'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no511" id="version_no511" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at511" id="created_at511" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi511">
                        <input type="hidden" name="id_butir511" id="id_butir511" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Kurikulum</h2>
                        <h2 class="card-inside-title">Kurikulum pendidikan tinggi adalah seperangkat rencana dan pengaturan mengenai isi, bahan kajian, maupun bahan pelajaran serta cara penyampaiannya, dan penilaian yang digunakan sebagai pedoman penyelenggaraan kegiatan pembelajaran di perguruan tinggi.</h2>
                        <h2 class="card-inside-title">Kurikulum seharusnya memuat standar kompetensi lulusan yang terstruktur dalam kompetensi utama, pendukung dan lainnya yang mendukung  tercapainya tujuan, terlaksananya misi, dan terwujudnya visi program studi. Kurikulum memuat mata kuliah/modul/blok yang mendukung pencapaian kompetensi lulusan dan memberikan keleluasaan pada mahasiswa untuk memperluas wawasan dan memperdalam keahlian sesuai dengan minatnya, serta dilengkapi dengan deskripsi mata kuliah/modul/blok, silabus, rencana pembelajaran dan evaluasi.</h2>
                        <h2 class="card-inside-title">Kurikulum harus dirancang berdasarkan relevansinya dengan tujuan, cakupan dan kedalaman materi, pengorganisasian yang mendorong terbentuknya hard skills dan keterampilan kepribadian dan perilaku (soft skills) yang dapat diterapkan dalam berbagai situasi dan kondisi.</h2>
                        <h2 class="card-inside-title">Kompetensi</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_511" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Uraikan secara ringkas kompetensi utama lulusan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom2_511" id="tin2" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Uraikan secara ringkas kompetensi pendukung lulusan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom3_511" id="tin3" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Uraikan secara ringkas kompetensi lainnya/pilihan lulusan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom4_511" id="tin4" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Catatan: Pengertian tentang kompetensi utama, pendukung, dan lainnya dapat dilihat pada Kepmendiknas No. 045/2002.</h2>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif (($isiannya==52) || ($isiannya==53)) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian512a">
                        <input type="hidden" name="id512a" id="id512a" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir512a" id="id_butir512a" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Struktur Kurikulum</h2>
                        <h2 class="card-inside-title">Jumlah sks PS (minimum untuk kelulusan) :  …  sks yang tersusun sebagai berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_512a" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no512a" id="version_no512a" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at512a" id="created_at512a" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi512a">
                        <input type="hidden" name="id_butir512a" id="id_butir512a" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Struktur Kurikulum</h2>
                        <h2 class="card-inside-title">Jumlah sks PS (minimum untuk kelulusan) :  …  sks yang tersusun sebagai berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_512a" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>Jumlah sks PS (minimum untuk kelulusan) :&nbsp; &hellip;&nbsp; sks yang tersusun sebagai berikut:</p>
                                    <table style="height: 189px;" border="1" width="1089" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 393.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jenis Mata Kuliah</strong></p>
                                    </td>
                                    <td style="width: 393.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>sks</strong></p>
                                    </td>
                                    <td style="width: 393.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Keterangan</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 393.6px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 136.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 538.4px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 393.6px; text-align: left;">
                                    <p>Mata Kuliah Wajib</p>
                                    </td>
                                    <td style="width: 136.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 538.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 393.6px; text-align: left;">
                                    <p>Mata Kuliah Pilihan</p>
                                    </td>
                                    <td style="width: 136.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 538.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 393.6px; text-align: left;">
                                    <p>Jumlah Total</p>
                                    </td>
                                    <td style="width: 136.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 538.4px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==51) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian512b">
                        <input type="hidden" name="id512b" id="id512b" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir512b" id="id_butir512b" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan struktur kurikulum berdasarkan urutan mata kuliah (MK) semester demi semester, dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_512b" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no512b" id="version_no512b" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at512b" id="created_at512b" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi512b">
                        <input type="hidden" name="id_butir512b" id="id_butir512b" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan struktur kurikulum berdasarkan urutan mata kuliah (MK) semester demi semester, dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_512b" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 473px;" border="1" width="1089" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 21px;">
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Smt</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Kode MK</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Nama Mata Kuliah*</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Bobot sks</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 21px;" colspan="2">
                                    <p><strong>sks MK dalam Kurikulum</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Bobot Tugas*** </strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 21px;" colspan="3">
                                    <p><strong>Kelengkapan****</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 33px;" rowspan="2">
                                    <p><strong>Unit/ Jur/ Fak Penyelenggara</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 12px;">
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 12px;">
                                    <p><strong>Inti**</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 12px;">
                                    <p><strong>Insti-tusional</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 12px;">
                                    <p><strong>Deskripsi</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 12px;">
                                    <p><strong>Silabus</strong></p>
                                    </td>
                                    <td style="width: 64px; background-color: #c9c9c9; text-align: center; height: 12px;">
                                    <p><strong>SAP</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p><strong>(10)</strong></p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p><strong>(11)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>I</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>II</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 64px; text-align: center; height: 38px;">
                                    <p>Dst</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 90.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 91.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 126.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 332.8px; height: 38px; text-align: left;" colspan="3">
                                    <p>Total sks</p>
                                    </td>
                                    <td style="width: 68px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 55.2px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 523.2px; height: 38px; background-color: #a6a6a6; text-align: center;" colspan="5">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* &nbsp;Tuliskan mata kuliah pilihan sebagai mata kuliah pilihan I, mata kuliah pilihan II, dst. (nama-nama mata kuliah pilihan yang dilaksanakan dicantumkan dalam tabel 5.1.3.)</p>
                                    <p>** &nbsp;&nbsp;Menurut rujukan <em>peer group</em> / SK Mendiknas 045/2002 (ps. 3 ayat 2e)</p>
                                    <p>*** Beri tanda &radic; pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) &ge; 20%.</p>
                                    <p>****Beri tanda &radic; pada mata kuliah yang dilengkapi dengan deskripsi, silabus, dan atau SAP. &nbsp;Sediakan dokumen pada saat asesmen lapangan.</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==54) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian513">
                        <input type="hidden" name="id513" id="id513" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir513" id="id_butir513" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan mata kuliah pilihan yang dilaksanakan dalam tiga tahun terakhir, pada tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_513" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no513" id="version_no513" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at513" id="created_at513" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi513">
                        <input type="hidden" name="id_butir513" id="id_butir513" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan mata kuliah pilihan yang dilaksanakan dalam tiga tahun terakhir, pada tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_513" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 250px;" border="1" width="1073" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 38px;">
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Semester</strong></p>
                                    </td>
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Kode MK</strong></p>
                                    </td>
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Nama MK (Pilihan)</strong></p>
                                    </td>
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Bobot sks</strong></p>
                                    </td>
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Bobot Tugas*</strong></p>
                                    </td>
                                    <td style="width: 145.6px; background-color: #c9c9c9; text-align: center; height: 38px;">
                                    <p><strong>Unit/ Jur/ Fak Pengelola</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 12px;">
                                    <td style="width: 145.6px; text-align: center; height: 12px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 12px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 348.8px; text-align: center; height: 12px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 120px; text-align: center; height: 12px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 130.4px; text-align: center; height: 12px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 12px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 145.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 348.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 120px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.4px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 145.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 348.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 120px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.4px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 145.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 101.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 348.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 120px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.4px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39.6px;">
                                    <td style="width: 607.2px; height: 39.6px; text-align: left;" colspan="3">
                                    <p>Total sks</p>
                                    </td>
                                    <td style="width: 120px; text-align: center; height: 39.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.4px; height: 39.6px; background-color: #a6a6a6; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 130.4px; height: 39.6px; background-color: #a6a6a6; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* beri tanda &radic; pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) &ge; 20%.</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==55) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian514">
                        <input type="hidden" name="id514" id="id514" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir514" id="id_butir514" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan substansi praktikum/praktek yang mandiri ataupun yang merupakan bagian dari mata kuliah tertentu, dengan mengikuti format di bawah ini:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_514" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no514" id="version_no514" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at514" id="created_at514" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi514">
                        <input type="hidden" name="id_butir514" id="id_butir514" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan substansi praktikum/praktek yang mandiri ataupun yang merupakan bagian dari mata kuliah tertentu, dengan mengikuti format di bawah ini:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_514" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 217px; width: 1059px;" border="1" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 93px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 254px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama Praktikum/Praktek</strong></p>
                                    </td>
                                    <td style="width: 328px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Isi Praktikum/Praktek</strong></p>
                                    </td>
                                    <td style="width: 352px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Tempat/Lokasi Praktikum/Praktek</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 164px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Judul/Modul</strong></p>
                                    </td>
                                    <td style="width: 164px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jam Pelaksanaan </strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 93px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 254px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 352px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 93px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 254px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 352px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 93px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 254px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 164px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 352px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif (($isiannya==56) || ($isiannya==57)) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian52">
                        <input type="hidden" name="id52" id="id52" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir52" id="id_butir52" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Peninjauan Kurikulum dalam 5 Tahun Terakhir</h2>
                        <h2 class="card-inside-title">Jelaskan mekanisme peninjauan kurikulum dan pihak-pihak yang dilibatkan dalam proses peninjauan tersebut.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_52" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no52" id="version_no52" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at52" id="created_at52" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi52">
                        <input type="hidden" name="id_butir52" id="id_butir52" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Peninjauan Kurikulum dalam 5 Tahun Terakhir</h2>
                        <h2 class="card-inside-title">Jelaskan mekanisme peninjauan kurikulum dan pihak-pihak yang dilibatkan dalam proses peninjauan tersebut.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_52" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 100px; margin-left: auto; margin-right: auto;" border="1" width="1090" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 1080.8px;">&nbsp;</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>Tuliskan hasil peninjauan tersebut, mengikuti format tabel berikut.</p>
                                    <table style="height: 260px;" border="1" width="1081" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No. MK</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama MK</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>MK</strong></p>
                                    <p><strong>Baru/</strong></p>
                                    <p><strong>Lama/Hapus</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Perubahan pada</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Alasan Peninjauan</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Atas Usulan/ Masukan&nbsp; dari</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Berlaku mulai Sem./Th.</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Silabus/SAP</strong></p>
                                    </td>
                                    <td style="width: 76px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Buku Ajar</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 76px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 80.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 180.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 121.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 82.4px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 111.2px; text-align: center;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 180.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 121.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 111.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 180.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 121.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 111.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 80.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 180.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 121.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 82.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 128.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 111.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif (($isiannya==58) || ($isiannya==59)) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian531">
                        <input type="hidden" name="id531" id="id531" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir531" id="id_butir531" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Pelaksanaan Proses Pembelajaran</h2>
                        <h2 class="card-inside-title">Sistem pembelajaran dibangun berdasarkan perencanaan yang relevan dengan tujuan, ranah belajar dan hierarkinya.</h2>
                        <h2 class="card-inside-title">Pembelajaran dilaksanakan menggunakan berbagai strategi dan teknik yang menantang, mendorong mahasiswa untuk berpikir kritis bereksplorasi, berkreasi dan bereksperimen dengan memanfaatkan aneka sumber.</h2>
                        <h2 class="card-inside-title">Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki secara periodik kegiatan perkuliahan (kehadiran dosen dan mahasiswa), penyusunan materi perkuliahan, serta penilaian hasil belajar.</h2>
                        <h2 class="card-inside-title">Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan</h2>
                        <h2 class="card-inside-title">Jelaskan mekanisme penyusunan materi kuliah dan monitoring perkuliahan, antara lain kehadiran dosen dan mahasiswa, serta materi kuliah.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_531" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no531" id="version_no531" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at531" id="created_at531" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi531">
                        <input type="hidden" name="id_butir531" id="id_butir531" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Pelaksanaan Proses Pembelajaran</h2>
                        <h2 class="card-inside-title">Sistem pembelajaran dibangun berdasarkan perencanaan yang relevan dengan tujuan, ranah belajar dan hierarkinya.</h2>
                        <h2 class="card-inside-title">Pembelajaran dilaksanakan menggunakan berbagai strategi dan teknik yang menantang, mendorong mahasiswa untuk berpikir kritis bereksplorasi, berkreasi dan bereksperimen dengan memanfaatkan aneka sumber.</h2>
                        <h2 class="card-inside-title">Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki secara periodik kegiatan perkuliahan (kehadiran dosen dan mahasiswa), penyusunan materi perkuliahan, serta penilaian hasil belajar.</h2>
                        <h2 class="card-inside-title">Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan</h2>
                        <h2 class="card-inside-title">Jelaskan mekanisme penyusunan materi kuliah dan monitoring perkuliahan, antara lain kehadiran dosen dan mahasiswa, serta materi kuliah.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_531" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==60) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian532">
                        <input type="hidden" name="id532" id="id532" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir532" id="id_butir532" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Lampirkan contoh soal ujian dalam 1 tahun terakhir untuk 5 mata kuliah keahlian berikut silabusnya.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_532" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no532" id="version_no532" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at532" id="created_at532" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi532">
                        <input type="hidden" name="id_butir532" id="id_butir532" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Lampirkan contoh soal ujian dalam 1 tahun terakhir untuk 5 mata kuliah keahlian berikut silabusnya.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_532" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif (($isiannya==61) || ($isiannya==62) || ($isiannya==63)) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian541">
                        <input type="hidden" name="id541" id="id541" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir541" id="id_butir541" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sistem Pembimbingan Akademik</h2>
                        <h2 class="card-inside-title">Tuliskan nama dosen pembimbing akademik dan jumlah mahasiswa yang dibimbingnya dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_541" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no541" id="version_no541" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at541" id="created_at541" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi541">
                        <input type="hidden" name="id_butir541" id="id_butir541" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sistem Pembimbingan Akademik</h2>
                        <h2 class="card-inside-title">Tuliskan nama dosen pembimbing akademik dan jumlah mahasiswa yang dibimbingnya dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_541" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <table style="height: 260px;" border="1" width="1075" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Dosen </strong><strong>Pembimbing Akademik</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Mahasiswa Bimbingan</strong></p>
                                    </td>
                                    <td style="width: 65.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Rata-rata Banyaknya Pertemuan/mhs/semester</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 65.6px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 475.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 214.4px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 293.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 65.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 475.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 214.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 293.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 65.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 475.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 214.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 293.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 546.4px; text-align: center;" colspan="2">
                                    <p>Total</p>
                                    </td>
                                    <td style="width: 214.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 293.6px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 1065.6px; text-align: left;" colspan="4">
                                    <p>Rata-rata banyaknya pertemuan per mahasiswa per semester =&nbsp; ... kali.</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==64) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian542">
                        <input type="hidden" name="id542" id="id542" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir542" id="id_butir542" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Jelaskan proses pembimbingan akademik  yang diterapkan pada Program Studi ini dalam hal-hal berikut :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_542" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no542" id="version_no542" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at542" id="created_at542" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi542">
                        <input type="hidden" name="id_butir542" id="id_butir542" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Jelaskan proses pembimbingan akademik  yang diterapkan pada Program Studi ini dalam hal-hal berikut :</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_542" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <table style="height: 324px;" border="1" width="1074" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Hal</strong></p>
                                    </td>
                                    <td style="width: 78.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Penjelasan</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 435.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 435.2px; text-align: left;">
                                    <p>Tujuan pembimbingan</p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 435.2px; text-align: left;">
                                    <p>Pelaksanaan pembimbingan</p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 435.2px; text-align: left;">
                                    <p>Masalah yang dibicarakan dalam pembimbingan</p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>4</p>
                                    </td>
                                    <td style="width: 435.2px; text-align: left;">
                                    <p>Kesulitan dalam pembimbingan dan upaya untuk mengatasinya</p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>5</p>
                                    </td>
                                    <td style="width: 435.2px; text-align: left;">
                                    <p>Manfaat yang diperoleh mahasiswa dari pembimbingan</p>
                                    </td>
                                    <td style="width: 540px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==65) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian551a">
                        <input type="hidden" name="id551a" id="id551a" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir551a" id="id_butir551a" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Pembimbingan Tugas Akhir / Skripsi</h2>
                        <h2 class="card-inside-title">• Ketersediaan panduan pembimbingan tugas akhir (Beri tanda  pada pilihan yang sesuai):</h2>
                        <div class="demo-checkbox">
                                <input type="checkbox" id="ya" class="filled-in" checked />
                                <label for="ya">Ya</label></br>
                                <input type="checkbox" id="tidak" class="filled-in" />
                                <label for="tidak">Tidak</label>
                        </div>
                        <h2 class="card-inside-title">Jika Ya, jelaskan cara sosialisasi dan pelaksanaannya.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_551a" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no551a" id="version_no551a" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at551a" id="created_at551a" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi551a">
                        <input type="hidden" name="id_butir551a" id="id_butir551a" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Pembimbingan Tugas Akhir / Skripsi</h2>
                        <h2 class="card-inside-title">• Ketersediaan panduan pembimbingan tugas akhir (Beri tanda  pada pilihan yang sesuai):</h2>
                        <div class="demo-checkbox">
                                <input type="checkbox" id="ya" class="filled-in" />
                                <label for="ya">Ya</label></br>
                                <input type="checkbox" id="tidak" class="filled-in" />
                                <label for="tidak">Tidak</label>
                        </div>
                        <h2 class="card-inside-title">Jika Ya, jelaskan cara sosialisasi dan pelaksanaannya.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_551a" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==66) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian551b">
                        <input type="hidden" name="id551b" id="id551b" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir551b" id="id_butir551b" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Pembimbingan Tugas Akhir / Skripsi</h2>
                        <h2 class="card-inside-title">Jelaskan pelaksanaan pembimbingan Tugas Akhir atau Skripsi yang diterapkan pada PS ini.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_551b" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no551b" id="version_no551b" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at551b" id="created_at551b" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi551b">
                        <input type="hidden" name="id_butir551b" id="id_butir551b" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Pembimbingan Tugas Akhir / Skripsi</h2>
                        <h2 class="card-inside-title">Jelaskan pelaksanaan pembimbingan Tugas Akhir atau Skripsi yang diterapkan pada PS ini.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_551b" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <ul>
                                    <li>Rata-rata banyaknya mahasiswa per dosen pembimbing tugas akhir (TA) &hellip;&hellip;. mahasiswa/dosen TA.</li>
                                    </ul>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==67) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian551c">
                        <input type="hidden" name="id551c" id="id551c" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir551c" id="id_butir551c" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Pembimbingan Tugas Akhir / Skripsi</h2>
                        <h2 class="card-inside-title">Jelaskan pelaksanaan pembimbingan Tugas Akhir atau Skripsi yang diterapkan pada PS ini.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_551c" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no551c" id="version_no551c" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at551c" id="created_at551c" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi551c">
                        <input type="hidden" name="id_butir551c" id="id_butir551c" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Pembimbingan Tugas Akhir / Skripsi</h2>
                        <h2 class="card-inside-title">Jelaskan pelaksanaan pembimbingan Tugas Akhir atau Skripsi yang diterapkan pada PS ini.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_551c" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <ul>
                                    <li>Rata-rata jumlah pertemuan dosen-mahasiswa untuk menyelesaikan tugas akhir&nbsp;: .... kali mulai dari saat mengambil TA hingga menyelesaikan TA.</li>
                                    </ul>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==68) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian551d">
                        <input type="hidden" name="id551d" id="id551d" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir551d" id="id_butir551d" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Pembimbingan Tugas Akhir / Skripsi</h2>
                        <h2 class="card-inside-title">Jelaskan pelaksanaan pembimbingan Tugas Akhir atau Skripsi yang diterapkan pada PS ini.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_551d" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no551d" id="version_no551d" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at551d" id="created_at551d" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi551d">
                        <input type="hidden" name="id_butir551d" id="id_butir551d" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Pembimbingan Tugas Akhir / Skripsi</h2>
                        <h2 class="card-inside-title">Jelaskan pelaksanaan pembimbingan Tugas Akhir atau Skripsi yang diterapkan pada PS ini.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_551d" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <ul>
                                    <li>Tuliskan nama-nama dosen yang menjadi pembimbing tugas akhir atau skripsi, dan jumlah mahasiswa yang bimbingan dengan mengikuti format tabel berikut:&nbsp;</li>
                                    </ul>
                                    <table style="height: 204px;" border="1" width="1079" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 68px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No</strong></p>
                                    </td>
                                    <td style="width: 68px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Dosen Pembimbing </strong></p>
                                    </td>
                                    <td style="width: 68px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Mahasiswa</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 68px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 627.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 363.2px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 68px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 627.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 363.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 68px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 627.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 363.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 68px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 627.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 363.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==69) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian552">
                        <input type="hidden" name="id552" id="id552" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir552" id="id_butir552" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Rata-rata lama penyelesaian tugas akhir/skripsi pada tiga tahun terakhir </h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_552" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no552" id="version_no552" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at552" id="created_at552" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi552">
                        <input type="hidden" name="id_butir552" id="id_butir552" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Rata-rata lama penyelesaian tugas akhir/skripsi pada tiga tahun terakhir </h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_552" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>Rata-rata lama penyelesaian tugas akhir/skripsi pada tiga tahun terakhir&nbsp;:&nbsp; ... bulan. (Menurut kurikulum tugas akhir direncanakan ... semester).</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==70) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian56">
                        <input type="hidden" name="id56" id="id56" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir56" id="id_butir56" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Upaya Perbaikan Pembelajaran</h2>
                        <h2 class="card-inside-title">Uraikan upaya perbaikan pembelajaran serta hasil yang telah dilakukan dan dicapai dalam tiga tahun terakhir dan hasilnya.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_56" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no56" id="version_no56" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at56" id="created_at56" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi56">
                        <input type="hidden" name="id_butir56" id="id_butir56" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Upaya Perbaikan Pembelajaran</h2>
                        <h2 class="card-inside-title">Uraikan upaya perbaikan pembelajaran serta hasil yang telah dilakukan dan dicapai dalam tiga tahun terakhir dan hasilnya.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_56" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <table style="height: 312px;" border="1" width="1079" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 36px;">
                                    <td style="width: 538.4px; background-color: #c9c9c9; text-align: center; height: 72px;" rowspan="2">
                                    <p><strong>Butir</strong></p>
                                    </td>
                                    <td style="width: 538.4px; background-color: #c9c9c9; text-align: center; height: 36px;" colspan="2">
                                    <p><strong>Upaya Perbaikan</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 538.4px; background-color: #c9c9c9; text-align: center; height: 36px;">
                                    <p><strong>Tindakan</strong></p>
                                    </td>
                                    <td style="width: 538.4px; background-color: #c9c9c9; text-align: center; height: 36px;">
                                    <p><strong>Hasil</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36.6px;">
                                    <td style="width: 538.4px; text-align: center; height: 36.6px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 36.6px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 36.6px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 538.4px; height: 36px; text-align: left;">
                                    <p>Materi</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 37px;">
                                    <td style="width: 538.4px; height: 36px; text-align: left;">
                                    <p>Metode Pembelajaran</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 37px;">
                                    <td style="width: 538.4px; height: 36px; text-align: left;">
                                    <p>Penggunaan Teknologi Pembelajaran</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 37px;">
                                    <td style="width: 538.4px; height: 36px; text-align: left;">
                                    <p>Cara-cara evaluasi</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 37px;">
                                    <td style="width: 538.4px; height: 36px; text-align: left;">
                                    <p>&hellip;..</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 260px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==71) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian571">
                        <input type="hidden" name="id571" id="id571" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir571" id="id_butir571" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Upaya Peningkatan Suasana Akademik</h2>
                        <h2 class="card-inside-title">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut:</h2>
                        <h2 class="card-inside-title">Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik).</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_571" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no571" id="version_no571" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at571" id="created_at571" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi571">
                        <input type="hidden" name="id_butir571" id="id_butir571" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Upaya Peningkatan Suasana Akademik</h2>
                        <h2 class="card-inside-title">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut:</h2>
                        <h2 class="card-inside-title">Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik).</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_571" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==72) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian572">
                        <input type="hidden" name="id572" id="id572" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir572" id="id_butir572" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Upaya Peningkatan Suasana Akademik</h2>
                        <h2 class="card-inside-title">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut:</h2>
                        <h2 class="card-inside-title">Ketersediaan dan jenis prasarana, sarana dan dana yang memungkinkan terciptanya interaksi akademik antara sivitas akademika.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_572" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no572" id="version_no572" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at572" id="created_at572" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi572">
                        <input type="hidden" name="id_butir572" id="id_butir572" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Upaya Peningkatan Suasana Akademik</h2>
                        <h2 class="card-inside-title">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut:</h2>
                        <h2 class="card-inside-title">Ketersediaan dan jenis prasarana, sarana dan dana yang memungkinkan terciptanya interaksi akademik antara sivitas akademika.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_572" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==73) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian573">
                        <input type="hidden" name="id573" id="id573" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir573" id="id_butir573" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Upaya Peningkatan Suasana Akademik</h2>
                        <h2 class="card-inside-title">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut:</h2>
                        <h2 class="card-inside-title">Program dan kegiatan di dalam dan di luar proses pembelajaran, yang dilaksanakan baik di dalam maupun di luar kelas,  untuk menciptakan suasana akademik yang kondusif (misalnya seminar, simposium, lokakarya, bedah buku, penelitian bersama, pengenalan kehidupan kampus, dan temu dosen-mahasiswa-alumni).</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_573" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no573" id="version_no573" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at573" id="created_at573" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi573">
                        <input type="hidden" name="id_butir573" id="id_butir573" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Upaya Peningkatan Suasana Akademik</h2>
                        <h2 class="card-inside-title">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut:</h2>
                        <h2 class="card-inside-title">Program dan kegiatan di dalam dan di luar proses pembelajaran, yang dilaksanakan baik di dalam maupun di luar kelas,  untuk menciptakan suasana akademik yang kondusif (misalnya seminar, simposium, lokakarya, bedah buku, penelitian bersama, pengenalan kehidupan kampus, dan temu dosen-mahasiswa-alumni).</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_573" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==74) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian574">
                        <input type="hidden" name="id574" id="id574" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir574" id="id_butir574" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Upaya Peningkatan Suasana Akademik</h2>
                        <h2 class="card-inside-title">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut:</h2>
                        <h2 class="card-inside-title">Interaksi akademik antara dosen-mahasiswa, antar mahasiswa, serta antar dosen.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_574" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no574" id="version_no574" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at574" id="created_at574" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi574">
                        <input type="hidden" name="id_butir574" id="id_butir574" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Upaya Peningkatan Suasana Akademik</h2>
                        <h2 class="card-inside-title">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut:</h2>
                        <h2 class="card-inside-title">Interaksi akademik antara dosen-mahasiswa, antar mahasiswa, serta antar dosen.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_574" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==75) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian575">
                        <input type="hidden" name="id575" id="id575" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir575" id="id_butir575" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Upaya Peningkatan Suasana Akademik</h2>
                        <h2 class="card-inside-title">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut:</h2>
                        <h2 class="card-inside-title">Pengembangan perilaku kecendekiawanan.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_575" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no575" id="version_no575" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at575" id="created_at575" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi575">
                        <input type="hidden" name="id_butir575" id="id_butir575" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Upaya Peningkatan Suasana Akademik</h2>
                        <h2 class="card-inside-title">Berikan gambaran yang jelas mengenai upaya dan kegiatan untuk menciptakan suasana akademik yang kondusif di lingkungan PS, khususnya mengenai hal-hal berikut:</h2>
                        <h2 class="card-inside-title">Pengembangan perilaku kecendekiawanan.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_575" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==76) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian61">
                        <input type="hidden" name="id61" id="id61" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir61" id="id_butir61" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Pengelolaan Dana</h2>
                        <h2 class="card-inside-title">Keterlibatan aktif program studi harus tercerminkan dalam dokumen tentang proses perencanaan, pengelolaan dan pelaporan serta pertanggungjawaban penggunaan dana kepada pemangku kepentingan melalui mekanisme yang transparan dan akuntabel.</h2>
                        <h2 class="card-inside-title">Jelaskan keterlibatan PS dalam perencanaan anggaran dan pengelolaan dana.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_61" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no61" id="version_no61" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at61" id="created_at61" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi61">
                        <input type="hidden" name="id_butir61" id="id_butir61" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Pengelolaan Dana</h2>
                        <h2 class="card-inside-title">Keterlibatan aktif program studi harus tercerminkan dalam dokumen tentang proses perencanaan, pengelolaan dan pelaporan serta pertanggungjawaban penggunaan dana kepada pemangku kepentingan melalui mekanisme yang transparan dan akuntabel.</h2>
                        <h2 class="card-inside-title">Jelaskan keterlibatan PS dalam perencanaan anggaran dan pengelolaan dana.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_61" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==77) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian621">
                        <input type="hidden" name="id621" id="id621" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir621" id="id_butir621" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Perolehan dan Alokasi Dana</h2>
                        <h2 class="card-inside-title">Tuliskan realisasi perolehan dan alokasi dana (termasuk hibah) dalam juta rupiah termasuk gaji,  selama tiga tahun terakhir, pada tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_621" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no621" id="version_no621" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at621" id="created_at621" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi621">
                        <input type="hidden" name="id_butir621" id="id_butir621" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Perolehan dan Alokasi Dana</h2>
                        <h2 class="card-inside-title">Tuliskan realisasi perolehan dan alokasi dana (termasuk hibah) dalam juta rupiah termasuk gaji,  selama tiga tahun terakhir, pada tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_621" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <table style="height: 657px;" border="1" width="1070" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 16px;">
                                    <td style="width: 201.6px; height: 13px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Sumber Dana</strong></p>
                                    </td>
                                    <td style="width: 201.6px; height: 13px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Dana</strong></p>
                                    </td>
                                    <td style="width: 201.6px; height: 16px; background-color: #c9c9c9; text-align: center;" colspan="3">
                                    <p><strong>Jumlah Dana (Juta Rupiah)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 27.6px;">
                                    <td style="width: 201.6px; height: 27.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-2</strong></p>
                                    </td>
                                    <td style="width: 201.6px; height: 27.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-1</strong></p>
                                    </td>
                                    <td style="width: 201.6px; height: 27.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 201.6px; height: 35px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 201.6px; height: 105px; text-align: left;" rowspan="3">
                                    <p>PT sendiri</p>
                                    </td>
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 201.6px; height: 105px; text-align: left;" rowspan="3">
                                    <p>Yayasan</p>
                                    </td>
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 201.6px; height: 105px; text-align: left;" rowspan="3">
                                    <p>Diknas</p>
                                    </td>
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 201.6px; height: 105px; text-align: left;" rowspan="3">
                                    <p>Sumber lain</p>
                                    </td>
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 310.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 168.8px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 35px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 517.6px; height: 36px; text-align: left;" colspan="2">
                                    <p>Total</p>
                                    </td>
                                    <td style="width: 168.8px; height: 36px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 178.4px; height: 36px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 179.2px; height: 36px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Penggunaan dana:</p>
                                    <table style="height: 410px;" border="1" width="1067" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 15px;">
                                    <td style="width: 89.6px; height: 17.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 89.6px; height: 17.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Penggunaan</strong></p>
                                    </td>
                                    <td style="width: 89.6px; height: 15px; background-color: #c9c9c9; text-align: center;" colspan="3">
                                    <p><strong>Persentase Dana </strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 2.8px;">
                                    <td style="width: 89.6px; height: 2.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-2</strong></p>
                                    </td>
                                    <td style="width: 89.6px; height: 2.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-1</strong></p>
                                    </td>
                                    <td style="width: 89.6px; height: 2.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 317.6px; text-align: center; height: 38px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Pendidikan</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Penelitian</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Pengabdian kepada Masyarakat</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>4</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Investasi prasarana</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>5</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Investasi sarana</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>6</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Investasi SDM</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 89.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 317.6px; height: 38px; text-align: left;">
                                    <p>Lain-lain</p>
                                    </td>
                                    <td style="width: 217.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204.8px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 205.6px; text-align: center; height: 38px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==78) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian622">
                        <input type="hidden" name="id622" id="id622" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir622" id="id_butir622" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan dana untuk kegiatan penelitian pada tiga tahun terakhir yang melibatkan dosen yang bidang keahliannya sesuai dengan program studi, dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_622" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no622" id="version_no622" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at622" id="created_at622" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi622">
                        <input type="hidden" name="id_butir622" id="id_butir622" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan dana untuk kegiatan penelitian pada tiga tahun terakhir yang melibatkan dosen yang bidang keahliannya sesuai dengan program studi, dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_622" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <table style="height: 272px;" border="1" width="1078" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tahun</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Judul Penelitian</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Sumber dan Jenis Dana</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Dana*</strong></p>
                                    <p><strong>(dalam Juta Rupiah)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 250.4px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 244px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 250.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 250.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 250.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 819.2px; text-align: center;" colspan="3">
                                    <p><strong>Jumlah</strong></p>
                                    </td>
                                    <td style="width: 244px; text-align: center;">
                                    <p><strong>&nbsp;</strong></p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;* Di luar dana penelitian/penulisan skripsi, tesis, dan disertasi sebagai bagian dari studi lanjut.</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==79) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian623">
                        <input type="hidden" name="id623" id="id623" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir623" id="id_butir623" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan dana yang diperoleh dari/untuk kegiatan pelayanan/pengabdian kepada masyarakat pada tiga tahun terakhir dengan mengikuti format tabel berikut: </h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_623" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no623" id="version_no623" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at623" id="created_at623" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi623">
                        <input type="hidden" name="id_butir623" id="id_butir623" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan dana yang diperoleh dari/untuk kegiatan pelayanan/pengabdian kepada masyarakat pada tiga tahun terakhir dengan mengikuti format tabel berikut: </h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_623" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <table style="height: 275px;" border="1" width="1077" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 34px;">
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center; height: 34px;">
                                    <p><strong>Tahun</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center; height: 34px;">
                                    <p><strong>Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center; height: 34px;">
                                    <p><strong>Sumber dan Jenis Dana</strong></p>
                                    </td>
                                    <td style="width: 216.8px; background-color: #c9c9c9; text-align: center; height: 34px;">
                                    <p><strong>Jumlah Dana</strong></p>
                                    <p><strong>(dalam Juta Rupiah)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 38px;">
                                    <td style="width: 216.8px; text-align: center; height: 38px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center; height: 38px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 249.6px; text-align: center; height: 38px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 244px; text-align: center; height: 38px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 216.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 249.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 216.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 249.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 216.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340.8px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 249.6px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 244px; text-align: center; height: 39px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 39px;">
                                    <td style="width: 818.4px; text-align: center; height: 39px;" colspan="3">
                                    <p><strong>Jumlah</strong></p>
                                    </td>
                                    <td style="width: 244px; text-align: center; height: 39px;">
                                    <p><strong>&nbsp;</strong></p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==80) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian631">
                        <input type="hidden" name="id631" id="id631" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir631" id="id_butir631" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Prasarana</h2>
                        <h2 class="card-inside-title">Tuliskan data ruang kerja dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_631" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no631" id="version_no631" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at631" id="created_at631" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi631">
                        <input type="hidden" name="id_butir631" id="id_butir631" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Prasarana</h2>
                        <h2 class="card-inside-title">Tuliskan data ruang kerja dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_631" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <table style="height: 316px;" border="1" width="964" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 44px;">
                                    <td style="width: 528.8px; height: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Ruang Kerja Dosen</strong></p>
                                    </td>
                                    <td style="width: 528.8px; height: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Ruang</strong></p>
                                    </td>
                                    <td style="width: 528.8px; height: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Luas (m<sup>2</sup>)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42px;">
                                    <td style="width: 528.8px; text-align: center; height: 42px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 207.2px; text-align: center; height: 42px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42px;">
                                    <td style="width: 528.8px; height: 42px; text-align: left;">
                                    <p>Satu ruang untuk lebih dari 4 dosen</p>
                                    </td>
                                    <td style="width: 207.2px; text-align: center; height: 42px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42px;">
                                    <p>(a)</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42px;">
                                    <td style="width: 528.8px; height: 42px; text-align: left;">
                                    <p>Satu ruang untuk 3 - 4 dosen</p>
                                    </td>
                                    <td style="width: 207.2px; text-align: center; height: 42px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42px;">
                                    <p>(b)</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42px;">
                                    <td style="width: 528.8px; height: 42px; text-align: left;">
                                    <p>Satu ruang untuk 2 dosen</p>
                                    </td>
                                    <td style="width: 207.2px; text-align: center; height: 42px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42px;">
                                    <p>(c)</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42.6px;">
                                    <td style="width: 528.8px; height: 42.6px; text-align: left;">
                                    <p>Satu ruang untuk 1 dosen (bukan pejabat struktural)</p>
                                    </td>
                                    <td style="width: 207.2px; text-align: center; height: 42.6px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42.6px;">
                                    <p>(d)</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 42px;">
                                    <td style="width: 528.8px; height: 42px; text-align: left;">
                                    <p>TOTAL</p>
                                    </td>
                                    <td style="width: 207.2px; height: 42px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 208px; text-align: center; height: 42px;">
                                    <p>(t)</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==81) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian632">
                        <input type="hidden" name="id632" id="id632" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir632" id="id_butir632" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan data prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. kecuali  ruang dosen) yang dipergunakan PS dalam proses belajar mengajar dengan  mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_632" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no632" id="version_no632" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at632" id="created_at632" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi632">
                        <input type="hidden" name="id_butir632" id="id_butir632" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan data prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. kecuali  ruang dosen) yang dipergunakan PS dalam proses belajar mengajar dengan  mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_632" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <table style="height: 256px;" border="1" width="1077" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Prasarana</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jumlah Unit</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Total Luas (m<sup>2</sup>)</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kepemilikan</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kondisi</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Utilisasi (Jam/minggu)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SD</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SW</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Terawat</strong></p>
                                    </td>
                                    <td style="width: 67.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tidak Terawat</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 67.2px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 176px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 92.8px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 104px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 67.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 176px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 67.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 176px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 67.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 176px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 78.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 104px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Keterangan:</p>
                                    <p>SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==82) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian633">
                        <input type="hidden" name="id633" id="id633" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir633" id="id_butir633" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan data prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik) dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_633" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no633" id="version_no633" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at633" id="created_at633" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi633">
                        <input type="hidden" name="id_butir633" id="id_butir633" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan data prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik) dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_633" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>&nbsp;</p>
                                    <table style="height: 261px;" border="1" width="1072" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Prasarana Penunjang</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jumlah Unit</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Total Luas (m<sup>2</sup>)</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kepemilikan</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kondisi</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Unit Pengelola</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SD</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SW</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Terawat</strong></p>
                                    </td>
                                    <td style="width: 75.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tidak Terawat</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 75.2px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 92px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 77.6px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 75.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 77.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 75.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 77.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 75.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 216.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 92px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 77.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 103.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Keterangan:</p>
                                    <p>SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama.</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif (($isiannya==83) || ($isiannya==84) || ($isiannya==85) || ($isiannya==86) || ($isiannya==87)) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian641">
                        <input type="hidden" name="id641" id="id641" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir641" id="id_butir641" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sarana Pelaksanaan Kegiatan Akademik</h2>
                        <h2 class="card-inside-title">Pustaka (buku teks, karya ilmiah, dan jurnal; termasuk juga dalam bentuk CD-ROM dan media lainnya)</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_641" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no641" id="version_no641" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at641" id="created_at641" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi641">
                        <input type="hidden" name="id_butir641" id="id_butir641" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sarana Pelaksanaan Kegiatan Akademik</h2>
                        <h2 class="card-inside-title">Pustaka (buku teks, karya ilmiah, dan jurnal; termasuk juga dalam bentuk CD-ROM dan media lainnya)</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_641" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>Tuliskan rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS dengan mengikuti format tabel 1 berikut:</p>
                                    <p>Tabel 1. Rekapitulasi jumlah ketersediaan pustaka yang relevan dengan bidang PS</p>
                                    <table style="height: 354px;" border="1" width="1087" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 496.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jenis Pustaka</strong></p>
                                    </td>
                                    <td style="width: 496.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah Judul</strong></p>
                                    </td>
                                    <td style="width: 496.8px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah <em>Copy</em></strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Buku teks</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Jurnal nasional yang terakreditasi</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Jurnal internasional</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Prosiding</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; background-color: #c9c9c9; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Skripsi/Tesis</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: left;">
                                    <p>Disertasi</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 496.8px; text-align: center;">
                                    <p><strong>TOTAL</strong></p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 284.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Isikan jurnal/prosiding seminar yang tersedia/yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir dengan mengikuti format tabel 2 berikut:</p>
                                    <p>Tabel 2. &nbsp;Jurnal yang tersedia/yang diterima secara teratur (lengkap), terbitan 3 tahun terakhir</p>
                                    <table style="height: 318px;" border="1" width="1084" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 264px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jenis</strong></p>
                                    </td>
                                    <td style="width: 264px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nama Jurnal</strong></p>
                                    </td>
                                    <td style="width: 264px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Rincian Tahun dan Nomor</strong></p>
                                    </td>
                                    <td style="width: 264px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Jumlah</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 264px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 220.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;" rowspan="3">
                                    <p>Jurnal Terakreditasi DIKTI *</p>
                                    </td>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>1.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>2.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>Dst.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;" rowspan="3">
                                    <p>Jurnal Internasional *</p>
                                    </td>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>1.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>2.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 220.8px; text-align: left;">
                                    <p>Dst.</p>
                                    </td>
                                    <td style="width: 378.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan * = termasuk <em>e-journal</em>.</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==88) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian642">
                        <input type="hidden" name="id642" id="id642" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir642" id="id_butir642" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Sebutkan sumber-sumber pustaka di lembaga lain (lembaga perpustakaan/ sumber dari internet beserta  alamat website) yang biasa diakses/dimanfaatkan oleh dosen dan mahasiswa program studi ini.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_642" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no642" id="version_no642" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at642" id="created_at642" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi642">
                        <input type="hidden" name="id_butir642" id="id_butir642" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Sebutkan sumber-sumber pustaka di lembaga lain (lembaga perpustakaan/ sumber dari internet beserta  alamat website) yang biasa diakses/dimanfaatkan oleh dosen dan mahasiswa program studi ini.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_642" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <ol>
                                    <li>...</li>
                                    <li>...</li>
                                    <li>...</li>
                                    <li>dst</li>
                                    </ol>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==89) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian643">
                        <input type="hidden" name="id643" id="id643" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir643" id="id_butir643" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan peralatan utama yang digunakan di laboratorium (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/balai kesehatan, green house, lahan untuk pertanian, dan sejenisnya) yang dipergunakan dalam proses pembelajaran di jurusan/fakultas dengan  mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_643" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no643" id="version_no643" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at643" id="created_at643" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi643">
                        <input type="hidden" name="id_butir643" id="id_butir643" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan peralatan utama yang digunakan di laboratorium (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/balai kesehatan, green house, lahan untuk pertanian, dan sejenisnya) yang dipergunakan dalam proses pembelajaran di jurusan/fakultas dengan  mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_643" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 626px;" border="1" width="1087" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama Laboratorium</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Peralatan Utama</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jumlah Unit</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kepemilikan</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kondisi</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Rata-rata Waktu Penggunaan (jam/minggu)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SD</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>SW</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Terawat</strong></p>
                                    </td>
                                    <td style="width: 44px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Tidak Terawat</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p><strong>(9)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 44px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 200.8px; text-align: center;" rowspan="3">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 224.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 112.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 76.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 87.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 123.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Keterangan:</p>
                                    <p>SD = Milik PT/fakultas/jurusan sendiri; SW = Sewa/Kontrak/Kerjasama/Hak Pakai.</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==90) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian651">
                        <input type="hidden" name="id651" id="id651" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir651" id="id_butir651" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Sistem Informasi</h2>
                        <h2 class="card-inside-title">Jelaskan sistem informasi dan fasilitas yang digunakan oleh program studi untuk proses pembelajaran (hardware, software, e-learning, perpustakaan, dll.).</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_651" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no651" id="version_no651" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at651" id="created_at651" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi651">
                        <input type="hidden" name="id_butir651" id="id_butir651" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Sistem Informasi</h2>
                        <h2 class="card-inside-title">Jelaskan sistem informasi dan fasilitas yang digunakan oleh program studi untuk proses pembelajaran (hardware, software, e-learning, perpustakaan, dll.).</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_651" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==91) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian652">
                        <input type="hidden" name="id652" id="id652" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir652" id="id_butir652" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Beri tanda √ pada kolom yang sesuai (hanya satu kolom) dengan aksesibilitas tiap jenis data, dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_652" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no652" id="version_no652" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at652" id="created_at652" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi652">
                        <input type="hidden" name="id_butir652" id="id_butir652" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Beri tanda √ pada kolom yang sesuai (hanya satu kolom) dengan aksesibilitas tiap jenis data, dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_652" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 650px;" border="1" width="1085" cellspacing="0" cellpadding="0">
                                    <thead>
                                    <tr>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis Data</strong></p>
                                    </td>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;" colspan="4">
                                    <p><strong>Sistem Pengelolaan Data</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Secara Manual</strong></p>
                                    </td>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Dengan Komputer Tanpa Jaringan</strong></p>
                                    </td>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Dengan Komputer Jaringan Lokal (LAN)</strong></p>
                                    </td>
                                    <td style="width: 84px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Dengan Komputer Jaringan Luas (WAN)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 336.8px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Mahasiswa</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Kartu Rencana Studi (KRS)</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Jadwal mata kuliah</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>4</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Nilai mata kuliah</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>5</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Transkrip akademik</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>6</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Lulusan</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>7</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Dosen</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>8</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Pegawai</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>9</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Keuangan</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>10</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Inventaris</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 84px; text-align: center;">
                                    <p>11</p>
                                    </td>
                                    <td style="width: 336.8px; text-align: left;">
                                    <p>Perpustakaan</p>
                                    </td>
                                    <td style="width: 152.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 157.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 158.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==92) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian711">
                        <input type="hidden" name="id711" id="id711" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir711" id="id_butir711" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS</h2>
                        <h2 class="card-inside-title">Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_711" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no711" id="version_no711" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at711" id="created_at711" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi711">
                        <input type="hidden" name="id_butir711" id="id_butir711" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS</h2>
                        <h2 class="card-inside-title">Tuliskan jumlah judul penelitian* yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS selama tiga tahun terakhir dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_711" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 287px;" border="1" width="1082" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 418.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Sumber Pembiayaan</strong></p>
                                    </td>
                                    <td style="width: 418.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-2</strong></p>
                                    </td>
                                    <td style="width: 418.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS-1</strong></p>
                                    </td>
                                    <td style="width: 418.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>TS</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: left;">
                                    <p>Pembiayaan sendiri oleh peneliti</p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: left;">
                                    <p>PT yang bersangkutan</p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: left;">
                                    <p>Depdiknas</p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: left;">
                                    <p>Institusi dalam negeri di luar Depdiknas</p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 418.4px; text-align: left;">
                                    <p>Institusi luar negeri</p>
                                    </td>
                                    <td style="width: 212px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 196px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 229.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan: (*) sediakan data pendukung pada saat asesmen lapangan</p>
                                    <p>&nbsp;</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==93) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian712">
                        <input type="hidden" name="id712" id="id712" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir712" id="id_butir712" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?</h2>
                        <div class="demo-checkbox">
                                <input type="checkbox" id="tidakada" class="filled-in" />
                                <label for="tidakada">Tidak Ada</label></br>
                                <input type="checkbox" id="ada" class="filled-in" checked />
                                <label for="ada">Ada</label>
                        </div>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_712" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no712" id="version_no712" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at712" id="created_at712" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi712">
                        <input type="hidden" name="id_butir712" id="id_butir712" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?</h2>
                        <div class="demo-checkbox">
                                <input type="checkbox" id="tidakada" class="filled-in" />
                                <label for="tidakada">Tidak Ada</label></br>
                                <input type="checkbox" id="ada" class="filled-in" />
                                <label for="ada">Ada</label>
                        </div>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_712" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <p>Jika ada, banyaknya mahasiswa PS yang ikut serta dalam penelitian dosen adalah&nbsp; ... orang, dari ... mahasiswa yang melakukan tugas akhir melalui skripsi.</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==94) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian713">
                        <input type="hidden" name="id713" id="id713" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir713" id="id_butir713" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_713" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no713" id="version_no713" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at713" id="created_at713" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi713">
                        <input type="hidden" name="id_butir713" id="id_butir713" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan judul artikel ilmiah/karya ilmiah/karya seni/buku yang dihasilkan selama tiga tahun terakhir oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_713" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 281px;" border="1" width="1080" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Judul</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama-nama Dosen</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Dihasilkan/ Dipublikasikan pada</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Tahun</strong></p>
                                    <p><strong>Penyajian/</strong></p>
                                    <p><strong>Publikasi</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;" colspan="3">
                                    <p><strong>Tingkat* </strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Lokal</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Nasio-nal</strong></p>
                                    </td>
                                    <td style="width: 58.4px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Interna-sional</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 58.4px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 163.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 172.8px; text-align: center;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 201.6px; text-align: center;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 135.2px; text-align: center;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p><strong>(7)</strong></p>
                                    </td>
                                    <td style="width: 107.2px; text-align: center;">
                                    <p><strong>(8)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 58.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 163.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 172.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 201.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 135.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 58.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 163.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 172.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 201.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 135.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 58.4px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 163.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 172.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 201.6px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 135.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 107.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 753.6px; text-align: center;" colspan="5">
                                    <p>Jumlah</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>n<sub>c</sub>=</p>
                                    </td>
                                    <td style="width: 96.8px; text-align: center;">
                                    <p>n<sub>b</sub>=</p>
                                    </td>
                                    <td style="width: 107.2px; text-align: center;">
                                    <p>n<sub>a</sub>=</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan: * = Tuliskan banyaknya dosen pada sel yang sesuai</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==95) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian714">
                        <input type="hidden" name="id714" id="id714" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir714" id="id_butir714" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_714" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no714" id="version_no714" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at714" id="created_at714" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi714">
                        <input type="hidden" name="id_butir714" id="id_butir714" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_714" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 182px;" border="1" width="1098" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                    <td style="width: 164px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 164px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Karya*</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 164px; text-align: center;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 919.2px; text-align: center;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 164px; text-align: center;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 919.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 164px; text-align: center;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 919.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 164px; text-align: center;">
                                    <p>Dst.</p>
                                    </td>
                                    <td style="width: 919.2px; text-align: center;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>* Lampirkan surat paten HaKI atau keterangan sejenis.</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==96) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian721">
                        <input type="hidden" name="id721" id="id721" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir721" id="id_butir721" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PkM)</h2>
                        <h2 class="card-inside-title">Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_721" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no721" id="version_no721" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at721" id="created_at721" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi721">
                        <input type="hidden" name="id_butir721" id="id_butir721" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PkM)</h2>
                        <h2 class="card-inside-title">Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_721" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 258px;" border="1" width="1077" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 22px;">
                                    <td style="width: 460px; background-color: #c9c9c9; text-align: center; height: 22px;">
                                    <p><strong>Sumber Dana Kegiatan Pelayanan/Pengabdian kepada Masyarakat</strong></p>
                                    </td>
                                    <td style="width: 460px; background-color: #c9c9c9; text-align: center; height: 22px;">
                                    <p><strong>TS-2</strong></p>
                                    </td>
                                    <td style="width: 460px; background-color: #c9c9c9; text-align: center; height: 22px;">
                                    <p><strong>TS-1</strong></p>
                                    </td>
                                    <td style="width: 460px; background-color: #c9c9c9; text-align: center; height: 22px;">
                                    <p><strong>TS</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 460px; text-align: center; height: 35px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 460px; text-align: left; height: 35px;">
                                    <p>Pembiayaan sendiri oleh dosen</p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35.8px;">
                                    <td style="width: 460px; text-align: left; height: 35.8px;">
                                    <p>PT yang bersangkutan</p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35.8px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35.8px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35.8px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 460px; text-align: left; height: 35px;">
                                    <p>Depdiknas</p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 460px; text-align: left; height: 35px;">
                                    <p>Institusi dalam negeri di luar Depdiknas</p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 460px; text-align: left; height: 35px;">
                                    <p>Institusi luar negeri</p>
                                    </td>
                                    <td style="width: 192px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 189.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 209.6px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan: (*) Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==97) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian722">
                        <input type="hidden" name="id722" id="id722" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir722" id="id_butir722" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?</h2>
                        <div class="demo-checkbox">
                                <input type="checkbox" id="tidakada" class="filled-in" />
                                <label for="tidakada">Tidak Ada</label></br>
                                <input type="checkbox" id="ada" class="filled-in" checked />
                                <label for="ada">Ada</label>
                        </div>
                        <h2 class="card-inside-title">Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_722" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no722" id="version_no722" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at722" id="created_at722" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi722">
                        <input type="hidden" name="id_butir722" id="id_butir722" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir?</h2>
                        <div class="demo-checkbox">
                                <input type="checkbox" id="tidakada" class="filled-in" />
                                <label for="tidakada">Tidak Ada</label></br>
                                <input type="checkbox" id="ada" class="filled-in" />
                                <label for="ada">Ada</label>
                        </div>
                        <h2 class="card-inside-title">Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam kegiatan pelayanan/pengabdian kepada masyarakat.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_722" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==98) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian731">
                        <input type="hidden" name="id731" id="id731" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir731" id="id_butir731" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <h2 class="card-inside-title">Kegiatan Kerjasama dengan Instansi Lain </h2>
                        <h2 class="card-inside-title">Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_731" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no731" id="version_no731" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at731" id="created_at731" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi731">
                        <input type="hidden" name="id_butir731" id="id_butir731" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Kegiatan Kerjasama dengan Instansi Lain </h2>
                        <h2 class="card-inside-title">Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_731" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 296px;" border="1" width="1083" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 40px;">
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama Instansi</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis</strong></p>
                                    <p><strong>Kegiatan</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kurun Waktu </strong></p>
                                    <p><strong>Kerja Sama</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Manfaat yang Telah Diperoleh</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Mulai</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33.6px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Berakhir</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 68.8px; text-align: center; height: 36px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 333.6px; text-align: center; height: 36px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 68.8px; text-align: center; height: 36px;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 333.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 68.8px; text-align: center; height: 36px;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 333.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 36px;">
                                    <td style="width: 68.8px; text-align: center; height: 36px;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 333.6px; text-align: center; height: 36px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 37px;">
                                    <td style="width: 68.8px; text-align: center; height: 37px;">
                                    <p>dst.</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 117.6px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 333.6px; text-align: center; height: 37px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan&nbsp;: (*) dokumen pendukung disediakan pada saat asesmen lapangan</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }elseif ($isiannya==99) {
                            if (count($dataisian)>0) {
                            for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/updateisian732">
                        <input type="hidden" name="id732" id="id732" value="<?php echo $dataisian[$i]['id'] ?>" />
                        <input type="hidden" name="id_butir732" id="id_butir732" value="<?php echo $dataisian[$i]['id_butir'] ?>" />
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Version Number : <a type="button" data-color="orange" class="btn bg-orange waves-effect btn-xs" data-toggle="modal" data-target="#viewVersion" data-placement="top" title="View Version" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><?php echo $dataisian[$i]['version_no'] ?></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Lihat Buku : <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id_butir']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a></h2>
                        </div>
                        <div class="col-md-4">
                            <h2 class="card-inside-title">Delete Isian Butir : <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id_butir']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian1kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a></h2>
                        </div>
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_732" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."><?php echo $dataisian[$i]['kolom1'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="version_no732" id="version_no732" value="<?php echo $dataisian[$i]['version_no'] ?>">
                        <input type="hidden" name="created_at732" id="created_at732" value="<?php echo $dataisian[$i]['updated_at'] ?>">
                        <button type="submit" class="btn btn-primary waves-effect">UPDATE</button>
                        </form>
                        <?php }
                                }else{
                            ?>
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi732">
                        <input type="hidden" name="id_butir732" id="id_butir732" value="<?php echo $isiannya; ?>" />
                        <!-- <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2> -->
                        <h2 class="card-inside-title">Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan program studi/jurusan dalam tiga tahun terakhir.</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_732" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want...">
                                    <table style="height: 275px;" border="1" width="1079" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr style="height: 33px;">
                                    <td style="width: 68.8px; height: 14.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>No.</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 14.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Nama Instansi</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 14.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Jenis</strong></p>
                                    <p><strong>Kegiatan</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 33px; background-color: #c9c9c9; text-align: center;" colspan="2">
                                    <p><strong>Kurun Waktu </strong></p>
                                    <p><strong>Kerja Sama</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 14.8px; background-color: #c9c9c9; text-align: center;" rowspan="2">
                                    <p><strong>Manfaat yang Telah Diperoleh</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 20.2px;">
                                    <td style="width: 68.8px; height: 20.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Mulai</strong></p>
                                    </td>
                                    <td style="width: 68.8px; height: 20.2px; background-color: #c9c9c9; text-align: center;">
                                    <p><strong>Berakhir</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 68.8px; text-align: center; height: 35px;">
                                    <p><strong>(1)</strong></p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center; height: 35px;">
                                    <p><strong>(2)</strong></p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 35px;">
                                    <p><strong>(3)</strong></p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p><strong>(4)</strong></p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p><strong>(5)</strong></p>
                                    </td>
                                    <td style="width: 340px; text-align: center; height: 35px;">
                                    <p><strong>(6)</strong></p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 68.8px; text-align: center; height: 35px;">
                                    <p>1</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 68.8px; text-align: center; height: 35px;">
                                    <p>2</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 68.8px; text-align: center; height: 35px;">
                                    <p>3</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    <tr style="height: 35px;">
                                    <td style="width: 68.8px; text-align: center; height: 35px;">
                                    <p>dst.</p>
                                    </td>
                                    <td style="width: 195.2px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 204px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 116.8px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    <td style="width: 340px; text-align: center; height: 35px;">
                                    <p>&nbsp;</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <p>Catatan&nbsp;: (*) dokumen pendukung disediakan pada saat asesmen lapangan</p>
                                            </textarea>
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
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#dokumen11a" data-placement="top" title="Lihat" href="javascript:void(0)" data-whatever="<?php echo $datadokumen[$i]['id']; ?>"><i class="material-icons">pageview</i></a>&nbsp;
                                            <a id="del" onclick="deledok(<?php echo $datadokumen[$i]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroy/'.$datadokumen[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $datadokumen[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a>
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
                            <form action="<?php echo base_url()?>C_isian/dokumen11" id="frmFileUpload" class="dropzone form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_butir11" id="id_butir11" value="<?php echo $this->uri->segment(2, 0); ?>" />
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

        <!-- Modal Dokumen Pendukung -->
            <div class="modal fade" id="dokumen11a" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
            <?php
                for($i=0;$i<count($datadokumen);$i++){
            ?>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Dokumen <?php echo $datadokumen[$i]['nama'] ?></h4>
                        </div>
                        <div class="modal-body">
                            <div>
                                <embed src="<?php echo base_url();?>uploads/dokumen/<?php echo $datadokumen[$i]['filename'] ?>" type='application/pdf' width='100%' height='700px'/>
                            </div>
                        </div>
            <?php } ?>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button> -->
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Tutup modal dokumen pendukung -->

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

    function reloadaja(){
        location.reload();
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

  function deledok(x){
    var butir = "<?php echo $this->uri->segment(2, 0)?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_isian/destroydok/"+x+"/"+butir;
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
    if ((borang==1)) {
        var delete_url = "<?php echo base_url(); ?>index.php/C_isian/destroyisian4kolom/"+x+"/"+borang;
    } else if ((borang==2) || (borang==3) || (borang==4) || (borang==5) || (borang==6) || (borang==7) || (borang==24) || (borang==25) || (borang==26) || (borang==27) || (borang==28)){
        var delete_url = "<?php echo base_url(); ?>index.php/C_isian/destroyisian1kolom/"+x+"/"+borang;
    } else if (borang==8){
        var delete_url = "<?php echo base_url(); ?>index.php/C_isian/destroyisian12kolom/"+x+"/"+borang;
    } else if (borang==9){
        var delete_url = "<?php echo base_url(); ?>index.php/C_isian/destroyisian5kolom/"+x+"/"+borang;
    }else if(borang==15){
        var delete_url = "<?php echo base_url(); ?>index.php/C_isian/destroyisian4kolomsatupersatu/"+x+"/"+borang;
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
