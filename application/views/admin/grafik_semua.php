<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      MENEJEMEN SISWA
      <small></small>
    </h1>
  </section>


  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">

                <div class="box-header with-border">
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspGrafik Keseluruhan</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
                </div>

          <div class="box-body">
          <div id="chart_div"></div> 

          <div style="margin:auto;width: 50%;padding: 10px;text-align: center;">
            <p>lihat semua siswa tahun : </p> <?php foreach($th_masuk as $th){ ?> <a class="btn btn-success" href="<?php echo base_url();?>/Admin/Dashboard/siswapertahun/<?php echo $th['th_masuk']?>"><?php echo $th['th_masuk']?></a>  <?php } ?>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>





