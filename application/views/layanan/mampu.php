 <!-- Begin Page Content -->
 <div class="container-fluid">
 <!-- Basic Card Example -->
              <div class="card shadow border-left-primary border-bottom-primary">
                <div class="card-header bg-primary py-3">
                  <h6 class="m-0 font-weight-bold text-white text-center"><?= $judul;?></h6>
                </div>
                <div class="card-body ">

            <!-- konfirmasi -->
          <div class="row">
            <div class="col-md-12">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>

                <!-- <div class="row">
                    <div class="col-md-12"> -->
                        <form action="<?= base_url('layanan/mampu') ?>" method="post">

                        <div class="row">
                            <div class="col-lg-6">
                        <!-- Default Card Example -->
                        <div class="card mb-4">
                            <div class="card-header bg-info text-white">
                            Form Input
                            </div>
                            <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nomor Surat</label>
                            <input type="text" class="form-control" name="nosurat">
                            <?= form_error('nosurat','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama">Tanggal Surat</label>
                            <input type="date" class="form-control" name="tglsurat">
                            <?= form_error('tglsurat','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    <div class="form-group">
                    <label for="nokk">Nama Penanggung Jawab</label>
                        <select name="nama" id="nama"  class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($tam as $tm): ?>
                                <option value="<?= $tm['id'] ?>"><?= $tm['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                    <!-- <label for="nip">Nama</label> -->
                        <select hidden name="nama2" id="nama2" class="form-control">
                            <option value="0"></option>                             
                        </select>
                        <?= form_error('nama2','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  

                    <div class="form-group">
                    <label for="nip">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control">
                            <option value="0"></option>                     
                        </select>
                        <?= form_error('jabatan','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                    <label for="nip">Alamat</label>
                        <input type="text" class="form-control" name="alamat_pej">
                        <?= form_error('alamat_pej','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                    <label for="nokk">Nama Penduduk</label>
                        <select name="penduduk" id="penduduk"  class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($tampil as $m): ?>
                                <option value="<?= $m['id'] ?>"><?= $m['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('penduduk','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>   

                    <div class="form-group">
                    <!-- <label for="nip">Nama Penduduk</label> -->
                        <select hidden name="napen" id="napen" class="form-control">
                            <option value="0"></option>                     
                        </select>
                        <?= form_error('napen','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>                   

                          
                    <div class="form-group">
                    <label for="nip">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control">
                            <option value="0"></option>                     
                        </select>
                        <?= form_error('jk','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>



                    </div>
                    </div>
                        </div>

                        <!-- penutup 1 -->

                            <div class="col-lg-6">
                        <!-- Default Card Example -->
                        <div class="card mb-4">
                        <div class="card-header bg-info text-white">
                            Form Input
                            </div>
                            <div class="card-body">

                     <div class="form-group">
                            <label for="golongan">Tempat Tanggal Lahir</label>
                            <input type="text" class="form-control" name="ttl">
                            <?= form_error('ttl','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>           

                       
                        

                        <div class="form-group">
                            <label for="golongan">Agama</label>
                            <input type="text" class="form-control" name="agama">
                            <?= form_error('agama','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                        <div class="form-group">
                            <label for="jabatan">Keluhan Tidak Mampu (Sebutkan Secara Rinci)</label>
                            <textarea class="form-control" name="alamat" rows="4"></textarea>
                            <?= form_error('alamat','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        
                        <div class="form-group">
                            <label for="golongan">Batas Tanggal Surat</label>
                            <input type="date" class="form-control" name="rt">
                            <?= form_error('rt','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
                        </div>

                            </div>
                        </div>
                        </div>
                        </div>

                        </form>
                    <!-- </div>
                </div>
                 -->
        

            </div>
      <!-- End of Main Content -->
      </div>
    </div>
</div>

