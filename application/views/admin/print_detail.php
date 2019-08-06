<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Arsip Siswa</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assehts/img/hadoop.png" type="image/x-icon">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/datatables/datatables.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
  <body class="printbody" onload="window.print()">
  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <h2 style="text-align:center">DETAIL SISWA</h2><hr>

                    <?php foreach ($siswa as $list_siswa) { ?>
                        <form method="post" action="<?php echo base_url();?>/admin/siswa/update_siswa/<?php echo $list_siswa['id_siswa'] ?>">
                        <h4>1. Keterangan Pribadi</h4><hr>
                            <div class="form-group row">
                                <label  class="col-xs-2 col-form-label">NISN</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_siswa['id_siswa'];?>
                                </div>
                                <label  class="col-xs-2 col-form-label">NIS</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_siswa['nis'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-xs-2 col-form-label">Nama</label>
                                <div class="col-xs-4 col-md-4 col-xs-4 col-lg-4">
                                <p><?php echo $list_siswa['nama'];?></p>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label  class="col-xs-2 col-form-label">Tempat Lahir</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_siswa['tempat_lahir'];?>
                                </div>
                                <label  class="col-xs-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_siswa['ttl'];?>
                                </div>
                            </div>
                            <?php } ?>

                            <?php foreach ($ayah as $list_ayah) { ?>
                            <hr><h4>2. Keterangan Orang Tua</h4><hr>
                            <div class="form-group row">
                                <label  class="col-xs-2 col-form-label">Nama Ayah</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_ayah['nama'];?>
                                </div>
                                <label  class="col-xs-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_ayah['penghasilan'];?>
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label  class="col-xs-2 col-form-label">Pekerjaan</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_ayah['pekerjaan'];?>
                                </div>
                              
                            </div><hr> <?php } ?>
                            
                            
                            <?php foreach ($ibu as $list_ibu){ ?>
                            <div class="form-group row">
                                <label  class="col-xs-2 col-form-label">Nama Ibu</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_ibu['nama'];?>
                                </div>
                                <label  class="col-xs-2 col-form-label">Penghasilan/Bulan</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_ibu['penghasilan'];?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-xs-2 col-form-label">Pekerjaan</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_ibu['pekerjaan'];?>
                                </div>

                            </div><hr> <?php }?>

                            <?php foreach ($siswa as $list_siswa2){?>
                                <div class="form-group row">
                                <label  class="col-xs-2 col-form-label">Alamat Orang Tua</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $list_siswa2['alamat_ortu'];}?>
                                </div>
                            </div><hr>

                       
                       <h4>3. Keterangan Pendidikan</h4>    <hr>
                       <?php foreach ($ketr as $ketr){ ?>                         
                            <div>
                            <div class="form-group row">
                                <label  class="col-xs-2 col-form-label">Kelas</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $ketr['kelas'];?>                               
                                </div>
                                <label  class="col-xs-2 col-form-label">Tahun Masuk</label>
                                <div class="col-xs-4 col-md-4">
                                <?php echo $ketr['th_masuk'];?>                               
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-xs-2 col-form-label">Asal Sekolah</label>
                                <div class="col-xs-4">
                                <?php echo $ketr['asal_sekolah'];?>                               
                                </div>
                            </div><hr>
                       <?php } ?>
                        </div>

                        </form>
                    </div>
                </div>
  </body>


</html>