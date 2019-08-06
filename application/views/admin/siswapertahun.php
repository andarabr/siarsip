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
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspData Siswa</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
                </div>

          <div class="box-body">
            <table id="xxxx" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%" id="myTable">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th width="30%">Nama</th>
                  <th width="12%">NISN</th>                  
                  <th width="">Jenis Kelamin</th>
                  <th width="">Tanggal Lahir</th>
                  <th width="13%">Tahun Masuk</th>
                  <th width="15%">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach($siswa as $list_siswa){ ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $list_siswa['nama'] ?></td>
                  <td><?php echo $list_siswa['id_siswa'] ?></td>
                  <td><?php echo $list_siswa['jk'] ?></td>
                  <td><?php echo $list_siswa['ttl'] ?></td>
                  <td><?php echo $list_siswa['th_masuk'] ?></td>
                  <td>
                    <a href="<?php echo base_url() ?>/admin/siswa/hapus_siswa/<?php echo $list_siswa['id_siswa'] ?>" class="btn btn-xs btn-danger demo-buku" data-toggle="confirmation">Hapus</a> 
                    <a href="<?php echo base_url() ?>/admin/siswa/edit_siswa/<?php echo $list_siswa['id_siswa'] ?>" class="btn btn-xs btn-warning demo-buku">Edit</a> 
                    <a href="<?php echo base_url() ?>/admin/siswa/detail_siswa/<?php echo $list_siswa['id_siswa'] ?>" class="btn btn-xs btn-success demo-buku">Detail</a> 
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
           <hr style="margin-bottom:10px"> <a style="float:right; margin-top:0px" href="<?php echo base_url();?>admin/Dashboard/grafik" class="btn btn-danger">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>





