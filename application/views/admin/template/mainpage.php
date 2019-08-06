<div class="content-wrapper">
<section class="content-header">
    <h1>
      Grafik Siswa Tahunan
      <small></small>
    </h1>
  </section>

  <section class="context">
    <div class="col-md-12" >
        <div class="box box-success" style="min-height:75vh;">
            <div class="box-header with-border">
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspGrafik Siswa Tahunan</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
                  <a target="" href="<?php echo base_url();?>Admin/Dashboard/grafik" class="btn btn-primary pull-right" style="margin-right: 5px; margin-left: 5px;">Grafik Keseluruhan</a>
                   <a target="" href="<?php echo base_url();?>Admin/Dashboard/grafik2" class="btn btn-danger pull-right" style="margin-right: 5px; margin-left: 5px;">Grafik Jenis Kelamin</a>
            </div>
            <div class="box-body" id="div">
                <div class="row">
                    <div class="col-md-12 col-md-offset-1">
                        <form method="post" action="<?php echo base_url()?>admin/dashboard/showchart">
                        <div class="form-group row">
                                <label  class="col-sm-2 col-md-1 col-form-label">Tahun 1</label>
                                <div class="col-sm-10 col-md-3">
                                <select name="yearOne" class="form-control">
                                <option value=""></option>
                                  <?php
                                    foreach ($th_masuk as $th) {
                                      echo "<option value='" .$th->th_masuk. "'>" . $th->th_masuk . "</option>";
                                    }
                                  ?>
                                </select>                                
                                </div>
                                <label  class="col-sm-2 col-md-1 col-form-label">Tahun 2</label>
                                <div class="col-sm-10 col-md-3">
                                <select name="yearTwo" class="form-control">
                                <option value=""></option>
                                  <?php
                                    foreach ($th_masuk as $th) {
                                      echo "<option value='" .$th->th_masuk. "'>" . $th->th_masuk . "</option>";
                                    }
                                  ?>
                                </select>                              
                                </div>
                                <input class="btn btn-success" type="submit" value="Bandingkan" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  
  </section>


</div>