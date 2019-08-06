<div class="content-wrapper">
<section class="content-header">
    <h1>
      MENEJEMEN SISWA
      <small></small>
    </h1>
  </section>

  <section class="context" id="div">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspTambah Data Siswa</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
            </div>
            <div class="box-body" id="div">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <form method="post" action="<?php echo base_url();?>/admin/siswa/tambah_siswa">
                        <h4>1. Keterangan Pribadi</h4><hr>
                        <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">NISN</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="nisn" type="text" class="form-control" required>
                                </div>
                                <label  class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="nis" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                <input name="namasiswa" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                    <input type="radio" name="jksiswa" id="inlineRadio1" value="Laki-laki"> Laki-laki
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="jksiswa" id="inlineRadio2" value="Perempuan"> Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">TTL</label>
                                <div class="col-sm-10 col-md-2" style="padding-right:0px">
                                <input name="tempatlahir"  type="text" class="form-control">
                                </div>
                                <div class="col-sm-10 col-md-3" style="padding-left:0px">
                                <input name="ttlsiswa"  type="date" class="form-control">
                                </div>
                            </div>

                            <hr><h4>2. Keterangan Orang Tua</h4><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                <input name="namaayah" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="pekerjaanayah" type="text" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan</label>
                                <div class="col-sm-10 col-md-4">
                                <select name="penghasilanayah"  class="form-control">
                                    <option></option>
                                    <option value="Rp. 0 s/d Rp. 500.000,-">Rp. 0 s/d Rp. 500.000,-</option>
                                    <option value="Rp. 500.000,- s/d Rp. 1.000.000,-">Rp. 500.000,- s/d Rp. 1.000.000,-</option>
                                    <option value="Rp. 1.000.000,- s/d Rp. 3.000.000,-">Rp. 1.000.000,- s/d Rp. 3.000.000,-</option>
                                    <option value="Rp. 3.000.000,- s/d Rp. 5.000.000,-">Rp. 3.000.000,- s/d Rp. 5.000.000,-</option>
                                    <option value="Lebih Dari Rp. 5.000.000,-">Lebih Dari Rp. 5.000.000,-</option>
                                </select>
                                </div>
                            </div>
                             <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10 col-md-4">
                                <select name="ketrayah"  class="form-control">
                                    <option></option>
                                    <option value="Sudah Meninggal">Sudah Meninggal</option>
                                </select>
                                </div>                            
                            </div><hr>

                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                <input name="namaibu" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="pekerjaanibu" type="text" class="form-control">
                                </div>
                                <label  class="col-sm-2 col-form-label">Penghasilan</label>
                                <div class="col-sm-10 col-md-4">
                                <select name="penghasilanibu"  class="form-control">
                                    <option></option>
                                    <option value="Rp. 0 s/d Rp. 500.000,-">Rp. 0 s/d Rp. 500.000,-</option>
                                    <option value="Rp. 500.000,- s/d Rp. 1.000.000,-">Rp. 500.000,- s/d Rp. 1.000.000,-</option>
                                    <option value="Rp. 1.000.000,- s/d Rp. 3.000.000,-">Rp. 1.000.000,- s/d Rp. 3.000.000,-</option>
                                    <option value="Rp. 3.000.000,- s/d Rp. 5.000.000,-">Rp. 3.000.000,- s/d Rp. 5.000.000,-</option>
                                    <option value="Lebih Dari Rp. 5.000.000,-">Lebih Dari Rp. 5.000.000,-</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10 col-md-4">
                                    <select name="ketribu"  class="form-control">
                                        <option></option>
                                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                                    </select>
                                    </div>                            
                                </div><hr>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Alamat Orang Tua</label>
                                <div class="col-sm-10">
                                <textarea name="alamatortu" rows="3" class="form-control"> </textarea>
                                </div>
                            </div>
                            <hr>
                      
                            <h4>3. Keterangan Pendidikan</h4>                            <hr>
                            <div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Kelas Masuk</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="kelasmasuk" type="text" class="form-control">                   
                                </div>
                                <label  class="col-sm-2 col-form-label">Kelas Sekarang</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="kelas" type="text" class="form-control">                   
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="thmasuk" type="number" min="1900" max="<?php echo date('Y')?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Asal Sekolah</label>
                                <div class="col-sm-10 col-md-4" style="padding-right:0px">
                                <input name="asalsekolah"  type="text" class="form-control">
                                </div>
                                <div class="col-sm-10 col-md-4" style="padding-left:0px">
                                <select name="kabupaten"  class="form-control">
                                    <option></option>
                                    <option value="Seluma">Seluma</option>
                                    <option value="Bengkulu Selatan">Bengkulu Selatan</option>
                                    <option value="Bengkulu Tengah">Bengkulu Tengah</option>
                                    <option value="Bengkulu Utara">Bengkulu Utara</option>
                                    <option value="Kaur">Kaur</option>
                                    <option value="Kepahiang">Kepahiang</option>
                                    <option value="Lebong">Lebong</option>
                                    <option value="Rejang Lebong">Rejang Lebong</option>
                                    <option value="Muko-Muko">Muko-Muko</option>
                                    <option value="Kota Bengkulu">Kota Bengkulu</option>
                                </select>
                                </div>
                                </div>
                            <hr>
                        </div>
                            
                            <button type="submit" style="float:right; " class="btn btn-info btn-lg"> Simpan </button>
                            <button type="reset" style="float:right; margin-right:20px;" class="btn btn-danger btn-lg"> Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  
  </section>


</div>