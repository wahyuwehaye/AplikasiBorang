<?php
  $CI =& get_instance();
  // $CI->load->model('M_uploadecxel');
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="col-sm-4">
            <h2>
                LIHAT ISIAN BUTIR BORANG
                <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
                <small><?php echo ucfirst($buku[0]['jenis'])." ".$buku[0]['fakpro']." - ".$buku[0]['tahun']." - Buku : ".$buku[0]['buku']; ?></small>
            </h2>
            </div>
            <div class="col-sm-8">
            <ol class="breadcrumb breadcrumb-col-deep-purple align-right">
                <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i> Home</a></li>
                <li><a href="<?php echo base_url();?>borang"><i class="material-icons">settings</i> Manage Borang</a></li>
                <li><a href="<?php echo base_url();?>butir/<?php echo $buku[0]['id']; ?>"><i class="material-icons">description</i> Butir Borang</a></li>
                <li><a href="<?php echo base_url();?>isian/<?php echo $butir[0]['id']; ?>"><i class="material-icons">description</i> Isian Butir</a></li>
                <li class="active"><i class="material-icons">book</i> Lihat Isian Butir</li>
            </ol>
            </div>
        </div>

        <!-- Hover Zoom Effect -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="info-box-2 bg-blue-grey hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="content">
                            <div class="text">DETAIL ISIAN</div>
                            <div class="number">BORANG <?php echo strtoupper($buku[0]['jenis']." ".$buku[0]['fakpro']); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- #END# Hover Zoom Effect -->

            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <?php
                            if (count($getalldata)>0) {
                                ?>
                                    <div>
                                        <h2 class="card-inside-title">Delete Buku : <a id="del" onclick="deleisi()" type="button" data-color="red" class="btn bg-red waves-effect btn-xs" data-toggle="tooltip" data-placement="top" title="Delete" href="javascript:void(0)"><i class="material-icons">delete_forever</i></a></h2>
                                    </div>
                                <?php
                                for($i=0;$i<count($getalldata);$i++){
                                    // $query = $CI->db->query("SELECT butir FROM butir WHERE id IN (SELECT id_butir FROM uploadisian WHERE id_butir = '".$getalldata[$i]['id_butir']."')");
                                    // $query = $CI->db->query("SELECT butir FROM butir WHERE id IN (SELECT id_butir FROM uploadisian WHERE id_butir = 1)");
                                    ?>
                                    <div>
                                        <!-- <b><?php echo $query; ?></b> -->
                                        <b><?php echo $getallbutir[$i]['butir']; ?> <?php echo $getallbutir[$i]['bakumutu']; ?></b>
                                        <p><?php echo $getalldata[$i]['isian']; ?></p>
                                    </div>
                                    <?php
                                }
                            } else{
                                ?>
                                    <div>
                                        <p>Belum ada Data</p>
                                    </div>
                                <?php
                            }
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->
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

    <!-- Sweet Alert Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- TinyMCE -->
    <script src="<?php echo base_url();?>assets/plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/pages/forms/editors.js"></script> -->

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>

    <script type="text/javascript">
        $(function () {
    //TinyMCE
    tinymce.init({
        selector: "textarea#tinymce",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = '<?php echo base_url();?>assets/plugins/tinymce';
});

    function deleisi(){
    var borang = "<?php echo $this->uri->segment(2, 0)?>";
    var delete_url = "<?php echo base_url(); ?>index.php/C_uploadexcel/destroybuku/"+1+"/"+borang;
    
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
    </script>
</body>

</html>