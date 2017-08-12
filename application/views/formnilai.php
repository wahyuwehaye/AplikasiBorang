<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-5">
            <h2>
                FORM PENILAIAN BORANG
                <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                <small><?php echo ucfirst($buku[0]['jenis'])." ".$buku[0]['fakpro']." - ".$buku[0]['tahun']." - Buku : ".$buku[0]['buku']; ?></small>
            </h2>
            </div>
            <div class="col-sm-7">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li><a href="<?php echo base_url();?>penilaian"><i class="material-icons">assignment_turned_in</i> Penilaian</a></li>
                <li class="active"><i class="material-icons">book</i> Form Penilaian</li>
            </ol>
            </div>
        </div>

            <!-- Hover Zoom Effect -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box-2 bg-amber hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">mode_edit</i>
                        </div>
                        <div class="content">
                            <div class="text">BORANG PROGRAM STUDI</div>
                            <div class="number">YANG DI ISI HANYA SEL YANG BERWARNA KUNING</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->
            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">NO.</th>
                                        <th width="5%">BUTIR</th>
                                        <th colspan="2">KETERANGAN</th>
                                        <th>NILAI</th>
                                        <th></th>
                                        <th>INFORMASI DARI BORANG</th>
                                    </tr>
                                </thead>
            <!-- BUTIR 1.1.a -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="7" scope="row">1</th>
                                        <td width="5%" rowspan="7"><?php echo $butir[97]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[97]['bakumutu'] ?></td>
                                        <td></td>
                                        <td></td>
                                        <td width="25%" rowspan="7"><textarea rows="16" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kejelasan (1 - 4) </td>
                                        <td width="10%"><input type="text" name="11a1" id="11a1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kerealistikan (1 - 4)</td>
                                        <td width="10%"><input type="text" name="11a2" id="11a2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor keterkaitan (1 - 4)</td>
                                        <td width="10%"><input type="text" name="11a3" id="11a3" placeholder="4,00" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor keterlibatan pemangku kepentingan (1 - 4)</td>
                                        <td width="10%"><input type="text" name="11a4" id="11a4" placeholder="4,00" onkeyup="cekjumlah11a()" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor akhir</td>
                                        <td width="10%"><div id="skorakhir11a"><input type="text" name="11askor" id="11askor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai11a"><input type="text" name="11anilai" id="11anilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 1.1.b -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="5" scope="row">2</th>
                                        <td width="5%" rowspan="5"><?php echo $butir[96]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[96]['bakumutu'] ?></td>
                                        <td></td>
                                        <td></td>
                                        <td width="25%" rowspan="5"><textarea rows="12" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kejelasan tahapan waktu dan kerealistikan (1 - 4)</td>
                                        <td width="10%"><input type="text" name="11b1" id="11b1" placeholder="4,00" style="background: yellow;" class="form-control no-resize" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor kelengkapan dokumen (1 - 4)</td>
                                        <td width="10%"><input type="text" name="11b2" id="11b2" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah11b()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Skor akhir</td>
                                        <td width="10%"><div id="skorakhir11b"><input type="text" name="11bskor" id="11bskor" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai11b"><input type="text" name="11bnilai" id="11bnilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
            <!-- BUTIR 1.2 -->
                                <tbody>
                                    <tr>
                                        <th width="5%" rowspan="6" scope="row">3</th>
                                        <td width="5%" rowspan="6"><?php echo $butir[95]['butir'] ?></td>
                                        <td colspan="2"><?php echo $butir[95]['bakumutu'] ?></td>
                                        <td width="10%"><input type="text" name="12" id="12" placeholder="4,00" style="background: yellow;" class="form-control no-resize" onkeyup="cekjumlah12()" data-toggle="tooltip" data-placement="top" title="Isi dengan bilangan desimal : 1 - 4
                                        Contoh : 3.5 BUKAN 3,5"></td>
                                        <td></td>
                                        <td width="25%" rowspan="6"><textarea rows="14" name="" id="" placeholder="INFORMASI DARI BORANG" style="background: yellow;" class="form-control no-resize"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td width="45%">Tidak dipahami oleh seluruh sivitas akademika dan tenaga kependidikan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td width="45%">Kurang dipahami oleh  sivitas akademika  dan tenaga kependidikan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td width="45%">Dipahami dengan baik oleh sebagian  sivitas akademika dan tenaga kependidikan.</td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td width="45%">Dipahami dengan baik oleh seluruh sivitas akademika  dan tenaga kependidikan. </td>
                                        <td width="10%"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Nilai</td>
                                        <td width="10%"><div id="nilai12"><input type="text" name="12nilai" id="12nilai" placeholder="4,00" style="color:white; background: grey;" class="form-control no-resize"></div></td>
                                        <td></td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="6"><button type="button" class="btn btn-block btn-sm btn-success waves-effect">SUCCESS</button></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
        </div>
    </section>

    <script type="text/javascript">
        function cekjumlah11a(){
          var isi1 = $("#11a1").val();
          var isi2 = $("#11a2").val();
          var isi3 = $("#11a3").val();
          var isi4 = $("#11a4").val();
               if(isi4 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah11a/"+isi1+"/"+isi2+"/"+isi3+"/"+isi4,
                   success:function(data){
                       $("#skorakhir11a").html(data);
                       $("#nilai11a").html(data);
                   }
               });
               }
        }

        function cekjumlah11b(){
          var isi1 = $("#11b1").val();
          var isi2 = $("#11b2").val();
               if(isi2 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah11b/"+isi1+"/"+isi2,
                   success:function(data){
                       $("#skorakhir11b").html(data);
                       $("#nilai11b").html(data);
                   }
               });
               }
        }

        function cekjumlah12(){
          var isi1 = $("#12").val();
               if(isi1 !=''){
               $.ajax({
                   url:"<?php echo base_url()?>index.php/C_penilaian/cekjumlah12/"+isi1,
                   success:function(data){
                       $("#nilai12").html(data);
                   }
               });
               }
        }
    </script>

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


    <!-- TinyMCE -->
    <script src="<?php echo base_url();?>assets/plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/ui/tooltips-popovers.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/pages/forms/editors.js"></script> -->

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>

    <script type="text/javascript">
        
    </script>
</body>

</html>