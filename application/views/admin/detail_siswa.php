<div class="content-wrapper">
<section class="content-header">
    <h1>
      MENEJEMEN SISWA
      <small></small>
    </h1>
  </section>

  <section class="context">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspDetail Data Siswa</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
            </div>
            <div class="box-body" id="div">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <?php foreach ($siswa as $list_siswa) { ?>
                        <form method="post" action="<?php echo base_url();?>/admin/siswa/update_siswa/<?php echo $list_siswa['id_siswa'] ?>">
                        <h4>1. Keterangan Pribadi</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">NISN</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['id_siswa'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['nis'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10 col-md-4">
                                <p><?php echo $list_siswa['nama'];?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10 col-md-1" style="padding-right:0px">
                                <?php echo $list_siswa['tempat_lahir'];?>,
                                </div>
                                <div class="col-sm-10 col-md-3" style="padding-left:0px">
                                <?php echo $list_siswa['ttl'];?>
                                </div>
                            </div>
                            <?php } ?>

                            <?php foreach ($ayah as $list_ayah) { ?>
                            <hr><h4>2. Keterangan Orang Tua</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ayah['nama'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ayah['penghasilan'];?>
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ayah['pekerjaan'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ayah['keterangan'];?>
                                </div>
                                                              
                            </div><hr> <?php } ?>
                            
                            
                            <?php foreach ($ibu as $list_ibu){ ?>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ibu['nama'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ibu['penghasilan'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ibu['pekerjaan'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_ibu['keterangan'];?>
                                </div>
                                
                            </div><hr> <?php }?>

                            <?php foreach ($siswa as $list_siswa2){?>
                                <div class="form-group row">
                                <label  class="col-xs-2 col-form-label">Alamat Orang Tua</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_siswa2['alamat_ortu'];}?>
                                </div>
                            </div>

                       
                       <hr><h4>3. Keterangan Pendidikan</h4>   <hr> 
                       <?php foreach ($ketr as $ketr){ ?>                         
                            <div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Kelas Sekarang</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $ketr['kelas'];?>                               
                                </div>
                                <label  class="col-sm-2 col-form-label">Kelas Masuk</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $ketr['kelas_masuk'];?>                               
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Asal Sekolah</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $ketr['asal_sekolah'];?> <?php echo $ketr['kabupaten'];?>                             
                                </div>
                                <label  class="col-sm-2 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $ketr['th_masuk'];?>                               
                                </div>
                            </div><hr>
                       <?php } ?>
                        </div>

                        </form>

                        <?php foreach($siswa as $list_siswaz){ ?>
                        <a style="float:right; margin-top:0px" href="<?php echo base_url();?>admin/siswa/print_detail/<?php echo $list_siswaz['id_siswa']; }?>" class="btn btn-danger">Cetak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  
  </section>


</div>