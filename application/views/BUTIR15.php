elseif ($isiannya==15) {
                            // if (count($dataisian)>0) {
                            // for($i=0;$i<count($dataisian);$i++){
                            ?>
                        <!-- <form method="POST" action="<?php echo base_url()?>C_isian/updateisian313">
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
                        <h2 class="card-inside-title">Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang pendidikan, penelitian, pelayanan/pengabdian kepada masyarakat&nbsp;
                        <button type="button" onclick="info313()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
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
                        </form> -->
                        <?php 
                                // }
                                // }else{
                            ?>
                        <!-- Buat Table -->

                        <table id="borang" class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Waktu Penyelenggaraan</th>
                                    <th>Tingkat</th>
                                    <th>Prestasi yang Dicapai</th>
                                    <th width="5%">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Waktu Penyelenggaraan</th>
                                    <th>Tingkat</th>
                                    <th>Prestasi yang Dicapai</th>
                                    <th width="5%">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    // foreach ($dataisian as $key) {
                                    for($i=0;$i<count($dataisian);$i++){
                                 ?>
                                <tr>
                                    <td><?php echo $i+1 ?> </td>
                                    <td><?php echo $dataisian[$i]['kolom1'] ?> </td>
                                    <td><?php echo $dataisian[$i]['kolom2'] ?> </td>
                                    <td><?php echo $dataisian[$i]['kolom3'] ?> </td>
                                    <td><?php echo $dataisian[$i]['kolom4'] ?> </td>
                                    <td>
                                        <div class="js-sweetalert">
                                            <!-- <a type="button" data-color="indigo" class="btn bg-indigo waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Isian" href="<?php echo base_url();?>index.php/dataisian/<?php echo $dataisian[$i]['id']; ?>" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">text_format</i></a>&nbsp; -->
                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Upload" href="<?php echo base_url();?>index.php/isian/<?php echo $dataisian[$i]['id']; ?>" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">file_upload</i></a>&nbsp; -->
                                            <!-- <a type="button" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="View Book" href="<?php echo base_url();?>viewbookbutir/<?php echo $dataisian[$i]['id']; ?>" data-whatever="<?php echo $dataisian[$i]['id_butir']; ?>"><i class="material-icons">book</i></a>&nbsp;
                                            <a type="button" data-color="light-blue" class="btn bg-light-blue waves-effect btn-xs" data-toggle="modal" data-target="#updateIsian1" data-placement="top" title="Edit" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">edit</i></a>&nbsp; -->
                                            <a id="del" onclick="deleisi(<?php echo $dataisian[$i]['id']; ?>)" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-url="<?php echo site_url('C_isian/destroyisian4kolom/'.$dataisian[$i]['id']); ?>" data-placement="top" title="Delete" href="javascript:void(0)" data-whatever="<?php echo $dataisian[$i]['id']; ?>"><i class="material-icons">delete_forever</i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <!-- tutup table -->
                        <form method="POST" action="<?php echo base_url()?>C_isian/ngisi313">
                        <input type="hidden" name="id_butir313" id="id_butir313" value="<?php echo $isiannya; ?>" />
                        <h2 class="card-inside-title">Penghargaan atas prestasi mahasiswa di bidang nalar, bakat dan minat&nbsp;
                        <button type="button" onclick="info313()" data-color="green" class="btn bg-green waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Info" href="javascript:void(0)"><i class="material-icons">info_outline</i></button></h2>
                        <h2 class="card-inside-title">Nama Kegiatan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_313" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Waktu Penyelenggaraan</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom2_313" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Tingkat</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <!-- <div class="form-line">
                                            <textarea name="kolom3_313" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div> -->
                                        <select class="form-control show-tick" name="kolom3_313">
                                            <option value="">-- Please select --</option>
                                            <option value="lokal">Lokal/Wilayah</option>
                                            <option value="nasional">Nasional</option>
                                            <option value="internasional">Internasional</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <h2 class="card-inside-title">Prestasi yang Dicapai</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom4_313" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                // }
                        }