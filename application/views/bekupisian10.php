elseif ($isiannya==10) {
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
                        <h2 class="card-inside-title">Profil Mahasiswa dan Lulusan</h2>
                        <h2 class="card-inside-title">Tuliskan data seluruh mahasiswa reguler(1) dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:</h2>
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="kolom1_331" id="tin1" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">SIMPAN</button>
                        </form>
                            <?php
                                }
                        }